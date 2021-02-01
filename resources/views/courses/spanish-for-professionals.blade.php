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
        <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-2-11') }}</li>
  </ol>
</nav>

<h1>
    {{ __('courses.professionals.title') }}
</h1>


<div class="info-list">

    @include('gallery', ['gallery' => $article->gallery('spanish-professionals')])

    <p>
        During this course you will have the opportunity to improve your skills, and acquire technical vocabulary and terminology related to the medical field or vocabulary for your personal profession.
    </p>
    <p>
        In the case of medical Spanish or in Spanish courses in professional areas it is better that students come with a minimum intermediate B1 level of Spanish, that is to say they already have to be able to speak, write and understand very well in present tense, past tense, future tense, conditional and part of subjunctive.
    </p>


</div>

<div id="list-example" class="list-group dq-list-scroll">

    <a class="list-group-item list-group-item-action " href="#us-per-week">
        <i class="glyphicon glyphicon-stop" ></i>
        US$269 per week
    </a>

    <a class="list-group-item list-group-item-action " href="#Included-Not-Included">
        <i class="glyphicon glyphicon-stop" ></i>
        Included / Not Included
    </a>

</div>

<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example dq-ise-scroll">

    <div id="us-per-week">
        <h2>US$269 per week</h2>
        <h4>Have a look at it!</h4>

                <ul>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  Improve your professional skills through your  knowledge of Spanish.</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  Get to know other people from all over the  world  in our weekly activities.</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  Visit Quito and its Historic Center</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  Visit Church of San Francisco de Quito</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  See &ldquo;El Panecillo&rdquo;</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  See &ldquo;Quito's Golden Church&rdquo;</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  Visit la Ronda</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  Visit the Middle of the World Monument &amp;  Museum</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  Make experiments in the &ldquo;Middle of The World&rdquo;</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  Stand on the &ldquo;Equator Line&rdquo;</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  Touch the sky with your finger at &ldquo;Teleferico  de Quito&rdquo;</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  Walk to Pichincha mountain</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  Enjoy a good view of Quito from Pichincha  mountain</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  Get a good view of the city of Quito from &ldquo;La  Basilica&rdquo;</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  Visit the Indigenous Market of Otavalo</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  Enjoy the sacred waterfall of Peguche</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  Join a trip and walk around Cuicocha lake</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  Discover Mojanda</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  Explore the Amazon Jungle</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  Discover the rout of the waterfalls</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  Relax in lovely hot springs</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  Have an incredible adventure in the amazing  Galapagos Islands</li>
                    <li class="list-courses"><i class="glyphicon glyphicon-ok"></i>  And much more!</li>
                </ul>
    </div>

    <div id="Included-Not-Included">
        <h2>Included / Not Included </h2>
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
                            <td>Airport pickup and    transfer to accommodation upon arrival to Quito.</td>
                              </tr>
                              <tr>
                                <td>Placement test and weekly evaluation.</td>
                              </tr>
                              <tr>
                                <td>Learning material, book with grammar and    exercises, notebook.</td>
                              </tr>
                              <tr>
                                <td>Personalized attention and preparation of    your Spanish Course.</td>
                              </tr>
                              <tr>
                                <td>Transfers to and from Quito if you choose to    take your course at multiple locations with us.</td>
                              </tr>
                              <tr>
                                <td>Coffee, tea and snacks, like freshly baked    bread during breaks.</td>
                              </tr>
                              <tr>
                                <td>Purified water at the School in Quito and    Otavalo.</td>
                              </tr>
                              <tr>
                                <td>Wi-Fi at the School and in all    accommodations organized by the School, except in the Amazon Jungle.</td>
                              </tr>
                              <tr>
                                <td>Dancing lessons two times per week (in    Quito).</td>
                              </tr>
                              <tr>
                                <td>Wednesday Cultural Visit before or after    classes.</td>
                              </tr>
                              <tr>
                                <td>Map of Quito.</td>
                              </tr>
                              <tr>
                                <td>Certificate of course completion.</td>
                              </tr>
                              <tr>
                                <td><a href="https://superiorspanishschool.com/learn-spanish-voluenteering.html">Assistance    to find accommodation and volunteering projects in Quito, Otavalo and    Ecuador.</a></td>
                              </tr>
                              <tr>
                                <td>24-hour emergency contact.</td>
                              </tr>
                              <tr>
                                <td>Assistance for medical emergencies 24/7.    Important: Students need to have a travel insurance while in the program.</td>
                              </tr>
                              <tr>
                                <td>Assistance to organize a visa to extend your    stay in Ecuador.</td>
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
    <h3>Book Spanish for Professionals in Quito or Otavalo</h3>
    <p class="text-center" style="font-size: 17px;">
        ONE WEEK FROM US$269
    </p>
    <a type="submit" href="/learn-spanish-booking.html" class="btn btn btn-info" style="width: 100%;"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> BOOK NOW</a>
</div>


@endsection