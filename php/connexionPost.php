<?php
header("Content-Type: application/json");
session_start();


try {
    $config = parse_ini_file(__DIR__ . "/../.env");
    $pdo = new PDO("mysql:dbname={$config["db_name"]};host={$config["db_host"]};charset=utf8mb4", $config["db_user"], $config["db_password"]);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pseudoForm = trim($_POST['pseudo']);
    $passwordForm = $_POST['password'];

    // Vérification administrateur
    $queryAdmin = "SELECT id, password FROM administrateur WHERE pseudo = :pseudo";
    $stmtAdmin = $pdo->prepare($queryAdmin);
    $stmtAdmin->bindParam(':pseudo', $pseudoForm);
    $stmtAdmin->execute();
    $adminUser = $stmtAdmin->fetch(PDO::FETCH_ASSOC);

    if ($adminUser && password_verify($passwordForm, $adminUser['password'])) {
        $_SESSION['admin_id'] = $adminUser['id'];
        $_SESSION['admin_pseudo'] = $pseudoForm;
        echo json_encode(["status" => "success", "role" => "admin"]);
        exit();
    }

    // Vérification utilisateur
    $queryUser = "SELECT id, nom, prenom, password FROM utilisateurs WHERE pseudo = :pseudo";
    $stmtUser = $pdo->prepare($queryUser);
    $stmtUser->bindParam(':pseudo', $pseudoForm);
    $stmtUser->execute();
    $normalUser = $stmtUser->fetch(PDO::FETCH_ASSOC);

    if ($normalUser && password_verify($passwordForm, $normalUser['password'])) {
        $_SESSION['user_id'] = $normalUser['id'];
        $_SESSION['user_nom'] = $normalUser['nom'];
        $_SESSION['user_prenom'] = $normalUser['prenom'];
        $_SESSION['user_pseudo'] = $pseudoForm;
        echo json_encode(["status" => "success", "role" => "user"]);
        exit();
    }

    echo json_encode([
        "status" => "error",
        "message" => "Identifiants incorrects"
    ]);
    exit();
} catch (PDOException $e) {
    echo json_encode([
        "status" => "error",
        "message" => $e->getMessage()
    ]);
    exit();
}
