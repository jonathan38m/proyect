@extends('interna')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-3') class="active" @endsection

@section('content-interna')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">
                {{ __('breadcrumb.item-1') }}
            </a>
        </li>
        <li aria-current="page" class="breadcrumb-item">
            {{ __('breadcrumb.item-3') }}
        </li>
    </ol>
</nav>
<h1>
    {{ __('destinations.title') }}
</h1>
<p>
    We offer 5 Spanish course locations, including our schools in Quito, in Otavalo, in the Amazon jungle, in the Galapagos Islands, in Indigenous Communities plus our Travelling Classroom program.
</p>
<p>
    The best thing about it: You can mix and match locations!
</p>
<h2>
    Learn Spanish in:
</h2>
<div class="row overview">
    <article class="col-md-6">
        <div class="item">
            <a href=" {{ route('learn-quito') }} ">
                <h2>
                    Quito Leading Destination
                </h2>
            </a>
            <img src="images/destinations/overview/quito.jpg">
                <div class="item-introText">
                    <p>
                        <strong>
                            Central and safe location in Colonial Center of Quito
                        </strong>
                        <br>
                            You will find our Spanish school in a safe and central location surrounded by the old churches and plazas of Quito’s UNESCO World Heritage-listed historic center, food and craft markets and only a 2-minute walk from the "Plaza del Teatro" trolley bus stop. The Old Town boasts some exciting cultural activities during the week and week-ends and with numerous museums to visit, from Pre-Incan gold collections to renowned artwork, there is never a dull moment!
                        </br>
                    </p>
                </div>
                <a href="{{ route('learn-quito') }}">
                    From US$ 139 p.p. per week
                </a>
            </img>
        </div>
    </article>
    <article class="col-md-6">
        <div class="item">
            <a href="{{ route('learn-otavalo') }}">
                <h2>
                    Otavalo Indigenous Town
                </h2>
            </a>
            <img src="images/destinations/overview/otavalo.jpg">
                <div class="item-introText">
                    <p>
                        <strong>
                            Well established and Centrally Located in Otavalo
                        </strong>
                        <br>
                            Our Spanish Institute is located in the heart of Otavalo, just a 1 minute walk from Otavalo’s famous craft market, Plaza de Ponchos famous for its indigenous people, artisan crafts, and textiles.  Otavaleños pride themselves in their heritage and artistic talents. Their town, Otavalo, is friendly and cozy, and is mainly famous for its Saturday market, which is one of the biggest and best indigenous markets in Central and South America.
                        </br>
                    </p>
                </div>
                <a href="{{ route('learn-otavalo') }}">
                    From US$ 139 p.p. per week
                </a>
            </img>
        </div>
    </article>
</div>
<div class="row overview">
    <article class="col-md-6">
        <div class="item">
            <a href="{{ route('learn-amazon') }}">
                <h2>
                    The Amazon Jungle
                </h2>
            </a>
            <img src="images/destinations/overview/amazon.jpg">
                <div class="item-introText">
                    <p>
                        <strong>
                            The Amazon Jungle Spanish program
                        </strong>
                        <br>
                            The Amazon Jungle Spanish Course is one of the most interesting programs for the travellers to visit and study Spanish in Ecuador. The Amazon rainforest covers a sizeable part of Eastern Ecuador, and is one of the primary ecological hot spots in the world. Our Amazon Spanish course enables students the opportunity to be immersed in a truly wild and exotic location, whilst maintaining at least some of the comforts of home provided by the high standards of a lovely Eco-Lodge
                        </br>
                    </p>
                </div>
                <a href="{{ route('learn-amazon') }}">
                    From US$ 999 p.p.
                </a>
            </img>
        </div>
    </article>
    <article class="col-md-6">
        <div class="item">
            <a href="{{ route('learn-galapagos') }}">
                <h2>
                    Galapagos Islands
                </h2>
            </a>
            <img src="images/destinations/overview/galapagos.jpg">
                <div class="item-introText">
                    <p>
                        <strong>
                            Over 20 years teaching Spanish in the Galapagos Islands
                        </strong>
                        <br>
                            Our courses take place in the heart of Puerto Ayora, the largest settlement on the island of Santa Cruz, or in Puerto Baquerizo Moreno in the island of San Cristobal. While visiting the Galapagos, you will encounter awe-inspiring opportunities to observe natural wonders and diverse animal life. The Galapagos Islands contain long stretches of beach considered to be some of the best and most beautiful in the world.
                        </br>
                    </p>
                </div>
                <a href="{{ route('learn-galapagos') }}">
                    From US$ 1,999 p.p.
                </a>
            </img>
        </div>
    </article>
</div>
<div class="row overview">
    <article class="col-md-6">
        <div class="item">
            <a href="{{ route('item-2-10') }}">
                <h2>
                    Travel Spanish
                </h2>
            </a>
            <img src="images/courses/overview/travel-spanish-course.jpg">
                <div class="item-introText">
                    <p>
                        The Travel Spanish one day program is a marvellous concept for those of you who are just passing through Quito and want to make the most of it.
                    </p>
                </div>
                <a href="{{ route('item-2-10') }}">
                    From US$ 99 p.p.
                </a>
            </img>
        </div>
    </article>
    <article class="col-md-6">
        <div class="item">
            <a href="{{ route('learn-shuar-community') }}">
                <h2>
                    Indigenous Communities
                </h2>
            </a>
            <img src="images/destinations/overview/indigenouscomunity.jpg">
                <div class="item-introText">
                    <p>
                        <strong>
                            Fascinating Indigenous Communities
                        </strong>
                        <br>
                            Ecuador has dozens of indigenous communities each one of them has a unique and fascinating culture, traditions and way of life. ISE has focused on 2 main communities located in the highlands and the Amazon jungle. Both cultures have an incredible trajectory throughout Ecuador’s history, and although they have adapted to modern life, ISE insists to keep much of their ancestral cultures alive.
                        </br>
                    </p>
                </div>
                <a href="{{ route('learn-shuar-community') }}">
                    From US$ 699 p.p. per week
                </a>
            </img>
        </div>
    </article>
    <article class="col-md-6">
        <div class="item">
            <a href="{{ route('learn-south-america') }}">
                <h2>
                    Recommended Package
                </h2>
            </a>
            <img src="images/destinations/overview/packages.jpg">
                <div class="item-introText">
                    <p>
                        <strong>
                            Plan your own itinerary, packed with fun, adventure and a lot of success learning Spanish!
                        </strong>
                        <br>
                            ISE has many options for your learning and traveling experience throughout Ecuador. You can choose one destination or the entire country in private or group courses in every level class.  We have designed 10 packages to help you choose from different inclusive trips, where you can discover Ecuador while we take care of the details. Our carefully planned packages offer a vast range of options of itineraries for student travelers with different interests and needs as well as travel time, and thus delivering a high-quality product that will help you get the best experience while traveling through Ecuador.
                        </br>
                    </p>
                </div>
                <a href="{{ route('learn-south-america') }}">
                    From US$ 1,469 p.p.
                </a>
            </img>
        </div>
    </article>
</div>
@endsection
