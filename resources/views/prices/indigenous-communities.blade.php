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
      <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-8-4') }}</li>
  </ol>
</nav>

<h1>
    Indigenous Communities Spanish Programs Prices
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



<h2>Indigenous Quichua Family in the Andes Highlands Spanish Program</h2>
<p><strong>Group Classes</strong></p>
<table  class="table text-center price-table">
    <thead>
        <tr>
            <td><p>Weeks</p></td>
            <td><p>1</p></td>
            <td><p>2</p></td>
            <td><p>3</p></td>
            <td><p>4</p></td>
            <td><p>Additional week</p></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><p><strong>4 hours per day in group classes</strong></p></td>
            <td><p>$ 699</p></td>
            <td><p>$ 1,398</p></td>
            <td><p>$ 2,097</p></td>
            <td><p>$ 2,796</p></td>
            <td><p>$ 699</p></td>
        </tr>
    </tbody>
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
                        <p>Complimentary  airport pickup upon arrival in Quito and transfer to accommodation (one way).</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>20  hours of Group Spanish classes with max. 4 students per class.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Trip  Quito – Otavalo – Indigenous Community – Otavalo.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Optional  participation in organic agriculture Volunteer Program.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Accommodation  in double rooms 6 Days/5 Nights per week.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Full  board (breakfast, lunch and dinner) while in the Indigenous Community.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Diploma  or Certificate of studies.</p>
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
                        <p>Personal expenses</p>
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


<h2>Shuar  Indigenous Family in The Amazon Jungle<br />
  Spanish  Course</h2>
<table class="table text-center price-table">
    <thead>
        <tr>
            <td><p><strong>Weeks</strong></p></td>
            <td><p><strong>1</strong></p></td>
            <td><p><strong>2</strong></p></td>
            <td><p><strong>Additional Week</strong></p></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><p><strong>4 Hours Per Day In Group Classes</strong></p></td>
            <td><p>$ 699</p></td>
            <td><p>$ 1,398</p></td>
            <td><p>699</p></td>
        </tr>
    </tbody>
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
                        <p>Complimentary  airport pickup upon arrival in Quito and transfer to accommodation (one way).</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>20  hours of Group Spanish classes with max. 4 students per class.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Round-trip  transportation: Quito – Shuar Community - Quito (6 – 7 hours by bus).</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Accommodation  in a family of the Shuar Community, 7 days/6 nights per week.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Full  board (breakfast, lunch and dinner – traditional food – no problem for  vegetarians).</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Shuar  guided afternoon excursions Monday to Friday and 1 night excursion.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Diploma  or Certificate of studies.</p>
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
                        <p>Personal expenses</p>
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