@extends('interna')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-4') class="active" @endsection

@section('content-interna')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('breadcrumb.item-1') }}</a></li>
    <li class="breadcrumb-item"><a href="{{ route('traveling-classroom') }}">{{ __('breadcrumb.item-4') }}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-4-5') }}</li>
  </ol>
</nav>


<h1>
    {{ __('travelling.explore.title') }}
</h1>
<div class="info-list">

    @include('gallery', ['gallery' => $article->gallery('intro')])
                               
    <h3>
        Explore the whole country in 19 days
    </h3>
    <p>
        Get to know the diversity of Ecuador, discover its cultures, beautiful nature and learn Spanish. Our Travelling Classroom expedition combines adventure and language classes while exploring the most beautiful places in Ecuador. From wide farmland, snow-covered peaks, and enchanting rainforest to majestic lagoons. Read more about this fascinating program through Ecuador and get ready for the adventure of your life.
    </p>
</div>

<div id="list-example" class="list-group dq-list-scroll">   
    <a class="list-group-item list-group-item-action" href="#highlights">
        <i class="glyphicon glyphicon-stop"></i>
        Highlights
    </a>

    <a class="list-group-item list-group-item-action" href="#available-dates-for-this-program">
        <i class="glyphicon glyphicon-stop"></i>
        Available Dates for this Program
    </a>

    <a class="list-group-item list-group-item-action" href="#locations-to-visit-while-you-learn-spanish">
        <i class="glyphicon glyphicon-stop"></i>
        Locations to Visit while you Learn Spanish
    </a>

</div>


<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example dq-ise-scroll">

    <div id="highlights">
        <h2>Highlights</h2>
        <ul class="highlights-list">
            
            @include('gallery', ['gallery' => $article->gallery('highlights'), 'position'=> 'rigth'])
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Enjoy the Indigenous spiritual and cultural traditions of Otavalo
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Admire the beautiful and exuberant fields around Cotopaxi National Park
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Observe the incredible immensity of Cotopaxi, Chimborazo, and Ilinizas
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Discover small historically and culturally towns like Saquisili, Sumbagua, Quilotoa amongst others
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Admire the splendid mountain scenery while enjoying a horse ride from Chugchilan to Quilotoa
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Discover Riobamba, a city known as the “Sultan of the Andes” 
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Take the famous train from Sibambe to Nariz del Diablo
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Experience an amazing adventure from Baños to the Route if the waterfalls
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Explore Misahualli, a small town in the middle of the Amazon Jungle
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Enjoy tubing down the Napo River in the Amazon Jungle
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> End this wonderful adventure in a beautiful scenery in the thermal waters of Papallacta
            </li>
        </ul>
    </div>
    </hr>

    <div id="available-dates-for-this-program">
        <h2>Available Dates for this Program</h2>
        <ul>
          <li>The 1st and the 4th Monday of every month.</li>
          <li>
            <div id="link-travel-different" class="list-group dq-list-scroll">
                <a id="asktime" class="list-group-item list-group-item-action" href="#travel-different"
                    data-form-auto="on"
                    data-form-subject="Travelling Dates Request"
                    data-form-message="I would like to travel in: Exploring Ecuador – 19 days">
                    Do you want to travel in a different time? <cite>Request a date.</cite>
                </a>
            </div>
          </li>
        </ul>
        
    </div>
    </hr>
    <div id="locations-to-visit-while-you-learn-spanish">
        <h2>Locations to Visit while you Learn Spanish</h2>
        @include('traveling.locations.quito')

        <hr>

        @include('traveling.locations.otavalo-indigenous-town')

        <hr>

        @include('traveling.locations.cuicocha')

        <hr>

        @include('traveling.locations.machachi')

        <hr>

        @include('traveling.locations.cotopaxi-national-park')

        <hr>

        @include('traveling.locations.quilotoa')

        <hr>

        @include('traveling.locations.horseback-ride')

        <hr>

        @include('traveling.locations.riobamba')

        <hr>

        @include('traveling.locations.guano')

        <hr>

        @include('traveling.locations.nariz-diablo-train-ride')

        <hr>

        @include('traveling.locations.banos')

        <hr>

        @include('traveling.locations.natural-waterfalls')

        <hr>

        @include('traveling.locations.misahualli')

        <hr>

        @include('traveling.locations.jungle-napo-river')

        <hr>

        @include('traveling.locations.tena')

        <hr>

        @include('traveling.locations.jumandi-caves')

        <hr>

        @include('traveling.locations.thermal-pools')
    </div>
    </hr>
</div>


@endsection


@section('bookLessons')

<hr>
<div>
    <h3>Exploring Ecuador – 19 days Travelling Clasroom</h3>
    <p class="text-center" style="font-size: 17px;">
        FROM US$ 2,899
    </p>
    <a type="submit" href="/learn-spanish-booking.html" class="btn btn-primary" style="width: 100%;"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> BOOK NOW</a>
</div>


@endsection
@push('script')
<script type="text/javascript">
    $('#asktime').click(function (event) {
        document.getElementById("message").value = $(this).data( "form-message" );
        document.getElementById("subject").value = $(this).data( "form-subject" );
    })
</script>
@endpush