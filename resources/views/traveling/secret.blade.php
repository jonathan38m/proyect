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
    <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-4-6') }}</li>
  </ol>
</nav>

<h1>
    {{ __('travelling.secret.title') }}
</h1>
<div class="info-list">

    @include('gallery', ['gallery' => $article->gallery('intro')])

    <h3>
        Exploring the amazing Galapagos Islands
    </h3>
    <p>
        <strong>The Galapagos Islands are so amazing that they almost seem unreal.</strong> You might think they are a piece of paradise or just a parallel universe. On our Travelling Classroom itinerary you will have many adventures, and get to know the culture and nature of this fantastic place.
    </p>
    <p>
        Besides learning Spanish you can hike on active volcanos, learn to surf, snorkel and go swimming. Get to know an incredible and unique flora and fauna that carry the secrets of evolution. This might be the adventure of your life!
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
            <i class="glyphicon glyphicon-ok"></i> Explore beaches and sea life when swimming, surfing and snorkeling.
        </li>
        <li class="list-courses">
            <i class="glyphicon glyphicon-ok"></i> Discover the unique flora and fauna of the Galapagos Island.
        </li>
        <li class="list-courses">
            <i class="glyphicon glyphicon-ok"></i> Spot Giant Tortoises in their natural habitat.
        </li>
        <li class="list-courses">
            <i class="glyphicon glyphicon-ok"></i> Laying on white sand and snorkeling in the turquoise water
        </li>
        <li class="list-courses">
            <i class="glyphicon glyphicon-ok"></i> Snorkel and swim in incredibly beautiful waters, next to sharks, sea turtles.
        </li>
        <li class="list-courses">
            <i class="glyphicon glyphicon-ok"></i> Have the opportunity to see what makes the Galapagos Islands so special
        </li>
        <li class="list-courses">
            <i class="glyphicon glyphicon-ok"></i> Hike to the active volcano Sierra Negra.
        </li>
        <li class="list-courses">
            <i class="glyphicon glyphicon-ok"></i> Visit historic ruins like the Muro de las Lágrimas penal colony.
        </li>
    </ul>
</div>
</hr>

<div id="available-dates-for-this-program">
    <h2>Available Dates for this Program</h2>
    <ul>
        <li>The 2nd and the 4th Saturday of every month.</li>
        <li>
            <div id="link-travel-different" class="list-group dq-list-scroll">
                <a id="asktime" class="list-group-item list-group-item-action" href="#travel-different"
                    data-form-auto="on"
                    data-form-subject="Travelling Dates Request"
                    data-form-message="I would like to travel in: Galapagos Islands Travelling Classroom “The Secret of Evolution” - 15 Days">

                    Do you want to travel in a different time? <cite>Request a date.</cite>
                </a>
            </div>
        </li>
    </ul>

</div>
</hr>
<div id="locations-to-visit-while-you-learn-spanish">
    <h2>Locations to Visit while you Learn Spanish</h2>
    @include('traveling.locations.loberia')

    <hr>

    @include('traveling.locations.san-cristobal')

    <hr>

    @include('traveling.locations.interpretation-center')

    <hr>

    @include('traveling.locations.charles-darwin-research-station')

    <hr>

    @include('traveling.locations.tortuga-bay')

    <hr>

    @include('traveling.locations.extint-volcano-santa-cruz')

    <hr>

    @include('traveling.locations.bartholomew')

    <hr>

    @include('traveling.locations.puerto-villamil')

    <hr>

    @include('traveling.locations.muro-lagrimas')

    <hr>

    @include('traveling.locations.snorkelling')

    <hr>

    @include('traveling.locations.sierra-negra')

    <hr>

    @include('traveling.locations.puerto-ayora')


</div>
</hr>

</div>

@endsection


@section('bookLessons')

<hr>
<div>
    <h3>The Secret of Evolution - 15 Days Travelling Clasroom</h3>
    <p class="text-center" style="font-size: 17px;">
        FROM US$ 3,699
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
