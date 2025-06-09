<?php

// Configuration de la base de données
$config = parse_ini_file(__DIR__ . "/.env");

try {
    $conn = new mysqli($config["db_host"], $config["db_user"], $config["db_password"], $config["db_name"]);

    if ($conn->connect_error) {
        die("Je ne suis pas connecté: " . $conn->connect_error);
    }
} catch (Exception $e) {
    die("Erreur de connexion: " . $e->getMessage());
}


define('ROOT_PATH', __DIR__);
