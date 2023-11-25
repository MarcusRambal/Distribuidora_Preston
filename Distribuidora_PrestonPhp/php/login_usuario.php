<?php
       include 'conexion.php';

       $username = $_POST["username"]; /*almacenando */
       $password = $_POST["password"];

       $verificar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE username = '$username' and password = '$password' ");

       if(mysqli_num_rows($verificar_login) > 0){
        header("location: ../index.php");
              // Iniciar sesión y establecer una cookie con el nombre del usuario
              setcookie('username', $username, time() + (86400), "/"); // 86400 = 1 día
              session_start();
              $_SESSION['username'] = $username;
              // Redirigir a la página principal
              header("Location: ../index.php");   
           exit;
       }else{
        echo'
        <script>
          alert("El usuario no existe, verifique sus datos");
          window.location = "../subpages/login.php";
                    </script>

        ';
        exit; 
       }

       
?>