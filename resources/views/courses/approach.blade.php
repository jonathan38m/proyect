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
        <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-2-1') }}</li>
  </ol>
</nav>


<h1>
    {{ __('courses.approach.title') }}
</h1>


<div class="info-list">

    @include('gallery', ['gallery' => $article->gallery('celia')])    

    <p>
        <strong>
            C.E.L.I.A.
        </strong>
    </p>
    <p>
        The Cultural Educational Linguistic Interactive Approach (CELIA) was created using the ideas of the grammar theory established by the Royal Academy of the Spanish Language.
    </p>
    <p>
        CELIA is based on universal linguistic principles suggested by modern, world-renowned philologists, semioticians, and linguists, such as Ferdinand de Saussure, Umberto Eco, Franz Noam Chomsky, Rafael Lapesa among others.
    </p>
    <p>
        CELIA is also based in cognitive psychological research in the teaching-learning process. At ISE, our carefully designed program encompasses the elements of CELIA and allows students to achieve maximum success in learning the Spanish language during their time with us.
    </p>


</div>

<div id="list-example" class="list-group dq-list-scroll">

    <a class="list-group-item list-group-item-action " href="#Spanish-Courses">
        <i class="glyphicon glyphicon-stop" ></i>
        Spanish Courses
    </a>

    <a class="list-group-item list-group-item-action " href="#Spanish-Classes-right-across-Ecuador">
        <i class="glyphicon glyphicon-stop" ></i>
        Spanish Classes throughout Ecuador
    </a>

    <a class="list-group-item list-group-item-action " href="#Over-29-Years-of-Experience-Teaching-Spanish">
        <i class="glyphicon glyphicon-stop" ></i>
        Over 30 Years of Experience Teaching Spanish
    </a>

</div>

<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example dq-ise-scroll">

    <div id="Spanish-Courses">
        <h2>Spanish Courses</h2>
        @include('gallery', ['gallery' => $article->gallery('spanish-courses')]) 

        <p>
            It has been proven beyond a doubt that the most effective way to learn Spanish is by experiencing a total Spanish immersion program. Even if our Spanish teachers speak one or more foreign languages, our classes are taught entirely in Spanish and use another language only if it will be considered very necessary. 
        </p>
        <p>
            This way you can maximize the learning experience, which allows you to get the most out of your Spanish studies. The classes are divided into vocabulary, grammar, conversation, readings and grammar exercises. Consequently, students develop a sound understanding of the grammatical basis of the language, and build on it with practical communication skills and everyday vocabulary, which they can use outside the classroom right away. Teachers will usually assign a short exercise for homework each day.
        </p>
        @include('gallery', ['gallery' => $article->gallery('spanish-courses'), 'position'=> 'right', 'thumbail' => '2']) 
        <p>
            All of our courses are available for all Spanish levels, from absolute beginners to advanced students. Progress from one level to the next will depend on the student, the type of course, and of course how much time they dedicate to practicing Spanish outside of class. 
        </p>
        <p>
            All of our teaching locations offer a friendly environment where you can meet other students and make new friends. Our courses are held for a minimum of 20 hours a week, and can be split between 4 and 7 hours a day, depending on the course. All courses are offered from Monday through Friday.
        </p>
        <p>
            We are proud to offer programs carefully designed and operated by us that ensure quality, by our C.E.L.I.A. approach combining professional teaching methods, with life experiences.
        </p>
    </div>

    <hr/>

    <div id="Spanish-Classes-right-across-Ecuador">
        <h2>Spanish Classes right across Ecuador</h2>
        @include('gallery', ['gallery' => $article->gallery('spanish-classes-right-across')]) 
		<p>
            We offer our pupils 5 Spanish course locations, including:      
        </p>



        <div class="list-group dq-list-scroll">

            <a class="list-group-item list-group-item-action " href="{{ route('learn-quito') }}">
                <i class="glyphicon glyphicon-stop" ></i>
                Quito
            </a>

            <a class="list-group-item list-group-item-action " href="{{ route('learn-otavalo') }}">
                <i class="glyphicon glyphicon-stop" ></i>
                Otavalo
            </a>

            <a class="list-group-item list-group-item-action " href="{{ route('learn-amazon') }}">
                <i class="glyphicon glyphicon-stop" ></i>
                The Amazon Jungle
            </a>

            <a class="list-group-item list-group-item-action " href="{{ route('learn-galapagos') }}">
                <i class="glyphicon glyphicon-stop" ></i>
                The Galapagos Islands
            </a>

            <a class="list-group-item list-group-item-action " href="{{ route('traveling-classroom') }}">
                <i class="glyphicon glyphicon-stop" ></i>
                Plus our Travelling Classroom Program
            </a>

        </div> 
        <p>
        	The best thing about it: <strong>You can mix and match locations!</strong>
        </p>
    </div>

    <hr/>

    <div id="Over-29-Years-of-Experience-Teaching-Spanish">
        <h2>Over 30 Years of Experience Teaching Spanish</h2>
        @include('gallery', ['gallery' => $article->gallery('over-29-years-experience')])

        <p>
            We have been teaching Spanish for a very long time – more than 30 years in fact! We are recognized as being among the pioneers of teaching Spanish in Ecuador and over the years have developed and refined a highly effective and fun learning program. 
        </p>
        <p>
            Until 1994 in Ecuador did not exist any other Spanish school out of Quito the Capital of Ecuador. On January 1994, we expanded our Spanish Institute to other locations of our country where right now several schools have been established which for us is perfect because together we have gained a good reputation of Ecuador as a destination and a first most important destination to learn Spanish in Latin America.
        </p>
        <p>
            In the same year we also were the first Spanish school in Ecuador which started to offer volunteering opportunities in several areas as social programs, environmental programs, professional issues, etc.
        </p>
        
        @include('gallery', ['gallery' => $article->gallery('over-29-years-experience'), 'position'=> 'right', 'thumbail' => '2']) 
        <p>
            In 1996 we started to teach Spanish in the Galapagos Islands and in 1998 we also created the unique travelling classroom model and Spanish courses in the Amazon Jungle.
        </p>
        <p>
            While learning Spanish with us, you are not only learning the language or enjoying the wonders of our country, but also immediately immersing yourself in our culture, learning about our country, improving your Spanish with locals, experiencing our lifestyle and discovering the mentality of local people.
        </p>
    </div>

</div>




@endsection