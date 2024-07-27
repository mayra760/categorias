<?php

$documento = $_GET['documento'];
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$correo = $_GET['correo'];
$contraseña = $_GET['contraseña'];
$fecha= $_GET['fecha'];
include ("clase.php");
login::registrar($documento,$nombre,$apellido,$correo,$contraseña,$fecha);
