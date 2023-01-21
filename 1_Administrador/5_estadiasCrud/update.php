<?php
	include_once 'conexion.php';

	if(isset($_GET['id_INFORMACION'])){
		$id_INFORMACION=(int) $_GET['id_INFORMACION'];

		$buscar_id=$con->prepare('SELECT * FROM informacion WHERE id_INFORMACION=:id_INFORMACION LIMIT 1');
		$buscar_id->execute(array(
			':id_INFORMACION'=>$id_INFORMACION
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: index.php');
	}


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
		$id_INFORMACION=(int) $_GET['id_INFORMACION'];

		if(!empty($PERIODO) && !empty($EXPEDIENTE) && !empty($PATERNO) && !empty($MATERNO) && !empty($NOMBRE) && !empty($GENERACION) && !                                    empty($EXTENSION) && !empty($MODALIDAD) && !empty($CARRERA) && !empty($id_INFORMACION) ){

		//	if(!filter_var($EXPEDIENTE,FILTER_VALIDATE_EXPEDIENTE)){
//		echo "<script> alert('Llene el campo expediente ');</script>";
			//}else{
                       
				$consulta_update=$con->prepare(' UPDATE informacion SET  
					PERIODO=:PERIODO,
					EXPEDIENTE=:EXPEDIENTE,
					PATERNO=:PATERNO,
					MATERNO=:MATERNO,
					NOMBRE=:NOMBRE,
                                        GENERACION=:GENERACION,
					EXTENSION=:EXTENSION,
                                        MODALIDAD=:MODALIDAD,
					CARRERA=:CARRERA
					WHERE id_INFORMACION=:id_INFORMACION;'
				);
				$consulta_update->execute(array(
					':PERIODO' =>$PERIODO,
					':EXPEDIENTE' =>$EXPEDIENTE,
					':PATERNO' =>$PATERNO,
					':MATERNO' =>$MATERNO,
					':NOMBRE' =>$NOMBRE,
                                        ':GENERACION' =>$GENERACION,
					':EXTENSION' =>$EXTENSION,
					':MODALIDAD' =>$MODALIDAD,
					':CARRERA' =>$CARRERA,
					':id_INFORMACION' =>$id_INFORMACION
				));
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
	<title>Editar Usuario</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		<h2>UNIVERSIDAD TECNOLÓGICA DEL SURESTE DE VERACRUZ</h2>
		<form action="" method="post">
			<div class="form-group">
<input type="text" name="PERIODO" placeholder="PERIODO" value="<?php if($resultado) echo $resultado['PERIODO']; ?>"                                 class="input__text">
				<input type="text" name="EXPEDIENTE" placeholder="EXPEDIENTE" value="<?php if($resultado) echo $resultado['EXPEDIENTE']; ?>"                                                   class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="PATERNO" placeholder="PATERNO" value="<?php if($resultado) echo $resultado['PATERNO']; ?>" class="input__text">
				<input type="text" name="MATERNO" placeholder="MATERNO" value="<?php if($resultado) echo $resultado['MATERNO']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="NOMBRE" placeholder="NOMBRE" value="<?php if($resultado) echo $resultado['NOMBRE']; ?>" class="input__text">
                                <input type="text" name="GENERACION" placeholder="GENERACION" value="<?php if($resultado) echo $resultado['GENERACION']; ?>"                                 class="input__text">
			</div>
                        <div class="form-group">
				<input type="text" name="EXTENSION" placeholder="EXTENSION" value="<?php if($resultado) echo $resultado['EXTENSION']; ?>"                                                    class="input__text">
                                <input type="text" name="MODALIDAD" placeholder="MODALIDAD" value="<?php if($resultado) echo $resultado['MODALIDAD']; ?>"                                                   class="input__text">
			</div>
                        <div class="form-group">
				<input type="text" name="CARRERA" placeholder="CARRERA" value="<?php if($resultado) echo $resultado['CARRERA']; ?>"                                                       class="input__text">
                                                               
			</div>
			<div class="btn__group">
				<a href="index.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>
