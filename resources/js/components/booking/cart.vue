<template>
    <div>

      <div class="form-group">
        <div class="row">
          <div class="col-md-12">
            <ul class="list-group">
              <li class="list-group-item disabled active">Courses</li>
              <li v-for="course in courses" class="list-group-item">
                <div class="row">
                  <div v-if="options[course.alias].weeks" class="col-8">
                    {{ course.location }} | 
                    {{ course.course }} | 
                    {{ course.option }} | {{ options[course.alias].weeks }} week(s)
                    <span v-if="students>1"> x {{ students }} Students</span>
                  </div>
                  <div v-else class="col-8">
                    {{ course.location }} | {{ course.course }} | {{ course.option }}

                    <span v-if="students>1"> x {{ students }} Students</span>
                  </div>

                  <div class="col-4 text-right">
                    
                    <span v-if="course.plus && options[course.alias].weeks">
                      US$ {{ course.price * students }}$ + 
                      US$ {{ course.plus * options[course.alias].weeks * students }}
                    </span>
                    <span v-else-if="options[course.alias].weeks">
                      US$ {{ course.price * options[course.alias].weeks * students }}
                    </span>
                    <span v-else>US$ {{ course.price * students }}</span>

                  </div>
                </div>
                
              </li>
              <li class="list-group-item disabled active">Accommodation</li>
              <li class="list-group-item" v-for="accommodation in priceaccommodation">
                <div class="row">
                  <div class="col-8" >{{ accommodation.name }}</div>
                  <div class="col-4 text-right" >US$ {{ accommodation.price }}</div>
                </div>
              </li>
              <li class="list-group-item" v-if="priceaccommodation.length==0">
                <div class="row">
                  <div class="col-8" >--</div>
                  <div class="col-4 text-right">US$ 0</div>
                </div>
              </li>
              <li class="list-group-item disabled active">Tax</li>
              <li class="list-group-item">

                <div class="row">
                  <div class="col-8">* Education in Ecuador does not charge taxes</div>
                  <div class="col-4 text-right">US$ 0</div>
                </div>

              </li>
              <li class="list-group-item">

                <div class="row">
                  <div class="col-8">Registration Fee<span v-if="students>1"> x {{ students }} Students</span></div>
                  <div class="col-4 text-right">US$ {{ 40 * students }}</div>
                </div>

              </li>
              <li class="list-group-item disabled">---</li>
              <li class="list-group-item">

                <div class="row">
                  <div class="col-8"><strong>Total:</strong></div>
                  <div class="col-4 text-right">USD$ {{ coursePrice }}</div>
                </div>

              </li>

            </ul>
          </div>
        </div>
      </div>
      
      
      <div class="row justify-content-between">
        <div class="col-4">
          <button v-on:click="previous" type="button" class="btn btn-primary">Previous</button>
        </div>
        <div class="col-4 text-right">
          <button v-on:click="validate" type="button" class="btn btn-primary">
            Continue
            <div class="spinner-grow spinner-grow-sm" role="status" v-if="loading">
                <span class="sr-only">Loading...</span>
            </div>
          </button>
        </div>
      </div>
        


    </div>
</template>

<script>
    export default {
        props: ['options','priceaccommodation', 'students'],
        data () {
            return {
                courses: [],
                loading: false,
                errors: []
            }
        },
        watch: {
            options: function(newVal, oldVal) {
              var optionsId=[];
                for (const prop in newVal) {
                  optionsId.push(newVal[prop].id);
                }
                axios
                .post('/cartSummary',{
                    options: optionsId
                })
                .then(
                    (response) => {
                        this.courses = response.data;
                    }
                )
                .catch(
                    error => {
                      this.errors = response.data;
                    }
                );
            }
        },
        methods: {
            previous(){
                $('#collapseSeven').collapse('show');
            },
            validate(){
                $('#collapseNine').collapse('show');
            }
        },
        computed: {
          coursePrice() {
            var x=0;
            var op = this.options;
            var stdnts = parseInt(this.students);
            this.courses.forEach(function(course) {
              if(course.plus && op[course.alias].weeks)
                x = x + (course.price+course.plus * op[course.alias].weeks) * stdnts;
              else if(op[course.alias].weeks)
                x = x + (course.price * op[course.alias].weeks) * stdnts;
              else
                x = x + course.price * stdnts;
            });
            if(this.priceaccommodation[0])
              x = x + this.priceaccommodation[0].price;
            if(this.priceaccommodation[1])
              x = x + this.priceaccommodation[1].price;
            x = x + (40 * stdnts);
            this.$emit('total-ready', x);
            return x;
          }
        }
    }
</script>
