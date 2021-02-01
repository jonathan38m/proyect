<div class="card">
    <div class="card-header" id="headingNine">
        <h2 class="mb-0">
            <button aria-controls="collapseNine" aria-expanded="false" class="btn btn-link collapsed" data-target="#collapseNine" data-toggle="collapse" type="button">
                {{ __('booking.checkout') }}
            </button>
        </h2>
    </div>
    <div aria-labelledby="headingNine" class="collapse" data-parent="#accordionExample" id="collapseNine">
        <div class="card-body">
            <h4>
                {{ __('booking.paymethods') }}
            </h4>
            <div class="form-row">
                <div class="col-md-6 form-group">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" id="paymethods1" name="paymethods" type="radio" v-model="paymethods" value="1"/>
                                <label class="custom-control-label" for="paymethods1">
                                    {{ __('booking.paymethods-1.option') }}
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" id="paymethods2" name="paymethods" type="radio" v-model="paymethods" value="2"/>
                                <label class="custom-control-label" for="paymethods2">
                                    {{ __('booking.paymethods-2.option') }}
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" id="paymethods3" name="paymethods" type="radio" v-model="paymethods" value="3"/>
                                <label class="custom-control-label" for="paymethods3">
                                    {{ __('booking.paymethods-3.option') }}
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <div class="custom-control custom-radio">
                                <input class="custom-control-input" id="paymethods4" name="paymethods" type="radio" v-model="paymethods" value="4"/>
                                <label class="custom-control-label" for="paymethods4">
                                    {{ __('booking.paymethods-4.option') }}
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 form-group">
                    <div class="card" v-if="paymethods==1">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ __('booking.paymethods-1.title') }}
                            </h5>
                            <p class="card-text">
                                {{ __('booking.paymethods-1.line-1') }}
                            </p>
                        </div>
                    </div>
                    <div class="card" v-if="paymethods==2">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ __('booking.paymethods-2.title') }}
                            </h5>
                            <p class="card-text">
                                {{ __('booking.paymethods-2.line-1') }}
                            </p>
                        </div>
                    </div>
                    <div class="card" v-if="paymethods==3">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ __('booking.paymethods-3.title') }}
                            </h5>
                            <p class="card-text">
                                {{ __('booking.paymethods-3.line-1') }}
                            </p>
                            <p class="card-text">
                                {{ __('booking.paymethods-3.line-2') }}
                            </p>
                            <p class="card-text">
                                {{ __('booking.paymethods-3.line-3') }}
                            </p>
                            <p class="card-text">
                                {{ __('booking.paymethods-3.line-4') }}
                            </p>
                            <p class="card-text">
                                {{ __('booking.paymethods-3.line-5') }}
                            </p>
                            <p class="card-text">
                                {{ __('booking.paymethods-3.line-6') }}
                            </p>
                            <p class="card-text">
                                {{ __('booking.paymethods-3.line-7') }}
                            </p>
                        </div>
                    </div>
                    <div class="card" v-if="paymethods==4">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ __('booking.paymethods-4.title') }}
                            </h5>
                            <p class="card-text">
                                {{ __('booking.paymethods-4.line-1') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 form-group">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" id="terms" name="terms" required="" type="checkbox" v-model="terms">
                                    <label class="custom-control-label" for="terms">
                                        {{ __('booking.accept-terms') }}
                                        <a data-target="#terms-conditions" data-toggle="modal" href="#">
                                            {{ __('booking.terms-conditions') }}
                                        </a>
                                    </label>
                                </input>
                            </div>
                            <div aria-hidden="true" aria-labelledby="termTitle" class="modal fade" id="terms-conditions" role="dialog" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="termTitle">
                                                {{ __('booking.terms-conditions') }}
                                            </h5>
                                            <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                                <span aria-hidden="true">
                                                    ×
                                                </span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            @include('booking-pay.terms-conditions')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 form-group">
                    <div class="card" v-if="paymethods==2">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ __('booking.paymethods-note') }}
                            </h5>
                            <p class="card-text">
                                <ol>
                                    <li>
                                        {{ __('booking.paymethods-2.note-1') }}
                                    </li>
                                    <li>
                                        {{ __('booking.paymethods-2.note-2') }}
                                    </li>
                                </ol>
                            </p>
                        </div>
                    </div>
                    <div class="card" v-if="paymethods==3">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ __('booking.paymethods-note') }}
                            </h5>
                            <p class="card-text">
                                <ol>
                                    <li>
                                        {{ __('booking.paymethods-3.note-1') }}
                                    </li>
                                    <li>
                                        {{ __('booking.paymethods-3.note-2') }}
                                    </li>
                                </ol>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                @if (env('PRIVATE_KEY_CAPTCHA'))
                <input id="recaptchaResponse" name="g-recaptcha-response" type="hidden"/>
                @endif
            </div>
            <div class="row justify-content-between">
                <div class="col-4">
                    <button class="btn btn-primary" type="button" v-on:click="previous">
                        Previous
                    </button>
                </div>
                <div class="col-4 text-right">
                    <button class="btn btn-primary" type="button" v-on:click="booking">
                        Part 1 of 2 Place Order
                    </button>
                </div>
            </div>
            <br>
                <div class="alert alert-danger" v-if="errors">
                    <ul>
                        <li v-for="error in errors">
                            @{{ error[0] }}
                        </li>
                    </ul>
                </div>
            </br>
        </div>
    </div>
</div>