<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<img src="https://www.superiorspanishschool.com/images/logo.jpg" alt="Instituto Superior de Espanol">
	
	<h2>Basic Information</h2>

	<p> <strong>Lasta Name:</strong> {!! $lastName !!}</p>
	<p> <strong>First Name:</strong> {!! $firstName !!}</p>
	<p> <strong>Email:</strong> {!! $email !!}</p>
	<p> <strong>Birth Date:</strong> {!! $birthDate !!}</p>

	@if (!empty($gender))

		@if ($gender == 1)
    	<p> <strong>Gender:</strong> Male</p>
		@elseif ($gender == 2)
	    	<p> <strong>Gender:</strong> Female</p>
		@else
		    <p> <strong>Gender:</strong> Error</p>
		@endif

	@endif

	
	@isset($nationality)
    	<p> <strong>Nationality:</strong> {!! $nationality !!}</p>
	@endisset

	@if (!empty($telephone) && isset($telephone))
    	<p> <strong>Telephone:</strong> {!! $telephone !!}</p>
	@endif

	@if (!empty($address) && isset($address))
    	<p> <strong>Address:</strong> {!! $address !!}</p>
	@endif

	@if (!empty($emergency) && isset($emergency))
    	<p> <strong>Emergency Contact Person:</strong> {!! $emergency !!}</p>
	@endif

	
	@if (!empty($telephone2) && isset($telephone2))
    	<p> <strong>Telephone:</strong> {!! $telephone2 !!}</p>
	@endif
			

	<h2>Locations</h2>

	@if (!empty($locationsQuito) && $locationsQuito=="on")
		<h3>Quito</h3>
		@if(isset($dateQuitoFrom))
    	<p> <strong>From:</strong> {!! $dateQuitoFrom !!}</p>
    	@else
    	<p> <strong>From:</strong> </p>
    	@endif
    	@if(isset($dateQuitoTo))
    	<p> <strong>To:</strong> {!! $dateQuitoTo !!}</p>
    	@else
    	<p> <strong>To:</strong> </p>
    	@endif
	@endif

	@if (!empty($locationsOtavalo) && $locationsOtavalo=="on")
		<h3>Otavalo</h3>
		@if(isset($dateOtavaloFrom))
    	<p> <strong>From:</strong> {!! $dateOtavaloFrom !!}</p>
    	@else
    	<p> <strong>From:</strong> </p>
    	@endif
    	@if(isset($dateOtavaloTo))
    	<p> <strong>To:</strong> {!! $dateOtavaloTo !!}</p>
    	@else
    	<p> <strong>To:</strong> </p>
    	@endif
	@endif

	@if (!empty($locationsAmazon) && $locationsAmazon=="on")
		<h3>Amazon Jungle</h3>
    	<p> <strong>From:</strong> {!! $dateAmazonJungleFrom !!}</p>
    	<p> <strong>To:</strong> {!! $dateAmazonJungleTo !!}</p>
	@endif

	@if (!empty($locationsIndigenous) && $locationsIndigenous=="on")
		<h3>Indigenous Community</h3>
    	@switch($optionsIndigenousCommunity)
		    @case(1)
		        <p><strong>Options:</strong> Andean Indigenous Community</p>
		        @break

		    @case(2)
		        <p><strong>Options:</strong> Shuar Indigenous Community</p>
		        @break

		    @default
		        <p><strong>Options:</strong> Error</p>

		@endswitch
    	<p> <strong>From:</strong> {!! $dateIndigenousCommunityFrom !!}</p>
    	<p> <strong>To:</strong> {!! $dateIndigenousCommunityTo !!}</p>
	@endif

	@if (!empty($locationsGalapagos) && $locationsGalapagos=="on")
		<h3>Galapagos Islands</h3>
    	@switch($optionsGalapagosIslands)
		    @case(1)
		        <p> <strong>Options:</strong> 7-Day Spanish Immersion in the Galapagos Islands </p>
		        @break

		    @case(2)
		        <p> <strong>Options:</strong> 14-Day Discovering Galapagos Spanish Program</p>
		        @break

		    @case(3)
		        <p> <strong>Options:</strong> 14-Day Exploring the Galapagos Islands Spanish Program</p>
		        @break

		    @case(4)
		        <p> <strong>Options:</strong> 11-Day Enchanting Galapagos Spanish Program</p>
		        @break

		    @default
		        <p><strong>Options:</strong> Error</p>

		@endswitch
    	<p> <strong>From:</strong> {!! $dateGalapagosIslandsFrom !!}</p>
    	<p> <strong>To:</strong> {!! $dateGalapagosIslandsTo !!}</p>
	@endif

	@if (!empty($locationsTravelling) && $locationsTravelling=="on")
		<h3>Travelling Classroom</h3>
    	@switch($optionsTravellingClassroom)
		    @case(1)
		        <p> <strong>Options:</strong> Andes Amazon 7 Days </p>
		        @break

		    @case(2)
		        <p> <strong>Options:</strong> Andes Amazon 12 Days</p>
		        @break

		    @case(3)
		        <p> <strong>Options:</strong> Walking Through the Andes 12 Days</p>
		        @break

		    @case(4)
		        <p> <strong>Options:</strong> Experience Ecuador 16 Days</p>
		        @break

		    @case(5)
		        <p> <strong>Options:</strong> Exploring Ecuador 19 Days</p>
		        @break

		    @case(6)
		        <p> <strong>Options:</strong> Charles Darwin & The Secrets of Evolution 15 Days</p>
		        @break

		    @default
		        <p><strong>Options:</strong> Error</p>

		@endswitch
    	<p> <strong>From:</strong> {!! $dateTravellingClassroomFrom !!}</p>
    	<p> <strong>To:</strong> {!! $dateTravellingClassroomTo !!}</p>
	@endif

	@if (!empty($locationsPackege) && $locationsPackege=="on")
		<h3>Interactive Package</h3>
    	@switch($optionsInteractivePackage)
		    @case(1)
		        <p> <strong>Options:</strong> Package 1</p>
		        @break

		    @case(2)
		        <p> <strong>Options:</strong> Package 2</p>
		        @break

		    @case(3)
		        <p> <strong>Options:</strong> Package 3</p>
		        @break

		    @case(4)
		        <p> <strong>Options:</strong> Package 4</p>
		        @break

		    @case(5)
		        <p> <strong>Options:</strong> Package 5</p>
		        @break

		    @case(6)
		        <p> <strong>Options:</strong> Package 6</p>
		        @break

		    @case(7)
		        <p> <strong>Options:</strong> Package 7</p>
		        @break

		    @case(8)
		        <p> <strong>Options:</strong> Package 8</p>
		        @break

		    @case(9)
		        <p> <strong>Options:</strong> Package 9</p>
		        @break

		    @case(10)
		        <p> <strong>Options:</strong> Package 10</p>
		        @break

		    @default
		        <p><strong>Options:</strong> Error</p>

		@endswitch
    	<p> <strong>From:</strong> {!! $dateInteractivePackageFrom !!}</p>
    	<p> <strong>To:</strong> {!! $dateInteractivePackageTo !!}</p>
	@endif


	@if((!empty($locationsQuito) && $locationsQuito=="on") || (!empty($locationsOtavalo) && $locationsOtavalo=="on"))


		<h2>Which Course Would You Like To Take And For How Many Weeks?:</h2>

		@if (!empty($groupCourses))
			<h3> Group Classes</h3>
	    	@switch($optionsGroupClasses)
			    @case(1)
			        <p> <strong>Options:</strong> 20 hours per week</p>
			        @break

			    @default
			        <p> <strong>Options:</strong> 20 hours per week</p>

			@endswitch
	    	<p> <strong>Weeks:</strong> {!! $weeksGroupClasses !!}</p>
		@endif

		@if (!empty($privateCourses))
			<h3>Private Courses</h3>
	    	@switch($optionsPrivateCourses)
			    @case(1)
			        <p> <strong>Options:</strong> 20 hours per week</p>
			        @break

			    @case(2)
			        <p> <strong>Options:</strong>  25 hours per week</p>
			        @break

			    @case(3)
			        <p> <strong>Options:</strong>  30 hours per week</p>
			        @break

			    @case(4)
			        <p> <strong>Options:</strong>  35 hours per week</p>
			        @break

			    @default
			        <p><strong>Options:</strong> Error</p>

			@endswitch
	    	<p> <strong>Weeks:</strong> {!! $weeksPrivateCourses !!}</p>
		@endif

		@if (!empty($combinedCourse))
			<h3>Combined Course</h3>
	    	@switch($optionsCombinedCourse)
			    @case(1)
			        <p> <strong>Options:</strong> 20 + 10 hours per week</p>
			        @break

			    @case(2)
			        <p> <strong>Options:</strong> 20 + 10 hours per week</p>
			        @break

			    @default
			        <p><strong>Options:</strong> Error</p>

			@endswitch
	    	<p> <strong>Weeks:</strong> {!! $weeksCombinedCourse !!}</p>
		@endif

		@if (!empty($semiPrivate))
			<h3>Semi-Private</h3>
	    	@switch($optionsSemiPrivate)
			    @case(1)
			        <p> <strong>Options:</strong> 20 hours per week</p>
			        @break

			    @case(2)
			        <p> <strong>Options:</strong> 25 hours per week</p>
			        @break

			    @default
			        <p><strong>Options:</strong> Error</p>

			@endswitch
	    	<p> <strong>Weeks:</strong> {!! $weeksSemiPrivate !!}</p>
		@endif

		@if (!empty($spanishMedicine))
			<h3>Spanish for Medicine</h3>
	    	@switch($optionsSpanishMedicine)
			    @case(1)
			        <p> <strong>Options:</strong> 20 hours per week</p>
			        @break

			    @default
			        <p><strong>Options:</strong> Error</p>

			@endswitch
	    	<p> <strong>Weeks:</strong> {!! $weeksSpanishMedicine !!}</p>
		@endif

		@if (!empty($deleExam))
			<h3>DELE Exam Preparation</h3>
	    	@switch($optionsDeleExam)
			    @case(1)
			        <p> <strong>Options:</strong> 20 hours per week</p>
			        @break

			    @default
			        <p><strong>Options:</strong> Error</p>

			@endswitch
	    	<p> <strong>Weeks:</strong> {!! $weeksDeleExam !!}</p>
		@endif

		@if (!empty($spanishProfessionals))
			<h3>Spanish for Professionals</h3>
	    	@switch($optionsSpanishProfessionals)
			    @case(1)
			        <p> <strong>Options:</strong> 20 hours per week</p>
			        @break

			    @default
			        <p><strong>Options:</strong> Error</p>

			@endswitch
	    	<p> <strong>Weeks:</strong> {!! $weeksSpanishProfessionals !!}</p>
		@endif
		
		<p> <strong>Comments:</strong> {!! $commentsLocations !!}</p>

		<h2>Accommodation Requirements - Quito / Otavalo</h2>


		<p> <strong>From:</strong> {!! $dateAccommodationFrom !!}</p>
		<p> <strong>To:</strong> {!! $dateAccommodationTo !!}</p>

		@if (!empty($accommodation))

			@switch($accommodation)
			    @case(1)
			        <p> <strong>Option:</strong> Host Family</p>
			        <p> <strong>Meals per day:</strong> {!! $mealDayFamily !!}</p>

			        @switch($bathroomFamily)
					    @case(1)
					        <p> <strong>Bathroom:</strong> Private</p>
					        @break

					    @case(2)
					        <p> <strong>Bathroom:</strong> Shared</p>
					        @break

					    @default
					        <p> <strong>Bathroom:</strong> He/She did not select the option!</p>
					        @break
					@endswitch

			    @break

			    @case(2)
			        <p> <strong>Option:</strong> Student Residence with breakfast in Quito</p>
			        @break

			    @case(3)
			        <p> <strong>Option:</strong> I wish to organize my own accommodation</p>
			        <p> <strong>Name of Hotel/Hostel:</strong> {!! $nameHotel !!}</p>
			        <p> <strong>Address of my accommodation:</strong> {!! $addressAccommodation !!}</p>
			        <p> <strong>Phone of my accommodation:</strong> {!! $phoneAccommodation !!}</p>
			        @break

			    @default
			        <p>He/She did not select the option!</p>

			@endswitch
			
		@endif

		@if (!empty($youSmoke))

			@switch($youSmoke)
			    @case(1)
			        <p> <strong>Do you smoke?:</strong> Yes</p>

			    @case(2)
			        <p> <strong>Do you smoke?:</strong> No</p>
			        @break

			    @default
			        <p><strong>Do you smoke?:</strong> He/She did not select the option!</p>

			@endswitch

		@endif

		@if (!empty($youVegetarian))

			@switch($youVegetarian)
			    @case(1)
			        <p> <strong>Are you vegetarian?:</strong> Yes</p>

			    @case(2)
			        <p> <strong>Are you vegetarian?:</strong> No</p>
			        @break

			    @default
			        <p><strong>Are you vegetarian?:</strong> He/She did not select the option!</p>

			@endswitch

		@endif

		@if (!empty($haveAllergies))

			@switch($haveAllergies)
			    @case(1)
			        <p> <strong>Do you have allergies?:</strong> Yes</p>

			    @case(2)
			        <p> <strong>Do you have allergies?:</strong> No</p>
			        @break

			    @default
			        <p><strong>Do you have allergies?:</strong> He/She did not select the option!</p>

			@endswitch

		@endif

		<p> <strong>Please specify any dietary restrictions or allergies as well as any additional details your accommodation needs to be aware of:</strong> {!! $pleaseSpecify !!}</p>
		

		@if (!empty($howManyPeople))

			@switch($howManyPeople)
			    @case(1)
			        <p> <strong>How many people:</strong> Just Myself</p>
			        @break
			    @case(2)
			        <p> <strong>How many people:</strong> Myself And Partner / Husband / Wife</p>
			        @break

			    @case(2)
			        <p> <strong>How many people:</strong> Myself And Friend / Traveling Companion</p>
			        @break

			    @default
			        <p><strong>How many people:</strong> He/She did not select the option!</p>
			        @break
			@endswitch


		@endif

		@if (!empty($typeRoom))

			@switch($typeRoom)
			    @case(1)
	        		<p> <strong>Type of Room:</strong> Matrimonial</p>
	        		@break
	        	@case(2)
	        		<p> <strong>Type of Room:</strong> Single</p>
	        		@break
	        	@case(3)
	        		<p> <strong>Type of Room:</strong> Double</p>
	        		@break
	        	@default
	        		<p> <strong>Type of Room:</strong> Multiple</p>
	        
	        @endswitch

		@endif




	@endif


	@if (!empty($airportQuito) && $airportQuito=="1")

		<p> <h2>Do You Wish To Be Met At The Airport In Quito?</h2> Yes</p>


		<p> <strong>Date of Arrival:</strong> {!! $dateArrival !!}</p>
		<p> <strong>Time of Arrival:</strong> {!! $timeArrival  !!}</p>
		<p> <strong>Airline Company:</strong> {!! $airlineCompany !!}</p>
		<p> <strong>Flight Number:</strong> {!! $flightNumber !!}</p>

	@else

		<p> <h2>Do You Wish To Be Met At The Airport In Quito?</h2> No</p>		

	@endif

	<h2>Billing Information</h2>
	<p> <strong>Courses Cost: </strong>US$ {!! $courses_cost !!}</p>
	<p> <strong>Accommodation Cost: </strong>US$ {!! $accommodation_cost !!}</p>
	<p> <strong>Registration Fee: </strong>US$ {!! $registration_cost !!}</p>
	<p> <strong>Grand Total: </strong>US$ {!! $grand_total !!}</p>

	<h2>Payment Methods</h2>
	@if (!empty($payment_method))

		@switch($payment_method)
		    @case(1)
        		<p> <strong>Payment Method:</strong> Credit Card</p>
        		@break
        	@case(2)
        		<p> <strong>Payment Method:</strong> Bank Transfer</p>
        		@break
        	@case(3)
        		<p> <strong>Payment Method:</strong> Cash on Arrival</p>
        		@break
        	@default
        		<p> <strong>Payment Method:</strong> No Payment</p>
        
        @endswitch

	@endif
	
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