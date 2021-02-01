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
      <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-8-6') }}</li>
  </ol>
</nav>


<h1>
    Interactive Spanish Packages Prices
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

    <p>
        Learn and Practice Spanish surrounded by Ecuador’s rich culture in the Highlands, Amazon Jungle and the Galapagos Islands
    </p>


</div>



<h2>Learn  Spanish Interactive Packages</h2>
<table class="table text-center price-table">
    <thead>
        <tr>
            <td>Package</td>
            <td><p>Duration</p></td>
            <td><p>Price</p></td>
            <td><p>Available Dates</p></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><p>Package 1</p></td>
            <td><p>42 Days</p></td>
            <td><p>$ 1499</p></td>
            <td><p>Available all the year round, starting every <strong>Saturday</strong> or <strong>Sunday</strong>.</p></td>
        </tr>
        <tr>
            <td><p>Package 2</p></td>
            <td><p>56 Days</p></td>
            <td><p>$ 1999</p></td>
            <td><p>Available all the year round, starting every <strong>Saturday</strong> or <strong>Sunday</strong>.</p></td>
        </tr>
        <tr>
            <td><p>Package 3</p></td>
            <td><p>19 Days</p></td>
            <td><p>$ 1459</p></td>
            <td>
                <ul>
                    Available all the year round
                    <div id="link-different-date" class="list-group dq-list-scroll">
                        <a class="list-group-item list-group-item-action" href="#travel-different"
                            data-form-auto="on"
                            data-form-subject="Request a different Date"
                            data-form-message="I am interested in Package #3, for the month of:">
                           <strong><cite> Request a different date </cite></strong> 
                        </a>
                    </div>
                </ul>
            </td>
        </tr>
        <tr>
            <td><p>Package 4</p></td>
            <td><p>35 Days</p></td>
            <td><p>$ 2099</p></td>
            <td>
                <ul>
                    Available all the year round
                    <div id="link-different-date" class="list-group dq-list-scroll">
                        <a class="list-group-item list-group-item-action" href="#travel-different"
                            data-form-auto="on"
                            data-form-subject="Request a different Date"
                            data-form-message="I am interested in Package #4, for the month of:">
                           <strong><cite> Request a different date </cite></strong> 
                        </a>
                    </div>
                </ul>
            </td>
        </tr>
        <tr>
            <td><p>Package 5</p></td>
            <td><p>28 Days</p></td>
            <td><p>$ 3318</p></td>
            <td>
                <ul>
                    Available all the year round
                    <div id="link-different-date" class="list-group dq-list-scroll">
                        <a class="list-group-item list-group-item-action" href="#travel-different"
                            data-form-auto="on"
                            data-form-subject="Request a different Date"
                            data-form-message="I am interested in Package #5, for the month of:">
                           <strong><cite> Request a different date </cite></strong> >
                        </a>
                    </div>
                </ul>
            </td>
        </tr>
        <tr>
            <td><p>Package 6</p></td>
            <td><p>31 Days</p></td>
            <td><p>$ 4569</p></td>
            <td>
                <ul>
                    Available all the year round
                    <div id="link-different-date" class="list-group dq-list-scroll">
                        <a class="list-group-item list-group-item-action" href="#travel-different"
                            data-form-auto="on"
                            data-form-subject="Request a different Date"
                            data-form-message="I am interested in Package #6, for the month of:">
                           <strong><cite> Request a different date </cite></strong> 
                        </a>
                    </div>
                </ul>
            </td>
        </tr>
        <tr>
            <td><p>Package 7</p></td>
            <td><p>28 Days</p></td>
            <td><p>$ 3318</p></td>
            <td>
                <ul>
                    Available all the year round
                    <div id="link-different-date" class="list-group dq-list-scroll">
                        <a class="list-group-item list-group-item-action" href="#travel-different"
                            data-form-auto="on"
                            data-form-subject="Request a different Date"
                            data-form-message="I am interested in Package #7, for the month of:">
                           <strong><cite> Request a different date </cite></strong> 
                        </a>
                    </div>
                </ul>
            </td>
        </tr>
        <tr>
            <td><p>Package 8</p></td>
            <td><p>27 Days</p></td>
            <td><p>$ 5134</p></td>
            <td>
                <ul>
                    Available all the year round
                    <div id="link-different-date" class="list-group dq-list-scroll">
                        <a class="list-group-item list-group-item-action" href="#travel-different"
                            data-form-auto="on"
                            data-form-subject="Request a different Date"
                            data-form-message="I am interested in Package #8, for the month of:">
                           <strong><cite> Request a different date </cite></strong> 
                        </a>
                    </div>
                </ul>
            </td>
        </tr>
        <tr>
            <td><p>Package 9</p></td>
            <td><p>34 Days</p></td>
            <td><p>$ 5999</p></td>
            <td>
                <ul>
                    Available all the year round
                    <div id="link-different-date" class="list-group dq-list-scroll">
                        <a class="list-group-item list-group-item-action" href="#travel-different"
                            data-form-auto="on"
                            data-form-subject="Request a different Date"
                            data-form-message="I am interested in Package #9, for the month of:">
                           <strong><cite> Request a different date </cite></strong> 
                        </a>
                    </div>
                </ul>
            </td>
        </tr>
        <tr>
            <td><p>Package 10</p></td>
            <td><p>27 Days</p></td>
            <td><p>$ 5028</p></td>
            <td>
                <ul>
                    Available all the year round
                    <div id="link-different-date" class="list-group dq-list-scroll">
                        <a class="list-group-item list-group-item-action" href="#travel-different"
                            data-form-auto="on"
                            data-form-subject="Request a different Date"
                            data-form-message="I am interested in Package #10, for the month of:">
                           <strong><cite> Request a different date </cite></strong> 
                        </a>
                    </div>
                </ul>
            </td>
        </tr>
    </tbody>
</table>



@endsection