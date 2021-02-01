@extends('interna')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-6') class="active" @endsection

@section('content-interna')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('breadcrumb.item-1') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('about-us') }}">{{ __('breadcrumb.item-6') }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-6-3') }}</li>
  </ol>
</nav>

<h1>{{ __('about-us.facilities.title') }}</h1>

<img src="{{ URL::asset("images/about-us/facilities/facilities-1.jpg") }}" style="max-width: 280px;float: left;margin-right: 10px;">

<p>
    We offer five comfortable facilities nationwide, and they are located in Quito, Otavalo, the Amazon Jungle, in Indigenous Communities and the Galapagos Islands. The ISE headquarters are located in the colonial part of Quito. Our facilities offer 12 classrooms, leisure and communal areas, and our administrative office. Our Travelling Classroom programs will allow you to see our diverse country, immerse yourself in our rich culture, and of course, learn Spanish! Our Travelling Classroom is a great way to study Spanish and explore the diversity of Ecuador. While travelling from place to place, students complete 20 hours of Spanish classes per week, combined with a variety of activities. Students can choose from one of our many itineraries, or combine Travelling Classes with any of our locations!
</p>



<div id="list-example" class="list-group dq-list-scroll">
	<a class="list-group-item list-group-item-action " href="#ISE-Quito-Spanish-School">
		<i class="glyphicon glyphicon-stop" ></i>
		ISE Quito Spanish School
	</a>
	<a class="list-group-item list-group-item-action " href="#ISE-Otavalo-Spanish-School">
		<i class="glyphicon glyphicon-stop" ></i>
		ISE Otavalo Spanish School
	</a>
	<a class="list-group-item list-group-item-action " href="#ISE-Amazon-Spanish-Programs">
		<i class="glyphicon glyphicon-stop" ></i>
		ISE Amazon Spanish Programs
	</a>
	<a class="list-group-item list-group-item-action " href="#ISE-Indigenous-Communities-Spanish-Learning-Program">
		<i class="glyphicon glyphicon-stop" ></i>
		ISE Indigenous Communities Spanish Learning Program
	</a>
	<a class="list-group-item list-group-item-action " href="#ISE-Galapagos-Islands-Spanish-Programs">
		<i class="glyphicon glyphicon-stop" ></i>
		ISE Galapagos Islands Spanish Programs
	</a>
	<a class="list-group-item list-group-item-action " href="#ISE-Unique-and-Original-Travelling-Classroom">
		<i class="glyphicon glyphicon-stop" ></i>
		ISE Unique and Original Travelling Classroom
	</a>
</div>

