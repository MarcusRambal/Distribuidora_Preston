<?php  //Codigo para que salga el hola *nombredeusuario! 
    session_start();
       // Verificar si hay una sesión o cookie de nombre de usuario
if (isset($_SESSION['username']) || isset($_COOKIE['username'])) {
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : $_COOKIE['username'];
    $enlace_ingresar = "<li><a href='#'>¡Hola, $username!</a></li> <li><a href='/distribuidora_prestonPhp/php/cerrar_sesion.php'>Cerrar sesión</a></li>";
} else {
    // Si no hay sesión ni cookie, mostrar el enlace "Ingresar"
    $enlace_ingresar = "<li><a href='/distribuidora_prestonPhp/subpages/login.php'>Ingresar</a></li>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="Products.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
    <body>
        <header>  
            <div class="header-container">
                <h1><a href ="../index.php">Distribuidora Preston</a></h1> <!--Direcciona a la pagina Principal-->
                <nav>
                    <ul>  <!--Main menu-->                 
                        <li><a href="/distribuidora_prestonPhp/subpages/Products.php">Productos</a></li>     
                        <li><a href="/distribuidora_prestonPhp/subpages/Uses.html">Usos</a></li>                 
                        <li><a href="#aboutus">Sobre nosotros</a></li>
                        <li><a href="#endpage">Contacto</a></li>
                        <?php echo $enlace_ingresar; ?>
                        <li><a href='/distribuidora_prestonPhp/subpages/carrito.html'><i class='bx bx-cart'></i></a></li>    
                    </ul>
                </nav>
          </div>
         </header>

         <div class="filtro-container" id="filtro-container">
            <label for="ordenar" class="ordenarLabel">Ordenar por:</label>
            <select id="ordenar" onchange="ordenarProductos()">
                <option value="sinSeleccionar"></option>
                <option value="precioAscendente">Menor Precio</option>
                <option value="precioDescendente">Mayor Precio</option>
            </select>
            <label for="filtrarCategoria" class="filtrarLabel">Filtrar por Categoria:</label>
            <select id="filtrarCategoria" onchange="filtrarPorCategoria()">
                <option value="sinSeleccionarCategoria"></option>
                <option value="Cuerina">Cuerina</option>
                <option value="Cuero">Cuero</option>
                <!-- Agrega aquí las opciones de categorías que tengas en tus productos -->
            </select>
        </div>

         <div class = "buscar"><label for="buscarNombre"></label>
          <input type="text" id="buscarNombre" oninput="filtrarPorNombre()"> 
            <i class='bx bx-search'></i>
          </div>
        
         <div id="productos-container" class="productos-container">
            <!-- Aquí se cargarán dinámicamente los productos desde JavaScript -->
        </div>

        <div id="modal-container" class="modal-container">
            <div id="modal-content" class="modal-content">
                <!-- Aquí se mostrarán los detalles del producto en grande -->
                <span class="close-btn" onclick="cerrarModal()">&times;</span>
                <img id="modal-imagen" src="" alt="">
                <h3 id="modal-nombre"></h3>
                <p id="modal-descripcion"></p>
                <p id="modal-cantidad"></p>
                <p id="modal-precio"></p>
                <p id="modal-categoria"></p>
                <form id="form-agregar-carrito">
                    <input type="hidden" id="producto_id" name="producto_id" value="">
                    <input type="hidden" id="producto_nombre" name="producto_nombre" value="">
                    <input type="hidden" id="producto_cantidad" name="producto_cantidad" value="">
                    <input type="hidden" id="producto_precio" name="producto_precio" value="">
                    <button type="button" onclick="agregarAlCarrito()">Agregar al Carrito</button>
                </form>
            </div>
           
        </div>
        
        <script src="Products.js"></script>
        <script src="carrito.js"></script>

        
    </body>
</html>