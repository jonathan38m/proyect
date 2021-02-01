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
      <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-6-4') }}</li>
  </ol>
</nav>


<h1>{{ __('about-us.work.title') }}</h1>

<p>
	ISE encourages and enables young dynamic job seekers to explore and test their abilities in different fields.  We offer different jobs in several areas within ISE that can help complement your Spanish learning process, as well as offer you the possibility to experience life as an active part of a different culture. 
</p>

<p>
	We are currently looking for English and German speaking students for the following areas and responsibilities:
</p>
<ol>
	<li>Sales </li>
	<li>Online Marketing & Social Media </li>
	<li>Costumer Services</li>
	<li>Content Management </li>
</ol>

<p>
	If none of the listed areas are of your interest, send us your resume at <a href="mailto:info@superiorspanishschool.com">info@superiorspanishschool.com</a> and tell us what work area would you like to explore, and why you would be right for ISE.
</p>
<p>
	About former Spanish students working with us:
</p>
<p>
	Around 20 years ago we have offered the first position as a volunteer to work at our Spanish institution. We have started with a very motivated former Spanish student from Australia who came to learn Spanish with us for a few weeks, and after 4 weeks Spanish course with us he was very impressed how fast he has learned the language only in a month. Once he has completed his Spanish courses he has decided to work as a volunteer assistant at our Spanish Institute. 
</p>
<p>
	We can say that he was the person who has created this idea and this position with his principal goal to assist and help to each of our new Spanish students in all they will need to know immediately they arrive in Quito, orientate them with his own experience, show them where to go, advise them how to take care in the city, in the rest of Ecuador and while traveling through Latin America, create in each student the idea to be the guide for future new students, assist with their knowledge about the city and about the country as much as possible.
</p>
<p>
	More than 20 years after our first former Spanish student working with us we have a vast experience with people from several counties as Switzerland, Germany, Denmark, Canada, United States of America among other great countries of the world from our Spanish students come from who have worked with a great success at our Spanish Institute.
</p>
<p>
	We thank very all of our former interns for the all positive contribution to our Spanish Institute and for what they left for our institute and for all our new students of Spanish.
</p>
<p>
	Please find below an overview made by our first intern at “Instituto “Superior de Español: in 1995:
</p>
<div style="border-left: 7px solid #e2c803;padding-left: 15px;">
	<p>
		I worked at the Instituto Superior de Español with Eugenio and his teachers way back in 1995 after completing a month of classes.  For me, it was an ideal transition to begin working in the school after my language classes as it gave me the perfect environment to practice my Spanish daily with others, particularly over the telephone!
	</p>
	<p>
		When I worked at El Instituto I was assisting Eugenio in recruiting new students, collecting new students from the airport and delivering them to their host families, organizing their classes and allocating them to appropriate teachers and the best part of my job, was organizing weekend excursions to areas around Quito.  My favorites were the Otavalo Markets, Hot Baths of Papallacta, Cloud Forest in Mindo and horse-riding in The Sierra.
	</p>
	<p>
		Not only did I consolidate my working Spanish but I made lifelong friends, many of whom I still correspond and visit regularly.
	</p>
	<p>
		If you have the opportunity to work at EL Instituto, I would highly recommend it.  Although my experience is from 1995, I know the standards within the school have only become more superior and professional and with electronic media, the reach is far greater than what is was in '95
	</p>
	<p>
		I still speak Spanish here in Melbourne at work and play as I encounter Spanish speakers and I feel as confident today as I did in 1995 thanks to I.S.E.
		Good luck with your studies at I.S.E. and should you work with the team, enjoy every moment of it as I did many years ago.
	</p>
	<p>
		Yours Sincerely, 
	</p>
	<p>
		Pat Ford (Melbourne, Australia)
	</p>
</div>

@endsection