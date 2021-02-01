@extends('interna')
@section('title') {{ $article->title }} @endsection
@section('description') {{ $article->description }} @endsection
@section('keywords') {{ $article->keywords }} @endsection
@section('index-7') class="active" @endsection

@section('content-interna')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('breadcrumb.item-1') }}</a></li>
      <li class="breadcrumb-item active" aria-current="page">{{ __('breadcrumb.item-7') }}</li>
  </ol>
</nav>


<h1>
    FAQs
</h1>

<div id="list-example" class="list-group dq-list-scroll">
	<a class="list-group-item list-group-item-action " href="#Lessons">
		<i class="glyphicon glyphicon-stop" ></i>
		Lessons
	</a>
	<a class="list-group-item list-group-item-action " href="#Our-School-Locations">
		<i class="glyphicon glyphicon-stop" ></i>
		Our School Locations
	</a>
	<a class="list-group-item list-group-item-action " href="#Our-Students">
		<i class="glyphicon glyphicon-stop" ></i>
		Our Students
	</a>
	<a class="list-group-item list-group-item-action " href="#Accommodation">
		<i class="glyphicon glyphicon-stop" ></i>
		Accommodation
	</a>
	<a class="list-group-item list-group-item-action " href="#Administrative-Issues">
		<i class="glyphicon glyphicon-stop" ></i>
		Administrative Issues
	</a>

</div>




