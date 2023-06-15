<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuto en php2</title>
</head>
<body>
    <?php

    function afficher() {
        echo "Bonjour a vous tous";
    }
    afficher();
    function bjrUtilisateur($prenom) {
        echo 'Bonjour '.$prenom. '<br/>'; 
    }
    echo '<br />';
    bjrUtilisateur('Pierre');
    function views($prenoms,$age) {
        echo $prenoms. ' a '.$age. ' ans <br />';
    }
    views('Pierre',25)
    ?>

    <h4>Un paragraphe sur les fonctions integrees permettant des traitements d'un tableaux</h4>

    <?php

       $voitures = array(
        'Citroen' => 'DS8',
        'Hundai' => 'GSD',
        'Honda' => 'DQ8',
        'Apache' => 'VTS',
        'Renault' => 'Clio',
       );
       print_r(array_keys($voitures));
    ?>
</body>
</html>