<?php 
    session_start(); 
    session_unset(); 
    session_destroy(); 
    
    //Supprime le cookie de session
    setcookie(session_name(), "", time() - 3600); 
    header("Location: index.php"); 
    exit; 
?>