<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "db_persons";
$port = 3306;
$dsn = "mysql:host=" . $host . ";dbname=" . $dbname . ";port=" . $port;

$pdo = new PDO($dsn, $user, $password);
$tmt = $pdo->query("SELECT * FROM persons");
?>
<table border="1">
    <?php
    while ($row = $tmt->fetch(PDO::FETCH_ASSOC)) {  // Correction ici : utilisation de parenthèses et variable correcte
    ?>
        <tr>
            <td><?php echo $row['nom']; ?></td>  
            <td><?php echo $row['prenom']; ?></td> 
            <td><?php echo $row['points']; ?></td>  
        </tr>
    <?php
    }  // Fermeture correcte de la boucle
    ?>
</table>
