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
    <title>distribuidora Preston</title>
    <link rel="stylesheet" href="main.css">
  
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <script>src = "main.js"</script>
    <header>  
       <div class="header-container">
           <h1><a href ="index.php">Distribuidora Preston</a></h1> <!--Direcciona a la pagina Principal-->
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
       <!--Web main presentation-->
      <section class="presentation" id = "presentation">
        <div class="presentation-video">
            <video src="./resources/videos/video_prueba.mp4" autoplay muted loop></video>
        </div>

        <div class = "dark-overlay">
            <div class="presentation-content">
                <h2>Cuero sintético, calidad que se siente </h2> 
            </div>           
        </div>

       </section>
          <!--Products section-->
       <section class="products" id="products">
        <div>
        
        </div>
        <div></div>


       </section>
         <!-- Uses section-->
       <section class="uses" id="uses">
        
       </section>
         <!-- Contact-- section-->
       <section class="contact" id="contac">

       </section>

        <!--About us section-->
       <section class="aboutus" id="aboutus">
        <h2 >Sobre Nosotros</h2>
        <br>
        <h3>Distribuidora Preston</h3>
        <br>
        <br>
        <br>
        <p>En Distribuida Preston, nuestra misión es proporcionar a nuestros clientes el material de cuerina más 
          elegante para proyectos de alta calidad. Nos apasiona ayudar a nuestros clientes a expresar su estilo único a través de cuerina de primera calidad.
        </p>
        <br>
        <br>
        <p>Calidad Inigualable y flexible: Nos comprometemos a ofrecer cuerina de la más alta calidad para garantizar la satisfacción de nuestros clientes.
            Creatividad y Diseño: Fomentamos la creatividad y la innovación en la moda y la decoración a través de nuestra selección única de cuerina.
            Compromiso con la Comunidad: Contribuimos activamente a la comunidad textil y apoyamos prácticas sostenibles en la industria.
        </p>
        <br>
        <br>
        <br>
        <h2>Nuestro equipo</h2>
        <br>
        <br>
         <div class ="team ">
            <picture>
                <img src="resources/images/loto.jpg" alt="icono">
                <p>Antonio Rambal</p>
                <h3>CEO</h3>               
            </picture>
        </div>
       </section>
              
         <footer >
         <div class="footer-container">
        <div class="footer-content">
            <h3>Contacto</h3>
            <p>Dirección: 123 Calle Principal, Ciudad</p>
            <p>Email: info@DistribuidoraPreston.com</p>
            <p>Teléfono: (123) 456-7890</p>
            <ul>
              <li><a href="#" target="_blank">Respositorio Github</a></li>

          </ul>
        </div>

        <div class="footer-content">
            <h3>Enlaces</h3>
            <ul>

                <li><a href="#">Sobre nosotros</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>

        <div class="footer-content">
            <h3>Redes Sociales</h3>
            <ul>
                <li><a href= "https://www.instagram.com/marcus_rambal/" target="_blank">Instagram</a></li>
                <li><a href="https://twitter.com/MarcusLaranita" target="_blank">Twitter</a></li>
                
            </ul>
        </div>
    </div>
    <div class = "copyright">
    <p>Distribuidora Preston &copy;. Todos los derechos reservados</p>
    </div>
          
          </footer>
      
     
</body>

</html>