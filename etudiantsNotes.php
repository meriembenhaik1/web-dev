<?php
$etudiantsNote = ['JOHN' => 9, 'BOB' => 15.5, 'RAYANE' => 7, 'ROSIE' => 13];

function estAdmissible($note) {
    // Vérifie si la note est supérieure ou égale à 10
    return $note >= 10;
}
?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Étudiants</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid orangered;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: yellow;
        }
        .admissible {
            background-color: lightgreen; /* Vert clair pour les notes >= 10 */
        }
        .non-admissible {
            background-color: lightcoral; /* Rouge clair pour les notes < 10 */
        }
    </style>
</head>
<body>

    <table>
        <tr>
            <th>Etudiant</th>
            <th>Note</th>
        </tr>
        
        <?php
        // Parcours des étudiants et affichage dynamique du tableau
        foreach ($etudiantsNote as $nom => $note) {
            // Vérifie si l'étudiant est admissible ou non
            $classe = estAdmissible($note) ? 'admissible' : 'non-admissible';
        ?>
            <tr>
                <td><?= htmlspecialchars($nom); ?></td>
                <td class="<?= $classe; ?>"><?= htmlspecialchars($note); ?></td>
            </tr>
        <?php
        }
        ?>
        
    </table>

</body>
</html>
