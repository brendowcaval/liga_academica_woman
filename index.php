<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css"/>
</head>
<body>
<ul>
  <li><a href="login.php">Entrar</a></li>
  
</ul>
<br> <br>
<img src="img.jpeg" alt="" width="200" height="200"> <br> <br>
<hr>
<h1>Eventos</h1>
<div>
    
<?php
    require('db.php');

   
    
    // Create connection
    $conn = mysqli_connect("localhost","root","","LoginSystem");
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }


$sql = "SELECT titulo, descricao, imagem FROM eventos";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    
    
    $tituloS =  $row["titulo"];
    $descricaoS = $row["descricao"];
    $seila = $row["imagem"] ;
    echo "<h2> $tituloS </h2>";
    echo " <p>$descricaoS </p>";
    echo "  <img src='$seila' hidth='150' height='150'>";
    
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>

</div>
<hr>
<h1>Noticias</h1>
<div>
<?php
    require('db.php');

   
    
    // Create connection
    $conn = mysqli_connect("localhost","root","","LoginSystem");
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }


$sql = "SELECT titulo, descricao, imagem FROM noticias";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    
    
    $tituloV = $row["titulo"];
    $descricaoV = $row["descricao"];
    $seila = $row["imagem"] ;
    echo "<h2> $tituloV </h2>";
    echo " <p>$descricaoV </p>";
    echo "  <img src='$seila' hidth='150' height='150'>";

  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
</div>

    
</body>
</html>