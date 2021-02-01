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
      <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-8-1') }}</li>
  </ol>
</nav>


<h1>
    Quito &amp; Otavalo Spanish Course Prices
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
        <li class="list-group-item list-courses">
            <i class="glyphicon glyphicon-ok"></i>Dancing lessons 2 times per week while in Quito
        </li>
        <li class="list-group-item list-courses">
            <i class="glyphicon glyphicon-ok"></i>Wednesday cultural trip in Quito after classes
        </li>
    </ul>


</div>

<h2>Learn Spanish and Discover Ecuador’s Cultural Heritage</h2>

<p><strong>Group  Classes:</strong> maximum 6 students – one teacher</p>
<table class="table text-center price-table">
    <thead>
        <tr>
            <td><p>Weeks</p></td>
            <td><p>1</p></td>
            <td><p>2</p></td>
            <td><p>3</p></td>
            <td><p>4</p></td>
            <td><p>5</p></td>
            <td><p>6</p></td>
            <td><p>7</p></td>
            <td><p>8</p></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><p>4 hrs per day</p></td>
            <td><p>$ 139</p></td>
            <td><p>$ 278</p></td>
            <td><p>$ 417</p></td>
            <td><p>$ 556</p></td>
            <td><p>$ 695</p></td>
            <td><p>$ 834</p></td>
            <td><p>$ 973</p></td>
            <td><p>$ 1,112</p></td>
        </tr>
    </tbody>
</table> 
<p><strong>Semi  Private Course:</strong> 2 students – one teacher </p>
<table class="table text-center price-table">
    <thead>
        <tr>
            <td><p>Weeks</p></td>
            <td><p>1</p></td>
            <td><p>2</p></td>
            <td><p>3</p></td>
            <td><p>4</p></td>
            <td><p>5</p></td>
            <td><p>6</p></td>
            <td><p>7</p></td>
            <td><p>8</p></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><p>20 hrs per week</p></td>
            <td><p>$ 159</p></td>
            <td><p>$ 318</p></td>
            <td><p>$ 477</p></td>
            <td><p>$ 636</p></td>
            <td><p>$ 795</p></td>
            <td><p>$ 954</p></td>
            <td><p>$ 1,113</p></td>
            <td><p>$ 1,272</p></td>
        </tr>
        <tr>
            <td><p>25 hrs per week</p></td>
            <td><p>$199</p></td>
            <td><p>$398</p></td>
            <td><p>$597</p></td>
            <td><p>$796</p></td>
            <td><p>$995</p></td>
            <td><p>$1,194</p></td>
            <td><p>$1,393</p></td>
            <td><p>$1,592</p></td>
        </tr>
        <tr>
            <td><p>30 hrs per week</p></td>
            <td><p>$239</p></td>
            <td><p>$478</p></td>
            <td><p>$717</p></td>
            <td><p>$956</p></td>
            <td><p>$1,195</p></td>
            <td><p>$1,434</p></td>
            <td><p>$1,673</p></td>
            <td><p>$1,912</p></td>
        </tr>
        <tr>
            <td><p>35 hrs per week</p></td>
            <td><p>$279</p></td>
            <td><p>$558</p></td>
            <td><p>$837</p></td>
            <td><p>$1,116</p></td>
            <td><p>$1,395</p></td>
            <td><p>$1,674</p></td>
            <td><p>$1,953</p></td>
            <td><p>$2,232</p></td>
        </tr>
    </tbody>
</table>
<p><strong>Private Course - Individual  Teaching: </strong>one student – one teacher </p>
<table class="table text-center price-table">
    <thead>
        <tr>
            <td><p>Weeks</p></td>
            <td><p>1</p></td>
            <td><p>2</p></td>
            <td><p>3</p></td>
            <td><p>4</p></td>
            <td><p>5</p></td>
            <td><p>6</p></td>
            <td><p>7</p></td>
            <td><p>8</p></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><p>20 hrs per week</p></td>
            <td><p>$ 219</p></td>
            <td><p>$ 438</p></td>
            <td><p>$ 657</p></td>
            <td><p>$ 876</p></td>
            <td><p>$ 1,095</p></td>
            <td><p>$ 1,314</p></td>
            <td><p>$ 1,533</p></td>
            <td><p>$ 1,752</p></td>
        </tr>
        <tr>
            <td><p>25 hrs per week</p></td>
            <td><p>$ 269</p></td>
            <td><p>$ 538</p></td>
            <td><p>$ 807</p></td>
            <td><p>$ 1,076</p></td>
            <td><p>$ 1,345</p></td>
            <td><p>$ 1,614</p></td>
            <td><p>$ 1,883</p></td>
            <td><p>$ 2,152</p></td>
        </tr>
        <tr>
            <td><p>30 hrs per week</p></td>
            <td><p>$ 319</p></td>
            <td><p>$ 638</p></td>
            <td><p>$ 957</p></td>
            <td><p>$ 1,276</p></td>
            <td><p>$ 1,595</p></td>
            <td><p>$ 1,914</p></td>
            <td><p>$ 2,233</p></td>
            <td><p>$ 2,552</p></td>
        </tr>
        <tr>
            <td><p>35 hrs per week</p></td>
            <td><p>$ 369</p></td>
            <td><p>$ 738</p></td>
            <td><p>$ 1,107</p></td>
            <td><p>$ 1,476</p></td>
            <td><p>$ 1,845</p></td>
            <td><p>$ 2,214</p></td>
            <td><p>$ 2,583</p></td>
            <td><p>$ 2,952</p></td>
        </tr>
    </tbody>
