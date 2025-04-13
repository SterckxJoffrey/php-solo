<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $identifiant_valide = "Joffrey";
        $motpasse_valide = "motpasse123";

        if ($_POST['identifiant'] === $identifiant_valide && $_POST['motpasse'] === $motpasse_valide){
            session_start();

            $_SESSION['identidiant'] = $_POST['identifiant'];
            $_SESSION['motpasse'] = $_POST['motpasse'];
            echo 'Bonjour, vous êtes connécté :)';
            echo '<a href = page_espace_membre.php> Espace membre </a>';
        } else {
            echo 'Désolé';
        }


    ?>
</body>
</html>