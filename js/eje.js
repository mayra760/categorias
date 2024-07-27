let contadorCarrito = 0;
let contadorFavoritos = 0;

function agregarAlCarrito(elemento) {
    contadorCarrito++;
    document.getElementById('contadorCarrito').innerText = contadorCarrito;
    elemento.querySelector('.btn').innerText = 'Añadido';
    setTimeout(() => {
        elemento.querySelector('.btn').innerText = 'Agregar al Carrito';
    }, 1000);
}

function agregarAFavoritos(elemento) {
    contadorFavoritos++;
    document.getElementById('contadorFavoritos').innerText = contadorFavoritos;
    elemento.querySelector('.btn').innerText = 'Añadido';
    setTimeout(() => {
        elemento.querySelector('.btn').innerText = 'Agregar a Favoritos';
    }, 1000);
}

/*               <li><a href="#">Inicio</a></li>
                <li><a href="vista.php">Productos</a></li>
                <li><a href="#" class="">Carrito (<span id="contadorCarrito">0</span>)</a></li>
                <li><a href="#">Favoritos (<span id="contadorFavoritos">0</span>)</a></li>*/

                /* esto es un contador para el carrito*/