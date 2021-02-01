@extends('interna')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-3') class="active" @endsection

@section('content-interna')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('breadcrumb.item-1') }}</a></li>
    <li class="breadcrumb-item"><a href="{{ route('destinations') }}">{{ __('breadcrumb.item-3') }}</a></li>
    <li class="breadcrumb-item" aria-current="page">{{ __('breadcrumb.item-3-5') }}</li>
  </ol>
</nav>


<h1>
    {{ __('destinations.indigenous.title') }}
</h1>


<div class="info-list">

    @include('gallery', ['gallery' => $article->gallery('indigenous-communities')])

    <p>
        Ecuador has dozens of indigenous communities spread throughout the country, and each one of them has a unique and fascinating culture, traditions and way of life. ISE has focused on 2 main communities located in the highlands and the Amazon Jungle. Both cultures have an incredible trajectory throughout Ecuador’s history, and although they have adapted to modern life, they keep much of their ancestral cultures alive. In the highlands, we work with the Otavalo Community and in the jungle we work with Shuar community.
    </p>

</div>

<hr>

<div class="row overview">
    <article class="col-md-6" >
        <div class="item">
            <a href="#shuar-community">
                <h2>Shuar Community</h2>
            </a>
            <a href="#shuar-community" class="img-link-item" >
                <img alt="Shuar Community" src="{{ URL::asset( 'images/destinations/indigenous-communities/shuar-community.jpg') }}">
            </a>
            <a href="#shuar-community">Read more...</a>
        </div>
    </article><article class="col-md-6" >
        <div class="item">
            <a href="#otavalo-indigenous-community">
                <h2> Andes Community</h2>
            </a>
            <a href="#otavalo-indigenous-community" class="img-link-item" >
                <img alt="Indigenous Community" src="{{ URL::asset( 'images/destinations/indigenous-communities/indigenous-community.jpg') }}">
            </a>
            <a href="#otavalo-indigenous-community">Read more...</a>
        </div>
    </article>
</div>

<hr>

<h3 id="shuar-community" >Shuar Community </h3>

@include('gallery', ['gallery' => $article->gallery('shuar-community')])

<p>
    The Shuar are an indigenous tribe of the Amazonian Ecuador. Shuar means “people”. The people who speak the Shuar language, live in the tropical rainforests located between the upper mountains of the Andes, and the tropical rainforests and savannas of the Amazon lowlands in Ecuador, which extend to Peru.
</p>
<p>
    You can visit surrounding communities, learn about shamanism and survival techniques, including fishing, how to trap wild animals of the forest, and how to make Shuar art and pottery. You will also have the opportunity to improve your Spanish language skills with our program while you stay with the community.
</p>
<div class="clearfix"></div>

<div id="list-example" class="list-group dq-list-scroll">

    <a class="list-group-item" href="#Spanish-courses-in-the-Shuar-Community">
        <i class="glyphicon glyphicon-stop" ></i>
        Spanish courses in the Shuar Community 
    </a>

    <a class="list-group-item" href="#Accommodation-and-Meals">
        <i class="glyphicon glyphicon-stop" ></i>
        Accommodation and Meals
    </a>

    <a class="list-group-item" href="#About-The-Area">
        <i class="glyphicon glyphicon-stop" ></i>
        About The Area
    </a>

    <a class="list-group-item" href="#Activities-while-you-stay-with-the-Shuar-Community">
        <i class="glyphicon glyphicon-stop" ></i>
        Activities while you stay with the Shuar Community
    </a>

    <a class="list-group-item" href="#What-To-Bring">
        <i class="glyphicon glyphicon-stop" ></i>
        What To Bring
    </a>

    <a class="list-group-item" href="#How-To-Get-There">
        <i class="glyphicon glyphicon-stop" ></i>
        How To Get There
    </a>

    <a class="list-group-item" href="#Included-Not-Included">
        <i class="glyphicon glyphicon-stop" ></i>
        Included / Not Included 
    </a>

</div>

