@extends('interna')
@section('index-2') class="active" @endsection

@section('content-interna')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">
                {{ __('breadcrumb.item-1') }}
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('item-2') }}">
                {{ __('breadcrumb.item-2') }}
            </a>
        </li>
        <li aria-current="page" class="breadcrumb-item active">
            {{ __('breadcrumb.item-2-111') }}
        </li>
    </ol>
</nav>
<h1>
    {{ __('courses.online.title') }}
</h1>
<div class="info-list">
    <a class="img-left " href="#">
        <img alt="{{ __('breadcrumb.item-2-111') }}" src="{{ asset('images/courses/online-class/asistance.jpg') }}"/>
    </a>
    <p>
        Online learning is not new. It is a further development of independent work and self-dependent learning. Since we always want to offer our students the latest technologies and advantages, we have decided to have our proven Spanish courses available online.
    </p>
    <p>
        Many people would like to be flexible and be able to freely organize their time. The digital world offers a lot of advantages here to meet exactly these needs and wishes.
    </p>
    <p>
        We would like to give our students the opportunity to learn and develop their language skills from anywhere. It is more important than ever to organize and motivate yourself. Digital platforms are the ideal base for this.
    </p>
    <p>
        In addition, not everyone has the opportunity to visit our location in Ecuador. For this reason, we want to give students the opportunity to learn a new language flexibly from home or from other places in the world.
    </p>
    <p>
        Based on many years of experience, we have developed a program that optimally combines online content with the advantages of Spanish classes.
    </p>
    <p>
        Would you like to learn more about our online learning options?
    </p>
    <a class="btn btn-primary" href="{{ route('contact') }}" title="Contact Us">
        Contact Us
    </a>
</div>
@endsection

@section('bookLessons')
<hr>
    <div>
        <h3>
            Book Group Lessons in Quito or Otavalo
        </h3>
        <p class="text-center" style="font-size: 17px;">
            ONE WEEK FROM US$139
        </p>
        <a class="btn btn btn-info" href="/learn-spanish-booking.html" style="width: 100%;" type="submit">
            <span aria-hidden="true" class="glyphicon glyphicon-shopping-cart">
            </span>
            BOOK NOW
        </a>
    </div>
    @endsection
</hr>