<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form method="post" action="traitement_form.php">
        <fieldset>
            <legend>
                <b>Traitement du formulaire</b>
            </legend>
            <p>
                <label for = "nom">
                    Nom : 
                </label>
                <input id="nom" type="text" name="nom" placeholder="Entrez votre nom  " size="50">
            </p>
            <p>
            <label for = "email">
                    Adresse email : 
                </label>
                <input id="email" type="email" name="email" placeholder="Entrez votre email " size="50">
            </p>
                <p>
            <label for = "profession">
                    Profession : 
                </label>
                <select id="profession" name="profession">
                    <option value="Enseignant">Enseignant</option>
                    <option value="Développeur">Développeur</option>
                    <option value="Ingénieur">Ingénieur</option>
                </select>
            </p>
            <p>
                <input type="submit" name="envoyer" value="Envoyer">
                <input type="reset" value="Effacer">
            </p>
        </fieldset>
    </form>
</body>
</html>