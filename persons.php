<?php
include 'db.php';

// Handle the form submission for adding a new person
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_person'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $points = $_POST['points'];

    if (!empty($nom) && !empty($prenom) && is_numeric($points)) {
        $conn->query("INSERT INTO persons (nom, prenom, points) VALUES ('$nom', '$prenom', $points)");
        header('Location: persons.php'); // Refresh the page to see the new data
        exit;
    } else {
        echo "Erreur : Tous les champs sont requis et les points doivent être numériques.";
    }
}

// Fetch all persons
$result = $conn->query("SELECT * FROM persons");

// Calculate the total points and count rows
$totalPoints = 0;
$rowCount = 0;
$persons = [];
while ($row = $result->fetch_assoc()) {
    $totalPoints += $row['points'];
    $rowCount++;
    $persons[] = $row; // Store the row data
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mini-Application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Mini-Application</h2>

    <!-- Form to Add a New Person at the Top -->
    <form method="post" style="margin-bottom: 20px;">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required>
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" required>
        <label for="points">Points :</label>
        <input type="number" name="points" required>
        <button type="submit" name="add_person" class="ajouter">Ajouter</button>
    </form>

    <!-- Table Displaying Existing Persons -->
    <form method="post">
        <table>
            <tr>
                <th>N°</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Points</th>
                <th>Select</th>
            </tr>
            <?php foreach ($persons as $row): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['prenom']; ?></td>
                <td><?php echo $row['points']; ?></td>
                <td>
                    <input type="radio" name="selected_id" value="<?php echo $row['id']; ?>">
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

        <!-- Summary Section -->
        <div id="container_summary" style="margin-top: 20px; font-weight: bold;">
            <p id="p1"><?php echo $rowCount; ?> ligne(s)</p>
            <p id="p2"></p>
            <p id="p3">Totale point(s) = <?php echo $totalPoints; ?></p>
        </div>

        <div id="Buttons_container" style="margin-top: 10px;">
            <!-- Buttons to Modify or Delete at the Bottom -->
            <button type="submit" formaction="formUpdate.php" class="modifier">Modifier</button>
            <button type="submit" formaction="formDelete.php" class="supprimer">Supprimer</button>
        </div>
    </form>
</body>
</html>