<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>

<body>
    <h1>Page 1 : Formulaire</h1>
    <form action="page2.php" method="POST">  
        <label for="pseudo">Pseudo : </label>
        <input type="text" id="pseudo" name="pseudo" required><br>

        <label for="pays">Pays : </label>
        <input type="text" id="pays" name="pays" required><br>

        <label for="genre">Genre : </label>
        <input type="text" id="genre" name="genre" required><br>

        <button type="submit">GO</button>
    </form>

    <?php
    // Traitement du formulaire et enregistrement des cookies
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        setcookie("pseudo", $_POST["pseudo"], time() + (86400 * 30), "/");
        setcookie("pays", $_POST["pays"], time() + (86400 * 30), "/");
        setcookie("genre", $_POST["genre"], time() + (86400 * 30), "/");
        echo "<p>Informations enregistrées !</p>";
    }
    ?>
</body>
</html>
