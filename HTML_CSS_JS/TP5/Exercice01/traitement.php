<!DOCTYPE html>
<html>
<head>
    <title>Traitement du Formulaire </title>
</head>
<body>
    <h1>Informations soumises :</h1>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            //Ajouter le code ici. 
             // 1-Récupération des informations 

           //2-Affichage des informations:
            //2.1 Affichage de Nom et E-mail
            //2.2 Affichage des langages préférés
            //2.3 Affichage de Niveau et ville
            //2.4 Affichage du commentaire
        } else {
            echo "<p>Aucune donnée n'a été soumise via le formulaire.</p>";
        }
    ?>
    <p><a href="formulaire.html">Retour au formulaire</a></p>
</body>
</html>
