@extends('layouts.ise')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection



@section('scriptBefore')


@endsection

@section('index-1') class="active" @endsection

@section('content')
<!--------------------------------BANNER--------------------------------- -->
<section class="banner">
    <div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">
        <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators">
            </li>
            <li data-slide-to="1" data-target="#carouselExampleIndicators">
            </li>
            <li data-slide-to="2" data-target="#carouselExampleIndicators">
            </li>
            <li data-slide-to="3" data-target="#carouselExampleIndicators">
            </li>
            <li data-slide-to="4" data-target="#carouselExampleIndicators">
            </li>
            <li data-slide-to="5" data-target="#carouselExampleIndicators">
            </li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <picture>
                    <source media="(min-width: 992px)" srcset="{{ asset('images/banners/banner-1.jpg') }}" />
                    <img alt="Amazing Galapagos Islands" class="d-block w-100" srcset="{{ asset('images/banners/banner-1-small.jpg') }}" />
                </picture>
            </div>
            <div class="carousel-item">
                <picture>
                    <source media="(min-width: 992px)" srcset="{{ asset('images/banners/banner-2.jpg') }}">
                    <img alt="Amazing Galapagos Islands" class="d-block w-100" srcset="{{ asset('images/banners/banner-2-small.jpg') }}">
                </picture>
                <div class="carousel-caption d-none d-md-block">
                    <a href="{{ route('learn-quito') }}" title="Learn spanish in Quito">
                        <h3 class="caption-banner">
                            Make new friends and learn Spanish with us in the Colonial District of Quito
                        </h3>
                    </a>
                    <a class="btn btn-primary btn-banner" href="{{ route('learn-quito') }}" role="button" title="Learn spanish in Quito">
                        Read more
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <picture>
                    <source media="(min-width: 992px)" srcset="{{ asset('images/banners/banner-3.jpg') }}">
                    <img alt="Amazing Galapagos Islands" class="d-block w-100" srcset="{{ asset('images/banners/banner-3-small.jpg') }}">
                </picture>
                <div class="carousel-caption d-none d-md-block">
                    <a href="{{ route('learn-otavalo') }}" title="Learn spanish in Otavalo">
                        <h3 class="caption-banner">
                            Or choose to go to Otavalo Indigenous Town. Group, Private and Intensive Spanish courses available.
                        </h3>
                    </a>
                    <a class="btn btn-primary btn-banner" href="{{ route('learn-otavalo') }}" role="button" title="Learn spanish in Otavalo">
                        Read more
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <picture>
                    <source media="(min-width: 992px)" srcset="{{ asset('images/banners/banner-4.jpg') }}">
                    <img alt="Amazing Galapagos Islands" class="d-block w-100" srcset="{{ asset('images/banners/banner-4-small.jpg') }}">
                </picture>
                <div class="carousel-caption d-none d-md-block">
                    <a href="{{ route('learn-amazon') }}" title="Learn spanish in the Amazon">
                        <h3 class="caption-banner">
                            Learn Spanish with us in an Ecological Amazon Jungle Lodge
                        </h3>
                    </a>
                    <a class="btn btn-primary btn-banner" href="{{ route('learn-amazon') }}" role="button" title="Learn spanish in the Amazon">
                        Read more
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <picture>
                    <source media="(min-width: 992px)" srcset="{{ asset('images/banners/banner-5.jpg') }}">
                    <img alt="Amazing Galapagos Islands" class="d-block w-100" srcset="{{ asset('images/banners/banner-5-small.jpg') }}">
                </picture>
                <div class="carousel-caption d-none d-md-block">
                    <a href="{{ route('traveling-classroom') }}" title="Travelling Classroom">
                        <h3 class="caption-banner">
                            Explore the beautiful Andes in our Travelling Classroom Spanish Programs
                        </h3>
                    </a>
                    <a class="btn btn-primary btn-banner" href="{{ route('traveling-classroom') }}" role="button" title="Travelling Classroom">
                        Read more
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <picture>
                    <source media="(min-width: 992px)" srcset="{{ asset('images/banners/banner-6.jpg') }}">
                    <img alt="Amazing Galapagos Islands" class="d-block w-100" srcset="{{ asset('images/banners/banner-6-small.jpg') }}">
                </picture>
                <div class="carousel-caption d-none d-md-block">
                    <a href="{{ route('learn-galapagos') }}" title="Learn spanish in the Galapagos Islands">
                        <h3 class="caption-banner">
                            Enjoy learning Spanish and discovering the Amazing Galapagos Islands
                        </h3>
                    </a>
                    <a class="btn btn-primary btn-banner" href="{{ route('learn-galapagos') }}" role="button" title="Learn spanish in the Galapagos Islands">
                        Read more
                    </a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button">
            <span aria-hidden="true" class="carousel-control-prev-icon">
            </span>
            <span class="sr-only">
                Previous
            </span>
        </a>
        <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button">
            <span aria-hidden="true" class="carousel-control-next-icon">
            </span>
            <span class="sr-only">
                Next
            </span>
        </a>
    </div>
