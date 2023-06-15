<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pour des instances de visteurs</title>
</head>
<body>
    <?php
        include_once('visiteur.class.php') ;
        include_once('femme.class.php') ;
        $visiteur1 = new Visiteur;
       

        $visiteur1->set_prenom("Souley");
        $visiteur1->set_nom("Traore");

        echo 'Bonjour, Ton nom est '.$visiteur1->nom.'<br />';
        echo 'Bonjour, Ton prenom est '.$visiteur1->get_prenom().'<br />';
       
        
    ?>
</body>
</html>