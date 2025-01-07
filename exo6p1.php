<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Bienvenue sur Exercice 6</h2>
    <form action="exo6p2.php" method="Post">
        <label for="nom">Nom</label><input type="text" id="nom" name="nom">
        <br>
        <br>
        <textarea name="paragraphe" id="paragraphe" rows="5" cols="50"></textarea>
        <br>
        <label for="genre">Genre :</label>
        <br>
        <input type="radio" id="man" name="genre[]" value="Homme">
        <label for="man">Homme</label><br>
        <input type="radio" id="wom" name="genre[]" value="Femme">
        <label for="wom">Femme</label><br> 
        </select>
        <br>
        <label><input type="checkbox" name="voi[]" value="J'ai une voiture"> J'ai une voiture</label><br>
        <label><input type="checkbox" name="voi[]" value="J'ai une moto"> J'ai une moto</label><br>
        <label><input type="checkbox" name="voi[]" value="J'ai un velo" > J'ai un velo</label><br>
        <br>
        <label for="choix">Resault</label>
        <select name="choix" id="choix">
        <option value="renault">renault</option>
        <option value="fiat">fiat</option>
        <option value="Tesla">Tesla</option>
        </select><br>
        <br>
        <button>submit</button>
    </form>
</body>
</html>