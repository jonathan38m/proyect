@component('mail::message')

#Infotmation

@component('mail::table')


|            Campo           |          Valor           |
| -------------------------- |:------------------------:|
| <strong>Name</strong>      | {{ $request->name }}     |
| <strong>Last Name</strong> | {{ $request->lastName }} |
| <strong>Country</strong>   | {{ $request->country }}  |
| <strong>Email</strong>     | {{ $request->email }}    |
| <strong>Total</strong>     | {{ $total }}    |


@endcomponent

# Test Online

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q1)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 1.- {{ $w }} .......... agua de la  botella es .............              |
| :--------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >El, limpio</p>  |
| <p style="color: {{ $y }}; text-align: center;" >La, limpia</p>  |
| <p style="color: {{ $z }}; text-align: center;" >El, limpia</p>  |

@endcomponent

<?php $x="#00b6ff"; $y="black"; $z="black"; $w=""; ?>

@switch($request->q2)
    @case("1")
        <?php $x="#00b6ff"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 2.- {{ $w }}  .......... amigos son buena gente.                    |
| :-------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >Mis</p>  |
| <p style="color: {{ $y }}; text-align: center;" >Mi </p>  |
| <p style="color: {{ $z }}; text-align: center;" >Míos</p> |

@endcomponent

<?php $x="black"; $y="#00b6ff"; $z="black"; $w=""; ?>

@switch($request->q3)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="#00b6ff"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 3.- {{ $w }} .......... idioma que habla es ..........                      |
| :---------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >La, alemana</p>  |
| <p style="color: {{ $y }}; text-align: center;" >El, alemán </p>  |
| <p style="color: {{ $z }}; text-align: center;" >El, Alemania</p> |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q4)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 4.- {{ $w }}  Disculpa, ¿........... ocupado este asiento?                 |
| :--------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >Eres</p>        |
| <p style="color: {{ $y }}; text-align: center;" >Estás</p>       |
| <p style="color: {{ $z }}; text-align: center;" >Está</p>        |

@endcomponent

<?php $x="black"; $y="#00b6ff"; $z="black"; $w=""; ?>

@switch($request->q5)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="#00b6ff"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 5.- {{ $w }}  En Quito .......... muchas iglesias que ............. muy hermosas y .......... cerca de la escuela.                   |
| :------------------------------------------------------------------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >son, están, haben</p>                                                     |
| <p style="color: {{ $y }}; text-align: center;" >hay, son, están </p>                                                      |
| <p style="color: {{ $z }}; text-align: center;" >hay, están, son</p>                                                       |

@endcomponent

<?php $x="black"; $y="#00b6ff"; $z="black"; $w=""; ?>

@switch($request->q6)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="#00b6ff"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 6.- {{ $w }}  Buenos días, ¿.............. coca cola? ¿Cuánto cuesta?   |
| :-------------------------------------------------------------|
| <p style="color: {{ $x }}; text-align: center;" >Tengo</p>    |
| <p style="color: {{ $y }}; text-align: center;" >Tienes </p>  |
| <p style="color: {{ $z }}; text-align: center;" >Tenemos</p>  |

@endcomponent

<?php $x="black"; $y="#00b6ff"; $z="black"; $w=""; ?>

@switch($request->q7)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="#00b6ff"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 7.- {{ $w }}  ¿............ frío en tu país en invierno?                |
| :------------------------------------------------------------ |
| <p style="color: {{ $x }}; text-align: center;" >Haces</p>    |
| <p style="color: {{ $y }}; text-align: center;" >Hace </p>  |
| <p style="color: {{ $z }}; text-align: center;" >Estás</p>  |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q8)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 8.- {{ $w }} Cuando yo .......... hambre en la noche, mi mamá me .......... un vaso de leche y galletas. |
| :------------------------------------------------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >tiene, doy</p>                                          |
| <p style="color: {{ $y }}; text-align: center;" >tengo, das </p>                                         |
| <p style="color: {{ $z }}; text-align: center;" >tengo, da</p>                                           |

