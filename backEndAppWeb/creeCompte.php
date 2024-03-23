<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>Formulaire d'inscription</title>
</head>
<body>
<h1>Inscription</h1>
<form action="afficheCompte.php" method="post">
    <label for="name">Nom :</label><br>
    <input type="text" id="name" name="name"><br>

    <label for="firstname">Prénom :</label><br>
    <input type="text" id="firstname" name="firstname"><br>

    <label for="date of birth">Date de naissance :</label><br>
    <input type="date" id="date of birth" name="date of birth"><br>

    <label for="mail">E-mail :</label><br>
    <input type="email" id="mail" name="mail"><br>

    <label for="adress">Adresse :</label><br>
    <textarea id="adresse" name="adress"></textarea><br>

    <label for="number">Numéro de téléphone :</label><br>
    <input type="tel" id="number" name="number"><br>

    <label for="desciption">desciption :</label><br>
    <textarea id="desciption" name="desciption"></textarea><br>

    <input type="submit" value="S'inscrire">
</form>
</body>
</html>