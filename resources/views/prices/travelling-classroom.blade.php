@extends('interna')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-8') class="active" @endsection

@section('content-interna')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('breadcrumb.item-1') }}</a></li>
      <li class="breadcrumb-item"><a href="{{ route('prices') }}">{{ __('breadcrumb.item-8') }}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-8-5') }}</li>
  </ol>
</nav>


<h1>
    Travelling Classroom
</h1>


<div class="info-list">


    <p>

        <strong> Registration fee for all of our programs in Ecuador at ISE is US $ 40</strong>

        <br>

        Registration fee includes: 

    </p>

    <ul class="list-group">
        <li class="list-group-item list-courses">
            <i class="glyphicon glyphicon-ok"></i>Complimentary airport pick up + transfer (one way, <strong>only upon arrival in Quito</strong>)
        </li>
        <li class="list-group-item list-courses">
                <i class="glyphicon glyphicon-ok"></i>Course material (book + notebook to run the Spanish course)
        </li>
        <li class="list-group-item list-courses">
                <i class="glyphicon glyphicon-ok"></i>Certificate for the Spanish course
        </li>

    </ul>

    <p>
        <strong><em>Learn Spanish and Explore Ecuador...You Can Do it All!</em></strong>
    </p>
    <p>We have six options for you to choose  from:</p>


</div>



<h2>Andes  &amp; Amazon Jungle 7 Days Spanish Course </h2>
<table  class="table text-center price-table">
    <thead>
        <tr>
            <td colspan="2">Andes &amp; Amazon Jungle 7 Days / 6 Nights </td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><p>7 Days/6 Nights</p></td>
            <td><p>$ 999</p></td>
        </tr>
    </tbody>
</table>
<p>
    <strong>Andes &amp; Amazon Jungle (1 week):</strong> for  the traveler with less time this is a great way to see a part of the highlands  and the lush green of the Amazon. Highlights include mountain biking (Baños),  jungle treks (Misahualli) and bathing in thermal springs Papallacta. 
</p>


<h2>Andes  &amp; Amazon Jungle 12 Days Spanish Course</h2>
<table  class="table text-center price-table">
    <thead>
        <tr>
            <td colspan="2">Andes &amp; Amazon Jungle Round Trip </td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><p>12 Days/11 Nights</p></td>
            <td><p>$ 1,699</p></td>
        </tr>
    </tbody>
</table>
<p>
    <strong>Andes &amp; Amazon Jungle round trip (2 weeks):</strong> this  option allows the student more time in each of the locations, allowing more  opportunities to explore and enjoy the attractions of each site including some  impressive caves at Jumandi in the jungle.
</p>


<h2>Walking  Through The Andes 12 Days Spanish Course</h2>
<table  class="table text-center price-table">
    <thead>
        <tr>
            <td colspan="2"><p>Walking through the Antes - Caminando Por Los Andes</p></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><p>12 Days/11 Nights</p></td>
            <td><p>$ 1,799</p></td>
        </tr>
    </tbody>
</table>
<p>
    <strong>Walking through The  Andes - Caminando por los Andes (12 Days):</strong> this is a great program  for seeing the attractions of the Sierra. Highlights include trekking around  Cotopaxi National Park, visiting the wondrous Laguna Quilatoa, the breathtaking  train ride down the Devil&rsquo;s Nose and the pre-Incan ruins at Ingapirca. Just a  few of the exciting activities options during these 12-day program.
</p>


<h2>Experience  Ecuador 16 Days Spanish Course</h2>
<table  class="table text-center price-table">
    <thead>
        <tr>
            <td colspan="2"><p>Experience Ecuador Spanish Program 16 Days/15 Nights</p></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><p>16 Days/15 Nights</p></td>
            <td><p>$ 2,299</p></td>
        </tr>
    </tbody>
</table>
<p>
    <strong>Experience Ecuador (16 days):</strong> incorporating  the attractions of the Sierra, highlights include trekking around Cotopaxi  National Park, visiting the wondrous Laguna Quilatoa. Enjoy the sites at a  comfortable pace, from a train ride to Alausi down into the jungle to relax on  river beaches. You will have time to soak in hot springs in both Baños and  Papallacta and to relax with the birds song of the jungle; nice and  &ldquo;tranquilo&rdquo;.
</p>

<h2>Exploring Ecuador - Language Round Trip 19 Days Spanish Course</h2>
<table  class="table text-center price-table">
    <thead>
        <tr>
            <td colspan="2"><p>Exploring Ecuador 19 Days/18 Nights</p></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><p>19 Days/18 Nights</p></td>
            <td><p>$ 2,899</p></td>
        </tr>
    </tbody>
</table>
<p>
    <strong>Exploring Ecuador –  Language Round Trip (19 Days): </strong>Experience Ecuador and  learn Spanish! Our Traveling Classroom starts in Otavalo, horseback ride to  Laguna Quilotoa, marvel at Chimborazo, ride the Devil&rsquo;s Nose Train, go to Baños,  visit the Oriente and tube down the Rio Napo, visit an indigenous community,  explore caves, and soak in thermal pools.
</p>


<h2>The  Secret Of Evolution - Exploring the Galapagos Islands 15 Days Spanish Program</h2>
<table  class="table text-center price-table">
    <thead>
        <tr>
            <td colspan="2"><p>The Secret Of Evolution 15 Days/14 Nights</p></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><p>15 Days/14 Nights</p></td>
            <td><p>$ 3,699</p></td>
        </tr>
    </tbody>
</table>
<p>
    <strong>Charles  Darwin &amp; the Secrets of Evolution at the Amazing Galapagos Islands (15  days):</strong> this lovely program  will allow you to discover the wonders of the Galapagos Islands. Starting in  San Cristobal Islands, visiting the most interested areas, sports, getting to  Santa Cruz by ferry, you will visit the most beautiful places as Tortuga Bay white  nice sand beach where at the end of the beach you will meet several Marine  iguanas providing you an special atmosphere of this paradise, the highlands to  visit the prehistoric turtles and the tunnels of lava. You will complete the  trip visiting the Isabela Island where you can feel the marvelous time where  the life did not pass. Participate in this unforgettable Galapagos Islands  visiting paradise on the earth, the place you have to go at least one time in  your life.
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
                        <p>Per week, 20 hours of Spanish Classes, with 15 hours of formal face to face Spanish Classes and 5 hours of practice while traveling with your teacher.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Public transportation</p>
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
                        <p>$40  enrollment fee for all programs</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Personal expenses and tips</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Travel  Insurance</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Parks or Museum Entrances</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>




@endsection