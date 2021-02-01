@component('mail::message')

A new reservation on the site: {{ config('app.url') }}

## Information


@component('mail::table')
| Field     | Description                                                       |
| --------- | -----------------------------------------------------------------:|
| Name      | {{ $booking->title }} {{ $booking->lname }} {{ $booking->fname }} |
| Email     | {{ $booking->email }}                                             |
| Country   | {{ $booking->country->name }}                                     |
| City      | {{ $booking->city   }}                                            |
| Address   | {{ $booking->address }}                                           |
| Students  | {{ $booking->students }}                                           |
@endcomponent



## Courses

@foreach ($booking->options as $option)

@component('mail::table')
| Course     | Description                           |
| ---------- | -------------------------------------:|
| Location   | {{ $option->course->location->name }} |
| Course     | {{ $option->course->name }}           |
| Option     | {{ $option->name }}                   |
| Weeks      | {{ $option->pivot->weeks }}           |
| From       | {{ $option->pivot->from   }}          |
| Price      | US$ {{ $option->pivot->price   }}     |
| Comment    | {{ $option->pivot->comment   }}       |
@endcomponent

@endforeach


@if($booking->accommodations)

##Accommodation 

@foreach ($booking->accommodations as $accommodation)


@switch($accommodation->id)
    @case(1)


@component('mail::table')
| Field         | Description                              |
| ------------- | ----------------------------------------:|
| Accommodation | {{ $accommodation->name }}               |
| Price         | US$ {{ $accommodation->pivot->price   }} |
| Days          | {{ $accommodation->pivot->time   }}      |
| Start         | {{ $accommodation->pivot->startDate }}   |
| End           | {{ $accommodation->pivot->endDate }}     |
| Meals         | {{ $accommodation->pivot->meals }}       |
| Bathroom      | {{ $accommodation->pivot->bathroom==1 ? 'Private' : 'Shared'   }}  |
| People        | {{ $accommodation->pivot->people   }}    |
| Type          | {{ $accommodation->pivot->type==1 ? 'Single' : ($accommodation->pivot->type==2 ? 'Double' : 'Dormitory' )   }}      |
@endcomponent



        @break

    @case(2)


@component('mail::table')
| Field         | Description                             |
| ------------- | ---------------------------------------:|
| Accommodation | {{ $accommodation->name }}              |
| Price         | US$ {{ $accommodation->pivot->price }}  |
| Days          | {{ $accommodation->pivot->time   }}     |
| Start         | {{ $accommodation->pivot->startDate }}  |
| End           | {{ $accommodation->pivot->endDate }}    |
| People        | {{ $accommodation->pivot->people   }}   |
| Type          | {{ $accommodation->pivot->type   }}     |
@endcomponent



        @break

    @case(3)


@component('mail::table')
| Field         | Description                                 |
| ------------- | -------------------------------------------:|
| Accommodation | {{ $accommodation->name }}                  |
| Name Hotel    | {{ $accommodation->pivot->nameHotel   }}    |
| Address Hotel | {{ $accommodation->pivot->addressHotel   }} |
| Phone Hotel   | {{ $accommodation->pivot->phoneHotel   }}   |
@endcomponent



        @break

    @case(4)


@component('mail::table')
| Field         | Description                             |
| ------------- | ---------------------------------------:|
| Accommodation | {{ $accommodation->name }}              |
| Price         | US$ {{ $accommodation->pivot->price }}  |
| Weekends      | {{ $accommodation->pivot->time   }}     |
@endcomponent



        @break

@endswitch



@endforeach


@endif

@if($booking->meetAirport)

## Airport Information 


@component('mail::table')
| Field           | Description                      |
| --------------- | --------------------------------:|
| Date of Arrival | {{ $booking->dateArrival }}      |
| Time of Arrival | {{ $booking->timeArrival   }}    |
| Airline Company | {{ $booking->airlineCompany   }} |
| Flight Number   | {{ $booking->flightNumber   }}   |
@endcomponent


@endif





# Payment

@if($booking->payment->id == 1)

@component('mail::table')
| Field           | Description                         |
| --------------- | -----------------------------------:|
| Payment method  | {{ $booking->payment->name }}       |
| Payment status  | {{ $booking->authorizationResult }} |
@endcomponent

@else

@component('mail::table')
| Field           | Description                   |
| --------------- | -----------------------------:|
| Payment method  | {{ $booking->payment->name }} |
@endcomponent

@endif


# Total: US$ {{ $booking->total }}


Thanks, {{ config('app.name') }}
@endcomponent
