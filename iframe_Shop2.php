<!DOCTYPE html>
<html>
<head>
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="jquery-3.2.1.js"></script>

    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
    />
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
        rel="stylesheet"
    />
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
    ></script>
    <style>
        #cuerpo_entero{
            margin: auto;
            text-align: center;
            margin-bottom: 70px;
            margin-left: 70px;
            margin-right: 70px;
        }
        #filtros{
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
        $(document).ready(function (){
            $('.category_item').click(function () {
                var catProduct = $(this).attr('category');
                console.log(catProduct);
                $('.product-item').hide();
                $('.product-item[category="'+catProduct+'"]').show();
            })
        });

    </script>
</head>
<body>


<div id ="cuerpo_entero">
    <div>
        <p style="color:blue;"><a href="home.php">Home</a> >> <a href="iframe_Shop.php">Shop</a></p>
    </div>
    <div id="filtros">
        <h5>Tipo : </h5>
        <a href="iframe_Shop.php" class="category_item" category="BJD">BJD</a> <br>
        <a href="iframe_Shop.php" class="category_item" category="Momoko">Momoko</a><br>
        <a href="iframe_Shop.php" class="category_item" category="arcilla">arcilla</a><br>
        <a href="iframe_Shop.php" class="category_item" category="Otros">Otros</a><br>
        <h5>Material : </h5>


        <a href="iframe_Shop1.php" class="category_item" category="resina">resina</a> <br>
        <a href="iframe_Shop1.php" class="category_item" category="Plastico">Plastico</a><br>
        <a href="iframe_Shop1.php" class="category_item" category="Monster High">Monster High</a><br>
        <a href="iframe_Shop1.php" class="category_item" category="Otros">Otros</a><br>
        <br>
        <h5>Precio : </h5>

        <ul>

            <a href="#" class="category_item" category="< 100€">< 100€</a><br>
            <a href="#" class="category_item" category="> 100€">> 100€</a><br>
            <br>
        </ul>
        <br>
    </div>

    <div id = "centrarTienda">

        <div class="row row-cols-1 row-cols-md-4 g-4" id ="cuerpoShop">

            <?php
            require_once 'CRUD.php';
            $mycrud = new Crud();
            $res = $mycrud ->getProductos("SELECT Foto, type, precio, doll_id , material FROM dolls");
            $var = 0;
            foreach ($res as $fila){
                $foto = $fila['Foto'];
                $tipo = $fila['type'];
                $doll_id = $fila['doll_id'];
                $precio = $fila['precio'];
                $material = $fila['material'];
                $preciochar='';
                $var++;


                if ($precio < 100){
                    $preciochar = '< 100€';

                } if ($precio > 100){
                    $preciochar = '> 100€';
                }
                echo "           
                <div class='product-item' category='$preciochar'>
                <a href='producto.php?doll_id=$var' id='url$var'>
                <div class='col' id='divEnglobo$var' >
                <div class='card h-100' id='divExterno$var'>
                <img class='card-img-top' src='server_images/$foto' alt='doll' id='imagen$var'>
                <div class='card-body' id='divInterno$var'>
                <h5 class='card-title'' id='heading$var'>$tipo</h5>
                <p class='card-text' id='contenido$var'>$precio €</p>
                </div></div></div></a></div>";
            }
            ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>