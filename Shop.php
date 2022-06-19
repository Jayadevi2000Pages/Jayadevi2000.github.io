<?php
require_once 'header.php';
?>
    <style>
        #cuerpo_entero{
            margin: auto;
            text-align: center;
            margin-bottom: 70px;
            margin-left: 70px;
            margin-right: 70px;
        }
        #filtros{
            background-color: #ff9f9f;
            margin: auto;
            left:auto;
            position: absolute;
            width: 160px;
            height: 60px;
            text-align: left;

        }
        #cuerpoShop{
            width: 55rem;
            margin: auto;
            position: absolute;

            left:250px;
        }
        #centrarTienda{
            background-color: #f9b0ff;
            margin: auto;
            text-align: center;
        }
    </style>

    <script>
        window.onload=function () {
            var tipos=document.getElementsByName("tipo");
            for(var i=0;i<tipos.length;i++){
                if(tipos[i].checked){

                }
                //tipos[i].onchange=precio;
                //alert(tipos[i].value);
            }
        }
    </script>
</head>
<body>


<div id ="cuerpo_entero">
    <div>
        <p style="color:blue;"><a href="home.php">Home</a> >> <a href="Shop.php">Shop</a></p>
    </div>
    <div id="filtros">
        <h5>Tipo : </h5>

        <input type="checkbox" id="BJD" name="tipo" value="BJD">BJD<br>
        <input type="checkbox" id="momoko" name="tipo" value="Momoko">Momoko<br>
        <input type="checkbox" id="monster_high" name="tipo" value="Monster High">Monster High<br>
        <input type="checkbox" id="otros" name="tipo" value="Otros">Otros<br><br>


        <h5>Material : </h5>


        <input type="checkbox" id="resina" name="material" value="resina">resina<br>
        <input type="checkbox" id="momoko" name="material" value="BJD">Momoko<br>
        <input type="checkbox" id="monster" name="material" value="BJD">Monster High<br>
        <input type="checkbox" id="BJD" name="material" value="BJD">Otros<br>
        <br>
        <h5>Precio : </h5>

        <ul>
            <input type="checkbox" id="<50" name="precio" value="< 50€"> < 50€ <br>
            <input type="checkbox" id=">50" name="precio" value="> 50€">> 50€<br>
            <input type="checkbox" id="<100" name="precio" value="< 100€"> < 100€ <br>
            <input type="checkbox" id=">100" name="precio" value="> 100€"> > 100€<br>
        </ul>
        <br>
    </div>

    <div id = "centrarTienda">

        <div class="row row-cols-1 row-cols-md-4 g-4" id ="cuerpoShop">

            <?php
            require_once 'CRUD.php';
            $mycrud = new Crud();
            $res = $mycrud ->getProductos("SELECT Foto, type, precio, doll_id FROM dolls");
            $var = 0;
            foreach ($res as $fila){
                $foto = $fila['Foto'];
                $tipo = $fila['type'];
                $doll_id = $fila['doll_id'];
                $precio = $fila['precio'];
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
      contenido.textContent = '".$precio." €';
      contenido.id='contenido.$var';

      var heading = document.createElement('h5');
      heading.setAttribute('class','card-title');
      heading.textContent = '".$tipo."';
      heading.id='heading.$var';
      
      var link = document.createElement('a');
      link.setAttribute('href','producto.php?doll_id=$doll_id');
       link.id='url.$var';
      
      var salto = document.createElement('br');
        salto.id='salto';
      document.getElementById('cuerpoShop').appendChild(link);
      document.getElementById('url.$var').appendChild(divEnglobo);
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
</div>

<?php
require_once 'footer.php';
?>
