<div>
    <h1>Gestion des Eleves</h1>
    <ul>
        <li>ID Eleve: {{ $eleve->id }}</li>
        <li>Nom: {{ $eleve->nom }}</li>
        <li>Prénom: {{ $eleve->prenom }}</li>
        <li>Id Club: {{ $eleve->club->id }}</li>
    </ul>
    <h1>Liste d'activités auxquelles l'eleve a participé</h1>
    <table border="1">
        <tr>
            <th>ID activité </th>
            <th>Description</th>
            <th>Date début</th>
            <th>Nombre de jours</th>
        </tr>
        @forelse ($eleve->activites as $activite)
            <tr>
                <td>{{ $activite->id }}</td>
                <td>{{ $activite->description }}</td>
                <td>{{ $activite->dateDebut }}</td>
                <td>{{ $activite->nombreJours }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4" style="text-align: center">Aucune activité</td>
            </tr>
        @endforelse
    </table>
    <p>Nombre total des jours: {{ $eleve->activites->sum('nombreJours') }}</p>
</div>
