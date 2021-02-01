@extends('interna')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-8') class="active" @endsection

@section('content-interna')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('breadcrumb.item-1') }}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-8') }}</li>
  </ol>
</nav>
        
<h1>Prices</h1>
<p>
    <strong> Registration fee for all of our programs in Ecuador at ISE is US $ 40</strong>
    <br>
    Registration fee includes: 
</p>

<ul>
    <li class="list-courses">
        <i class="glyphicon glyphicon-ok"></i>Complimentary airport pick up + transfer (one way, <strong>only upon arrival in Quito</strong>)
    </li>
    <li class="list-courses">
        <i class="glyphicon glyphicon-ok"></i>Course material (book + notebook to run the Spanish course)
    </li>
    <li class="list-courses">
        <i class="glyphicon glyphicon-ok"></i>Certificate for the Spanish course
    </li>
    <li class="list-courses">
        <i class="glyphicon glyphicon-ok"></i>Dancing lessons 2 times per week while in Quito
    </li>
    <li class="list-courses">
        <i class="glyphicon glyphicon-ok"></i>Wednesday cultural trip in Quito after classes
    </li>

</ul>

<div class="row overview">
    <article class="col-md-6">
        <div class="item">
            <a href="{{ route('price-quito-otavalo') }}"><h2>Quito  &amp; Otavalo Spanish Course Prices</h2></a>
            <img src="images/prices/quito-otavalo.jpg">
            <div class="item-introText">
                <p><strong>Learn Spanish and  Discover Ecuador&rsquo;s Cultural Heritage</strong></p>
                <ul>
                    <li> &#8226; Group Classes</li>
                    <li> &#8226; Semi Private Course</li>
                    <li> &#8226; Private Course</li>
                    <li> &#8226; Combined Courses</li>
                    <li> &#8226; Special Courses</li>
                </ul>
            </div>
            <a href="{{ route('price-quito-otavalo') }}">From US$ 139 p.p. per week</a>
        </div>
        
    </article><article class="col-md-6">
        <div class="item">
            <a href="{{ route('price-amazon') }}">
                <h2>Amazon Jungle Spanish Program Prices</h2>
            </a>
            <img src="images/prices/amazon-jungle.jpg">
            <div class="item-introText">
                <p><strong>Learn  Spanish and Explore the Amazon Jungle</strong></p>
                <ul>
                    <li> &#8226; Learn Spanish in the Amazon Jungle</li>
                    <li> &#8226; Get in contact with nature</li>
                    <li> &#8226; Enjoy and relax in a clean and pristine environment</li>
                </ul>
            </div>
            <a href="{{ route('price-amazon') }}">From US$ 999 p.p. per week</a>
        </div>
        
    </article>
</div>

<div class="row overview">
    <article class="col-md-6">
        <div class="item">
            <a href="{{ route('price-galapagos') }}"><h2>Galapagos Islands Spanish Programs Prices</h2></a>
            <img src="images/prices/galapagos.jpg">
            <div class="item-introText">
                <p><strong>Learn  Spanish and Discover The Enchanted Islands</strong></p>
                <ul>
                    <li> &#8226; 7-Day Spanish Immersion in The Galapagos Islands</li>
                    <li> &#8226; 14-Day Discovering Galapagos Spanish Program</li>
                    <li> &#8226; 14-Day Exploring the Galapagos Islands Spanish program</li>
                    <li> &#8226; 11-Day Enchanting Galapagos Spanish Program</li>
                </ul>
            </div>
            <a href="{{ route('price-galapagos') }}">From US$ 1,999 p.p. per week</a>
        </div>
        
    </article><article class="col-md-6">
        <div class="item">
            <a href="{{ route('price-communities') }}">
                <h2>Indigenous Communities Spanish Programs Prices</h2>
            </a>
            <img src="images/prices/indigenous-communities.jpg">
            <div class="item-introText">
                <p><strong>Learn  Spanish and Experience a True Connection with Nature</strong></p>
                <ul>
                    <li> &#8226; Learn about our ancestral beliefs</li>
                    <li> &#8226; Discover our indigenous people&rsquo;s survival techniques</li>
                    <li> &#8226; Group Classes in an Indigenous Community</li>
                </ul>
            </div>
            <a href="{{ route('price-communities') }}">From US$ 699 p.p. per week</a>
        </div>
        
    </article>
</div>

<div class="row overview">
    <article class="col-md-6">
        <div class="item">
            <a href="{{ route('price-travelling') }}"><h2>Travelling Classroom</h2></a>
            <img src="images/prices/travelling.jpg">
            <div class="item-introText">
                <p><em><strong>Learn Spanish and ExploreEcuador...You Can Do  it All!</strong></em></p>
                <ul>
                    <li> &#8226; Andes &amp; Amazon Jungle 7 Days Spanish Course</li>
                    <li> &#8226; Andes &amp; Amazon Jungle 12 Days Spanish Course</li>
                    <li> &#8226; Walking Through The Andes 12 Days Spanish Course</li>
                    <li> &#8226; Experience Ecuador 16 Days Spanish Course</li>
                    <li> &#8226; Exploring Ecuador - Language Round Trip 19 Days Spanish  Course</li>
                    <li> &#8226; The Secret Of Evolution - Galapagos Islands 15 Days  Spanish Program</li>
                </ul>
            </div>
            <a href="{{ route('price-travelling') }}">From US$ 999 p.p.</a>
        </div>
        
    </article><article class="col-md-6">
        <div class="item">
            <a href="{{ route('price-volunteer') }}">
                <h2>Volunteer Work &amp; Internship Programs</h2>
            </a>
            <img src="images/prices/volunteer.jpg">
            <div class="item-introText">
                <p><strong>Use your best skills to  help those who need you.</strong></p>
                <ul>
                    <li> &#8226; Placement in Volunteer Projects</li>
                    <li> &#8226; Placement in Internship Programs</li>
                    <li> &#8226; Apply and improve your skills according to your goals.</li>
                </ul>
            </div>
            <a href="{{ route('price-volunteer') }}">From US$ 00 p.p. fee </a>
        </div>
        
    </article>
</div>


<div class="row overview">
    <article class="col-md-6">
        <div class="item">
            <a href="{{ route('price-packages') }}"><h2>Interactive Spanish Packages Prices</h2></a>
            <img src="images/prices/packages.jpg">
            <div class="item-introText">
                <p><strong>Learn and Practice  Spanish surrounded by Ecuador&rsquo;s rich culture in the Highlands, Amazon Jungle  and the Galapagos Islands</strong></p>
                <ul>
                    <li> &#8226; Starting from US$ 1,499 p.p. (5  weeks, including 3 weeks in the Islands and round trip flight ticket to and  from the Galapagos Islands) </li>
                    <li> &#8226; Full Immersion Programs</li>
                    <li> &#8226; Learn Spanish and practice it throughout Ecuador</li>
                    <li> &#8226; Experience Latin American way of life</li>
                    <li> &#8226; Explore astonishing locations like the Galapagos  Islands, the Amazon Jungle, the Andes Highlands, Quito&rsquo;s Colonial District and  the Indigenous Town of Otavalo</li>
                </ul>
            </div>
            <a href="{{ route('price-packages') }}">From US$ 1,499 p.p.</a>
        </div>
        
    </article>
</div>

@endsection