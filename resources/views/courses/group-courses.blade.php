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
        <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-2-4') }}</li>
  </ol>
</nav>


<h1>
    {{ __('courses.group.title') }}
</h1>

<div class="alert alert-info" role="alert">

    
    <p>
    	<img src="{{ url('/images/foco.png') }}"/>
       Learn Spanish through Immersion starting at only <a href=" {{ route('booking') }} "><strong>US$139</strong> </a> for 20hrs per week! <a href=" {{ route('booking') }} "> <strong> Book now!</strong> </a>
	</p>
           


</div>

<div class="info-list">

    @include('gallery', ['gallery' => $article->gallery('group-courses')]) 

    <p>
        Group lessons are an economical and an entertaining way to learn Spanish. Groups consist of two to six students with similar levels of Spanish competency. This gives the students of the group the opportunity to support each other in class. Group classes allow students to learn in a relaxed atmosphere. This course can be taken for 4 hours a day.
    </p>
    <p>
        The majority of our Spanish students decide to go for group classes because they want to learn Spanish with other classmates with a similar level of Spanish and in the same time change ideas or personal experiences which for us and for most of our Spanish students is perfect, but other people decide for group courses because they think that a group course is the only way to find new friends and learn in a more relaxed atmosphere.
    </p>

    @include('gallery', ['gallery' => $article->gallery('group-courses'), 'position'=>'right', 'thumbail' => '2'])

    <p>
        In fact, our Institute organizes activities and offers many opportunities to find other students from different nationalities, with similar ages from all of our other Spanish students. How fast students learn in group classes and the amount of information received in group classes may be less than in individual teaching, but please remember that most of our students want to learn the Spanish language in a short period of time and in an effective way. 
    </p>
    <p>
        Participating as part of a group offers the opportunity to learn from both the teacher and fellow students. Students offer support to one another and make friends as they exchange personal experiences and ideas.
    </p>
    <p>
        Though group classes tend to be low in stress, it is important to study seriously and complete the daily assignments so that the group as a whole can progress steadily and quickly. If a student finds that the group they are in is proceeding too fast or too slow for their desires or abilities, adjustments can be made to change that student to individual classes or to a group more appropriate to their abilities.

    </p>

    @include('gallery', ['gallery' => $article->gallery('group-courses'), 'thumbail' => '3'])

    <p>
        If you think that the learning speed of your group in general is much slower or so fast for you, you should participate in another group or change your group classes to private Spanish courses, which will be organized according to your personal needs, interests and teaching preferences.
    </p>
    <p>
        In order to participate in a group Spanish course you also must consider the period you want to study Spanish with us, the average age of the other participants in the Spanish course, your previous level of Spanish, etc.
    </p>
    <p>
        The school staff considers <strong> every </strong> student's personal needs, previous Spanish knowledge, interests, goals and teaching preferences to assure the best possible educational and cultural experience.
    </p>


</div>

<div id="list-example" class="list-group dq-list-scroll">

    <a class="list-group-item list-group-item-action" href="#US-139-per-week">
        <i class="glyphicon glyphicon-stop" ></i>
        US$139 per week
    </a>

    <a class="list-group-item list-group-item-action" href="#Included-Not-Included">
        <i class="glyphicon glyphicon-stop" ></i>
        Included / Not Included
    </a>

</div>

<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example dq-ise-scroll">

    <div id="US-139-per-week">
        <h2>US$139 per week</h2>
        <h4>Have a Look at it!</h4>
        <ul>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Improve your Spanish and make new friends
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Visit Quito and its Historic Center
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Visit Church of San Francisco de Quito
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> See “El Panecillo”
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> See “Quito's Golden Church”
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Visit la Ronda
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Visit the Middle of the World Monument & Museum
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Make experiments in the “Middle of The World”
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Stand on the “Equator Line”
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Touch the sky with your finger at “Teleferico de Quito”
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Walk to Pichincha mountain
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Enjoy a good view of Quito from Pichincha mountain
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Get a good view of the city of Quito from “La Basilica”
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Visit the Indigenous Market of Otavalo
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Enjoy the sacred waterfall of Peguche 
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Join a trip and walk around Cuicocha lake
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Discover Mojanda
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Explore the Amazon Jungle
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Discover the rout of the waterfalls
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Relax in lovely hot springs
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> Have an incredible adventure in the amazing Galapagos Islands
            </li>
            <li class="list-courses">
                <i class="glyphicon glyphicon-ok"></i> And much more!
            </li>
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
                                <p>Dancing</p>
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
                                <p>Assistance to find accommodation and volunteering projects in Quito, Otavalo and other places in Ecuador.</p>
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
    <h3>Book Group Lessons in Quito or Otavalo</h3>
    <p class="text-center" style="font-size: 17px;">
        ONE WEEK FROM US$139
    </p>
    <a type="submit" href="/learn-spanish-booking.html" class="btn btn btn-info" style="width: 100%;"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> BOOK NOW</a>
</div>


@endsection