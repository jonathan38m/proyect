@extends('interna')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-5') class="active" @endsection

@section('content-interna')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-5') }}</li>
    </ol>
</nav>

<h1>
    {{ __('volunteering.title') }}
</h1>
<p>
    Since 1994, ISE has dedicated a great deal of time and efforts to comply with social and environmental responsibilities to make front to the country’s needs and global urgencies all over Ecuador including the Galapagos Islands. We offer volunteering and internship programs in more than 4 main areas: Social Work, Healthcare, Environmental, Educational as well as in several professional areas.
</p>
        
<div class="row overview">
    <article class="col-md-6">
        <div class="item">
            <a href="{{ route('aplication-volunteer') }}"><h2>Social Work Programs:</h2></a>
            <img src="images/volunteering/overview/social-work.jpg">
            <div class="item-introText">
                <p>
                    This program allows volunteers to be directly involved with organizations and work groups that care for children who live in orphanages and that are born in high-risk families. We have collaborated with organizations to support some of the most vulnerable sectors of our society. We work in major cities where problems arise more frequently, by joining efforts with several social organisms and community groups, to create programs to improve the quality of life and education of its people.
                </p>
                <p>
                    Minimum time of participation: 2 weeks
                </p>
            </div>
            <a href="{{ route('aplication-volunteer') }}">I am Interested in this Program</a>
        </div>
        
    </article><article class="col-md-6">
        <div class="item">
            <a href="{{ route('aplication-volunteer') }}">
                <h2>Healthcare Programs:</h2>
            </a>
            <img src="images/volunteering/overview/healthcare.jpg">
            <div class="item-introText">
                <p>
                    Since 1996, ISE has organized and coordinate health programs. We work with the Ecuadorian Red Cross in medical emergency and First Responder programs in big and small cities. Although most of the equipment is located in the big cities, it is crucial that students learn about the different ways to treat patients who live in remote areas with limited access and supplies.
                </p>
                <p>
                    Minimum time of participation: 8 weeks
                </p>
            </div>
            <a href="{{ route('aplication-volunteer') }}">I am Interested in this Program</a>
        </div>
        
    </article>
</div>

<div class="row overview">
    <article class="col-md-6">
        <div class="item">
            <a href="{{ route('aplication-volunteer') }}"><h2>Environmental Programs</h2></a>
            <img src="images/volunteering/overview/environmental-programs.jpg">
            <div class="item-introText">
                <p>
                    For 25 years, we have worked with different animal shelters, as well as rescue centers in different parts of the country. These programs focus on the importance of recovering, caring, and placing pets in responsible and caring families, as well as reintroducing wild fauna to its natural habitat. We also participate in environmental conservancy and protection programs in the Amazon Jungle, the Andes and Galapagos Islands. ISE was the first Spanish school in Ecuador to join organizations that looked after social and environmental programs, as well as animal rescue and protection programs that focused on the recovery of wild animals trapped in zoos, large and small cities, and animal traffic.
                </p>
                <p>
                    Minimum time of participation: 2 weeks
                </p>
            </div>
            <a href="{{ route('aplication-volunteer') }}">I am Interested in this Program </a>
        </div>
        
    </article><article class="col-md-6">
        <div class="item">
            <a href="{{ route('aplication-volunteer') }}">
                <h2>Educational Programs</h2>
            </a>
            <img src="images/volunteering/overview/educationa-programs.jpg">
            <div class="item-introText">
                <p>
                    ISE works with teaching centers all over Ecuador, most of our Spanish students, interns and volunteers teach English in official elementary through high schools as well as in universities. We are also involved in teaching subjects in English or in Spanish as Mathematics, Science, Computer, Graphic Design, Business Administration, Finances, among others. The minimum period of teaching participation is for one full month.
                </p>
                <p>
                    In rural areas ISE has focused not just on academic programs, but also on community tourism, environmental conservation, and community work. We provide academic support and assessment to reinforce different subjects for children and young adults after school. 
                </p>
                <p>
                    We understand the importance of education and the roll it has in combating and preventing child labor and other unfair practices. Some of our students work as volunteers or interns in both private and public schools. Most of them are teachers or have experience teaching, and they help by bringing their knowledge and Experience.
                </p>
                <p>
                    Minimum time of participation: 1 full month 
                </p>
            </div>
            <a href="{{ route('aplication-volunteer') }}">I am Interested in this Program </a>
        </div>
        
    </article>
</div>

<div class="row overview">
    <article class="col-md-6">
        <div class="item">
            <a href="{{ route('aplication-volunteer') }}"><h2>Professional areas</h2></a>
            <img src="images/volunteering/overview/professionals.jpg">
            <div class="item-introText">
                <p>
                    According to your field of interest, we will be glad to organize a program to fit your professional abilities. 
                </p>
                <p>
                    Minimum time of participation: 1 month
                </p>
            </div>
            <a href="{{ route('aplication-volunteer') }}">I am Interested in this Program </a>
        </div>
        
    </article>
</div>

<p>
    <strong>
        Please Note:
    </strong>
    Volunteering organizations do not offer board and accommodation, but ISE will be glad to point at great options for you.
</p>



@endsection