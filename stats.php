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
    <ul>
        <li><a href="#" class="dates">Date</a></li>
        <li><a href="#" class="requetes">Requêtes</a></li>
        <li><a href="#" class="appareils">Appareils</a></li>
        <li><a href="#" class="Pays">Pays</a></li>
        <li><a href="#" class="pages">Pages</a></li>
    </ul>
    <div class="dates">
        <h2>Date</h2>
        <?php echo csvToHtml("Dates"); ?>
    </div>
    <div class="requetes">
        <h2>Requêtes</h2>
        <?php echo csvToHtml("Requêtes"); ?>
    </div>
    <div class="appareils">
        <?php echo csvToHtml("appareils"); ?>
    </div>
    <div class="pays">
        <?php echo csvToHtml("pays"); ?>
    </div>
    <div class="page">
        <?php echo csvToHtml("Page"); ?>
    </div>

</body>

</html>