@endcomponent

<?php $x="black"; $y="#00b6ff"; $z="black"; $w=""; ?>

@switch($request->q9)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="#00b6ff"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 9.- {{ $w }}  Disculpe, ¿............ decirme donde ............ esta dirección? |
| :--------------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >puedes, está</p>      |
| <p style="color: {{ $y }}; text-align: center;" >puede, está </p>      |
| <p style="color: {{ $z }}; text-align: center;" >puede, hay</p>        |

@endcomponent

<?php $x="black"; $y="#00b6ff"; $z="black"; $w=""; ?>

@switch($request->q10)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="#00b6ff"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 10.- {{ $w }}  Cada día ........... a la escuela con mis amigos, .......... desde la casa ......... veinte minutos. |
| :-------------------------------------------------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >voy, camino, para</p>                                    |
| <p style="color: {{ $y }}; text-align: center;" >voy ,caminamos, por </p>                                 |
| <p style="color: {{ $z }}; text-align: center;" >voy, caminamos, para</p>                                 |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q11)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 11.- {{ $w }}  Los turistas deben ........... español para ............... con la gente. |
| :----------------------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >hablan , caminar</p>          |
| <p style="color: {{ $y }}; text-align: center;" >hablar, caminar </p>          |
| <p style="color: {{ $z }}; text-align: center;" >hablar, comunicarse</p>       |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q12)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 12.- {{ $w }}  Juan ........ cuando ........ a los payasos y todos .........         |
| :------------------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >reír, ves, divierten</p>  |
| <p style="color: {{ $y }}; text-align: center;" >ríe, ve, divierten </p>   |
| <p style="color: {{ $z }}; text-align: center;" >ríe, ve, se divierten</p> |

@endcomponent

<?php $x="#00b6ff"; $y="black"; $z="black"; $w=""; ?>

@switch($request->q13)
    @case("1")
        <?php $x="#00b6ff"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 13.- {{ $w }}  ........ viajar mucha gente se siente feliz.        |
| :--------------------------------------------------------|
| <p style="color: {{ $x }}; text-align: center;" >Al</p>  |
| <p style="color: {{ $y }}; text-align: center;" >De </p> |
| <p style="color: {{ $z }}; text-align: center;" >A</p>   |

@endcomponent

<?php $x="black"; $y="#00b6ff"; $z="black"; $w=""; ?>

@switch($request->q14)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="#00b6ff"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 14.- {{ $w }}  No quiero ........, excepto un ........ de café. Gracias.     |
| :------------------------------------------------------------------|
| <p style="color: {{ $x }}; text-align: center;" >ninguna, poco</p> |
| <p style="color: {{ $y }}; text-align: center;" >nada, poco </p>   |
| <p style="color: {{ $z }}; text-align: center;" >nadie, poco</p>   |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q15)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 15.- {{ $w }}  ¿Qué hora es? Es ........ (1:15)                                 |
| :---------------------------------------------------------------------|
| <p style="color: {{ $x }}; text-align: center;" >las una y cuatro</p> |
| <p style="color: {{ $y }}; text-align: center;" >las una y cuince</p> |
| <p style="color: {{ $z }}; text-align: center;" >la una y quince</p>  |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q16)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 16.- {{ $w }}  Mi viaje empieza  .........                                  |
| :-----------------------------------------------------------------|
| <p style="color: {{ $x }}; text-align: center;" >5 de Mayo</p>    |
| <p style="color: {{ $y }}; text-align: center;" >Mayo 5</p>       |
| <p style="color: {{ $z }}; text-align: center;" >el 5 de mayo</p> |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q17)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 17.- {{ $w }}  Ellos no conocen ........., pero saben ..........                          |
| :------------------------------------------------------------------------------ |
| <p style="color: {{ $x }}; text-align: center;" >al presidente, el hombre</p>   |
| <p style="color: {{ $y }}; text-align: center;" >el presidente, su  nombre </p> |
| <p style="color: {{ $z }}; text-align: center;" >al presidente, su nombre</p>   |

