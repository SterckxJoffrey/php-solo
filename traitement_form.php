<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


if (isset($_POST['envoyer'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $profession = $_POST['profession'];
    echo $nom;
    echo $email;
    echo $profession;
} else {
    echo "Il faut valider le formulaire";
}
    





    ?>














</body>
</html>