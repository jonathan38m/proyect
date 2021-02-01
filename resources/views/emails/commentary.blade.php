<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<img src="https://www.superiorspanishschool.com/images/logo.jpg" alt="Instituto Superior de Espanol">

	<p>
		@switch($saludation)
		    @case(1)
		        Mr. {{ $lName }} {{ $fName }} | {{ $nacionality }}
		        @break

		    @case(2)
		        Mrs. {{ $lName }} {{ $fName }}  | {{ $nacionality }}
		        @break

		    @case(2)
		        Ms. {{ $lName }} {{ $fName }}  | {{ $nacionality }}
		        @break

		    @default
		        Dear {{ $lName }} {{ $fName }}  | {{ $nacionality }}
		@endswitch
	</p>
	
	<p><strong>Email address:</strong> {!! $email !!}</p>
	<p><strong>Progrma:</strong> 
		@if(isset($program1) && $program1 == 1)
			Quito 
		@endif

		@if(isset($program2) && $program2 == 1)
			Otavalo 
		@endif

		@if(isset($program3) && $program3 == 1)
			Amazon Jungle 
		@endif

		@if(isset($program4) && $program4 == 1)
			Indigenous Community 
		@endif

		@if(isset($program5) && $program5 == 1)
			Galapagos Islands 
		@endif

		@if(isset($program6) && $program6 == 1)
			Travelling Classroom
		@endif
	</p>
	<p>
		<strong>Period of Learning</strong><br>
		{{ $from }} - {{ $to }}
	</p>

	@if(isset($volunteer))

		<p>
			<strong>Did you participate in a Volunteer or Internship Program?</strong><br>
			@switch($volunteer)
			    @case(1)
			        Nes
			        @break
			    @case(2)
			        No
			        @break
			    @default
			        Yes
			@endswitch
		</p>

	@endif


	@if(isset($hVolunteer))

		<p>
			<strong>How did you like your participation in the Volunteer or Internship Program?</strong><br>
			@switch($hVolunteer)
			    @case(1)
			        Excellent
			        @break
			    @case(2)
			        Good
			        @break
			    @case(3)
			        Terrible
			        @break
			    @case(4)
			        Poor
			        @break
			    @case(5)
			        Does Not Apply
			        @break
			    @default
			        Does Not Apply
			@endswitch
		</p>

	@endif
	

	

	<h2>Information & Service</h2>

	<p>
		<strong>Communication with the Institute before arriving</strong><br>
		@switch($info1)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>
	<p>
		<strong>Timing in receiving Information & Answers</strong><br>
		@switch($info2)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>
	<p>
		<strong>Information Quality</strong><br>
		@switch($info3)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>
	<p>
		<strong>Was the information received relevant on your decision to study with us?</strong><br>
		@switch($info4)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>
	<p>
		<strong>Complimentary Airport Pickup</strong><br>
		@switch($info5)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>
	<p>
		<strong>Support while in the Program</strong><br>
		@switch($info6)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>
	<p>
		<strong>Institute's equipment. i.e. furniture.</strong><br>
		@switch($info7)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>
	<p>
		<strong>Focus on students' needs</strong><br>
		@switch($info8)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>

    <h2> Trachers & Lessons </h2>

    <h3>Teacher's Name #1</h3>
	<p>
		<strong>Teacher's Name: </strong><br>
		{{ $teacher1 }}
	</p>
    
	<p>
		<strong>My teacher is well-prepared and organised</strong><br>
		@switch($info1T1)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>
    
	<p>
		<strong>My teacher speaks clearly</strong><br>
		@switch($info2T1)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>
    
	<p>
		<strong>I feel ok about asking questions</strong><br>
		@switch($info3T1)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>
    
	<p>
		<strong> How satisfied are you with the language level? </strong><br>
		@switch($info4T1)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>

    
    
    @if(isset($teacher2))

    	<h3>Teacher's Name #2</h3>

    	<p>
    		<strong>Teacher's Name: </strong><br>
    		{{ $teacher2 }}
    	</p>

    	<p>
			<strong>My teacher is well-prepared and organised</strong><br>
			@switch($info1T2)
			    @case(1)
			        Excellent
			        @break
			    @case(2)
			        Good
			        @break
			    @case(3)
			        Terrible
			        @break
			    @case(4)
			        Poor
			        @break
			    @case(5)
			        Does Not Apply
			        @break
			    @default
			        Does Not Apply
			@endswitch
		</p>
	    
		<p>
			<strong>My teacher speaks clearly</strong><br>
			@switch($info2T2)
			    @case(1)
			        Excellent
			        @break
			    @case(2)
			        Good
			        @break
			    @case(3)
			        Terrible
			        @break
			    @case(4)
			        Poor
			        @break
			    @case(5)
			        Does Not Apply
			        @break
			    @default
			        Does Not Apply
			@endswitch
		</p>
	    
		<p>
			<strong>I feel ok about asking questions</strong><br>
			@switch($info3T2)
			    @case(1)
			        Excellent
			        @break
			    @case(2)
			        Good
			        @break
			    @case(3)
			        Terrible
			        @break
			    @case(4)
			        Poor
			        @break
			    @case(5)
			        Does Not Apply
			        @break
			    @default
			        Does Not Apply
			@endswitch
		</p>
	    
		<p>
			<strong> How satisfied are you with the language level? </strong><br>
			@switch($info4T2)
			    @case(1)
			        Excellent
			        @break
			    @case(2)
			        Good
			        @break
			    @case(3)
			        Terrible
			        @break
			    @case(4)
			        Poor
			        @break
			    @case(5)
			        Does Not Apply
			        @break
			    @default
			        Does Not Apply
			@endswitch
		</p>

    @endif

    @if(isset($teacher3))


	    <h3>Teacher's Name 3</h3>

    	<p>
    		<strong>Teacher's Name: </strong><br>
    		{{ $teacher3 }}
    	</p>
	    
		<p>
			<strong>My teacher is well-prepared and organised</strong><br>
			@switch($info1T3)
			    @case(1)
			        Excellent
			        @break
			    @case(2)
			        Good
			        @break
			    @case(3)
			        Terrible
			        @break
			    @case(4)
			        Poor
			        @break
			    @case(5)
			        Does Not Apply
			        @break
			    @default
			        Does Not Apply
			@endswitch
		</p>
	    
		<p>
			<strong>My teacher speaks clearly</strong><br>
			@switch($info2T3)
			    @case(1)
			        Excellent
			        @break
			    @case(2)
			        Good
			        @break
			    @case(3)
			        Terrible
			        @break
			    @case(4)
			        Poor
			        @break
			    @case(5)
			        Does Not Apply
			        @break
			    @default
			        Does Not Apply
			@endswitch
		</p>
	    
		<p>
			<strong>I feel ok about asking questions</strong><br>
			@switch($info3T3)
			    @case(1)
			        Excellent
			        @break
			    @case(2)
			        Good
			        @break
			    @case(3)
			        Terrible
			        @break
			    @case(4)
			        Poor
			        @break
			    @case(5)
			        Does Not Apply
			        @break
			    @default
			        Does Not Apply
			@endswitch
		</p>
	    
		<p>
			<strong> How satisfied are you with the language level? </strong><br>
			@switch($info4T3)
			    @case(1)
			        Excellent
			        @break
			    @case(2)
			        Good
			        @break
			    @case(3)
			        Terrible
			        @break
			    @case(4)
			        Poor
			        @break
			    @case(5)
			        Does Not Apply
			        @break
			    @default
			        Does Not Apply
			@endswitch
		</p>


    @endif

	<h2>Accommodattion With host family or Student Residence</h2>
    
	<p>
		<strong> Location & reachability </strong><br>
		@switch($accommodattion1)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>    
	<p>
		<strong> Size & furnishing of your room </strong><br>
		@switch($accommodattion2)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>
	<p>
		<strong> Food and beverage </strong><br>
		@switch($accommodattion3)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>
	<p>
		<strong> Atmosphere & living together </strong><br>
		@switch($accommodattion4)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>
	<p>
		<strong> Price-performance ratio </strong><br>
		@switch($accommodattion5)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>

    <h2> Activities </h2>

	<p>
		<strong> Variation of activities </strong><br>
		@switch($activities1)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>
	<p>
		<strong> Organization of activities </strong><br>
		@switch($activities2)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>
	<p>
		<strong> Prices of activities </strong><br>
		@switch($activities3)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>
	<p>
		<strong> Weekend excursions </strong><br>
		@switch($activities4)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>


    <h2> Overall Experience </h2>


	<p>
		<strong> Please rate your overall experience </strong><br>
		@switch($overall1)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>
	<p>
		<strong> Your previous expectation about the service to be provided by the Institute </strong><br>
		@switch($overall2)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>
	<p>
		<strong> Your current opinion about the service provided by the Institute </strong><br>
		@switch($overall3)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>
	<p>
		<strong> Your current opinion about the safety of the country </strong><br>
		@switch($overall4)
		    @case(1)
		        Excellent
		        @break
		    @case(2)
		        Good
		        @break
		    @case(3)
		        Terrible
		        @break
		    @case(4)
		        Poor
		        @break
		    @case(5)
		        Does Not Apply
		        @break
		    @default
		        Does Not Apply
		@endswitch
	</p>
  
    <h2> Your Opinion </h2>


	<p>
		<strong> FeedBack Title </strong><br>
		{{ $feedbackT }}
	</p>
	<p>
		<strong>  Comment (Minimum 500 characters!) </strong><br>
		{{ $comment }}
	</p>
	<p>
		<strong>  Compliments </strong><br>
		{{ $compliments }}
	</p>
	<p>
		<strong>  What did you find particularly positive during your stay at the Instituto Superior de Español? </strong><br>
		{{ $find }}
	</p>
	<p>
		<strong>  Critiques </strong><br>
		{{ $critiques }}
	</p>
	<p>
		<strong>  What did you feel was missing? What do you think could be improved or changed? </strong><br>
		{{ $feel }}
	</p>
	<p>
		<strong>  How likely is that you recommend the School? </strong><br>
		{{ $feedbackT }}
	</p>
	<p>
		<strong>  Can we publish your comment? </strong><br>
		@switch($publish)
		    @case(1)
		        Yes
		        @break
		    @case(2)
		        Yes
		        @break
		    @default
		        No
		@endswitch
	</p>
	<p>
		<strong> Can we publish your picture to go with your comment? </strong><br>
		@switch($picture)
		    @case(1)
		        Yes
		        @break
		    @case(2)
		        Yes
		        @break
		    @default
		        No
		@endswitch
	</p>

	<h2>
		Meanwhile we invite you to follow our Social Networks:
	</h2>
	<p>
		<strong>Facebook:</strong>
		<a href="https://www.facebook.com/institutosuperiordeespanol1/">institutosuperiordeespanol1</a>
	</p>
	<p>
		<strong>Instagram:</strong>
		<a href="https://www.instagram.com/institutosuperiordeespanol/">institutosuperiordeespanol</a>
	</p>
	<p>
		<strong>TripAdvisor:</strong>
		<a href="https://www.tripadvisor.com/Attraction_Review-g294308-d10085877-Reviews-ISE_Instituto_Superior_de_Espanol-Quito_Pichincha_Province.html">ISE Instituto Superior de Espanol</a>
	</p>
	<p>
		<strong>YouTube:</strong>
		<a href="https://www.youtube.com/channel/UC1-Vo-8UEBxAnOTgSY_x9pQ">Learn Spanish in Ecuador at Instituto Superior</a>
	</p>



</body>
</html>