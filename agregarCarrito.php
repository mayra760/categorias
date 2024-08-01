<?php
session_start();
include 'conexion.php';

if (isset($_POST['id']) && is_numeric($_POST['id'])) {
    $id_producto = intval($_POST['id']);

    // Consulta para obtener el producto por ID
    $sql = "SELECT nombre_producto, precio FROM tb_productos WHERE id_producto = ?";
    if ($fila = $conexion->prepare($sql)) {
        $fila->bind_param('i', $id_producto);
        $fila->execute();
        $resultado = $fila->get_result();

        if ($producto = $resultado->fetch_assoc()) {
            $nombre_producto = $producto['nombre_producto'];
            $precio_pro = $producto['precio'];
            $sql_check = "SELECT id_ca, cantidad_pro FROM tb_carrito WHERE nombre_producto = ?";// Consulta para verificar si el producto ya está en el carrito
            if ($fila_check = $conexion->prepare($sql_check)) {
                $fila_check->bind_param('s', $nombre_producto);
                $fila_check->execute();
                $resultado_check = $fila_check->get_result();

                if ($carrito_item = $resultado_check->fetch_assoc()) {
                    $nueva_cantidad = $carrito_item['cantidad_pro'] + 1;// Si el producto ya está en el carrito, actualizar la cantidad
                    $sql_update = "UPDATE tb_carrito SET cantidad_pro = ? WHERE id_ca = ?";
                    if ($fila_update = $conexion->prepare($sql_update)) {
                        $fila_update->bind_param('ii', $nueva_cantidad, $carrito_item['id_ca']);
                        $fila_update->execute();
                        echo json_encode(['status' => 'success', 'message' => 'Cantidad del producto actualizada en el carrito']);
                    }
                } else {
                    // Si el producto no está en el carrito, insertarlo
                    $sql_insert = "INSERT INTO tb_carrito (nombre_producto, cantidad_pro, precio_pro) VALUES (?, 1, ?)";
                    if ($fila_insert = $conexion->prepare($sql_insert)) {
                        $fila_insert->bind_param('sd', $nombre_producto, $precio_pro);
                        $fila_insert->execute();
                        echo json_encode(['status' => 'success', 'message' => 'Producto añadido al carrito']);
                    }
                }
            }
        }
    }
}
?>
