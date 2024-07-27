<?php
session_start();

if (!isset($_SESSION['stop'])) {
    $_SESSION['stop'] = 0;
}
if (isset($_GET['nombre']) && isset($_GET['contraseña'])) {
    $nombre = $_GET['nombre'];
    $contraseña = $_GET['contraseña'];
    include("clase.php");
    if (login::autenticar($nombre, $contraseña) >= 1) {
        $_SESSION['nombre'] = $nombre;
        $_SESSION['stop'] = 0; 
        header("Location: seccion3.php"); 
        exit; 
    } else {
        $_SESSION['stop']++;
        if ($_SESSION['stop'] >= 3) {
            $_SESSION['blocked'] = true;
            header("Location: out.php");
            exit; 
        } else {
            header("Location: guardar2.php?error=1");
            exit; 
        }
    }
}
?>