@endcomponent

<?php $x="black"; $y="#00b6ff"; $z="black"; $w=""; ?>

@switch($request->q18)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="#00b6ff"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 18.- {{ $w }}  Suena .........., pero es .......... si vamos más temprano.  |
| :-----------------------------------------------------------------|
| <p style="color: {{ $x }}; text-align: center;" >bueno, meyor</p> |
| <p style="color: {{ $y }}; text-align: center;" >bien, mejor</p>  |
| <p style="color: {{ $z }}; text-align: center;" >bueno, mayor</p> |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q19)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 19.- {{ $w }}  .......... libro es muy interesante.                  |
| :----------------------------------------------------------|
| <p style="color: {{ $x }}; text-align: center;" >Esta </p> |
| <p style="color: {{ $y }}; text-align: center;" >Esto </p> |
| <p style="color: {{ $z }}; text-align: center;" >Este</p>  |

@endcomponent

<?php $x="#00b6ff"; $y="black"; $z="black"; $w=""; ?>

@switch($request->q20)
    @case("1")
        <?php $x="#00b6ff"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 20.- {{ $w }}  ¿Cuántas veces .......... esta película?                  |
| :--------------------------------------------------------------|
| <p style="color: {{ $x }}; text-align: center;" >has visto</p> |
| <p style="color: {{ $y }}; text-align: center;" >ves</p>       |
| <p style="color: {{ $z }}; text-align: center;" >veías</p>     |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q21)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 21.- {{ $w }}  Hola, .......... Peter. Mucho gusto, yo .......... de EEUU y .......... estudiando español en Quito. |
| :-------------------------------------------------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >me llamo, estoy, estoy</p>                               |
| <p style="color: {{ $y }}; text-align: center;" >llamo, soy, estoy </p>                                   |
| <p style="color: {{ $z }}; text-align: center;" >me llamo, soy, estoy</p>                                 |

@endcomponent

<?php $x="black"; $y="#00b6ff"; $z="black"; $w=""; ?>

@switch($request->q22)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="#00b6ff"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 22.- {{ $w }}  Mucha gente no llegó .......... y tuvimos que empezar una hora más tarde. |
| :----------------------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >en tiempo</p>                 |
| <p style="color: {{ $y }}; text-align: center;" >a tiempo </p>                 |
| <p style="color: {{ $z }}; text-align: center;" >para tiempo</p>               |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q23)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 23.- {{ $w }}  Cuando .......... 18 años, .......... por primera vez a Inglaterra; .......... muy interesante.  |
| :---------------------------------------------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >tuve, viajé, era</p>                                 |
| <p style="color: {{ $y }}; text-align: center;" >tenía, viajé, ha sido </p>                           |
| <p style="color: {{ $z }}; text-align: center;" >tenía viajé, fue</p>                                 |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q24)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 24.- {{ $w }}  Ayer .......... regalaron un libro, quiero mostrar ...... |
| :------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >me, lo</p>    |
| <p style="color: {{ $y }}; text-align: center;" >te, telo </p> |
| <p style="color: {{ $z }}; text-align: center;" >me, telo</p>  |

@endcomponent

<?php $x="black"; $y="#00b6ff"; $z="black"; $w=""; ?>

@switch($request->q25)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="#00b6ff"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 25.- {{ $w }}  Los estudiantes de Juan no .......... a clase hoy, por eso su profesor pasó la mañana organizando nuestra visita al museo. |
| :------------------------------------------------------------------------------------------------------------------------------ |
| <p style="color: {{ $x }}; text-align: center;" >venían</p>                                                                     |
| <p style="color: {{ $y }}; text-align: center;" >vinieron </p>                                                                  |
| <p style="color: {{ $z }}; text-align: center;" >vino</p>                                                                       |

