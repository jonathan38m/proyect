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
			

	<h2>Information about your Travel Insurance Company</h2>

	@if (!empty($insuranceCompany))
    	<p> <strong>Insurance Company:</strong> {!! $insuranceCompany !!}</p>
	@endif
	@if (!empty($policy))
    	<p> <strong>Policy #:</strong> {!! $policy !!}</p>
	@endif
	@if (!empty($phone24))
    	<p> <strong>Phone # (24 hours):</strong> {!! $phone24 !!}</p>
	@endif
	@if (!empty($email2))
    	<p> <strong>Email:</strong> {!! $email2 !!}</p>
	@endif


	@if (!empty($profession))
		<h2>Profession:</h2>
    	<p> {!! $profession !!}</p>
	@endif

	
	@if (!empty($hobbies))
		<h2>Interest / Hobbies:</h2>
    	<p> {!! $hobbies !!}</p>
	@endif

	<h2>Previous Knowledge Of Spanish</h2>

	@switch($knowledgeSpanish)
	    @case(1)
	        <p><strong>Previous Knowledge Of Spanish:</strong> Absolute Beginner A0</p>
	        @break

	    @case(2)
	        <p><strong>Previous Knowledge Of Spanish:</strong> Beginner A1</p>
	        @break

	    @case(3)
	        <p><strong>Previous Knowledge Of Spanish:</strong> Elementary A2</p>
	        @break

	    @case(4)
	        <p><strong>Previous Knowledge Of Spanish:</strong> Intermediate B1</p>
	        @break

	    @case(5)
	        <p><strong>Previous Knowledge Of Spanish:</strong> Upper Intermediate B2</p>
	        @break

	    @case(6)
	        <p><strong>Previous Knowledge Of Spanish:</strong> Advanced C1</p>
	        @break

	    @case(7)
	        <p><strong>Previous Knowledge Of Spanish:</strong> Proficiency C2</p>
	        @break

	    @default
	        <p><strong>Previous Knowledge Of Spanish:</strong> Error</p>
	@endswitch

	<h2>Important Information for your Host</h2>

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

	<h2>Airport Information</h2>

	@if (!empty($airportQuito) && $airportQuito=="1")

		<p> <h2>Do You Wish To Be Met At The Airport In Quito?</h2> Yes</p>


		<p> <strong>Date of Arrival:</strong> {!! $dateArrival !!}</p>
		<p> <strong>Time of Arrival:</strong> {!! $timeArrival  !!}</p>
		<p> <strong>Airline Company:</strong> {!! $airlineCompany !!}</p>
		<p> <strong>Flight Number:</strong> {!! $flightNumber !!}</p>

	@else

		<p> <h2>Do You Wish To Be Met At The Airport In Quito?</h2> No</p>		

	@endif

	<hr/>
		
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