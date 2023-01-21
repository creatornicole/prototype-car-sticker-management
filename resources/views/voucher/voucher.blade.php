<x-layout>
    <h1>Wähle Deinen Wunschgutschein aus</h1>

    <p>Aktuell: {{$employee->voucher}}</p>

    <form method="post" action="/vouchers/{{$employee->id}}/change/save"> <!-- saves date input in database -->
        @csrf <!-- prevents crossside scripting -->
        @method('PUT') <!-- updating request to database -->

        <label for="voucherlist">Ändern:</label>
        <select name="voucherlist">
            <option value="Wunschgutschein 1">Wunschgutschein 1</option>
            <option value="Wunschgutschein 2">Wunschgutschein 2</option>
            <option value="Wunschgutschein 3">Wunschgutschein 3</option>
        </select>

        <button type="submit">Speichern</button> <!-- optional TODO: send notification mail to employee -->
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