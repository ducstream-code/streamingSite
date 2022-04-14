<?php


//connexion a la base de donnée
try {
    $db = new PDO('mysql:host=152.228.218.3:3306;dbname=streaming', 'rooters', 'P?ok68y8', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
