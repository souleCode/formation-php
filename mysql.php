<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php et Mysql</title>
</head>
<body>
    <?php
        $server ='localhost';
        $login ='root';
        $pass= 'souley';
         try {
         $connexion =new PDO("mysql:host=$server;dbname=test1",$login,$pass);
         $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         echo "Connexion la base de donnée reussie";
        // $connexion->exec("CREATE DATABASE test3");
        // echo "Base de donnée créée avec succes";
        // $codesql= "CREATE TABLE visiteurs(
        //     id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     nom VARCHAR(50),
        //     prenom VARCHAR(50),
        //     email VARCHAR(70),
        // )";
        // $connexion =exec($codesql);
        // echo "Table: visiteurs created";
        }
        catch (PDOException $e) {
            echo "Echec de connexion: " . $e->getMessage();
        }

    ?>
    
</body>
</html>