@endcomponent

<?php $x="#00b6ff"; $y="black"; $z="black"; $w=""; ?>

@switch($request->q26)
    @case("1")
        <?php $x="#00b6ff"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 26.- {{ $w }}  .......... es importante para la salud.                   |
| :------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >Caminar </p>  |
| <p style="color: {{ $y }}; text-align: center;" >Camino </p>   |
| <p style="color: {{ $z }}; text-align: center;" >Caminando</p> |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q27)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 27.- {{ $w }}  Antes de .........., él ya .......... hablar de Ecuador.           |
| :---------------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >viajó, había oído</p>  |
| <p style="color: {{ $y }}; text-align: center;" >viajaba, ha oído </p>  |
| <p style="color: {{ $z }}; text-align: center;" >viajar, había oído</p> |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q28)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 28.- {{ $w }}  !.........., la verdad! ¿Dónde lo dejaste?                |
| :------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >Dice a mi</p> |
| <p style="color: {{ $y }}; text-align: center;" >Dígame </p>   |
| <p style="color: {{ $z }}; text-align: center;" >Dime</p>      |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q29)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 29.- {{ $w }}  .......... mejorar tu español, debes practicar .......... lo menos una hora más en la casa.|
| :---------------------------------------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >Por, por</p>                                   |
| <p style="color: {{ $y }}; text-align: center;" >Para, para </p>                                |
| <p style="color: {{ $z }}; text-align: center;" >Para, por</p>                                  |

@endcomponent

<?php $x="#00b6ff"; $y="black"; $z="black"; $w=""; ?>

@switch($request->q30)
    @case("1")
        <?php $x="#00b6ff"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 30.- {{ $w }}  Están tocando la puerta, ¿quién ..........?           |
| :----------------------------------------------------------|
| <p style="color: {{ $x }}; text-align: center;" >será</p>  |
| <p style="color: {{ $y }}; text-align: center;" >es</p>    |
| <p style="color: {{ $z }}; text-align: center;" >serás</p> |

@endcomponent

<?php $x="black"; $y="#00b6ff"; $z="black"; $w=""; ?>

@switch($request->q31)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="#00b6ff"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 31.- {{ $w }}  Para el viernes que viene, ya .......... los documentos y .......... empezar con los trámites. |
| :-------------------------------------------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >habrás llegado, podremos</p>                       |
| <p style="color: {{ $y }}; text-align: center;" >habrán llegado, podremos </p>                      |
| <p style="color: {{ $z }}; text-align: center;" >habrá llegado, podemos</p>                         |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q32)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 32.- {{ $w }}  Espero que .......... tiempo para conocer Cuenca y .......... comprar un sombrero de paja toquilla o “Panama Hat”. |
| :---------------------------------------------------------------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >tenemos, poder</p>                                                     |
| <p style="color: {{ $y }}; text-align: center;" >tengamos, podemos</p>                                                  |
| <p style="color: {{ $z }}; text-align: center;" >tengamos, podamos</p>                                                  |

@endcomponent

<?php $x="#00b6ff"; $y="black"; $z="black"; $w=""; ?>

@switch($request->q33)
    @case("1")
        <?php $x="#00b6ff"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 33.- {{ $w }}  Vine aquí .......... el español, .......... aprender a hablar con la gente y que me ........... |
| :--------------------------------------------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >por, para, entiendan</p>                            |
| <p style="color: {{ $y }}; text-align: center;" >para, para, entienden</p>                           |
| <p style="color: {{ $z }}; text-align: center;" >por, para, entenderán</p>                           |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q34)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 34.- {{ $w }}  Si .......... dinero, .......... a muchos lugares de Sudamérica.                               |
| :-------------------------------------------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >tengo, viajaría</p>                                |
| <p style="color: {{ $y }}; text-align: center;" >tenía, viajaría </p>                               |
| <p style="color: {{ $z }}; text-align: center;" >tuviera, viajaría</p>                              |

