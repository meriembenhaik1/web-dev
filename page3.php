<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3</title>
</head>

<body>
    <h1>Page 3 : Vos informations</h1>

    <!-- Navigation entre les pages -->
    <nav>
        <a href="page1.php">Page 1</a> |
        <a href="page2.php">Page 2</a> |
        <a href="page3.php">Page 3</a>
    </nav>

    <?php
    // Vérifier si les cookies sont définis
    if (isset($_COOKIE["pseudo"]) && isset($_COOKIE["pays"]) && isset($_COOKIE["genre"])) {
        echo "<p><strong>Pseudo :</strong> " . htmlspecialchars($_COOKIE["pseudo"]) . "</p>";
        echo "<p><strong>Pays :</strong> " . htmlspecialchars($_COOKIE["pays"]) . "</p>";
        echo "<p><strong>Genre :</strong> " . htmlspecialchars($_COOKIE["genre"]) . "</p>";
    } else {
        echo "<p>Aucune information disponible. Veuillez remplir le formulaire sur la Page 1.</p>";
    }
    ?>
</body>
</html>
