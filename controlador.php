<?php

include 'plantill2.php';
if(isset($_GET['seccion'])) {
    $seccion = $_GET['seccion'];

    switch ($seccion) {
        case 'seccion1':
            include 'seccion1.php';
            break;
            case 'seccion2':
              include 'seccion2.php';
              break;
        case 'seccion3':
            include 'seccion3.php';
            break;
        case 'vista':
            include 'vista.php';
            break;
    }
} else {
    echo 'No se ha especificado ninguna sección.';
}
