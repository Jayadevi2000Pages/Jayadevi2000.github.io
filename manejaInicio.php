<?php

    echo "<script>alert('en submit')</script>";
    $user = $_POST['usuario'];
    $password = $_POST['password'];
    require_once 'CRUD.php';
    $mycrud = new Crud();
    $mycrud->getUser("Select name from clients where name = '$user' and password ='$password'");

?>