<div class="card">
    <div class="card-header" id="headingOne">
        <h2 class="mb-0">
            <button aria-controls="collapseOne" aria-expanded="true" class="btn btn-link" data-target="#collapseOne" data-toggle="collapse" type="button">
                {{ __('booking.locations') }}
            </button>
        </h2>
    </div>
    <div aria-labelledby="headingOne" class="collapse show" data-parent="#accordionExample" id="collapseOne">
        <div class="card-body">
            <locations inline-template="" v-on:location-ready="locations=$event" v-on:students="students=$event">
                <div>
                    <div class="alert alert-danger" v-if="Object.keys(errors).length">
                        <ul>
                            <li v-for="error in errors">
                                @{{ error[0] }}
                            </li>
                        </ul>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="lname">
                                *{{ __('booking.locations-label-1') }}
                            </label>
                            <input :class="{ 'is-invalid':errors.students }" class="form-control" id="students" min="1" name="students" placeholder="# Students" type="number" v-model="students">
                                <div class="invalid-feedback" v-if="errors.students">
                                    @{{ errors.students[0] }}
                                </div>
                            </input>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>
                                * Locations
                            </label>
                            <ul class="list-group">
                                @foreach($locations as $location)
                                <li class="list-group-item list-group-item-action" for="{{ $location->alias }}">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" id="{{ $location->alias }}" name="{{ $location->alias }}" type="checkbox" v-model="value" value="{{ $location->id }}">
                                            <label class="custom-control-label" for="{{ $location->alias }}">
                                                {{ $location->name }}
                                            </label>
                                        </input>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-4">
                        </div>
                        <div class="col-4 text-right">
                            <button class="btn btn-primary" type="button" v-on:click="validate">
                                Continue
                                <div class="spinner-grow spinner-grow-sm" role="status" v-if="loading">
                                    <span class="sr-only">
                                        Loading...
                                    </span>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </locations>
        </div>
    </div>
</div>