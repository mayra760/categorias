
<head>

    <title><?php echo 'ropa para damas y caballeros'; ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/stylePro.css" rel="stylesheet">
    
</head>
<body>
    <?php
    include 'plantill2.php';
    include_once 'clase.php';
    ?>
  <div class="producto" onmouseover="cambiarColor(this)" onmouseout="restablecerColor(this)">
    <div class="container-fluid">
        <div class="row">
            <div class="col-10">
            <?php echo productos::mostrarCategorias(); ?>
        </div>
        
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/añadirCarro.js"></script>
</body>
