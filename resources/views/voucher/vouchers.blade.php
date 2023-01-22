<x-layout>
    <h1>Wähle deinen Wunschgutschein aus</h1>

    <!-- show employee's vouchers -->
    <table>
        @foreach($active as $a)
            <tr>
                <td>{{$a->surname}}, {{$a->firstname}}</td>
                <td>{{$a->voucher}}</td>
                <td><a href="/vouchers/{{$a->id}}/change">Ändern</a></td>
            </tr>
        @endforeach
    </table>
    
    
</x-layout>