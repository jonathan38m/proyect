@component('mail::message')
# Regards,

A new user has requested information on the site {{ config('app.url') }}

@component('mail::table')
| Label    |               Information                 |
| -------- |:-----------------------------------------:|
| Name:    |   {{ $request->title }} {{ htmlentities($request->name) }}      |
| E-mail:  |           {{ $request->email }}           |
| Subject: |   {{ htmlentities($request->subject) }}   |
| Message: | {{ htmlentities($request->message) }} |
@endcomponent

<hr/>

# Meanwhile we invite you to follow our Social Networks:

<p style="text-align: center;">
<a href="https://www.facebook.com/institutosuperiordeespanol1/">Facebook</a> | <a href="https://www.instagram.com/institutosuperiordeespanol/">Instagram</a> | <a href="https://www.tripadvisor.com/Attraction_Review-g294308-d10085877-Reviews-ISE_Instituto_Superior_de_Espanol-Quito_Pichincha_Province.html">TripAdvisor</a> | <a href="https://www.youtube.com/channel/UC1-Vo-8UEBxAnOTgSY_x9pQ">YouTube</a>
</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
