<template>
    <div>

        <div v-if="errors.length>0" class="alert alert-danger">
            <ul>
                <li v-for="error in errors">{{ error }}</li>
            </ul>
        </div>

        <div v-for="location in locationsCourses" class="form-group">
            <h4 v-if="location.courses.length > 0">{{ location.name }}</h4>

            <div class="card" v-if="location.courses.length > 0">
                <ul class="list-group list-group-flush">
                    <label
                    class="list-group-item list-group-item-action"
                    v-for="course in location.courses"
                    :for="course.alias">

                        <div class="form-inline">

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" v-bind:id="course.alias" :name="course.alias" v-model="value" v-bind:value="course.id" class="custom-control-input" />
                                <label v-bind:for="course.alias" class="custom-control-label">
                                    {{ course.name }}
                                </label>
                            </div>
                            
                        </div>

                    </label>
                </ul>
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
        props: ['locations'],
        data () {
            return {
                locationsCourses: [],
                value: [],
                options: [],
                errors: [],
                loading: false
            }
        },
        mounted() {
        },
        watch: {
            locations: function(newVal, oldVal) {
                this.loading = true;
                axios
                .post('/coursesLocation',{
                    locations: newVal,
                    students: 1
                })
                .then(
                    (response) => {
                        this.locationsCourses=response.data;

                        var coursesTest=[];
                        this.locationsCourses.forEach(function(location){
                            location['courses'].forEach(function(course){
                                coursesTest.push(course['id'])
                            });
                        });
                        if(this.value.length>0)
                        {
                            var test = this.value;
                            var newValue=[];
                            test.forEach(function(courseValido,index){
                                var exist=0;
                                coursesTest.forEach(function(item){
                                    if(courseValido==item)
                                        newValue.push(item);
                                });
                            });
                            this.value=newValue;

                        }
                        this.loading = false;
                    }
                )
                .catch(
                    error => {
                        if(error.response.data.errors){
                          this.errors=error.response.data.errors;
                        }
                        else{
                          this.errors=error.response.data.message; 
                        }
                        this.loading = false;
                    }
                );
            }
        },
        methods: {
            previous(){
                $('#collapseOne').collapse('show');
                $('#collapseTwo').collapse('hide');
            },
            validate(){
                this.loading = true;
                var validations_array = [];
                var validate_almost_a_options = false;

                for (var i = 0; i < this.locationsCourses.length; i++) {

                  validate_almost_a_options = false;
                  
                  for (var j = 0; j < this.locationsCourses[i].courses.length; j++) {

                    for (var k = 0; k < this.value.length; k++) {

                      if(this.locationsCourses[i].courses[j].id == this.value[k]){

                        validate_almost_a_options = true;
                        break;

                      }

                    }

                  }

                  validations_array.push(validate_almost_a_options);

                }
                for (var i = 0; i < validations_array.length; i++) {

                  if(!validations_array[i]) validate_almost_a_options=false;

                }

                if(validate_almost_a_options){

                  const params = {
                      courses: this.value
                  };
                  axios
                  .post('/coursesValidate',params)
                  .then(
                      (response) => {
                          $('#collapseThree').collapse('show');
                          this.$emit('course-ready', this.value);
                          this.errors='';
                          this.loading = false;
                      }
                  )
                  .catch(
                      error => {
                          if(error.response.data.errors.courses){
                            this.errors=error.response.data.errors.courses;
                          }
                          else{
                            this.errors=error.response.data.message; 
                          }
                          this.loading = false;
                      }
                  );

                }
                else
                {
                  this.errors=['You must select at least one course from each location'];
                  this.loading = false;
                  $('html, body').animate({
                    scrollTop: $("#collapseTwo").offset().top
                  }, 800, function(){
                    window.location.hash = "#collapseTwo";
                  });
                }


                  
            }
            
        }
    }
</script>
