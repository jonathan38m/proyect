@extends('layouts.ise')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection

@section('alternate')

    <link rel="canonical" href="{{ config('app.url') }}/{{ $article->alias }}">

    @foreach($article->aliases as $alias)

        @if($alias->flag == 'en')
            <link rel="alternate" href="https://www.superiorspanishschool.com{{ $alias->alias }}" hreflang="{{ $alias->flag }}">
        @elseif($alias->flag == 'de')
            <link rel="alternate" href="https://www.spanischschule-ecuador.de{{ $alias->alias }}" hreflang="{{ $alias->flag }}">
        @elseif($alias->flag == 'ru')
            <link rel="alternate" href="https://www.izuchatispanski.ru{{ $alias->alias }}" hreflang="{{ $alias->flag }}">
        @endif

        

    @endforeach

@endsection

@section('content')

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col">
                @section('content-interna') 

                <h1>Pagina en construcion</h1>

               @show
            </div>
        </div>
    </div>
</section>


@endsection