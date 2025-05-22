<?php

try {
    $config = parse_ini_file(__DIR__ . "/../.env");

    $pdo = new PDO("mysql:dbname={$config["db_name"]};host={$config["db_host"]};charset=utf8mb4", $config["db_user"], $config["db_password"]);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les données du formulaire de contact
    $NomInputForm = $_POST['Nom'];
    $PrenomInputForm = $_POST['Prenom'];
    $EmailInputForm = $_POST['Email'];
    $MessageInputForm = $_POST['Message'];

    // Insérer les données dans une table 'contacts'
    $insertQuery = "INSERT INTO contacts (nom, prenom, email, message)
                    VALUES (:nom, :prenom, :email, :message)";
    $insertStmt = $pdo->prepare($insertQuery);
    $insertStmt->bindParam(':nom', $NomInputForm);
    $insertStmt->bindParam(':prenom', $PrenomInputForm);
    $insertStmt->bindParam(':email', $EmailInputForm);
    $insertStmt->bindParam(':message', $MessageInputForm);
    $insertStmt->execute();

    // Redirection vers une page de succès après soumission réussie
    header("Location: /pages/contact.php?success=sent");
    exit();
} catch (PDOException $e) {
    // Enregistrer l'erreur pour le débogage
    error_log("Erreur de soumission du formulaire de contact : " . $e->getMessage());

    // Redirection vers la page de contact avec un message d'erreur
    header("Location: /pages/contact.php?error=database_error");
    exit();
}
