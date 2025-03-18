<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <h2>Formulaire d'Inscription</h2>
        <form action="{{ route('students.store') }}" method="POST" >
            @csrf
            <div class="form-group" class="mb-3">
            <label for="nom" class="form-label">Nom :</label>
            <input type="text" class="form-control w-50" id="nom" name="nom" required>
            </div>

            <div class="form-group" class="mb-3">
            <label for="prenom" class="form-label">Prénom :</label>
            <input type="text" class="form-control w-50" id="prenom" name="prenom" required>
            </div>

            <div class="form-group" class="mb-3">
            <label for="age" class="form-label">Âge :</label>
            <input type="number" class="form-control w-50" id="age" name="age" min="1" max="120" required>
            </div>

            <div class="form-group" class="mb-3">
            <label for="tel" class="form-label">Téléphone :</label>
            <input type="tel" class="form-control w-50" id="tel" name="tel" required>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
            <a href="/students/list" class="btn btn-danger">Liste des Étudiants</a>
        </form>
    </div>

</body>
</html>