<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example dq-ise-scroll">

	<div id="ISE-Quito-Spanish-School">
		<h2>ISE Quito Spanish School</h2>
		<img src="{{ URL::asset("images/about-us/facilities/facilities-2.jpg") }}" style="max-width: 280px;float: left;margin-right: 10px;">

		<p>
			ISE in Quito is our main location, and it was founded in 1988 by our Director, Eugenio Cordova. The school is opened from 8:00 AM to 5:30 PM Monday through Friday. Classes are held in the morning and/or afternoon, as well as social and educational activities. We also offer weekend trips and visits.
		</p>
		<p>
			During the week we include visits to museums, colonial churches, and plazas, and weekend trips include visits to Mindo cloud forest, the Otavalo indigenous market, Amazon Jungle, or a hike around the mountains. Students have the option of individual, semi-private, group, combo classes, and DELE preparation.
		</p>
	</div>
	<div id="ISE-Otavalo-Spanish-School">
		<h2>ISE Otavalo Spanish School</h2>
		<img src="{{URL::asset("images/about-us/facilities/facilities-3.jpg") }}" style="max-width: 280px;float: left;margin-right: 10px;">

		<p>
			ISE Otavalo was founded in 1994 and it is located in the heart of Otavalo, just a 2 minute walk from famous craft market, Plaza de Ponchos. The school is opened from 8:00 AM to 5:30 PM Monday through Friday. Classes are held in the morning and/or afternoon, as well as activities such as visiting Peguche falls, the leather market in Cotacachi, or weekend activities such as visits to Mojanda and Cuicocha lagoon.
		</p>
		<p>
			Otavalo, is a small indigenous town famous for their incredible success in commerce, and is located just two hours north of Quito. Students have the option of individual, semi-private, group, and combo classes.
		</p>

	</div>
	<div id="ISE-Amazon-Spanish-Programs">
		<h2>ISE Amazon Spanish Programs </h2>
		<img src="{{ URL::asset("images/about-us/facilities/facilities-4.jpg") }}" style="max-width: 280px;float: left;margin-right: 10px;">

		<p>
			The Amazon Jungle is composed by beautiful and breathtaking scenic views, impressive waterfalls, ancestral cultures, and forests enclosed sites that invite adventure tourism enthusiasts from all over the world. The Amazon Jungle program is one of the most interesting Spanish learning programs offered by ISE.
		</p>
		<p>
			Our Amazon Spanish Courses gives you the opportunity to take Spanish classes and learn about the Amazon Rainforest in this biologically diverse area. Your classes take place during the morning and in the afternoons, discover the jungle on exciting excursions and activities.
		</p>

	</div>
	<div id="ISE-Indigenous-Communities-Spanish-Learning-Program">
		<h2>ISE Indigenous Communities Spanish Learning Program</h2>
		<img src="{{ URL::asset("images/about-us/facilities/facilities-5.jpg") }}" style="max-width: 280px;float: left;margin-right: 10px;">

		<p>
			Experience daily life in an Indigenous community. As soon as you arrive in the community, you will become one more member of the family, and they will share with you everything about the land, their history, present way of life and vision as a community. Your classes take place in the morning or in the afternoon for a minimum of 4 hours a day, and you will participate in everyday family activities in the organic farm, and occasionally community activities. Students have the option of individual, semi-private or group classes.

		</p>

	</div>
	<div id="ISE-Galapagos-Islands-Spanish-Programs">
		<h2>ISE Galapagos Islands Spanish Programs</h2>
		<img src="{{ URL::asset("images/about-us/facilities/facilities-6.jpg") }}" style="max-width: 280px;float: left;margin-right: 10px;">

		<p>
			Galapagos Islands are one of the most ISE started its first program in the Galapagos Islands in May of 1996 in Puerto Ayora in Santa Cruz Island. Today, we also offer programs in facilities located in San Cristobal and Isabela Islands. Classes are held for 4 hours a day, and they take place in the morning.
		</p>
		<p>
			In the afternoons, discover the islands on exciting excursions and activities that will offer the possibility of encountering different land and marine species such as iguanas, blue and red-footed boobies, penguins, sea lions, frigate birds, waved Albatross, over 50 species of fish, corals, turtles, and many more. Students have the option of individual, semi-private, or group classes.
		</p>
	</div>
	<div id="ISE-Unique-and-Original-Travelling-Classroom">
		<h2>ISE Unique and Original Travelling Classroom</h2>
		<img src="{{ URL::asset("images/about-us/facilities/facilities-7.jpg") }}" style="max-width: 280px;float: left;margin-right: 10px;">

		<p>
			Experience Ecuador and learn Spanish! You can do it all! Our Travelling Classrooms are the perfect way to maximize your time in our beautiful country. Learn Spanish quickly while travelling and discovering the natural wonders of Ecuador. We have found that total immersion for students amongst locals allows them to learn Spanish faster than in classrooms.
		</p>
		<p>
			All you need to do is enjoy your travels and practice your Spanish, we will take care of the details, accommodation, transportation, and activities! While travelling from place to place, students complete 20 hours of Spanish classes per week, combined with a variety of activities, such as biking, hiking, swimming in waterfalls, lounging in thermal springs and visiting markets!
		</p>
	</div>

</div>









@endsection
