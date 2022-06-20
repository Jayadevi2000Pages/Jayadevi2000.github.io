<?php
echo "<script>alert('en submit')</script>";
$user = $_POST['usuario'];
$password = $_POST['password'];
require_once 'CRUD.php';
$mycrud = new Crud();
$id=random_int(0, 999);
$mycrud->insertUser("insert into clients (client_id,email, password) VALUES ($id,'$user','$password')");
session_start();
$_SESSION['usuario']=$_POST['usuario'];
$_SESSION['password']=$_POST['password'];

header('Location: MyPerfil.php');
