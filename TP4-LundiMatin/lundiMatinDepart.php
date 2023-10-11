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
    <!-- Présentation et Resultat -->
    <div class="row cadre ">
        <div class="col-12">


            <?php
            $sontSet = true;
            for ($k = 1; $k < count($tabExGen) + 1; $k++) {
                 $sontSet &= isset($_GET[$k]);
            }
            if ($sontSet) {
                echo '<h1>Mon excuse</h1>';
                echo "<h2>";
                for ($k = 1; $k < count($tabExGen) + 1; $k++) {
                    echo $_GET[$k] . " ";
                }
                echo "</h2>";
            } else {
                echo '<h1>Tous les lundis, une excuse différente ! </h1>';
            }


            ?>

            Générez votre excuse du lundi matin en sélectionnant les différents champs.<br/>
        </div>
    </div>

    <!-- Formulaire -->
    <div class="row cadre ">
        <form action="lundiMatinDepart.php" method="get">
            <div class="col-12">

                <?php
                $i = 1;
                foreach ($tabExGen as $tabEx) {
                    $j = 1;
                    echo "<select name='" . $i . "'>";
                    foreach ($tabEx as $phrase) {
                        if (!$sontSet) {
                            afficherOption($phrase, $phrase); //echo "<option value='.$phrase.'>$phrase</option>";
                        } else {
                            afficherOption($phrase, $phrase, $_GET[$i]==$phrase);
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