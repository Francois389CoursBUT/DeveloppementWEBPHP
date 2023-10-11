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

$nomSet = isset($_GET['nom']) && !empty($_GET['nom']);
$prenomRempli = !empty($_GET['prenom']);
$formationRempli = isset($_GET['formation']) && $_GET['formation'] != "none";
$questionRempli = !empty($_GET['question']);

/**
 * Fonction qui affiche une option dans un select
 * Si l'option est sélectionnée, on ajoute l'attribut selected
 * @param $value : valeur de l'option
 * @param $textDisplay : texte affiché dans l'option
 * @param $isSelected : booléen qui indique si l'option est sélectionnée
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
    <?php
        // Si un des champs n'est pas rempli, on affiche le formulaire
        if (!$nomSet || !$prenomRempli || !$formationRempli || !$questionRempli) {
    ?>
    <form action="TP3-3.php" method="get">
        <div class="row">

            <div class="col-12">
                <h1>Formulaire</h1>
            </div>

            <!-- Nom -->
            <div class="col-4 cell-form">
                    <?php
                        if ($nomSet) {
                            $valeurChamp = htmlentities($_GET['nom']);
                            echo '<label for="nom" class="ok">Nom :</label>';
                            echo '<input type="text" name="nom" id="nom" value="'.$valeurChamp.'">';
                        } else {
                            echo '<label for="nom" class="erreur">Nom :</label>';
                            echo '<input type="text" name="nom" id="nom">';
                        }
                    ?>
                </div>

            <!-- Prénom -->
            <div class="col-4 cell-form">
                    <?php
                        if ($prenomRempli) {
                            $valeurChamp = htmlentities($_GET['prenom']);
                            echo '<label for="prenom" class="ok">Pr&eacute;nom :</label>';
                            echo '<input type="text" name="prenom" id="prenom" value="'.$valeurChamp.'">';
                        } else {
                            echo '<label for="prenom" class="erreur">Pr&eacute;nom :</label>';
                            echo '<input type="text" name="prenom" id="prenom">';
                        }
                    ?>

                </div>

            <!-- Diplôme -->
            <div class="col-4 cell-form">
                    <?php
                        if ($formationRempli) {
                            $choix = htmlentities($_GET['formation']);
                            echo '<label for="email" class="ok">Dipl&ocirc;me pr&eacute;par&eacute; :</label>';
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
                    <label for="formation" class="erreur">Dipl&ocirc;me pr&eacute;par&eacute; :</label>
                    <select name="formation" class="custom-select">
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

            <!-- Question -->
            <div class="col-12 cell-form">

                    <?php
                        if ($questionRempli) {
                            $valeurChamp = htmlentities($_GET['question']);
                            echo '<label for="question" class="ok">Votre question :</label>';
                            echo '<textarea name="question" id="question" >'.$valeurChamp.'</textarea>';
                        } else {
                            echo '<label for="question" class="erreur">Votre question :</label>';
                            echo '<textarea name="question" id="question" ></textarea>';
                        }
                    ?>
                </div>

            <!-- Bouton envoie -->
            <div class="col-12 divEnvoie">
                    <input type="submit" value="Envoyer le formulaire">
            </div>
        </div>
    </form>

    <?php
        // Si tous les champs sont remplis, on affiche les données
        } else {
    ?>

            <div class="row">
                <div class="col-4 ok">
                    <p>Votre Nom : <?php echo htmlentities($_GET['nom']) ?></p>
                </div>
                <div class="col-4 ok">
                    <p>Votre Pr&eacute;nom : <?php echo htmlentities($_GET['prenom']) ?></p>
                </div>
                <div class="col-4 ok">
                    <p>Votre Dipl&ocirc;me pr&eacute;par&eacute; : <?php echo htmlentities($_GET['formation']) ?></p>
                </div>
                <div class="col-12 ok">
                    <p>Votre question : <?php echo htmlentities($_GET['question']) ?></p>
                </div>
            </div>
    <?php
        }

    ?>
    </div>

</body>
</html>