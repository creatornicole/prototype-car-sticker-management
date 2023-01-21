<x-layout>
    <h1>Beklebungen</h1>

    <!-- show all active requests -->
    @if(count($active) == 0)
        <p>Keine Beklebungen vorhanden.</p>
    @else 
        <!-- show number of each voucher -->
        <table class="request-table">
            <tr>
                <th>Nachname, Vorname</th>
                <th>Autodaten</th>
                <th>Gutschein</th>
                <th>Laufend seit...</th>
                <th>Letzte Ausschüttung</th>
                <th>Nächste Ausschüttung</th>
            </tr>
            <!-- get all active requests from database -->
            @foreach($active as $a)
                <tr>
                    <td>{{$a->surname}}, {{$a->firstname}}</td>
                    <td>{{$a->brand}}, {{$a->model}}, {{$a->hstn}}, {{$a->type}}, {{$a->cnstrYear}}, {{$a->color}}</td>
                    <td></td>
                    <td>{{$a->appointment}}</td>
                    <td></td>
                    <td></td>
                </tr>
            @endforeach
        </table>
    @endif
</x-layout>