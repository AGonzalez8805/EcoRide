<?php

try {
    $config = parse_ini_file(__DIR__ . "/../.env");

    $pdo = new PDO("mysql:dbname={$config["db_name"]};host={$config["db_host"]};charset=utf8mb4", $config["db_user"], $config["db_password"]);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Récupérer les données du formulaire d'inscription
    $EmailInputForm = $_POST['EmailInput'];
    $NomInputForm = $_POST['NomInput'];
    $PrenomInputForm = $_POST['PrenomInput'];
    $PseudoInputForm = $_POST['PseudoInput'];
    $PasswordInputForm = $_POST['PasswordInput'];

    // Vérifié l'unicité de l'adresse mail
    $query = "SELECT * FROM utilisateurs WHERE email = :email";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $EmailInputForm);
    $stmt->execute();

    // Est-ce que l'utilisateur (mail) existe?
    if ($stmt->rowCount() > 0) {
        die("Cette adresse email est déjà utilisée");
    }
    // Hashage
    $hashedPassword = password_hash($PasswordInputForm, PASSWORD_DEFAULT);
    // Insérer les données dans la base
    $insertQuery = "INSERT INTO utilisateurs (email, nom, prenom, pseudo, password) 
                VALUES (:email, :nom, :prenom, :pseudo, :password)";
    $insertStmt = $pdo->prepare($insertQuery);
    $insertStmt->bindParam(':email', $EmailInputForm);
    $insertStmt->bindParam(':nom', $NomInputForm);
    $insertStmt->bindParam(':prenom', $PrenomInputForm);
    $insertStmt->bindParam(':pseudo', $PseudoInputForm);
    $insertStmt->bindParam(':password', $hashedPassword);
    $insertStmt->execute();
    // Redirection vers la page de connexion après inscription réussie
    header("Location: /pages/connexion.php?success=inscription");
    exit();
} catch (PDOException $e) {
    // Redirection vers la page d'inscription avec un message d'erreur
    header("Location: inscription.php?error=database_error");
    exit();
}
