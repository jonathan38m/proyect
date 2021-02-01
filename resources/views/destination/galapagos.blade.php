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
    <li class="breadcrumb-item" aria-current="page">{{ __('breadcrumb.item-3-4') }}</li>
  </ol>
</nav>

<h1>
    {{ __('destinations.galapagos.title') }}
</h1>
<div class="info-list">

    @include('gallery', ['gallery' => $article->gallery('amazing-galapagos-islands')])

    <p>
        The Galapagos Islands or Archipelago de Colon, declared as a UNESCO World Heritage site in 1978, are located in the Pacific Ocean 1000 Km off the Ecuadorian Coast. The islands are composed of 13 large volcanic islands, 6 smaller islands, and 107 islets and rocks.
    </p>
    <p>
        Because of its flora and fauna, Galapagos is considered to be one of the few natural living laboratories left on our planet. Some visit the islands to witness the evolutionary processes recorded by Charles Darwin. Others simply come to enjoy “heaven on earth”.
    </p>
    <p>
        While visiting the Galapagos, you will encounter awe-inspiring opportunities to observe natural wonders and diverse animal life. The Galapagos Islands contain long stretches of beach considered to be some of the best and most beautiful in the world.
    </p>
    <p>
        The Marine Reserve in Galapagos is the second largest in the world, and is home to the one of the world’s most spectacular coral reefs. In its waters, you will find the greatest shark biomass on earth, as well as a unique whale and shark migration destination for mating and giving birth. In addition, the zone between Wolf and Darwin Islands is considered the best in the world for scuba diving and snorkeling due to the incredible concentration of marine species.
    </p>
    <p>
        Visit the Galapagos and swim with unique species, observe ancient natural formations, and experience the local culture and language of the islands. We promise that a visit to the “Enchanted Islands” is a visit you will not soon forget.
    </p>
</div>



<div class="row overview">
    <article class="col-md-6" >
        <div class="item">
            <a href="#7-day-land-tour-galapagos">
                <h2>7-Day Galapagos Spanish Program</h2>
            </a>
            <a href="#7-day-land-tour-galapagos" class="img-link-item" >
                <img alt="7-Day Galapagos Spanish Program" src="{{ URL::asset( 'images/destinations/ise-galapagos/7-day-galapagos-spanish-program.jpg') }}">
            </a>
            <a href="{{ route('booking') }}">Book from US$ 1,999</a>
        </div>
    </article><article class="col-md-6" >
        <div class="item">
            <a href="#14-day-galapagos-cruise">
                <h2> 14-Day Galapagos Spanish Program</h2>
            </a>
            <a href="#14-day-galapagos-cruise" class="img-link-item" >
                <img alt="14-Day Galapagos Spanish Program" src="{{ URL::asset( 'images/destinations/ise-galapagos/11-day-galapagos.spanish-programm.jpg') }}">
            </a>
            <a href= " {{ route('booking') }} " >Book from US$ 4,999</a>
        </div>
    </article>
</div>
<div class="row overview">
    <article class="col-md-6" >
        <div class="item">
            <a href="#14-day-galapagos-islands">
                <h2>14-Day Galapagos Spanish Immersion</h2>
            </a>
            <a href="#14-day-galapagos-islands" class="img-link-item" >
                <img alt="14-Day Galapagos Spanish Immersion" src="{{ URL::asset( 'images/destinations/ise-galapagos/14-day-galapagos-spanish-immersion.jpg') }}">
            </a>
            <a href="{{ route('booking') }}">Book from US$ 3,898</a>
        </div>
    </article><article class="col-md-6" >
        <div class="item">
            <a href="#11-days-galapagos-san-cristobal">
                <h2> 11-Day Galapagos Spanish Program</h2>
            </a>
            <a href="#11-days-galapagos-san-cristobal" class="img-link-item" >
                <img alt="11-Day Galapagos Spanish Program" src="{{ URL::asset( 'images/destinations/ise-galapagos/11-day-galapagos.spanish-program.jpg') }}">
            </a>
            <a href="{{ route('booking') }}">Book from US$ 3,599</a>
        </div>
    </article>
</div>





