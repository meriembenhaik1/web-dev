<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>

<body>
    <h1>Page 2</h1>

    <?php
    // Enregistrement des cookies à partir des données POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        setcookie("pseudo", $_POST["pseudo"]);
        setcookie("pays", $_POST["pays"]);
        setcookie("genre", $_POST["genre"]);
        echo "<p>Informations enregistrées !</p>";
    } else {
        echo "<p>Aucune donnée reçue.</p>";
    }
    ?>

    <p><a href="page3.php">Aller à Page 3</a></p>
</body>
</html>
