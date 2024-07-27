<link rel="shortcut icon" href="https://getbootstrap.com/2.0.2/assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="https://getbootstrap.com/2.0.2/assets/ico/apple-touch-icon-57-precomposed.png">
<head>
    <title><?php echo 'sesion de registro'; ?></title>
</head>
<div class="row"><br>
    <h1>Registrarse</h1>
    <form action="guardar.php" method="get"><br>
        <input type="text" name="documento" placeholder="documento"><br>
        <input type="text" name="nombre" placeholder="nombre"><br>
        <input type="text" name="apellido" placeholder="apellido"><br>
        <input type="email" name="correo" placeholder="correo"><br>
        <input type="password" name="contraseña" placeholder="contraseña"><br>
        <input type="date" name="fecha" placeholder="fecha"><br>
        <input type="submit">
    </form>
</div>