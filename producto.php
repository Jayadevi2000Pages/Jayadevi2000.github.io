<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">



    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
</head>
<body>

<h2>Muñeca</h2>
<?php
require_once 'CRUD.php';
$mycrud = new Crud();
$doll_id= $_GET['doll_id'];
$res = $mycrud ->getProductos("SELECT Foto, type, precio, material,handmade,height, name,custom,made_in FROM dolls where doll_id = $doll_id");
foreach ($res as $fila) {
    $foto = $fila['Foto'];
    $tipo = $fila['type'];
    $material = $fila['material'];
    $handmade = $fila['handmade'];
    $height = $fila['height'];
    $name = $fila['name'];
    $custom = $fila['custom'];
    $made_in = $fila['made_in'];
    $precio = $fila['precio'];
    echo "
<div class='container' style='margin-right: 10%; margin-left: 10%;margin-bottom: 5%; margin-top: 5%'>
        <img src='server_images/$foto' class='w3-col m8 l9' alt='$tipo' height='30%' width='30%'>
        <div id='dfundamental' class='w3-col m4 l3' >
            Tipo: $tipo<br>
            Nombre:$name<br>
            Precio:$precio €<br>
        </div>

<div id='dgeneral' style=''><h5>Descripción</h5>
<table class='table table-striped'>
  <thead>
    <tr>
      <th scope='col'>Material</th>
      <th scope='col'>Hecho a mano</th>
      <th scope='col'>Altura</th>
      <th scope='col'>Customizada</th>
      <th scope='col'>Creada en</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>$material</td>
      <td>$handmade</td>
      <td>$height</td>
      <td>$custom</td>
      <td>$made_in</td>
    </tr>
  </tbody>
</table>

</div></div>";
}
?>

</body>
</html>