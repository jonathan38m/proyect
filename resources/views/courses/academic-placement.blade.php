@extends('interna')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-2') class="active" @endsection

@section('content-interna')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('breadcrumb.item-1') }}</a></li>
        <li class="breadcrumb-item"><a href="{{ route('item-2') }}">{{ __('breadcrumb.item-2') }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-2-2') }}</li>
  </ol>
</nav>


<h1>
    {{ __('courses.academic.title') }}
</h1>


<div class="info-list">
    
    @include('gallery', ['gallery' => $article->gallery('academic-placement')]) 

    <p>Our courses are adapted to the Common European  Framework. As all students are different, ISE has  designed different levels for each program that will help place and teach  according to each student&rsquo;s needs.</p>
    <p>Our <strong>Spanish programs</strong> are the perfect way to  maximize your time in our beautiful country. Learn Spanish <strong>quickly</strong> while studying with us in Quito, Otavalo, in the Amazon  Jungle, in the Galapagos Islands or while <strong>travelling</strong> and discovering the natural wonders of Ecuador. </p>
    <p>We have found  that total immersion between our students and local people allows students to  learn our language faster than only in formal classes. All you need to do is  enjoy your travel and learn Spanish with a serious and comprehensive  professional approach.</p>


</div>


<div id="list-example" class="list-group dq-list-scroll">

    <a class="list-group-item list-group-item-action " href="#Beginner-Spanish-LEVEL-A1">
        <i class="glyphicon glyphicon-stop" ></i>
        Beginner Spanish LEVEL A1
    </a>

    <a class="list-group-item list-group-item-action " href="#Elementary-Spanish-LEVEL-A2">
        <i class="glyphicon glyphicon-stop" ></i>
        Elementary Spanish LEVEL A2
    </a>

    <a class="list-group-item list-group-item-action " href="#Intermediate-Spanish-LEVEL-B1-B2">
        <i class="glyphicon glyphicon-stop" ></i>
        Intermediate Spanish LEVEL B1-B2
    </a>

    <a class="list-group-item list-group-item-action " href="#Advanced-Spanish-C1-C2">
        <i class="glyphicon glyphicon-stop" ></i>
        Advanced Spanish C1-C2
    </a>

</div>

<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example dq-ise-scroll">

    <div id="Beginner-Spanish-LEVEL-A1">
        <h2>Beginner Spanish LEVEL A1</h2>

        @include('gallery', ['gallery' => $article->gallery('academic-placement'), 'thumbail' => '2']) 
        <p>
            The Beginner Spanish Level A1 is designed for students who have never studied Spanish before, or who know very little about the Spanish language. In this course, our students learn the basics, such as how to present themselves, numbers, the present tense (regular and irregular verbs), frequent vocabulary, and an easy way of expressing past and future tenses. Students also practice speaking about everyday life and these routines. Every single day they have to be able to speak with enough confidence when they need to go to restaurants and ask for any kind of food and the price, ask for a room with a comfortable bed in a hostel or hotel, ask for any address, understand directions, ask for itineraries of buses, buy bus tickets, ask for prices and bargain in Indigenous markets, start from simple to more complicate conversations until immersing little by little into the rich culture of Ecuador. The beginner level conveys the basics of Spanish to further build on.
        </p>
    </div>

    <hr/>

    <div id="Elementary-Spanish-LEVEL-A2">
        <h2>Elementary Spanish LEVEL A2</h2>
        @include('gallery', ['gallery' => $article->gallery('academic-placement'), 'thumbail' => '3'])
        <p>
            In the Elementary Spanish Level A2, students learn by listening and speaking inside and outside of the classroom. They expand their vocabulary and learn pronouns, adverbs, imperative, past tenses, and prepositions. With these Spanish skills, students have to be able to learn more about the Ecuadorian culture, as well as talk with the Ecuadorian people each time with a better proficiency, have enough confidence to visit museums in the city or in tourist or historic centers and be guided in Spanish, read well the menu in restaurants, read magazines, newspapers, ask and answer directions in the road and participate in a familiar conversation with local friends.
        </p>
    </div>

    <hr/>

    <div id="Intermediate-Spanish-LEVEL-B1-B2">
        <h2>Intermediate Spanish LEVEL B1-B2</h2>
        @include('gallery', ['gallery' => $article->gallery('academic-placement'), 'thumbail' => '4'])
        <p>
            At first, students will review Spanish skills previously acquired. Intermediate students will learn more past and future tenses, conditional, subjunctive and their uses, as well as improve listening, speaking, reading, and comprehension skills. Additionally, students will expand their verbal fluency and vocabulary by practicing verbal tasks, having conversations with the professor in class, and speaking with Ecuadorians outside of class, read books according to their personal interest, improve their good proficiency in Spanish everywhere they will have the opportunity and of course be able to have a real job in Spanish or talk to Spanish professionally with their speaking clients or patients according their professions.
        </p>
    </div>

    <hr/>

    <div id="Advanced-Spanish-C1-C2">
        <h2>Advanced Spanish C1-C2</h2>
        @include('gallery', ['gallery' => $article->gallery('academic-placement'), 'thumbail' => '5'])
        <p>
            Students will learn all indicative and the subjunctive tenses. They will be able to read literature, books, magazines or any material according their own interests or professions, participate in more in-depth conversations, and be able to speak fluently. Students will expand their vocabulary and have the necessary skills to speak and discuss nearly every topic. The aim of this course is to enable the student to speak like a native. The lessons are designed for more complex conversations and to fill in vocabulary gaps, while talking about different topics. The Advanced level enforces the skills necessary to discuss and express oneself in a fluent way.
        </p>
    </div>

</div>

@endsection