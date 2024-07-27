<?php
session_start();
include 'plantill2.php';
?>
<title><?php echo 'carrito'; ?></title>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/stylePro.css" rel="stylesheet">
    <link href="css/pie_pagina.css" rel="stylesheet">
    <link href="css/estiloContador.css" rel="stylesheet"> <!-- Incluye el CSS para contadores -->
</head>
<body>
    <form action="vista.php" method="get">
        <button type="submit">Volver</button>
    </form>

    <?php
    include 'conexion.php';
    echo "<h2><center>Tu carrito</center></h2>";
    include_once 'clase.php';
    echo productos::verCarrito();

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id_producto = intval($_GET['id']);
        
        $sql = "SELECT nombre_producto, precio FROM tb_productos WHERE id_producto = ?";
        if ($stmt = $conexion->prepare($sql)) {
            $stmt->bind_param('i', $id_producto);
            $stmt->execute();
            $resultado = $stmt->get_result();

            if ($producto = $resultado->fetch_assoc()) {
                $nombre_producto = $producto['nombre_producto'];
                $precio_pro = $producto['precio'];

                // Incluye los productos en la base de datos
                $sql_insert = "INSERT INTO tb_carrito (nombre_producto, cantidad_pro, precio_pro) VALUES (?, 1, ?)";
                if ($stmt_insert = $conexion->prepare($sql_insert)) {
                    $stmt_insert->bind_param('sd', $nombre_producto, $precio_pro);
                    $stmt_insert->execute();
                }
            }
        }
    }
    ?>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="footer-widget">
                        <h2>contáctenos:</h2>
                        <div class="contacto-info">
                            <p><i class="fa fa-map-marker"></i> san jose del guaviare, Colombia</p>
                            <p><i class="fa fa-envelope"></i> fashionworld@gmail.com</p>
                            <p><i class="fa fa-phone"></i> +57-3135678748</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-6">
                    <div class="footer-widget">
                        <h5>Encuéntrenos en nuestras redes sociales</h5>
                        <div class="contacto-info">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/contador.js"></script> <!-- Incluye el JS para contadores -->
    <script src="js/scriptt.js"></script>
</body>
