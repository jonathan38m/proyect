<template>
    <div>
        <div v-if="errors.options" class="alert alert-danger">
            <ul>
                <li>{{ errors.options[0] }}</li>
            </ul>
        </div>
        <div v-for="course in coursesOptions" class="form-group">
            <h4 v-if="course.options.length > 0">{{ course.name }} - {{ course.location.name }}</h4>
            <h4 v-else>{{ course.name }} - {{ course.location.name }}</h4>


            <div class="card" v-if="course.options.length > 0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" v-for="option in course.options">

                        <div class=" form-inline ">

                            <div class="custom-control custom-switch col-8">
                                <input type="checkbox" v-bind:id="option.alias" v-model="value" :name="option.alias" v-bind:value="option" class="custom-control-input" />
                                
                                <label v-if="option.price_plus && option.available_change" class="custom-control-label" v-bind:for="option.alias">
                                    {{ option.name }} {{ option.price }}$ / {{ option.price }}$ +  
                                    <span v-if="option.weeks>0 && value.some(value => value.id === option.id)">
                                        {{ option.price_plus * option.weeks }}$
                                    </span>
                                    <span v-else>
                                        0$
                                    </span>
                                </label>

                                <label v-else-if="!option.available_change" class="custom-control-label" v-bind:for="option.alias">
                                    {{ option.name }} {{ option.price }}$
                                </label>

                                <label v-else class="custom-control-label" v-bind:for="option.alias">
                                    {{ option.name }} {{ option.price }}$ /  
                                    <span v-if="option.weeks>0 && value.some(value => value.id === option.id)">
                                        {{ option.price * option.weeks }}$
                                    </span>
                                </label>


                            </div>

                            <div class="col-4" v-if="value.some(value => value.id === option.id) && option.available_change">

                                <select class="form-control " :class="{ 'is-invalid':errors[option.alias] }" v-model="option.weeks" :name="option.alias + 'weeks'">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                </select>
                                <div class="invalid-feedback" v-if="errors[option.alias]">
                                    {{ errors[option.alias][0] }}
                                </div>
                                 - weeks 
                            </div>
                            
                        </div>

                    </li>
                </ul>
            </div>
            <div class="card" v-else>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">

                        Not available

                    </li>
                </ul>
            </div>



        </div>


      
      <div class="row justify-content-between">
        <div class="col-4">
          <button v-on:click="previous" type="button" class="btn btn-primary">Previous</button>
        </div>
        <div class="col-4 text-right">
          <button v-on:click="validate" type="button" class="btn btn-primary">Continue</button>
        </div>
      </div>



    </div>
</template>

<script>
    export default {
        props: ['courses'],
        data () {
            return {
                coursesOptions: [],
                value: [],
                options: [],
                errors: {}
            }
        },
        mounted() {
        },
        watch: {
            courses: function(newVal, oldVal) {
                axios
                .post('/coursesOptions',{
                    courses: newVal,
                })
                .then(
                    (response) => {
                        this.coursesOptions=response.data;
                        this.value=[];
                    }
                )
                .catch(
                    error => {
                        this.errors=error.response.data.errors.courses;
                    }
                );
            },
            value: function(newVal, oldVal){
                this.errors={};
            }
        },
        methods: {
            previous(){
                $('#collapseTwo').collapse('show');
                $('#collapseThree').collapse('hide');
            },
            validate(){






                var validations_array = [];
                var validate_almost_a_options = false;

                for (var i = 0; i < this.coursesOptions.length; i++) {

                  validate_almost_a_options = false;
                  
                  for (var j = 0; j < this.coursesOptions[i].options.length; j++) {

                    for (var k = 0; k < this.value.length; k++) {

                      if(this.coursesOptions[i].options[j].id == this.value[k].id){

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

                  var w = {};
                  var weeekMayor=true;
                  this.value.forEach(function(option){
                      w[option['alias']]={};
                      if(option.weeks)
                          w[option['alias']].weeks=option.weeks;
                      w[option['alias']].id=option.id;
                  });
                  const params = {
                      options: w
                  };
                  axios
                  .post('/optionsValidate',params)
                  .then(
                      (response) => {

                          $('#collapseFour').collapse('show');
                          this.errors={};
                          this.$emit('option-ready', w);
                      }
                  )
                  .catch(
                      error => {
                          this.loading = false;
                          if(error.response.data)
                          {
                              var err={};
                              for (const prop in error.response.data.errors) {
                                  if(prop==='options')
                                      err[prop]=error.response.data.errors[prop];
                                  else
                                      err[prop.split('.')[1]]=error.response.data.errors[prop];
                                  
                              }
                              this.errors=err;
                          }
                      }
                  ); 
                
                }
                else{

                  this.errors={ 'options' :  ['You must select at least one course from each location']};
                  this.loading = false;
                  $('html, body').animate({
                    scrollTop: $("#collapseThree").offset().top
                  }, 800, function(){
                    window.location.hash = "#collapseThree";
                  });
                }

                        
                
            }
            
        }
    }
</script>
