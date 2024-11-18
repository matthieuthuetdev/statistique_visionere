<?php
require "./function.php";
?>
<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<body>
    <h1>Statistique de visite du site <a href="https://associationvisionere.fr">Vision'ère</a></h1>
    <?php
echo csvToHtml("appareils");



    ?>
</body>

</html>