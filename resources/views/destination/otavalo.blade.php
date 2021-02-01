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
    <li class="breadcrumb-item" aria-current="page">{{ __('breadcrumb.item-3-2') }}</li>
  </ol>
</nav>


<h1>
    {{ __('destinations.otavalo.title') }}
</h1>
<div class="info-list">

    @include('gallery', ['gallery' => $article->gallery('indigenous-town-otavalo')])

    <p>
        Otavalo is a relatively clean and safe Andean town about 2 hours north of Quito. The climate in Otavalo is quite consistent, with daily temperatures generally ranging between 72 and 45 degrees F (22 and 7 degrees C), and, other than in April when short rains may occur at times, most days are sunny and pleasant.
    </p>
    <p>
        Being surrounded by 3 tall, cloud-wrapped volcanoes, Otavalo boasts 360 degree beautiful landscapes and is a perfect location if you want to learn both Spanish and about Ecuadorian indigenous civilization.  Its famous for its artisan crafts, textiles, and its majority indigenous people, whose culture permeates the town and its society.
    </p>
    <p>
        Otavaleños pride themselves on their heritage and artistic talents.  Their town, Otavalo, is friendly and cozy, and is famous for its Saturday market, which is one of the biggest and best indigenous markets in Central and South America. You can buy anything from locally-made handicrafts to traditional indigenous outfits.
    </p>

    @include('gallery', ['gallery' => $article->gallery('indigenous-town-otavalo'), 'position'=>'right', 'thumbail' => '2'])

    <p>
        Otavalo wins people over with its many opportunities for activities and excursions. For dining, Otavalo boasts innumerable restaurants, cafes, and coffee shops catering to a wide variety of tastes (Vegetarian and Vegan, as well as Italian, Mexican, American, Spanish, Cajun and Creole, seafood, pizza, as well as Caribbean and various South American and fusion restaurants and dishes).
    </p>
    <p>
        If you're tired of visiting "just another big-city", then you'll find Otavalo and its multi-colored sidewalks and its many mural-covered buildings and walls to be an educational and refreshing change. Our Spanish School in Otavalo is located in the heart of the city, just a block from the main indigenous market.
    </p>
</div>

<div id="list-example" class="list-group dq-list-scroll">
	<a class="list-group-item list-group-item-action " href="#Our-Spanish-Institute-in-Otavalo">
        <i class="glyphicon glyphicon-stop" ></i>
        Our Spanish Institute in Otavalo
    </a>
	<a class="list-group-item list-group-item-action " href="#Our-Spanish-Courses-In-Otavalo">
        <i class="glyphicon glyphicon-stop" ></i>
        Our Spanish Courses In Otavalo
    </a>
	<a class="list-group-item list-group-item-action " href="#Accommodation-in-Otavalo">
        <i class="glyphicon glyphicon-stop" ></i>
        Accommodation in Otavalo
    </a>
	<a class="list-group-item list-group-item-action " href="#Activities-with-us-in-Otavalo">
        <i class="glyphicon glyphicon-stop" ></i>
        Activities with us in Otavalo
    </a>
	<a class="list-group-item list-group-item-action " href="#Recommended-Clothes-and-Equipment">
        <i class="glyphicon glyphicon-stop" ></i>
        Recommended Clothes and Equipment
    </a>
	<a class="list-group-item list-group-item-action " href="#How-To-Get-To-Otavalo">
        <i class="glyphicon glyphicon-stop" ></i>
        How To Get To Otavalo
    </a>
	<a class="list-group-item list-group-item-action " href="#Included-Not-Included">
        <i class="glyphicon glyphicon-stop" ></i>
        Included / Not Included
    </a>

