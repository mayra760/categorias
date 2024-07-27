<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo 'iniciar sesion'; ?></title>
</head>
<body>
    <div class="row">
        <h1>Iniciar sesión</h1>
        <form action="guardar2.php" method="GET">
            <input type="text" name="nombre" placeholder="Nombre"><br>
            <input type="password" name="contraseña" placeholder="Contraseña"><br>
            <input type="submit" value="Ingresar">
        </form>
    </div>
</body>
</html>
