<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur et exception en php</title>
</head>
<body>
    
    <?php
        if(!file_exists("fichier.txt")){
            die("Fichier non retrouvé");
        
        }
        else{
            $fichier = fopen("fichier.txt", "r");
        }
        //--------------------Exception--------------------

        function division($x, $y) {
            if($y == 0){
                throw new Exception("Divison impossible");
            }
            return $x/$y;
        }
        try{
            echo division(2,7). '<br />';
            echo division(2,0);
            echo division(2,1);
        }
        catch(Exception $e){
            echo "Error " . $e->getMessage();
        }
    ?>

</body>
</html>