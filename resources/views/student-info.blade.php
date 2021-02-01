@extends('interna2')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection

@section('scriptBefore')
  <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

@section('content-interna')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Information</li>
    </ol>
</nav>

<h1 class="text-center">Part 2 of 2</h1>

<h3 class="text-center">In order to prepare your Study Program please complete your information and requirements.</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('student-infos.store') }}" method="POST">

  {{ csrf_field() }}

  <div class="accordion" id="student-info" >

    @include('student-info.basic-information')

    @include('student-info.tavel-insuranse-company')

    @include('student-info.profession')

    @include('student-info.hostInformation')

  </div>

</form>

@if($booking->payment->id == 1)
    

  <div class="modal fade" id="student-pop" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Pay Status</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        

          <ul class="list-group">
            <li class="list-group-item">
              <div class="row">
                <div class="col-6"><strong>authorizationResult</strong></div>
                <div class="col-6">{{ $booking->authorizationResult}}</div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-6"><strong>errorCode</strong></div>
                <div class="col-6">{{ $booking->errorCode }}</div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="row">
                <div class="col-6"><strong>errorMessage</strong></div>
                <div class="col-6">{{ $booking->errorMessage }}</div>
              </div>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </div>



@endif


@endsection

@push('script')


<!-- Scripts -->
<script src="{{ asset('js/student-info.js') }}" defer></script>

@if (config('app.recaptcha.public_key'))
<script src="https://www.google.com/recaptcha/api.js?hl={{ config('app.locale')}}&render={{ config('app.recaptcha.public_key') }}&onload=onloadCallback&render=explicit">
</script>
<script>
    function onloadCallback() {
          grecaptcha.ready(function() {
            grecaptcha.execute('{{ config('app.recaptcha.public_key') }}', {
              action: 'homepage'
            }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
          });
        }
</script>
@endif

@endpush