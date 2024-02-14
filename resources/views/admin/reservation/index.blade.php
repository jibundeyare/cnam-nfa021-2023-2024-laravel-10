@extends('base')

@section('title', 'Admin - Réservation - Index')

@section('content')
<section>
    <h2>Admin - Réservation - Index</h2>

    <table>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>couverts</th>
            <th>heure</th>
            <th>jour</th>
            <th>telephone</th>
            <th>commentaires</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>actions</th>
        </tr>
        @foreach ($reservations as $reservation)
            <tr>
                <td>{{ $reservation->id }}</td>
                <td>{{ $reservation->nom }}</td>
                <td>{{ $reservation->couverts }}</td>
                <td>{{ $reservation->heure }}</td>
                <td>{{ $reservation->jour }}</td>
                <td>{{ $reservation->telephone }}</td>
                <td>{{ $reservation->commentaires }}</td>
                <td>{{ $reservation->created_at }}</td>
                <td>{{ $reservation->updated_at }}</td>
            </tr>
        @endforeach
    </table>
</section>
@endsection