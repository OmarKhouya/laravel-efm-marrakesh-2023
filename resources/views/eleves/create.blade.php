<section>
    <h1>Gestion des Eleves</h1>
    <p>Ajouter un éleve</p>
    <form action="{{ route('eleves.store') }}" method="POST">
        @csrf
        <div>
            <label for="id_eleve">ID élève:</label>
            <input type="text" name="id" id="id_eleve" readonly>
        </div>
        <div>
            <label for="nom_eleve">Nom:</label>
            <input type="text" name="nom" id="nom_eleve">
        </div>
        <div>
            <label for="prenom_eleve">Prénom:</label>
            <input type="text" name="prenom" id="prenom_eleve">
        </div>
        <div>
            <label for="club">Id Club</label>
            <select name="club" id="">
                @foreach ($clubs as $club)
                    <option value="{{ $club->id }}">{{ $club->id }} {{ $club->nom }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Ajouter</button>
            <button type="reset">Annuler</button>
        </div>
    </form>
</section>
