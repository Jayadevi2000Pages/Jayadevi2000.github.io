<?php
session_start();

require_once 'header.php';
$user=$_SESSION['usuario'];
echo "Bienvenido $user";
echo "<script>document.getElementById('dropdownMenuButton1').innerHTML='$user'</script>";
echo "<br><a href='home.php'>Volver a inicio</a>";
require_once 'footer.php';
?>