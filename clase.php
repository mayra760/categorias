<?php
class login{
    public static function registrar($documento,$nombre,$apellido,$correo,$contraseña,$fecha){
        include ('conexion.php');
        $sql = "insert into tb_usuarios(documento,nombre,apellido,correo,contraseña,fecha) value ('$documento','$nombre','$apellido','$correo','$contraseña','$fecha')";
        $consulta = $conexion->query($sql);
        if($consulta){
            header("location:controlador.php?seccion=seccion6");
        }
    }

        public static function autenticar($nombre,$contraseña){
            require("conexion.php");
            $salida ="";
            $sql ="SELECT count(*) from tb_usuarios ";
            $sql .= "where nombre='$nombre' and contraseña='$contraseña'";
            $resultado = $conexion->query($sql);
            while($fila=$resultado->fetch_array()){
                $salida = $fila[0];
            }
            $conexion->close();
            return $salida; 
        }   

    public static function mostrar(){
        include ('conexion.php');
        $salida= "";
        $sql = "select * from tb_usuarios;";
        $consulta = $conexion ->query($sql);
        while($fila = $consulta->fetch_assoc())
        {
            $salida.=$fila['nombre']."<br>";
            $salida.=$fila['apellido']."<br>";
            $salida.=$fila['correo']."<br>";
            $salida.=$fila['contraseña']."<br> <br>";
            $salida.=$fila['documento']."<br> <br>";
            $salida.=$fila['fecha']."<br> <br>";
        }
        return $salida;  
    }
}
class productos {
    public static function mostrarProductos() {
        include 'conexion.php';
        $salida = "";
        $ids = [1,4,7,12,15,16];
        $id = implode(',', $ids);
        $sql = "SELECT * FROM tb_productos WHERE id_producto IN ($id)";
        $consulta = $conexion->query($sql);

        while ($fila = $consulta->fetch_assoc()) {
            $salida .= "<div class='producto'>";
            $salida .= "<img src='" . $fila['ruta_img'] . "' alt='" . $fila['detalles'] . "' width='100px' class='img-thumbnail'>";
            $salida .= "<p><strong>" . $fila['detalles'] . "</strong></p>";
            $salida .= "</div>";
        }
        return $salida;
    }

    public static function mostrarCategorias() {
        include 'conexion.php';
        $salida = "";
        $ids = [1,2,3,4,5,6];
        $id = implode(',', $ids);  
        $sql = "SELECT * FROM tb_productos WHERE id_producto IN ($id)";
        $consulta = $conexion->query($sql);
        $salida .= "<div class='categorias'>";
        while ($fila = $consulta->fetch_assoc()) {
            $salida .= "<div class='categoria'>";
            $salida .= "<h5><p><li>" . $fila['nombre_producto'] . "; por solo: </h5></li></p>";
            $salida .= "<strong> $" . $fila['precio'] . "</strong>";
            $salida .= "<img src='" . $fila['ruta_img'] . "' alt='" . $fila['ruta_img'] . "' class='img-thumbnail'>";
            $salida .= "<div class='carfav'>";
            $salida .= "<a class='custom-button' href='carrito.php?id=" . $fila['id_producto'] . "'><i class='fas fa-shopping-cart'></i> añadir a carrito</a>";
            $salida .= "<a class='custom-button' href='favoritos.php?id=" . $fila['id_producto'] . "'><i class='fas fa-heart'></i> Favoritos</a>";
            $salida .= "</div><br>";  
            $salida .= "</div>";
        }
        $salida .= "</div>";
        
        return $salida;
    }

