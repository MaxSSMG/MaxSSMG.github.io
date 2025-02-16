<?php
require_once("../Modelo/modelo.php");
try {
    $conexion = new Conexion($_POST["bd"]);
    $resultado = $conexion->consulta(htmlspecialchars($_POST["consulta"]));
} catch (Exception $e) {
    echo $e->getMessage();
}

require_once("../Vista/mostrarResultado.php");
?>