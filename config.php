<?php
// Configuration de la base de données
$host = 'db';
$user = 'Amelie';
$password = 'Ag1805Sz0602@';
$database = 'ecoride';


$conn = new mysqli($host, $user, $password, $database);


if ($conn->connect_error) {

    die("Je ne suis pas connecté: " . $conn->connect_error);
}

define('ROOT_PATH', __DIR__);
