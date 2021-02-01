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
      <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-8-7') }}</li>
  </ol>
</nav>


<h1>
    {{ __('prices.volunteer.title') }}
</h1>


<div class="info-list">

    <p>

        <strong> Use your best skills to help those who need you.</strong>

    </p>

</div>


<h2>Placement  in Volunteer Projects</h2>

<table class="table text-center price-table">

    <thead>
        <tr>
            <td colspan="2">Weeks </td>
        </tr> 
    </thead>
    <tbody>
        <tr>
            <td><p><strong>Minimum 2 weeks</strong></p></td>
            <td><p>$100</p></td>
        </tr>
    </tbody>
</table>

<p>The above price will be charged for the  service of organizing your placement in a volunteer project which will be paid  only for volunteers who will not study with us. Our Spanish students will not  pay any fee to us for organizing the placement to volunteer in a project.
</p>
<ol>
  <li>Some projects don&rsquo;t charge any  application fee but also don&rsquo;t offer any food or accommodation.</li>
  <li>Some projects charge their own  application fee which is not involved in the above price.</li>
  <li>A few projects don&rsquo;t charge any  application fee and provide free food and accommodation.</li>
  <li>Other projects charge an application fee  and charge for food and accommodation.</li>
</ol>

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
                        <p>Complimentary  airport pick up upon your arrival to Quito (one way).</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Your  placement in your Voluntary Project.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Orientation  seminar.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>If  you will participate in a project in Quito or in Otavalo, on the first day, we  will personally take you from the school to the project, for projects out of  those cities you will need to travel alone. We will provide you all necessary  orientation how to get there.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Support  all the time during the project.</p>
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

<h2>Placement  in an Internship</h2>

<table class="table text-center price-table">
    <thead>
        <tr>
            <td colspan="2">Weeks</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td width="131"><p><strong>Minimum 2 weeks</strong></p></td>
            <td width="311"><p>$200</p></td>
        </tr>
    </tbody>
</table>

<p>The  above price will be charged for the service of organizing your placement in a  project which will be paid only for interns who will not study with us. Our  Spanish students will not pay any fee to us for organizing the placement to  practice in a project.
</p>
<ol>
  <li>Some projects don&rsquo;t charge any  application fee but also don&rsquo;t offer any food or accommodation.</li>
  <li>Some projects charge their own  application fee which is not involved in the above price.</li>
  <li>A few projects don&rsquo;t charge any  application fee and provide free food and accommodation.</li>
  <li>Other projects charge an application fee  and charge for food and accommodation.</li>
</ol>

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
                        <p>Complimentary  airport pick up upon your arrival to Quito (one way).</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Your  placement in your Voluntary Project.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Orientation  seminar.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>If  you will participate in a project in Quito or in Otavalo, on the first day, we  will personally take you from the school to the project, for projects out of  those cities you will need to travel alone. We will provide you all necessary  orientation how to get there.</p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p>Support all the time during your internship.</p>
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