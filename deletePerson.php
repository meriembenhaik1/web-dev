<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "db_persons";
$port = 3306;
$dsn = "mysql:host=" . $host . ";dbname=" . $dbname . ";port=" . $port;

$pdo = new PDO($dsn, $user, $password);

$valId = $_POST["valId"];
$sql="DELETE FROM PERSONS WHERE id = :valId";
$stmt = $pdo->prepare($sql);
$stmt->execute([ "valId" => $valId]);
header('Location:exo14.php');
exit;

?>