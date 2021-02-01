@component('mail::message')
#Infotmation

@component('mail::table')


|            Campo           |          Valor           |
| -------------------------- |:------------------------:|
| <strong>Name</strong>      | {{ $request->fname }}     |
| <strong>Last Name</strong> | {{ $request->lname }} |
| <strong>Email</strong>     | {{ $request->email }}    |
| <strong>Message</strong>   | {{ $request->message }}  |


@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
