<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
   <?php
    // écrire un script php qui stocke une liste de noms dans un tableau, puis 
    // qui affiche ces noms dans une liste à puce
    $tab = ['Joffrey', 'Justine', 'Jerome', 'Marc'];
    echo "<ul>";
    for ($i=0; $i <count($tab) ; $i++) { 
        echo "<li>" .$tab[$i]."</li>";
        # code...

    }
    foreach ($tab as $value) {
        # code...
        echo "<li>".$value."</li>";
    }
    echo "</ul>";


    // écrire un script php qui crée un tableau associatif de noms de fruits et leurs prix
    // et qui affiche chaque élément du tableau avec une bouche foreach

    // écrire un tableau multidimensionnel assiciatif dont les clés sont des noms de personnes
    // et les valeurs sont des tableaux numérotés contenant le prénom, la ville et l'âge de la personne
    // Puis utiliser ce tableau pour afficher pour chacune de ces personnes une phrase
    // mentionnant le nom et le prénom de la personne ainsi que son âgew
   ?>
    
</body>
</html>