<?php
header("Content-Type: application/json");

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

    if ($stmt->rowCount() > 0) {
        echo json_encode([
            "status" => "erreur",
            "message" => "Cette adresse email est déjà utilisée"
        ]);
        exit();
    }

    $hashedPassword = password_hash($PasswordInputForm, PASSWORD_DEFAULT);

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
    echo json_encode([
        "status" => "succes",
        "role" => "utilisateur"
    ]);
    exit();
} catch (PDOException $e) {
    // Redirection vers la page d'inscription avec un message d'erreur
    echo json_encode([
        "status" => "erreur",
        "message" => "Erreur de base de données: " . $e->getMessage()
    ]);
    exit();
}
