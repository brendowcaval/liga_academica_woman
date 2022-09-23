<?php

include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body style="background-color:#E3242B;">
    <div class="form">
        <h1>Olá, <?php echo $_SESSION['username']; ?>!</h1>
        
        <!-- cadastrar evento e noticia com possibilidade de incluir imagens-->
        <a href="eventos.php">Cadastrar Eventos</a> <br> <br> 
        <a href="noticias.php">Cadastrar Noticias</a> 
        
    
        <hr>
        <p><a href="logout.php">Sair</a></p>
    </div>
</body>
</html>