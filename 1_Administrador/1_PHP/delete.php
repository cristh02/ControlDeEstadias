<?php 
include_once 'conexion.php';
	if(isset($_GET['id_Alumno_Expediente'])){
		$id_Alumno_Expediente=(int) $_GET['id_Alumno_Expediente'];
		$delete=$con->prepare('DELETE FROM Usuarios WHERE id_Alumno_Expediente=:id_Alumno_Expediente');
		$delete->execute(array(':id_Alumno_Expediente'=>$id_Alumno_Expediente));
		header('Location: TablaInicial.php');
	}else{
		header('Location: TablaInicial.php');
	}
 ?>