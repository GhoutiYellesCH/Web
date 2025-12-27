<?php
// Vérifie si le formulaire a été soumis
//if(isset($_POST))
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    // Affiche les informations envoyées
    echo "<h2>Merci pour votre message !</h2>";
    echo "<p><strong>Nom :</strong> $nom</p>";
    echo "<p><strong>Email :</strong> $email</p>";
    echo "<p><strong>Message :</strong><br>$message</p>";
} else {
    echo "Aucun formulaire soumis.";
}
?>
