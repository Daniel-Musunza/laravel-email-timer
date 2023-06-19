@component('mail::message')

 {{$name}}. welcome bro,its great how do you see it?
@component('mail::button', ['url' => 'https://musunzaportfolio.web.app'])
click here
@endcomponent

@endcomponent