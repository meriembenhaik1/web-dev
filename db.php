<?php
$host = 'localhost';
$user = 'root';
$password = ''; // Mettez votre mot de passe ici si nécessaire
$dbname = 'mini_app';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Échec de connexion : " . $conn->connect_error);
}
?>
