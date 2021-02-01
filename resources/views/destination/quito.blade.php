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
    <li class="breadcrumb-item" aria-current="page">{{ __('breadcrumb.item-3-1') }}</li>
  </ol>
</nav>

<h1>
    {{ __('destinations.quito.title') }}
</h1>


<div class="info-list">


    @include('gallery', ['gallery' => $article->gallery('leading-destination')])

    <p>
        Quito is Ecuador's capital and the second largest city in the country. It is situated high in the Andes amongst dramatic volcanoes and mountains.
    </p>
    <p>
        Quito is a beautiful city full of historical monuments and architectural treasures. Its jewel is the historic center, which has been declared a World Heritage site by UNESCO.
    </p>
    <p>
        The 17th century facades, picturesque plazas, and magnanimous churches are some of the features that make this beautiful site a great place to learn about our history, culture, and language.
    </p>


</div>

<div id="list-example" class="list-group dq-list-scroll">

    <a class="list-group-item list-group-item-action " href="#Our-Spanish-Institute-in-Quito">
        <i class="glyphicon glyphicon-stop" ></i>
        Our Spanish Institute in Quito
    </a>
    <a class="list-group-item list-group-item-action" href="#Our-Spanish-Courses-in-Quito">
        <i class="glyphicon glyphicon-stop" ></i>
        Our Spanish Courses in Quito
    </a>
    <a class="list-group-item list-group-item-action" href="#Accommodation-in-Quito">
        <i class="glyphicon glyphicon-stop" ></i>
        Accommodation in Quito
    </a>
    <a class="list-group-item list-group-item-action" href="#Activities-in-Quito">
        <i class="glyphicon glyphicon-stop" ></i>
        Activities in Quito
    </a>
    <a class="list-group-item list-group-item-action" href="#Recommended-Clothes-and-Equipment">
        <i class="glyphicon glyphicon-stop" ></i>
        Recommended Clothes and Equipment
    </a>
    <a class="list-group-item list-group-item-action" href="#How-to-get-to-Quito">
        <i class="glyphicon glyphicon-stop" ></i>
        How to get to Quito
    </a>
    <a class="list-group-item list-group-item-action" href="#Included-Not-Included">
        <i class="glyphicon glyphicon-stop" ></i>
        Included / Not Included
    </a>

