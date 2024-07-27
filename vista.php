
<head>
    <meta charset="UTF-8">
    <title><?php echo 'vistas'; ?></title>
    <link href="img/favicon.ico" rel="icon">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="css/style2.css" rel="stylesheet">
    <style>
        .producto img {
            width: 80%;
            height: 60%;
            transition: transform 0.1s ease;
        }
        .producto:hover {
            transform: scale(1.1); 
        }
        .producto:hover img {
            transform: scale(2.2);
        }
    </style>
</head>
<body>
    <div class="bottom-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="search">
                        <input type="text" placeholder="Buscar">
                        <button><i class="fa fa-search"></i></button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="user">
                        <a href="carrito.php" class="btn wishlist">
                            <i class="fa fa-heart"></i>
                            <span>ver carrito </span>
                        </a>
                        <a href="favoritos.php" class="btn cart">
                            <i class="fa fa-shopping-cart"></i>
                            <span>favorito</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Volver al inicio</a></li>
            </ul>
        </div>
    </div>

    <?php
    echo ' <h2><center>Aquí encontraras</center></h2><br>';
    ?>
    <div class="product-view">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="productos-container">
                        <?php
                        include_once 'clase.php'; 
                        echo productos::mostrarProductos();
                        ?>
                    </div>
                </div>           
                <div class="col-lg-4 sidebar">
                    <div class="sidebar-widget category">
                        <h2 class="title">Categorías</h2>
                        <nav class="navbar bg-light">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="niñ@.php"><i class="fa fa-child"></i>Ropa para niños y bebés</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="categ.php"><i class="fa fa-tshirt"></i>Ropa para damas y caballeros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="accesorios.php"><i class="fa fa-gem"></i>Accesorios para damas y caballeros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="zapatos.php"><i class="fa fa-shoe-prints"></i>Calzado para damas caballeros y niñ@s</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/carrito.js"></script>
</body>