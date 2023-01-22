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
        /************************* Layout *****************************/
        body {
            display: flex;
            font-family: 'Poppins', sans-serif;
            color: #343434;
            background-color: #EAEDF8;
            margin: 0;
        }

        main {
            padding: 50px 75px 0px 75px;
        }

        nav {
            background-color: #CED2E0;
            height: 100vh;
            padding: 200px 30px 0px 30px;
        }

        nav a {
            text-decoration: none; 
            display: block;
            margin-bottom: 20px;
        }

        nav a:hover {
            text-shadow: 2px 4px 10px #343434;
        }

        .flash-message {
            background-color: #CED2E0;
            text-align: center;
            border-radius: 0 0 5px 5px;
            width: 350px;
            padding: 3px;
            /* position message horizontally centered at the top of the screen */
            position: absolute;
            margin: 0 auto;
            top: 0;
            left: 0;
            right: 0;
        }

        h1 {
            margin-bottom: 50px;
        }

        a {
            color: #343434;
            text-decoration: underline;
        }

        a:hover {
            color: #CED2E0;
            background-color: #343434;
        }

        hr {
            margin: 30px 0;
        }

        /************************* Forms *****************************/
        label {
            display: inline-block;
            width: 200px;
            margin-left: 10px;
        }

        form button,
        form input,
        form select {
            font-family: 'Poppins', sans-serif;
        }

        form input {
            display: inline-block;
            border: none;
            border-radius: 3px;
            width: 200px;
            padding: 10px;
            margin: 25px 0px 0px 15px;
        }

        form button {
            border-radius: 3px;
            border: 0.5px solid #343434;
            padding: 9px;
            margin-top: 25px;
            margin-left: 10px;
        }

        form button:hover {
            border: 2px solid #343434;
            cursor: pointer;
        }

        form select {
            padding: 9px;
        }

        .request-form button {
            /* right align button in div */
            display: block;
            margin-left: auto;
            margin-right: 9px;
        }

        /* input fail message */
        .fail-message {
            color: red;
        }

        /************************* Tables *****************************/
        table,
        th,
        td {
            border: 1px solid #343434;
            border-collapse: collapse;
        }

        table {
            margin-right: 10px;
        }

        th {
            height: 55px;
        }


        th,
        td {
            padding: 5px 12px;
        }

        /************************* Others *****************************/
        /*** Requests Page (Marketing) ***/
        .requests-main-div {
            display: flex; /* position request page tables next to each other */
        }

    </style>
</head>
<body>

        <nav>
            <a href="/">Mitarbeiter</a>
            <a href="/marketing">Marketing</a>
            <a href="/sekretariat">Sekretariat</a>
            <a href="/vouchers">Gutscheinauswahl</a>
        </nav>
    
        <!-- dynamic headline -->
        <h1>{{session('headline')}}</h1>
    
        <main>
            {{$slot}}
        </main>
   
    

    <!-- flash message component, position fixed in style -->
    <x-flash-message />

</body>
</html>
