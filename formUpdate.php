<?php
include 'db.php';

$id = isset($_POST['selected_id']) ? $_POST['selected_id'] : null;

if (!$id) {
    echo "Aucune ligne sélectionnée.";
    exit;
}

$result = $conn->query("SELECT * FROM persons WHERE id = $id");
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $points = $_POST['points'];

    $conn->query("UPDATE persons SET nom='$nom', prenom='$prenom', points=$points WHERE id=$id");
    header('Location: persons.php');
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Modifier un utilisateur</h2>
    <form method="post">
        <input type="hidden" name="selected_id" value="<?php echo $row['id']; ?>">
        Nom : <input type="text" name="nom" value="<?php echo $row['nom']; ?>" required><br>
        Prenom : <input type="text" name="prenom" value="<?php echo $row['prenom']; ?>" required><br>
        Points : <input type="number" name="points" value="<?php echo $row['points']; ?>" required><br>
        <button type="submit" name="update">Modifier</button>
    </form>
</body>
</html>