@extends('interna2')

@section('content-interna')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-9') }}</li>
    </ol>
</nav>

<h1>{{ __('booking.title') }}</h1>
<p>Fulfill all your language-learning dreams and book now for the best learning and exploring experience available in Ecuador!</p>
<p>Please fill out the form below &amp; choose the programs of your choice.</p>


<form @submit.prevent="booking" id="booking">

    {{ csrf_field() }}

    <div class="accordion" id="accordionExample">

        
        @include('booking.locations')

        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        {{ __('booking.courses') }}
                    </button>
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                    <courses v-bind:locations="locations" v-on:course-ready="courses=$event"></courses>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        {{ __('booking.options') }}
                    </button>
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <options v-bind:courses="courses" v-on:option-ready="options=$event" ></options>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingFour">
                <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        {{ __('booking.date') }}
                    </button>
                </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">

                    <course-from v-bind:options="options" v-on:dates-ready="onDateField" v-on:comments-ready="onCommentField" ></course-from>

                    

                </div>
            </div>
        </div>

        @include('booking.accommodation')

        @include('booking.billing')

        @include('booking.airport')

        @include('booking.cart')

        @include('booking.checkout')


    </div>



</form>



<div class="modal fade" id="loadinBooking" tabindex="-1" role="dialog" aria-labelledby="headerBooking" aria-hidden="true"
data-backdrop="static" data-keyboard="false" data-show="false">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="headerBooking">Processing your reservation</h5>
      </div>
      <div class="modal-body text-center">

        <div v-if="!peticion">

          <div class="spinner-grow text-danger" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow text-primary" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          <div class="spinner-grow text-warning" role="status">
            <span class="sr-only">Loading...</span>
          </div>
          
        </div>

        <div v-else>

          <div v-if="errors" class="swal2-icon swal2-error swal2-animate-error-icon" style="display: flex;"><span class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span></div>

          <div v-else>

            <div  class="swal2-icon swal2-success swal2-animate-success-icon" style="display: flex;">
             <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
               <span class="swal2-success-line-tip"></span>
               <span class="swal2-success-line-long"></span>
               <div class="swal2-success-ring"></div> 
               <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
               <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
            </div>

            <a v-if="paymethods==1" class="btn btn-primary" href="{{ route('booking.checkout') }}" role="button">Continue</a>
            <a v-else class="btn btn-primary" href="{{ route('student-info') }}" role="button">Continue</a>

          </div>

        </div>

      </div>
    </div>
  </div>
</div>

@endsection

@push('script')


<!-- Scripts -->
<script src="{{ asset('js/booking.js') }}" defer></script>

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

@endpush