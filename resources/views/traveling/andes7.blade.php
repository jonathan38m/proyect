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
    <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-4-1') }}</li>
  </ol>
</nav>

<h1>
    {{ __('travelling.andes-amazon-7.title') }}
</h1>
<div class="info-list">

    @include('gallery', ['gallery' => $article->gallery('intro')])

    <h3>
        Explore the Amazon and the Andes in 7 Days
    </h3>
    <p>
        Two of the iconic landscapes in South America include the Amazon Jungle and the Andes Mountain Range. In this Traveling Classroom adventure, we will guide you through Ecuador’s Orient and Highlands region and help you explore the best of Ecuador’s biodiversity and multicultural population in seven action-packed days.
    </p>
    <p>
        Are you ready to learn Spanish in one of the most charming places on earth?
    </p>
</div>


<div id="list-example" class="list-group dq-list-scroll">

    <a class="list-group-item list-group-item-action " href="#highlights">
        <i class="glyphicon glyphicon-stop" ></i>
        Highlights
    </a>
    <a class="list-group-item list-group-item-action" href="#available-dates-for-this-program">
        <i class="glyphicon glyphicon-stop" ></i>
        Available Dates for this Program
    </a>
    <a class="list-group-item list-group-item-action" href="#locations-to-visit-while-you-learn-spanish">
        <i class="glyphicon glyphicon-stop" ></i>
        Locations to Visit while you Learn Spanish
    </a>

</div>

<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example dq-ise-scroll">

	<div id="highlights">
		<h2>Highlights</h2>
		@include('gallery', ['gallery' => $article->gallery('highlights'), 'position'=> 'rigth'])
		
		<ul class="highlights-list">
			<li class="list-courses">
				<i class="glyphicon glyphicon-ok"></i> Enjoy the mists below the waterfall near Baños, the gateway to the jungle
			</li>
			<li class="list-courses">
				<i class="glyphicon glyphicon-ok"></i> Watch small monkeys bounce between the trees in the Amazon
			</li>
			<li class="list-courses">
				<i class="glyphicon glyphicon-ok"></i> Walk in the rainforest and tube down the Napo River through the Amazon jungle
			</li>
			<li class="list-courses">
				<i class="glyphicon glyphicon-ok"></i> Taste fresh Amazon seafood, as well as local fruits and vegetables
			</li>
			<li class="list-courses">
				<i class="glyphicon glyphicon-ok"></i> Take a cool swim underneath a waterfall in the Amazon rainforest
			</li>
			<li class="list-courses">
				<i class="glyphicon glyphicon-ok"></i> Discover the famous historic Jumandy caves and swim in the cave’s waters
			</li>
			<li class="list-courses">
				<i class="glyphicon glyphicon-ok"></i> Take a dip in the hot water springs while enjoying the beautiful Andes Mountains scenery!
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
	                    data-form-message="I would like to travel in: Andes/Amazon Jungle – 7 days">
	                    Do you want to travel in a different time? <cite>Request a date.</cite>
	                </a>
	            </div>
          	</li>
		</ul>
	</div>
	</hr>


	<div id="locations-to-visit-while-you-learn-spanish">
		<h2>Locations to Visit while you Learn Spanish</h2>
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
    <h3>Book Andes/Amazon Jungle – 7 days Travelling Clasroom</h3>
    <p class="text-center" style="font-size: 17px;">
        FROM US$999
    </p>
    <a type="submit" href="/learn-spanish-booking.html" class="btn btn-primary" style="width: 100%;">
        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> 
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