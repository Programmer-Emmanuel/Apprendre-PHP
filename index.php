<?php
    require_once "table_user.php";

    echo "<br/>";

    //CREATE
    // $sql = "INSERT INTO USER(nom, prenom, email, password) 
    // VALUES(
    //     :nom, :prenom, :email, :password
    // )";
        
    // $prepare = $pdo->prepare($sql);
    // $password = password_hash('123456789', PASSWORD_BCRYPT);
    // $prepare->execute([
    //     ':nom' => 'Bamidélé',
    //     ':prenom' => 'Marc',
    //     ':email' => 'marbamidele1@gmail.com',
    //     ':password' => $password, 
    // ]);
    
    // echo "Insertion réussie";




    //READ
    // $sql = "SELECT * FROM USER";
    // $prepare = $pdo->prepare($sql);
    // $prepare->execute();

    // $users = $prepare->fetchAll(PDO::FETCH_ASSOC);

    // foreach ($users as $user) {
    //     echo "<hr>";
    //     echo "ID : ". $user['id']. "<br>";
    //     echo "Nom : ". $user['nom']. "<br>";
    //     echo "Prénom : ". $user['prenom']. "<br>";
    //     echo "Email : ". $user['email']. "<br>";
    //     echo "Mot de passe : ". $user['password']. "<br>";
    //     echo "<hr>";
    // }
    

    //UPDATE
    // $sql = "UPDATE USER SET nom = :new_nom WHERE id = :id";
    // $prepare = $pdo->prepare($sql);
    // $prepare->execute([
    //     ':new_nom' => 'Bamidélé Modifié',
    //     ':id' => 1,
    // ]);
    
    // echo "Mise à jour réussie";


    //DELETE
    $sql = "DELETE FROM USER WHERE id = :id";
    $prepare = $pdo->prepare($sql);
    $prepare->execute([
        ':id' => 1,
    ]);
    
    echo "Suppression réussie";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="connexion.php">Page de connexion à la base de donnée</a><br>
    <a href="table_user.php">Creation de la table User</a>
</body>
</html>