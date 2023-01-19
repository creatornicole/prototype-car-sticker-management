<x-layout>
    <h1>Vereinbare einen Termin für {{$employee->firstname}}</h1>

    <form method="post" action="/marketing/{{$employee->id}}/date/save"> <!-- saves date input in database -->
        @csrf <!-- prevents crossside scripting -->
        @method('PUT') <!-- updating request to database -->

        <input type="text" name="appointment"> 
        @error('appointment')
            <!-- action if validation fails -->
            <p>{{$message}}</p>
        @enderror

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