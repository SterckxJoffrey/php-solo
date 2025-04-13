<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            if (isset($_SESSION['identifiant']) && isset($_SESSION['motpasse'])){
                    echo 'Coucou';
                    echo '<a href = "decconexion.php> Déconnexion </a>';
            } else {
                echo 'Connectez-vous';
            }






        ?>

















</body>
</html>