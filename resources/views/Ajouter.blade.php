<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une chambre</title>
</head>
<body>
    <h1>Ajouter une chambre</h1>

    <form action="{{ route('ajouter_traite) }}" method="post">
        @csrf

        <input type="text" name="nom" placeholder="Nom de la chambre">
        <input type="number" name="prix" placeholder="Prix de la chambre">
        <input type="number" name="nombre_lits" placeholder="Nombre de lits">

        <button type="submit">Ajouter</button>
    </form>
</body>
</html>