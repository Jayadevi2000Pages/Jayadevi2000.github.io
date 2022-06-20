<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
            rel="stylesheet"
    />
    <!-- MDB -->
    <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
            rel="stylesheet"
    />
    <!-- MDB -->
    <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
    ></script>    <style>
        ul{
            list-style-type: none;
        }

        #mybody{
            background-color: #ffd6ea;
            margin: auto;
            text-align: center;
        }
        body{
            background-color: #ffd6ea;

        }
        header{
            margin: auto;
            text-align: center;
        }
        .fa {
            padding: 20px;
            font-size: 30px;
            width: 30px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .fa-instagram {
            background: #125688;
            color: white;
        }

    </style>
    <script language="javascript" type="text/javascript">
        function resizeIframe(obj) {
            obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
        }
    </script>
        </head>
<body>

<header>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">
                <img src="images/logo_transitdolls.jpg" style="border-radius: 50%;" alt="" width="50" height="50" class="d-inline-block align-text-top">Transitdolls
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="iframe_Shop.php">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="Graphic_Visitas.php">Visitas</a>
                    </li>

                </ul>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Login/Registro
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="InicioSesion.php">Iniciar Sesión</a></li>
                        <li><a class="dropdown-item" href="Regitro.php">Registrarse</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
<header>