<?php
if (isset($_POST["mots"])) {
    if (file_exists("./../mots.json")) {
        $data = json_decode(file_get_contents("./../mots.json"), true);
        $data[] = $_POST["mots"];
        file_put_contents("./../mots.json", json_encode($data, true));
    }else{
        $data[] = $_POST["mots"];
        file_put_contents("./../mots.json", json_encode($data, true));
    }
    echo "proposition enregistré ! merci !";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire de suggestion d'ajout de mot clé</title>
</head>

<body>
    <form action="" method="post">
        <label for="mots" style="display:block;">Suggerez l'ajout d'un ou plusieurs mot séparer par une virgule.</label>
        <textarea name="mots" id="mots"></textarea>
        <button type="submit">Ajouter</button>
    </form>
</body>

</html>