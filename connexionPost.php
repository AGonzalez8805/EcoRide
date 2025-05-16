<?php
// require_once dirname(__DIR__) . "/config.php";
// require_once ROOT_PATH . "/templates/header.php";

// Configuration pour Docker - utiliser le nom du service MySQL défini dans docker-compose.yml
$dsn = 'mysql:host=db;dbname=EcoRide'; // 'db' est le nom habituel du service MySQL dans docker-compose
$username = 'Amelie';
$password = 'Ag1805Sz0602@';

try {
    // Connexion à la base de données
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Récupérer les données du formulaire de connexion
    $pseudoForm = $_POST['pseudo'];
    $passwordForm = $_POST['password'];
    //Récupérer les utilisateurs 
    $query = "SELECT * FROM utilisateurs WHERE pseudo = :pseudo";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':pseudo', $pseudoForm);
    $stmt->execute();
    //Est-ce que l’utilisateur (mail) existe ?
    if ($stmt->rowCount() == 1) {
        $monUser = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($passwordForm, $monUser['password'])) {
            echo "Connexion réussie ! Bienvenue " . $monUser['nom'] . $monUser['prenom'];
        } else {
            echo "Mot de passe incorrect";
        }
    } else {
        echo "Utilisateur introuvable, vérifier votre pseudo ?";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}



// require_once ROOT_PATH . "/templates/footer.php";
