<?php

    echo "<script>alert('en submit')</script>";
    $user = $_POST['usuario'];
    $password = $_POST['password'];
    require_once 'CRUD.php';
    $mycrud = new Crud();
    $mycrud->getUser("Select email from clients where email = '$user' and password ='$password'");
header('Location: MyPerfil.php');

?>