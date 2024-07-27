<?php //este es el contador para ver la cantidad produsctos añadidos en carrito y favoritos
include 'conexion.php';

$respuesta = ['carrito' => 0, 'favoritos' => 0];

// Contar los productos en el carrito
$sqlCarrito = "SELECT COUNT(*) as total FROM tb_carrito";
$resultadoCarrito = $conexion->query($sqlCarrito);
if ($resultadoCarrito) {
    $filaCarrito = $resultadoCarrito->fetch_assoc();
    $respuesta['carrito'] = $filaCarrito['total'];
}

// Contar los productos en los favoritos
$sqlFavoritos = "SELECT COUNT(*) as total FROM tb_favoritos";
$resultadoFavoritos = $conexion->query($sqlFavoritos);
if ($resultadoFavoritos) {
    $filaFavoritos = $resultadoFavoritos->fetch_assoc();
    $respuesta['favoritos'] = $filaFavoritos['total'];
}

echo json_encode($respuesta);
?>
