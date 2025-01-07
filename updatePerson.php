<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "db_persons";
$port = 3306;
$dsn = "mysql:host=" . $host . ";dbname=" . $dbname . ";port=" . $port;

try {
    // Connexion à la base de données
    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    // Récupérer les données du formulaire
    $valId = $_POST["valId"];
    $valNom = $_POST["valNom"];
    $valPoints = $_POST["valPoints"];
    $valPrenom = $_POST["valPrenom"];

    // Requête SQL pour mettre à jour une ligne
    $sql = "UPDATE PERSONS SET nom = :valNom, prenom = :valPrenom, points = :valPoints WHERE id = :valId";
    $stmt = $pdo->prepare($sql);

    // Exécuter la requête avec les paramètres
    $stmt->execute([
        "valId" => $valId,
        "valNom" => $valNom,
        "valPrenom" => $valPrenom,
        "valPoints" => $valPoints
    ]);

    // Redirection après mise à jour
    header('Location: exo13.php');
    exit();
} catch (PDOException $e) {
    // Gestion des erreurs
    echo "Erreur : " . $e->getMessage();
}
?>
