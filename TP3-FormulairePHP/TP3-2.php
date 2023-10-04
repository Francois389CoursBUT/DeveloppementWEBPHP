<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP3-2-PHP</title>
    <link rel="stylesheet" href="TP3.css">
    <link rel="stylesheet" href="../framework/bootstrap-4.6.2-dist/css/bootstrap.css" >
</head>
<body>
<?php
// On vérifie que les champs sont remplis
// Un boolean sera affecté à chaque champ
// Si le champ est vide ou pas rempli (méthode isset()), le boolean sera faux
// Si le champ est rempli, le boolean sera vrai

$nomRempli = !empty($_GET['nom']);
$prenomRempli = !empty($_GET['prenom']);
$formationRempli = isset($_GET['formation']) && $_GET['formation'] != "none";
$questionRempli = !empty($_GET['question']);

?>
<div class="container">
    <div class="row">
        <div class="col-4">
            <?php
            if ($nomRempli) {
                $valeurChamp = htmlentities($_GET['nom']);
                echo "<p class='ok'>Votre nom : ".$valeurChamp."</p>";
            } else {
                echo "<p class='erreur'>Merci de rentrer votre nom !</p>";
            }
            ?>
        </div>
        <div class="col-4">
            <?php
            if ($prenomRempli) {
                $valeurChamp = htmlentities($_GET['prenom']);
                echo "<p class='ok'>Votre prénom : ".$valeurChamp."</p>";
            } else {
                echo "<p class='erreur'>Merci de rentrer votre prénom !</p>";
            }
            ?>
        </div>
        <div class="col-4">
            <?php
            if ($formationRempli) {
                $valeurChamp = htmlentities($_GET['formation']);
                echo "<p class='ok'>Votre diplome : ".$valeurChamp."</p>";
            } else {
                echo "<p class='erreur'>Merci de rentrer votre diplome !</p>";
            }
            ?>
        </div>
        <div class="col-12">
            <?php
            if ($questionRempli) {
                $valeurChamp = htmlentities($valeurChamp);
                echo "<p class='ok'>Votre question : ".$valeurChamp."</p>";
            } else {
                echo "<p class='erreur'>Merci de rentrer votre question !</p>";
            }
            ?>
        </div>
    </div>
</div>

</body>
</html>

