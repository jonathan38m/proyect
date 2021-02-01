@extends('interna')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-4') class="active" @endsection

@section('content-interna')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('breadcrumb.item-1') }}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-4') }}</li>
  </ol>
</nav>
        
<h1>{{ __('travelling.title') }}</h1>
<p>
    Experience Ecuador and learn Spanish! You can do it all!
</p>
<p>
    Enjoy the best travel experience in Ecuador and learn Spanish. Our Travelling Classroom programs are the perfect way to maximize your time in our beautiful country. Learn Spanish quickly while travelling and discovering the natural wonders of Ecuador. We have found that total immersion for students amongst Ecuatorianos allows them to learn Spanish faster than in a classroom. All you need to do is enjoy your travels and practice your Spanish…we will take care of the details, such as accommodation, transportation and activities!
</p>

<p>
    While travelling from place to place, students complete 20 hours of Spanish classes per week, combined with a variety of activities, such as biking, hiking, swimming in waterfalls, relaxing in thermal springs and visiting markets, snorkeling with marine turtles, sea lions, sharks and colorful fish! Popular itineraries combine the attractions of the Sierra (Andean highlands), the Oriente (Amazon Basin) and the thermal springs of Baños and Papallacta.
</p>

<div class="row overview">
    <article class="col-md-6">
        <div class="item">
            <a href="{{ route('andes-amazon-7') }}"><h2>Andes/ Amazon Jungle - 7 Days</h2></a>
            <img src="images/traveling/overview/andes-amazon-7-days.jpg">
            <div class="item-introText">
                <p>
                    <strong>
                        Spend one incredible week with us traveling and learning Spanish! 
                    </strong>
                </p>
                <p>
                    Learn Spanish while discovering the Andes <strong>Mountain Range</strong> and the Amazon Jungle, <strong>Learn Spanish while discovering the Andes Mountain Range and the Amazon Jungle</strong>, two of the iconic landscapes in South America, discover with us Baños and see the beautiful waterfalls, taste of the Oriente while you walk through the Amazon Jungle and tube down the Rio Napo, explore prehistoric caves, and soak in the relaxing Andean thermal pools., discover with us Baños and see the beautiful waterfalls, taste of the Oriente while you walk through the Amazon Jungle and tube down the Rio Napo, explore prehistoric caves, and soak in the relaxing Andean thermal pools.
                </p>
            </div>
            <a href="{{ route('andes-amazon-7') }}">From US$ 999 p.p.</a>
        </div>
        
    </article><article class="col-md-6">
        <div class="item">
            <a href="{{ route('andes-amazon-12') }}">
                <h2>Andes/ Amazon Jungle - 12 Days</h2>
            </a>
            <img src="images/traveling/overview/andes-amazon-12-days.jpg">
            <div class="item-introText">
                <p>
                    <strong>
                        Enjoy learning Spanish and experiencing the rich culture of Ecuador
                    </strong>
                </p>
                <p>
                    Travel with us to Otavalo, known for its famous market and indigenous people, adventure to Baños the very known gateway to the jungle and enjoy the incredible waterfalls, explore the <strong>best of Ecuador's biodiversity and multicultural population</strong> in the Amazon Jungle, visit an indigenous village, tube down the Rio Napo, relax in Andean thermal pools <strong>in one of the most charming places on earth</strong>, all of this while improving your Spanish.
                </p>
            </div>
            <a href="{{ route('andes-amazon-12') }}">From US$ 1,699 p.p.</a>
        </div>
        
    </article>
</div>

<div class="row overview">
    <article class="col-md-6">
        <div class="item">
            <a href="{{ route('walking-andes-12') }}"><h2>Walking through the Andes - 12 Days</h2></a>
            <img src="images/traveling/overview/walking-the-andes-12-days.jpg">
            <div class="item-introText">
                <p>
                    <strong>
                        Learn Spanish and enjoy the spectacular Andes highlands while getting to know Ecuador!
                    </strong>
                </p>
                <p>
                    Become more familiar with Ecuador and have more time to practice Spanish while traveling with us. Start in Otavalo, known for its famous market and indigenous people, visit the waterfall of Peguche, hike with us Cotopaxi National Park, horseback ride to Laguna Quilotoa, travel to Baños to enjoy the beautiful city and waterfalls, mountain biking at Chiborazo the Ecuador’s highest point, ride the Devil’s Nose Train, explore Ecuador’s most important ruins, and marvel at the beautiful city of Cuenca.
                </p>

            </div>
            <a href="{{ route('walking-andes-12') }}">From US$ 1,799 p.p.</a>
        </div>
        
    </article><article class="col-md-6">
        <div class="item">
            <a href="{{ route('experience-ecuador-16') }}">
                <h2>Experience Ecuador - 16 Days</h2>
            </a>
            <img src="images/traveling/overview/experience-ecuador-16-days.jpg">
            <div class="item-introText">
                <p>
                    <strong>
                        Get to know Ecuador better and have more time to learn and improve your Spanish!
                    </strong>
                </p>
                <p>
                    Learn about the country, improve your Spanish with locals. Depart from Quito to the Indigenous town of Otavalo, walk around Cuicocha Lake, experience the hilly farmland mountains, admire the jagged peaks of our volcanoes, horseback ride to Laguna Quilotoa, go to the route waterfalls, enjoy the sights and the sounds of the forest, tube down the Rio Napo, and relax in thermal pools!
                </p>
            </div>
            <a href="{{ route('experience-ecuador-16') }}">From US$ 2,299 p.p.</a>
        </div>
        
    </article>
</div>

<div class="row overview">
    <article class="col-md-6">
        <div class="item">
            <a href="{{ route('travelling-explore') }}"><h2>Exploring Ecuador - 19 Days</h2></a>
            <img src="images/traveling/overview/exploring-ecuador-19-days.jpg">
            <div class="item-introText">
                <p>
                    <strong>
                        Spend 19 glorious days discovering the natural wonders of Ecuador
                    </strong>
                </p>
                <p>
                    Have a complete immersion in our culture, experience our South American lifestyle. Travel from Quito to the Indigenous Town of Otavalo, come to Cotopaxi National Park, horseback ride to Quilotoa, mountain biking at the marvelous Chimborazo, ride the Devil’s Nose Train, go to Baños, experience beautiful waterfalls, get a taste of the Oriente while you walk through the jungle, tube down the Rio Napo, explore prehistoric caves and relaxing Andean thermal pools.
                </p>
            </div>
            <a href="{{ route('travelling-explore') }}">From US$ 2,899 p.p.</a>
        </div>
        
    </article><article class="col-md-6">
        <div class="item">
            <a href="{{ route('secret-evolution') }}">
                <h2>The Secret of Evolution - 15 Days</h2>
            </a>
            <img src="images/traveling/overview/secret-evolution-15-days.jpg">
            <div class="item-introText">
                <p>
                    <strong>
                        An incredible experience learning Spanish and in the same time exploring the enchanted Galapagos Islands
                    </strong>
                </p>
                <p>
                    With more than 20 years of teaching Spanish in the Galapagos Islands we are proud to say that we know very well all the Galapagos Islands and are able to offer a carefully designed itinerary to have a real complete experience learning and discovering the Islands. Explore with us the inhabited islands, admire the diversity of flora and fauna of the enchanted islands subject to Charles Darwin’s studies as you immerse in the depths of the ocean to admire and enjoy the marine life.
                </p>
            </div>
            <a href="/{{ route('secret-evolution') }}">From US$ 3,699 p.p.</a>
        </div>
        
    </article>
</div>

@endsection