<?php
require "./function.php";
?>
<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/script.js"></script>

<body>
    <h1>Statistique de visite du site <a href="https://associationvisionere.fr">Vision'ère</a></h1>
    <h2>Liste des statistiques disponibles</h2>
    <p>Cliquez sur un des liens afin de voir les statistiques de votre choix.</p>
    <ul>
        <li><a href="index.php?pwd=Vision3745&table=Dates" class="dates">Date</a></li>
        <li><a href="index.php?pwd=Vision3745&table=Requestes" class="requetes">Requêtes</a></li>
        <li><a href="index.php?pwd=Vision3745&table=Appareils" class="appareils">Appareils</a></li>
        <li><a href="index.php?pwd=Vision3745&table=Pays" class="Pays">Pays</a></li>
        <li><a href="index.php?pwd=Vision3745&table=Pages" class="pages">Pages</a></li>
    </ul>
    <div id="info">
        <h1>
            infos
        </h1>
        <ul>
            <li>
                Le nombre d'impression correspond au nombre de fois où le site est apparu dans les résultats de recherche d'un utilisateur. </li>
            <li>
                Le CTR correspond au nombre total de personnes qui ont vu le site dans une de leurs recherches et qui ont cliqué sur le site.
            </li>
        </ul>
    </div>
    <?php
    if (isset($_GET["table"]) && file_exists("./table/" . $_GET["table"] . ".php")) {
        require "./table/" . $_GET["table"] . ".php";
    }
    ?>
</body>

</html>