<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
setcookie("user", "", time() - 3600);
header("Location: ../view/login.php"); // Redirecting To Home Page
}
?>

