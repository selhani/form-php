<?php
    session_start();
    require "config.php";

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    $regex = "/^(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*()_+\-= \[\]{};':\"\\|,.<>\/?]).{8,}$/";

    if (!preg_match($regex, $password)) {
        die("Invalid password. <a href='register.php'>Back</a>");
    }

    //Vérifie si l'email existe déjà
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute([$email]);

    if ($stmt->rowCount() > 0) {
        die("An account already exists with this email. <a href='index.php'>Login</a>");
    }

    $hash = password_hash($password, PASSWORD_DEFAULT);

    //Insertion
    $stmt = $pdo->prepare("INSERT INTO users (email, password) VALUES (?, ?)");
    $stmt->execute([$email, $hash]);

    $_SESSION["user_email"] = $email;

    header("Location: secure.php");
    exit;
?>
