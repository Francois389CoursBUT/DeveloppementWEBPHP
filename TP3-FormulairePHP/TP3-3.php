<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP3-3-PHP</title>
    <link rel="stylesheet" href="TP3.css">
    <link rel="stylesheet" href="../framework/bootstrap-4.6.2-dist/css/bootstrap.css" >
</head>
<body>

<?php
// On vérifie que les champs sont remplis
// Un boolean sera affecté à chaque champ
// Si le champ est vide ou pas rempli (méthode isset()), le boolean sera faux
// Si le champ est rempli, le boolean sera vrai

$nomSet = isset($_GET['nom']);
$prenomRempli = !empty($_GET['prenom']);
$formationRempli = isset($_GET['formation']) && $_GET['formation'] != "none";
$questionRempli = !empty($_GET['question']);

/**
 *
 */
function afficherOption($value, $textDisplay , $isSelected = false)
{
    if ($isSelected) {
        echo '<option value="'.$value.'" selected>'.$textDisplay.'</option>';
    } else {
        echo '<option value="'.$value.'">'.$textDisplay.'</option>';
    }
}
{

}
?>

<div class="container">
    <form action="TP3-3.php" method="get">
    <div class="row">
        <div class="col-12">
            <h1>Formulaire</h1>
        </div>

            <div class="col-4 cell-form">
                <?php
                    if ($nomSet && !empty($_GET['nom'])) {
                        $valeurChamp = htmlentities($_GET['nom']);
                        echo '<p for="nom" class="ok">Nom :</p>';
                        echo '<input type="text" name="nom" id="nom" value="'.$valeurChamp.'">';
                    } else {
                        echo '<p for="nom" class="erreur">Nom :</p>';
                        echo '<input type="text" name="nom" id="nom">';
                    }
                ?>
            </div>

            <div class="col-4 cell-form">
                <?php
                    if ($prenomRempli) {
                        $valeurChamp = htmlentities($_GET['prenom']);
                        echo '<p for="prenom" class="ok">Pr&eacute;nom :</p>';
                        echo '<input type="text" name="prenom" id="prenom" value="'.$valeurChamp.'">';
                    } else {
                        echo '<p for="prenom" class="erreur">Pr&eacute;nom :</p>';
                        echo '<input type="text" name="prenom" id="prenom">';
                    }
                ?>

            </div>

            <div class="col-4 cell-form">
                <?php
                    if ($formationRempli) {
                        $choix = htmlentities($_GET['formation']);
                        echo '<p for="email" class="ok">Dipl&ocirc;me pr&eacute;par&eacute; :</p>';
                        echo '<select name="formation" id="formation" class="custom-select">';
                        afficherOption("none", "S&eacute;lectionner dans la liste");
                        afficherOption("GEA", "BUT GEA", $choix == "GEA");
                        afficherOption("Informatique", "BUT Informatique", $choix == "Informatique");
                        afficherOption("QLIO", "BUT QLIO", $choix == "QLIO");
                        afficherOption("CJ", "BUT CJ", $choix == "CJ");
                        afficherOption("InfoCom", "BUT InfoCom", $choix == "InfoCom");
                        echo '</select>';
                    } else {
                ?>
                <p for="email" class="erreur">Dipl&ocirc;me pr&eacute;par&eacute; :</p>
                <select name="formation" id="formation" class="custom-select">
                    <option value="none">S&eacute;lectionner dans la liste</option>
                    <option value="GEA">BUT GEA</option>
                    <option value="Informatique">BUT Informatique</option>
                    <option value="QLIO">BUT QLIO</option>
                    <option value="CJ">BUT CJ</option>
                    <option value="InfoCom">BUT InfoCom</option>
                </select>
                <?php
                    }
                ?>

            </div>
            <div class="col-12 cell-form">

                <?php
                    if ($questionRempli) {
                        $valeurChamp = htmlentities($_GET['question']);
                        echo '<p for="question" class="ok">Votre question :</p>';
                        echo '<textarea name="question" id="question" >'.$valeurChamp.'</textarea>';
                    } else {
                        echo '<p for="question" class="erreur">Votre question :</p>';
                        echo '<textarea name="question" id="question" ></textarea>';
                    }
                ?>
            </div>
            <div class="col-12 divEnvoie">
                <input type="submit" value="Envoyer le formulaire">
            </div>
        </form>
    </div>

</body>
</html>