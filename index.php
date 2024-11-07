<?php
$scan = scandir("./stat");
foreach ($scan as $fichier) {
    if ($scan !== ".." && $scan !== ".") {
        $fichiers[] = $fichier;
    }
}
file_put_contents("teste.json", json_encode($fichiers));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($fichiers as $fichier) : ?>
        <h1><?php echo ($fichier; ?></h1>
        <table>

        </table>
        <?php endforeach; ?>
</body>

</html>