<?php
session_start();

// Liste d'utilisateurs statiques
$users = [
    ['email' => 'user1@example.com', 'password' => 'password1'],
    ['email' => 'user2@example.com', 'password' => 'password2'],
];

// Vérifiez si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Recherche de l'utilisateur dans la liste
    foreach ($users as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            // Authentification réussie
            $_SESSION['user'] = $email;
            header('Location: welcomePage.php');
            exit;
        }
    }

    // Si les informations ne correspondent pas
    $error = "Email ou mot de passe incorrect.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Authen.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="login form">
            <header>Login</header>
            <?php if (!empty($error)) : ?>
                <p style="color: red;"><?= $error ?></p>
            <?php endif; ?>
            <form method="POST">
                <input type="text" name="email" placeholder="Enter your email" required>
                <input type="password" name="password" placeholder="Enter your password" required>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
