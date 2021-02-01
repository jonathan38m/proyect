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
      <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-8-2') }}</li>
  </ol>
</nav>

<h1>
    Amazon Jungle Spanish Program Prices
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

<h2>Learn Spanish and Discover Ecuador’s Cultural Heritage</h2>

<p><strong>Tourist  Amazon Spanish Course – Eco Lodge</strong></p>
<table  class="table text-center price-table table-bordered">
    <thead>
        <tr>
            <td>5 Days/ 4 Nights Spanish Program</td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>Additional</td>
        </tr>
    </thead>
    <tbody>
        
        <tr>
            <td><strong>4 hours per day in group classes</strong></td>
            <td>$999</td>
            <td>$1,998</td>
            <td>$2,997</td>
            <td>$3,996</td>
            <td>$999</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="6">
                Excursions during the afternoons and occasionally by night <br>
                Include weekend by 220$
            </td>
        </tr>
    </tfoot>
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
                        <p>Complimentary  airport pickup and transfer to accommodation upon arrival in Quito (one way).</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>20  hours of Group Spanish classes with max. 4 students per class.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Round-trip  transportation Quito - Jungle - Quito (9 hours by bus).</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Round-trip  Coca – Eco Lodge – Coca (1 hour by motorized canoe).</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Accommodation  in double Indian huts 5 Days/4 Nights per week. Please note: there is an  additional cost for weekends after the first week.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Full  board (breakfast, lunch and dinner), except during transit to Coca.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Guided  afternoon excursions Monday to Friday and 1 night excursion.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Diploma  or Certificate of studies.   </p>
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
                        <p>Flight  ticket Quito – Coca – Quito (optional).   Round trip around US $200.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Personal  expenses, tips.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Travel  Insurance</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>$40  enrollment fee for all programs</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<p><strong>Please  note:</strong></p>
<ul>
  <li>All  prices are in US Dollars</li>
  <li>Prices  are based in double accommodation</li>
  <li>Students  must have a Travel Insurance</li>
</ul>


@endsection