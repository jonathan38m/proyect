<transition name="fade">
        <div class="card" v-if="locations.includes('1') || locations.includes('2') || locations.includes('3')" >
            <div class="card-header" id="headingFive">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        {{ __('booking.accommodation') }}
                    </button>
                </h2>
            </div>
            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                <div class="card-body">
                    <accommodation 
                    v-bind:locations="locations" 
                    v-on:accommodation-ready="priceaccommodation=$event" 
                    v-on:accommodation-option-ready="accommodation=$event" 
                    inline-template>

                      <div>
                        
                        <div v-if="locations.includes('1') || locations.includes('2')">


                            <h4>Quito or Otavalo</h4>

                            <div v-if="errors.length>0" class="alert alert-danger">
                                <ul>
                                    <li v-for="error in errors">@{{ error }}</li>
                                </ul>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="startDate">{{ __('booking.check-in') }}</label>

                                    <datepicker 
                                    placeholder="Select Date" 
                                    v-model="startDate"
                                    name="startDate"
                                    id="startDate"
                                    format="yyyy-MMM-dd"
                                    :bootstrap-styling="true"
                                    :input-class="{ 'is-invalid':errors.startDate }"
                                    :wrapper-class="{'form-control is-invalid':errors.startDate}"></datepicker>
                                    <div class="invalid-feedback" v-if="errors.startDate">
                                        @{{ errors.startDate[0] }}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="endDate">{{ __('booking.check-out') }}</label>

                                    <datepicker 
                                    placeholder="Select Date" 
                                    v-model="endDate"
                                    name="endDate"
                                    id="endDate"
                                    format="yyyy-MMM-dd"
                                    :bootstrap-styling="true"
                                    :input-class="{ 'is-invalid':errors.endDate }"
                                    :wrapper-class="{'form-control is-invalid':errors.endDate}"></datepicker>
                                    <div class="invalid-feedback" v-if="errors.endDate">
                                        @{{ errors.endDate[0] }}
                                    </div>


                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label>{{ __('booking.accommodation') }}</label>
                                    <div class="card">
                                        <ul class="list-group list-group-flush">
                                            <label for="hostFamily" class="list-group-item list-group-item-action">

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="hostFamily" v-model="accommodation" value="1"
                                                     class="custom-control-input"
                                                     name="accommodation"
                                                     :class="{ 'is-invalid':errors.accommodation }"
                                                     />
                                                    <label for="hostFamily" class="custom-control-label">
                                                        {{ __('booking.host-family') }}
                                                    </label>
                                                </div>

                                            </label>
                                            <label for="studentResidence" class="list-group-item list-group-item-action">

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="studentResidence" v-model="accommodation" value="2"
                                                     class="custom-control-input" 
                                                     name="accommodation"
                                                     :class="{ 'is-invalid':errors.accommodation }"
                                                     />
                                                    <label for="studentResidence" class="custom-control-label">
                                                        {{ __('booking.student-residence') }}
                                                    </label>
                                                </div>

                                            </label>
                                            <label for="wishAccommodation" class="list-group-item list-group-item-action">

                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="wishAccommodation" v-model="accommodation" value="3"
                                                     class="custom-control-input" 
                                                     name="accommodation"
                                                     :class="{ 'is-invalid':errors.accommodation }"
                                                     />
                                                    <label for="wishAccommodation" class="custom-control-label">
                                                        {{ __('booking.wish-organize') }}
                                                    </label>
                                                    <div class="invalid-feedback" v-if="errors.accommodation">
                                                      @{{ errors.accommodation[0] }}
                                                    </div>
                                                </div>

                                            </label>
                                        </ul>
                                    </div>


                                </div>
                                <div class="col-md-6">
                                    <label>{{ __('booking.fill-field') }}</label>
                                    <div class="card">
                                        <ul class="list-group list-group-flush">
                                            <transition name="fade">
                                                <li class="list-group-item" v-if="accommodation==1">

                                                    <div class="row">
                                                        <label for="mealsDay" class="col-sm-4 col-form-label">{{ __('booking.meals-day') }}</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control" id="mealsDay" v-model="meals" name="meals" :class="{ 'is-invalid':errors.meals }" >
                                                                <option value="1">{{ __('booking.meals-day-1') }}</option>
                                                                <option value="2" v-if="locations.includes('2')">{{ __('booking.meals-day-2') }}</option>
                                                            </select>
                                                            <div class="invalid-feedback" v-if="errors.meals">
                                                              @{{ errors.meals[0] }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                            </transition>
                                            <transition name="fade">
                                                <li class="list-group-item" v-if="accommodation==1">

                                                    <div class="row">
                                                        <label for="bathroom" class="col-sm-4 col-form-label">{{ __('booking.bathroom') }}</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control" id="bathroom" v-model="bathroom" name="bathroom" :class="{ 'is-invalid':errors.bathroom }" >
                                                                <option value="1" v-if="accommodation==1">{{ __('booking.bathroom-1') }}</option>
                                                                <option value="2" v-if="meals==1">{{ __('booking.bathroom-2') }}</option>
                                                            </select>
                                                            <div class="invalid-feedback" v-if="errors.bathroom">
                                                              @{{ errors.bathroom[0] }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                            </transition>
                                            <transition name="fade">
                                                <li class="list-group-item" v-if="accommodation!=3">

                                                    <div class="row">
                                                        <label for="manyPeople" class="col-sm-4 col-form-label">{{ __('booking.many-people') }}</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control" id="manyPeople" v-model="people" name="people" :class="{ 'is-invalid':errors.people }" >
                                                                <option value="1">{{ __('booking.many-people-1') }}</option>
                                                                <option value="2">{{ __('booking.many-people-2') }}</option>
                                                                <option value="2">{{ __('booking.many-people-3') }}</option>
                                                                <option value="3">{{ __('booking.many-people-4') }}</option>
                                                                <option value="4">{{ __('booking.many-people-5') }}</option>
                                                            </select>
                                                        <div class="invalid-feedback" v-if="errors.people">
                                                          @{{ errors.people[0] }}
                                                        </div>
                                                        </div>
                                                    </div>

                                                </li>
                                            </transition>
                                            <transition name="fade">
                                                <li class="list-group-item" v-if="accommodation!=3">

                                                    <div class="row">
                                                        <label for="typeRoom" class="col-sm-4 col-form-label">{{ __('booking.type-room') }}</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control" id="typeRoom" v-model="type" name="type" :class="{ 'is-invalid':errors.type }" >
                                                                <option value="1">{{ __('booking.type-room-1') }}</option>
                                                                <option value="2">{{ __('booking.type-room-2') }}</option>
                                                                <option value="3" v-if="accommodation==2">{{ __('booking.type-room-3') }}</option>
                                                            </select>
                                                        <div class="invalid-feedback" v-if="errors.type">
                                                          @{{ errors.type[0] }}
                                                        </div>
                                                        </div>
                                                    </div>

                                                </li>
                                            </transition>
                                            <transition name="fade">
                                                <li class="list-group-item" v-if="accommodation==3">

                                                    <div class="row">
                                                        <label for="nameHotel" class="col-sm-4 col-form-label">* {{ __('booking.name-hotel') }}</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="nameHotel" class="form-control" 
                                                            :class="{ 'is-invalid':errors.nameHotel }"
                                                            v-model="nameHotel"
                                                            id="nameHotel" placeholder="{{ __('booking.name-hotel-placeholder') }}">
                                                            <div class="invalid-feedback" v-if="errors.nameHotel">
                                                              @{{ errors.nameHotel[0] }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                            </transition>
                                            <transition name="fade">
                                                <li class="list-group-item" v-if="accommodation==3">

                                                    <div class="row">
                                                        <label for="addressAccommodation" class="col-sm-4 col-form-label">* {{ __('booking.address-accommodation') }}</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" 
                                                            name="addressHotel" 
                                                            class="form-control"
                                                            :class="{ 'is-invalid':errors.addressHotel }"
                                                            v-model="addressHotel" 
                                                            id="addressAccommodation" 
                                                            placeholder="{{ __('booking.address-accommodation-placeholder') }}">
                                                            <div class="invalid-feedback" v-if="errors.addressHotel">
                                                              @{{ errors.addressHotel[0] }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                            </transition>
                                            <transition name="fade">
                                                <li class="list-group-item" v-if="accommodation==3">

                                                    <div class="row">
                                                        <label for="phoneAccommodation" class="col-sm-4 col-form-label">* {{ __('booking.phoneAccommodation') }}</label>
                                                        <div class="col-sm-8">
                                                            <input type="number" 
                                                            name="phoneHotel" 
                                                            class="form-control" 
                                                            :class="{ 'is-invalid':errors.phoneHotel }"
                                                            v-model="phoneHotel"
                                                            id="phoneAccommodation" 
                                                            placeholder="{{ __('booking.phoneAccommodation-placeholder') }}">
                                                            <div class="invalid-feedback" v-if="errors.phoneHotel">
                                                              @{{ errors.phoneHotel[0] }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                            </transition>
                                        </ul>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <div v-if="locations.includes('3')">
                        
                          <div>
                              <h4>Amazon</h4>
                              <div class="row">
                                <div class="col-10">
                                  <label for="weekendsAmazon">
                                    If you would like to stay in the Amazon Eco-Lodge during the weekend you can include it here:
                                  </label>
                                </div>
                                <div class="col-2">
                                  <select class="form-control " name="weekendsAmazon" id="weekendsAmazon" v-model="weekendsAmazon">
                                    <option>0</option>
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
                                </div>
                              </div>
                              
                          </div>

                        </div>

                        <h4>
                          Total: USD$ @{{ price * people * days + 220 * weekendsAmazon }}
                        </h4>

    
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

                    </accommodation>
                </div>
            </div>
        </div>
        </transition>