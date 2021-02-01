@extends('interna')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-3') class="active" @endsection

@section('content-interna')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('breadcrumb.item-1') }}</a></li>
    <li class="breadcrumb-item"><a href="{{ route('destinations') }}">{{ __('breadcrumb.item-3') }}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-3-3') }}</li>
</ol>
</nav>


<h1>
    {{ __('destinations.amazon.title') }}
</h1>
<div class="info-list">

    @include('gallery', ['gallery' => $article->gallery('amazon-jungle')])

    <p>
        The Amazon Jungle is home to the largest concentration of animal species per square kilometer in the world. A large part of this region is protected and many areas have been declared as either natural reserves or national parks. Some of these areas include Yasuni, Cuyabeno, Cayambre-Coca, Sangay, and Sumaco-Galeras, among others.
    </p>
    <p>
        As an example of the incredible wildlife that exists in the Amazon, the Yasuni National Park, which was designated by UNESCO as a Biosphere Reserve, contains an estimated 150 amphibian species, 121 reptile species, and 598 bird species. In addition, there are 169 confirmed mammal species, 204 estimated mammal species, and 2113 of 3100 estimated plant species in Yasuni National Park.
    </p>

    @include('gallery', ['gallery' => $article->gallery('amazon-jungle'), 'position'=>'right', 'thumbail' => '2'])

    <p>
        Ecuador has 14 different ethnic groups, 10 of which belong to the Amazon Jungle. These groups include the Amazonic Kichuas, Shuar, Achuar, Secoya, Siona, Cofan, Shiwiar, Andoa, and Zapara. There are also other non-contacted groups, such as the Taromenane and the Tagaeri, which are considered part of the Waorani clan.
    </p>
</div>

<div id="list-example" class="list-group dq-list-scroll">

    <a class="list-group-item list-group-item-action " href="#Our-Spanish-Institute-in-The-Amazon-Jungle">
        <i class="glyphicon glyphicon-stop" ></i>
        Our Spanish Institute in The Amazon Jungle
    </a>
    <a class="list-group-item list-group-item-action " href="#Our-Spanish-Courses-in-The-Amazon-Jungle">
        <i class="glyphicon glyphicon-stop" ></i>
        Our Spanish Courses in The Amazon Jungle
    </a>
    <a class="list-group-item list-group-item-action " href="#Accommodation-in-The-Amazon-Jungle">
        <i class="glyphicon glyphicon-stop" ></i>
        Accommodation in The Amazon Jungle
    </a>
    <a class="list-group-item list-group-item-action " href="#Activities-in-The-Amazon-Jungle">
        <i class="glyphicon glyphicon-stop" ></i>
        Activities in The Amazon Jungle
    </a>
    <a class="list-group-item list-group-item-action " href="#Recommended-Clothes-And-Equipment">
        <i class="glyphicon glyphicon-stop" ></i>
        Recommended Clothes And Equipment
    </a>
    <a class="list-group-item list-group-item-action " href="#How-To-Get-Our-Location-In-The-Amazon-Jungle">
        <i class="glyphicon glyphicon-stop" ></i>
        How To Get Our Location In The Amazon Jungle
    </a>
    <a class="list-group-item list-group-item-action " href="#Included-Not-Included">
        <i class="glyphicon glyphicon-stop" ></i>
        Included / Not Included
    </a>