</table>
<p><strong>Combined  Course:</strong> Group Classes + Private Teaching </p>
<table class="table text-center price-table">
    <thead>
        <tr>
            <td><p>Weeks</p></td>
            <td><p>1</p></td>
            <td><p>2</p></td>
            <td><p>3</p></td>
            <td><p>4</p></td>
            <td><p>5</p></td>
            <td><p>6</p></td>
            <td><p>7</p></td>
            <td><p>8</p></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><p>4 hrs in group &amp;<br />
            2 hrs ind. per day</p></td>
            <td><p>$ 239</p></td>
            <td><p>$ 478</p></td>
            <td><p>$ 717</p></td>
            <td><p>$ 956</p></td>
            <td><p>$ 1,195</p></td>
            <td><p>$ 1,434</p></td>
            <td><p>$ 1,673</p></td>
            <td><p>$ 1,912</p></td>
        </tr>
    </tbody>
</table>
<p><strong>Super  Combo Course:</strong><strong> </strong>Group  Classes in the morning + Private Teaching in the afternoon </p>
<table class="table text-center price-table">
    <thead>
        <tr>
            <td><p>Weeks</p></td>
            <td><p>1</p></td>
            <td><p>2</p></td>
            <td><p>3</p></td>
            <td><p>4</p></td>
            <td><p>5</p></td>
            <td><p>6</p></td>
            <td><p>7</p></td>
            <td><p>8</p></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><p>4 hrs group. &amp;<br />
            3 hrs indiv per day </p></td>
            <td><p>$ 289</p></td>
            <td><p>$ 578</p></td>
            <td><p>$ 867</p></td>
            <td><p>$ 1,156</p></td>
            <td><p>$ 1,445</p></td>
            <td><p>$ 1,734</p></td>
            <td><p>$ 2,023</p></td>
            <td><p>$ 2,312</p></td>
        </tr>
    </tbody>
</table>
<p><strong>Spanish for Business / Medicine / DELE Exam Preparation</strong></p>
<table class="table text-center price-table">
    <thead>
        <tr>
            <td><p>Weeks</p></td>
            <td><p>1</p></td>
            <td><p>2</p></td>
            <td><p>3</p></td>
            <td><p>4</p></td>
            <td><p>5</p></td>
            <td><p>6</p></td>
            <td><p>7</p></td>
            <td><p>8</p></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><p>4 hrs. per day (20 hours per week)</p></td>
            <td><p>$ 269</p></td>
            <td><p>$ 538</p></td>
            <td><p>$ 807</p></td>
            <td><p>$ 1,076</p></td>
            <td><p>$ 1,345</p></td>
            <td><p>$ 1,614</p></td>
            <td><p>$ 1,883</p></td>
            <td><p>$ 2,152</p></td>
        </tr>
    </tbody>
</table>

<h2>Prices</h2>
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
                    <p>Complimentary  airport or bus terminal pickup and transfer to  your accommodation (one way) </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Accompaniment  on your first day from your home to our Spanish school </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Orientation  seminar in Quito &amp; short introduction in Otavalo </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Oral  and written test on your first day in school </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Books  and notebook to follow your personal Spanish course </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Free  Salsa classes twice a week in a professional Salsa School in Quito </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Free  Wi-Fi (Quito &amp; Otavalo) and computer usage in the school. </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Free  water, coffee, tea and freshly baked bread during your break </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Weekly  City Tour or Cultural Activity in Quito </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Usage  of the school&rsquo;s library </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Luggage  storage for your travels through Ecuador </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>24h  emergency number </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Nice  and friendly atmosphere </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Support  and help during your stay in our Spanish Institute </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Only  teachers with longtime experience and university diplomas without exception! </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>All  Spanish courses are taught for all levels, from complete beginners to superior  levels and start any day of the week, from Monday to Friday </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>We  help you with your travel planning and information about trips in Ecuador or to  Galapagos </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Office  support if you need to print, scan or copy documents </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p>Certificate  after your Spanish classes </p>
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
                <p>$40  enrollment fee for all programs </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Personal expenses</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Museums  or park entrances</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Travel  Insurance</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Cooking  party fee</p>
            </td>
        </tr>
    </tbody>
