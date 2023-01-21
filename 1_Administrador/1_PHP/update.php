<?php
	include_once 'conexion.php';
       error_reporting(E_ERROR | E_WARNING | E_PARSE);

	if(isset($_GET['id_Alumno_Expediente'])){
		$id_Alumno_Expediente=(int) $_GET['id_Alumno_Expediente'];

		$buscar_id=$con->prepare('SELECT * FROM usuarios WHERE id_Alumno_Expediente=:id_Alumno_Expediente LIMIT 1');
		$buscar_id->execute(array(
			':id_Alumno_Expediente'=>$id_Alumno_Expediente
		));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: TablaInicial.php');
	}

	if(isset($_POST['guardar'])){
		$Periodo=$_POST['Periodo'];
		$PAterno=$_POST['PAterno'];
		$MAterno=$_POST['MAterno'];
		$Nombre=$_POST['Nombre'];
        $Generacion=$_POST['Generacion'];
		$Extencion=$_POST['Extencion'];
		$Modalidad=$_POST['Modalidad'];
		$Carrera=$_POST['Carrera'];
        $Matricula=$_POST['Matricula'];
        $NomCompleto=$_POST['NomCompleto'];
        $Genero=$_POST['Genero'];
        $Curp=$_POST['Curp'];
        $id_Alumno_Expediente=(int) $_GET['id_Alumno_Expediente'];

		if(!empty($Periodo) && !empty($PAterno) && !empty($MAterno) && !empty($Nombre) && !empty($Generacion) && !empty($Extencion) && !empty($Modalidad) && !empty($Carrera) && !empty($Matricula) && !empty($NomCompleto) && !empty($Genero) && !empty($Curp) && !empty($id_Alumno_Expediente) ){

		//	if(!filter_var($EXPEDIENTE,FILTER_VALIDATE_EXPEDIENTE)){
//		echo "<script> alert('Llene el campo expediente ');</script>";
			//}else{
                       
				$consulta_update=$con->prepare(' UPDATE usuarios SET  
					Periodo=:Periodo,
					PAterno=:PAterno,
					MAterno=:MAterno,
					Nombre=:Nombre,
                    Generacion=:Generacion,
					Extencion=:Extencion,
                    Modalidad=:Modalidad,
					Carrera=:Carrera,
                    Matricula=:Matricula,              
                    NomCompleto=:NomCompleto,
                    Genero=:Genero,
                    Curp=:Curp
					WHERE id_Alumno_Expediente=:id_Alumno_Expediente;'
				);
				$consulta_update->execute(array(
				        ':Periodo' =>$Periodo,
					':PAterno' =>$PAterno,
					':MAterno' =>$MAterno,
					':Nombre' =>$Nombre,
                    ':Generacion' =>$Generacion,
					':Extencion' =>$Extencion,
					':Modalidad' =>$Modalidad,
					':Carrera' =>$Carrera,
                    ':Matricula' =>$Matricula,              
                    ':NomCompleto' =>$NomCompleto,
                    ':Genero' =>$Genero,
                    ':Curp' =>$Curp,
					':id_Alumno_Expediente' =>$id_Alumno_Expediente
				));
				header('Location: TablaInicial.php');
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
		<center><big><h2>UNIVERSIDAD TECNOL�GICA DEL SURESTE DE VERACRUZ</h2><big></center>
	<form action="" method="post">
			<div class="form-group" >
<input type="text" name="PERIODO" placeholder="PERIODO" value="<?php if($resultado) echo $resultado['Periodo']; ?>"                                 class="input__text">
</div>
			<div class="form-group">
				<input type="text" name="PATERNO" placeholder="PATERNO" value="<?php if($resultado) echo $resultado['PAterno']; ?>" class="input__text">
				<input type="text" name="MATERNO" placeholder="MATERNO" value="<?php if($resultado) echo $resultado['MAterno']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="NOMBRE" placeholder="NOMBRE" value="<?php if($resultado) echo $resultado['Nombre']; ?>" class="input__text">
                                <input type="text" name="GENERACION" placeholder="GENERACION" value="<?php if($resultado) echo $resultado['Generacion']; ?>"                                 class="input__text">
			</div>
                        <div class="form-group">
				<input type="text" name="EXTENSION" placeholder="EXTENSION" value="<?php if($resultado) echo $resultado['Extencion']; ?>"                                                    class="input__text">
                                <input type="text" name="MODALIDAD" placeholder="MODALIDAD" value="<?php if($resultado) echo $resultado['Modalidad']; ?>"                                                   class="input__text">
			</div>
                        <div class="form-group">
				<input type="text" name="CARRERA" placeholder="CARRERA" value="<?php if($resultado) echo $resultado['Carrera']; ?>"                                                       class="input__text">
                        <input type="text" name="MATRICULA" placeholder="MATRICULA" value="<?php if($resultado) echo $resultado['Matricula']; ?>"                                                       class="input__text">
</div>
<div class="form-group">
				<input type="text" name="NOMCOMPLETO" placeholder="NOMCOMPLETO" value="<?php if($resultado) echo $resultado['NomCompleto']; ?>"                                                       class="input__text">
                        <input type="text" name="GENERO" placeholder="GENERO" value="<?php if($resultado) echo $resultado['Genero']; ?>"                                                       class="input__text">
<div class="form-group">
				<input type="text" name="CURP" placeholder="CURP" value="<?php if($resultado) echo $resultado['Curp']; ?>"                                                       class="input__text">
                        
</div>
<div class="btn__group">
				<a href="TablaInicial.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>
