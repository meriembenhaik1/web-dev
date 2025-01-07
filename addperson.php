<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "db_persons";
$port = 3306;
$dsn = "mysql:host=" . $host . ";dbname=" . $dbname . ";port=" . $port;

$pdo = new PDO($dsn, $user, $password);

$valNom=$_POST["valNom"];
$valPoints=$_POST["valPoints"];
$valPrenom=$_POST["valPrenom"];
$sql="INSERT INTO PERSONS (nom,prenom,points) VALUES (:valNom,:valPrenom,:valPoints)";
$stmt = $pdo->prepare($sql);
$stmt->execute(["valNom" => $valNom, "valPrenom" => $valPrenom, "valPoints" => $valPoints]);
header('Location:exo12.php')


?>