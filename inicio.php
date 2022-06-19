<?php
if(isset($_POST['submit'])) {

    $user = $_POST['usuario'];
    $password = $_POST['password'];
    require_once 'CRUD.php';
    $mycrud = new Crud();
    $mycrud->getUser("Select name from clients where name = '$user' and password ='$password'");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inicio Sesión</title>
    <style>
        .placeicon {
            font-family: fontawesome;
        }

        .custom-control-label::before {
            background-color: #dee2e6;
            border: #dee2e6;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
</head>
<body>

<div class="bg-info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="container bg-white rounded mt-2 mb-2 px-0">
                    <div class="row justify-content-center align-items-center pt-3">
                        <h1><strong>Login</strong></h1>
                    </div>

                    <div class="pt-3 pb-3">
                        <form class="form-horizontal" method="post" action="<?php $_SERVER["PHP_SELF"]?>">
                            <div class="form-group row justify-content-center px-3">
                                <div class="col-9 px-0">
                                    <input type="text" id="user"  name="user" placeholder="&#xf007; &nbsp; User name" class="form-control border-info placeicon">
                                </div>
                            </div>

                            <div class="form-group row justify-content-center px-3">
                                <div class="col-9 px-0">
                                    <input type="password"  id="password"  name="password" placeholder="&#xf084; &nbsp; &#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" class="form-control border-info placeicon">
                                </div>
                            </div>

                            <div class="form-group row justify-content-center px-3">
                                <div class="col-9">
                                    <div class="row">
                                        <div class="col-6 px-0">
                                            <div class="custom-control custom-checkbox mb-3">
                                                <input id="customCheck1" type="checkbox" class="custom-control-input checkbox-muted">
                                                <label for="customCheck1" class="custom-control-label text-muted">Remember Me</label>
                                            </div>
                                        </div>
                                        <!-- Forgot Password Link -->
                                        <div class="col-6 px-0 text-right">
                                            <span><a href="#" class="text-danger"><b>Forgot Password?</b></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <div class="col-3 px-3">
                                    <input type="submit" value="Log in" class="btn btn-block btn-info">
                                </div>
                            </div>

                        </form>
                    </div>

                    <div class="mx-0 px-0 bg-light">


                        <div class="px-4 pt-5">
                            <hr>
                        </div>

                        <div class="pt-2">
                            <div class="row justify-content-center">
                                <h5>Don't have an Account?<span><a href="#" class="text-danger"> Register Now!</a></span></h5>
                            </div>
                            <div class="row justify-content-center align-items-center pt-4 pb-5">
                                <div class="col-4">
                                    <a href="#" class="btn btn-block btn-info">
                                        REGISTER
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
