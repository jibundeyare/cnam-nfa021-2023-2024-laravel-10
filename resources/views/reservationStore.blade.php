@extends('base')

@section('title', 'Confirmation')

@section('content')
<h2>Confirmation</h2>

<p>Votre réservation a bien été prise en compte</p>
<ul>
    <li>{{ $reservation->nom }}</li>
    <li>{{ $reservation->couverts }}</li>
    <li>{{ $reservation->jour->format('d/m/Y') }}</li>
    <li>{{ $reservation->heure }}</li>
    <li>{{ $reservation->telephone }}</li>
    <li>{{ $reservation->commentaires }}</li>
</ul>
@endsection