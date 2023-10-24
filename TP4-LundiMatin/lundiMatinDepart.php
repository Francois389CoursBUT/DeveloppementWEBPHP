<?php
include("tableauPhrases.php");
?>
<!Doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Les excuses du lundi matin</title>

    <link href="css/monStyle.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="framework/bootstrap-4.6.2-dist/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php
/**
 * Fonction qui affiche une option dans un select
 * Si l'option est sélectionnée, on ajoute l'attribut selected
 * @param $value : valeur de l'option
 * @param $textDisplay : texte affiché dans l'option
 * @param $isSelected : booléen qui indique si l'option est sélectionnée
 */
function afficherOption($value, $textDisplay, $isSelected = false)
{
    if ($isSelected) {
        echo '<option value="' . $value . '" selected>' . $textDisplay . '</option>';
    } else {
        echo '<option value="' . $value . '">' . $textDisplay . '</option>';
    }
}

?>
<div class="container-fluid">
    <!-- Présentation et Résultat -->
    <div class="row cadre ">
        <div class="col-12">

            <?php
            /* On vérifie que toutes les listes ont un élément sélectionné */
            $sontSet = true;
            if (isset($tabExGen)) {
                for ($k = 1; $k < count($tabExGen) + 1; $k++) {
                    $sontSet &= isset($_GET['var'.$k]);
                }
            }
            /* Si toutes les listes ont un élément sélectionné, on affiche le résultat */
            if ($sontSet) {
                echo '<h1>Mon excuse</h1>';
                echo "<h2>";
                for ($k = 1; $k < count($tabExGen) + 1; $k++) {
                    echo htmlspecialchars($_GET['var'.$k]) . " ";
                }
                echo "</h2>";
            /* Sinon, on affiche le message de bienvenue par défaut */
            } else {
                echo '<h1>Tous les lundis, une excuse diff&eacute;rente !</h1>';
            }


            ?>

            G&eacute;n&eacute;rez votre excuse du lundi matin en s&eacute;lectionnant les diff&eacute;rents champs.<br/>
        </div>
    </div>

    <!-- Formulaire -->
    <div class="row cadre ">
        <form action="lundiMatinDepart.php" method="get">
            <div class="col-12">

                <?php
                $i = 1;
                foreach ($tabExGen as $tabEx) { // Parcours du tableau général
                    $j = 1;
                    echo "<select name='var" . $i . "'>";
                    // Parcours des sous tableaux de phrases
                    foreach ($tabEx as $phrase) {
                        // Si toutes les listes ont un élément sélectionné, on affiche la liste avec l'élément sélectionné
                        if ($sontSet) {
                            afficherOption($phrase, $phrase, $_GET[$i]==$phrase);
                        // Sinon, on affiche la liste normalement
                        } else {
                            afficherOption($phrase, $phrase); //echo "<option value='.$phrase.'>$phrase</option>";
                        }
                        $j++;
                    }
                    echo "</select></br>";
                    $i++;
                }
                ?>
            </div>
            <div class="col-12">
                <input type="submit" value="Générer une excuse">
            </div>
        </form>
    </div>
</div>
</body>
</html>