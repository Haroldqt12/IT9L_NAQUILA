<?php
session_start();

unset($_SESSION['access_token']);

setcookie("access_token", value: "", expires_or_options: time() - 3600, path: "/");

session_destroy();

header("Location: ../Login/login.php ");
?>