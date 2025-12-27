<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <title>Gestion des utilisateurs</title>
    <style> 
          button {
            padding: 10px 15px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background: #45a049;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    
    <?php
      
// Configuration de la base de données
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "TP_Data_Base";

// Connexion à la base de données

// Fonction pour la connexion à la base de données
function connecterBD() {
    global $serveur, $utilisateur, $mot_de_passe, $base_de_donnees;
    
    try {
        
        // Ajoutez le code ici
        
    } catch(PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
}

// Fonction pour Ajouter un Contact à la base de Données
function ajouterContact($nom, $prenom, $telephone, $email) {
    try {
       
      // Ajoutez le code ici
        return "Utilisateur ajouté avec succès!";
    } catch(PDOException $e) {
        return "Erreur d'ajout : " . $e->getMessage();
    }
}
// Fonction pour Supprimer un Contact de la base de Données

function supprimerContact($email) {
    try {
        
        //Ajoutez le code ici
        
        echo "Utilisateur supprimé avec succès!";
    } catch(PDOException $e) {
        return "Erreur d'ajout : " . $e->getMessage();
    }
}
// Fonction pour la recherche d'un Contact à base de nom,prénom, teléphone ou email
function rechercherContact($terme) {
    try {
        
     //Ajoutez le code ici
     
    } catch(PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}

//  Fonction pour Afficher les contacts de la base de Données
function afficherContacts() {
     try {
        $connexion = connecterBD();
        $sql = "SELECT * FROM contacts";
        $stmt = $connexion->prepare($sql);
        $stmt->execute();
        
       $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
       if( count($result) > 0) {
        echo "<h3> La liste des contacts: </h3>";
         echo "<table><tr><th>ID</th><th>Nom</th><th>Prénom</th><th>téléphone</th><th>Email</th></tr>";
       foreach ($result as  $items) { 
        echo "<tr>
            <td>" . htmlspecialchars($items['id']) . "</td>
            <td>" . htmlspecialchars($items['nom']) . "</td>
            <td>" . htmlspecialchars($items['prenom']) . "</td>
            <td>" . htmlspecialchars($items['telephone']) . "</td>
            <td>" . htmlspecialchars($items['email']) . "</td>

        </tr>";
      }
      echo "</table>";
    } else {
        echo "Aucun Contact trouvé.";}
    } catch(PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}

// Gestion des actions POST et GET (Ajouter ,Supprimer, Rechercher )
// Si la méthode est POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Si bouton Ajouter est cliqué
    if (isset($_POST['Ajouter'])) {
        $nom = $_POST['nom'];
        $prenom=$_POST['prenom'];
        $telephone=$_POST['telephone'];
        $email = $_POST['email'];
        echo ajouterContact($nom, $prenom, $telephone, $email);
             afficherContacts();
    } 
    //Si la méthode est GET 
} elseif($_SERVER["REQUEST_METHOD"] == "GET"){
      //Si bouton Supprimer est cliqué
     if (isset($_GET['Supprimer'])) {
             $email=$_GET['supprimerEmail'];
             supprimerContact($email);
             afficherContacts();
     
     } 
     //Si bouton Rechercher est cliqué
    elseif (isset($_GET['Rechercher'])) {
             $terme=$_GET['rechercheTerme'];
             rechercherContact($terme);
    } 
}

    ?>
    <p><a href="contacts.html">Retour au formulaire</a></p>
</body>
</html>
