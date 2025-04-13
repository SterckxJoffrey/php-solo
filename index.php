<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        if(isset($_cookie)){
            echo ' Bonjour '.$_COOKIE['nom'];
        } else { ?>
        <h1>Formulaire de connexion</h1>
    <form method="post" action="cookie.php">
    <p>
        <label for="nom"> Votre identifiant: </label>
        <input type="text" name="nom"/>

    </p>
  
    
        <input type="submit" value ="Connexion">
    

    </form>
    <?php
        }

    ?>

</body>
</html>