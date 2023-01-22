@component('mail::message') <!-- use laravel email template -->

Hiermit wird bestätigt, dass die Beklebung Ihres Privat-Kfz am {{$appointment}} stattgefunden hat.

Jetzt müssen Sie sich nur noch einen Gutschein heraussuchen:

@component('mail::button', ['url' => 'http://localhost:8000/vouchers'])
    Zur Gutscheinauswahl
@endcomponent


@endcomponent 