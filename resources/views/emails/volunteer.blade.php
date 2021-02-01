<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<img src="https://www.superiorspanishschool.com/images/logo.jpg" alt="Instituto Superior de Espanol">

	<p><strong>Start Date:</strong> {!! $startDate !!}</p>
	<p><strong>End Date:</strong> {!! $endDate !!}</p>

	@switch($preferredLocations)
	    @case(1)
	        <p><strong>Preferred Locations:</strong> Quito</p>
	        @break

	    @case(2)
	        <p><strong>Preferred Locations:</strong> Otavalo</p>
	        @break

	    @case(3)
	        <p><strong>Preferred Locations:</strong> Amazon Jungle</p>
	        @break

	    @case(4)
	        <p><strong>Preferred Locations:</strong> Galapagos</p>
	        @break

	    @case(5)
	        <p><strong>Preferred Locations:</strong> Other locations</p>
	        @break

	    @default
	        <p><strong>Preferred Locations:</strong> Error</p>
	@endswitch

	@switch($preferredProjects)
	    @case(1)
	        <p><strong>Preferred Projects:</strong> Ecological Projects</p>
	        @break

	    @case(2)
	        <p><strong>Preferred Projects:</strong> Education Projects</p>
	        @break

	    @case(3)
	        <p><strong>Preferred Projects:</strong> Rural Projects</p>
	        @break

	    @case(4)
	        <p><strong>Preferred Projects:</strong> Social Projects</p>
	        @break

	    @case(5)
	        <p><strong>Preferred Projects:</strong> Wildlife Projects</p>
	        @break

	    @case(6)
	        <p><strong>Preferred Projects:</strong> Healthcare</p>
	        @break

	    @case(7)
	        <p><strong>Preferred Projects:</strong> Professional</p>
	        @break

	    @case(8)
	        <p><strong>Preferred Projects:</strong> Other areas</p>
	        @break

	    @default
	        <p><strong>Preferred Projects:</strong> Error</p>
	@endswitch

	@switch($chooseProgram)
	    @case(1)
	        <p><strong>Choose Program:</strong> Volunteering or Internship Program + Language Course (minimum 2 weeks) – Free placement!</p>
	        @break

	    @case(2)
	        <p><strong>Choose Program:</strong> Volunteering or Internship-Only Program – One-time placement fee: $150</p>
	        @break

	    @default
	        <p><strong>Choose Program:</strong> Error</p>
	@endswitch

	<p><strong>First Name:</strong> {!! $firtsName !!}</p>
	<p><strong>Last Name:</strong> {!! $lastName !!}</p>
	<p><strong>Email address:</strong> {!! $email !!}</p>
	<p><strong>Your City:</strong> {!! $yourCountry !!}</p>
	<p><strong>Zip Code:</strong> {!! $zipCode !!}</p>
	<p><strong>Phone:</strong> {!! $phone !!}</p>
	<p><strong>Comments:</strong> {!! $comments !!}</p>

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