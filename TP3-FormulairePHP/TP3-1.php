<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP3-PHP</title>
    <link rel="stylesheet" href="TP3.css">
    <link rel="stylesheet" href="../framework/bootstrap-4.6.2-dist/css/bootstrap.css" >
</head>
<body>
<div class="container">
    <form action="TP3-2.php" method="get">
    <div class="row">
        <div class="col-12">
            <h1>Formulaire</h1>
        </div>

            <div class="col-4 cell-form">
                <p for="nom">Nom :</p>
                <input type="text" name="nom" id="nom">
            </div>
            <div class="col-4 cell-form">
                <p for="prenom">Pr&eacute;nom :</p>
                <input type="text" name="prenom" id="prenom">
            </div>
            <div class="col-4 cell-form">
                <p for="email">Dipl&ocirc;me pr&eacute;par&eacute; :</p>
                <select name="formation" id="formation" class="custom-select">
                    <option value="none">S&eacute;lectionner dans la liste</option>
                    <option value="GEA">BUT GEA</option>
                    <option value="Informatique">BUT Informatique</option>
                    <option value="QLIO">BUT QLIO</option>
                    <option value="CJ">BUT CJ</option>
                    <option value="InfoCom">BUT InfoCom</option>
                </select>
            </div>
            <div class="col-12 cell-form">
                <p for="question">Votre question :</p>
                <textarea name="question" id="question" ></textarea>
            </div>
            <div class="col-12 divEnvoie">
                <input type="submit" value="Envoyer le formulaire">
            </div>
        </form>
    </div>
</div>

</body>
</html>