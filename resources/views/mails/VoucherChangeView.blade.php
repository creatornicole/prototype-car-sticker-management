@component('mail::message') <!-- use laravel email template -->

Ihre Gutscheinauswahl wurde gerade verändert. Ihr neuer gewünschter Gutschein ist {{$voucher}}.

@component('mail::button', ['url' => 'http://localhost:8000/vouchers'])
    Zur Gutscheinübersicht
@endcomponent


@endcomponent 