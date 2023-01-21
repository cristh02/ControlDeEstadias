<?php
include "Funciones.php";

$FechaInicio=$_POST['fecha'];
$FechaFin=date('Y-m-d');
echo calculaTiempo($FechaInicio,$FechaFin)[0];
?>