<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example dq-ise-scroll">
    
    <div id="Spanish-courses-in-the-Shuar-Community">
        <h2>Spanish courses in the Shuar Community</h2>

        @include('gallery', ['gallery' => $article->gallery('spanish-courses-shuar-community')])
        <p>
            ISE classes in the Amazon Jungle started in 1998. We have worked closely with indigenous to help educate and preserve nature and culture in the Amazon.
        </p>
        <p>
            Classes take place in the common areas, so even if the place will be very basic there is enough space for students and teachers to carry on with their work. Classes can take place in the morning or in the afternoon for a minimum of 4 hours each day, the rest of the day you will participate in activities organized by the Indigenous family. Teachers will usually set a short exercise as homework every day. We offer classes for the following levels: beginner, elementary, intermediate and advanced.
        </p>
        <p>
            Safety is not an issue while staying with the communities.
        </p>
    </div>

    <hr/>

    <div id="Accommodation-and-Meals">
        <h2>Accommodation and Meals</h2>
        @include('gallery', ['gallery' => $article->gallery('accommodation-meals-shuar-community')])

        <p>
            The chance to learn Spanish in a Shuar community, is a chance you will only get once in your lifetime. It won’t be a 5-star resort, in the other way around, please note that they are indigenous from the Amazon Jungle and not used to the lifestyle as people from big cities or from developed countries recognize as deluxe or a standard way of living, the place is very basic and you also have to bring your own toilet paper but in the other hand it will teach you about the tradition and culture of the indigenous people of Ecuador. 
        </p>
        <p>
            You will experience daily life with an Indigenous family who will show you how they survive in the jungle, and learn from the vast knowledge of the flora and fauna in the jungle, so you will learn a lot about their vision and way of life.
        </p>

        @include('gallery', ['gallery' => $article->gallery('accommodation-meals-shuar-community'), 'position'=>'right', 'thumbail' => '2'])

        <p>
            Your accommodation will be in a very basic wooden house within the Shuar family. Breakfast, lunch and dinner are included Please note that Indigenous from the Amazon jungle eat almost the same every day and on their 3 meals per day, you may miss real food, so please don’t forget to bring your own snacks to not feel so hungry during the week.
        </p>
        <h3>Please Note:</h3>
        <ol>
            <li>
                <p>
                    We do not want to judge their customs, we only pass some information to you. When you come to a Shuar indigenous family of the jungle they expect you should bring a gift for them, something to eat that you can buy in the city or bring from your own country, no matter if it costs just a little money, they appreciate it a lot, but also they expect you to drink their chicha, if you do not accept it nothing happens, but internally they feel that there is a natural rejection of their customs and traditions.
                </p>
            </li>
            <li>
                <p>
                    An unavoidable element of any visit to the rainforest is contact with insects, and this may involve bugs inside your room. If this does not sound like something you would like to encounter, then a trip to the rainforest is probably not for you.
                </p>
            </li>
        </ol>
    </div>

    <hr/>

    <div id="About-The-Area">
        <h2>About The Area</h2>
        @include('gallery', ['gallery' => $article->gallery('about-area-shuar-community')])

        <p>
            The Amazon Jungle is home to the largest concentration of diversity of species per squared Km in the world. A large part of this region is protected and has been declared a natural reserve or national park. Some of these are Yasuni, Cuyabeno, Cayambre-Coca, Sangay, and Sumaco-Galeras, among others. Species in the area: amphibians, reptiles, birds, mammals, as well as thousands of species of plants.
        </p>
        <p>
            Ecuador has 14 different ethnic groups, 10 of which belong to the Amazon Jungle, and these are the Amazonic Kichuas, Shuar, Achuar, Secoya, Siona, Cofan, Shiwiar, Andoa, and Zapara. There are also other non-contacted groups, such as the Taromenane and the Tagaeri, who are to be considered as part of the Waorani clan. 
        </p>
    </div>

    <hr/>

    <div id="Activities-while-you-stay-with-the-Shuar-Community">
        <h2>Activities while you stay with the Shuar Community</h2>
        <p>
            The Shuars are very proud of their culture and they are passionate about sharing with you their traditions, lifestyle and survival techniques while in the jungle. You can learn about these while on tours offered every day.
        </p>
        <ul class="list-sub">
            <li>
                <h3>Jungle Journeys</h3>
                <div class="info-list">

                    @include('gallery', ['gallery' => $article->gallery('jungle-journeys')])

                    <p>
                       Along with a local guide, you will submerge deep into the Amazon jungle. You will learn about the Shuar history and their survival secrets. This includes picking fruit and spotting animals.
                    </p>
                </div>
            </li>
            <li>
                <h3>Waterfall</h3>
                <div class="info-list">

                    @include('gallery', ['gallery' => $article->gallery('waterfall')])

                    <p>
                        A breathtaking small waterfall in the middle of the jungle is waiting for you. As part of their traditions and believes, cleansing of the body and soul is vital, and to do so, they have special rituals which will be shared with you. The Shuar believe in the strength of Mother Nature and they use this waterfall to draw energy and purify themselves. 
                    </p>
                </div>
            </li>
            <li>
                <h3>Shuar Celebrations</h3>
                <div class="info-list">

                    @include('gallery', ['gallery' => $article->gallery('shuar-celebrations')])
                    
                    <p>
                        Special celebrations are always shared with visitors as part of their customs. The Shuar will set up a bonfire and show you traditional dances and their music customs.
                    </p>
                </div>
            </li>
            <li>
                <h3>Optional Volunteering Experiences</h3>
                <div class="info-list">

                    @include('gallery', ['gallery' => $article->gallery('optional-volunteering-experiences')])
                                                
                    <p>
                        Within the Shuar Community there are plenty possibilities to combine your language course with a volunteering experience. We offer projects in various fields like teaching, gardening and social work.
                    </p>

                </div>
            </li>
        </ul>
    </div>

    <hr/>

    <div id="How-To-Get-There">
        <h2>How To Get There</h2>
        @include('gallery', ['gallery' => $article->gallery('how-to-getthere-shuar-community')])

        <p>
            Students attending Spanish courses in the Shuar Community must first fly to Quito at the Mariscal Sucre International Airport (UIO), and then local ground transportation can be arranged to the Community. We will travel with our students by public bus from Quito to the Shuar Community. There are several bus companies that offer several departures a day. This trip takes around six to eight hours.
        </p>
    </div>

    <hr/>

    <div id="What-To-Bring">
        <h2>What To Bring</h2>
        @include('gallery', ['gallery' => $article->gallery('what-bring-shuar-community')])
                
        <p>
            For most activities you will need comfortable shoes, , long light pants, a comfortable t-shirt, a bathing suit, a light rain jacket and rubber boots, so you can go on any activity and not worry about mud or puddles. Because of the insects and the humidity, it’s better to wear light fast drying pants rather than shorts. Weather may change within the same day, so having a windbreaker or light rain jacket with you on any trip will always be helpful. We also recommend bringing sunscreen, bug spray and a hat.
        </p>
    </div>

    <hr/>

    <div id="Included-Not-Included">
        <h2>Included Not Included</h2>
        <h3>ISE Classes</h3>
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
                                <p>Class Schedule: Monday – Friday, 08:30 – 12:30</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Lessons: 20 lessons of 55 minutes each.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Class size: 2-4 Students per class.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Duration: 1 week minimum.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Transportation: Pick up at airport upon arrival in Quito. Quito – Shuar Community- Quito (6-9 hours by bus) /p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Accommodation: Host family of the Shuar Community (7 days/6 nights)</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Meals: Breakfast, lunch and dinner are included.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Activities: Shuar guided afternoon excursions Monday through Friday, and 1 night excursion.</p>
                            </td>
                        <tr>
                            <td>
                                <p>Bathroom: Shared bathroom.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Electricity: Available for a few hours a day.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>2Communication: Phone signal is available, but no internet connection or Wi-Fi.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Certificate: Diploma.</p>
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
                                <p>Food during transit</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>



