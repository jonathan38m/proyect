@extends('interna2')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-6') class="active" @endsection

@section('content-interna')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">
                {{ __('breadcrumb.item-1') }}
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('about-us') }}">
                {{ __('breadcrumb.item-6') }}
            </a>
        </li>
        <li aria-current="page" class="breadcrumb-item active">
            {{ __('breadcrumb.item-6-5') }}
        </li>
    </ol>
</nav>
<h1>
    {{ __('about-us.reviews.title') }}
</h1>
<a class="btn btn-primary" href="{{ route('commentaries.index') }}" title="Commentaries">
    All
</a>
<hr/>
<div class="row">
    <div class="col-md-9 commentary-container-text">
        <h2>
            {{ $commentary->name }}
        </h2>
        <h4>
            {{ $commentary->nationality }} |
            <img alt="{{ $commentary->nationality }}" src="{{ asset('images/about-us/country/'.$commentary->nationality.'.png') }}"/>
        </h4>
        <span>
            <strong>
                Period:
            </strong>
            {{ $commentary->start_date }} | {{ $commentary->finish_date }}
        </span>
        <br>
            <span>
                <strong>
                    Program:
                </strong>
                {{ $commentary->program }}
            </span>
            <br>
                {{ $commentary->commentary }}
            </br>
        </br>
    </div>
    <div class="col-md-3">
        @if ($commentary->image)
        <img alt="{{ $commentary->name }}" src="{{ asset($commentary->image) }}" style="width: 100%;"/>
        @endif
    </div>
</div>
@auth
<a class="btn btn-primary" href="{{ route('commentaries.edit', $commentary) }}">
    Edit
</a>
@endauth
@endsection
