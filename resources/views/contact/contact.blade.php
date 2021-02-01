@extends('interna3')
@section('content-interna')


    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.789438150205!2d-78.50990668538664!3d-0.218009999840927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59a27b3d92929%3A0x4a092ac5c2c23b85!2sSpanish+School+Instituto+Superior+de+Espa%C3%B1ol!5e0!3m2!1ses-419!2sec!4v1503119311573"
            width="100%" height="350" frameborder="0" allowfullscreen></iframe>

    <div class="container contact-us-form-secction">

        <div class="row">
            <div class="col-md-12">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>
        </div>

        <div class="row">

            <div class="col-md-6">

                <h1>Contact Us</h1>

                <p>
                    <strong>Company: </strong>
                    <span itemprop="company">Instituto Superior de Espa&ntilde;ol</span>
                    <br/>
                    <strong>Mobile, WhatsApp, Viber, FaceTime:</strong>
                    <span itemprop="tel">+593 99 499 1790</span>
                    <br/>
                    <strong>International Phone: </strong>
                    <span itemprop="tel">+1 954 773 7300</span>
                    <br/>
                    <strong>Office Telephone:</strong>
                    <span itemprop="tel">+593 - 2 228 5657</span>
                    <br/>
                    <strong>Skype:</strong>
                    <a href="skype:on-line.i.s.e.?call"><span>on-line.i.s.e.</span></a>
                    <br>
                    <strong>Email:</strong>
                    <a itemprop="email" href="mailto:info@superiorspanishschool.com"
                       class="text-decoration-underline"><span>info@superiorspanishschool.com</span></a>
                    <br/>
                    <strong>Address:</strong>
                    <span itemprop="address">Guayaquil N9-77 y Oriente. Quito - Ecuador</span>
                    <br/>
                </p>

            </div>

            <div class="col-md-6">
                <contact inline-template>

                    <form method="POST" action="{{ route('informationform') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="title">*Title</label>
                            <select class="form-control" id="title" name="title" required>
                                <option>Mr.</option>
                                <option>Mrs.</option>
                                <option>Miss</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">*Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                   required
                                   v-model="name"
                                   @error('name')
                                   v-bind:class="[name.length>0 ? 'is-valid' : 'is-invalid']"
                                    @enderror />
                            @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                            <div class="valid-feedback" v-if="name.length>0">
                                Looks good!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">*Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required/>
                        </div>
                        <div class="form-group">
                            <label for="subject">*Subject</label>
                            <input type="text" class="form-control" name="subject" value="{{ old('subject') }}"
                                   required
                                   v-model="subject"
                                   @error('subject')
                                   v-bind:class="[(subject.length>0 && subject.length<201) ? 'is-valid' : 'is-invalid']"
                                    @enderror />
                            @if ($errors->has('subject'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('subject') }}
                                </div>
                            @endif
                            <div class="valid-feedback" v-if="(name.length>0 && subject.length<201)">
                                Looks good!
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message">*Message</label>
                            <textarea class="form-control" name="message" required>{{ old('message') }}</textarea>
                        </div>

                        @if (config('app.recaptcha.public_key'))
                            <input id="recaptchaResponse" name="g-recaptcha-response" type="hidden"/>
                        @endif

                        <button type="submit" class="btn btn-info" data-toggle="modal"
                                data-target=".bs-example-modal-sm">Submit
                        </button>

                    </form>

                </contact>

            </div>

        </div>

    </div>




@endsection


@push('script')
    @if (config('app.recaptcha.public_key'))
        <script src="https://www.google.com/recaptcha/api.js?hl={{ config('app.locale')}}&render={{ config('app.recaptcha.public_key') }}&onload=onloadCallback&render=explicit">
        </script>
        <script>
            function onloadCallback() {
                grecaptcha.ready(function() {
                    grecaptcha.execute('{{ config('app.recaptcha.public_key') }}', {
                        action: 'contact'
                    }).then(function (token) {
                        var recaptchaResponse = document.getElementById('recaptchaResponse');
                        recaptchaResponse.value = token;
                    });
                });
            }
        </script>
    @endif
    <script src="{{ asset('js/contact.js') }}" defer></script>
@endpush