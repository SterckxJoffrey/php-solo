<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


if (isset($_GET['envoyer'])) {
    $nom = $_GET['nom'];
    $email = $_GET['email'];
    $profession = $_GET['profession'];
    echo $nom;
    echo $email;
    echo $profession;
} else {
    echo "Il faut valider le formulaire";
}
    





    ?>














</body>
</html>