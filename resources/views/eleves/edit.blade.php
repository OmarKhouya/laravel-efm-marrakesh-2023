<section>
    <h1>Gestion des Eleves</h1>
    <p>Modifier un éleve</p>
    <form action="{{ route('eleves.update', $eleve->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="id_eleve">ID élève:</label>
            <input type="text" name="id" value="{{ $eleve->id }}" id="id_eleve" readonly>
        </div>
        <div>
            <label for="nom_eleve">Nom:</label>
            <input type="text" name="nom" value="{{ $eleve->nom }}" id="nom_eleve">
        </div>
        <div>
            <label for="prenom_eleve">Prénom:</label>
            <input type="text" name="prenom" value="{{ $eleve->prenom }}" id="prenom_eleve">
        </div>
        <div>
            <label for="club">ID Club</label>
            <select name="club" id="">
                @foreach ($clubs as $club)
                    <option value="{{ $club->id }}">{{ $club->id }} {{ $club->nom }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <button type="submit">Modifier</button>

            <button type="button"><a href="{{ route('eleves.index') }}"> Annuler</a></button>
        </div>
    </form>
</section>
