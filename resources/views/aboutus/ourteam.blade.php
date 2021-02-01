@extends('interna2')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-6') class="active" @endsection

@section('content-interna')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('home') }}">
                {{ __('breadcrumb.item-1') }}
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('about-us') }}">
                {{ __('breadcrumb.item-6') }}
            </a>
        </li>
        <li aria-current="page" class="breadcrumb-item active">
            {{ __('breadcrumb.item-6-2') }}
        </li>
    </ol>
</nav>
<h1>
    {{ __('about-us.team.title') }}
</h1>
<p>
    The team at Instituto Superior de Español (ISE) consists of well-trained professionals that have years of experience in the educational field and that have traveled within all of Ecuador and around the world. All of our teachers have an exceptional college education, and most of them have more than one degree, giving them a wide range of knowledge in different areas. A class or a trip with one of our team members will give you the support you need to learn the Spanish language and the opportunity to visit one of the most beautiful countries in the world.
</p>
<div class="row team">
    <article class="col-md-3 col-xs-6">
        <a data-target="#team1" data-toggle="modal" type="button">
            <figure class="category-img">
                <img src="images/about-us/team/team-1.jpg"/>
            </figure>
            <div class="item-content text-center">
                <h5>
                    Eugenio
                </h5>
                <div class="item-introText">
                    <p>
                        Academic Director & Founder
                    </p>
                </div>
            </div>
        </a>
        <div aria-labelledby="myModalLabel" class="modal fade" id="team1" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            Eugenio
                        </h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Eugenio has a Bachelor’s degree in Spanish and Latin American Literature, Teaching, and an International Business Engineering degree. Throughout his academic career, Eugenio has concentrated on issues concerning the development and betterment of teaching practices. It was while studying Spanish and Literature that he decided Quito would be an ideal place to open a school for foreign students who had an interest in learning Spanish as a second language. Thus, Instituto Superior de Español was opened with the objective of offering an unforgettable experience to all of our Spanish students and with the goal to be the best professional language Spanish school in all of Latin America and the world.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="col-md-3 col-xs-6">
        <a data-target="#team2" data-toggle="modal" type="button">
            <figure class="category-img">
                <img src="images/about-us/team/team-2.jpg">
                </img>
            </figure>
            <div class="item-content text-center">
                <h5>
                    Paola
                </h5>
                <div class="item-introText">
                    <p>
                        Student Advisor & Administration
                    </p>
                </div>
            </div>
        </a>
        <div aria-labelledby="myModalLabe2" class="modal fade" id="team2" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            Paola
                        </h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Paola has two degrees in Teaching and Tourism and she has been teaching at ISE since 2001. While she has worked in all of the ISE programs across Ecuador, she is now based in our headquarters in Quito. Paola can help you organize all of the necessary details for your classes, accommodation, and travelling.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="col-md-3 col-xs-6">
        <a data-target="#team3" data-toggle="modal" type="button">
            <figure class="category-img">
                <img src="images/about-us/team/team-3.jpg">
                </img>
            </figure>
            <div class="item-content text-center">
                <h5>
                    Valeria
                </h5>
                <div class="item-introText">
                    <p>
                        Administrative Assistant
                    </p>
                </div>
            </div>
        </a>
        <div aria-labelledby="myModalLabe2" class="modal fade" id="team3" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            Valeria
                        </h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Valeria, who holds a degree in Hotel and Tourism Management, has been the administrative assistant of ISE since 2015. Working in the administration department at ISE gives Valeria the opportunity to interact with people from different countries, and to help them have an incredible experience at ISE and in Ecuador. When ISE students return home, Valeria hopes that Ecuador will hold a special place in their hearts.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="col-md-3 col-xs-6">
        <a data-target="#team5" data-toggle="modal" type="button">
            <figure class="category-img">
                <img src="images/about-us/team/team-5.jpg">
                </img>
            </figure>
            <div class="item-content text-center">
                <h5>
                    Angélica
                </h5>
                <div class="item-introText">
                    <p>
                        Teacher
                    </p>
                </div>
            </div>
        </a>
        <div aria-labelledby="myModalLabel" class="modal fade" id="team5" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            Angélica
                        </h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Angélica has been teaching with the ISE family for over 15 years. Aside from being an excellent teacher and team player, Angelica loves exchanging knowledge with her students about Ecuador and her students’ home countries.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="col-md-3 col-xs-6">
        <a data-target="#team6" data-toggle="modal" type="button">
            <figure class="category-img">
                <img src="images/about-us/team/team-6.jpg">
                </img>
            </figure>
            <div class="item-content text-center">
                <h5>
                    Tania
                </h5>
                <div class="item-introText">
                    <p>
                        Teacher
                    </p>
                </div>
            </div>
        </a>
        <div aria-labelledby="myModalLabe2" class="modal fade" id="team6" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            Tania
                        </h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Tania, who has a Teaching degree in Languages, has been part of our team since 1994. Tania is a fantastic teacher who is great at identifying students’ weaknesses and turning them into strengths. Tania teaches Spanish at our facilities in Quito, the Amazon Jungle, and the Galapagos Islands, as well as the Traveling Classroom program.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="col-md-3 col-xs-6">
        <a data-target="#team7" data-toggle="modal" type="button">
            <figure class="category-img">
                <img src="images/about-us/team/team-7.jpg">
                </img>
            </figure>
            <div class="item-content text-center">
                <h5>
                    Tito
                </h5>
                <div class="item-introText">
                    <p>
                        Teacher
                    </p>
                </div>
            </div>
        </a>
        <div aria-labelledby="myModalLabe2" class="modal fade" id="team7" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            Tito Hernan
                        </h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Tito has been teaching Spanish for 23 years. He holds degrees in teaching and journalism. Tito has passions for Latin American Art and History, reading, and teaching Spanish.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="col-md-3 col-xs-6">
        <a data-target="#team8" data-toggle="modal" type="button">
            <figure class="category-img">
                <img src="images/about-us/team/team-8.jpg">
                </img>
            </figure>
            <div class="item-content text-center">
                <h5>
                    Vanessa
                </h5>
                <div class="item-introText">
                    <p>
                        Teacher
                    </p>
                </div>
            </div>
        </a>
        <div aria-labelledby="myModalLabe2" class="modal fade" id="team8" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            Vanessa
                        </h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Vanessa, who holds a Social Science degree, has been teaching Spanish for foreigners since 1998. She is a hardworking and well-humored member of our staff. Her hobbies include cooking, soccer, dancing and reading. However, Vanessa enjoys traveling the most! Join her on one of our Traveling Classroom programs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="col-md-3 col-xs-6">
        <a data-target="#team9" data-toggle="modal" type="button">
            <figure class="category-img">
                <img src="images/about-us/team/team-9.jpg">
                </img>
            </figure>
            <div class="item-content text-center">
                <h5>
                    Zayra
                </h5>
                <div class="item-introText">
                    <p>
                        Teacher
                    </p>
                </div>
            </div>
        </a>
        <div aria-labelledby="myModalLabel" class="modal fade" id="team9" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            Zayra
                        </h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Zayra, who has been a teacher for close to 17 years, has studied medicine in Brazil from 1997-2002, Hotel and Tourism Management in Quito, and she received her 3rd college degree in 2015. Zayra teaches Spanish because she believes that it opens doors for learning not only a new language but also for learning about new cultures. She loves travelling and encountering new cultures, especially through South America and Cuba.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="col-md-3 col-xs-6">
        <a data-target="#team12" data-toggle="modal" type="button">
            <figure class="category-img">
                <img src="images/about-us/team/team-12.jpg">
                </img>
            </figure>
            <div class="item-content text-center">
                <h5>
                    Anita
                </h5>
                <div class="item-introText">
                    <p>
                        Teacher
                    </p>
                </div>
            </div>
        </a>
        <div aria-labelledby="myModalLabe2" class="modal fade" id="team12" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            Anita
                        </h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Anita has worked at ISE Otavalo as a Spanish Teacher for almost 5 years. She also has a Nursing degree. She loves travelling through Ecuador and visiting its warm beaches, breathing fresh air while trekking through the mountains, and exploring the incredible jungle. She also enjoys sharing Ecuadorian food, culture, people, and sights with her students.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="col-md-3 col-xs-6">
        <a data-target="#team13" data-toggle="modal" type="button">
            <figure class="category-img">
                <img src="images/about-us/team/team-13.jpg">
                </img>
            </figure>
            <div class="item-content text-center">
                <h5>
                    María Elena
                </h5>
                <div class="item-introText">
                    <p>
                        Teacher
                    </p>
                </div>
            </div>
        </a>
        <div aria-labelledby="myModalLabel" class="modal fade" id="team13" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            María Elena
                        </h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Maria Elena, who has a degree in Tourism Administration, has worked as a teacher at ISE Otavalo for 6 years now. Teaching Spanish has become an important part of María Elena’s life and professional career, and thus she is excited to be able to share her abilities with ISE and its students. María Elena extends you an invitation to visit Otavalo, and experience its wonderful mountain scenery, colorful shops, beautiful waterfalls and lakes, and to learn Spanish with one of the best programs offered by ISE.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="col-md-3 col-xs-6">
        <a data-target="#team15" data-toggle="modal" type="button">
            <figure class="category-img">
                <img src="images/about-us/team/team-15.jpg">
                </img>
            </figure>
            <div class="item-content text-center">
                <h5>
                    Teresa
                </h5>
                <div class="item-introText">
                    <p>
                        Volunteer Coordinator
                    </p>
                </div>
            </div>
        </a>
        <div aria-labelledby="myModalLabe2" class="modal fade" id="team15" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            Teresa
                        </h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Theresa, our volunteer coordinator, worked for over 25 years in programs to protect children and adolescents in social risk situations and is very knowledgeable about the inner-workings and needs of Ecuadorian volunteer organizations. Teresa will be pleased to help you find the right volunteer project.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="col-md-3 col-xs-6">
        <a data-target="#team16" data-toggle="modal" type="button">
            <figure class="category-img">
                <img src="images/about-us/team/team-16.jpg">
                </img>
            </figure>
            <div class="item-content text-center">
                <h5>
                    Washington
                </h5>
                <div class="item-introText">
                    <p>
                        Tour Guide
                    </p>
                </div>
            </div>
        </a>
        <div aria-labelledby="myModalLabe2" class="modal fade" id="team16" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            Washington
                        </h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Washington is our team’s trusted tour guide. He can help you arrange your accommodation, and he will also accompany you on trips in Quito and to the surrounding areas in his yellow cab. Moreover, he is an incredibly nice guy and very eager to help.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <article class="col-md-3 col-xs-6">
        <a data-target="#team17" data-toggle="modal" type="button">
            <figure class="category-img">
                <img src="images/about-us/team/team-17.jpg">
                </img>
            </figure>
            <div class="item-content text-center">
                <h5>
                    Mario
                </h5>
                <div class="item-introText">
                    <p>
                        Service
                    </p>
                </div>
            </div>
        </a>
        <div aria-labelledby="myModalLabe2" class="modal fade" id="team17" role="dialog" tabindex="-1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                            Mario
                        </h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Mario is the good-hearted soul of our Spanish school who takes care of everyone and everything. He likes cooking and chatting with our students, and every Wednesday he will accompany students on visits through old town Quito.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>
@endsection
