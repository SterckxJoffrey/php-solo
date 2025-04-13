<?php
    require "Utilisateurs.php";

    $membre1 = new Utilisateurs();
    $membre1 ->prenom = "Joffrey";

    echo $membre1->prenom;



?>