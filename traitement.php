<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/styles/style.css">
    <title>Série TV</title>
</head>
<body>
    <h1>Recommandation de Séries TV</h1>
    <div class="contain">
    <?php
        $seriesDatabase = [
            'Dark' => ['genre' => 'thriller' , 'lien' => 'https://www.netflix.com/be-fr/title/80100172', 'image' => './Assets/imgs/dark.jpg'],
            'Élite' => ['genre' => 'drame' , 'lien' => 'https://www.netflix.com/be-fr/title/80200942' , 'image' => './Assets/imgs/élite.jpg'],
            'Into the night' => ['genre' => 'science-fiction' , 'lien' => 'https://www.netflix.com/be-fr/title/81008221' , 'image' => './Assets/imgs/intonight.jpg'],
            'Breaking bad' => ['genre' => 'drame' , 'lien' => 'https://www.netflix.com/be-fr/title/70143836' , 'image' => './Assets/imgs/breakingbad.jpg'],
            'The wire' => ['genre' => 'crime' , 'lien' => 'https://www.netflix.com/be-fr/title/81074110' , 'image' => './Assets/imgs/thewire.jpg'],
            'True detective' => ['genre' => 'crime' , 'lien' => 'https://www.primevideo.com/detail/0RV8SHFJ3IXG2X93O59PV8OXJV/ref=atv_dp?language=fr_FR' , 'image' => './Assets/imgs/truedetective.jpg'],
            'Dexter' => ['genre' => 'crime' , 'lien' => 'https://www.netflix.com/title/70136126' , 'image' => './Assets/imgs/dexter.jpg'],
            'Peaky blinders' => ['genre' => 'drame' , 'lien' => 'https://www.netflix.com/be-fr/title/80002479' , 'image' => './Assets/imgs/peakyblinders.jpg'],
        ];

        $userGenre = strtolower($_POST['genre']);   
        if (empty($userGenre)) {
            // Champ de genre vide, rediriger vers la page principale avec un message d'erreur
            header("Location: index.php");
            exit;
        }
        $matchingSeries = [];
        foreach ($seriesDatabase as $serie => $details){
            if ($details['genre'] === $userGenre) {
                $matchingSeries[$serie] = $details;
            }
        }

        // Si des séries correspondent au genre, affichez-les, sinon redirigez vers la page principale
        if (!empty($matchingSeries)) {
            print("<h2>Séries dans le genre '$userGenre' :</h2>");
            print("<div class = 'series-list'>");
            foreach ($matchingSeries as $serie => $details) {
                print("<div class='series-item'>");
                print("<img src='" . htmlspecialchars($details['image']) . "' alt='" . htmlspecialchars($serie) . "' class='series-image'>");
                print("<div class='series-title'>" . htmlspecialchars($serie) . "</div>");
                print("<p><a href='" . htmlspecialchars($details['lien']) . "'class='series-link' target='_blank'>En savoir plus </a>");            
                print("</div>");

            }
            print("</div>");
            print("<a href='index.php' class='series-link'>Nouvelle recherche</a>");
        } 
        else {
            header("Location: index.php");
            exit;   
        }
    ?>
</body>
</html>