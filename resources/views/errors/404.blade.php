@extends('errors::illustrated-layout')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', $exception->getMessage())
@section('image')
<div style="

  background-image: url('{{ asset('images/footer-1.jpg') }}');
  background-position: right center;
  height: 100%;
  width: 100%;
  background-repeat: no-repeat;
">
</div>
@endsection