</div>
<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example dq-ise-scroll">

	<div id="Our-Spanish-Institute-in-Otavalo">
		<h2>Our Spanish Institute in Otavalo</h2>
		@include('gallery', ['gallery' => $article->gallery('our-spanish-institute-otavalo')])

		<p>
			ISE Otavalo was founded in 1994 and it is located in the heart of Otavalo, just a 1 minute walk from Otavalo's famous craft market, Plaza de Ponchos.
		</p>
		<p>
			We pride ourselves on putting our strongest efforts towards accommodating every student's particular needs, addressing any issue or personal request immediately. Our school offers comfortable classrooms and cozy common areas that include a small living room with a large map of Otavalo, a fully equipped kitchen, and bathrooms. We also offer our students fresh-brewed coffee, break-time snacks, and complementary Wi-Fi throughout the property.
		</p>
		<p>
			The school is located within walking distance of banks, grocery stores, the Otavalo market, a host of eateries, as well as indigenous factories and shops. Safety is not a concern since the city is smaller and people tend to be very friendly and helpful. Your accommodation will be within a 10-15 minute walk from the school or 5 minutes in a taxi cab.
		</p>
	</div>

	<hr/>

	<div id="Our-Spanish-Courses-In-Otavalo">
		<h2> Our Spanish Courses In Otavalo </h2>

		@include('gallery', ['gallery' => $article->gallery('our-spanish-courses-otavalo')])

		<p>
			<strong>Your first day in school</strong> will begin at 08:15 am with a placement test. Beginners are not required to take a placement test and will start classes right away. Your class schedule will be the same every day from Monday to Friday.
		</p>
		<p>
			Students may choose between <strong>individual, semi-private, group,</strong> and <strong>combination </strong>Spanish courses. We offer Spanish classes for every level, and the teaching method focuses on the development of speaking, listening and writing skills. Our program combines verbal and written exercises with conversation and vocabulary practice. Your learning progress will be reported at the end of every week, so that we can ensure that your classes are perfectly organized and well-prepared.
		</p>
	</div>

	<hr/>

	<div id="Accommodation-in-Otavalo">

		<h2> Accommodation in Otavalo </h2>
		<ul class="list-sub">
			<li>
				<h3>
					Accommodation with a Host Family in Otavalo
				</h3>
				<div class="info-list">

					@include('gallery', ['gallery' => $article->gallery('accommodation-host-family-otavalo')])

					<p>
						Living with a host family will give you insight into the Ecuadorian lifestyle and will rapidly improve your Spanish. All of the host families live within a 10-15 minute walk or 5 minutes by bus or taxi from the ISE facilities. Staying with local families is the perfect way to accelerate your learning process as you will hear and learn Spanish as its spoken in everyday life outside of class with your host family.
					</p>
					<p>
						You can also get to know the culture and traditions of Otavalo, having the opportunity either to remain fairly separate and independent or to share everyday activities and celebrations with your host family who will welcome you as a cared-for family member.
					</p>
					<p>
						Because meals are an important part of the Otavalo culture, you will share up to three meals per day with your family. The Otavalo host families always give their guests a warm welcome and they truly enjoy the opportunity to share Ecuadorian life and culture with someone from a different country.
					</p>
				</div>
			</li>
			<li>
				<h3>
					Accommodation at a Hostel/Hotel in Otavalo
				</h3>
				<div class="info-list">

					@include('gallery', ['gallery' => $article->gallery('accommodation-hotel-otavalo')])

					<p>
						If you prefer to stay in a hostel or hotel, we are happy to offer suggestions or help you make arrangements in Otavalo. All of those accommodations will be located within a two to ten minute walk from the Spanish Institute.
					</p>
					<p>
						Our recommended locations are offered at a variety of prices but all offer comfortable rooms in single, double and dorm rooms, as well as common areas, professional and friendly staff, hot water, private bathrooms, and complementary Wi-Fi throughout the properties.
					</p>
				</div>
			</li>
		</ul>
	</div>

	<hr/>

	<div id="Activities-with-us-in-Otavalo">
		<h2>Activities with us in Otavalo</h2>
		<ul class="list-sub">
			<li>
				<h3>Museo Viviente</h3>
				<div class="info-list">

					@include('gallery', ['gallery' => $article->gallery('museo-viviente')])

					<p>
					   Museo Viviente is a delightful museum which is located within a one minute walk from downtown Otavalo. In 2011, a group of 22 Otavalo families became the first indigenous owners of La Fabrica San Pedro which used to be a textile factory that operated for approximately 200 years by exploited indigenous labor.
					</p>
					<p>
						Today, the factory has been reclaimed as a living museum and community space, where visitors can learn about the indigenous culture in the past and the present, while watching Kichwa craftspeople make woven goods and farm.
					</p>
					<p>
						Over the last six years, these families have taken great pride in developing a museum to share, preserve, rescue, and celebrate their culture. Instead of showcasing old artifacts, the Museo Viviente—the Living Museum—showcases traditional games, dances, and love stories with everyone who comes, serving as a community center as much as a museum.
					</p>
				</div>
			</li>
			<li>
				<h3>Plaza de Ponchos</h3>
				<div class="info-list">

					@include('gallery', ['gallery' => $article->gallery('plaza-ponchos')])

					<p>
					   Located a block from Otavalo’s City Hall, this market attracts hundreds of locals and visitors every week.  Although the market operates every day, Saturday is the main event day when street after street are packed with visitors and the market becomes the main event in town.
					</p>
					<p>
						There is a wide range of wool goods such as blankets, ponchos, sweaters and hats, as well as traditionally-embroidered blouses, hammocks, musical instruments, wooden and stone carvings, jewelry, leather goods, and paintings. Bargaining is expected, don’t be shy!
					</p>
				</div>
			</li>
			<li>
				<h3>Mojanda Lagoon</h3>
				<div class="info-list">

					@include('gallery', ['gallery' => $article->gallery('mojanda')])

					<p>
					   Parque Mojanda is an inactive composite volcano located in the east of the Andes range in northern Ecuador. 200,000 years ago, a crater and three crater lakes were formed after an eruption that marked the end of volcanic activity in the area.
					</p>
					<p>
						The three lakes include Karikucha, the largest, Yanakucha, and Warmikucha. This lake complex is now a popular tourist destination, and it is located about 20 minutes from Otavalo.
					</p>
					<p>
						Mojanda also contains two inactive volcanoes whose volcanic vents are only 3 km apart. A third volcano, which erupted at least twice and partially collapsed around 165,000 years ago, is known Fuya Fuya. The collapse of Fuya Fuya created a large crater to the west. Fuya Fuya is 4,263 meters above sea level, and it is possible to ascend the volcano without much difficulty. Mojanda offers a beautiful view of the highlands vegetation and the mountain range around it.
					</p>
				</div>
			</li>
			<li>
				<h3>Peguche Falls</h3>
				<div class="info-list">

					@include('gallery', ['gallery' => $article->gallery('peguche-falls')])

					<p>
					   The Peguche waterfall is considered a sacred place for the Otavalo indigenous people. Otavaleños have a close relationship with water, mountains, and certain trees. Peguche Falls is a beautiful, 18 meter high waterfall located in a small, quiet park about 3 km north of Otavalo.
					</p>
					<p>
						There are several access paths that lead to the waterfall. The surroundings are lush green where centennial trees offer a cool shade throughout the main path. Solstice celebrations take place at the falls around the June 21st.
					</p>
				</div>
			</li>
			<li>
				<h3>Cooking Party</h3>

				<div class="info-list">

					@include('gallery', ['gallery' => $article->gallery('cooking-party')])

					<p>
					   ISE organizes cooking classes, where you will learn to cook traditional Ecuadorian food. During this activity, you will have the opportunity to share a meal with fellow students and teachers and to learn more about Otavalo and Ecuadoran food and culture.
					</p>
				</div>
			</li>
		</ul>
	</div>

	<hr/>

	<div id="Recommended-Clothes-and-Equipment">
		<h2>Recommended Clothes and Equipment</h2>

		@include('gallery', ['gallery' => $article->gallery('recommended-clothes-equipment')])

		<p>
			For most activities you will need comfortable shoes, long pants, a comfortable shirt, and a jacket. Weather may be unpredictable, so taking a sweatshirt or jacket with you on your trip is a good idea. We also recommend bringing sunscreen, bug spray and a hat.
		</p>

	</div>

	<hr/>

	<div id="How-To-Get-To-Otavalo">
		<h2>How To Get To Otavalo</h2>
		@include('gallery', ['gallery' => $article->gallery('how-to-get-to-otavalo')])

		<p>
			Otavalo is located just 2 hours by car or by public bus from Quito. There are several buses that leave from the Carcelen Bus Station in Northern Quito every hour. You can either take a taxi, one of the blue buses, Metrobus or TroleBus, to get to the Carcelen terminal to go to Otavalo. The ticket price is approximately $3.00. Once you arrive, from the terminal in Otavalo you can take a taxi or walk to your accommodation.
		</p>
		<p>
			If you would like, we would be more than happy to help organize your transfer from Quito to Otavalo. If students book their course for Otavalo only, we can pick them up at the airport in Quito:
		</p>

		@include('gallery', ['gallery' => $article->gallery('how-to-get-to-otavalo'), 'position'=>'right', 'thumbail' => '2'])


		<ul>
			<li>
				<p>
					If students arrive in Quito up to 4:00pm (during the day), we will organize their transportation (free of charge) from Quito to Otavalo within the same day.
				</p>
			</li>
			<li>
				<p>
					If students arrive in Quito after 4:00pm, transportation from Quito to Otavalo will be organized for the next morning. In this case, students will sleep in Quito in a hotel, hostel or at an Ecuadorian family's house during the first night and will be taken to Otavalo the next morning.
				</p>
			</li>
			<li>
				<p>
					If the students decide to study in Quito first and go to Otavalo afterwards, we will organize their transportation from Quito to Otavalo in advance.
				</p>
			</li>
		</ul>
	</div>

	<hr/>

	<div id="Included-Not-Included">
		<h2>Included / Not Included</h2>

		<h3>ISE Classes</h3>
		<hr>
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
								<p>Airport transfer in Quito and transfer to Otavalo</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Welcome pack, which includes book and notebook for Spanish classes</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Transfer to and from Otavalo if students choose to take courses at multiple locations</p>
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
								<p>Wednesday trip to visit a place of interest in Otavalo as the Peguche Waterfall, Parque del condor, Cuicocha lake, etc.</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Assistance to look for discounts for restaurants, hostels &#38 hotels and trips to the mountains, Amazon jungle, or the Galapagos Islands</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Volunteer or internship placement in a social or environmental organization or rescue center. We have projects in Otavalo and across Ecuador including in the amazing Galapagos Islands</p>
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
								<p>Dancing lessons are not offered in Otavalo</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Buses or taxis for activities</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Entrance fees for museums, Parque del Condor, etc</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Cost of ingredients for cooking party (you will share the cost with all participants)</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Weekend activities which are at cost</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Books for levels you are not studying or for which you will not study with us</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Daily transportation to and from the school if students require</p>
							</td>
						</tr>
						<tr>
							<td>
								<p>Transfer back to the airport after the program with us</p>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>



		<h3>Accommodation with Host Family </h3>
		<hr>
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
							   <p>Meals (according to service package). Full board = 3 meals per day / Half board = breakfast and dinner</p>
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
    <h3>Book Spanish Lessons in Otavalo</h3>
    <p class="text-center" style="font-size: 17px;">
        ONE WEEK FROM US$139
    </p>
    <a href="/learn-spanish-booking.html" class="btn btn-primary w-100"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> BOOK NOW</a>
</div>


@endsection
