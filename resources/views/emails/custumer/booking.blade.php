@component('mail::message')
Hello {{ $booking->title.' '.$booking->lname.' '.$booking->fname }},

The Instituto Superior de Español thanks you for your Enrollment with us. We will organize everything and will send your complete confirmation in the next 48 hours.

Thanks, {{ config('app.name') }}
@endcomponent
