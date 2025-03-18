<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Personnes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h2 class="mb-4 text-center">Liste des Personnes</h2>
        <table class="table table-bordered table-striped " >
            <thead class="table-dark">
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Âge</th>
                    <th>Sexe</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($personnes as $personne)
                    <tr>
                        <td>{{ $personne['nom'] }}</td>
                        <td>{{ $personne['prenom'] }}</td>
                        <td>{{ $personne['age'] }}</td>
                        <td>{{ $personne['sexe'] }}</td>
                    </tr>
                 @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