<hr>

<h1 id="otavalo-indigenous-community" >Otavalo Indigenous Community</h1>

@include('gallery', ['gallery' => $article->gallery('otavalo-indigenous-community')])

<p>
    Otavaleños pride themselves in their heritage and artistic talents. Their town, Otavalo, is friendly and cozy, and is mainly famous for its Saturday market, which is one of the biggest and greatest indigenous markets in Central and South America. You can buy anything from locally made handcrafts to traditional indigenous outfits.
</p>

<div class="clearfix"></div>

<div id="list-example-2" class="list-group dq-list-scroll">

    <a class="list-group-item" href="#Classes">
        <i class="glyphicon glyphicon-stop" ></i>
        Classes
    </a>

    <a class="list-group-item" href="#Accommodation-and-Meals-Otavalo">
        <i class="glyphicon glyphicon-stop" ></i>
        Accommodation and Meals
    </a>

    <a class="list-group-item" href="#About-The-Area-2">
        <i class="glyphicon glyphicon-stop" ></i>
        About The Area
    </a>

    <a class="list-group-item" href="#How-To-Get-There-2">
        <i class="glyphicon glyphicon-stop" ></i>
        How To Get There
    </a>

    <a class="list-group-item" href="#What-To-Bring-2">
        <i class="glyphicon glyphicon-stop" ></i>
        What To Bring
    </a>

    <a class="list-group-item" href="#Included-Not-Included-2">
        <i class="glyphicon glyphicon-stop" ></i>
        Included / Not Included
    </a>

</div>

