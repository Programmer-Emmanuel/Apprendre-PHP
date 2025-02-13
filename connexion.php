<?php 
//Declaration des variables
$db_host = 'localhost';
$db_name = 'revision_php';
$db_user = 'root';
$db_password = '';

try{
    //Commmandes pour connecter à la base de données
    $pdo = new PDO ("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
    echo "Connexion réussie...";
}
catch(PDOException $e){
    //Message d’erreur
    echo 'Connection failed: '. $e->getMessage();
    exit();
}


