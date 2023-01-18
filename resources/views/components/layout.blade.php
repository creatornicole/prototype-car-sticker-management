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
            padding: 85px 120px;
            margin: 0;
        }

        .flash-message {
            background-color: #CED2E0;
            text-align: center;
            border-radius: 0 0 5px 5px;
            height: 50px;
            width: 350px;
            position: fixed;
            top: 0; 
            left: 30%; /* horizontally centered */
        }

        nav a {
            color: #343434;
           text-decoration: none; 
           margin-right: 25px;
        }  

        nav a:hover {
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

    <nav>
        <a href="">Mitarbeiter</a>
        <a href="">Marketing</a>
        <a href="">Sekretariat</a>
        <a href="">Gutscheinauswahl</a>
    </nav>

    <main>
        {{$slot}}
    </main>

    <!-- flash message component, position fixed in style -->
    <x-flash-message />

</body>
</html>
