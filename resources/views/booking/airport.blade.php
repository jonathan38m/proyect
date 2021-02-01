<div class="card">
            <div class="card-header" id="headingSeven">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        {{ __('booking.airportInformation') }}
                    </button>
                </h2>
            </div>
            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                <div class="card-body">

                    <airport-information
                    v-on:airport="airport=$event" 
                    inline-template >

                        <div>
                      
                            <div class="form-group row">

                                    <div class="col-md-12">
                                        <label>*{{ __('booking.meet-airport') }}</label>
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" value="1"
                                            class="custom-control-input" 
                                            :class="{ 'is-invalid':errors.meetAirport }"
                                            id="meetAirport"
                                            name="meetAirport"
                                            v-model="meetAirport">
                                            <label class="custom-control-label" for="meetAirport">@{{ meetAirport ? 'Yes' : 'No' }}</label>

                                            <div class="invalid-feedback" v-if="errors.meetAirport">
                                                @{{ errors.meetAirport[0] }}
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div v-if="meetAirport">

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="dateArrival">*{{ __('booking.dateArrival') }}</label>
                                        <datepicker 
                                        placeholder="Select Date" 
                                        v-model="dateArrival"
                                        name="startDate"
                                        format="yyyy-MMM-dd"
                                        :bootstrap-styling="true"
                                        :input-class="{ 'is-invalid':errors.dateArrival }"
                                        :wrapper-class="{'form-control is-invalid':errors.dateArrival}"></datepicker>
                                        <div class="invalid-feedback" v-if="errors.dateArrival">
                                            @{{ errors.dateArrival[0] }}
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="timeArrival">*{{ __('booking.timeArrival') }}</label>
                                        <input 
                                        type="time" 
                                        class="form-control" 
                                        :class="{ 'is-invalid':errors.timeArrival }"
                                        id="timeArrival" 
                                        v-model="timeArrival"
                                        name="timeArrival"
                                        placeholder="{{ __('booking.timeArrival') }}">
                                        <div class="invalid-feedback" v-if="errors.timeArrival">
                                            @{{ errors.timeArrival[0] }}
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="airlineCompany">* {{ __('booking.airlineCompany') }}</label>
                                        <input type="text" 
                                        class="form-control"
                                        :class="{ 'is-invalid':errors.airlineCompany }"
                                        id="airlineCompany" 
                                        v-model="airlineCompany"
                                        name="airlineCompany" 
                                        placeholder="{{ __('booking.airlineCompany') }}">
                                        <div class="invalid-feedback" v-if="errors.airlineCompany">
                                            @{{ errors.airlineCompany[0] }}
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="flightNumber">* {{ __('booking.flightNumber') }}</label>
                                        <input type="text" 
                                        class="form-control"
                                        :class="{ 'is-invalid':errors.flightNumber }"
                                        id="flightNumber"
                                        v-model="flightNumber"
                                        name="flightNumber" 
                                        placeholder="{{ __('booking.flightNumber') }}">
                                        <div class="invalid-feedback" v-if="errors.flightNumber">
                                            @{{ errors.flightNumber[0] }}
                                        </div>
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

                    </airport-information>

                </div>
            </div>
        </div>