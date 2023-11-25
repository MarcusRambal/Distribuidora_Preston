<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="createaccount.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <body>
        <header>  
            <div class="header-login">
                <h1><a href ="../index.php">Distribuidora Preston</a></h1> <!--Direcciona a la pagina Principal-->       
          </div>
         </header>
        <div class = wrapper>
            <form action="../php/registro_usuario.php" method="post">
                <h1>Create Account</h1>
                <div class = input-box>
                    <input type="text" name="username" placeholder="Username" required>
                    <i class='bx bxs-user-detail'></i>
                </div>
                <div class="input-box">
                    <label for="password"></label>
                    <input type="password" id="password" name="password" placeholder="Password" required >
                    <button type="button" id="toggleBtn" onclick="togglePassword()"><i class="bx bxs-hide"></i></button>
                
                    <script>
                        function togglePassword() {
                            var passwordInput = document.getElementById('password');
                            var toggleBtn = document.getElementById('toggleBtn');
                
                            if (passwordInput.type === 'password') {
                                passwordInput.type = 'text';
                                toggleBtn.innerHTML ='<i class="bx bxs-show"></i>' ; // Cambia al emoticono de ocultar
                            } else {
                                passwordInput.type = 'password';
                                toggleBtn.innerHTML = '<i class="bx bxs-hide"></i>'; // Cambia al emoticono de mostrar
                            }
                        }
                    </script>
                </div>                
            
                <button type="submit" class = "btn">Create Account</button>

                <div class="Account-login">
                    <p>Already have an account?<a href="../subpages/login.php"> Sign in</a></p>
                </div>
    
            </form>
        </div>
    </body>
    </html>
</body>
</html>