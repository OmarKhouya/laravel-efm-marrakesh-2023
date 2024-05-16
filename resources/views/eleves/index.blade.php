<table border="1">
    <tr>
        <th>ID Eleve</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Id Club</th>
    </tr>
    @forelse ($eleves as $eleve)
        <tr>
            <td>{{ $eleve->id }}</td>
            <td>{{ $eleve->nom }}</td>
            <td>{{ $eleve->prenom }}</td>
            <td>{{ $eleve->club->id }}</td>
            <td><a href="{{ route('eleves.edit', $eleve->id) }}">Modifier</a></td>
            <td>
                <form action="{{ route('eleves.destroy', $eleve->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </td>
            <td><a href="{{ route('eleves.show', $eleve->id) }}">>></a></td>
        </tr>
    @empty
        <tr>
            <td colspan="4">Aucun éleve</td>
        </tr>
    @endforelse
</table>
