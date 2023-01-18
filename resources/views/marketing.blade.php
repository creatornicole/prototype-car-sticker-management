<x-layout>
    <h1>All derzeitigen Anträge auf Beklebung</h1>

    <!-- display all database request entries in table if database entries exist -->
    @if(count($requests) == 0)
        <p>Zur Zeit sind keine Anträge vorhanden.</p>
    @else 
    <table>
        <tr>
            <th></th>
            <th>Nachname</th>
            <th>Vorname</th>
            <!-- TODO: Add Email Adress -->
            <th>Automarke</th>
            <th>Automodell</th>
            <th>Herstellernummer</th>
            <th>Typ</th>
            <th>Baujahr</th>
            <th>Farbcode</th>
            <th>Antrag erstellt am...</th>
        </tr>

        <!-- get all database request entries -->
        @foreach ($requests as $request)
            <tr>
                <td>O</td> <!-- Add Button to Send Mail to Employee -->
                <td>{{$request->surname}}</td>
                <td>{{$request->firstname}}</td>
                <td>{{$request->brand}}</td>
                <td>{{$request->model}}</td>
                <td>{{$request->hstn}}</td>
                <td>{{$request->type}}</td>
                <td>{{$request->cnstrYear}}</td>
                <td>{{$request->color}}</td>
                <td>{{$request->created_at}}</td> <!-- optional TODO: change format -->
            </tr>
        @endforeach
    </table>
    @endif  

</x-layout>