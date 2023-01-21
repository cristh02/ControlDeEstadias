<?php 
	include_once 'conexion.php';
	
	if(isset($_POST['guardar'])){
		$PERIODO=$_POST['PERIODO'];
		$EXPEDIENTE=$_POST['EXPEDIENTE'];
		$PATERNO=$_POST['PATERNO'];
		$MATERNO=$_POST['MATERNO'];
		$NOMBRE=$_POST['NOMBRE'];
                $GENERACION=$_POST['GENERACION'];
		$EXTENSION=$_POST['EXTENSION'];
		$MODALIDAD=$_POST['MODALIDAD'];
		$CARRERA=$_POST['CARRERA'];
               

		if(!empty($PERIODO) && !empty($EXPEDIENTE) && !empty($PATERNO) && !empty($MATERNO) && !empty($NOMBRE) && !empty($GENERACION) && !                                    empty($EXTENSION) && !empty($MODALIDAD) && !empty($CARRERA) ){

			//if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
			//echo "<script> alert('Correo no valido');</script>";
			//}else{


$consulta_insert=$con->prepare('INSERT INTO informacion(PERIODO,EXPEDIENTE,PATERNO,MATERNO,NOMBRE,GENERACION,EXTENSION,MODALIDAD,CARRERA)  VALUES(:PERIODO,:EXPEDIENTE,:PATERNO,:MATERNO,:NOMBRE,:GENERACION,:EXTENSION,:MODALIDAD,:CARRERA)');



				$consulta_insert->execute(array(
					':PERIODO' =>$PERIODO,
					':EXPEDIENTE' =>$EXPEDIENTE,
					':PATERNO' =>$PATERNO,
					':MATERNO' =>$MATERNO,
					':NOMBRE' =>$NOMBRE,
                                        ':GENERACION' =>$GENERACION,
					':EXTENSION' =>$EXTENSION,
					':MODALIDAD' =>$MODALIDAD,
					':CARRERA' =>$CARRERA));
				header('Location: index.php');
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
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		<h2>UNIVERSIDAD TECNOLÓGICA DEL SURESTE DE VERACRUZ</h2>
		<form action="" method="post">
			<div class="form-group">
				
				<input type="text" name="PERIODO" placeholder="PERIODO" class="input__text">
				<input type="text" name="EXPEDIENTE" placeholder="EXPEDIENTE" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="PATERNO" placeholder="PATERNO" class="input__text">
				<input type="text" name="MATERNO" placeholder="MATERNO" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="NOMBRE" placeholder="NOMBRE" class="input__text">
                                <input type="text" name="GENERACION" placeholder="GENERACION" class="input__text">

			</div>
			<div class="btn__group">
                                <input type="text" name="EXTENSION" placeholder="EXTENSION" class="input__text">
                                <input type="text" name="MODALIDAD" placeholder="MODALIDAD" class="input__text">

			</div>
			<div class="btn__group">
                                <input type="text" name="CARRERA" placeholder="CARRERA" class="input__text">
                               

			</div>
			<div class="btn__group">
				<a href="index.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>
