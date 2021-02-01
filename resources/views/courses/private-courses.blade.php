@extends('interna')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-2') class="active" @endsection

@section('content-interna')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('breadcrumb.item-1') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('item-2') }}">{{ __('breadcrumb.item-2') }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-2-5') }}</li>
  </ol>
</nav>

<h1>
    {{ __('courses.private.title') }}
</h1>


<div class="info-list">

    @include('gallery', ['gallery' => $article->gallery('private-courses')]) 

    <p>
        Private lessons are a great way to make real progress in a short amount of time! This style of teaching allows the student to benefit from 100% teacher focus, and enables the teacher to develop a course of study that is perfectly customized to the student’s individual needs. This course can be taken for 4 to 7 hours a day.
    </p>
    <p>
        We develop a personalized program according to the previous knowledge of Spanish and considering the period of time this particular student has planned to study with us, plus personal interests, personal needs and teaching preferences.
    </p>
    <p>
        If you have the ability to learn a foreign language in a very short time, or if you think that your learning speed is a bit slow and you need to have your own Spanish teacher specifically concentrated on your learning process, then this is an ideal program which you must decide and from which you will get better results in the learning the Spanish language.
    </p>

    @include('gallery', ['gallery' => $article->gallery('private-courses'), 'position'=>'right', 'thumbail' => '2'])
    
    <p>
        The period of time to move from one level to the next higher level depends on the personal learning process and the time that an individual student needs to move from one learning subject to another one.
    </p>
    <p>
        This Spanish course is perfect for people who already have learned Spanish and want to refresh as much as possible in a very short period of time. Private courses will be also perfect for people who have learned Spanish before, but right now even if they have a good understanding in Spanish, feel very weak to speak and want to be in a right level before to join a group course. 
    </p>
    <p>
        And, of course for students with all levels of Spanish from beginners to advanced who wish to be concentrated in their personal Spanish program without any other classmates, want to improve their Spanish in classes as much as possible and learn the Spanish language according their own period of time.
    </p>


</div>


<div id="list-example" class="list-group dq-list-scroll">

    <a class="list-group-item list-group-item-action" href="#US-219-US-369-per-week">
        <i class="glyphicon glyphicon-stop" ></i>
        US$219 - US$369 per week
    </a>    

    <a class="list-group-item list-group-item-action" href="#Included-Not-Included">
        <i class="glyphicon glyphicon-stop" ></i>
        Included / Not Included
    </a>

</div>

<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example dq-ise-scroll">

    <div id="US-219-US-369-per-week">
        <h2>US$219 - US$369 per week</h2>
        <h4>Have a Look at it!</h4>

        <ul>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  Improve your Spanish with real progress</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> Get to know other people from all over the  world  in our weekly activities.</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> Visit Quito and its Historic Center</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> Visit Church of San Francisco de Quito</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> See &ldquo;El Panecillo&rdquo;</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> See &ldquo;Quito's Golden Church&rdquo;</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> Visit la Ronda</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> Visit the Middle of the World Monument &amp;  Museum</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> Make experiments in the &ldquo;Middle of The World&rdquo;</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> Stand on the &ldquo;Equator Line&rdquo;</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> Touch the sky with your finger at &ldquo;Teleferico  de Quito&rdquo;</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> Walk to Pichincha mountain</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> Enjoy a good view of Quito from Pichincha  mountain</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> Get a good view of the city of Quito from &ldquo;La  Basilica&rdquo;</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> Visit the Indigenous Market of Otavalo</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> Enjoy the sacred waterfall of Peguche</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> Join a trip and walk around Cuicocha lake</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> Discover Mojanda</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> Explore the Amazon Jungle</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> Discover the rout of the waterfalls</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> Relax in lovely hot springs</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> Have an incredible adventure in the amazing  Galapagos Islands</li>
          <li class="list-courses"><i class="glyphicon glyphicon-ok"></i> And much more!</li>
        </ul>
    </div>

    <hr/>

    <div id="Included-Not-Included">
        <h2>Included / Not Included</h2>
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
                                <p>Airport pickup and transfer to accommodation upon arrival to Quito.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Placement test and weekly evaluation.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Learning material, book with grammar and exercises, notebook.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Personalized attention and preparation of your Spanish Course.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Transfers to and from Quito if you choose to take your course at multiple locations with us.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Coffee, tea and snacks, like freshly baked bread during breaks.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Dancing lessons two times per week (in Quito).</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Purified water at the School in Quito and Otavalo.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Wi-Fi at the School and in all accommodations organized by the School, except in the Amazon Jungle.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Dancing lessons two times per week (in Quito).</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Wednesday Cultural Visit before or after classes.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Map of Quito.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Certificate of course completion.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Assistance to find accommodation and volunteering projects in Quito, Otavalo and Ecuador.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>24-hour emergency contact.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Assistance for medical emergencies 24/7. Important: Students need to have a travel insurance while in the program.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Assistance to organize a visa to extend your stay in Ecuador.</p>
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
                                <p>Airport drop off</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Accommodation</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Meals</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Travel Insurance</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Transportation outside of the booked program or course</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Personal Expenses</p>
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
    <h3>Book Private Lessons in Quito or Otavalo</h3>
    <p class="text-center" style="font-size: 17px;">
        ONE WEEK FROM US$219
    </p>
    <a type="submit" href="/learn-spanish-booking.html" class="btn btn btn-info" style="width: 100%;"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> BOOK NOW</a>
</div>


@endsection