</section>
<div class="clearfix">
</div>
<!-- ------------------------------------------ INTRO------------------------- -->
<section class="intro-site">
    <div class="container">
        <div class="row">
            <div class="container-inner">
                <div class="col-md-12">
                    <main class="intro text-center">
                        <h1>
                            Welcome to Our Spanish School in Ecuador
                        </h1>
                        <p>
                            The Instituto Superior de Español, founded in 1988, is a Spanish school in Ecuador South America
                            designed especially to fill the needs of foreign students. We offer a great variety of
                            programs that you may join at our school.
                        </p>
                        <p>
                            Our family-run school has been recognized by former students and competitors as a leading Spanish school in Ecuador. We take great pride in our university educated teachers who have many years of experience. Our programs are affordable, flexible and allow you to easily combine study locations throughout Ecuador. We offer
                            Spanish classes in Quito, in Otavalo, in the Galapagos Islands, in the Amazon Jungle,
                            in Indigenous Communities and run a unique Travelling Classroom programm.
                        </p>
                        <p>
                            We invite you to discover Ecuador, its people and natural wonders, and we extend a
                            warm welcome to be a part of the ISE family.
                        </p>
                    </main>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ------------------------------------------ DESTINATIONS------------------------- -->
@include('layouts.destinations')
<!-- ------------------------------------------ NUESTROS CURSOS------------------------- -->
<div class="clearfix">
</div>
<section class="cursos">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">
                    OUR COURSES
                </h2>
            </div>
        </div>
        <div class="row align-items-center our-courses">
            <div class="col-md-4">
                <ul class="list-group">
                    <a class="list-group-item list-group-item-action" href="{{ route('item-2-4') }}" title="{{ __('breadcrumb.item-2-4') }}">
                        <i class="glyphicon glyphicon-ok">
                        </i>
                        {{ __('breadcrumb.item-2-4') }}
                    </a>
                    <a class="list-group-item list-group-item-action" href="{{ route('item-2-5') }}" title="{{ __('breadcrumb.item-2-5') }}">
                        <i class="glyphicon glyphicon-ok">
                        </i>
                        {{ __('breadcrumb.item-2-5') }}
                    </a>
                    <a class="list-group-item list-group-item-action" href="{{ route('item-2-6') }}" title="{{ __('breadcrumb.item-2-6') }}">
                        <i class="glyphicon glyphicon-ok">
                        </i>
                        {{ __('breadcrumb.item-2-6') }}
                    </a>
                    <a class="list-group-item list-group-item-action" href="{{ route('item-2-7') }}" title="{{ __('breadcrumb.item-2-7') }}">
                        <i class="glyphicon glyphicon-ok">
                        </i>
                        {{ __('breadcrumb.item-2-7') }}
                    </a>
                    <a class="list-group-item list-group-item-action" href="{{ route('item-2-8') }}" title="{{ __('breadcrumb.item-2-8') }}">
                        <i class="glyphicon glyphicon-ok">
                        </i>
                        {{ __('breadcrumb.item-2-8') }}
                    </a>
                    <a class="list-group-item list-group-item-action" href="{{ route('item-2-9') }}" title="{{ __('breadcrumb.item-2-9') }}">
                        <i class="glyphicon glyphicon-ok">
                        </i>
                        {{ __('breadcrumb.item-2-9') }}
                    </a>
                    <a class="list-group-item list-group-item-action" href="{{ route('item-2-10') }}" title="{{ __('breadcrumb.item-2-10') }}">
                        <i class="glyphicon glyphicon-ok">
                        </i>
                        {{ __('breadcrumb.item-2-10') }}
                    </a>
                    <a class="list-group-item list-group-item-action" href="{{ route('item-2-11') }}" title="{{ __('breadcrumb.item-2-11') }}">
                        <i class="glyphicon glyphicon-ok">
                        </i>
                        {{ __('breadcrumb.item-2-11') }}
                    </a>
                </ul>
                <br>
                <a class="btn btn-primary btn-lg" href="{{ route('booking') }}">
                    Book Now!
                </a>
                </br>
            </div>
            <div class="col-md-4 text-center">
                <p class="text-center">
                    <strong>
                        How much do you know?
                    </strong>
                    <br>
                    Take our free Spanish test online and choose the best course that fits your needs.
                    </br>
                </p>
                <br>
                <a class="btn btn-primary btn-lg" href="{{ route('item-2-3') }}" title="{{ __('breadcrumb.item-2-3') }}">
                    <span>
                        {{ __('breadcrumb.item-2-3') }}
                    </span>
                    <span aria-hidden="true" class="glyphicon glyphicon-list-alt">
                    </span>
                </a>
                </br>
            </div>
            <div class="col-md-4 cursos-heading">
                <div style="padding:56.25% 0 0 0;position:relative;">
                    <iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/250276221?autoplay=1&loop=1&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" webkitallowfullscreen="">
                    </iframe>
                </div>
                <script src="https://player.vimeo.com/api/player.js">
                </script>
            </div>
        </div>
    </div>