    public static function CateNiños() {
        include 'conexion.php';
        $salida = "";
        $ids = [22,23,24,25,26,27];
        $id = implode(',', $ids);
        $sql = "SELECT * FROM tb_productos WHERE id_producto IN ($id)";
        $consulta = $conexion->query($sql);
        $salida .= "<div class='categorias'>";
        while ($fila = $consulta->fetch_assoc()) {
            $salida .= "<div class='categoria'>";
            $salida .= "<h5><p><li>" . $fila['nombre_producto'] . "; por solo: </h5></li></p>";
            $salida .= "<strong> $" . $fila['precio'] . "</strong>";
            $salida .= "<img src='" . $fila['ruta_img'] . "' alt='" . $fila['nombre_producto'] . "' class='img-thumbnail'>";
            $salida .= "<div class='carfav'>";
            $salida .= "<a class='custom-button' href='carrito.php?id=" . $fila['id_producto'] . "'><i class='fas fa-shopping-cart'></i> añadir a carrito</a>";
            $salida .= "<a class='custom-button' href='favoritos.php?id=" . $fila['id_producto'] . "'><i class='fas fa-heart'></i> Favoritos</a>";
            $salida .= "</div><br>";  
            $salida .= "</div>";
        }
        $salida .= "</div>";
        
        return $salida;
    }

    public static function verAccesorios() {
        include 'conexion.php';
        $salida = "";
        $ids = [13,14,15,16,17,18];
        $id = implode(',', $ids);
        $sql = "SELECT * FROM tb_productos WHERE id_producto IN ($id)";
        $consulta = $conexion->query($sql);
        $salida .= "<div class='categorias'>";
        while ($fila = $consulta->fetch_assoc()) {
            $salida .= "<div class='categoria'>";
            $salida .= "<h5><p><li>" . $fila['nombre_producto'] . "; por solo: </h5></li></p>";
            $salida .= "<strong> $" . $fila['precio'] . "</strong>";
            $salida .= "<img src='" . $fila['ruta_img'] . "' alt='" . $fila['nombre_producto'] . "' class='img-thumbnail'>";
            $salida .= "<div class='carfav'>";
            $salida .= "<a class='custom-button' href='carrito.php?id=" . $fila['id_producto'] . "'><i class='fas fa-shopping-cart'></i> añadir a carrito</a>";
            $salida .= "<a class='custom-button' href='favoritos.php?id=" . $fila['id_producto'] . "'><i class='fas fa-heart'></i> Favoritos</a>";
            $salida .= "</div><br>";
            $salida .= "</div>";
        }
        $salida .= "</div>";
        
        return $salida;
    }

    public static function verZapatos() {
        include 'conexion.php';
        $salida = "";
        $ids = [7,8,9,10,11,12,19,20,21];
        $id = implode(',', $ids);
        $sql = "SELECT * FROM tb_productos WHERE id_producto IN ($id)";
        $consulta = $conexion->query($sql);
        $salida .= "<div class='categorias'>";
        while ($fila = $consulta->fetch_assoc()) {
            $salida .= "<div class='categoria'>";
            $salida .= "<h5><p><li>" . $fila['nombre_producto'] . "; por solo: </h5></li></p>";
            $salida .= "<strong> $" . $fila['precio'] . "</strong>";
            $salida .= "<img src='" . $fila['ruta_img'] . "' alt='" . $fila['nombre_producto'] . "' class='img-thumbnail'>";
            $salida .= "<div class='carfav'>";
            $salida .= "<a class='custom-button' href='carrito.php?id=" . $fila['id_producto'] . "'><i class='fas fa-shopping-cart'></i> añadir a carrito</a>";
            $salida .= "<a class='custom-button' href='favoritos.php?id=" . $fila['id_producto'] . "'><i class='fas fa-heart'></i> Favoritos</a>";
            $salida .= "</div><br>";
            $salida .= "<p>" . $fila['detalles'] . "</p>";
            $salida .= "</div>";
        }
        $salida .= "</div>";
        
        return $salida;
    }

