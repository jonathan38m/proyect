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
    <li class="breadcrumb-item" aria-current="page">{{ __('breadcrumb.item-3-6') }}</li>
  </ol>
</nav>


<h1>
    {{ __('destinations.packages.title') }}
</h1>


<div class="info-list">



    <p>ISE has many options for your learning and traveling experience throughout Ecuador. You can choose one destination or the entire country in private or group courses in every level class.</p>

    <p>We have designed 10 packages to help you choose from different inclusive trips, where you can discover Ecuador while we take care of the details.</p>

    <p>Our carefully planned packages offer a vast range of options of itineraries for student travelers with different interests and needs as well as travel time, and thus delivering a high-quality product that will help you get the best experience while traveling through Ecuador.</p>


</div>


<div class="panel-group package" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="card">
        

        <div class="card-header" role="tab" id="headingOne">
            <div class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                    <span>
                        Package # 1: 42 Days Program
                    </span>
                </a>
            </div>
        </div>
        <div class="card-body">

            <h2>Spanish Classes in Quito &amp; Otavalo + Volunteering in the Amazon Jungle</h2>
                    <ul >
                         @include('gallery', ['gallery' => $article->gallery('package-1'), 'position'=>'right', 'thumbail' => '1'])
                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            1 week Spanish course + accommodation with a family in Quito (half board)
                        </li>
                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            1 week Spanish course + accommodation with a family in Otavalo (half board)
                        </li>
                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            4 weeks volunteer program in the Amazon Jungle, <strong><em><u>includes accommodation and meals!</u></em></strong>
                        </li>
                        
                    </ul>


                      <p class="text-right leer-mas">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Read more</a>
                    </p>

        </div>
        <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">

                

                @include('gallery', ['gallery' => $article->gallery('package-1')])

                
                <p>This package offers you 6 weeks full of adventure and learning possibilities. <strong>Discover the history, the culture and the nature this beautiful country has to offer while you learn Spanish. </strong></p>
                <p>Included in this package are 20 hours of Spanish classes per week while with us in Quito and 20 hours of Spanish classes while with us in Otavalo, together with accommodation with a lovely Ecuadorian family in both locations, as well as time to explore some of the most beautiful places in the Andes and 4 weeks of an incredibly volunteering experience focused with community, environmental, and social issues in the charming Amazon Jungle.</p>
                @include('gallery', ['gallery' => $article->gallery('package-1'), 'position'=>'right', 'thumbail' => '2'])
                <p>In order to increase your proficiency in Spanish, while volunteering with us in the Amazon Jungle you will have the opportunity to practice with the staff of the farm and with locals everything you have learned with us during your first 2 weeks of Spanish course in Quito and in Otavalo together with the opportunity to discover what life in the Amazon Jungle is like. This is certainly an experience of a lifetime.</p>

                <h2>US $ 1499</h2>

                <p><a href="/learn-spanish-booking.html" class="btn btn-info btn-ise" title="Reserve Now!"> Reserve Now! </a></p>

                <p> <strong> Package # 1 Available Dates: </strong> </p>
                <p>Available all year round, starting every <strong>Saturday</strong> or <strong>Sunday</strong>.</p>

                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-striped exact-td">
                            <thead>
                               <tr>
                                   <th>
                                        <h4 class="line-left">Package # 1 Includes:</h4>
                                    </th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>Complimentary airport or bus terminal pickup and transfer to your accommodation (one way)</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Accompaniment on your first day from your home to our Spanish school</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Orientation seminar in Quito &amp; short introduction in Otavalo</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Oral and written test on your first day in school</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Books and notebook to follow your personal Spanish course</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Salsa classes twice a week in a professional Salsa School in Quito</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Wi-Fi (Quito &amp; Otavalo) and computer usage in the school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Water, coffee, tea and freshly baked bread during your break in Quito and in Otavalo.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Weekly City Tour or Cultural Activity in Quito</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Usage of the school&rsquo;s library</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Luggage storage for your travels through Ecuador</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>24h emergency number</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Nice and friendly atmosphere</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Support and help during your program.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Only teachers with longtime experience and university diplomas without exception!</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>All Spanish courses are taught for all levels, from complete beginners to superior levels and start any Monday.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>We help you with your travel planning and information about trips in Ecuador.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Office support if you need to print, scan or copy documents in Quito and in Otavalo.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1 week in Quito: Accommodation with a family, private room, shared bathroom and half board.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1 week in Otavalo: Accommodation with a family, private room, shared bathroom and half board.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>20 hours of Spanish Classes in Quito</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>20 hours of Spanish Classes in Otavalo</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Diploma or Certificate after your Spanish classes.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>4 weeks volunteering in the Amazon Jungle: Accommodation and meals included</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Cooking facilities while in the Amazon Jungle.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><div class="col-md-6"  style="vertical-align: top;">
                        <table class="table table-striped exact-td">
                            <thead>
                               <tr>
                                    <th>
                                        <h4 class="line-left">Not included:</h4>
                                    </th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>$40 enrollment fee for all programs</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Personal expenses</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Museums or park entrances</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Travel Insurance</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Cooking party fee</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-header" role="tab" id="headingtwo">
            <div class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
                    <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                    <span>Package # 2: 56 days program</span>
                </a>
            </div>
        </div>
        <div class="card-body">
             
            <h2>Spanish Classes in Quito &amp; Otavalo + Volunteering in the Amazon Jungle</h2>
                
                <ul >
                    @include('gallery', ['gallery' => $article->gallery('package-2'), 'position'=>'right', 'thumbail' => '2'])
                    <li class="list-packages">
                        <i class="glyphicon glyphicon-ok"></i>
                        2-week Spanish course + accommodation with a family in Quito (half board)
                    </li>
                    <li class="list-packages">
                        <i class="glyphicon glyphicon-ok"></i>
                        2-week Spanish course + accommodation with a family in Otavalo (half board)
                    </li>
                    <li class="list-packages">
                        <i class="glyphicon glyphicon-ok"></i>
                        4-week volunteer program in the Amazon Jungle, <strong><em><u>includes accommodation and meals!</u></em></strong>
                    </li>
                </ul>
                <p class="text-right leer-mas">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">Read more</a>
                </p>
                
        </div>
                
        <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwo">
            <div class="card-body">

                
                
                @include('gallery', ['gallery' => $article->gallery('package-2')])
                
                <p>If you have a little bit more time you can explore destinations like Quito and Otavalo a bit further. <strong>Enjoy discovering more of what these two beautiful cities have to offer while reinforcing your Spanish knowledge. </strong></p>
                
                <p>This package offers 20 hours of Spanish classes per week with 2 weeks in Quito plus 2 weeks in Otavalo together with accommodation with a lovely local family in both places and many different activities to help you discover Ecuador. To complement this experience travel to the Amazon Jungle where you will have the opportunity to volunteer and contribute to the earth by being part of a sustainable and responsible program which takes place in the Amazon Jungle.</p>
                 

                <h2>US $ 1999</h2>

                <p><a href="/learn-spanish-booking.html" class="btn btn-info btn-ise" title="Reserve Now!"> Reserve Now! </a></p>

                <p><strong>Package # 2 Available Dates:</strong></p>
                <p>Available all year round starting every <strong>Saturday</strong> or <strong>Sunday</strong>.</p>


                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-striped exact-td">
                            <thead>
                               <tr>
                                   <th>
                                        <h4 class="line-left">Package # 2 Includes:</h4>
                                    </th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>Complimentary airport or bus terminal pickup in Quito and transfer to your accommodation (one way)</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Accompaniment on your first day from your home to our Spanish school</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Orientation seminar in Quito &amp; short introduction in Otavalo</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Oral and written test on your first day in school</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Books and notebook to follow your personal Spanish course</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Salsa classes twice a week in a professional Salsa School in Quito</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Wi-Fi (Quito &amp; Otavalo) and computer usage in the school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Water, coffee, tea and freshly baked bread during your break in Quito and in Otavalo.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Weekly City Tour or Cultural Activity in Quito</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Usage of the school&rsquo;s library</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Luggage storage for your travels through Ecuador</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>24h emergency number</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Nice and friendly atmosphere</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Support and help during your stay in our Spanish Institute</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Only teachers with longtime experience and university diplomas without exception!</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>All Spanish courses are taught for all levels, from complete beginners to superior levels and start any Monday.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>We help you with your travel planning and information about trips in Ecuador.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Office support if you need to print, scan or copy documents in Quito and in Otavalo.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>2 weeks in Quito: Accommodation with a family, private room, shared bathroom and half board.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>2 weeks in Otavalo: Accommodation with a family, private room, shared bathroom and half board.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>20 hours of Spanish Classes in Quito</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>20 hours of Spanish Classes in Otavalo</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Diploma or Certificate after your Spanish classes.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>4 weeks of volunteering in the Amazon Jungle: Accommodation and meals included!</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><div class="col-md-6"  style="vertical-align: top;">
                        <table class="table table-striped exact-td">
                            <thead>
                               <tr>
                                    <th>
                                        <h4 class="line-left">Not Included:</h4>
                                    </th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>$40 enrollment fee for all programs.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Personal expenses.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Museums or park entrances.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Galapagos National Park entrance fee $100 and ID card $20.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Travel Insurance.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Meals are not included while in the Galapagos, but Cooking Facilities are available.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-header" role="tab" id="headingThree">
            <div class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                    <span>Package # 3: 19 Days Program</span>
                </a>
            </div>
        </div>
        <div class="card-body">
            <h2>Quito + Otavalo &amp; Amazon Jungle</h2>
             

                <ul >
                    @include('gallery', ['gallery' => $article->gallery('package-3'), 'position'=>'right', 'thumbail' => '1'])
                    <li class="list-packages">
                        <i class="glyphicon glyphicon-ok"></i>
                            1 week Spanish course + accommodation with a family in Quito (half board)
                    </li>
                    <li class="list-packages">
                        <i class="glyphicon glyphicon-ok"></i>
                            1 week Spanish course + accommodation with a family in Otavalo (half board)
                    </li>
                    <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            5 Days / 4 Nights Amazon Jungle Eco-Lodge Spanish Program
                    </li>
                </ul>
                <p class="text-right leer-mas">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Read more</a>
                </p>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-body">
                
                
                @include('gallery', ['gallery' => $article->gallery('package-3')])
                
                <p><strong>Limited time for your travel, but want to learn Spanish and see as much as you can?</strong> This package offers the possibility of discovering Ecuador's beautiful capital, Quito and its historic treasures. Then travel to the remarkable city of Otavalo and see some of the most beautiful lakes, waterfalls, and indigenous markets that this beautiful cultural place has to offer.</p>
                <p>To complement these Highlands destinations, travel to the Amazon Jungle, and discover the beauties of the rainforest and the culture of its indigenous communities, while staying at a fantastic eco-lodge. This program offers 20 hours of Spanish classes for three adventure-packed weeks.&nbsp;</p>

                <h2>US $ 1469</h2>

                <p><a href="/learn-spanish-booking.html" class="btn btn-info btn-ise" title="Reserve Now!"> Reserve Now! </a></p>

                <p><strong>Package # 3 Available Dates:</strong></p>
                <ul>
                    <li>Available all year round. Contact us for Availability.</li>
                </ul>


                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-striped exact-td">
                            <thead>
                               <tr>
                                   <th>
                                        <h4 class="line-left">Package # 3 includes:</h4>
                                    </th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>Complimentary airport or bus terminal pickup and transfer to your accommodation (one way).</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Accompaniment on your first day from your home to our Spanish school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Orientation seminar in Quito &amp; short introduction in Otavalo.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Oral and written test on your first day in school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Books and notebook to follow your personal Spanish course.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Free Salsa classes twice a week in a professional Salsa School in Quito.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Free Wi-Fi (Quito &amp; Otavalo) and computer usage in the school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Free water, coffee, tea and freshly baked bread during your break in Quito and in Otavalo.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Weekly City Tour or Cultural Activity in Quito.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Usage of the school&rsquo;s library.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Luggage storage for your travels through Ecuador.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>24h emergency number.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Nice and friendly atmosphere.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Support and help during your stay in our Spanish Institute.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Only teachers with longtime experience and university diplomas without exception!</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>All Spanish courses are taught for all levels, from complete beginners to superior levels and start any Monday.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>We help you with your travel planning and information about trips in mainland Ecuador or to the Galapagos Islands.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Office support if you need to print, scan or copy documents in Quito and in Otavalo.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1 week in Quito: Accommodation with a family, private room, shared bathroom and half board.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1 week in Otavalo: Accommodation with a family, private room, shared bathroom and half board.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>5 Days/4 Nights in the Amazon Jungle Eco-Lodge.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Round-trip transportation Quito - Jungle - Quito (9 hours by bus).</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Round-trip Coca &ndash; Eco Lodge &ndash; Coca (1 hour by motorized canoe).</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Accommodation in double Indian huts 5 Days/4 Nights per week. Please note: there is an additional cost for weekends after the first week in the Amazon.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>In the Amazon full board (breakfast, lunch and dinner), except during transit to Coca.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>In the Amazon Guided afternoon excursions Monday to Friday and 1 night excursion.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>20 hours of Spanish Classes per week.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Diploma or Certificate after your Spanish classes.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><div class="col-md-6"  style="vertical-align: top;">
                        <table class="table table-striped exact-td">
                            <thead>
                               <tr>
                                    <th>
                                        <h4 class="line-left">Not included:</h4>
                                    </th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>$40 enrollment fee for all programs.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Personal expenses.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Museums or park entrances.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Travel Insurance.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Cooking party fee.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Flight ticket Quito &ndash; Coca &ndash; Quito (optional). Round trip around US $200.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-header" role="tab" id="headingFour">
            <div class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                    <span>Package # 4: 35 Days Program</span>
                </a>
            </div>
        </div>
        <div class="card-body">
            <h2>Quito + Otavalo + Travelling Classroom Spanish Program</h2>
             
        
            <ul >
                @include('gallery', ['gallery' => $article->gallery('package-4'), 'position'=>'right', 'thumbail' => '2'])
                <li class="list-packages">
                    <i class="glyphicon glyphicon-ok"></i>
                    2 weeks Spanish course + accommodation with a family in Quito (half board)
                </li>
                <li class="list-packages">
                    <i class="glyphicon glyphicon-ok"></i>
                    2 week Spanish course + accommodation with a family in Otavalo (half board)
                </li>
                <li class="list-packages">
                    <i class="glyphicon glyphicon-ok"></i>
                    1 week Travelling Classroom Andes &amp; Amazon Jungle 7 Days/6 Nights
                </li>
            </ul>
            <p class="text-right leer-mas">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Read more</a>
            </p>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="card-body">

                @include('gallery', ['gallery' => $article->gallery('package-4')])
                
                <p>This fantastic package offers the possibility of discovering the cultural and historic heritage of Quito, while you learn Spanish. Visit churches museums and monuments that speak about this beautiful city&rsquo;s past and present. Then travel to the beautiful city of Otavalo, which will welcome you with open arms, and will share with you some of the most interesting places and its kind culture.&nbsp;</p>
                <p><strong>From lakes and volcanoes, to waterfalls and secret trails, enjoy the incredible scenery that this beautiful little country has to offer.</strong> Travel to the Amazon jungle through the pristine city of Ba&ntilde;os where you can enjoy thermal pools. Discover the sounds of the jungle, swim in its incredible rivers, and hike through the green trails full of life. This package offers 20 hours of Spanish lessons per week for 5 amazing weeks.</p>

                <h2>US $ 2099</h2>

                <p><a href="/learn-spanish-booking.html" class="btn btn-info btn-ise" title="Reserve Now!"> Reserve Now! </a></p>

                <p><strong>Package # 4 Available Dates:</strong></p>
                <ul>
                    <li>Available all year round. Contact us for Availability.</li>
                </ul>


                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-striped exact-td">
                            <thead>
                               <tr>
                                   <th>
                                        <h4 class="line-left">Package # 4 includes:</h4>
                                    </th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>Complimentary airport or bus terminal pickup and transfer to your accommodation (one way).</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Accompaniment on your first day from your home to our Spanish school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Orientation seminar in Quito &amp; short introduction in Otavalo.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Oral and written test on your first day in school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Books and notebook to follow your personal Spanish course.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Free Salsa classes twice a week in a professional Salsa School in Quito.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Free Wi-Fi (Quito &amp; Otavalo) and computer usage in the school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Free water, coffee, tea and freshly baked bread during your break in Quito and in Otavalo.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Weekly City Tour or Cultural Activity in Quito.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Usage of the school&rsquo;s library.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Luggage storage for your travels through Ecuador.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>24h emergency number.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Nice and friendly atmosphere.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Support and help during your stay in our Spanish Institute.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Only teachers with longtime experience and university diplomas without exception!</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>All Spanish courses are taught for all levels, from complete beginners to superior levels and start any Monday.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>We help you with your travel planning and information about trips to the Galapagos Islands.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Office support if you need to print, scan or copy documents in Quito and in Otavalo.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>2 weeks in Quito: Accommodation with a family, private room, shared bathroom and half board.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>2 weeks in Otavalo: Accommodation with a family, private room, shared bathroom and half board.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1 week Travelling Classroom Andes &amp; Amazon Jungle 7 Days/6 Nights.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Public Transportation in Travelling Classroom Program.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Breakfast while in Travelling Classroom Program.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>20 hours of Spanish Classes per week.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Diploma or Certificate after your Spanish classes.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><div class="col-md-6"  style="vertical-align: top;">
                        <table class="table table-striped exact-td">
                            <thead>
                               <tr>
                                    <th>
                                        <h4 class="line-left">Not included:</h4>
                                    </th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>$40 enrollment fee for all programs.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Personal expenses.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Museums or park entrances.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Travel Insurance.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Cooking party fee.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Meals not specified in the program.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" role="tab" id="headingFive">
            <div class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                    <span>
                        Package # 5: 28 Days Program
                    </span>
                </a>
            </div>
        </div>
        <div class="card-body">   
                    <h2>Andes/Amazon Jungle &amp; Galapagos Islands Spanish Programs</h2>
                     
                    <ul>
                        @include('gallery', ['gallery' => $article->gallery('package-5'), 'position'=>'right', 'thumbail' => '1'])

                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            2 week Spanish course + accommodation with a family in Quito (half board)
                        </li>
                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            1 week Travelling Classroom Andes &amp; Amazon Jungle 7 Days/ 6 Nights
                        </li>
                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            1 week Spanish Program in the Amazing Galapagos Islands
                        </li>
                    </ul>
                    <p class="text-right leer-mas">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Read more</a>
                    </p>
        </div>
        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
            <div class="card-body">

                @include('gallery', ['gallery' => $article->gallery('package-5')])
                
                <p>This package is another perfect option for travelers who wish to see as much of Ecuador in as little time as possible. Start with 2 weeks in the beautiful city of Quito and discover the historic foundations to this called, &ldquo;Light of America&rdquo;. Then head over to the Amazon jungle passing through the pristine city of Ba&ntilde;os, where you can enjoy a beautiful sight of the Tungurahua volcano or the magic falls inside El Pailon del Diablo.</p>
                <p>Enjoy the beauties of the jungle by canoe through majestic rivers, and walk through exotic trails that host life under every leaf and rock. <strong>To complement this great experience travel to the Galapagos Islands where you will discover the traces of evolution with every step you take.</strong></p>
                
                <p>Enjoy the white sandy beaches, the amazing marine and land life, and the heights of the remains of past volcanoes. This package offers 20 hours of Spanish class per week for 4 incredible weeks.&nbsp;</p>

                <h2>US $ 3318</h2>

                

                <p><a href="/learn-spanish-booking.html" class="btn btn-info btn-ise" title="Reserve Now!"> Reserve Now! </a></p>

                <p><strong>Package # 5 Available Dates:</strong></p>
                <ul>
                    <li>Available all year round. Contact us for Availability.</li>
                </ul>


                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-striped exact-td">
                            <thead>
                               <tr>
                                   <th>
                                        <h4 class="line-left">Package # 5 includes:</h4>
                                    </th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>Complimentary airport or bus terminal pickup and transfer to your accommodation (one way).</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Accompaniment on your first day from your home to our Spanish school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Orientation seminar in Quito.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Oral and written test on your first day in school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Books and notebook to follow your personal Spanish course.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Free Salsa classes twice a week in a professional Salsa School in Quito.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Free Wi-Fi (Quito) and computer usage in the school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Free water, coffee, tea and freshly baked bread during your break in Quito.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Weekly City Tour or Cultural Activity in Quito.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Usage of the school&rsquo;s library.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Luggage storage for your travels through Ecuador.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>24h emergency number.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Nice and friendly atmosphere.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Support and help during your stay in our Spanish Institute.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Only teachers with longtime experience and university diplomas without exception!</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>All Spanish courses are taught for all levels, from complete beginners to superior levels and start any Monday.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Office support if you need to print, scan or copy documents in Quito.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>2 weeks in Quito: Accommodation with a family, private room, shared bathroom and half board.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1 week Travelling Classroom Andes &amp; Amazon Jungle 7 Days/6 Nights.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Public transportation in Travelling Classroom Program.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Breakfast in Travelling Classroom Program.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1 week in the Galapagos Islands: 7 Days/6 Nights accommodation, breakfast, classes, 3 guided activities per week + 1 day boat trip.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>20 hours of Spanish Classes per week.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Diploma or Certificate after your Spanish classes.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><div class="col-md-6"  style="vertical-align: top;">
                        <table class="table table-striped exact-td">
                            <thead>
                               <tr>
                                    <th>
                                        <h4 class="line-left">Not included:</h4>
                                    </th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>$40 enrollment fee for all programs.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Personal expenses.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Museums or park entrances.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Galapagos National Park entrance fee $100 and ID card $20.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Travel Insurance.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Cooking party fee.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Meals not specified in the</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" role="tab" id="headingSix">
            <div class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                    <span>
                        Package # 6: 31 Days Program
                    </span>
                </a>
            </div>
        </div>
        <div class="card-body">
                    <h2>Andes, Quito, Amazon Jungle &amp; Galapagos Islands Spanish Program</h2>
                             
                    <ul>
                         @include('gallery', ['gallery' => $article->gallery('package-6'), 'position'=>'right', 'thumbail' => '1'])   
                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            2 weeks Travelling Classroom Walking Through the Andes 12 Days/11 Nights
                        </li>
                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            1 week Spanish course + accommodation with a family in Quito (half board)
                        </li>
                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            5 Days/4 Nights Amazon Jungle Eco-Lodge Spanish Program
                        </li>
                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            1 week Spanish program in the amazing Galapagos Islands
                        </li>
                    </ul>
                    <p class="text-right leer-mas">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Read more</a>
                    </p>

        </div>
        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
            <div class="card-body">

                @include('gallery', ['gallery' => $article->gallery('package-6')])

                <p>This package will start off by taking you through the wonders of the Ecuadorian Highlands. <strong>Enjoy two full weeks of traveling through mountains and valleys, while enjoying the most breathtaking scenery, and the kindness of the people of the highlands.</strong></p>
                <p>Enjoy a week in Quito and discover the historic foundations of this beautiful country. Then travel to the amazing Amazon jungle where you can enjoy some of the most beautiful sites while discovering life under every leaf and every rock of every jungle path.</p>
                <p>To complete this trip enjoy 1 week in the wonderful Galapagos Islands where you will have the opportunity to swim in some of the world&rsquo;s most pristine waters, where you can enjoy the site of vast marine life. Discover the wonders of these magical islands while learning Spanish. This package offers 20 hours of Spanish lessons per week for 5 magical weeks.</p>

                <h2>US $ 4569</h2>

                <p><a href="/learn-spanish-booking.html" class="btn btn-info btn-ise" title="Reserve Now!"> Reserve Now! </a></p>

                <p><strong>Package # 6 Available Dates:</strong></p>
                <ul>
                    <li>Available all year round. Contact us for Availability.</li>
                </ul>

                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-striped exact-td">
                            <thead>
                               <tr>
                                   <th>
                                        <h4 class="line-left">Package # 6 includes:</h4>
                                    </th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>Complimentary airport or bus terminal pickup and transfer to your accommodation (one way).</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Accompaniment on your first day from your home to our Spanish school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Orientation seminar in Quito.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Oral and written test on your first day in school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Books and notebook to follow your personal Spanish course.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>2 weeks Travelling Classroom Walking Through the Andes.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Public Transportation in Travelling Classroom Program.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Breakfast in Travelling Classroom Program.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1 week in Quito: Accommodation with a family, private room, shared bathroom and half board.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Free Salsa classes twice a week in a professional Salsa School in Quito</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Free Wi-Fi (Quito) and computer usage in the school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Free water, coffee, tea and freshly baked bread during your break in</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Weekly City Tour or Cultural Activity in Quito.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Usage of the school&rsquo;s library.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Luggage storage for your travels through Ecuador.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>24h emergency number.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Nice and friendly atmosphere.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Support and help during your stay in our Spanish Institute.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Only teachers with longtime experience and university diplomas without exception!</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>All Spanish courses are taught for all levels, from complete beginners to superior levels and start any Monday.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>We help you with your travel planning and information about trips in Ecuador.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Office support if you need to print, scan or copy documents in Quito.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>5 Days/4 Nights in the Amazon Jungle Eco-Lodge</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Round-trip transportation Quito - Jungle - Quito (9 hours by bus).</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Round-trip Coca &ndash; Eco Lodge &ndash; Coca (1 hour by motorized canoe).</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Accommodation in double Indian huts 5 Days/4 Nights per week. Please note: there is an additional cost for weekends after the first week in the Amazon.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>In the Amazon full board (breakfast, lunch and dinner), except during transit to Coca.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>In the Amazon Guided afternoon excursions Monday to Friday and 1 night excursion.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1 week in the Galapagos Islands: 7 Days/6 Nights accommodation, breakfast, classes, 3 activities per week + 1 day boat trip.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>20 hours of Spanish Classes per week.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Diploma or Certificate after your Spanish classes.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><div class="col-md-6"  style="vertical-align: top;">
                        <table class="table table-striped exact-td">
                            <thead>
                               <tr>
                                    <th>
                                        <h4 class="line-left">Not included:</h4>
                                    </th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>$40 enrollment fee for all programs.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Personal expenses.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Museums or park entrances.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Galapagos National Park entrance fee $100 and ID card $20.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Travel Insurance.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Cooking party fee.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Meals not specified in the package.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" role="tab" id="headingEight">
            <div class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                    <span>
                        Package # 7: 28 Days Program
                    </span>
                </a>
            </div>
        </div>
        <div class="card-body">
                    <h2>Learning Spanish in Quito + Otavalo + Andes/Amazon Jungle and the Galapagos Islands: 4 weeks program</h2>
                     
                    <ul>
                        @include('gallery', ['gallery' => $article->gallery('package-7'), 'position'=>'right', 'thumbail' => '1'])
                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            1 week Spanish course + accommodation with a family in Quito (half board)
                        </li>
                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            1 week Spanish course + accommodation with a family in Otavalo (half board)
                        </li>
                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            1 week Travel Travelling Classroom Andes &amp; Amazon Jungle 7 Days/ 6 Nights
                        </li>
                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            1 week Spanish Program in the Galapagos Islands (1 week)
                        </li>
                    </ul>
                    <p class="text-right leer-mas">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">Read more</a>
                    </p>

        </div>
        <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
            <div class="card-body">

                @include('gallery', ['gallery' => $article->gallery('package-7')])

                <p>This 4 week package starts off in Ecuador&rsquo;s beautiful capital, Quito. <strong>Learn and discover the amazing sites that show our history and culture.</strong> Then travel to the incredible city of Otavalo, where its kind people will welcome and invite you to discover the natural wonders of this beautiful place, as well as their spiritual beliefs and importance in their culture.</p>
                <p>Later on you will travel to the mysterious Amazon jungle where you will enjoy the sounds of the abundant life, travel through majestic rivers, and meet the indigenous communities of the surroundings.</p>
                <p>To complement this fantastic trip travel to the magical Galapagos Islands, where you will have the opportunity of seeing the most unique wildlife in the world. Swim in the pristine waters of Galapagos, hike through paths formed by volcanic rock and lush greenery, and enjoy the some of the world&rsquo;s most beautiful white sand beaches.</p>
                <p>This package offers 20 hours of Spanish lessons per week for 4 incredible weeks.</p>

                <h2>US $ 3318</h2>

                <p><a href="/learn-spanish-booking.html" class="btn btn-info btn-ise" title="Reserve Now!"> Reserve Now! </a></p>

                <p><strong>Package # 7 Available Dates:</strong></p>
                <ul>
                    <li>Available all year round. Contact us for Availability.</li>
                </ul>


                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-striped exact-td">
                            <thead>
                               <tr>
                                   <th>
                                        <h4 class="line-left">Package # 7 includes:</h4>
                                    </th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>Complimentary airport or bus terminal pickup and transfer to your accommodation (one way).</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Accompaniment on your first day from your home to our Spanish school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Orientation seminar in Quito &amp; short introduction in Otavalo.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Oral and written test on your first day in school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Books and notebook to follow your personal Spanish course.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Free Salsa classes twice a week in a professional Salsa School in Quito.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Free Wi-Fi (Quito &amp; Otavalo) and computer usage in the school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Free water, coffee, tea and freshly baked bread during your break in Quito and in Otavalo.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Weekly City Tour or Cultural Activity in Quito.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Usage of the school&rsquo;s library.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Luggage storage for your travels through Ecuador.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>24h emergency number.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Nice and friendly atmosphere.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Support and help during your stay in our Spanish Institute.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Only teachers with longtime experience and university diplomas without exception!</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>All Spanish courses are taught for all levels, from complete beginners to superior levels and start any Monday.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Office support if you need to print, scan or copy documents in Quito and in Otavalo.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1 week in Quito: Accommodation with a family, private room, shared bathroom and half board.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1 week in Otavalo: Accommodation with a family, private room, shared bathroom and half board.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1 week Travelling Classroom Andes and Amazon Jungle 7 Days/6 Nights.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Public transportation in Travelling Classroom program.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Breakfast in Travelling Classroom program.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1 week in the Galapagos Islands: 7 Days/6 Nights accommodation, breakfast, classes, 3 guided activities per week + 1 day boat trip.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>20 hours of Spanish Classes per week.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Diploma or Certificate after your Spanish classes.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><div class="col-md-6"  style="vertical-align: top;">
                        <table class="table table-striped exact-td">
                            <thead>
                               <tr>
                                    <th>
                                        <h4 class="line-left">Not included:</h4>
                                    </th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>$40 enrollment fee for all programs.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Personal expenses.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Museums or park entrances.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Galapagos National Park entrance fee $100 and ID card $20.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Travel Insurance.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Cooking party fee.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Meals not specified in the package.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>



            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-header" role="tab" id="headingnine">
            <div class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                    <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                    <span>
                        Package # 8: 27 Days Program
                    </span>
                </a>
            </div>
        </div>
        <div class="card-body">
                    <h2>Walking through the Andes and in the Galapagos Islands:&nbsp; 4 weeks program</h2>
                    
                    <ul >
                         @include('gallery', ['gallery' => $article->gallery('package-8'), 'position'=>'right', 'thumbail' => '2'])
                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            Travelling Classroom Walking through the Andes 12 days
                        </li>
                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            Travelling Classroom &ldquo;The Secret of Evolution&rdquo; 15 days
                        </li>
                    </ul>
                    <p class="text-right leer-mas">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsenine" aria-expanded="false" aria-controls="collapsenine">Read more</a>
                    </p>
        </div>
        <div id="collapsenine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingnine">
            <div class="card-body">

                @include('gallery', ['gallery' => $article->gallery('package-8')])

                <p>This wonderful package offers the possibility of discovering the highlands of Ecuador in depth. Enjoy 2 amazing weeks traveling through mountains and valleys, rivers and historical cities, which will show you more about this amazing place.</p>
                <p>After the 12 days program Walking through the Andes you travel to the majestic Galapagos Islands, and discovered the secrets of evolution. Here you will enjoy 2 full weeks, were you will have the opportunity to visit several islands and the beauty that each one of them offers. <strong>From white sandy beaches, to deep blue waters, from luscious green paths to tall volcanoes,&nbsp;the Galapagos Islands will give you a trip of a lifetime.</strong> This package offers 20 hours of Spanish classes per week for 4 fantastic weeks.&nbsp;</p>

                <h2>US $ 5137</h2>

                <p><a href="/learn-spanish-booking.html" class="btn btn-info btn-ise" title="Reserve Now!"> Reserve Now! </a></p>

                <p><strong>Package # 8 Available Dates:</strong></p>
                <ul>
                    <li>Available all year round. Contact us for Availability.</li>
                </ul>


                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-striped exact-td">
                            <thead>
                               <tr>
                                   <th>
                                        <h4 class="line-left">Package # 8 includes:</h4>
                                    </th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>Complimentary airport or bus terminal pickup and transfer to your accommodation (one way).</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Accompaniment on your first day from your home to our Spanish school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Orientation seminar in Quito.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Oral and written test on your first day in school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Books and notebook to follow your personal Spanish course.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Travelling Classroom Walking through the Andes 12 Days</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Public Transportation in Travelling Classroom Program.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>24h emergency number.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Support and help during your stay in our Spanish Institute.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Only teachers with longtime experience and university diplomas without exception!</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>All Spanish courses are taught for all levels, from complete beginners to superior levels and start any Monday.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Travelling Classroom &ldquo;The Secret of Evolution&rdquo; 15 days</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Breakfast in Travelling Classroom Program.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>20 hours of Spanish Classes per week, with 15 hours of formal face to face Spanish Classes and 5 hours of practice while travelling with your teacher.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Diploma or Certificate after your Spanish classes</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><div class="col-md-6"  style="vertical-align: top;">
                        <table class="table table-striped exact-td">
                            <thead>
                               <tr>
                                    <th>
                                        <h4 class="line-left">Not included:</h4>
                                    </th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>$40 enrollment fee for all programs.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Personal expenses.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Museums or park entrances.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Galapagos National Park entrance fee $100 and ID card $20.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Travel Insurance.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Cooking party fee.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Meals not specified in the package.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" role="tab" id="headingten">
            <div class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseten" aria-expanded="false" aria-controls="collapseten">
                    <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                    <span>
                        Package # 9: 34 days program
                    </span>
                </a>
            </div>
        </div>
        <div class="card-body">
                    <h2>Exploring Ecuador and the Galapagos Islands: 5 weeks full immersion Spanish Program</h2>
                     
                
                    <ul>
                        @include('gallery', ['gallery' => $article->gallery('package-9'), 'position'=>'right', 'thumbail' => '1'])
                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            Travelling Classroom &ldquo;Exploring Ecuador&rdquo; 19 days
                        </li>
                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            Travelling Classroom &ldquo;Secrets of Evolution&rdquo; 15 days
                        </li>
                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            <strong>This unique package offers 5 amazing weeks, where you will discover some of the best of Ecuador.&nbsp; From the highlands to the Amazon jungle and the Galapagos Islands.</strong>
                        </li>
                    </ul>
                    <p class="text-right leer-mas">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseten" aria-expanded="false" aria-controls="collapseten">Read more</a>
                    </p>
        </div>
        <div id="collapseten" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingten">
            <div class="card-body">

                @include('gallery', ['gallery' => $article->gallery('package-9')])
                
                <p>This package offers the opportunity of an in-depth experience of this beautiful country. Discover some of the main cities in the highlands, the most breathtaking views of the Andes, and the&nbsp;warm gentle touch of its people. Then travel to the Galapagos Islands where you will discover the secrets of evolution in every path through the heights of the islands and the depths of the deep blue ocean. Discover flora and fauna species found nowhere else in the world, and enjoy a trip of a lifetime. This package offers 20 hours of Spanish lessons per week for 5 unforgettable weeks.</p>

                <p><strong>US $ 5999</strong></p>
                
                <p><a href="/learn-spanish-booking.html" class="btn btn-info btn-ise" title="Reserve Now!"> Reserve Now! </a></p>

                <p><strong>Package # 9 Available Dates:</strong></p>
                <ul>
                    <li>Available all year round. Contact us for Availability.</li>
                </ul>


                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-striped exact-td">
                            <thead>
                               <tr>
                                   <th>
                                        <h4 class="line-left">Package # 9 includes:</h4>
                                    </th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>Complimentary airport or bus terminal pickup and transfer to your accommodation (one way).</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Accompaniment on your first day from your home to our Spanish school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Orientation seminar in Quito.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Oral and written test on your first day in school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Books and notebook to follow your personal Spanish course.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Travelling Classroom &ldquo;Exploring Ecuador&rdquo; 19 days</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Public Transportation in Travelling Classroom Program.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>24h emergency number.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Support and help during your stay in our Spanish Institute.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Only teachers with longtime experience and university diplomas without exception!</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>All Spanish courses are taught for all levels, from complete beginners to superior levels and start any Monday.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Travelling Classroom &ldquo;The Secret of Evolution&rdquo; 15 days</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Breakfast in Travelling Classroom Program.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>20 hours of Spanish Classes per week, with 15 hours of formal face to face Spanish Classes and 5 hours of practice while travelling with your teacher.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Diploma or Certificate after your Spanish classes</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><div class="col-md-6"  style="vertical-align: top;">
                        <table class="table table-striped exact-td">
                            <thead>
                               <tr>
                                    <th>
                                        <h4 class="line-left">Not included:</h4>
                                    </th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>$40 enrollment fee for all programs.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Personal expenses.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Museums or park entrances.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Galapagos National Park entrance fee $100 and ID card $20.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Travel Insurance.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Cooking party fee.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Meals not specified in the package.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" role="tab" id="headingeleven">
            <div class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven" aria-expanded="false" aria-controls="collapseeleven">
                    <span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span>
                    <span>
                        Package # 10: 27 days program
                    </span>
                </a>
            </div>
        </div>
        <div class="card-body">
                    <h2>Andes/Amazon Jungle &amp; the Galapagos Islands: 4 week total Spanish Immersion</h2>
                     
                    <ul>
                        @include('gallery', ['gallery' => $article->gallery('package-10'), 'position'=>'right', 'thumbail' => '1'])
                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            Travelling Classroom Andes &ndash; Amazon Jungle 12 days
                        </li>
                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            Travelling Classroom &ldquo;The secret of evolution&rdquo; 15 days
                        </li>
                        <li class="list-packages">
                            <i class="glyphicon glyphicon-ok"></i>
                            <strong>This wonderful package will give you the opportunity to visit the highlands of Ecuador as well as the Amazon jungle and the incredible Galapagos Islands. </strong>
                        </li>
                    </ul>
                    <p class="text-right leer-mas">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven" aria-expanded="false" aria-controls="collapseeleven">Read more</a>
                    </p>
        </div>
        <div id="collapseeleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeleven">
            <div class="card-body">

                @include('gallery', ['gallery' => $article->gallery('package-10')])
                
                <p>Start off in Quito, and discover the historic heritage that our ancestors left. Then move on to discover the beauties of the mountains and the valleys that the Ecuadorian Andes have to offer. Then travel to the incredible and mystical Amazon jungle, where you will be amazed by the sounds of nature, and the vast life that inhabits every small corner of this wonderful place.</p>
                <p>Then travel to the majestic Galapagos Islands, and discover some of the most amazing flora and Fauna in the world. Swim in crystal-clear waters, lay on white-sandy beaches, and walk through luscious green trails that will take you to discover the beauty of the islands. This package offers 20 hours of Spanish lessons per week for four unforgettable weeks.</p>

                <h2>US $ 5028</h2>

                <p><a type="submit" href="/learn-spanish-booking.html" class="btn btn-info btn-ise"> Reserve Now! </a></p>

                <p><strong>Package # 10 Available Dates:</strong></p>
                <ul>
                    <li>Available all year round. Contact us for Availability.</li>
                </ul>



                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-striped exact-td">
                            <thead>
                               <tr>
                                   <th>
                                        <h4 class="line-left">Package # 10 includes:</h4>
                                    </th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>Complimentary airport or bus terminal pickup and transfer to your accommodation (one way).</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Accompaniment on your first day from your home to our Spanish school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Orientation seminar in Quito.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Oral and written test on your first day in school.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Books and notebook to follow your personal Spanish course.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Travelling Classroom Andes &ndash; Amazon Jungle 12 Days.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Public Transportation in Travelling Classroom Program.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>24h emergency number.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Support and help during your stay in our Spanish Institute.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Only teachers with longtime experience and university diplomas without exception!</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>All Spanish courses are taught for all levels, from complete beginners to superior levels and start any Monday.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Travelling Classroom &ldquo;The Secret of Evolution&rdquo; 15 days</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Breakfast in Travelling Classroom Program.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>20 hours of Spanish Classes per week, with 15 hours of formal face to face Spanish Classes and 5 hours of practice while travelling with your teacher.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Diploma or Certificate after your Spanish classes</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div><div class="col-md-6"  style="vertical-align: top;">
                        <table class="table table-striped exact-td">
                            <thead>
                               <tr>
                                    <th>
                                        <h4 class="line-left">Not included:</h4>
                                    </th>
                                </tr> 
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>$40 enrollment fee for all programs.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Personal expenses.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Museums or park entrances.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Galapagos National Park entrance fee $100 and ID card $20.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Travel Insurance.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Cooking party fee.</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Meals not specified in the package.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>



</div>





@endsection

@section('bookLessons')

<hr>
<div>
    <h3>Book Spanish Lessons Package</h3>
    <p class="text-center" style="font-size: 17px;">
        ONE WEEK FROM US$1,469
    </p>
    <a href="/learn-spanish-booking.html" class="btn btn-primary w-100"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> BOOK NOW</a>
</div>


@endsection