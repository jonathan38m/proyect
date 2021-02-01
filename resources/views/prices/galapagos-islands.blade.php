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
      <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-8-3') }}</li>
  </ol>
</nav>

<h1>
    Galapagos Islands Spanish Programs Prices
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


</div>



<h2>7-Day  Spanish Immersion in The Galapagos Islands: Santa Cruz Island</h2>
<p><strong>Starts at any time (previous reservation  with at least 4 weeks in advance)</strong></p>
<table class="table text-center price-table">
  <thead>
      <tr>
        <td><p>Weeks</p></td>
        <td><p>1</p></td>
        <td><p>2</p></td>
        <td><p>Additional week</p></td>
      </tr>
  </thead>
  <tbody>
      <tr>
        <td><p>4 hours per day in group classes</p></td>
        <td><p>$1,999</p></td>
        <td><p>$3,998</p></td>
        <td><p>$1,999</p></td>
      </tr>
  </tbody>
  <tfoot>
      <tr>
        <td colspan="4"><p>Includes a 1-day boat trip and 3 afternoon excursions!</p></td>
      </tr>
  </tfoot>
</table>

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
                        <p>Complimentary  airport pickup and transfer to accommodation in Quito (one way). Please note  flights to the Galapagos Islands only depart in the morning.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Transfers  to the activities on the Islands.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>20  hours per week of group Spanish classes with maximum 4 students per class.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Accommodation  at three-star hotel, single or double occupancy room (double occupancy if you  come with a partner, husband or wife), 7 days/6 nights per week</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Buffet  breakfast</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Spanish classes in the morning and 3 afternoon guided activities.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>1-day  boat excursion to visit another island in Galapagos.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Diploma  or Certificate of studies.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Luggage  storage and safety box.</p>
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
                        <p>Round-trip  flight ticket to the Galapagos Islands</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Galapagos  National Park entrance fee and ID card $120</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>$40  enrollment fee for all programs</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Travel  Insurance</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<h2>14-Day Discovering Galapagos Spanish Program: 8 Days/7 Nights Cruise  + 7 Days/6 Nights Land Santa Cruz Island Spanish Program</h2>
<p><strong>Starts at any time  (previous reservation with at least 4 weeks in advance)</strong></p>
<table class="table text-center price-table">
    <thead>
        <tr>
            <td><p>Weeks</p></td>
            <td><p>14 Days</p></td>
            <td><p>Additional week of Spanish Classes in Santa Cruz </p></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><p>4 hours per day in group classes</p></td>
            <td><p>$4,999</p></td>
            <td><p>$1,999</p></td>
        </tr>

    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"><p>Includes 3 afternoon excursions during    the program + 8-Day boat trip! </p></td>
        </tr>
    </tfoot>
</table>

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
                        <p>Complimentary  airport pickup and transfer to accommodation in Quito (one way).  Please note flights to the Galapagos Islands  only depart in the morning.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Transfers  to the activities on the Islands.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>20  hours per week of group Spanish classes with maximum 4 students per class.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Accommodation  at three-star hotel, single or double occupancy room (double occupancy if you  come with a partner, husband or wife), 7 days/6 nights per week</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Buffet  breakfast</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Spanish classes in the morning and 3 afternoon guided activities.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>8  days/7 nights boat trip excursion to discover the Galapagos Islands.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Diploma  or Certificate of studies.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Luggage  storage and safety box.</p>
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
                        <p>Round-trip  flight ticket to the Galapagos Islands</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Galapagos  National Park entrance fee and ID card $120</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>$40  enrollment fee for all programs</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Travel  Insurance</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<h2>14-Day  Exploring the Galapagos Islands Spanish program: 1  week in San Cristobal Island + 1 week in Santa Cruz Island</h2>
<p><strong>Starts at  any time (previous reservation with at least 4 weeks in advance)</strong></p>
<table class="table text-center price-table">
    <thead>
        <tr>
            <td>Weeks </td>
            <td><p>14 days/13 nights</p></td>
            <td><p>Additional week of Spanish Classes </p></td>
        </tr>
    </thead>
    <tbody>
    <tr>
        <td><p>4 hours per day in group classes</p></td>
        <td><p>$ 3,898</p></td>
        <td><p>$ 1,999</p></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
        <td colspan="3"><p>Includes 3 afternoon excursions +    1-day boat trip per week! </p></td>
    </tr>
    </tfoot>
</table>

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
                        <p>Complimentary  airport pickup and transfer to accommodation in Quito (one way).  Please note flights to the Galapagos Islands  only depart in the morning.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Transfers  to the activities on the Islands.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>20  hours per week of group Spanish classes with maximum 4 students per class.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Accommodation  in three-star hotel, double occupancy room, 7 Days/6 Nights per week.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Buffet  breakfast</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Spanish classes in the morning and 3 afternoon guided activities.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>1-day  boat excursion per week to discover another Island in the Galapagos.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Diploma  or Certificate of studies.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Luggage  storage and safety box.</p>
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
                        <p>Round-trip  flight ticket to the Galapagos Islands</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Galapagos  National Park entrance fee and ID card $120</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>$40  enrollment fee for all programs</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Travel  Insurance</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<h2>11-Day Enchanting  Galapagos Spanish Program: 5 Days/4 Nights Cruise  &amp; 7 Days/6 Nights Land Santa Cruz Island Spanish Program </h2>
<p><strong>Starts at  any time (previous reservation with at least 4 weeks in advance)</strong></p>
<table class="table text-center price-table">
    <thead>
        <tr>
            <td><p>Weeks</p></td>
            <td><p>11 days</p></td>
            <td><p>Additional week of Spanish Classes </p></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><p>4 hours per day in group classes</p></td>
            <td><p>$ 3,599</p></td>
            <td><p>$ 1,799</p></td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"><p>Includes 3 afternoon excursions during    the program + 5-Day Boat Trip! </p></td>
        </tr>
    </tfoot>
</table>

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
                        <p>Complimentary  airport pickup and transfer to accommodation in Quito (one way).  Please note flights to the Galapagos Islands  only depart in the morning.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Transfers to the activities on the Islands.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>20  hours of Group Spanish classes with a maximum of 4 students per class.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Accommodation  in a three-star hotel, double occupancy room, 7 Days/6 Nights per week.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Buffet  breakfast</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Spanish  classes in the morning and 3 guided activities in the afternoon.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>5 Days/4 Nights boat trip excursion to discover the Galapagos Islands.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Diploma  or Certificate of studies.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Luggage  storage and safety box.</p>
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
                        <p>Round-trip  flight ticket to the Galapagos Islands</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Galapagos  National Park entrance fee and ID card $120</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>$40  enrollment fee for all programs</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Travel  Insurance</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection