@extends('interna')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-6') class="active" @endsection

@section('content-interna')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('breadcrumb.item-1') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('about-us') }}">{{ __('breadcrumb.item-6') }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-6-1') }}</li>
  </ol>
</nav>


<div style="border-left: 7px solid #e2c803;padding-left: 15px; text-align: justify;">

    <h1>{{ __('about-us.ise.title') }}</h1>

    <img src="{{ URL::asset( 'images/about-us/ise/carta-ise.jpg') }}" class="img-right gly" />

    

    <p>Dear friends, former, current and prospect ISE students, </p>

    <p>
        For nearly 30 years ISE has been working on creating didactic and efficient programs that will allow students from all over the world to learn Spanish, and discover the beauties of one of the most diverse countries in the world. We have based our efforts on 4 main objectives. 
    </p>
    <p>
        The first objective is motivated by the influence that linguistic classes had on me during my formative years, and the curiosity to bring this knowledge to practice, and thus, sharing, teaching, and educating people about the second most spoken language in the world. 
    </p>
    <p>
        The second objective is to create a fair job source that will allow our teachers to work in a professional atmosphere, share their passion for teaching, and earn a competitive salary.
    </p>
    <p>
        The third objective is rising the standards. Although Spanish teaching schools have existed prior to ISE in all of Latin America, we felt there was more to do, and more to show. We wanted to create a program that would fit the needs of each of our students, and that would offer them an experience of a lifetime by providing high quality service from highly prepared professionals. 
    </p>
    <p>
        The fourth objective is to share a great passion for traveling and discovering new places. Because of its abundant natural attractions and the kindness of its people, Ecuador is considered one of the most beautiful and whole countries in the world. This small, but incredibly diverse nation offers travelers all the wonders that can be discovered while traveling throughout Latin America in one place.
    </p>
    <p>
        Right now we count with a vast experience teaching Spanish to foreigners, together with a professional team who guarantee the quality of our Spanish courses. All of us are able to achieve our principal goal which is the reason of our job, “to teach Spanish with professional programs and to offer a great experience while learning Spanish with us”.
    </p>
    <p>
        I invite you to discover Ecuador, its people and natural wonders, and I extend a warm welcome to be a part of the ISE family. 
    </p>
    <p>
        Sincerely,
    </p>
    <p>
        <strong>
            Eugenio Córdova <br>
            ISE Academic Director & Founder
        </strong>
    </p>


    
</div>

@endsection