<div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example dq-ise-scroll">
	<div id="Lessons">
		<h2>Lessons</h2>
		<p>
			<strong>How long should I study Spanish?</strong><strong><u> </u></strong> <br />
			The time a student can to study will depend on their goal and their  motivation to how fast and how well they will like to learn Spanish. Our  courses have a minimum time period of one week, and can extend to eight or more  weeks. If a student wants to learn Spanish for travelling through Latin  America, we recommend 1 to 6 weeks, depending on the student&rsquo;s prior knowledge  and their agility to learn. This is considered as sufficient time to feel  comfortable and handle daily life situations while travelling.
		</p>
		<p>If your goal is to study at the University, work in a Spanish speaking  country, or become a fluent speaker, you will need to study Spanish for a  longer period of time. We can help you decide the right amount of time to study  Spanish after we have reviewed your placement.
		</p>
		<p>
			<strong>Should I take Group Classes, Private Course, Semi-Private Course or  Combined Lessons?</strong> <br />
			Generally, we recommend group classes but for beginners or students in  courses of 1-2 weeks we recommend to start with private course before to join  group classes. Individual lessons accelerate the learning process, and help  both students and teachers to find a more effective way to speed the process,  as teachers will have the opportunity to focus on the student and find their  strengths and weaknesses.
		</p>
		<p>
			<strong>Do I need to have previous experience with Spanish?</strong><strong><u> </u></strong> <br />
			No, you don&rsquo;t have to know  any Spanish to start with our absolute beginner&rsquo;s level. Our teachers are  carefully trained to teach Spanish as a second language, to students who have  never had exposure to the language before. <br />
			<strong>Do the teachers speak English? </strong> <br />
			Most of our Spanish teachers speak English and another second foreign  language, but normally it is not necessary. The lessons are all held completely  in Spanish, in order to accelerate the learning process. A few times English is  spoken only if necessary.
		</p>
		<p>
			<strong>What can I expect in a Group Class? </strong> <br />
			The most popular courses are our group classes with 4 hours per day,  from Monday to Friday with 20 hours per week, but several of our Spanish  students also decide to go for combined and private course with 20, 25, 30 or  35 hours per week.
		</p>
		<p>
			Group classes have maximum 6 students; however a smaller group may work  better. Groups with up to 6 students are ideal to work together, develop  solutions, and benefit from other&rsquo;s mistakes and insights, as well as getting  enough personal attention from your teacher.
		</p>
		<p>
			If you feel that you may want more one-on-one time with your teacher,  perhaps a combination course would be ideal for you. The combination course  offers group course time plus private lessons.
		</p>
		<p>
			<strong>What is a placement test? </strong> <br />
			If you are an absolute beginner you do not need a placement test, since  you will be starting at a zero level. The test consists of a small written part  and a multiple choice test, as well as insert tasks. After evaluating the test  you will be allocated into a class with a suitable knowledge level. The levels  are based on the Common European Framework of Reference for Languages. <br />
		  <strong>What should I do if I don&rsquo;t  feel comfortable in the level I have been placed despite placement test in the  class?</strong> <br />
		  If you feel over or under your class level placement, please contact our  office as soon as possible, and we will be glad to place you on a level where  feel comfortable. </p>
		<p><strong>Does the School offer any additional activities? </strong> <br />
		  ISE offers a few  recreational and complementary activities, such as Cooking classes and Salsa  lessons. &nbsp;Because ISE wants you to get the most of your time in Ecuador,  there are cultural activities or visits to museums that are also planned. <br />
		  <strong>How long does each lesson last?</strong> <br />
		  Each class lasts 55 minutes  whether you choose to have classes in the morning or in the afternoon. Usually  classes take place for 4-7 hours at a time, so we can combine them with  activities listed on the program you choose. </p>

	</div>
	<div id="Our-School-Locations">
		<h2>Our School Locations</h2>
		<p><strong>Is the continuity of  teaching ensured if I take lessons in different locations? </strong> <br />
		  Yes, continuity is guaranteed! Our teachers get a report from each  student and their learning process before they start class with another teacher  or location. Our programs are all coordinated by our Academic Director, Eugenio  Cordova. All of our teachers follow the same teaching methods to facilitate the  learning process. </p>
		<p><strong>How long before I can make changes in my studying plans? Can I change  plans during my stay in Ecuador? </strong> <br />
		  Yes, it is always possible to change the location or the program you  originally chose. We need one week&rsquo;s notice to change locations within the  mainland, and at least two weeks&rsquo; notice for the Amazon Jungle and the Galapagos  Islands. </p>
		<p><strong>I will not be studying in Quito. Who will be my contact? </strong> <br />
		  The Instituto Superior de Español main administrative office is located  in Quito. This central location makes it easy to coordinate activities and  offer a better service. Our Director, Eugenio Cordova has an organized calendar  and is concentrated in each location, of course in case of necessary he may be  contacted at 099 4 991 790 or by e-mail to info@superiorspanishschool.com </p>
	</div>
	<div id="Our-Students">
		<h2>Our Students</h2>
		<p><strong>How old are students in general? </strong> <br />
		  The average age of our students varies a lot. We have had students from  ages 4 to 80 or more! The majority of students range from 18 to 65 years (25%  from 18 to 24 years old + 50% from 25 to 55 years old + 25% above 55 years  old), but there is no reason not to learn Spanish if you do not fit into this  age bracket! </p>
		<p><strong>Are there more women or men studying Spanish? </strong> <br />
		  Normally the rate of men and women at our school is pretty even,  although this varies. </p>
		<p><strong>How many students are studying at the same time in the School? </strong> <br />
		  Depending on the season the number of students varies. On average, we  have approximately 35 students studying in the morning and 20 students in the  afternoon. Please note that 65% of our Spanish students are studying with us in  Quito. Studying time depends on the preference of the student. </p>
		<p><strong>How many teachers work at the School? </strong> <br />
		  We have 20 teachers at the Instituto Superior de Español, and they all  hold university degrees and are well experienced in teaching Spanish. </p>
		<p><strong>Where are the students from? </strong> <br />
		  We have mostly students  from all over the world i.e. Switzerland, Austria, Germany, Holland, UK, Denmark,  Norway, Sweden, Finland, France, Australia, New Zealand, USA, Canada, Japan,  South Korea, Brazil and a few from other countries </p>

	</div>
	<div id="Accommodation">
		<h2>Accommodation</h2>
		<p><strong>How do you  choose the right family for me? </strong> <br />
		  A home  stay accommodation means living with an Ecuadorian family. This offers you the  opportunity to practice Spanish outside of the School and to get to know more  about the Ecuadorian culture. Our families are middle class and very keen to welcome  students into their homes and involve them in everyday life activities. We try  to make a perfect match, but if we need make changes, we will be happy to make  any necessary. We want you to be happy and your experience to be comfortable! </p>
		<p><strong>When will  I get my host family&rsquo;s phone number and information? </strong> <br />
		  Instituto  Superior de Español will send you contact information, addresses, phone  numbers, and personal details about your family maximum 72 hours after you send  us the filled Enrollment form. We will organize everything for you and will  send you our complete confirmation together with that information. </p>
		<p><strong>May I stay  with my partner in a home stay? </strong> <br />
		  Yes, if  you want to stay with your partner it is no problem. Please inform us by  filling in the &ldquo;additional other comments&rdquo; box on the online registration form. </p>
		<p><strong>May I book  my own accommodation? </strong> <br />
		  If you  prefer to stay at a hotel or a hostel, please feel free to do so. If you need  help or suggestions for a good hotel/hostel close to the school, please do not  hesitate to ask. </p>
		<p><strong>Does the  family house offer Internet? </strong> <br />
		  All of the accommodations ISE works with, offer complimentary Wi-Fi. </p>
	</div>
	<div id="Administrative-Issues">
		<h2>Administrative Issues</h2>
		<p><strong>What can I do if I have problems with my class or accommodation  arrangements? &nbsp;</strong> <br />
		  If you have any problems with the language course or at the property  where you are staying, please inform us immediately. Don&rsquo;t be shy and ask for  help solving your problem. ISE is  very concerned about the welfare of their students, and will always try to find  a quick and efficient solution to any problem. </p>
		<p><strong>What is  the currency in Ecuador? </strong> <br />
		  In the  year 2000 Ecuador adopted the US Dollar. This makes it easier for students to  exchange, withdraw and spend money in Ecuador. </p>
		<p><strong>How do I  pay for classes? Which forms of payment are accepted? </strong> <br />
		  Once  confirmed your complete program, you can send your payment to the Instituto  Superior de Español through a bank transfer, PayPal (by PayPal you can pay by  credit card) or upon your arrival. We accept US dollars only. ISE is located  near many ATM&rsquo;s machines and banks in case that you are not travelling with the  necessary amount in cash. Please note that once in Ecuador we only accept US $  cash. </p>
		<p><strong>Do I have  to stay with the host family for a specific time? </strong> <br />
		  No, you  may stay with your host family before and after your time at ISE. Additional  days will be accounted on a daily basis to keep try track of your entire stay. </p>
		<p><strong>May I be  picked up at the airport free of charge if I arrive a few days prior starting  with the Spanish course?</strong></p>
		<p>Yes, for  us is very important to pick our Spanish students upon arrival in Ecuador, so  we could have a simple conversation just to know how much Spanish you already  speak or if you are able to communicate some in Spanish. Please don&rsquo;t worry if  you will arrive in Quito a few or several days before starting with the Spanish  course. We will be on time at the airport and will take you to your  accommodation in the city. </p>
		<p><strong>Will I be  picked up at the airport if arriving at night, late at night or very early in  the morning?</strong></p>
		<p>Yes, in  order to not have much time driving and to avoid traffic for us is perfect when  students arrive in Quito at night or late at night or early in the morning but  if you are not able to organize your flight ticket to arrive at night, we will  be also happy to pick you up at the airport during the day at any day of the  week. </p>
		<p><strong>When do  language classes start? </strong> <br />
		  Our  language classes start every day of the week, but generally we prefer new  students for group classes start school on Mondays. This makes it easier to  coordinate programs and place you to start in a right group according your  level of Spanish. </p>
		<p><strong>How do I  register for classes at ISE and when is the deadline to register? </strong> <br />
		  To apply,  you only need to fill in the online registration form. Registering is possible  until the day before your classes start, but we would appreciate if you  register sooner to speed up the administration work. </p>
		<p><strong>Do I  receive a certificate of my studies?</strong> <br />
		  Yes! Every  student gets a certificate which includes the duration of study and level accomplished,  according to the Common European Framework of Reference for Languages. </p>
		<p><strong>Can ISE  help me with further travel plans? </strong> <br />
		  Yes, we  will be happy to help you plan your travels through Ecuador and South America.  We can do this before or after classes start. During your stay we offer weekend  trips, and we can always help you arrange other excursions. We have many  suggestions for what to do with your time in Ecuador! </p>
		<p><strong>Does the  School offer Internet access? </strong> <br />
		  Yes, our  schools in Quito, Otavalo and Galapagos Islands offer students complimentary  and unlimited Internet access. In our Travelling Classroom programs, Internet  will be available almost in all accommodations. In some of our other locations,  Internet may only be available at Internet cafes. This usually cost around  $0.30 per hour. Internet cafes are available in nearly every medium-sized city. </p>
		<p><strong>Is the  Amazon Jungle safe? </strong> <br />
		  When  travelling, you should always be aware of your surroundings, especially in  public areas such as the bus and the bus station. In the Amazon eco-lodge  safety boxes are provided for your valuables at the front desk. Generally, the  area our students live in is very safe. In the Amazon, mosquitoes will be your  main concern, so remember to bring your bug repellent! </p>
		<p><strong>What  assistance does the School offer in case of emergency? </strong> <br />
		  We take  care of our students 7 days a week and 24-hours a day, from the time they  arrive to the time they leave! If a problem arises we have a 24-hour emergency  number available. We do ask that all our students acquire external insurance  before travelling to South America. ISE is not responsible for medical or any  other kind of bill in case of an accident or illness. </p>
		<p><strong>I am  travelling alone as a women. What is your advice? </strong> <br />
		  As a  female traveler you do not need to be concerned more than other traveler. Our  school and house families are in safe areas. In addition, we can give you  advice about which areas are not very safe, and where you should not go. For  both men and women, we always recommend taking a taxi cabs after dark. If you  take care, as you would in any new place, you should have no problems. </p>
		<p><strong>How is the climate in the Amazon? </strong> <br />
		  In the Amazon the weather is tropical and the average temperature is  between 27 to 29 degrees Celsius (80 to 84 degrees Fahrenheit). It can rain  unexpectedly and can be very humid. </p>
		<p><strong>What should I bring to my trip to the Amazon? </strong> <br />
		  We recommend that our students wear long pants and bring appropriate  clothes to be protected against mosquitoes, keep them cool, and dry fast. It is  also necessary to bring a light rain jacket. Bug repellent and sunscreen are  absolutely necessary! </p>
		<p><strong>What should I bring to my trip to the highlands? </strong> <br />
		  We recommend that our students wear long pants o jeans, t-shirts are  fine, a sweater and a jacket. Temperatures regularly fluctuate between 12° C  and 23° C and humidity is very low. Because of the geographic position of  Ecuador, the sun tends to be very strong, so it is important that you bring  sunscreen and a hat. We also  recommend insect repellent if you are planning to visit Mindo or another  subtropical place, but you do not need it in Quito. </p>
		<p><strong>What  should I bring to my trip to the Galapagos Islands? </strong> <br />
		  The  Galapagos Islands offer a great combination of activities, so we recommend  bringing comfortable walking shoes, sandals, a bathing suit, light clothes for  a tropical climate, sunblock and insect repellent. If you are thinking of doing  one of our boat programs and get seasick easily, we recommend bringing some  Dramamine or any other medication of your preference. </p>
	</div>
</div>







@endsection
