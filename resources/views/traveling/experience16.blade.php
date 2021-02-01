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
    <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-4-4') }}</li>
  </ol>
</nav>


<h1>
    {{ __('travelling.experience.title') }}
</h1>
<div class="info-list">

    @include('gallery', ['gallery' => $article->gallery('intro')])
                               
    <h3>
        Explore the whole country in 16 days
    </h3>
    <p>
        Get to know the diversity of Ecuador, discover its cultures, beautiful nature and learn Spanish. Our Travelling Classroom expedition combines adventure and language Spanish classes while exploring the most beautiful places in Ecuador. From wide farmland, snow-covered peaks, and enchanting rainforest to majestic lagoons. Read more about this fascinating program through Ecuador and get ready for the adventure of your life.
    </p>
</div>

<div id="list-example" class="list-group dq-list-scroll">

    <a class="list-group-item list-group-item-action" href="#Highlights">
        <i class="glyphicon glyphicon-stop"></i>
        Highlights
    </a>

    <a class="list-group-item list-group-item-action" href="#available-dates-for-this-program">
        <i class="glyphicon glyphicon-stop"></i>
        Available Dates for this Program
    </a>
    <a class="list-group-item list-group-item-action" href="#Locations to Visit while you Learn Spanish">
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
                <i class="glyphicon glyphicon-ok"></i> Meet the Indigenous people, buy handmade textiles and crafts
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Visit Andean village among majestic mountains and farmland
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Discover famous a spiritual ceremonial center for ritual purification
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Buy leather goods in Cotacachi or handcrafts in Otavalo
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Hike or horseback incredible ride to Quilotoa Lagoon
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Explore Baños and swim in thermal pools
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Observe spot small monkeys that bounce between the trees
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Enjoy the relaxing flow of the river while tubing in the Napo river
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Hike through the Amazon Jungle and Andean wilderness
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Take a dip in the hot water springs while enjoying the view of beautiful mountains
            </li>
        </ul>
    </div>
    </hr>

    <div id="available-dates-for-this-program">
        <h2>Available Dates for this Program</h2>
        <ul>
          <li>The 1st and the 3rd Saturday of every month.</li>
          <li>
            <div id="link-travel-different" class="list-group dq-list-scroll">
                <a id="asktime" class="list-group-item list-group-item-action" href="#travel-different"
                    data-form-auto="on"
                    data-form-subject="Travelling Dates Request"
                    data-form-message="I would like to travel in: Experience Ecuador – 16 days">
                    Do you want to travel in a different time? <cite>Request a date.</cite>
                </a>
            </div>
          </li>
        </ul>
    </div>
    </hr>

    <div id="locations-to-visit-while-you-learn-spanish">
        <h2>Locations to Visit while you Learn Spanish</h2>
        @include('traveling.locations.otavalo-indigenous-town')

        <hr>

        @include('traveling.locations.cuicocha')

        <hr>

        @include('traveling.locations.cotacachi')

        <hr>

        @include('traveling.locations.machachi')

        <hr>

        @include('traveling.locations.boliche-national-park')

        <hr>

        @include('traveling.locations.quilotoa')

        <hr>

        @include('traveling.locations.horseback-ride')

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
    <h3>Experience Ecuador – 16 days Travelling Clasroom</h3>
    <p class="text-center" style="font-size: 17px;">
        FROM US$ 2,299
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