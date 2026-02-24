<?php
    session_start();
    require "config.php";


    $email = trim($_POST["email"]); 
    $password = trim($_POST["password"]); 

    $email = trim($_POST["email"]); 
    $password = trim($_POST["password"]); 

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?"); 
    $stmt->execute([$email]); 
    $user = $stmt->fetch(); 

    if (!$user || !password_verify($password, $user["password"])) { 
        die("Incorrect identifier. <a href='index.php'>Back</a>"); 
    } 

    $_SESSION["user_email"] = $email; 

    header("Location: secure.php"); 
    exit;
?>