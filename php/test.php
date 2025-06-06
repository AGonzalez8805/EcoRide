<?php

const DBHOST = 'db';
const DBUSER = 'Amelie';
const DBPASS = 'Ag1805Sz0602@';
const DBNAME = 'test';

$dsn = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;

try {
    $db = new PDO($dsn, DBUSER, DBPASS);

    echo 'connecté';
} catch (PDOException $exception) {
    echo 'Erreur' . $exception->getMessage();
    die;
}
