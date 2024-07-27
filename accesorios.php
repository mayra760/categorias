<title><?php echo 'accesorios para damas y caballeros';?></title>
<?php
  include 'plantill2.php'; 
?><br>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/stylePro.css" rel="stylesheet">
    <link href="css/pie_pagina.css" rel="stylesheet">
</head>
<body>
    <div class="producto" onmouseover="cambiarColor(this)" onmouseout="restablecerColor(this)">
     <div class="container-fluid">
        <div class="row">
            <div class="col-10">
                <center>
                <?php
                    include_once 'clase.php';
                    echo productos::botones();
                    echo productos::verAccesorios();
                ?>
                </center>
            </div>
        </div>
      </div>
    </div>

    <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="footer-widget">
                            <h2>contactenos:</h2>
                            <div class="contacto-info">
                                <p><i class="fa fa-map-marker"></i>  san jose del guaviare, Colombia</p>
                                <p><i class="fa fa-envelope"></i> fashionworld@gmail.com</p>
                                <p><i class="fa fa-phone"></i> +57-3135678748</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-6">
                        <div class="footer-widget">
                            <h5>Encuentrenos en nuestras redes sociales</h5>
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
</body>

