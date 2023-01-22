<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Sticker Managementtool (Prototype)</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Stylesheet public/css/ -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
        <nav>
            <a href="/">Mitarbeiter</a>
            <a href="/marketing">Marketing</a>
            <a href="/sekretariat">Sekretariat</a>
            <a href="/vouchers">Gutscheinauswahl</a>
        </nav>
    
        <main>
            {{$slot}}
        </main>
   
    

    <!-- flash message component, position fixed in style -->
    <x-flash-message />

</body>
</html>
