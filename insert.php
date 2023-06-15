<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserion a nouveau</title>
</head>
<body>
    <?php
        $server ='localhost';
        $login ='root';
        $pass= 'souley';
        // $dbase = 'dbase';
        try {
        $connexion =new PDO("mysql:host=$server;dbname=dbase",$login,$pass);
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connexion reussie"; 

        $insertion ="INSERT INTO users(nom,prenom,mail) VALUES('Pierre','Bamba','bamba@gmail.com')";
        $connexion->exec($insertion);
        echo "valeur bien inseree";

    }
    catch (PDOException $e){
        echo "Error: ".$e->getMessage();
    }
    ?>
    
</body>
</html>