@endcomponent

<?php $x="black"; $y="#00b6ff"; $z="black"; $w=""; ?>

@switch($request->q35)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="#00b6ff"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 35.- {{ $w }}  Les recomendé a mis hermanos que .........., pero no me .......... caso. |
| :---------------------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >vayan, hacen</p>             |
| <p style="color: {{ $y }}; text-align: center;" >fueran, hicieron</p>         |
| <p style="color: {{ $z }}; text-align: center;" >fueran, hacían</p>           |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q36)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 36.- {{ $w }}  Quién .......... 20 años menos.                           |
| :------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >tenía</p>     |
| <p style="color: {{ $y }}; text-align: center;" >tuvieras </p> |
| <p style="color: {{ $z }}; text-align: center;" >tuviera</p>   |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q37)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 37.- {{ $w }}  No .......... tarde, si .......... menos tráfico. Lo siento.                    |
| :----------------------------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >hubieras llegado, habría</p>        |
| <p style="color: {{ $y }}; text-align: center;" >hubiera llegado, habría habido </p> |
| <p style="color: {{ $z }}; text-align: center;" >habría llegado, hubiera habido</p>  |

@endcomponent

<?php $x="#00b6ff"; $y="black"; $z="black"; $w=""; ?>

@switch($request->q38)
    @case("1")
        <?php $x="#00b6ff"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 38.- {{ $w }}  Estoy segura que tiene .......... 50 años.                  |
| :--------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >menos de</p>    |
| <p style="color: {{ $y }}; text-align: center;" >menos que </p>  |
| <p style="color: {{ $z }}; text-align: center;" >a menos que</p> |

@endcomponent

<?php $x="black"; $y="#00b6ff"; $z="black"; $w=""; ?>

@switch($request->q39)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="#00b6ff"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 39.- {{ $w }}  De tal .........., tal astilla.                        |
| :---------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >madera</p> |
| <p style="color: {{ $y }}; text-align: center;" >palo</p>   |
| <p style="color: {{ $z }}; text-align: center;" >tronco</p> |

@endcomponent

<?php $x="#00b6ff"; $y="black"; $z="black"; $w=""; ?>

@switch($request->q40)
    @case("1")
        <?php $x="#00b6ff"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 40.- {{ $w }}  .......... viajamos a Galápagos.                                 |
| :-------------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >De vez en cuando</p> |
| <p style="color: {{ $y }}; text-align: center;" >A vez en cuando</p>  |
| <p style="color: {{ $z }}; text-align: center;" >De vez a cuando</p>  |

@endcomponent

<?php $x="black"; $y="#00b6ff"; $z="black"; $w=""; ?>

@switch($request->q41)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="#00b6ff"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 41.- {{ $w }}  No te lo .........., aunque me ...........                     |
| :------------------------------------------------------------------ |
| <p style="color: {{ $x }}; text-align: center;" >diré, ruegas</p>   |
| <p style="color: {{ $y }}; text-align: center;" >diría, rogaras</p> |
| <p style="color: {{ $z }}; text-align: center;" >diría, rogarás</p> |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q42)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 42.- {{ $w }}  No hay .......... persona que .......... inglés ...........          |
| :------------------------------------------------------------------------ |
| <p style="color: {{ $x }}; text-align: center;" >nadie, hable, acá</p>    |
| <p style="color: {{ $y }}; text-align: center;" >ningún, hable, aquí</p>  |
| <p style="color: {{ $z }}; text-align: center;" >ninguna, hable, aquí</p> |

@endcomponent

<?php $x="#00b6ff"; $y="black"; $z="black"; $w=""; ?>

@switch($request->q43)
    @case("1")
        <?php $x="#00b6ff"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 43.- {{ $w }}  Espero que ya no .......... más la rodilla a María y que hoy esté mejor. |
