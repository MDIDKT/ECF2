<?php
//ouverture de la connexion à la base de données
$objetPdo = new PDO('mysql:host=localhost;dbname=ECF SoigneMoi', 'root', 'root');
$pdostat = $objetPdo->prepare('SELECT * FROM Users');

//exécution de la requête pour afficher les contacts
$AfficheIsOk = $pdostat->execute();

//récupération des résultats en une seule fois
$contacts = $pdostat->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>AfficheCompte</title>
</head>
<body>

    <h1>Afficher le compte</h1>
        <?php 
        //affichage des contacts dans une liste non ordonnée
        //on parcourt le tableau $contacts et pour chaque contact on affiche les informations dans une balise <li>
        foreach ($Users as $User) : ?>
            <!--
            <li>
                <?= $User['name'] ?> <?= $User['firstname'] ?> <?= $User['date of birth'] ?> <?= $User['mail'] ?> <?= $User['adress'] ?> <?= $User['number'] ?> <?= $User['desciption'] ?>
                <a href="supprimer.php?numContact=<?= $contact['ID']?>" >supprimer</a>
                <a href="modification.php?numContact=<?= $contact['ID']?>">Modifier</a>
            </li>-->
            <table>
                <tr>
                    <td><?= $User['name'] ?></td>
                    <td><?= $User['firstname'] ?></td>
                    <td><?= $User['date of birth'] ?></td>
                    <td><?= $User['mail'] ?></td>
                    <td><?= $User['adress'] ?></td>
                    <td><?= $User['number'] ?></td>
                    <td><?= $User['desciption'] ?></td>
                </tr>
            </table>
        <?php endforeach; ?>
</body>
</html>