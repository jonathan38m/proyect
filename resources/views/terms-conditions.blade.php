@extends('interna')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-7') class="active" @endsection

@section('content-interna')

<h1>Terms &amp; Conditions</h1>

@include('booking-pay.terms-conditions')

@endsection
