<?php
require_once 'header.php';
?>
<div id = "centrarTienda">
    <div class="row row-cols-1 row-cols-md-4 g-4" id ="cuerpoShop">

<?php
require_once 'CRUD.php';
$mycrud = new Crud();
$res = $mycrud ->getProductos("SELECT Foto, type, name FROM dolls");
$var = 0;
foreach ($res as $fila){
    $foto = $fila['Foto'];
    $tipo = $fila['type'];
    $nombre = $fila['name'];
    $var++;
    echo "<script>
      var divEnglobo = document.createElement('div');
      divEnglobo.setAttribute('class','col');
      divEnglobo.id='divEnglobo.$var';

      var divExterno = document.createElement('div');
      divExterno.setAttribute('class','card h-100');
      divExterno.id='divExterno.$var';

      var imagen = document.createElement('img');
      imagen.setAttribute('class','card-img-top');
      imagen.setAttribute('src', 'server_images/$foto');
      imagen.setAttribute('alt', 'doll');
      imagen.id='imagen.$var';

      var divInterno = document.createElement('div');
      divInterno.setAttribute('class','card-body');
      divInterno.id='divInterno.$var';

      var contenido = document.createElement('p');
      contenido.setAttribute('class','card-text');
      contenido.textContent = '".$nombre."';
      contenido.id='contenido.$var';

      var heading = document.createElement('h5');
      heading.setAttribute('class','card-title');
      heading.textContent = '".$tipo."';
      heading.id='heading.$var';
      
      var salto = document.createElement('br');
        salto.id='salto';
      document.getElementById('cuerpoShop').appendChild(divEnglobo);
      document.getElementById('divEnglobo.$var').appendChild(divExterno);
      document.getElementById('divExterno.$var').appendChild(imagen);
      document.getElementById('divExterno.$var').appendChild(divInterno);
      document.getElementById('divInterno.$var').appendChild(heading);
      document.getElementById('divInterno.$var').appendChild(contenido);
      document.getElementById('cuerpoShop.$var').appendChild(salto);

    </script>";
}
?>
 </div>
</div>
<?php
require_once 'footer.php';
?>