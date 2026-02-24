<?php

require_once __DIR__ . '/vendor/autoload.php';

// Charger les variables d'environnement
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


$host = $_ENV['DB_HOST'];
$port = $_ENV['DB_PORT'];
$user = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];
$dbname = $_ENV['DB_NAME'];

// Créer la chaîne de connexion
$connexionString = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

// Connexion à la base de données

    $db = new PDO($connexionString, $user, $password);
   

    
?>