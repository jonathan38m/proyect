<div class="card">

            <div class="card-header" id="headingSix">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        {{ __('booking.billing-information') }}
                    </button>
                </h2>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                <div class="card-body">

                    <billing-details 
                    v-bind:locations="locations"
                    v-on:information="information=$event"
                    inline-template  >

                        <div>
                      
                            <div class="form-group row">

                                    <div class="col-md-6">
                                        <label>*Title</label>
                                        <div class="form-control" :class="{ 'is-invalid':errors.title }">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="title1" name="title" v-model="title" class="custom-control-input" value="1">
                                                <label class="custom-control-label" for="title1">{{ __('booking.mr') }}</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="title2" name="title" v-model="title" class="custom-control-input" value="2">
                                                <label class="custom-control-label" for="title2">{{ __('booking.mrs') }}</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="title3" name="title" v-model="title" class="custom-control-input" value="3">
                                                <label class="custom-control-label" for="title3">{{ __('booking.miss') }}</label>
                                            </div>
                                        </div>
                                        <div class="invalid-feedback" v-if="errors.title">
                                            @{{ errors.title[0] }}
                                        </div>
                                    </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="lname">*{{ __('booking.last-name') }}</label>
                                    <input type="text" 
                                    class="form-control" 
                                    :class="{ 'is-invalid':errors.lname }"
                                    id="lname"
                                    v-model="lname"
                                    name="lname"
                                    placeholder="{{ __('booking.last-name') }}">
                                    <div class="invalid-feedback" v-if="errors.lname">
                                        @{{ errors.lname[0] }}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="fname">*{{ __('booking.first-name') }}</label>
                                    <input 
                                    type="text" 
                                    class="form-control" 
                                    :class="{ 'is-invalid':errors.fname }"
                                    id="fname" 
                                    v-model="fname"
                                    name="fname" 
                                    placeholder="{{ __('booking.first-name') }}">
                                    <div class="invalid-feedback" v-if="errors.fname">
                                        @{{ errors.fname[0] }}
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="email">*{{ __('booking.email') }}</label>
                                    <input type="email" 
                                    class="form-control"
                                    :class="{ 'is-invalid':errors.email }"
                                    id="email" 
                                    v-model="email"
                                    name="email" 
                                    placeholder="{{ __('booking.email') }}">
                                    <div class="invalid-feedback" v-if="errors.email">
                                        @{{ errors.email[0] }}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="country">*{{ __('booking.country') }}</label>
                                    <select 
                                    class="form-control"
                                    :class="{ 'is-invalid':errors.country }" 
                                    id="country" 
                                    v-model="country"
                                    name="country" 
                                    required >
                                        <option v-for="country in countries" :value="country.id">@{{ country.name }} - @{{ country.code }}</option>
                                        
                                    </select>
                                    <div class="invalid-feedback" v-if="errors.country">
                                        @{{ errors.country[0] }}
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="address">*{{ __('booking.address') }}</label>
                                    <input type="text" 
                                    class="form-control"
                                    :class="{ 'is-invalid':errors.address }"
                                    id="address" 
                                    v-model="address"
                                    name="address" 
                                    placeholder="{{ __('booking.address') }}">
                                    <div class="invalid-feedback" v-if="errors.address">
                                        @{{ errors.address[0] }}
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="city">*{{ __('booking.city') }}</label>
                                    <input type="text" 
                                    class="form-control"
                                    :class="{ 'is-invalid':errors.city }"
                                    id="city"
                                    v-model="city"
                                    name="city" 
                                    placeholder="{{ __('booking.city') }}">
                                    <div class="invalid-feedback" v-if="errors.city">
                                        @{{ errors.city[0] }}
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

                    </billing-details>

                </div>
            </div>
            
        </div>