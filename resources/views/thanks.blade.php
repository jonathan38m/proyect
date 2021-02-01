@extends('interna2')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection




@section('content-interna')

<h1>
{{ $mensaje }}
</h1>



@endsection