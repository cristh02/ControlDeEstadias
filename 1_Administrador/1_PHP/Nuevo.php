<?php 
include_once 'conexion.php';
	if(isset($_POST['guardar'])){
		$idSesion=$_POST['idSesion'];
		$correo=$_POST['correo'];
		$contrasena=$_POST['contrasena'];

		if(!empty($idSesion) && !empty($correo) && !empty($contrasena)){

			//if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
			//echo "<script> alert('Correo no valido');</script>";
			//}else{
			$consulta_insert=$con->prepare('INSERT INTO InicioSesion(idSesion,correo,contrasena)  VALUE (:idSesion,:correo,:contrasena)');
				$consulta_insert->execute(array(
					':idSesion' =>$idSesion,
					':correo' =>$correo,
					':contrasena' =>$contrasena));
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
	<title>Nuevo</title>
	<link rel="stylesheet" href="css/estilos.css"
</head>
<body>
	<div class="contenedor">
		<h2>UNIVERSIDAD TECNOLOGICA DEL SURESTE DE VERACRUZ</h2>
		<form action="" method="post">
			<div class="form-group">
				
				<input type="text" name="idSesion" placeholder="idSesion" class="input__text">
				<input type="text" name="correo" placeholder="correo" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="contrasena" placeholder="contrasena" class="input__text">
                                 
			</div>
			<div class="form-group">
				

				<a href="GestionSesion.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>