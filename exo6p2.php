<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Result de Exercice 6 (Post)</h2>
    <?php
    $nom=$_POST["nom"];
    $p=$_POST["paragraphe"];
    $genre=$_POST["genre"];
    $vehecule=$_POST["voi"];
    $choice=$_POST["choix"];
    echo  "Nom:" .$nom . "<br>";
    echo  "Paragraphe:" .$p . "<br>";
    echo  "Genre:".$genre[0] . "<br>";
    echo  "Vehicule:"."[".$vehecule[0].",".$vehecule[1]."]"."<br>" ;
    echo  "Cars:".$choice ;
    ?>
</body>
</html>