</table>
</div>
</div>


<div class="panel panel-info">
    <div class="panel-heading"> 
        <h3 class="panel-title">Family Stay Accommodation Choices (Optional)</h3> 
    </div> 
    <div class="panel-body padding-top-bottom">

        <div class="row">
            <div class="col-md-6 vertical-top">

                <h3 class="text-center">
                    <span class="glyphicon glyphicon-bed" aria-hidden="true"></span>
                </h3>

                <h3 class="text-center">
                    Living with a family Private Room
                </h3>
                
                <table class="table table-hover text-center">
                    <tbody>

                        <tr>
                            <td>
                                $35 per night – incl. 3 meals a day private bathroom (available only in Otavalo)
                            </td>
                        </tr>

                        <tr>
                            <td>
                                $30 per night and per person – incl. 2 meals a day  &amp; private    bathroom (available in Quito &amp; Otavalo)
                            </td>
                        </tr>

                        <tr>
                            <td>
                                $25 per night – includes 2 meals a day shared bathroom  (available in Quito &amp; Otavalo)
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div><div class="col-md-6 vertical-top">

                <h3 class="text-center">
                    <span class="glyphicon glyphicon-bed" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-bed" aria-hidden="true"></span>
                </h3>

                <h3 class="text-center">Living with a family Double Room</h3>
                

                <table class="table table-hover text-center">
                    <tbody >

                        <tr>
                            <td>
                                $30 per night and per person – incl. 3 meals a day &amp; private bathroom (available in Otavalo)
                            </td>
                        </tr>

                        <tr>
                            <td>
                                $25 per night and per person – incl. 2 meals a day &amp; private bathroom (available in Quito &amp; Otavalo)
                            </td>
                        </tr>

                        <tr>
                            <td>
                                $20 per night and per person – incl. 2 meals a day &amp; shared bathroom (available in Quito &amp; Otavalo)
                            </td>
                        </tr>

                    </tbody>
                </table>


            </div>
        </div>

    </div> 
</div>



<p><strong>Host Families Price Includes</strong></p>
<ol style="list-style: outside;">
  <li>Private room</li>
  <li>Water always available </li>
  <li>Extra blanket if necessary</li>
  <li>Linen, blankets and towels including  changes</li>
  <li>Very nice &amp; friendly atmosphere</li>
  <li>All host families have internet access  and/or Wi-Fi</li>
</ol>

<div class="panel panel-info"> 
    <div class="panel-heading"> 
        <h3 class="panel-title">Accommodation Choices (Optional)</h3> 
    </div> 
    <div class="panel-body padding-top-bottom">

        <div class="row">
            <div class="col-md-6 vertical-top">

                <h3 class="text-center">
                    <span class="glyphicon glyphicon-bed" aria-hidden="true"></span>
                </h3>

                <h3 class="text-center">
                    Student Residence
                </h3>
                
                <table class="table table-hover text-center">
                    <tbody>

                        <tr>
                            <td>
                                $23 per night in a single room, breakfast & shared bathroom.
                            </td>
                        </tr>

                        <tr>
                            <td>
                                $19 per night and per person, breakfast, double room & shared bathroom.
                            </td>
                        </tr>

                        <tr>
                            <td>
                                $16 per night and per person, breakfast, dorm & shared bathroom
                            </td>
                        </tr>

                        <tr>
                            <td>
                                All rooms include personal towel, soap + shampoo in sachet & toilet paper.
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <strong>Student residence counts with Wi-Fi access</strong>
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div><div class="col-md-6 vertical-top">

                <h3 class="text-center">
                    <span class="glyphicon glyphicon-bed" aria-hidden="true"></span>
                </h3>

                <h3 class="text-center">Hostel Accommodation </h3>
                
                <table class="table table-hover text-center">
                    <tbody >

                        <tr>
                            <td>
                                From $ 13 per night in a dorm (includes breakfast)
                            </td>
                        </tr>

                    </tbody>
                </table>

                <h3 class="text-center">
                    <span class="glyphicon glyphicon-bed" aria-hidden="true"></span>
                </h3>

                <h3 class="text-center">Hotel Accommodation </h3>
                
                <table class="table table-hover text-center">
                    <tbody >

                        <tr>
                            <td>
                                From $ 25 - per night, priv. room + priv. bathroom (includes breakfast)
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>

    </div> 
</div>



@endsection

