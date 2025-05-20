<?php
$dsn = 'mysql:host=db;dbname=EcoRide';
$username = 'user_php';
$password = 'mq@2Rcrm';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pseudoForm = $_POST['pseudo'];
    $passwordForm = $_POST['password'];

    // Vérification pour les administrateurs
    $queryAdmin = "SELECT id, password FROM administrateur WHERE pseudo = :pseudo";
    $stmtAdmin = $pdo->prepare($queryAdmin);
    $stmtAdmin->bindParam(':pseudo', $pseudoForm);
    $stmtAdmin->execute();
    $adminUser = $stmtAdmin->fetch(PDO::FETCH_ASSOC);

    if ($adminUser && password_verify($passwordForm, $adminUser['password'])) {
        session_start();
        $_SESSION['admin_id'] = $adminUser['id'];
        echo "Connexion administrateur réussie ! Bienvenue.";
        header('Location: /admin/tableau_de_bord.php'); // Rediriger vers le tableau de bord admin
        exit();
    } else {
        // Si ce n'est pas un administrateur, on vérifie dans la table utilisateurs
        $queryUser = "SELECT id, nom, prenom, password FROM utilisateurs WHERE pseudo = :pseudo";
        $stmtUser = $pdo->prepare($queryUser);
        $stmtUser->bindParam(':pseudo', $pseudoForm);
        $stmtUser->execute();
        $normalUser = $stmtUser->fetch(PDO::FETCH_ASSOC);


        if ($normalUser && password_verify($passwordForm, $normalUser['password'])) {
            session_start();
            $_SESSION['user_id'] = $normalUser['id'];
            header('Location: /index.php'); // Rediriger vers la page d'accueil utilisateur
            exit();
        } else {
            header('Location: /pages/connexion.php?erreur=1');
            exit();
        }
    }
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