    public static function verFavoritos() {
        include 'conexion.php';
        $salida = "";
        $sql = "SELECT f.id_favo, p.id_producto, p.nombre_producto, p.precio, p.ruta_img
                FROM tb_favoritos f
                JOIN tb_productos p ON f.nombre_produc = p.nombre_producto";
        
        if ($stmt = $conexion->prepare($sql)) {
            $stmt->execute();
            $resultado = $stmt->get_result();
        
            $salida .= "<div class='categorias'>";
            while ($fila = $resultado->fetch_assoc()) {
                $salida .= "<div class='categoria'>";
                $salida .= "<h5><p><li>" . $fila['nombre_producto'] . "; por solo: </h5></li></p>";
                $salida .= "<strong> $" . $fila['precio'] . "</strong>";
                $salida .= "<img src='" . $fila['ruta_img'] . "' alt='" . $fila['nombre_producto'] . "' class='img-thumbnail'>";
                $salida .= "<div class='carfav'>";
                $salida .= "<a class='custom-button' href='eliminarFavo.php?id=" . $fila['id_favo'] . "'><i class='fas fa-trash'></i> Eliminar</a>";
                $salida .= "</div><br>";
                $salida .= "</div>";
            }
            $salida .= "</div>";
        } else {
            $salida .= "<p>Error al recuperar los favoritos.</p>";
        }
        
        return $salida;
    }
    
    public static function verCarrito() {
        include 'conexion.php';
        $salida = "";
        $sql = "SELECT c.id_ca, c.nombre_producto, c.cantidad_pro, c.precio_pro, p.ruta_img
                FROM tb_carrito c
                JOIN tb_productos p ON c.nombre_producto = p.nombre_producto";
    
        if ($stmt = $conexion->prepare($sql)) {
            $stmt->execute();
            $resultado = $stmt->get_result();

            if($resultado->now_rows === 0){
                return '';
            }
    
            $salida .= "<div class='categorias'>";
            while ($fila = $resultado->fetch_assoc()) {
                $salida .= "<div class='categoria'>";
                $salida .= "<h5><p><li>" . $fila['nombre_producto'] . "; por solo: </h5></li></p>";
                $salida .= "<strong> $" . $fila['precio_pro'] . "</strong>";
                $salida .= "<img src='" . $fila['ruta_img'] . "' alt='" . $fila['nombre_producto'] . "' class='img-thumbnail'>";
                $salida .= "<div class='carfav'>";
                $salida .= "<a class='custom-button' href='eliminarCa.php?id=" . $fila['id_ca'] . "'><i class='fas fa-trash'></i> Eliminar</a>";
                $salida .= "</div><br>";
                $salida .= "</div>";
            }
            $salida .= "</div>";
        } else {
            $salida .= "<p>Error al recuperar los favoritos.</p>";
        }
    
        return $salida;
    }


    public static function botones() {
        include 'conexion.php';

        // Obtener el conteo actual de productos en el carrito y favoritos
        $carrito_count = 0;
        $favoritos_count = 0;

        if ($result = $conexion->query("SELECT COUNT(*) AS count FROM tb_carrito")) {
            $row = $result->fetch_assoc();
            $carrito_count = $row['count'];
        }

        if ($result = $conexion->query("SELECT COUNT(*) AS count FROM tb_favoritos")) {
            $row = $result->fetch_assoc();
            $favoritos_count = $row['count'];
        }

        $salida = '<div class="botones">';
        $salida .= '<div class="container-fluid">';
        $salida .= '<div class="col-md-3">';
        $salida .= '<div class="usuario">';
        $salida .= '<a href="favoritos.php" class="btn wishlist">';
        $salida .= '<i class="fa fa-heart"></i>';
        $salida .= '<span>favoritos</span>';
        $salida .= '<span id="favoritos-count" class="badge badge-pill badge-primary">' . $favoritos_count . '</span>';
        $salida .= '</a>';
        $salida .= '<a href="carrito.php" class="btn cart">';
        $salida .= '<i class="fa fa-shopping-cart"></i>';
        $salida .= '<span>ver carrito</span>';
        $salida .= '<span id="carrito-count" class="badge badge-pill badge-primary">' . $carrito_count  . '</span>';
        $salida .= '</a>';
        $salida .= '</div>';
        $salida .= '</div>';
        $salida .= '</div>';
        $salida .= '</div>';
        
        return $salida;
    }



    

}