</div>
<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example dq-ise-scroll">

	<div id="Our-Spanish-Institute-in-The-Amazon-Jungle">
		<h2>Our Spanish Institute in The Amazon Jungle</h2>
		@include('gallery', ['gallery' => $article->gallery('our-spanish-institute-amazon')])

		<p>
			Are you looking for an adventure? Then this program is right for you! You will learn Spanish in the wilderness, discover the local culture, and put your courage to the test in many outdoor activities. <strong>Our Spanish program is the best way to learn Spanish and explore the Amazon Jungle.</strong>
		</p>
		<p>
			ISE classes in the Amazon Jungle started in 1998. Since this time, ISE has worked closely with indigenous communities and accommodation properties to ensure that our participants have a wonderful and informative experience without negatively impacting the natural environment and indigenous culture in the Amazon.
		</p>
		<p>
			Our program is held in an eco-lodge which is located one hour by motorized canoe from the city of Coca. Classes in the eco lodge take place in spacious and comfortable common areas. Safety is not an issue while staying with the eco lodge.
		</p>
	</div>

	<hr/>

	<div id="Our-Spanish-Courses-in-The-Amazon-Jungle">
		<h2>Our Spanish Courses in The Amazon Jungle</h2>
		@include('gallery', ['gallery' => $article->gallery('our-spanish-courses-amazon')])

		<p>
			The Amazon Jungle program is one of the most interesting Spanish learning programs offered by ISE. Our Amazon Spanish Courses give you the opportunity to take Spanish classes and learn about the Amazon Rainforest in this biologically diverse area.
		</p>
		<p>
			Your classes will take place in the morning for a minimum of four hours a day. In the afternoons, you will have the opportunity to discover the beauty of the jungle and enjoy fun activities and excursions. Teachers will set a short exercise for homework each day. We offer classes for Beginner, Elementary, Intermediate and Advanced levels of Spanish.
		</p>

	</div>

	<hr/>

	<div id="Accommodation-in-The-Amazon-Jungle">
		<h2>Accommodation in The Amazon Jungle</h2>
		<ul class="list-sub">
			<li>
				<h3>
					The Amazon Eco Lodge
				</h3>
				<div class="info-list">

					<p>
						Our beautiful Eco Lodge is located on the Napo River only 40-60 minutes by covered motorized canoe from Puerto Francisco de Orellana (EL COCA). The lodge offers 20 huts with single, double, triple and quadruple accommodations. Each hut is equipped with beds (all beds are covered by mosquito nets), a private bathroom with complimentary toiletries and towels, a closet, a hammock, and a lamp. There is hot running water 24 hours a day and electricity is provided via a generator from 18H00 till 22H00 (110 V.)
					</p>
					<p>
						The Eco Lodge is strategically located in an area of the jungle that contains the greatest diversity of micro-habitats in the Napo area. This means that there are more species of animals, birds, reptiles and insects than anywhere else in the Napo River area.
					</p>
					<p>
						The kitchen staff at the lodge offer a healthy variety of food including vegetarian options. Program participants will also have a security box to store their valuables.
					</p>
				</div>
			</li>
			<li>
				<h4>
					Important Note:
				</h4>
				<div class="info-list">

					<p>
						An unavoidable element of the rainforest is contact with bugs, spiders, and other creepy crawlies – this applies to all kinds of Amazon lodges. It is possible that you will find insects inside of your room. If this is not something you want to encounter, then a trip to the rainforest is probably not for you.
					</p>
					<p>
						The Amazon is hot and humid all year round and mosquitoes and sand flies are present all year, 24 hours a day. Make sure to bring enough mosquito repellent!
					</p>
					<p>
						Banks and ATMs are available at Coca city, one hour by canoe from our Amazon Eco-Lodge.
					</p>
				</div>
			</li>
		</ul>

	</div>

	<hr/>

	<div id="Activities-in-The-Amazon-Jungle">
		<h2>Activities in The Amazon Jungle</h2>
		<p>
			While in the Amazon, you will enjoy breathtaking trees, rich flora and fauna, and spectacular trips down the Napo River. You will take hikes through the jungle, navigate the river at night while looking for caimans, and encounter the traditional homes of many indigenous communities.
		</p>
		<ul class="list-sub">
			<li>
				<h3>Observing Wildlife</h3>
				<div class="info-list">

					@include('gallery', ['gallery' => $article->gallery('observing-wildlife')])

					<p>
					   The Amazon offers the world’s largest variety of animals including armadillos, honey bears, sloths, bats, tapirs, peccaries, jaguars, monkeys, manatees and many more. There are an incredible number of birds including hummingbirds, toucans, macaws, and tanagers on land, and darters, herons, and gulls on water. This trip offers incredible birdwatching opportunities in an area where over 350 species of birds have been recorded.
					</p>
				</div>
			</li>
			<li>
				<h3>Explore The Jungle at Night</h3>
				<div class="info-list">

					@include('gallery', ['gallery' => $article->gallery('explore-jungle-night')])

					<p>
						Grab a flashlight and our guide will show you hundreds of night time insects and small animals. Don’t forget your bug spray!
					</p>
				</div>
			</li>
			<li>
				<h3>Hiking</h3>
				<div class="info-list">

					@include('gallery', ['gallery' => $article->gallery('hiking')])

					<p>
					   Walk the Socali trail, which is characterized by different types of tropical forest. Here, you will receive an excellent introduction to the jungle and its diverse flora, fauna, and animals.
					</p>
				</div>
			</li>
			<li>
				<h3>Visit An Indigenous Family</h3>
				<div class="info-list">

					@include('gallery', ['gallery' => $article->gallery('visit-indigenous-family')])

					<p>
					   During one day of your week in the Amazon, we will take the motor boat to visit an indigenous family. Here, our guides will explain the traditions and customs of this indigenous group and you will gain first-hand knowledge of this family’s way of life.
					</p>
				</div>
			</li>
			<li>
				<h3>Piranha Fishing</h3>

				<div class="info-list">

					@include('gallery', ['gallery' => $article->gallery('piranha-fishing')])

					<p>
					   Experience fishing like never before! Enjoy a piranha fishing tour in the middle of the jungle, and enjoy the beautiful sites, the clean air, and the sounds of the jungle.
					</p>
				</div>
			</li>
		</ul>

	</div>

	<hr/>

	<div id="Recommended-Clothes-And-Equipment">
		<h2>Recommended Clothes And Equipment</h2>
		@include('gallery', ['gallery' => $article->gallery('recommended-clothes-equipment')])

		<p>
			For most activities you will need comfortable shoes, lightweight and long pants, a comfortable t-shirt, a bathing suit, a flashlight, and a light rain jacket. Because of the insects and the humidity, it is better to wear lightweight, fast-drying pants rather than shorts. Rubber boots will be provided to you by the lodge, so you can enjoy your activities without worrying about mud or puddles. Weather is unpredictable, so taking a windbreaker or light rain jacket with you on all trips is a good idea. We also recommend bringing sunscreen, bug spray and a hat.
		</p>

	</div>

	<hr/>

	<div id="How-To-Get-Our-Location-In-The-Amazon-Jungle">
		<h2>How To Get Our Location In The Amazon Jungle</h2>
		@include('gallery', ['gallery' => $article->gallery('how-to-get-location-amazon')])

		<p>
			Transportation from Quito to the Amazon Jungle is available by public bus and by plane. If you decide to travel to Coca by plane, we can assist you with booking the flight from Quito to Coca and back. Flights will depart from Quito on Monday in the morning and will return on Friday in the afternoon. The price of your flight is not included in the program cost.
		</p>
		<p>
			If you decide to travel by public bus, the ticket will be included in the program cost and the trip will work as follows:
		</p>


		<ul>
			<li>
				<p>
					You will travel from Quito to Coca in an overnight public bus. The public bus departs from Quito on Sundays around 10:00 pm. Students and teachers need to be at the bus terminal station at least one hour before departure.
				</p>
			</li>
			<li>
				<p>
					The public bus will arrive in the city of Coca in the Amazon Jungle early Monday morning.
				</p>
			</li>
			<li>
				<p>
					Friday after lunch, you (along with your Spanish teachers) will depart from the Eco-Lodge by a motor canoe through Napo River to the city of Coca.
				</p>
			</li>
			<li>
				<p>
					For the return trip, you will travel from Coca to Quito in an overnight bus. The public bus departs from Coca on Fridays around 8:00pm. Students and teachers need to be at the bus terminal station at least one hour before departure.
				</p>
			</li>
		</ul>

		<p>
			Please Note: The public bus will arrive in Quito very early in the morning which means that students should book a place to stay until the sun rises. This additional night of accommodation is not included in the program cost.
		</p>

	</div>

	<hr/>

	<div id="Included-Not-Included">
		<h2>Included / Not Included</h2>
		<h3>ISE Classes</h3>
		<hr>
		<div class="row">
			<div class="col-md-6">
				<table class="table table-striped exact-td">
					<thead>
					   <tr>
						   <th>
								<h4 class="line-left">Included</h4>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<p>20 class hours minimum</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Textbooks</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Notebooks</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Pens, pencils and other stationary</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Complimentary activities held at ISE</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Complimentary coffee and water between breaks</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Airport pickup upon arrival in Quito, transfer to accommodation, and return trip to Quito at the end of the program (if students choose to take the 9 hour public bus trip)</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>20 hours of group Spanish classes with maximum 4 students per class.</p>
							</td>
						<tr>
						</tr>
							<td>
								<p>Round-trip Coca – Eco Lodge – Coca (1 hour by motorized canoe).</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Accommodation in double, or quadruple Indian huts 5 days / 4 nights per week.</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Full board (breakfast, lunch and dinner), except during transit through Coca.</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Guided afternoon excursions Monday through Friday and one night excursion.</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div><div class="col-md-6"  style="vertical-align: top;">
				<table class="table table-striped exact-td">
					<thead>
					   <tr>
							<th>
								<h4 class="line-left">Not included</h4>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<p>Round trip flight ticket: Quito – Coca - Quito.</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Personal expenses including food during the transit through Coca and in Quito.</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Additional nights of accommodation, before and after the first 5 days/4 nights program.</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Tips</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

	</div>

</div>

@endsection

@section('bookLessons')

<hr>
<div>
    <h3>Book Spanish Lessons in the Amazon Jungle</h3>
    <p class="text-center" style="font-size: 17px;">
        ONE WEEK FROM US$999
    </p>
    <a href="/learn-spanish-booking.html" class="btn btn-primary w-100" ><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> BOOK NOW</a>
</div>


@endsection
