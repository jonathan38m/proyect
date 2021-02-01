@extends('interna')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-4') class="active" @endsection

@section('content-interna')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">
                {{ __('breadcrumb.item-1') }}
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('traveling-classroom') }}">
                {{ __('breadcrumb.item-4') }}
            </a>
        </li>
        <li aria-current="page" class="breadcrumb-item active">
            {{ __('breadcrumb.item-4-3') }}
        </li>
    </ol>
</nav>
<h1>
    {{ __('travelling.andes-walking.title') }}
</h1>
<div class="info-list">
    @include('gallery', ['gallery' => $article->gallery('intro')])
    <h3>
        Explore the Andes in 12 Days
    </h3>
    <p>
        The Andes Mountain Range runs from north to south through the center of Ecuador, dividing the coast and the Amazon regions. With our 12-day
        <strong>
            Walking through the Andes
        </strong>
        program, you will have the chance to discover this impressive landscape and to learn about the history, nature and culture of Ecuador. Our Travelling Classroom combines Spanish courses with adventure, fun and action.
    </p>
</div>
<div class="list-group dq-list-scroll" id="list-example">
    <a class="list-group-item list-group-item-action" href="#highlights">
        <i class="glyphicon glyphicon-stop">
        </i>
        Highlights
    </a>
    <a class="list-group-item list-group-item-action" href="#available-dates-for-this-program">
        <i class="glyphicon glyphicon-stop">
        </i>
        Available Dates for this Program
    </a>
    <a class="list-group-item list-group-item-action" href="#locations-to-visit-while-you-learn-spanish">
        <i class="glyphicon glyphicon-stop">
        </i>
        Locations to Visit while you Learn Spanish
    </a>
</div>
<div class="scrollspy-example dq-ise-scroll" data-offset="0" data-spy="scroll" data-target="#list-example">
    <div id="highlights">
        <h2>
            Highlights
        </h2>
        <ul class="highlights-list">
            @include('gallery', ['gallery' => $article->gallery('highlights'), 'position'=> 'rigth'])
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok">
                </i>
                Meet the indigenous community of Otavalo
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok">
                </i>
                Enjoy an incredible horse-back ride in the Quilotoa Lagoon
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok">
                </i>
                View a stunning waterfall in Baños
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok">
                </i>
                Depart by the famous train to La Nariz del Diablo
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok">
                </i>
                Discover the ancient Temple of the Sun
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok">
                </i>
                Explore the cobblestoned streets of Cuenca
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok">
                </i>
                Visit Ingapirca, the most important Incan site in Ecuador
            </li>
        </ul>
    </div>
</div>
<div id="available-dates-for-this-program">
    <h2>
        Available Dates for this Program
    </h2>
    <ul>
        <li>
            The 2nd and the 4th Monday of every month.
        </li>
        <li>
            <div class="list-group dq-list-scroll" id="link-travel-different">
                <a id="asktime" class="list-group-item list-group-item-action" data-form-auto="on" data-form-message="I would like to travel in: Walking through the Andes – 12 Days" data-form-subject="Travelling Dates Request" href="#travel-different">
                    Do you want to travel in a different time?
                    <cite>
                        Request a date.
                    </cite>
                </a>
            </div>
        </li>
    </ul>
</div>
<div id="locations-to-visit-while-you-learn-spanish">
    <h2>
        Locations to Visit while you Learn Spanish
    </h2>
    @include('traveling.locations.otavalo-indigenous-town')
    <hr/>
    @include('traveling.locations.machachi')
    <hr/>
    @include('traveling.locations.horseback-ride')
    <hr/>
    @include('traveling.locations.quilotoa')
    <hr/>
    @include('traveling.locations.banos')
    <hr/>
    @include('traveling.locations.thermal-pools')
    <hr/>
    @include('traveling.locations.natural-waterfalls')
    <hr/>
    @include('traveling.locations.riobamba')
    <hr/>
    @include('traveling.locations.nariz-diablo-train-ride')
    <hr/>
    @include('traveling.locations.cuenca')
    <hr/>
    @include('traveling.locations.ingapirca')
</div>
@endsection


@section('bookLessons')
<hr/>
<div>
    <h3>
        Walking through the Andes – 12 Days Travelling Clasroom
    </h3>
    <p class="text-center" style="font-size: 17px;">
        FROM US$ 1,799
    </p>
    <a class="btn btn-primary" href="/learn-spanish-booking.html" style="width: 100%;" type="submit">
        <span aria-hidden="true" class="glyphicon glyphicon-shopping-cart">
        </span>
        BOOK NOW
    </a>
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
