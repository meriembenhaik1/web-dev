<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $points = $_POST['points'];

    $conn->query("INSERT INTO persons (nom, prenom, points) VALUES ('$nom', '$prenom', $points)");
    header('Location: persons.php');
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Ajouter un utilisateur</h2>
    <form method="post">
        Nom : <input type="text" name="nom" required><br>
        Prenom : <input type="text" name="prenom" required><br>
        Points : <input type="number" name="points" required><br>
        <button type="submit">Ajouter</button>
    </form>
</body>
</html>