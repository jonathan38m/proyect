@extends('interna')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-2') class="active" @endsection

@section('content-interna')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">
                {{ __('breadcrumb.item-1') }}
            </a>
        </li>
        <li aria-current="page" class="breadcrumb-item active">
            {{ __('breadcrumb.item-2') }}
        </li>
    </ol>
</nav>
<h1>
    {{ __('courses.title') }}
</h1>
<hr/>
<div class="row row-cols-1 row-cols-md-2">
    @foreach ($article->intros as $intro)
    <div class="col mb-4">
        <div class="card h-100 shadow-sm">
            <img alt="{{ __($intro->title) }}" class="card-img-top" src="{{ Storage::cloud()->url($intro->image) }}"/>
            <div class="card-body">
                <h5 class="card-title">
                    <a href="{{ route($intro->route) }}" title="{{ __($intro->title) }}">
                        {{ __($intro->title) }}
                    </a>
                </h5>
                <hr/>
                <p class="card-text text-justify">
                    {{ __($intro->intro) }}
                </p>
            </div>
            <div class="card-footer">
                <a class="d-block text-right text-white" title="Read more" href="{{ route($intro->route) }}">
                    Read more
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