<div id="list-example" class="list-group dq-list-scroll">

	<a class="list-group-item" href="#Our-Spanish-Institute-in-the-Galapagos-Islands">
        <i class="glyphicon glyphicon-stop" ></i>
        Our Spanish Institute in the Galapagos Islands
    </a>
    <a class="list-group-item" href="#Our-Spanish-Courses-in-the-Galapagos-Islands">
        <i class="glyphicon glyphicon-stop" ></i>
        Our Spanish Courses in the Galapagos Islands
    </a>
    <a class="list-group-item" href="#Our-Spanish-Programs-in-the-Galapagos-Islands">
        <i class="glyphicon glyphicon-stop" ></i>
        Our Spanish Programs in the Galapagos Islands
    </a>
    <a class="list-group-item" href="#Accommodation-in-The-Galapagos-Islands">
        <i class="glyphicon glyphicon-stop" ></i>
        Accommodation in The Galapagos Islands
    </a>
    <a class="list-group-item" href="#Activities-in-The-Galapagos-Islands">
        <i class="glyphicon glyphicon-stop" ></i>
        Activities in The Galapagos Islands
    </a>
    <a class="list-group-item" href="#Recommended-Clothes-and-Equipment">
        <i class="glyphicon glyphicon-stop" ></i>
        Recommended Clothes and Equipment
    </a>
    <a class="list-group-item" href="#The-Climate-in-the-Galapagos-Islands">
        <i class="glyphicon glyphicon-stop" ></i>
        The Climate in the Galapagos Islands
    </a>
    <a class="list-group-item" href="#How-to-Get-to-the-Galapagos-Islands">
        <i class="glyphicon glyphicon-stop" ></i>
        How to Get to the Galapagos Islands
    </a>
    <a class="list-group-item" href="#Included-Not-Included">
        <i class="glyphicon glyphicon-stop" ></i>
        Included / Not Included
    </a>

