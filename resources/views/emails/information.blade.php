<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<img src="https://www.superiorspanishschool.com/images/logo.jpg" alt="Instituto Superior de Espanol">

	<p>
		<strong>Name:</strong> 
		@if(isset($name))
			{{ $name }} 
		@endif
	</p>
	<p>
		<strong>Email:</strong>
		@if(isset($email))
			{{ $email }}
		@endif
		
	</p>
	<p>
		<strong>Subject:</strong>
		@if(isset($subject))
			{{ $subject }}
		@endif
		
	</p>
	<p>
		<strong>Message:</strong>
		@if(isset($messageForm))
			{{ $messageForm }}
		@endif
		
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