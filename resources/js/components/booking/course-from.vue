<template>
    <div>

        <div class="form-group">
            
            <ul class="list-group">
                <li class="list-group-item" v-for="(location, index) in optionLocationCourse">

                    <div class="form-group">
                        <label><strong>Course</strong></label>
                        <span class="form-control-plaintext">{{ location.locationName }} | {{ location.courseName }} | {{ location.name }} </span>
                    </div>

                    <div class="form-group">
                        <label><strong>Price</strong></label>
                        <span v-if="location.price_plus && location.available_change" class="form-control-plaintext">
                            {{ location.price }}$ <span v-if="options[location.alias].weeks">+ {{ location.price_plus * options[location.alias].weeks }}$ </span> per Student
                        </span>
                        <span v-else-if="!location.available_change" class="form-control-plaintext">
                          {{ location.price }}$ per Student
                        </span>
                        <span v-else class="form-control-plaintext">
                          {{ (location.price *  options[location.alias].weeks) }}$ per Student
                        </span>
                        
                    </div>

                    <div class="form-group">
                        <label v-bind:for="'date'+location.alias" ><strong>From</strong></label>

                        <datepicker 
                        placeholder="Select Date" 
                        v-model="dates[location.alias]"
                        :name = "location.alias"
                        :id="'date'+location.alias"
                        :bootstrap-styling="true"
                        format="yyyy-MMM-dd"
                        :input-class="{ 'is-invalid':errors[location.alias] }"
                        :wrapper-class="{'form-control is-invalid':errors[location.alias]}"></datepicker>
                        <div class="invalid-feedback" v-if="errors[location.alias]">
                            {{ errors[location.alias] }}
                        </div>

                    </div>

                    <div class="form-group">
                        <label v-bind:for="'comment'+location.alias" ><strong>Comments</strong></label>
                        <textarea class="form-control" v-bind:id="'comment'+location.alias" v-model="comments[location.alias]" :name="location.alias + 'comments'"  placeholder="Special Notes"></textarea>
                    </div>

                </li>
            </ul>

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
        props: ['options'],
        data () {
            return {
                optionLocationCourse: [],
                errors: [],
                dates:{},
                comments:{},
                loading:false
            }
        },
        mounted() {

        },
        watch: {
            options: function(newVal, oldVal) {
                axios
                .post('/optionLocationCourse',{
                    options: newVal
                })
                .then(
                    (response) => {
                        this.optionLocationCourse=response.data;
                    }
                )
                .catch(
                    error => {
                        this.errors=error.response.data.message;
                    }
                );
            },
            dates: function(newVal, oldVal){
                this.errors=[];
            }
        },
        methods: {
            previous(){
                $('#collapseThree').collapse('show');
                $('#collapseFour').collapse('hide');
            },
            validate(){
                this.loading=true;
                var validateCourse = true;
                var datesCourses = this.dates;
                for (const prop in this.optionLocationCourse){
                    if(!datesCourses[this.optionLocationCourse[prop].alias]) {
                        this.errors[this.optionLocationCourse[prop].alias]='The date is requiered';
                        validateCourse=false;
                    }
                }

                if(validateCourse){
                    this.$emit('dates-ready', this.dates);
                    this.$emit('comments-ready', this.comments);
                    this.loading=false;
                    this.errors=[];
                }
                else{
                    this.loading=false;
                }
            }
            
        }
    }
</script>
