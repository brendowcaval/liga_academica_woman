<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body style="background-color:#E3242B;">
<?php
    require('db.php');
    session_start();
    
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Login ou senha incorreta!</h3><br/>
                  <p class='link'>clique aqui para ir pro <a href='login.php'>Login</a> denovo.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <img src="img.jpeg" width="100" height="120" style="padding-left: 100px;">
        <input type="text" class="login-input" name="username" placeholder="Login" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Senha"/>
        <input type="submit" value="Entrar" name="submit" class="login-button" style="background: #E3242B;"/>
        <p class="link"><a href="registration.php">Registre-se aqui!</a></p>
        
        <p class="link"><a href="index.php">Voltar para página inicial</a></p>
  </form>
<?php
    }
?>
</body>
</html>