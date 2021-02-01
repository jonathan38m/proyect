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
            {{ __('breadcrumb.item-4-2') }}
        </li>
    </ol>
</nav>
<h1>
    {{ __('travelling.andes-amazon-12.title') }}
</h1>
<div class="info-list">
    @include('gallery', ['gallery' => $article->gallery('intro')])
    <h3>
        Explore the Amazon and the Andes in 12 Days
    </h3>
    <p>
        Sometimes you need a break to enjoy the great things in life, and with this program you can do it!
    </p>
    <p>
        On our 12-days Travelling Classroom Tour through the Andes and Amazon Jungle you will discover the most beautiful landscapes of South America, prove your courage at various outdoor activities, and learn Spanish in the paradise of Ecuador! You will definitely love it.
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
        @include('gallery', ['gallery' => $article->gallery('highlights'), 'position'=> 'rigth'])
        <ul class="highlights-list">
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok">
                </i>
                Ride a river cable car and enjoy waterfalls
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok">
                </i>
                Meet an indigenous community in Otavalo
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok">
                </i>
                Tube down the Napo River through the Amazon Jungle
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok">
                </i>
                Hike around Andean volcanoes and Amazonian jungle
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok">
                </i>
                Discover the unique flora and fauna of the Amazon on a canoe ride
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok">
                </i>
                Taste hot water springs while enjoying a marvelous scenery of the mountains
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
            The 1st and the 3rd Monday of every month.
        </li>
        <li>
            <div class="list-group dq-list-scroll" id="link-travel-different">
                <a class="list-group-item list-group-item-action" data-form-message="I would like to travel in: Andes/Amazon Jungle – 12 days" data-form-subject="Travelling Dates Request" href="#formInformation" id="asktime">
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
    @include('traveling.locations.banos')
    <hr/>
    @include('traveling.locations.natural-waterfalls')
    <hr/>
    @include('traveling.locations.misahualli')
    <hr/>
    @include('traveling.locations.jungle-napo-river')
    <hr/>
    @include('traveling.locations.tena')
    <hr/>
    @include('traveling.locations.jumandi-caves')
    <hr/>
    @include('traveling.locations.thermal-pools')
</div>
@endsection


@section('bookLessons')
<hr/>
<div>
    <h3>
        Andes/Amazon Jungle – 12 days Travelling Clasroom
    </h3>
    <p class="text-center" style="font-size: 17px;">
        FROM US$ 1,599
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
