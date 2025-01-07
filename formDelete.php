<?php
include 'db.php';

$id = $_POST['selected_id'];

if (!$id) {
    echo "Aucune ligne sélectionnée.";
    exit;
}

$conn->query("DELETE FROM persons WHERE id = $id");
header('Location: persons.php');
?>