@extends('interna')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-6') class="active" @endsection

@section('content-interna')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('breadcrumb.item-1') }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-6') }}</li>
  </ol>
</nav>

<h1>{{ __('about-us.title') }}</h1>
<p>
    The Instituto Superior de Español, is a family-run school which offers Spanish courses for foreigners throughout Ecuador. We offer Spanish programs in Quito, in Otavalo, in the Galapagos Islands, in the Amazon Jungle, in Indigenous Communities and run a unique Travelling classroom program.
</p>
<p>
    ISE combines a unique and effective educational program with unforgettable life experiences, which has resulted in a high-quality instruction and training program that gives students the opportunity to learn Spanish in a comprehensive way, as well as interact with native communities, nature, and travel throughout beautiful Ecuador. Our services are differentiated because of three main strengths, which are first, operating under a carefully refined teaching method that expedites the learning process, second offering 5 teaching locations nationwide, and third working with qualified and committed professionals. Our programs are immersion based, with volunteering, travel and accommodation options to encourage you to practice as much as possible. As a result of our continued efforts, ISE has gained a well-earned reputation for academic excellence in teaching students of all ages.  We look forward to a productive future and offering you the best Spanish classes in Ecuador wherever you may be!
</p>
<p>
    Our Spanish classes focus on vocabulary, grammar, pronunciation, conversation, practical communication skills which our students can use outside of classrooms right away. Our programs contain listening, verbal and written exercises. Every week the progress of our students is evaluated, and students can move to the next higher level. Your Spanish-learning classes can take place in the morning or in the afternoon for a minimum of four hours a day. Teachers will usually set a short exercise for homework each day. We offer classes for the following levels: Beginner, Elementary, Intermediate and Advanced.
</p>
<p>
    We offer Spanish courses in five facilities nationwide in Quito, Otavalo, in the Amazon Jungle, in Indigenous Communities and in the Galapagos Islands.
</p>
<p>
    Quito is Ecuador’s capital and the second largest city in the country. It is situated high in the Andes amongst dramatic volcanoes and mountains. Quito is a beautiful city full of historical monuments and architectural treasures. Its jewel is the historic center, which has been declared World Heritage by UNESCO. The 17th century facades, picturesque plazas, and magnanimous churches are some of the features that make this beautiful site a great place to learn about our history, culture, and language.
</p>
<p>
    Otavalo is a small indigenous town in the north Andean countryside. It is located 2 hours north of Quito, and it is famous for its indigenous people, artisan crafts, and textiles. Otavaleños pride themselves in their heritage and artistic talents. Their town, Otavalo, is friendly and cozy, and is mainly famous for its Saturday market, which is one of the biggest and greatest indigenous markets in Central and South America. You can buy anything from locally made handcrafts to traditional indigenous outfits. Otavalo wins people over with the great opportunities for activities and excursions. Our Spanish School in Otavalo is located in the heart of the city.
</p>
<p>
    Located on the eastern side of the country, and approximately 5 hours away from Quito, the Amazon Jungle is home to the largest concentration of diversity of species per squared Km in the world. A large part of this region is protected and has been declared a natural reserve or national park. The Yasuni National Park has been designated by UNESCO as the Biosphere Reserve, and there are studies that suggests that around 150 amphibian species, 121 reptile species, 598 bird species, 169 confirmed mammal species, and 204 estimated mammal species live in the National Park, as well as 2113 of 3100 estimated plant species. 
</p>
<p>
    Galapagos is a world-renowned natural paradise. The archipelago is located about 1,000 kilometers off the coast of Ecuador. If you decide to go to Galapagos, you will surely be rewarded with an unforgettable experience! With every move you make in the Galapagos Islands, you will find fascinating evidence of creation. An unimaginable variety of flora and fauna, will show you the trajectory of evolution both in land and sea. The islands are an unparalleled contained ecosystem, and during your program on the Galapagos Islands you will have the opportunity to explore this unique part of the world.
</p>

@endsection