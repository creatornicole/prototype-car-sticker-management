<x-layout>
    <h1>All derzeitigen Anträge auf Beklebung</h1>

    <!-- main div for positioning -->
    <div class="requests-main-div">
        <!-- left side with all requested requests -->
        <div>
            <h2>Ausstehende Anträge</h2>
            <!-- display all database request entries in table where status is 'beantragt'
                if database entries exist -->
            @if(count($requested) == 0)
                <p>Zur Zeit sind keine neuen Anträge vorhanden.</p>
            @else 
                <table>
                    <tr>
                        <th></th>
                        <th>Nachname, Vorname</th>
                        <!-- optional TODO: Add Email Adress -->
                        <th>Autodaten</th>
                        <th>Antrag erstellt am...</th>
                    </tr>
        
                    <!-- get all database request entries -->
                    @foreach ($requested as $request)
                            <tr>
                                <td>
                                    <a href="/marketing/{{$request->id}}/appointment">Bestätigen</a><br>
                                    <a href="/marketing/{{$request->id}}/decline">Ablehnen</a>
                                </td> <!-- Add Button to Send Mail to Employee -->
                                <td>{{$request->surname}}, {{$request->firstname}}</td>
                                <td>{{$request->brand}}, {{$request->model}}, {{$request->hstn}}, {{$request->type}}, {{$request->cnstrYear}}, {{$request->color}}</td>
                                <td>{{$request->created_at}}</td> <!-- optional TODO: change format -->
                            </tr>
                    @endforeach
                </table>
            @endif 
            </div>
        
            <!-- right side with all confirmed requests -->
            <div>
                <h2>Termine bestätigter Anträge</h2>
            <!-- display all database request entries in table where status is 'bestaetigt'
                if database entries exist -->
            @if(count($confirmed) != 0)
                <table>
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