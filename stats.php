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
        <li><a href="stats.php?code=Vision3745&table=dates" id="dates">Date</a></li>
        <li><a href="stats.php?code=Vision3745&table=requestes" id="requetes">Requêtes</a></li>
        <li><a href="stats.php?code=Vision3745&table=appareils" id="appareils">Appareils</a></li>
        <li><a href="stats.php?code=Vision3745&table=pays" id="pays">Pays</a></li>
        <li><a href="stats.php?code=Vision3745&table=pages" id="pages">Pages</a></li>
    </ul>
<?php 
if (isset($_GET["table"]) && file_exists("./htmlTable/".$_GET["table"].".php") ) {
    require "./htmlTable/".$_GET["table"].".php";
}else{
    require "./home.php";
}
?>
</body>

</html>