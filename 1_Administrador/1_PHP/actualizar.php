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
        $NomCompleto=$_POST['PAterno'].' '.$_POST['MAterno'].' '.$_POST['Nombre'];//Concatenación del nombre
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
	<link rel="stylesheet" href="../2_CSS/estilos.css">
</head>
<body>
	<div class="contenedor">
		<h2>UNIVERSIDAD TECNOLÓGICA DEL SURESTE DE VERACRUZ</h2>
	<form action="" method="post">
	<center><div class="form-group">
				<a>Periodo</a><br>
				<input type="text" name="Periodo" placeholder="Ejemplo '10'" value="<?php if($resultado) echo $resultado['Periodo']; ?>"class="input__text">
			</div>
			<div class="form-group">
				<a>Apellido Paterno</a><br>
				<input type="text" name="PAterno" placeholder="Ejemplo 'Hernández'" value="<?php if($resultado) echo $resultado['PAterno']; ?>" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
				<br><a>Apellido Materno</a><br>
				<input type="text" name="MAterno" placeholder="Ejemplo 'Gomez'" value="<?php if($resultado) echo $resultado['MAterno']; ?>" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div class="form-group">
				<a>Nombre</a><br>
				<input type="text" name="Nombre" placeholder="Ejemplo 'Claudia Elena'" value="<?php if($resultado) echo $resultado['Nombre']; ?>" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
				<br><a>Generación</a><br>
				<input type="text" name="Generacion" placeholder="Ejemplo '2018-2020'" value="<?php if($resultado) echo $resultado['Generacion']; ?>" class="input__text">
			</div>
            <div class="form-group">
				<a>Extención</a><br>
				<input type="text" name="Extencion" placeholder="Ejemplo 'Nanchital'" value="<?php if($resultado) echo $resultado['Extencion']; ?>" class="input__text">
				<br><a>Modalidad</a><br>
				<input type="text" name="Modalidad" placeholder="Ejemplo 'Escolarizado'" value="<?php if($resultado) echo $resultado['Modalidad']; ?>" class="input__text">
			</div>
            <div class="form-group">
				<a>Carrera</a><br>
				<input type="text" name="Carrera" placeholder="Ejemplo 'ING. EN TECNOL.INFORM'" value="<?php if($resultado) echo $resultado['Carrera']; ?>" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
				<br><a>Matricula</a><br>
				<input type="text" name="Matricula" placeholder="Ejemplo '17180500'" value="<?php if($resultado) echo $resultado['Matricula']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<a>*** No es necesario editar ***</a><br>
				<input type="text" name="NomCompleto" placeholder="NomCompleto" value="<?php if($resultado) echo $resultado['NomCompleto']; ?>" class="input__text" readonly>
				<br><a>Genero</a><br>
				<input type="text" name="Genero" placeholder="Ejemplo 'MUJER'" value="<?php if($resultado) echo $resultado['Genero']; ?>" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			<div class="form-group">
				<a>Curp</a><br>
				<input type="text" name="Curp" placeholder="Ejemplo 'HGCL000212HVZLNRA5'" value="<?php if($resultado) echo $resultado['Curp']; ?>" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div class="btn__group">
				<a href="TablaInicial.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
			</center>
		</form>
	</div>
</body>
</html>
