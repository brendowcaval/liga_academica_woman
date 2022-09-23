<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body style="background-color:#E3242B;">
<?php
    require('db.php');
    
    if (isset($_REQUEST['username'])) {
        
        $username = stripslashes($_REQUEST['username']);
        
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Conta registrada.</h3><br/>
                  <p class='link'>Clique para ir pro <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Campos obrigatórios estão faltando.</h3><br/>
                  <p class='link'>Clique para ir pra <a href='registration.php'>registração</a> denovo.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <img src="img.jpeg" width="100" height="120" style="padding-left: 100px;">
        <input type="text" class="login-input" name="username" placeholder="Login" required />
        <input type="text" class="login-input" name="email" placeholder="Email">
        <input type="password" class="login-input" name="password" placeholder="Senha">
        <input type="submit" name="submit" value="Registrar" class="login-button" style="background: #E3242B;">
        <p class="link"><a href="login.php">Clique para ir pro login!</a></p>
    </form>
<?php
    }
?>
</body>
</html>