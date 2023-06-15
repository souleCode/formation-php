<?php
            // $nomCookie ="Utilsateur";
            // $valeurCookie ="Pierre";
            // setcookie($nomCookie,$valeurCookie,time()+3600,"/","Soule-traore.bf",false,true);
            // echo $_COOKIE["Utilsateur"];
            // $nom_cookie = "Testing";
            // $valeur_cookie ="Ce ci est un test";

            // setcookie($nom_cookie,$valeur_cookie);

            // echo $_COOKIE["Testing"];
            session_start();
        ?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fichier inclu</title>
</head>
<body>
    
       <?php
        // $definitiondef = fopen("fichier.txt", "r+");
        // while(!feof($definitiondef)){
        //     echo fgets($definitiondef);
        // }
        // fclose($definitiondef);
       ?>
            <?php
        //     $n1 = 10;
        // function porte() {
        //     echo $n1."s'affiche pas <br/>";
        //     $n2 = 45;
        // }

        // porte();
        // echo $n1."<br/>";
        // echo $n2."<br/>";
            $x =10;
            $y =50;
            function multi(){
               $GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
            }
            // multi();
            // echo $z."<br/>";
            // echo $_SERVER['PHP_SELF']."<br/>";
            // echo $_SERVER['SERVER_ADDR']."<br/>";
            // echo $_SERVER['SERVER_NAME']."<br/>";
            // echo $_SERVER['SCRIPT_NAME']."<br/>";
            // echo $_SERVER['HTTP_HOST']."<br/>";

            $_SESSION['Prenom'] =" Soule";
            $_SESSION['age'] = 24;
            $_SESSION['sport'] ="football";






        ?>
</body>
</html>