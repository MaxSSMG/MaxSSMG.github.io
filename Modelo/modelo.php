<?php
    class Conexion {
        private $dbConexion; //Objeto que almacena la conexion

        public function __construct($db) {
            $this->dbConexion = new mysqli("localhost","root","root",$db);

        }

        public function consulta($consulta) {
            $r= $this->dbConexion->query($consulta);
            $mensaje="";
            while ($fila=$r->fetch_array()) {
                $mensaje.=$fila[0].";";
            }
            $array = explode(";",$mensaje);
            return $array;
        }
    }
?>