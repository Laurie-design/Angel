<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'Étudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Détails de l'Étudiant</h2>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">{{ $student->nom }} {{ $student->prenom }}</h5>
                <p><strong>ID:</strong> {{ $student->id }}</p>
                <p><strong>Nom:</strong> {{ $student->nom }}</p>
                <p><strong>Prénom:</strong> {{ $student->prenom }}</p>
                <p><strong>Âge:</strong> {{ $student->age }}</p>
                <p><strong>Téléphone:</strong> {{ $student->tel }}</p>
            </div>
        </div>

        {{-- <a href="{{ route('students.index') }}" class="btn btn-secondary mt-3">Retour à la liste</a> --}}
        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning mt-3">Modifier</a>
        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mt-3" onclick="return confirm('Voulez-vous vraiment supprimer cet étudiant ?')">Supprimer</button>
        </form>
    </div>
</body>
</html>
