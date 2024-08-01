<?php
session_start();
include 'plantill2.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/stylePro.css" rel="stylesheet">
    <link href="css/pie_pagina.css" rel="stylesheet">
    <link href="css/estiloContador.css" rel="stylesheet">
</head>
<body>

    <?php
    include 'conexion.php';
    echo "<h2><center>Tu carrito</center></h2>";
    include_once 'clase.php';
    echo Productos::verCarrito();
    ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/añadirCarro.js"></script>
</body>
</html>
