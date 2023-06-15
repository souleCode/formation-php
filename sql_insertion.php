<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tuto insertion sql</title>
</head>
<body>
    <?php
        // $server ='localhost';
        // $login ='root';
        // $pass= 'souley';
        // try{ 
        // $connexion =new PDO("mysql:host=$server;dbame=test1",$login,$pass);
        // $connexion = $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'connexion reussie';
        // // $insertion = "INSERT INTO users(nom,prenom,mail) 
        // //              VALUES ('Traore','Abiba','abiba@gmail.com')";
        // // $connexion->exec($insertion);
        // // echo 'valeur bien inseree';
        // $insertion = "INSERT INTO users(nom, prenom, mail) VALUES (:nom, :prenom, :mail)";
        // $stmt = $connexion->prepare($insertion);

        // $stmt->bindValue(':nom', 'Traore');
        // $stmt->bindValue(':prenom', 'Abiba');
        // $stmt->bindValue(':mail', 'abiba@gmail.com');
        // $stmt->execute();
        // echo 'valeur bien inseree';
             
        // }
        // catch(PDOException $e){
        //     echo "Echec: " . $e->getMessage();
        // }

        // $resultat = $connexion->execute($insertion);
        // if ($resultat === false) {
        // $erreur = $connexion->errorInfo();
        // echo "Erreur d'exécution de la requête : " . $erreur[2];
        // exit();
// }


    ?>

<?php
// Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbame=test1', 'root', 'souley');
} catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}
// $bdd->exec("USE test1");
// Préparation de la requête d'insertion
$req = $bdd->prepare('INSERT INTO users(nom, prenom, mail) VALUES(:nom, :prenom, :mail)');

// Exécution de la requête d'insertion
$req->execute(array(
    'nom' => 'Traore',
    'prenom' => 'Abiba',
    'mail' => 'abiba.@mail.com',
));

echo 'Les données ont été insérées dans la base de données.';
?>

</body>
</html>