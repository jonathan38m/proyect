@extends('interna2')
@section('scriptBefore')


  
@endsection
@section('content-interna')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Booking</li>
    </ol>
</nav>

<h1>Book your Spanish Course with us!</h1>
<p>Fulfill all your language-learning dreams and book now for the best learning and exploring experience available in Ecuador!</p>
<p>Please fill out the form below &amp; choose the programs of your choice.</p>



@endsection

@section('script')


<!-- Scripts -->
<script src="{{ asset('js/booking.js') }}" defer></script>

<script src='https://www.google.com/recaptcha/api.js?hl={{ config('app.locale') }}' async defer></script>

@endsection