</div>
<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example dq-ise-scroll">

	<div id="Our-Spanish-Institute-in-the-Galapagos-Islands">
		<h2>Our Spanish Institute in the Galapagos Islands</h2>
		@include('gallery', ['gallery' => $article->gallery('our-spanish-institute')])

		<p>
			Instituto Superior de Español opened its first course in the Galapagos Islands in May of 1996 in Puerto Ayora in Santa Cruz Island. Today, ISE offers programs in facilities located in Santa Cruz and San Cristobal. Your courses will take place in the heart of Puerto Ayora, the largest settlement on the island of Santa Cruz, or in Puerto Baquerizo Moreno on the island of San Cristobal.
		</p>
		<p>
			Classes are held in the morning and teachers will set a short exercise for homework each day. In the afternoon, a local guide will help you discover the incredible natural beauty of the Galapagos Islands. We offer classes for Beginner, Elementary, Intermediate and Advanced levels of Spanish.
		</p>
	</div>

	<hr/>

	<div id="Our-Spanish-Courses-in-the-Galapagos-Islands">
		<h2>Our Spanish Courses in the Galapagos Islands</h2>
		@include('gallery', ['gallery' => $article->gallery('our-spanish-courses')])

		<p>
			For your <strong>Spanish language course on the Galapagos Islands</strong> you can choose between group and private courses. Instituto Superior de Español is delighted to prepare a customized program that will incorporate all your wishes and will include a great balance between learning the Spanish language and experiencing the Galapagos Islands. Your customized program will include Spanish courses, accommodation, and excursions.
		</p>
		<p>
			Instituto Superior de Español in the Galapagos Islands offers classes for beginner, elementary, intermediate and advanced levels. ISE has spent many years refining its teaching method and creating an effective Spanish course that focuses on the development of speaking, listening, thinking and writing skills in Spanish.
		</p>
		<p>
			Spanish classes focus on vocabulary, grammar, conversation, readings, and pronunciation and they incorporate practical communication skills which our students can use outside the classroom right away.
		</p>
		<p>
			Before the beginning of your <strong>Spanish language</strong> course we will evaluate your knowledge so that we can adapt your individual learning program to your personal needs. Your progress will be monitored on a daily basis so that we can customize your course and ensure that you obtain optimum success in your language program.
		</p>
	</div>
	<hr/>

	<div id="Our-Spanish-Programs-in-the-Galapagos-Islands">
		<h2>Our Spanish Programs in the Galapagos Islands</h2>
		<ul class="list-sub">
			<li>
				<h3 id="7-day-land-tour-galapagos" class="title-bottom">
					7-Day Land Tour Galapagos Spanish Program in Santa Cruz Island
				</h3>

				<div class="info-list margin-20">

					<p>
						During this program, you will enjoy Santa Cruz, the second biggest island of the archipelago, and you will have a fabulous experience learning Spanish with us in Puerto Ayora.
					</p>
					<p>
						Puerto Ayora, the capital of Santa Cruz, offers many tourist facilities and has the largest population in Galapagos. In the Puerto Ayora harbor, you can observe endemic wildlife such as pelicans, frigate birds, blue footed boobies, and sea lions.
					</p>
					<p>
						In Puerto Ayora, you will study Spanish for 20 hours of classes per week (4 hours per day).
					</p>
					<p>
						Classes are held in the morning and after lunch you will have the opportunity to participate in amazing guided excursions.
					</p>
					<p>
						The program includes one day boat trip to discover another Island in Galapagos such as San Cristobal, Santa Fe, Isabela, Floreana, Bartholomew or North Seymour Islands.
					</p>
					<p>
						Accommodation is organized at a first-class hotel which includes facilities such as mini buffet breakfast, lovely rooms, a swimming pool, restaurant, and bar.
					</p>
					<p>
						Classes start at 8:30 AM, visits and trips around the island take place in the afternoon after lunch. Class schedule and tour itineraries are planned by ISE prior to your trip. Students are given a detailed list of activities ahead of time.
					</p>
					<p>
						This program is available to students of all level placements.
					</p>

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
											<p>7 days / 6 nights accommodation in a first-class hotel with a great location in Puerto Ayora (includes breakfast buffet)</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>20 hours of group classes with a maximum of 4 students per class. Students must be in the same class level.</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Four excursions in the beautiful Galapagos Islands per week (during your week of Spanish classes).</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>One day boat trip to discover another beautiful Galapagos Island.</p>
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
											<p>Flight ticket to and from the Galapagos Islands</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Immigration card to visit the Galapagos Islands (US $20)</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Galapagos National Park entrance fee (US $100)</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Lunch and dinner</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Personal expenses</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Excursions not indicated in the itinerary </p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<h4>Please Note:</h4>

					<p>
						In the event that there are no other students in your placement level, you will have the opportunity to take individualized classes. However, due to the higher costs of the Galapagos Islands, there is a supplement of an additional 25% of the original price for private Spanish course.
					</p>


				</div>
			</li>
			<li>
				<hr>
				<h3  id="14-day-galapagos-cruise" class="title-bottom">
					1𝟦-Day Galapagos Cruise & Santa Cruz Island Spanish Program
				</h3>
				<div class="info-list  margin-20">
					<p>
						During this program, you will spend one week studying Spanish in the heart of Puerto Ayora on Santa Cruz Island with 20 hours of classes per week (4 hours per day). The Spanish classes will be held in the morning and after lunch you will take excursions to discover the incredible natural wealth of the islands.
					</p>
					<p>
						During the second half of your program, you will go on an 𝟾-Day/ 𝟩-Night beautiful cruise in the amazing Galapagos Islands.
					</p>
					<ul class="ul-style-default">
						<li>Class schedule and tour itineraries are planned by ISE prior to your trip.</li>
						<li>Students are given a detailed list of activities ahead of time. </li>
						<li>Accommodation includes a first-class hotel.</li>
						<li>This program is available to students of all level placements.</li>
					</ul>

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
											<p>𝟾 Days / 𝟩 Nights in a beautiful cruise that will take you through different islands. This is a great way to discover the Galapagos Islands.</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>7 days / 6 nights accommodation in a first-class hotel with a great location in Puerto Ayora.</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Accommodation rate includes buffet breakfast.</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>
												20 hours of group classes with a maximum of 4 students per class.
												<br/>
												<strong>Please note:</strong>
												Students must be in the same class level.
											</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Four excursions in the beautiful Galapagos Islands per week (during your week of Spanish classes).</p>
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
											<p>Flight ticket to and from the Galapagos Islands</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Immigration card to visit the Galapagos Islands (US $20)</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Galapagos National Park entrance fee (US $100)</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Lunch and dinner</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Personal expenses</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Excursions not indicated in the itinerary </p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<h4>
						Please Note:
					</h4>

					<p>
						In the event that there are no other students in your placement level, you will have the opportunity to take individualized classes. However, due to the higher costs of the Galapagos Islands, there is a supplement of an additional 25% of the original price for private Spanish course.
					</p>

				</div>
			</li>
			<li>
				<hr>
				<h3 id="14-day-galapagos-islands" class="title-bottom">
					14-Day Galapagos Islands Spanish Immersion program
				</h3>
				<div class="info-list margin-20">
					<p>
						During this program, you will combine one week of Spanish courses in San Cristobal Island with another week of Spanish courses in Santa Cruz Island.
					</p>
					<p>
						Here, you will study Spanish with 20 hours of classes per week (4 hours per day). Classes are held in the morning and after lunch you will have the opportunity to participate in excursions.
					</p>
					<p>
						Learn Spanish and explore the Galapagos Islands with daily afternoon excursions. Visit the San Cristobal Interpretive Center, relax on the beautiful beaches, swim, snorkel, and organize your own daily dives to become a "PADI certified diver" while discovering the amazing Galapagos Islands.
					</p>
					<p>
						Classes start at 8:30 AM, and visits and trips around the island take place in the afternoon after lunch. Class schedule and tour itineraries are planned by ISE prior to your trip. Students are given a detailed list of activities ahead of time.
					</p>
					<p>
						This program will take place with one week in San Cristobal Island and another week in Santa Cruz or vice-versa according to availability.
					</p>
					<p>
						This program is available to students of all level placements.
					</p>

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
											<p><strong>7 days / 6 nights accommodation</strong> in a cozy, well-situated hotel or hostel with an impressive view of the Island in Puerto Baquerizo Moreno, <strong>San Cristobal Island</strong>. Accommodation rate includes breakfast.</p>
										</td>
									</tr>
									<tr>
										<td>
											<p><strong>7 days / 6 nights accommodation</strong> in a first-class hotel in Puerto Ayora <strong>in Santa Cruz Island</strong>. Accommodation rate includes buffet breakfast.</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>20 hours per week in group courses with a maximum of 4 students per class. Students must be in the same class level.</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Four excursions in the beautiful Galapagos Islands per week (during your week of Spanish classes).</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>One full day boat trip per each week to discover other Islands in Galapagos such as Española, Isabela, Santa Fe, Bartholomew or North Seymour Island</p>
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
											<p>Flight ticket to and from the Galapagos Islands</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Immigration card to visit the Galapagos Islands (US $20)</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Galapagos National Park entrance fee (US $100)</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Lunch and dinner</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Personal expenses</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Excursions not indicated in the itinerary </p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<h4>
						Please Note:
					</h4>

					<p>
						In the event that there are no other students in your placement level, you will have the opportunity to take individualized classes. However, due to the higher costs of the Galapagos Islands, there is a supplement of an additional 25% of the original price for private Spanish course.
					</p>

				</div>
			</li>
			<li>
				<hr>
				<h3 id="11-days-galapagos-san-cristobal" class="title-bottom">
					11-Day Galapagos Cruise & San Cristobal Island Spanish program
				</h3>
				<div class="info-list margin-20">
					<p>
						During this program, you will combine a 5-Day/4-Night beautiful cruise in the amazing Galapagos Islands with a one-week Spanish course in Puerto Baquerizo Moreno, the capital of the Galapagos Islands.
					</p>
					<p>
						Here, you will study 20 hours of Spanish lessons per week (4 hours per day) in the mornings. In the afternoons, you will experience a variety of activities such as exploring, snorkeling, and discovering the wonders of the Islands. Classes start at 8:30 AM, and visits and trips around the island take place in the afternoon after lunch. Class schedule and tour itineraries are planned by ISE prior to your trip. Students are given a detailed list of activities ahead of time.
					</p>
					<p>
						Accommodation includes a cozy hostel or hostel with a marvelous view of the Island.
					</p>
					<p>
						This program is available to students of all level placements.
					</p>

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
											<p>5 days / 4 nights in a beautiful cruise that will take you through different islands. This is a great way to discover the Galapagos.</p>
										</td>
									</tr>
									<tr>
										<td>
											<p> <strong>7 days / 6 nights accommodation</strong> in a cozy, well-situated hotel or hostel with an impressive view of the Island in Puerto Baquerizo Moreno, <strong>San Cristobal Island</strong>. Accommodation rate includes breakfast.</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>20 hours of group classes with a maximum of 4 students per class. Students must be in the same class level.</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Four excursions in the beautiful Galapagos Islands per week (during your week of Spanish classes).</p>
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
											<p>Flight ticket to and from the Galapagos Islands</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Immigration card to visit the Galapagos Islands (US $20)</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Galapagos National Park entrance fee (US $100)</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Lunch and dinner</p>
										</td>
									</tr>
									<tr>
										<td>
											<p>Personal expenses</p>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<h4>
						Please Note:
					</h4>

					<p>
						In the event that there are no other students in your placement level, you will have the opportunity to take individualized classes. However, due to the higher costs of the Galapagos Islands, there is a supplement of an additional 25% of the original price for private Spanish course.
					</p>

				</div>
			</li>
		</ul>

	</div>
	<hr/>

	<div id="Accommodation-in-The-Galapagos-Islands">
		<h2>Accommodation in The Galapagos Islands</h2>
		<ul class="list-sub">
			<li>
				<h3>Santa Cruz Island</h3>
				<div class="info-list">

					@include('gallery', ['gallery' => $article->gallery('santa-cruz-island')])

					<p>
					   On Santa Cruz Island we will organize your stay at a first-class hotel since it offers better service than other kind of placement. This hotel provides clean and comfortable accommodation and hospitable and helpful staff. The hotel also provides complimentary WiFi, a pool, hot tub, a well-equipped bar and restaurant, and laundry services.
					</p>
				</div>
			</li>
			<li>
				<h3>San Cristobal Island</h3>
				<div class="info-list">

					@include('gallery', ['gallery' => $article->gallery('san-cristobal-island')])

					<p>
						In San Cristobal Island we work with a few great hotels and hostels, all of which offer impressive views of the Islands. The atmospheres of these accommodations are very welcoming and they offer comfortable rooms and a great staff that will gladly assist you at any time. All hotels and hostels offer single, double, triple and quadruple rooms with private bathrooms, hot water, air conditioning, and Wi-Fi in all property areas
					</p>
				</div>
			</li>
		</ul>

	</div>
	<hr/>

	<div id="Activities-in-The-Galapagos-Islands">
		<h2>Activities in The Galapagos Islands</h2>
		@include('gallery', ['gallery' => $article->gallery('activities')])

		<p>
			With the incredible diversity and beauty of wildlife on land and in water in the Galapagos, you will have ample opportunity to view animals in their natural habitats during hikes, bike rides, and swims. Diving and snorkeling are particularly popular activities along the coasts of Ecuador's archipelago. As you explore the underwater world of the Galapagos Islands, you will swim with tame sea lions, turtles, dolphins, and multicolored fish and you will observe the fascinating underwater landscape of reefs, mangroves and lava formations.
		</p>
		<p>
			The individual Galapagos Islands can be explored in many different ways and there are numerous tours that emphasize different activities. Your tours may include some combination of hiking, horseback riding, or biking, plus diving, snorkeling, sailing, kayaking, climbing or swimming.
		</p>
		<ul class="list-sub">
			<li>
				<h3>Tortuga Bay</h3>
				<div class="info-list">

					@include('gallery', ['gallery' => $article->gallery('tortuga-bay')])

					<p>
					   Tortuga Bay is a beautiful white sand beach just outside of Puerto Ayora. Once you have registered with the park, you can walk a 2.5 km trail where you will observe Darwin finches and the diverse flora and fauna. If you start the trail early enough, you will be able to observe hundreds of marine iguanas that sunbathe at the western end of the beach.
					</p>
				</div>
			</li>
			<li>
				<h3>Tour of Bahia</h3>
				<div class="info-list">

					@include('gallery', ['gallery' => $article->gallery('tour-bahia')])

					<p>
					   At the Playa de los Perros, you will encounter blue-footed boobies, pelicans, and marine iguanas. Here you can swim or snorkel in Las Grietas, a volcanic formation with clear fresh water. In addition, you will enjoy the spectacular sight of La Lobería which home to a large colony of sea lions and giant Galapagos tortoises.
					</p>
				</div>
			</li>
			<li>
				<h3>Charles Darwin Research Center</h3>
				<div class="info-list">

					@include('gallery', ['gallery' => $article->gallery('charles-darwin-research-station')])

					<p>
					   At the interactive Darwin Research Center museum, you will have the opportunity to learn about the history and science of the archipelago. You will also learn about different conservation projects on the island, including the preservation of the giant tortoise in the wild.
					</p>
				</div>
			</li>
			<li>
				<h3>Highlands Tour In Santa Cruz </h3>
				<div class="info-list">

					@include('gallery', ['gallery' => $article->gallery('highlands-tour-santa-cruz')])

					<p>
					   During the Highlands Tour in Santa Cruz, you will gasp at beautiful landscapes of rolling hills and extinct volcanic cones covered with endemic grass and lush greenery all year round. You can explore tunnel caves and marvel at the diversity of fauna on the island. In addition, it is always possible to see giant tortoises in their natural habitat.
					</p>
				</div>
			</li>
			<li>
				<h3>Muro De Lagrimas </h3>
				<div class="info-list">

					@include('gallery', ['gallery' => $article->gallery('muro-lagrimas')])

					<p>
					   Just eight kilometers from Puerto Villamil on Isabela Island, Muro de Lagrimas, or “Wall of Tears” is a historic wall built by prisoners of the Galapagos penal colony during the 1940s and 50s. At this site, you can learn more about the history of this former prison and you can also enjoy a breathtaking view of Isabela Island. The site can be reached by walking or bicycling.
					</p>
				</div>
			</li>
			<li>
				<h3>Snorkeling And Diving</h3>
				<div class="info-list">

					@include('gallery', ['gallery' => $article->gallery('snorkeling-diving')])

					<p>
					   The Galapagos Islands provide incredible opportunities to snorkel and swim with sea lions, sea turtles, beautifully colored fish, sharks, etc. Our Spanish programs include boat tours where you will explore the rich underwater world!
					</p>
				</div>
			</li>
		</ul>

	</div>
	<hr/>

	<div id="Recommended-Clothes-and-Equipment">
		<h2>Recommended Clothes and Equipment</h2>
		@include('gallery', ['gallery' => $article->gallery('recommended-clothes-equipment')])

		<p>
			For most activities you will need comfortable shoes and sandals that will allow you to occasionally walk in lava rocks, lightweight pants or shorts, a comfortable t-shirt, a bathing suit, and a light rain jacket. A windbreaker will make the dinghy trips more comfortable, especially when you travel from island to island. Towels are provided by the hotel. We also recommend bringing sunscreen, bug spray, a hat and a lot of memory space on your phone or camera because there will be hundreds of beautiful pictures to take!
		</p>

	</div>
	<hr/>

	<div id="The-Climate-in-the-Galapagos-Islands">
		<h2>The Climate in the Galapagos Islands</h2>
		<table class="table">
			<thead>
				<tr>
					<td rowspan="2">Month</td>
					<td>Jan</td>
					<td>Feb</td>
					<td>Mar</td>
					<td>Apr</td>
					<td>May</td>
					<td>Jun</td>
					<td>Jul</td>
					<td>Aug</td>
					<td>Sep</td>
					<td>Oct</td>
					<td>Nov</td>
					<td>Dec</td>
				</tr>
				<tr>
					<td><div class="climate day1"></div></td>
					<td><div class="climate day2"></div></td>
					<td><div class="climate day2"></div></td>
					<td><div class="climate day2"></div></td>
					<td><div class="climate day1"></div></td>
					<td><div class="climate day3"></div></td>
					<td><div class="climate day4"></div></td>
					<td><div class="climate day5"></div></td>
					<td><div class="climate day5"></div></td>
					<td><div class="climate day4"></div></td>
					<td><div class="climate day3"></div></td>
					<td><div class="climate day1"></div></td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Season</td>
					<td colspan="6">Warm Season</td>
					<td colspan="6">Dry Season</td>
				</tr>
				<tr>
					<td>Air Temperature</td>
					<td>77°F <br> 25°C</td>
					<td>78°F <br> 26°C</td>
					<td>83°F <br> 28°C</td>
					<td>83°F <br> 28°C</td>
					<td>77°F <br> 25°C</td>
					<td>72°F <br> 23°C</td>
					<td>75°F <br> 22°C</td>
					<td>70°F <br> 22°C</td>
					<td>70°F <br> 21°C</td>
					<td>71°F <br> 22°C</td>
					<td>73°F <br> 23°C</td>
					<td>74°F <br> 23°C</td>
				</tr>
				<tr>
					<td>Water Temperature</td>
					<td>76°F <br> 24°C</td>
					<td>77°F <br> 25°C</td>
					<td>77°F <br> 25°C</td>
					<td>77°F <br> 25°C</td>
					<td>76°F <br> 24°C</td>
					<td>73°F <br> 23°C</td>
					<td>71°F <br> 22°C</td>
					<td>70°F <br> 21°C</td>
					<td>71°F <br> 22°C</td>
					<td>72°F <br> 22°C</td>
					<td>73°F <br> 23°C</td>
					<td>74°F <br> 23°C</td>
				</tr>
				<tr>
					<td>Rainfall</td>
					<td>2.4 in 60 mm</td>
					<td>4.6 in 117mm</td>
					<td>4.0 in 100mm</td>
					<td>3.0 in 73 mm</td>
					<td>0.6 in 15 mm</td>
					<td>0.2 in 5 mm</td>
					<td>0.3 in 7 mm</td>
					<td>0.2 in 5 mm</td>
					<td>0.2 in 5 mm</td>
					<td>0.2 in 5 mm</td>
					<td>0.2 in 5 mm</td>
					<td>0.3 in8 mm</td>
				</tr>
			</tbody>
		</table>

	</div>
	<hr/>

	<div id="How-to-Get-to-the-Galapagos-Islands">
		<h2>How to Get to the Galapagos Islands</h2>
		@include('gallery', ['gallery' => $article->gallery('how-to-get-to-galapagos')])

		<p>
			The only option to get to the Galapagos Islands is by flight. Three airlines travel to the Galapagos Islands: Tame Airlines, Avianca Airlines and Latam Airlines.
		</p>
		<p>
			The airport of San Cristobal Island is located 10 minutes by foot to the center of the city of Puerto Baquerizo Moreno. You will have no trouble reaching your accommodation and the Spanish school once you land on the island.
		</p>
		<p>
			The airport of Baltra Island is located around 90 minutes distance from the city of Puerto Ayora in Santa Cruz Island. If you land on Baltra Island, you will take a free bus from the airport to the CANAL. Once you are in the canal, you will take a small ferry to cross the canal to Santa Cruz Island. As soon as you arrive, you can take a public bus or a taxi to Puerto Ayora city.
		</p>
		<p>
			When you arrive in the Galapagos at either the San Cristobal Island airport or the Baltra Island airport, a member of our Spanish Institute will be waiting for you. This person will accompany you to your accommodation in either San Cristobal or Santa Cruz Islands.
		</p>
	</div>
	<hr/>

	<div id="Included-Not-Included">
		<h2>Included / Not Included</h2>
		<h3>ISE Classes</h3>
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
								<p>Airport pickup and transfer to accommodation in Galapagos.</p>
							</td>
						</tr>
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
								<p>Complimentary activities held at ISE (described in the program and in itineraries)</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Diploma or certificate of studies</p>
							</td>
						</tr>
						<tr>
							<td>
								<p> Luggage storage and safety box</p>
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
								<p>Round-trip flight ticket to Galapagos</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Galapagos National Park entrance fee (US $100)</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>INGALA ID card (US $20) </p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Enrollment fee for all programs (US $40)</p>
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
    <h3>Book Spanish Lessons in the Galapagos Islands</h3>
    <p class="text-center" style="font-size: 17px;">
        ONE WEEK FROM US$1,999
    </p>
    <a href="/learn-spanish-booking.html" class="btn btn-primary w-100"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> BOOK NOW</a>
</div>


@endsection
