<?php 
include_once 'conexion.php';
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
               
		if(!empty($Periodo) && !empty($PAterno) && !empty($MAterno) && !empty($Nombre) && !empty($Generacion) && !empty($Extencion) && !empty($Modalidad) && !empty($Carrera) && !empty($Matricula) && !empty($NomCompleto) && !empty($Genero) && !empty($Curp) ){

			//if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
			//echo "<script> alert('Correo no valido');</script>";
			//}else{

$consulta_insert=$con->prepare('INSERT INTO usuarios(Periodo,PAterno,MAterno,Nombre,Generacion,Extencion,Modalidad,Carrera,Matricula,NomCompleto,Genero,Curp) 
VALUES (:Periodo,:PAterno,:MAterno,:Nombre,:Generacion,:Extencion,:Modalidad,:Carrera,:Matricula,:NomCompleto,:Genero,:Curp)');

				$consulta_insert->execute(array(
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
                    ':Curp' =>$Curp));

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
	<title>Nuevo</title>
	<link rel="stylesheet" href="../2_CSS/estilos.css"
</head>
<body>
	<div class="contenedor">
		<h2>UNIVERSIDAD TECNOLÓGICA DEL SURESTE DE VERACRUZ</h2>
		<form action="" method="post">
			<center><div class="form-group">
				<a>Periodo</a><br>
				<input type="text" name="Periodo" placeholder="Ejemplo '10'" class="input__text">
			</div>
			<div class="form-group">
				<a>Apellido Paterno</a><br>
				<input type="text" name="PAterno" placeholder="Ejemplo 'Hernández'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
				<br><a>Apellido Materno</a><br>
				<input type="text" name="MAterno" placeholder="Ejemplo 'Gomez'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div class="form-group">
				<a>Nombre</a><br>
				<input type="text" name="Nombre" placeholder="Ejemplo 'Claudia Elena'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
				<br><a>Generación</a><br>
                <input type="text" name="Generacion" placeholder="Ejemplo '2018-2020'" class="input__text">
			</div>
			<div class="btn__group">
				<a>Extención</a><br>
                <input type="text" name="Extencion" placeholder="Ejemplo 'Nanchital'" class="input__text">
				<br><a>Modalidad</a><br>
                <input type="text" name="Modalidad" placeholder="Ejemplo 'Escolarizado'" class="input__text">
			</div>
			<div class="btn__group">
				<a>Carrera</a><br>
                <input type="text" name="Carrera" placeholder="Ejemplo 'ING. EN TECNOL.INFORM'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
				<br><a>Matricula</a><br>
                <input type="text" name="Matricula" placeholder="Ejemplo '17180500'" class="input__text">
			</div>
			<div class="btn__group">
				<!--<a>Nombre Completo</a><br>
                 <input type="text" name="NomCompleto" placeholder="NomCompleto" class="input__text">-Este no es necesario pues el el array concatenamos el nombre-->
				 <br><a>Genero</a><br>
                <input type="text" name="Genero" placeholder="Ejemplo 'MUJER'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div class="btn__group">
				<a>Curp</a><br>
            <input type="text" name="Curp" placeholder="Ejemplo 'HGCL000212HVZLNRA5'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">           
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
