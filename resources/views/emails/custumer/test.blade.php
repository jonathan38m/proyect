@component('mail::message')

#Infotmation

@component('mail::table')

|            Campo           |          Valor           |
| -------------------------- |:------------------------:|
| <strong>Name</strong>      | {{ $request->name }}     |
| <strong>Last Name</strong> | {{ $request->lastName }} |
| <strong>Country</strong>   | {{ $request->country }}  |
| <strong>Email</strong>     | {{ $request->email }}    |

@endcomponent


Thanks, {{ config('app.name') }}
@endcomponent