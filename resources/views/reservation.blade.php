@extends('base')

@section('content')
<section>
    <h2>Réservation</h2>
    <form action="" method="post">
        <div>
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" min="3" max="50" required>
        </div>
        <div>
            <label for="couverts">Nombre de couverts</label>
            <input type="number" name="couverts" id="couverts" min="1" max="16" required>
        </div>
        <div>
            <label for="heure">Heure</label>
            <select name="heure" id="heure" required>
                <option value=""></option>
                <!-- créneaux du midi -->
                <option value="12:00:00">12:00</option>
                <option value="12:30:00">12:30</option>
                <option value="13:00:00">13:00</option>
                <option value="13:30:00">13:30</option>
                <!-- créneaux du soir -->
                <option value="20:00:00">20:00</option>
                <option value="20:30:00">20:30</option>
                <option value="21:00:00">21:00</option>
                <option value="21:30:00">21:30</option>
            </select>
        </div>
        <div>
            <label for="jour">Jour</label>
            <input type="date" name="jour" id="jour" required>
        </div>
        <div>
            <label for="telephone">Numéro de téléphone</label>
            <input type="phone" name="telephone" id="telephone" required>
        </div>
        <div>
            <label for="commentaires">Commentaires</label>
            <textarea name="commentaires" id="commentaires" cols="30" rows="10"></textarea>
        </div>
        <div>
            <button type="submit">Réserver</button>
        </div>
    </form>
</section>
@endsection