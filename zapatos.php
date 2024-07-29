<title><?php echo 'Zapatos';?> </title>
<?php
include 'plantill2.php';
?>
<head><BR>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="css/stylePro.css" rel="stylesheet">
    <link href="css/pie_pagina.css" rel="stylesheet">


    <style>
        /* Estilo para el mensaje de selección de talla */
        #mensaje-talla {
            display: none;
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px;
            background-color: pink;
            color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        #mensaje-talla.show {
            display: block;
        }
    </style>
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
                    echo productos::verZapatos();
                ?>
                </center>
            </div>
            <div class="col">
                    <div class="p-3 border bg-light">
                        <div class="zapato">
                            <h4>tallas:</h4>
                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn" onclick="seleccionarTalla(35)">27</button>
                                <button type="button" class="btn" onclick="seleccionarTalla(30)">30</button>
                                <button type="button" class="btn" onclick="seleccionarTalla(35)">35</button>
                                <button type="button" class="btn" onclick="seleccionarTalla(35)">37</button>
                                <button type="button" class="btn" onclick="seleccionarTalla(35)">38</button>
                            </div> 
                        </div>
                    </div>
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
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="mensaje-talla">Seleccionaste la talla</div>
    <script>
        function seleccionarTalla(talla) {
            var mensajeTalla = document.getElementById('mensaje-talla');
            mensajeTalla.textContent = 'Seleccionaste la talla ' + talla;
            mensajeTalla.classList.add('show');
            setTimeout(function() {
                mensajeTalla.classList.remove('show');
            }, 3000); // este mensaje aparece durante 3 segundos
        }
    </script>

</body>