<div data-spy="scroll" data-target="#list-example-2" data-offset="0" class="scrollspy-example dq-ise-scroll">

    <div id="Classes">
        <h2>Classes</h2>
        @include('gallery', ['gallery' => $article->gallery('spanish-classes-otavalo-indigenous-community')])

        <p>
            ISE classes with the Otavalo Indigenous Community started in 1998. We have worked closely with indigenous to help educate and preserve nature and culture in the region. Classes will take place in the house of the Indigenous family where our students are staying. Because our Spanish students will be immersed as part of the Indigenous family, students will participate in morning activities together with the family, in the organic farm, shopping in the market, activities with the community, etc. classes take place in the in the afternoon for 4 hours each day from 2:00pm until 6:00pm. Teachers will arrive to the Indigenous family before 2:00pm to start with the Spanish course on time. We offer classes for the following levels: beginner, elementary, intermediate and advance. Safety is not an issue while staying with the communities.
        </p>
    </div>

    <hr/>

    <div id="Accommodation-and-Meals-Otavalo">
        <h2>Accommodation and Meals</h2>
        @include('gallery', ['gallery' => $article->gallery('accommodations-meals-otavalo-indigenous-community')])

        <p>
            Staying with the community is the perfect way to know and be immersed in the Indigenous culture. Indigenous speak Spanish but not so well, also grandparents and relatives can communicate not so well in Spanish. Please be sure to use the Spanish language as you will learn with us because the Indigenous family will talk to but they will not correct your when talking in our language. 
        </p>
        <p>
            As it is part of the culture, you will share 3 meals a day with the family. The meals are very important for them and are the parts of the day when the families come together. You will be integrated as a whole family member. The host families always give their guests a warm welcome and enjoy the opportunity to share Ecuadorian life and culture with someone from a different country.
        </p>
    </div>

    <hr/>

    <div id="About-The-Area-2">
        <h2>About The Area</h2>
        @include('gallery', ['gallery' => $article->gallery('about-area-otavalo-indigenous-community')])

        <p>
            The accommodation with the Indigenous family near Otavalo will take place in the Andean countryside around one hour part by public bus and part walking or by taxi from the center of Otavalo. It is located 3 hours north of Quito, and it is famous for its indigenous people, artisan crafts, and textiles. It is surrounded by high mountains and volcanoes, fertile land, great lagoons, and friendly people a great opportunity for activities and excursions.
        </p>
    </div>

    <hr/>

    <div id="How-To-Get-There-2">
        <h2>How To Get There</h2>
        @include('gallery', ['gallery' => $article->gallery('how-get-indigenous-community')])

        <p>
            Otavalo is located just 2 hours by car or 3 hours by bus from Quito. We organize the transportation from Quito to Otavalo and then from Otavalo to your home with the Indigenous Community. 
        </p>
        <div class="clearfix"></div>
        <ol>
            <li>
                <p>
                    If students arrive in Quito during the day, we will organize their transportation (free of charge) to travel from Quito to Otavalo within the same day.
                </p>
            </li>
            <li>
                <p>
                    If students will arrive in Quito after 4:00pm, we organize accommodation in Quito for the first night and transportation from Quito to Otavalo the next morning. 
                </p>
            </li>
            <li>
                <p>
                    If the students decide to study in Quito first and go to Indigenous Community to live with an Indigenous family afterwards, we will organize the complete itinerary and transportation in advance.
                </p>
            </li>
        </ol>
    </div>

    <hr/>

    <div id="What-To-Bring-2">
        <h2>What To Bring</h2>
        @include('gallery', ['gallery' => $article->gallery('what-bring-otavalo-indigenous-community')])

        <p>
            For most activities you will need comfortable shoes, long pants, a comfortable shirt and a jacket. Weather may change within the same day, so having a sweatshirt or jacket with you on any trip will always be helpful. We also recommend bringing sunscreen, bug spray and a hat. 
        </p>
    </div>

    <hr/>

    <div id="Included-Not-Included-2">
        <h2>Included / Not Included</h2>
        <h3>ISE Classes</h3>
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
                                <p>Class Schedule: Monday – Friday, 02:00pm – 06::00pm</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Lessons: 20 lessons of 55 minutes each.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Class size: 1-2 Students per class (group only if you come with your partner or with your own family).</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Duration: 1 week minimum. </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Transportation: Pick up at airport upon arrival in Quito. Quito – Otavalo Community- Quito (2-3 hours by bus)</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Accommodation: Indigenous family of the Otavalo Community (7 days/6 nights). If you come alone, most of the time you will not have the opportunity to meet any other Spanish students. The Indigenous family will accept a single or couple of participants, maximum 3 – 4 members of a family or friend in the same home but will not accept people who don’t know each other.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Meals: Breakfast, lunch and dinner are included, as well as traditional food.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Activities: Activities with the family i.e. in the farm or activities at the Indigenous community</p>
                            </td>
                        <tr>
                            <td>
                                <p>Bathroom: Private and shared bathroom.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Electricity: Available for a few hours a day.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Communication: Phone signal and internet WiFi is available.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Certificate: Diploma.</p>
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
                                <p>Food during transit</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


@endsection

@section('bookLessons')

<hr>
<div>
    <h3>Book Spanish Lessons in Indigenous Communities</h3>
    <p class="text-center" style="font-size: 17px;">
        ONE WEEK FROM US$699
    </p>
    <a href="/learn-spanish-booking.html" class="btn btn-primary w-100"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> BOOK NOW</a>
</div>


@endsection