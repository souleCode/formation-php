

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    
    <form method="POST" action="taget.php">
    <p>
        <label for="prenom">Entrez votre prenom</label>
        <input type="text" name="prenom" id ="prenom"/>
    </p>

    <p>
        <label for="nom">Entrez votre nom</label>
        <input type="text" name="nom" id ="nom"/>
    </p>
    <p>
        <label for="speudo">Entrez votre speudo</label>
        <input type="text" name="speudo" id ="speudo"/>
    </p>
    

    <p>
          <input type="submit" value ="Envoyer"/>
    </p>

</form>
</body>
</html>