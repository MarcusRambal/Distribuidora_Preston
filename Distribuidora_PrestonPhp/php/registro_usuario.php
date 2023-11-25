<?php
     
     include "conexion.php";

     $username = $_POST["username"]; /*almacenando */
     $password = $_POST["password"];

     $query = "INSERT INTO usuarios(username, password) VALUES('$username','$password')";


     //Validacion de repeticion de usuarios
     
     $verificar_username = mysqli_query($conexion, "SELECT * FROM usuarios WHERE username = '$username'");

     if(mysqli_num_rows($verificar_username) > 0){
          echo'
          <script>
            alert("El nombre de usuario ya existe");
            window.location = "../subpages/createaccount.php";
                      </script>

          ';
          exit(); //salir del codigo para evitar usuarios repetidos

     }

     $ejecutar = mysqli_query($conexion, $query);

     if($ejecutar){
          echo' <script>
           alert("Usuario registrado con exito");
           window.location = "../subpages/login.php";
          </script>
          ';
     }else{

          echo' <script>
           alert("Intentelo de nuevo, usuario no almacenado");
           window.location = "../login.php";
          </script>
          ';

     }
     mysqli_close($conexion);
?>