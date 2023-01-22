@component('mail::message') <!-- use laravel email template -->

Neuer Antrag auf Beklebung eines Privat-Kfz!

@component('mail::button', ['url' => 'http://localhost:8000/marketing'])
    Zu den Anträgen
@endcomponent


@endcomponent 