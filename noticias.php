<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body style="background-color:#E3242B;">
<?php
   require('db.php');

    if (isset($_REQUEST['titulo'])) {
        
        $titulo = stripslashes($_REQUEST['titulo']);
        
        $titulo = mysqli_real_escape_string($con, $titulo);
        $descricao    = stripslashes($_REQUEST['descricao']);
        $descricao    = mysqli_real_escape_string($con, $descricao);
        $imagem = stripslashes($_REQUEST['imagem']);
        $imagem = mysqli_real_escape_string($con, $imagem);
        $query    = "INSERT into `noticias` (titulo, descricao, imagem)
                     VALUES ('$titulo', ' $descricao', '$imagem')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "
                  <h3>registrada.</h3><br/>
                  ";
        } else {
            echo "
            <h3> erro </h3>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        
        <h1>Cadastrar Noticias</h1>
        <input type="text" class="login-input" name="titulo" placeholder="titulo" required />
        <input type="text" class="login-input" name="descricao" placeholder="descricao">
        <input type="text" class="login-input" name="imagem" placeholder="URL da imagem">
    
        <input type="submit" name="submit" value="Registrar" class="login-button" style="background: #E3242B;">
        <hr>
        <p><a href="dashboard.php">Voltar</a></p>
    
    </form>
<?php
    }
?>
    
</body>
</html>