</section>
<!-- ---------------------------------------------------Why we are you---------------------- -->
<div class="clearfix">
</div>
<section class="best">
    <div class="container">
        <div class="titulo-choice">
            <h2>
                WHY WE ARE YOUR BEST CHOICE!
            </h2>
        </div>
        <div class="row">
            <div align="center" class="col-md-4" id="counter-1">
                <a class="number-choice" href="{{ route('welcome-ise') }}">
                    <span>
                        +
                    </span>
                    <span class="counter-value" data-count="30">
                        0
                    </span>
                    <p>
                        Years Teaching Spanish for foreigners
                        <br>
                        in Ecuador
                        </br>
                    </p>
                </a>
            </div>
            <div align="center" class="col-md-4" id="counter-2">
                <a class="number-choice" href="{{ route('students-reviews') }}">
                    <span class="counter-value" data-count="11000">
                        0
                    </span>
                    <p>
                        Students have learned
                        <br>
                        Spanish with us
                        </br>
                    </p>
                </a>
            </div>
            <div align="center" class="col-md-4" id="counter-3">
                <a class="number-choice" href="{{ route('destinations') }}">
                    <span class="counter-value" data-count="5">
                        0
                    </span>
                    <p>
                        Location
                        <br>
                        Nationwide
                        </br>
                    </p>
                </a>
            </div>
        </div>
        <div class="row">
            <div align="center" class="col-md-4">
                <a class="number-choice" href="{{ route('item-2-1') }}">
                    <span>
                        #1
                    </span>
                    <p>
                        In
                        <br>
                        Methodology
                        </br>
                    </p>
                </a>
            </div>
            <div align="center" class="col-md-4">
                <a class="number-choice" href="{{ route('traveling-classroom') }}">
                    <span>
                        #1
                    </span>
                    <p>
                        In Creating the concept of “Travelling Classroom”
                        <br>
                        in Ecuador
                        </br>
                    </p>
                </a>
            </div>
            <div align="center" class="col-md-4">
                <a class="number-choice" href="{{ route('volunteering') }}">
                    <span>
                        #1
                    </span>
                    <p>
                        Social and Environmental
                        <br>
                        Responsability
                        </br>
                    </p>
                </a>
            </div>
        </div>
    </div>
