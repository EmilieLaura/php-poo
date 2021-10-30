<?php

// Connexion à la BDD
$dsn = 'mysql:host=db;dbname=jeu';
$user = 'root';
$pwd = 'example';
$pdo = new PDO($dsn, $user, $pwd);

try {
    $bdd = new PDO('mysql:host=localhost;dbname=jeu', 'root', 'example');
}
catch(Exception $e) {
    die('Erreur: '.$e->getMessage());
}
