<?php
    require_once "Conexion.php";

    class Crud extends Conexion {

        public function __construct(){
            parent::__construct();
        }

        public function getProductos($query){
            $res = $this->conexion_db->query($query);
            $productos = $res->fetch_all(MYSQLI_ASSOC);
            return $productos;
        }

        public function subeFoto($query){
            $res = $this->conexion_db->prepare($query);
            $up = $res->execute();
            if ($this->conexion_db->errno ) {
                echo "Error de actualización : " . $this->conexion_db->error;
            } else {
                echo "El Registro fue actualizado con exito !!!";
            }

            // cerrar la conexion
            $this->conexion_db->close();
        }
        public function getUser($query){
            $res = $this->conexion_db->query($query);
            $user = $res->fetch_all(MYSQLI_ASSOC);
            $userCount=$res->rowCount();
            if($userCount == 0){
                header("location:InicioSesion.php");
            }else{
                session_start();
                $_SESSION['usuario']=$_POST[''];
            }

        }

    }