</section>
<div class="clearfix">
</div>
<!----------------------------------------------------Testimonios-------------------------- -->
<div class="stuck_position">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>
                    TESTIMONIALS
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="clearfix">
</div>
<section class="testimonios content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="testimonios-ise">
                    <div class="header-our-testimonials">
                        <h3 class="text-center">
                            <img alt="Testimonials ISE" src="images/logo-testimonios.jpg">
                            </img>
                        </h3>
                    </div>
                    <hr>
                    <div class="carousel slide" data-ride="carousel" id="carousel-testimonial">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            @foreach($commentaries as $commentary)

                            @if($loop->first)
                            <li data-slide-to="{{$loop->index}}" data-target="#carousel-testimonial">
                            </li>
                            @else
                            <li class="active" data-slide-to="{{$loop->index}}" data-target="#carousel-testimonial">
                            </li>
                            @endif

                            @endforeach
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner items-reviews" role="listbox">
                            @foreach($commentaries as $commentary)

                            @if($loop->first)
                            <div class="carousel-item active">
                                @else
                                <div class="carousel-item">
                                    @endif
                                    <div class="carousel-caption text-center">
                                        @if(!$commentary->image)
                                        <span aria-hidden="true" class="glyphicon glyphicon-user user-testimonios">
                                        </span>
                                        @else
                                        <div aria-hidden="true" class=" user-testimonios img-testimonials-on">
                                            <img alt="{{ $commentary->name }}" class="width-100" src="{{ $commentary->image }}">
                                            </img>
                                        </div>
                                        @endif
                                        <h2>
                                            <a href="{{ route('commentaries.show', $commentary) }}">
                                                {{ $commentary->name }}
                                            </a>
                                        </h2>
                                        <h6>
                                            @if( $commentary->program )
                                            {{ $commentary->program }},
                                            @endif
                                            <span>
                                                {{ $commentary->start_date }},
                                                | {{ $commentary->finish_date }}
                                            </span>
                                        </h6>
                                        <p class="text-justify">
                                            {{ substr($commentary->commentary, 0, 400) }}...
                                        </p>
                                        <a href="{{ route('commentaries.show', $commentary) }}">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    </hr>
                </div>
                <div class="col-md-6 vertical-align-top">
                    <div class="TA_cdsscrollingravewide" id="TA_cdsscrollingravewide250">
                        <ul class="TA_links qXEnYdH" id="kzEMXyga">
                            <li class="3R3azt" id="3fBAPg">
                                <a href="https://www.tripadvisor.com/" target="_blank">
                                    <img alt="TripAdvisor" class="widEXCIMG" id="CDSWIDEXCLOGO" src="https://static.tacdn.com/img2/t4b/Stacked_TA_logo.png" />
                                </a>
                            </li>
                        </ul>
                    </div>
                    <script async="" data-loadtrk="" onload="this.loadtrk=true" src="https://www.jscache.com/wejs?wtype=cdsscrollingravewide&uniq=250&locationId=10085877&lang=en_US&border=false&shadow=false&backgroundColor=white&display_version=2">
                    </script>
                    <div class="TA_selfserveprop" id="TA_selfserveprop684">
                        <ul class="TA_links cE08EWm2" id="4kPq2Mg3tLs">
                            <li class="6y1wjF" id="tfJlHdZ">
                                <a href="https://www.tripadvisor.com/" target="_blank">
                                    <img alt="TripAdvisor" src="https://www.tripadvisor.com/img/cdsi/img2/branding/150_logo-11900-2.png" />
                                </a>
                            </li>
                        </ul>
                    </div>
                    <script async="" data-loadtrk="" onload="this.loadtrk=true" src="https://www.jscache.com/wejs?wtype=selfserveprop&uniq=684&locationId=10085877&lang=en_US&rating=true&nreviews=3&writereviewlink=true&popIdx=false&iswide=true&border=true&display_version=2">
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------------------------------------------NEWSLETTER*---------------------- -->
<div class="clearfix">
</div>
<section class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact">
                    <h2>
                        Ask me for more information
                    </h2>
                    <form action="{{ route('informationform') }}" id="formInformation" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            @include('form.title.radio')
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="name">
                                Name
                            </label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="input-group-addon glyphicon-user glyphicon" id="basic-addon1">
                                        </span>
                                    </div>
                                </div>
                                <input class="form-control" id="name" name="name" maxlength="30" placeholder="* Your Name" required type="text" value="{{ old('name') }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="email">
                                Email
                            </label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="input-group-addon glyphicon glyphicon-envelope" id="basic-addon2">
                                        </span>
                                    </div>
                                </div>
                                <input class="form-control" id="email" maxlength="100" name="email" placeholder="* Email" required type="email" value="{{ old('email') }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="subject">
                                Subject
                            </label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="input-group-addon glyphicon glyphicon-paperclip" id="basic-addon3">
                                        </span>
                                    </div>
                                </div>
                                <input class="form-control" id="subject" name="subject" placeholder="* Subject" maxlength="200" required type="text" value="{{ old('subject') }}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="message">
                                Subject
                            </label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="input-group-addon glyphicon glyphicon-comment" id="basic-addon4">
                                        </span>
                                    </div>
                                </div>
                                <textarea maxlength="255" class="form-control max-width-textarea" name="message" placeholder="* I'm interested in" required>{{ old('message') }}</textarea>
                            </div>
                        </div>
                        <button class="g-recaptcha btn btn-default btn-ise"
                                data-sitekey="{{ config('app.recaptcha.public_key') }}"
                                data-callback='onSubmit'
                                data-action='submit'>
                            Send
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact">
                    <h2>
                        Follow us
                    </h2>
                    <div class="container-fluid follow">
                        <div class="row">
                            <div class="col-xs-6 col-sm-4">
                                <a href="https://www.facebook.com/institutosuperiordeespanol1/" target="_blank">
                                    <i class="demo-icon icon-facebook-official">
                                    </i>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-4">
                                <a href="https://www.tripadvisor.com/Attraction_Review-g294308-d10085877-Reviews-ISE_Instituto_Superior_de_Espanol-Quito_Pichincha_Province.html" target="_blank">
                                    <i class="demo-icon icon-tripadvisor">
                                    </i>
                                </a>
                            </div>
                            <div class="col-xs-6 col-sm-4">
                                <a href="https://www.instagram.com/institutosuperiordeespanol/" target="_blank">
                                    <i class="demo-icon icon-instagram">
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="validateFomoMessage" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="alert" id="statusAlert" role="alert" style="margin-bottom: 0;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button>
                <p id="statusAlertMessage">
                    ...
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script defer="" src="{{ asset('js/counter.js') }}" type="text/javascript">
</script>
@if ($errors->any())
<script defer="" src="{{ asset('js/ancla.js') }}" type="text/javascript">
</script>
@endif

@if (config('app.recaptcha.public_key'))
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
        function onSubmit(token) {
            document.getElementById("formInformation").submit();
        }
    </script>

@endif


@endpush
