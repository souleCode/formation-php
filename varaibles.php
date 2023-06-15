<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tuto en php</title>
</head>
<body>
 <?php 
//     '<hr>';
// $departement = 'Kourouma';
// $N1 =2;
// $N2 =10;
// $N3 =20;


// $addition = $N1 + $N2 + $N3;
// $Multi = $N2 * $N3;
// $Div = $N1 / $N2;
// $Mod = $N2 % $N1;
//     echo ' L\'addition de '.$N1.',' .$N2.' et ' .$N3. ' est : '.$addition. '<br/>'; 
//     echo 'la Muliplictaion des deux nombre est:'.$Multi. '<br/>'; 
//     echo 'division des deux nombre est:'.$Div. '<br/>'; 
//     echo 'le modulo des deux nombre est:'.$Mod. '<br/> <br/>'; 
 
//  echo " $departement est un depatement de N'Dorola <br />";

//  echo '' .$departement. 'est un deparatement de N\'dorola <br />' ; // la methode la plus utiliser our afficher le contenue des variables
//  echo '' .$N1. '+' .$N3. '<br /><hr>'; // la concatenation ,les $N1 et $N3 sont vue comme des chaines de caracteres
    ?>




    <?php 
    //-------------------------Les conditions en php---------------------
    //  $heure_connexion =21;

    //  if($heure_connexion < 18){
    //     echo "Passez une excellente ournee ";
    //     $journee = "Oui";
    //  }
    //  else{
    //     echo "Passez une excellente soiree";
    //     $journee = "Non";
    //  }
    //  echo ' Fait-il jour? La reponse est '.$journee. '<br/> <hr>';

        
    //  $note =20;

    //  switch($note){
    //     case 0: echo "C'est nul";
    //     break;
    //     case 1: echo "C'est tres mauavais";
    //     break;
    //     case 4: echo "Ce n'est pas bien";
    //     break;
    //     case 11: echo " Moyen "; 
    //     break;
    //     case 16 : echo "Bien jouer";
    //     break;
    //     case 20 : echo "Barvo...."; 
    //     break;
    //     default: echo " j'ai pas de commentaire par rapport a xa <br/>"; break;
        
    //  }
    //  '<hr>';
    //  $age =24;
    //  if($age >=18){
    //     $autorisation = true;

    //  }
    //  else{
    //     $autorisation = false;
    //  }
    //   $autorisation = ($age >=18) ? true : false;
    //  echo $autorisation
    // ?>
    <!-- // <p> Ceci est un paragraphe en html </p> <br> <hr> -->


    // <?php
    //----------------------Les boucles en php------------------

    // $x =1;
    // $y =1;   
     
    // while ($x<10){
    //     echo "Ceci est le nombre" .$x. "<br/>";
    //     $x++;
    // }
   
    // do{
    //     echo "Ceci est le nombre avec do...while()" .$y. "<br/>";
    //     $y++;
    // }while ($y<10);


//  $x = 1;

//  for ($x = 1; $x < 10; $x++) {
//     echo "Ceci est le nombre" .$x. "<br/>";
//  }
//  '<hr/>';
//     ?>
//  <hr>
<!-- //  <h5> Ceci est un paragraphe pour les Tableaux </h5> <br>  -->
  <?php

//    ---------------------les tableaux en php-----------------
        // $prenoms = array('Paul', 'John','Ali','Jacques','Jean','Boris','Claude');
        // $prenom[0] ='John';
        // $prenom[1] ='Jean'; 
        // $prenom[2] ='Jacques';
        // $prenom[3] ='Claude';
        // $prenom[4] ='Boris';   


        // $age = array(
        //     'John' =>30,
        //     'Jacques' =>20,
        //     'Claude' =>'Non renseigner',
        // ); // ecriture automatique
         
//         $age['John'] =30;
//         $age['Jacques'] =20;
//         $age['Claude'] ="Non renseigner"; // ecriture manuellement 
//  echo $prenoms[0] .'<br/>';
//  echo $age['Jacques'] .'<br/>';

//  for($i = 0; $i <=6; $i++){
//     echo $prenoms[$i] .'<br/>';
//  }
//  '<br/>';
//  foreach($age as $items){
//     echo $items .'<br/>';

//  }

//  foreach($prenoms as $pn){
//     echo $pn .'<br/>';
// }
//  foreach($age as $clef => $values){
//     echo "L'age de " . $clef . " est " . $values . '<br/>';
//  } 
 
//  echo '<br/><br/>';

// echo '<pre>';
//   print_r($age);
// echo '</pre>'; // pour le debugage 
// $membres = array(
//     array('Pierre', 24, 'pierre.@gmail.com'),
//     array('Jean', 30, 'jean.@gmail.com'),
//     array('Marie', 22, 'marie.@gmail.com'),
//     array('Ali', 24, 'ali.@gmail.com')
// );
// echo $membres[0][0].' a '.$membres[0][1]. ' ans . Son mail est : '.$membres[0][2].'<br/>';
// echo $membres[1][0].' a '.$membres[1][1]. ' ans . Son mail est : '.$membres[1][2].'<br/>';
// echo $membres[2][0].' a '.$membres[2][1]. ' ans . Son mail est : '.$membres[2][2].'<br/>';
// echo $membres[3][0].' a '.$membres[3][1]. ' ans . Son mail est : '.$membres[3][2].'<br/>';
// for($ligne = 0; $ligne <=3; $ligne++) {
//     $nmbre_no = $ligne+1;
//     echo "Membres numero " .$nmbre_no.'<br/>';
//     echo '<ul>';
//     for($col = 0; $col <=2; $col++) {
//         echo  '<li>' .$membres[$ligne][$col].'</li>';
// }
// echo '</ul>';
// }
?>
  <hr>
  
  <!-- <h5> Ceci est un paragraphe pour les Fonctions </h5> <br>  -->
 

</body>
</html>