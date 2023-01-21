<?php 
include_once 'conexion.php';
	if(isset($_GET['idSesion'])){
		$idSesion=(int) $_GET['idSesion'];
		$delete=$con->prepare('DELETE FROM  iniciosesion WHERE idSesion=:idSesion');
		$delete->execute(array(':idSesion'=>$idSesion));
		header('Location: GestionSesion.php');
	}else{
		header('Location: GestionSesion.php');
	}
 ?>