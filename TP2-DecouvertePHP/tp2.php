<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <title>TP2</title>
</head>
<body>
    <h1>Etape 1</h1>
        <?php
            // Affiche Bonjour le monde
            echo "Bonjour le monde";
        ?>
    <hr>
    <h1>Etape 2</h1>
        <?php
            $phrase = "Je démarre de la fin";
            $phraseFinale = "";
            for ($i = strlen($phrase); $i >= 0; $i--) {
                $phraseFinale .= mb_substr($phrase,$i,1);
            }
            echo $phraseFinale;
        ?>

    <hr>
    <h1>Etape 3</h1>
        <?php
            $phrase = "Une lettre sur deux en rouge";
            for ($j = 0; $j < strlen($phrase); $j++) {
                if ($j % 2 == 0) {
                    echo '<span class="rouge">'.mb_substr($phrase,$j,1)."</span>";
                } else {
                    echo '<span class="noir">'.mb_substr($phrase,$j,1)."</span>";
                }
            }
        ?>

    <hr>
    <h1>Etape 4</h1>
        <?php
            $destination = array(
                'Rodez'=> 'https://www.ville.rodez.fr',
                'Montpellier'=>'https://www.montpellier.fr/',
                'Toulouse'=>'https://toulouse.fr/',
                'Limoges'=>'https://www.limoges.fr/',
                'Paris'=>'https://www.paris.fr/',
            );
            $prochaineVacance = array_rand($destination);
            echo 'Mes prochaines vacances seront a <a href="'.$destination[$prochaineVacance].'" target="_blank">'.$prochaineVacance.'</a>';
        ?>

    <hr>
    <h1>Etape 5</h1>
        <table>
            <?php
            for ($i = 0; $i < 10; $i++) {
                if ($i == 0 ) {
                    echo '<tr><td>X</td>';
                } else {
                    echo '<tr><td class="entete">'.$i.'</td>';
                }
                for ($j = 1; $j < 10; $j++) {
                    if ($i == 0) {
                        echo '<td class="entete">'.$j.'</td>';
                    } else {
                        if ($i == $j) {
                            echo '<td class="diagonale">'.$i*$j.'</td>';
                        } else {
                            echo '<td>'.$i*$j.'</td>';
                        }
                    }
                }
                echo "</tr>";
            }
            ?>
        </table>



</body>
</html>