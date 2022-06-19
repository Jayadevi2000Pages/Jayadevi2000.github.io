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

        public function insertUser($query){
            $res = $this->conexion_db->prepare($query);
            $reg = $res->execute();
            if ($this->conexion_db->errno ) {
                echo "Error de inserción : " . $this->conexion_db->error;
            } else {
                echo "El Registro fue realizado con exito !!!";
            }

            // cerrar la conexion
            $this->conexion_db->close();
        }

        public function getUser($query){
            $res = $this->conexion_db->query($query);
            $user = $res->fetch_all(MYSQLI_ASSOC);
            $userCount=$res->rowCount();
            if($userCount == 0){
                echo '<div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false">
                  <div class="toast-header">
                    <strong class="mr-auto">Inicio Sesión</strong>
                    <small>11 mins ago</small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="toast-body">
                    Usuario o contraseña incorrectos
                  </div>
                </div>';
            }else{
                session_start();
                $_SESSION['usuario']=$_POST['usuario'];
                header('location:home.php?var=1');
            }
        }
    }