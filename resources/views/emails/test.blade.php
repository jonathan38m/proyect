<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<img src="https://www.superiorspanishschool.com/images/logo.jpg" alt="Instituto Superior de Espanol">

	<h1>Test Online</h1>
	<p><strong>Name:</strong> {!! $name !!} </p>
	<p><strong>Last Name:</strong> {{ $lastName }}</p>
	<p><strong>Country:</strong> {{ $country }}</p>
	<p><strong>Email:</strong> {{ $email }}</p>
	<h1>Test Online</h1>
	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q1)
	    @case("1")
	        <?php $x="red"; ?>
	        @break

	    @case("2")
	        <?php $y="red"; ?>
	        @break

	    @case("3")
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>1.- _______ agua de la  botella es ____________.</p>
	<ul>
	  <li  style="color: {{ $x }}">El, limpio</li>
	  <li  style="color: {{ $y }}">La, limpia</li>
	  <li  style="color: {{ $z }}">El, limpia</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q2)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>2.- ___________ amigos son  buena gente.</p>
	<ul>
	  <li  style="color: {{ $x }}">Mis</li>
	  <li  style="color: {{ $y }}">Mi</li>
	  <li  style="color: {{ $z }}">Míos</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q3)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>3.- ________ idioma que  habla es _________.</p>
	<ul>
	  <li  style="color: {{ $x }}">La, alemana</li>
	  <li  style="color: {{ $y }}">El, alemán</li>
	  <li  style="color: {{ $z }}">El, Alemania</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q4)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>4.- Disculpa, ¿____________  ocupado este asiento?</p>
	<ul>
	  <li  style="color: {{ $x }}">Eres</li>
	  <li  style="color: {{ $y }}">Estás</li>
	  <li  style="color: {{ $z }}">Está</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q5)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>5.- En Quito ________ muchas  iglesias que ________ muy hermosas y _________ cerca de la escuela.</p>
	<ul>
	  <li  style="color: {{ $x }}">son, están, haben</li>
	  <li  style="color: {{ $y }}">hay, son, están</li>
	  <li  style="color: {{ $z }}">hay, están, son</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q6)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>6.- Buenos días,  ¿____________ coca cola? ¿Cuánto cuesta?</p>
	<ul>
	  <li  style="color: {{ $x }}">Tengo</li>
	  <li  style="color: {{ $y }}">Tienes</li>
	  <li  style="color: {{ $z }}">Tenemos</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q7)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>7.- ¿____________ frío en tu  país en invierno?</p>
	<ul>
	  <li  style="color: {{ $x }}">Haces</li>
	  <li  style="color: {{ $y }}">Hace</li>
	  <li  style="color: {{ $z }}">Estás</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q8)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>8.- Cuando yo __________  hambre en la noche, mi mamá me __________ un vaso de leche y galletas.</p>
	<ul>
	  <li  style="color: {{ $x }}">tiene, doy</li>
	  <li  style="color: {{ $y }}">tengo, das</li>
	  <li  style="color: {{ $z }}">tengo, da</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q9)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>9.- Disculpe, ¿__________  decirme donde ____________ esta dirección?</p>
	<ul>
	  <li  style="color: {{ $x }}">puedes, está</li>
	  <li  style="color: {{ $y }}">puede, está</li>
	  <li  style="color: {{ $z }}">puede, hay</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q10)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>10.- Cada día ___________ a  la escuela con mis amigos, __________ desde la casa _______ veinte minutos.</p>
	<ul>
	  <li  style="color: {{ $x }}">voy, camino, para</li>
	  <li  style="color: {{ $y }}">voy, caminamos, por</li>
	  <li  style="color: {{ $z }}">voy, caminamos, para</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q11)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>11.- Los turistas deben  ___________ español para ____________ con la gente.</p>
	<ul>
	  <li  style="color: {{ $x }}">hablan, comunicar</li>
	  <li  style="color: {{ $y }}">hablar, comunicar</li>
	  <li  style="color: {{ $z }}">hablar, comunicarse</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q12)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>12.- Juan __________ cuando  _________ a los payasos y todos _____________.</p>
	<ul>
	  <li  style="color: {{ $x }}">reír, ves, divierten</li>
	  <li  style="color: {{ $y }}">ríe, ve, divierten</li>
	  <li  style="color: {{ $z }}">ríe, ve, se divierten</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q13)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>13.- ________ viajar mucha  gente se siente feliz.</p>
	<ul>
	  <li  style="color: {{ $x }}">Al</li>
	  <li  style="color: {{ $y }}">De</li>
	  <li  style="color: {{ $z }}">A</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q14)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>14.- No quiero ____________,  excepto un ____________ de café. Gracias.</p>
	<ul>
	  <li  style="color: {{ $x }}">ninguna, poco</li>
	  <li  style="color: {{ $y }}">nada, poco</li>
	  <li  style="color: {{ $z }}">nadie, poco</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q15)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>15.- ¿Qué hora es? Es  ____________ (1:15)</p>
	<ul>
	  <li  style="color: {{ $x }}">las una y cuatro</li>
	  <li  style="color: {{ $y }}">las una y cuince</li>
	  <li  style="color: {{ $z }}">la una y quince</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q16)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>16.- Mi viaje empieza  ________________.</p>
	<ul>
	  <li  style="color: {{ $x }}">5 de Mayo</li>
	  <li  style="color: {{ $y }}">Mayo 5</li>
	  <li  style="color: {{ $z }}">el 5 de mayo</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q17)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>17.- Ellos no conocen  ____________, pero saben _______________.</p>
	<ul>
	  <li  style="color: {{ $x }}">al presidente, el hombre</li>
	  <li  style="color: {{ $y }}">el presidente, su &nbsp;nombre</li>
	  <li  style="color: {{ $z }}">al presidente, su nombre</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q18)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>18.- Suena ____________,  pero es ___________ si vamos más temprano.</p>
	<ul>
	  <li  style="color: {{ $x }}">bueno, meyor</li>
	  <li  style="color: {{ $y }}">bien, mejor</li>
	  <li  style="color: {{ $z }}">bueno, mayor</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q19)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>19.- ___________ libro es  muy interesante.</p>
	<ul>
	  <li  style="color: {{ $x }}">Esta </li>
	  <li  style="color: {{ $y }}">Esto</li>
	  <li  style="color: {{ $z }}">Este</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q20)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>20.- ¿Cuántas veces  ____________ esta película?</p>
	<ul>
	  <li  style="color: {{ $x }}">has visto</li>
	  <li  style="color: {{ $y }}">ves</li>
	  <li  style="color: {{ $z }}">veías</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q21)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>21.- Hola, ___________  Peter. Mucho gusto, yo ________ de EEUU y ___________ estudiando español en  Quito.</p>
	<ul>
	  <li  style="color: {{ $x }}">me llamo, estoy, estoy</li>
	  <li  style="color: {{ $y }}">llamo, soy, estoy</li>
	  <li  style="color: {{ $z }}">me llamo, soy, estoy</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q22)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>22.- Mucha gente no llegó  ___________ y tuvimos que empezar una hora más tarde.</p>
	<ul>
	  <li  style="color: {{ $x }}">en tiempo</li>
	  <li  style="color: {{ $y }}">a tiempo</li>
	  <li  style="color: {{ $z }}">para tiempo</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q23)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>23.- Cuando ___________ 18  años, ___________ por primera vez a Inglaterra; ________ muy interesante. </p>
	<ul>
	  <li  style="color: {{ $x }}">tuve, viajé, era</li>
	  <li  style="color: {{ $y }}">tenía, viajé, ha sido</li>
	  <li  style="color: {{ $z }}">tenía viajé, fue</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q24)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>24.- Ayer ______ regalaron  un libro, quiero mostrar_________.</p>
	<ul>
	  <li  style="color: {{ $x }}">me, lo</li>
	  <li  style="color: {{ $y }}">te, telo</li>
	  <li  style="color: {{ $z }}">me, telo</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q25)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>25.- Los estudiantes de Juan  no ____________ a clase hoy, por eso su profesor pasó la mañana organizando  nuestra visita al museo.</p>
	<ul>
	  <li  style="color: {{ $x }}">venían</li>
	  <li  style="color: {{ $y }}">vinieron</li>
	  <li  style="color: {{ $z }}">vino</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q26)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>26.- __________ es  importante para la salud.</p>
	<ul>
	  <li  style="color: {{ $x }}">Caminar </li>
	  <li  style="color: {{ $y }}">Camino</li>
	  <li  style="color: {{ $z }}">Caminando</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q27)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>27.- Antes de ___________,  él ya _______________ hablar de Ecuador.</p>
	<ul>
	  <li  style="color: {{ $x }}">viajó, había oído</li>
	  <li  style="color: {{ $y }}">viajaba, ha oído</li>
	  <li  style="color: {{ $z }}">viajar, había oído</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q28)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>28.- ¡_____________ la  verdad! ¿Dónde lo dejaste?</p>
	<ul>
	  <li  style="color: {{ $x }}">Dice a mi</li>
	  <li  style="color: {{ $y }}">Dígame</li>
	  <li  style="color: {{ $z }}">Dime</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q29)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>29.- _________ mejorar tu  español, debes practicar _______ lo menos una hora más en la casa.</p>
	<ul>
	  <li  style="color: {{ $x }}">Por, por</li>
	  <li  style="color: {{ $y }}">Para, para</li>
	  <li  style="color: {{ $z }}">Para, por</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q30)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>30.- Están tocando la  puerta, ¿quién _________?</p>
	<ul>
	  <li  style="color: {{ $x }}">será</li>
	  <li  style="color: {{ $y }}">es</li>
	  <li  style="color: {{ $z }}">serás</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q31)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>31.- Para el viernes que  viene, ya ______________ los documentos y _____________ empezar con los  trámites.</p>
	<ul>
	  <li  style="color: {{ $x }}">habrás llegado, podremos</li>
	  <li  style="color: {{ $y }}">habrán llegado, podremos</li>
	  <li  style="color: {{ $z }}">habrá llegado, podemos</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q32)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>32.- Espero que  ______________ tiempo para conocer Cuenca y ______________ comprar un sombrero  de paja toquilla o &ldquo;Panama Hat&rdquo;.</p>
	<ul>
	  <li  style="color: {{ $x }}">tenemos, poder</li>
	  <li  style="color: {{ $y }}">tengamos, podemos</li>
	  <li  style="color: {{ $z }}">tengamos, podamos</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q33)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>33.- Vine aquí ________ el  español, _______ aprender a hablar con la gente y que me ______________.</p>
	<ul>
	  <li  style="color: {{ $x }}">por, para, entiendan</li>
	  <li  style="color: {{ $y }}">para, para, entienden</li>
	  <li  style="color: {{ $z }}">por, para, entenderán</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q34)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>34.- Si ______________  dinero, ____________ a muchos lugares de Sudamérica. </p>
	<ul>
	  <li  style="color: {{ $x }}">tengo, viajaría</li>
	  <li  style="color: {{ $y }}">tenía, viajaría</li>
	  <li  style="color: {{ $z }}">tuviera, viajaría</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q35)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>35.- Les recomendé a mis  hermanos que _____________, pero no me _____________ caso.</p>
	<ul>
	  <li  style="color: {{ $x }}">vayan, hacen</li>
	  <li  style="color: {{ $y }}">fueran, hicieron</li>
	  <li  style="color: {{ $z }}">fueran, hacían</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q36)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>36.- Quién ____________ 20  años menos.</p>
	<ul>
	  <li  style="color: {{ $x }}">tenía</li>
	  <li  style="color: {{ $y }}">tuvieras</li>
	  <li  style="color: {{ $z }}">tuviera</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q37)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>37.- No ______________  tarde, si _________________ menos tráfico. Lo siento.</p>
	<ul>
	  <li  style="color: {{ $x }}">hubieras llegado, habría</li>
	  <li  style="color: {{ $y }}">hubiera llegado, habría habido</li>
	  <li  style="color: {{ $z }}">habría llegado, hubiera habido</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q38)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>38.- Estoy segura que tiene  ____________ 50 años.</p>
	<ul>
	  <li  style="color: {{ $x }}">menos de</li>
	  <li  style="color: {{ $y }}">menos que</li>
	  <li  style="color: {{ $z }}">a menos que</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q39)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>39.- De tal ___________, tal  astilla.</p>
	<ul>
	  <li  style="color: {{ $x }}">madera</li>
	  <li  style="color: {{ $y }}">palo</li>
	  <li  style="color: {{ $z }}">tronco</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q40)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>40.- _____________ viajamos  a Galápagos.</p>
	<ul>
	  <li  style="color: {{ $x }}">De vez en cuando</li>
	  <li  style="color: {{ $y }}">A vez en cuando</li>
	  <li  style="color: {{ $z }}">De vez a cuando</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q41)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>41.- No te lo ___________,  aunque me _______________.</p>
	<ul>
	  <li  style="color: {{ $x }}">diré, ruegas</li>
	  <li  style="color: {{ $y }}">diría, rogaras</li>
	  <li  style="color: {{ $z }}">diría, rogarás</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q42)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>42.- No hay ___________  persona que ___________ inglés __________.</p>
	<ul>
	  <li  style="color: {{ $x }}">nadie, hable, acá</li>
	  <li  style="color: {{ $y }}">ningún, hable, aquí</li>
	  <li  style="color: {{ $z }}">ninguna, hable, aquí</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q43)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>43.- Espero que ya no  ______________ más la rodilla a María y que hoy esté mejor.</p>
	<ul>
	  <li  style="color: {{ $x }}">le haya dolido</li>
	  <li  style="color: {{ $y }}">le ha dolido</li>
	  <li  style="color: {{ $z }}">le duele</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q44)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>44.- ________ muy importante  que todos ____________ cuál _______ el verdadero significado de ________  tradición. </p>
	<ul>
	  <li  style="color: {{ $x }}">Fue, entiendan, es, ese</li>
	  <li  style="color: {{ $y }}">Era, entendieran, era, esa</li>
	  <li  style="color: {{ $z }}">Era, entendería, sería, esa</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q45)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>45.- ¿A qué hora  ______________?, no los oí entrar. </p>
	<ul>
	  <li  style="color: {{ $x }}">llegarán</li>
	  <li  style="color: {{ $y }}">habrán llegado</li>
	  <li  style="color: {{ $z }}">llegaran</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q46)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>46.- Cuando ___________,  llámame que necesito hablar contigo.</p>
	<ul>
	  <li  style="color: {{ $x }}">puedes </li>
	  <li  style="color: {{ $y }}">pudieras</li>
	  <li  style="color: {{ $z }}">puedas</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q47)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>47.- _____________ sea el  jefe, debe gritarnos.</p>
	<ul>
	  <li  style="color: {{ $x }}">Porque </li>
	  <li  style="color: {{ $y }}">Ya que</li>
	  <li  style="color: {{ $z }}">No porque</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q48)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>48.- No me gusta el té,  ________ el café.</p>
	<ul>
	  <li  style="color: {{ $x }}">pero</li>
	  <li  style="color: {{ $y }}">aunque</li>
	  <li  style="color: {{ $z }}">sino</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q49)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>49.- ___________ la  internet, mucha gente se entera de todo.</p>
	<ul>
	  <li  style="color: {{ $x }}">No obstante</li>
	  <li  style="color: {{ $y }}">Mediante</li>
	  <li  style="color: {{ $z }}">Sin embargo</li>
	</ul>


	<?php $x="black"; $y="black"; $z="black"; ?>
	@switch($q50)
	    @case(1)
	        <?php $x="red"; ?>
	        @break

	    @case(2)
	        <?php $y="red"; ?>
	        @break

	    @case(3)
	        <?php $z="red"; ?>
	        @break
	@endswitch
	<p>50.- Las bajas temperaturas  del próximo diciembre, ____________ a mucha gente.</p>
	<ul>
	  <li  style="color: {{ $x }}">hicieron daño</li>
	  <li  style="color: {{ $y }}">harán daño</li>
	  <li  style="color: {{ $z }}">hacen daño</li>
	</ul>

	<p><strong>Description:</strong> {{ $description }}</p>



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