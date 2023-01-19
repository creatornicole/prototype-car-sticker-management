<x-layout>
    <h1>Vereinbare einen Termin für {{$employee->firstname}}</h1>

    <form method="post" action=""> <!-- saves date input in database -->
        <input type="text"> 
        <button type="submit">Termin senden</button> <!-- send confirmation mail to employee -->
    </form>

    <hr>

    <!-- summary of request -->
    <table class="request-summary-table">
        <tr>
            <td>Nachname, Vorname</td>
            <td>{{$employee->surname}}, {{$employee->firstname}}</td>
        </tr>
        <tr>
            <td>E-Mail-Adresse</td>
            <td>{{$employee->email}}</td>
        </tr>
        <tr>
            <td>Autodaten</td>
            <td>{{$employee->brand}}, {{$employee->model}}, {{$employee->type}}, {{$employee->hstn}}, {{$employee->cnstrYear}}, {{$employee->color}}</td>
        </tr>
        <tr>
            <td>Beantragt am...</td>
            <td>{{$employee->created_at}}</td> <!-- TODO: change format -->
        </tr>
    </table>


</x-layout>