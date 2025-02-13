<?php

require "connexion.php";
echo "<br/>";

$user = "CREATE TABLE IF NOT EXISTS USER(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
)";

try{
    $pdo->exec($user);
    echo "Table USER créée avec succès";
}
catch(PDOException $e){
    echo "Erreur lors de la création de la base de données:" . $e->getMessage();
}