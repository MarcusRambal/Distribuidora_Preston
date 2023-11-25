<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>


<body>
    <header>  
        <div class="header-login">
            <h1><a href ="../index.php">Distribuidora Preston</a></h1> <!--Direcciona a la pagina Principal-->       
      </div>
     </header>
    <div class = wrapper>
        <form action = "../php/login_usuario.php" method="post">
            <h1>Log in</h1>
            <div class = input-box>
                <input type="text" name= "username"  placeholder="Username" required>
                <i class='bx bx-user'></i>
            </div>
            <div class = input-box>
                <input type="password" name = "password" placeholder="Password" required>
                <i class='bx bx-lock-alt' ></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class = "btn">Log in</button>

            <div class="register-link">
                <p>Don`t have an account?<a href="../subpages/createaccount.php"> Create one</a></p>
            </div>
        </form>
    </div>
</body>
</html>