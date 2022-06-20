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
            if (mysqli_query($this->conexion_db, $query)) {
                echo "Registro ingresado correctamente";
            } else {
                echo "Error: " . $query . "" . mysqli_error($this->conexion_db);
            }

            // cerrar la conexion
            $this->conexion_db->close();
        }

        public function getUser($query){
            $res = $this->conexion_db->query($query);
            $user = $res->fetch_all(MYSQLI_ASSOC);
            $userCount=$res->num_rows;
            if($userCount == 0){
                echo '<div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="false">
                  <div class="toast-header">
                    <strong class="mr-auto">Inicio Sesión</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="toast-body">
                    Usuario o contraseña incorrectos
                  </div>
                  <a href="InicioSesion.php">Volver a iniciar sesión</a>
                </div>';
            }else{
                session_start();
                $_SESSION['usuario']=$_POST['usuario'];
                echo "<script>alert('DENTRO')</script>";
                //exit;

            }
        }
    }