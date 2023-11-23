<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier une chambre</title>
</head>
<body>
    <h1>Modifier une chambre</h1>

    <form action="/chambres/{{ $chambre->id }}" method="post">
        @csrf
        @method('PUT')

        <input type="text" name="nom" value="{{ $chambre->nom }}" placeholder="Nom de la chambre">
        <input type="number" name="prix" value="{{ $chambre->prix }}" placeholder="Prix de la chambre">
        <input type="number" name="nombre_lits" value="{{ $chambre->nombre_lits }}" placeholder="Nombre de lits">

        <button type="submit">Modifier</button>
    </form>
</body>
</html>