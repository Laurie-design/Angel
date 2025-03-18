<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un étudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h2 class="mb-4">Modifier l'étudiant</h2>

        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" class="form-control w-50" id="nom" name="nom" value="{{ $student->nom }}" required>
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom :</label>
                <input type="text" class="form-control w-50" id="prenom" name="prenom" value="{{ $student->prenom }}" required>
            </div>

            <div class="mb-3">
                <label for="age" class="form-label">Âge :</label>
                <input type="number" class="form-control w-50" id="age" name="age" min="1" max="120" value="{{ $student->age }}" required>
            </div>

            <div class="mb-3">
                <label for="tel" class="form-label">Téléphone :</label>
                <input type="tel" class="form-control w-50" id="tel" name="tel" value="{{ $student->tel }}" required>
            </div>

            <button type="submit" class="btn btn-success">Modifier</button>
            <a href="{{ route('students.list') }}" class="btn btn-secondary">Annuler</a>
        </form>
    </div>

</body>
</html>
