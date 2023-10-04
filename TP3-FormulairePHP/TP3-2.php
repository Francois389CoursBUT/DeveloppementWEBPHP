<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP3-PHP</title>
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

/**
 * Si le champ est remplie, on affiche la valeur du champ
 * sinon on met un message d'erreur
 * @param $valide boolean Indique si le champ est valide
 * @param $valeurChamp String La valeur du champ
 * @param $nomChamp String Le nom du champ
 */
function afficherChamps($valide, $valeurChamp, $nomChamp) {
    if ($valide) {
        $valeurChamp = htmlentities($valeurChamp);
        echo "<p class='ok'>Votre ".$nomChamp." : ".$valeurChamp."</p>";
    } else {
        echo "<p class='erreur'>Merci de rentrer votre ".$nomChamp." !</p>";
    }
}

?>
<div class="container">
    <div class="row">
        <div class="col-4">
            <?php
            afficherChamps($nomRempli,$_GET['nom'],"nom");
            ?>
        </div>
        <div class="col-4">
            <?php
            afficherChamps($prenomRempli,$_GET['prenom'],"pr&eacute;nom");
            ?>
        </div>
        <div class="col-4">
            <?php
            afficherChamps($formationRempli,$_GET['formation'],"dipl&ocirc;me");
            ?>
        </div>
        <div class="col-12">
            <?php
            afficherChamps($questionRempli,$_GET['question'],"question");
            ?>
        </div>
    </div>
</div>

</body>
</html>

