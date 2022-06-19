<?php

    class Conexion{
        protected $conexion_db;

        public function Conexion()
        {
            $this->conexion_db = new mysqli("localhost", "root" ,"", "transitdolls");

            if($this->conexion_db->connect_errno)
            {
                echo "Fallo a la conexión ".$this->conexion_db->connect_errno;
            }

            $this->conexion_db->set_charset("utf8");
            return $this->conexion_db;
        }
    }

?>