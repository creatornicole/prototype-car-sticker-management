<x-layout>
    <h1>All derzeitigen Anträge auf Beklebung</h1>

    <!-- main div for positioning -->
    <div class="requests-main-div">
        <!-- left side with all requested requests -->
        <div>
            <!-- display all database request entries in table where status is 'beantragt'
                if database entries exist -->
            @if(count($requested) == 0)
                <p>Zur Zeit sind keine neuen Anträge vorhanden.</p>
            @else 
                <table class="request-table">
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
                    @foreach ($requested as $request)
                            <tr>
                                <td>
                                    <a href="/marketing/{{$request->id}}/appointment">Bestätigen</a><br>
                                    <a href="/marketing/{{$request->id}}/decline">Ablehnen</a>
                                </td> <!-- Add Button to Send Mail to Employee -->
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
            </div>
        
            <!-- right side with all confirmed requests -->
            <div>
            <!-- display all database request entries in table where status is 'bestaetigt'
                if database entries exist -->
            @if(count($confirmed) != 0)
                <table class="request-table">
                    <tr>
                        <th>Nachname, Vorname</th>
                        <th>Termin</th>
                    </tr>
                    @foreach($confirmed as $confirm)
                        <!-- optional TOOD: sort by earliest date -->
                        <tr>
                            <td>{{$confirm->surname}}, {{$confirm->firstname}}</td>
                            <td>{{$confirm->appointment}}</td>
                            <td><a href="/marketing/{{$confirm->id}}/appointment/confirm">Bestätigen</a></td> <!-- button to confirm appointment -->
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div>


</x-layout>