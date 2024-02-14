<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Séries TV</title>
</head>
<body>
    <h1>Recommandation de Séries TV</h1>
    <div class="container">
        <form action="traitement.php" method="post">
            <label for="genre">Entrez un genre de série : </label>
            <input type="text" name="genre" id="genre" required>
            <input type="submit" value="Rechercher">
        </form>
    </div>
</body>
</html>