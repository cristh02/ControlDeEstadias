<?php 

	include_once 'conexion.php';
	if(isset($_GET['id_INFORMACION'])){
		$id_INFORMACION=(int) $_GET['id_INFORMACION'];
		$delete=$con->prepare('DELETE FROM informacion WHERE id_INFORMACION=:id_INFORMACION');
		$delete->execute(array(':id_INFORMACION'=>$id_INFORMACION));
		header('Location: index.php');
	}else{
		header('Location: index.php');
	}
 ?>