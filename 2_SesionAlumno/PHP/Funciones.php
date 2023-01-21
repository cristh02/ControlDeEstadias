<?php
function calculaTiempo($FechaInicio, $FechaFin){
    $datetime1 = date_create($FechaInicio);
    $datetime2 = date_create($FechaFin);
    $interval =date_diff($datetime1, $datetime2);

    $tiempo=array();

    foreach ($interval as $valor){
        $tiempo[]=$valor;
    }
    return $tiempo;
}
?>