</div>
<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example dq-ise-scroll">
    <div id="Our-Spanish-Institute-in-Quito">
        <h2>Our Spanish Institute in Quito</h2>
        @include('gallery', ['gallery' => $article->gallery('our-spanish-institute-in-quito')])

        <p>
          ISE in Quito is our main location and it was founded in 1988 by our Director, Eugenio Cordova. Our school is located in the historic center of the city in a colonial style building.
        </p>
        <p>
          Our school headquarters offers comfortable classrooms and an inviting common room with a big cozy sofa where you can relax during your break. Common areas also include balconies, a kitchen, and bathrooms.
        </p>
        <p>
          We have complementary Wi-Fi throughout the school, a library, a reading room and a couple of computers for you to use.
        </p>
        <p>
          Nearby you will find shops, restaurants, markets, supermarkets, bus stations and banks. In addition, the Presidential Palace, Plaza Grande, Museo de la Ciudad and other important sites are within walking distance from ISE Quito.
        </p>
        <p>
          There are several ways to get to and from ISE including several bus lines, the Trole, and taxi cabs that will come directly to our location.
        </p>
        <p>
          The neighborhood is safe to walk around during the day although we recommend taking a cab after 9:00 pm, especially if you are carrying bags.
        </p>
    </div>

    <hr/>

    <div id="Our-Spanish-Courses-in-Quito">
        <h2>
            Our Spanish Courses in Quito
        </h2>
        @include('gallery', ['gallery' => $article->gallery('courses')])
        <p>
            Quito is one of the best places in Latin America to learn Spanish because Quiteños speak a clear and easy-to-understand Spanish at a moderate speed.
        </p>
        <p>
            Instituto Superior de Español has been continuously developing teaching methods over the last 29 years.
        </p>
        <p>
            Our Spanish classes focus on vocabulary and grammar combined with practical communication skills which our students can use outside the classroom right away. The program contains listening, verbal and written exercises. Every week the progress of our students is evaluated and students are invited to move to the next level.
        </p>

        @include('gallery', ['gallery' => $article->gallery('courses'), 'position'=>'left', 'thumbail' => '2'])

        <p>
            Teachers will assign a short exercise for homework each day. We offer classes for the following levels: beginner, elementary, intermediate and advanced, as well as the DELE and the Spanish for Professionals preparation courses.
        </p>
        <p>
            You can study up to seven hours per day from Monday to Friday between 8:30 - 12:30 and 13:30 -     17:30, or you can choose your own hours between 8:30 - 17:30.
        </p>

        <p>
            <strong>Your first day in school</strong> will begin 15 minutes before the normal schedule with a placement test. Absolute Beginners are not required to take a placement test and will start classes right at 8:30 am. The schedule from Monday to Friday will be the same during the entire week.
        </p>

        @include('gallery', ['gallery' => $article->gallery('courses'), 'thumbail' => '3'])

        <p>
            During a four hour session of Spanish lessons, each hour counts for 55 minutes. For the break, we combine the four five-minute breaks for a 20 minute break at mid-morning or mid-afternoon. In this manner, you will have three hours and forty minutes of class per four hour session.
        </p>
        <p>
            During a four hour session of Spanish lessons, each hour counts for 55 minutes. For the break, we combine the four five-minute breaks for a 20 minute break at mid-morning or mid-afternoon. In this manner, you will have three hours and forty minutes of class per four hour session.
        </p>
        <p>
            Your Spanish-learning classes in Quito (and in Otavalo) can take place in the morning or in the afternoon for a minimum of four hours per day.<strong>Most of our Spanish students choose morning courses, but you can choose to study Spanish in the morning, in the afternoon, or in a combination of morning and afternoon private and group courses. Morning lessons start at 8:30 am and afternoon lessons start at 1:00pm.</strong>
        </p>
    </div>

        <hr/>

    <div id="Accommodation-in-Quito">
        <h2>Accommodation in Quito</h2>
        <ul class="list-sub">
            <li>
                <h3>
                    Living With a Host Family
                </h3>
                <div class="info-list">

                    @include('gallery', ['gallery' => $article->gallery('living-with-family')])
                    <p>
                        Living with a host family will give you insight into the Ecuadorian lifestyle and will rapidly improve your Spanish. All of the host families live within a 15- 45 minute walk or a 10 minute bus ride from our school.
                    </p>
                    <p>
                        Staying with local families is the perfect way to accelerate your knowledge, as you will be able to practice Spanish with the family outside of class. You will also get to know the culture and traditions of Ecuador by sharing everyday life experiences with your hosts. You can share up to 2 meals a day with the family, and you can arrange spending time with them in the afternoons and on the weekend.
                    </p>
                    <p>
                        Host families always give their guests a warm welcome and enjoy the opportunity to share Ecuadorian life and culture with someone from another country.
                    </p>
                </div>
            </li>
            <li>
                <h3>
                    Student Residence
                </h3>
                <div class="info-list">

                    @include('gallery', ['gallery' => $article->gallery('student-residence')])

                    <p>
                        The student residence is located around 45 minutes walking distance from our Spanish Institute or 10 minutes distance by public bus.
                    </p>
                    <p>
                        The manager of the student residence is a bilingual professional in the arts who is involved in artistic and musical cultural activities. She has plenty of experience accommodating students at her home. Her mother started accommodating Spanish students when she was 12 years old.
                    </p>
                    <p>
                        Accommodations at the student residence are offered as a private room, a double room, or a dorm. All of these options include breakfast.
                    </p>
                </div>
            </li>
            <li>
                <h3>
                    Hotel / Hostel
                </h3>
                <div class="info-list">


                    @include('gallery', ['gallery' => $article->gallery('hotel-hostel')])


                    <p>
                        If you prefer to stay in a hostel or hotel, we are happy to offer suggestions or help you make arrangements. All of our recommended locations present a variety of accommodations, amenities and price ranges, and are within easy reach of ISE.
                    </p>
                    <p>
                        These properties offer comfortable rooms in single, double and dorm rooms, as well as common areas, professional and friendly staff, hot water, private bathrooms, and complimentary Wi-Fi throughout the properties.
                    </p>
                </div>
            </li>
        </ul>
    </div>

        <hr/>

    <div id="Activities-in-Quito">
        <h2>Activities in Quito</h2>

                    @include('gallery', ['gallery' => $article->gallery('activities-quito')])

                    <p>
                        During the week we organize optional social and educational activities including cooking classes, free salsa lessons, and visits to museums. On the weekends we organize excursions to the cloud forest, indigenous communities, indigenous markets, etc. These excursions include trekking, horseback riding, and mountain biking.
                    </p>
                    <p>
                        If you are interested in visiting close-by cities, engaging in fun and adventurous activities, or enjoying the cultural and natural diversity of Ecuador, check out our signup sheet and sign up for the activities in which you are interested. The activities vary from week to week and throughout the year. Some may depend on weather and availability of equipment. Some of the activities are complementary while others have a cost.
                    </p>
                    <ul class="list-sub">
                        <li>
                            <h3>Teleferico</h3>
                            <div class="info-list">

                                @include('gallery', ['gallery' => $article->gallery('teleferico')])

                                <p>
                                   The TelefériQo opened in July 2005. This tourist attraction consists of a cable car ride which takes about 10-15 minutes each way. At the summit there are restaurants, coffee shops, and hiking trails with incredible views of the entire city of Quito.
                                </p>
                                <p>
                                    Because the altitude on the highest part of the TeleferiQo is 4050 meters above sea level, the mountain winds are much cooler than those of the city and the area is susceptible to fog, especially in the mornings. Tickets for the cable car are sold at the ticket booth located at the bottom of the ride.
                                </p>
                            </div>
                        </li>
                        <li>
                            <h3>Mitad Del Mundo</h3>
                            <div class="info-list">

                                @include('gallery', ['gallery' => $article->gallery('mitad-mundo')])



                                <p>
                                   The Monument to the Equator is located 26 km north of the historic center of Quito. It highlights the exact location of the Equatorial line, and it commemorates the eighteenth century Franco-Spanish Geodesic Mission, which calculated the Equator’s approximate location.
                                </p>
                                <p>
                                    You can also visit the Ethnographic Museum which is located inside the Monument and which contains exhibits about the indigenous ethnography of Ecuador. The 30-meter-tall monument was constructed between 1979 and 1982 by the Pichincha Province Council to replace an older, smaller monument built by the central Government of Ecuador in 1936. It is made of iron and concrete and covered with cut and polished andesite stone.
                                </p>
                            </div>
                        </li>
                        <li>
                            <h3>Cooking Party</h3>
                            <div class="info-list">

                                @include('gallery', ['gallery' => $article->gallery('cooking-party')])

                                <p>
                                   Every Thursday, we host a cooking party where a professional chef will teach you how to cook traditional.
                               </p>
                               <p>
                                   You will have the opportunity to try the different gastronomic delights our country has to offer and to learn more about each region and its culinary marvels.
                               </p>
                            </div>
                        </li>
                        <li>
                            <h3>Salsa Lessons</h3>
                            <div class="info-list">

                                @include('gallery', ['gallery' => $article->gallery('salsa-lessons')])


                                <p>
                                   On Tuesdays and Thursdays from 5:00 pm until 6:00 pm you will have the opportunity to enjoy complimentary Salsa lessons at a dancing school!
                                </p>

                                <p>
                                    The dancing school is located in la Mariscal, an area of town with a vibrant nightlife full of bars and discotheques where you can improve upon what you have learned in classes.
                                </p>
                                <p>
                                    The owner and manager of the dancing school is a professional dancer with many years of experience and many professional awards.
                                </p>
                                <p>
                                    The school offers private and group classes from 10:00am until 7:00pm, Monday through Friday. Our Spanish Institute offers two complementary hours of group classes per week, but you are welcome to arrange for more hours by speaking directly with the dancing school.
                                </p>
                                <p>
                                    The dancing school offers salsa, merengue, cumbia, vallenato, cha cha cha, samba, bachata, etc. <br>Ecuadorian dishes.
                                </p>

                            </div>
                        </li>
                        <li>
                            <h3>Mindo Cloud Forest (Weekend Trip)</h3>

                            <div class="info-list">

                                @include('gallery', ['gallery' => $article->gallery('mindo-cloud-forest')])

                                <p>
                                   Also known as the Mindo Valley, Mindo is a mountainous division in the western slopes of the Andes where two of the most biologically diverse regions, the Chocoan lowlands and the Tropical Andes, meet. This transitional area covers approximately 268 square kilometers and ranges from 960 to 3,440 meters above sea level.
                                </p>
                                <p>
                                    The Mindo Valley is among the most heavily visited tourist locations in Ecuador. Here you can enjoy activities such as trekking, rafting, tubing, mountain biking, canopying, horseback riding and birdwatching.
                                </p>
                                <p>
                                    Much of the land is privately protected although 86 square kilometers falls within the Mindo-Nambillo Ecological Reserve.
                                </p>
                            </div>
                        </li>
                        <li>
                            <h3>Cotopaxi National Park (Day Trip)</h3>
                            <div class="info-list">

                                @include('gallery', ['gallery' => $article->gallery('cotopaxi')])

                                <p>
                                    Cotopaxi is an active volcano that forms part of the Andes Mountain Range. It is located in the Latacunga district of Cotopaxi Province, about 50 km south of Quito. At a height of 5897 meters.
                                </p>
                                <p>
                                    Cotopaxi is the second highest point in Ecuador and one of the highest active volcanoes in the world. Cotopaxi has erupted more than 50 times since 1738, resulting in the creation of numerous valleys formed by mudflows around the volcano. The last eruption lasted from August 2015 to January 2016.
                                </p>
                                <p>
                                    While here, you can visit the interpretation center where you can learn more about the endemic flora and fauna of the region.
                                </p>
                                <p>
                                    We also offer a beautiful bicycle ride in the area that will show you traces of past eruptions mixed with the highland greenery.
                                </p>
                            </div>
                        </li>
                        <li>
                            <h3>Otavalo Indigenous Market (Day Trip)</h3>
                            <div class="info-list">

                                @include('gallery', ['gallery' => $article->gallery('otavalo')])

                                <p>
                                    Otavalo is a beautiful Indigenous city located two hours north of Quito. It is surrounded by incredible volcanoes, lagoons, and waterfalls. Its people are the indigenous Otavalos, who are famous for their ability and success in commerce and for their beautiful arts and crafts.
                                </p>
                                <p>
                                    You can visit the indigenous market in the Plaza de Ponchos every Saturday, where you will be amazed by the wonderful designs on decorations, traditional outfits, jewelry, and art.
                                </p>
                                <p>
                                    Close by, you can visit the marvelous Peguche Falls, which are considered sacred and of spiritual importance to the Otavalo people. You will feel the powerful energy of the falls and walk the beautiful trails that lead to it.
                                </p>
                                <p>
                                    You can also visit the leather town of Cotacachi, which is about 10-15 minutes from Otavalo, where you can discover beautiful leather art. Not far from Cotacachi you can discover the lagoon of Cuicocha, which is located inside of a sleeping volcano crater. It contains two small islets.
                                </p>
                            </div>
                        </li>
                    </ul>

    </div>

        <hr/>

    <div id="Recommended-Clothes-and-Equipment">
        <h2> Recommended Clothes and Equipment </h2>
        @include('gallery', ['gallery' => $article->gallery('recommended-clothes-equipment')])

        <p>
            For most activities you will need comfortable shoes, long pants, a comfortable shirt, and a jacket. Weather may be unpredictable, so taking a sweatshirt or jacket with you on a trip is a good idea.
        </p>
        <p>
            We also recommend bringing sunscreen, bug spray, and a hat. Visits to Cotopaxi will require warmer clothes and preferably hiking boots, as the highland weather is cool and windy.
        </p>
        <p>
            Visits to Mindo will require comfortable and light clothes, as the weather will be more tropical, warm, and humid.
        </p>
    </div>

        <hr/>

    <div id="How-to-get-to-Quito">
        <h2> How to get to Quito </h2>
        @include('gallery', ['gallery' => $article->gallery('how-quito')])

        <p>
            There are a few options for your arrival in Quito, but the most common option is by air. Mariscal Sucre Airport is located about 45 minutes from Quito. When you arrive, we will meet you at the airport to welcome you and take you to your accommodation. Please provide us with your flight information as soon as you have it. We can pick you up any day of the week and at any time. At the end of your stay, drop off at the airport is not included, but we will be happy to help you find reliable transportation.
        </p>
        <p>
            In addition, there are buses and taxi cabs available to take you to and from the airport. These options are also available every day of the week at any time.
        </p>
        <p>
            You can also arrive by bus if you are coming from another city in Ecuador or if you are coming from Colombia or Peru. There are two bus terminals in Quito. The first terminal is located in the south end of the city in Quitumbe, and this terminal receives buses coming from the south and east side of the country. The second terminal is located at the north end of the city in Carcelen, and this terminal receives buses coming from the north and west side of the country. If you are arriving to Quito by bus, please let us know the time and date of your arrival, so we can pick you up and take you to your accommodation or provide you directions how to get there.
        </p>

        <ul class="list-sub">
            <li>
                <h3>Orientation</h3>
                <div class="info-list">
                    <p>
                       During orientation, you will receive recommendations regarding the prices of food and other things you will need to purchase, how to move safely while in the city or during the program, where to eat, where to walk, and which precautions to take into consideration.
                    </p>
                </div>
            </li>
        </ul>

    </div>

        <hr/>
    <div id="Included-Not-Included">
        <h2> Included / Not Included </h2>
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
                                <p>Airport transfer in Quito and transfer to accommodation</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Welcome pack, which includes book and notebook for Spanish classes</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Transfer to and from Quito if students choose to take courses at multiple locations</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Placement test</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Personalized attention and preparation of the Spanish course</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Coffee, tea and snacks (like freshly baked bread) during breaks</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>2 hours of group dancing lessons per week (Tuesday and Thursday from 5:00pm through 6:00pm)</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Wednesday trip to visit a place in Quito of interest such as a museum, Middle of the World, Cable car of Quito, etc.</p>
                            </td>
                        <tr>
                            <td>
                                <p>Assistance to look for discounts for restaurants, hostels & hotels and trips to the mountains, Amazon jungle, or the Galapagos Islands</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Volunteer or internship placement in a social or environmental organization or rescue center. We have projects in Otavalo and across Ecuador including in the amazing Galapagos Islands</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>24-hour emergency hotline</p>
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
                                <p>Additional dancing lessons</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Dancing lessons while not studying with us</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Buses or taxis for Wednesday activities</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Entrance fee for museums, Teleferico de Quito, etc.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Cost of ingredients for cooking party which you will share with participants</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Weekend activities which are at cost</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Books for levels you are not studying or which you will not study with uss</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Daily transportation organized by the school if students require</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Transfer back to the airport after the program with us </p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <hr>
        <h3>Accommodation with Host Family </h3>

        <div class="row">
            <div class="col-md-6">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>
                                <h4 class="line-left">Included</h4>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                               <p>Accommodation</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <p>Laundry services</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <p>Meals (according to service package)</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <p>Drinking water</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <p>Linens, blankets and towels</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <p>Extra blankets</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <p>Wi-Fi/internet access</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <p>A nice and friendly environment</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><div class="col-md-6" style="vertical-align: top;">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>
                                <h4 class="line-left">Not included</h4>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>Transportation to and from the school</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Lunch</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

       <hr>
        <h3>Accommodation in The Student Residence</h3>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>
                                <h4 class="line-left">
                                    Included
                                </h4>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                               <p>Accommodation</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <p>Laundry services</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <p>Meals (according to service package)</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <p>Drinking water</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <p>Linens, blankets and towels</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <p>Extra blankets</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <p>Wi-Fi/internet access</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               <p>A nice and friendly environment</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><div class="col-md-6" style="vertical-align: top;">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>
                                <h4 class="line-left">
                                    Not included
                                </h4>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <p>Transportation to and from the school</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Lunch and dinner</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

        <hr/>
</div>








@endsection
