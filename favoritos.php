<title><?php echo 'favoritos'; ?></title>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/stylePro.css" rel="stylesheet">
    <link href="css/pie_pagina.css" rel="stylesheet">
    <link href="css/estileAlert.css" rel="stylesheet">
</head>

<body>

<?php
session_start();
include 'conexion.php';
include 'plantill2.php';
echo "<h2><center>Tus favoritos</center></h2>";
include_once 'clase.php';
echo productos::verFavoritos();

// se verifica que se ha especificado el id del producto
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_producto = intval($_GET['id']);
    
    // Consulta para obtener los detalles del producto
    $sql = "SELECT nombre_producto FROM tb_productos WHERE id_producto = ?";
    if ($stmt = $conexion->prepare($sql)) {
        $stmt->bind_param('i', $id_producto);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($producto = $resultado->fetch_assoc()) {
            $nombre_produc = $producto['nombre_producto'];
            
            // Inserta el producto en la base de datos
            $sql_insert = "INSERT INTO tb_favoritos (nombre_produc, cantidad_fav) VALUES (?, 1)";
            if ($stmt_insert = $conexion->prepare($sql_insert)) {
                $stmt_insert->bind_param('s', $nombre_produc);
                $stmt_insert->execute();

                if ($stmt_insert->affected_rows > 0) {
                    echo "<p>Producto agregado a favoritos con éxito.</p>";
                } else {
                    echo "<p>Error al agregar el producto a favoritos.</p>";
                }
            }
        } 
    }
}
?>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="js/scriptt.js"></script>
</body>
