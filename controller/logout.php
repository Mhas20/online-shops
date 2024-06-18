<?php
// Startet die Session
session_start();

// Entfernt alle Session-Variablen
session_unset();

// Zerstört die Session
session_destroy();

// Leitet den Benutzer zur Login-Seite weiter
header("Location: ../view/login.php");
exit();
?>