| :---------------------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >le haya dolido</p>           |
| <p style="color: {{ $y }}; text-align: center;" >le ha dolido </p>            |
| <p style="color: {{ $z }}; text-align: center;" >le duele</p>                 |

@endcomponent

<?php $x="black"; $y="#00b6ff"; $z="black"; $w=""; ?>

@switch($request->q44)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="#00b6ff"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 44.- {{ $w }}  .......... muy importante que todos .......... cuál .......... el verdadero significado de .......... tradición.  |
| :--------------------------------------------------------------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >Fue, entiendan, es, ese</p>                                           |
| <p style="color: {{ $y }}; text-align: center;" >Era, entendieran, era, esa</p>                                        |
| <p style="color: {{ $z }}; text-align: center;" >Era, entendería, sería, esa</p>                                       |

@endcomponent

<?php $x="black"; $y="#00b6ff"; $z="black"; $w=""; ?>

@switch($request->q45)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="#00b6ff"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 45.- {{ $w }}  ¿A qué hora ..........?, no los oí entrar.                     |
| :------------------------------------------------------------------ |
| <p style="color: {{ $x }}; text-align: center;" >llegarán</p>       |
| <p style="color: {{ $y }}; text-align: center;" >habrán llegado</p> |
| <p style="color: {{ $z }}; text-align: center;" >llegaran</p>       |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q46)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 46.- {{ $w }}  Cuando .........., llámame que necesito hablar contigo.  |
| :------------------------------------------------------------ |
| <p style="color: {{ $x }}; text-align: center;" >puedes </p>  |
| <p style="color: {{ $y }}; text-align: center;" >pudieras</p> |
| <p style="color: {{ $z }}; text-align: center;" >puedas</p>   |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q47)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 47.- {{ $w }}  .......... sea el jefe, debe gritarnos.                   |
| :------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >Porque </p>   |
| <p style="color: {{ $y }}; text-align: center;" >Ya que </p>   |
| <p style="color: {{ $z }}; text-align: center;" >No porque</p> |

@endcomponent

<?php $x="black"; $y="black"; $z="#00b6ff"; $w=""; ?>

@switch($request->q48)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="red"; ?>
        @break

    @case("3")
        <?php $z="#00b6ff"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 48.- {{ $w }}  No me gusta el té, .......... el café.                  |
| :----------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >pero</p>    |
| <p style="color: {{ $y }}; text-align: center;" >aunque </p> |
| <p style="color: {{ $z }}; text-align: center;" >sino</p>    |

@endcomponent

<?php $x="black"; $y="#00b6ff"; $z="black"; $w=""; ?>

@switch($request->q49)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="#00b6ff"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 49.- {{ $w }}  .......... la internet, mucha gente se entera de todo.      |
| :--------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >No obstante</p> |
| <p style="color: {{ $y }}; text-align: center;" >Mediante</p>    |
| <p style="color: {{ $z }}; text-align: center;" >Sin embargo</p> |

@endcomponent

<?php $x="black"; $y="#00b6ff"; $z="black"; $w=""; ?>

@switch($request->q50)
    @case("1")
        <?php $x="red"; ?>
        @break

    @case("2")
        <?php $y="#00b6ff"; ?>
        @break

    @case("3")
        <?php $z="red"; ?>
        @break

    @default
        <?php $w="*"; ?>
@endswitch

@component('mail::table')

| 50.- {{ $w }}  Las bajas temperaturas del próximo diciembre, .......... a mucha gente. |
| :--------------------------------------------------------------------------- |
| <p style="color: {{ $x }}; text-align: center;" >hicieron daño</p>           |
| <p style="color: {{ $y }}; text-align: center;" >harán daño</p>              |
| <p style="color: {{ $z }}; text-align: center;" >hacen daño</p>              |

@endcomponent

# Description about student

{{ $request->description }}



Thanks, {{ config('app.name') }}
@endcomponent