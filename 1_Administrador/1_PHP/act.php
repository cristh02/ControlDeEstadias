<?php
	include_once 'conexion.php';
       error_reporting(E_ERROR | E_WARNING | E_PARSE);

	if(isset($_GET['idSesion'])){
		$idSesion=(int) $_GET['idSesion'];

		$buscar_id=$con->prepare('SELECT * FROM iniciosesion WHERE idSesion=:idSesion LIMIT 1');
		$buscar_id->execute(array(
			':idSesion'=>$idSesion
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: GestionSesion.php');
	}

	if(isset($_POST['guardar'])){
                $correo=$_POST['correo'];
		$contrasena=$_POST['contrasena'];
                $idSesion=(int) $_GET['idSesion'];

		if(!empty($correo) && !empty($contrasena) && !empty($idSesion)){

		//	if(!filter_var($EXPEDIENTE,FILTER_VALIDATE_EXPEDIENTE)){
//		echo "<script> alert('Llene el campo expediente ');</script>";
			//}else{
                       
				$consulta_update=$con->prepare(' UPDATE iniciosesion SET  
					correo=:correo,
					contrasena=:contrasena
					WHERE idSesion=:idSesion;'
				);
				$consulta_update->execute(array(
					':correo' =>$correo,
					':contrasena' =>$contrasena,
                                         ':idSesion' =>$idSesion
				));
				header('Location: GestionSesion.php');
			//}
		}else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Editar Usuario</title>
	<link rel="stylesheet" href="css/estilos.css"
</head>
<body>
	<div class="contenedor">
		<h2>UNIVERSIDAD TECNOLÓGICA DEL SURESTE DE VERACRUZ</h2>
	<form action="" method="post">
			<div class="form-group">
<input type="text" name="idSesion" placeholder="idSesion" value="<?php if($resultado) echo $resultado['idSesion']; ?>"class="input__text">
<input type="text" name="correo" placeholder="correo" value="<?php if($resultado) echo $resultado['correo']; ?>" class="input__text">
</div>
			<div class="form-group">
<input type="text" name="contrasena" placeholder="contrasena" value="<?php if($resultado) echo $resultado['contrasena']; ?>" class="input__text">

                        
</div>
<div class="btn__group">
				<a href="GestionSesion.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>