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

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #EAEDF8;
            padding: 70px 120px;
            margin: 0;
        }

        .menubar a {
            color: #343434;
           text-decoration: none; 
           margin-right: 25px;
        }  

        .menubar a:hover {
            text-shadow: 2px 4px 10px #343434;
        }

        form {
            margin: 50px;
        }

        form label,
        form input {
            display: block;
        }

        form input {
            margin: 0px 0px 20px 15px;
        }

        form button:hover {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="menubar">
        <a href="">Mitarbeiter</a>
        <a href="">Marketing</a>
        <a href="">Sekretariat</a>
        <a href="">Gutscheinauswahl</a>
    </div>

    <!-- display flash message if message exists -->
    @if(session()->has('message'))
        <p>{{session('message')}}</p>
    @endif

    <!-- make sticker request via form -->
    <form method="post" action="/submit"> <!-- form adds data to database -->
        @csrf <!-- prevents cross side scripting -->
        
        <label for="firstname">Vorname:</label>
        <input placeholder="Vorname" type="text" name="firstname">
        @error('firstname')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <label for="surname">Nachname:</label>
        <input placeholder="Nachname" type="text" name="surname">
        @error('surname')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <label for="brand">Automarke:</label>
        <input placeholder="Automarke" type="text" name="brand">
        @error('brand')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <label for="model">Modell:</label>
        <input placeholder="Modell" type="text" name="model">
        @error('model')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <label for="hstn">Herstellernummer:</label>
        <input placeholder="Herstellernummer" type="text" name="hstn"> <!-- optional TODO: add ? button for description -->
        @error('hstn')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <label for="type">Typ:</label>
        <input placeholder="Typ" type="text" name="type">
        @error('type')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <label for="cnstrYear">Baujahr:</label>
        <input placeholder="Baujahr" type="text" name="cnstrYear">
        @error('cnstrYear')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <label for="color">Farbe (Farbcode):</label>
        <input placeholder="Farbe" type="text" name="color"> <!-- optional TODO: add ? button for description -->
        @error('color')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

        <!-- to make actual request form has to be submitted by pressing the submit button -->
        <button type="submit">Beantragen</button>
    </form>

</body>
</html>
