<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taget</title>
</head>
<body>
<p> Bonjour
<?php
// //    echo htmlspecialchars( $_POST['prenom']); 
//    echo strip_tags( $_POST['prenom']); 
// ?>
<!-- // , fais comme chez toi </p> -->

<!-- // <p>Tu ne t'appelles pas  -->
     <?php
//     // echo htmlspecialchars( $_POST['prenom']); 
//     echo strip_tags( $_POST['prenom']);
//     ?>
<!-- //     ,j'ai du mal comprendre</p>
//     <p>Clique <a href="formulaire.php"> ici</a> pour rectifier! </p> -->
         
<?php

    $prenom =$nom =$speudo ="";

    function sercurisation($donnees) {
        $donnees = trim($donnees);
        $donnees = strip_tags($donnees);
        $donnees = stripslashes($donnees);
        return $donnees;
    }

    $prenom =sercurisation($_POST['prenom']);    
    $nom =sercurisation($_POST['nom']); 
    $speudo =sercurisation($_POST['speudo']); 

    echo 'Ton prenom est : '.$prenom.'<br />';
    echo 'Ton nom est : '.$nom.'<br />';
    echo' Ton speudo est :'.$speudo .'<br />'; 
?>
</body>
</html>

