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
		header('Location: TablaGeneral.php');
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
		$Festividad=$_POST['Festividad'];
		$edad=$_POST['edad'];
		$Induccion=$_POST['Induccion'];
		$PreRegistro=$_POST['PreRegistro'];
		$SoliciEstadia=$_POST['SoliciEstadia'];
		$ConsentSeguro=$_POST['ConsentSeguro'];
		$Empresa=$_POST['Empresa'];
		$Giro=$_POST['Giro'];
		$Tamano=$_POST['Tamano'];
		$Sector=$_POST['Sector'];
		$Dirigido=$_POST['Dirigido'];
		$Cargo=$_POST['Cargo'];
		$Direccion=$_POST['Direccion'];
		$Municipio=$_POST['Municipio'];
		$Estado=$_POST['Estado'];
		$LocalForane=$_POST['LocalForane'];
		$Telefono=$_POST['Telefono'];
		$Email=$_POST['Email'];
		$RFC=$_POST['RFC'];
		$SeguroDeVida=$_POST['SeguroDeVida'];
		$CartPrecentacion=$_POST['CartPrecentacion'];
		$CartAceptacion=$_POST['CartAceptacion'];
		$Compromiso_DC=$_POST['Compromiso_DC'];
		$Encuesta=$_POST['Encuesta'];
		$Liberacion=$_POST['Liberacion'];
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
                    Curp=:Curp,
					Festividad=:Festividad,
					edad=:edad,
					Induccion=:Induccion,
					PreRegistro=:PreRegistro,
					SoliciEstadia=:SoliciEstadia,
					ConsentSeguro=:ConsentSeguro,
					Empresa=:Empresa,
					Giro=:Giro,
					Tamano=:Tamano,
					Sector=:Sector,
					Dirigido=:Dirigido,
					Cargo=:Cargo,
					Direccion=:Direccion,
					Municipio=:Municipio,
					Estado=:Estado,
					LocalForane=:LocalForane,
					Telefono=:Telefono,
					Email=:Email,
					RFC=:RFC,
					SeguroDeVida=:SeguroDeVida,
					CartPrecentacion=:CartPrecentacion,
					CartAceptacion=:CartAceptacion,
					Compromiso_DC=:Compromiso_DC,
					Encuesta=:Encuesta,
					Liberacion=:Liberacion
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
					':Festividad'=>$Festividad,
					':edad'=>$edad,
					':Induccion'=>$Induccion,
					':PreRegistro'=>$PreRegistro,
					':SoliciEstadia'=>$SoliciEstadia,
					':ConsentSeguro'=>$ConsentSeguro,
					':Empresa'=>$Empresa,
					':Giro'=>$Giro,
					':Tamano'=>$Tamano,
					':Sector'=>$Sector,
					':Dirigido'=>$Dirigido,
					':Cargo'=>$Cargo,
					':Direccion'=>$Direccion,
					':Municipio'=>$Municipio,
					':Estado'=>$Estado,
					':LocalForane'=>$LocalForane,
					':Telefono'=>$Telefono,
					':Email'=>$Email,
					':RFC'=>$RFC,
					':SeguroDeVida'=>$SeguroDeVida,
					':CartPrecentacion'=>$CartPrecentacion,
					':CartAceptacion'=>$CartAceptacion,
					':Compromiso_DC'=>$Compromiso_DC,
					':Encuesta'=>$Encuesta,
					':Liberacion'=>$Liberacion,
					':id_Alumno_Expediente' =>$id_Alumno_Expediente
				));
				echo "<script> Guardado con exito');</script>";
				header('Location: TablaGeneral.php');
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
				<input type="Number" maxlength="2"  name="Periodo" placeholder="Ejemplo '10'" value="<?php if($resultado) echo $resultado['Periodo']; ?>"class="input__text">
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
				<input type="text" maxlength="9" name="Generacion" placeholder="Ejemplo '2018-2020'" value="<?php if($resultado) echo $resultado['Generacion']; ?>" class="input__text">
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
				<input type="Number" name="Matricula" placeholder="Ejemplo '17180500'" value="<?php if($resultado) echo $resultado['Matricula']; ?>" class="input__text">
			</div>
			<div class="form-group">
				<a>*** No es necesario editar ***</a><br>
				<input type="text" name="NomCompleto" placeholder="NomCompleto" value="<?php if($resultado) echo $resultado['NomCompleto']; ?>" class="input__text" readonly>
				<br><a>Genero</a><br>
				<input type="text" maxlength="6" name="Genero" placeholder="Ejemplo 'MUJER/HOMBRE'" value="<?php if($resultado) echo $resultado['Genero']; ?>" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			<div class="form-group">
				<a>Curp</a><br>
				<input type="text" maxlength="18" name="Curp" placeholder="Ejemplo 'HGCL000212HVZLNRA5'" value="<?php if($resultado) echo $resultado['Curp']; ?>" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div>
				<a>Fecha de nacimiento</a><br>
				<input type="date" name="Festividad" placeholder="Ejemplo '2000-03-20'" value="<?php if($resultado) echo $resultado['Festividad']; ?>"class="input__text">
				<br><a>Edad</a><br>
				<input type="Number" name="edad" placeholder="Ejemplo '21'" value="<?php if($resultado) echo $resultado['edad']; ?>"class="input__text">
			</div>
			<div>
				<a>Fecha de inducción</a><br>
				<input type="date" name="Induccion" value="<?php if($resultado) echo $resultado['Induccion']; ?>"class="input__text">
				<br><a>Pre-registro</a><br>
				<input type="text" maxlength="2" name="PreRegistro" placeholder="Ejemplo 'SI'" value="<?php if($resultado) echo $resultado['PreRegistro']; ?>"class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div>
				<a>Solicitud de estadía</a><br>
				<input type="text" maxlength="2" name="SoliciEstadia" placeholder="Ejemplo 'SI'" value="<?php if($resultado) echo $resultado['SoliciEstadia']; ?>"class="input__text" onkeyup="this.value=this.value.toUpperCase();">
				<br><a>Consentimiento de Seguro</a><br>
				<input type="text" maxlength="2" name="ConsentSeguro" placeholder="Ejemplo 'SI'" value="<?php if($resultado) echo $resultado['ConsentSeguro']; ?>" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div>
				<a>Empresa</a><br>
				<input type="text" name="Empresa" placeholder="Ejemplo 'Braskem Idesa'" value="<?php if($resultado) echo $resultado['Empresa']; ?>" class="input__text">
				<br><a>Giro</a><br>
				<input type="text" maxlength="9" name="Giro" placeholder="Ejemplo 'Servicio'" value="<?php if($resultado) echo $resultado['Giro']; ?>" class="input__text">
			</div>
			<div>
				<a>Tamaño</a><br>
				<input type="text" maxlength="7" name="Tamano" placeholder="Ejemplo 'Mediana'" value="<?php if($resultado) echo $resultado['Tamano']; ?>" class="input__text">
				<br><a>Sector</a><br>
				<input type="text" maxlength="10" name="Sector" placeholder="Ejemplo 'Productivo'" value="<?php if($resultado) echo $resultado['Sector']; ?>" class="input__text">
			</div>
			<div>
				<a>Dirigido a</a><br>
				<input type="text" name="Dirigido" placeholder="Ejemplo 'LIC. José Hermida Mijangos'" value="<?php if($resultado) echo $resultado['Dirigido']; ?>" class="input__text">
				<br><a>Cargo</a><br>
				<input type="text" name="Cargo" placeholder="Ejemplo 'Recursos Humanos'" value="<?php if($resultado) echo $resultado['Cargo']; ?>" class="input__text">
			</div>
			<div>
				<a>Direccion</a><br>
				<input type="text" name="Direccion" placeholder="Ejemplo 'Calle obrera Col. 18 de Marzo #3 97750'" value="<?php if($resultado) echo $resultado['Direccion']; ?>" class="input__text" >
				<br><a>Municipio</a><br>
				<input type="text" name="Municipio" placeholder="Ejemplo 'Coatzacoalcos'" class="input__text" value="<?php if($resultado) echo $resultado['Municipio']; ?>" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div>
				<a>Estado</a><br>
				<input type="text" name="Estado" placeholder="Ejemplo 'Veracruz'" value="<?php if($resultado) echo $resultado['Estado']; ?>" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
				<br><a>Local o Foranea</a><br>
				<input type="text" maxlength="7" maxlength="7" name="LocalForane" value="<?php if($resultado) echo $resultado['LocalForane']; ?>" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div>
				<a>Telefono</a><br>
				<input type="Number" name="Telefono" placeholder="Ejemplo '9261124400'" value="<?php if($resultado) echo $resultado['Telefono']; ?>"class="input__text">
				<br><a>Email</a><br>
				<input type="text" name="Email" placeholder="Ejemplo 'OlivaCE1320@hotmail.com'" value="<?php if($resultado) echo $resultado['Email']; ?>" class="input__text">
			</div>
			<div>
				<a>RFC</a><br>
				<input type="text" maxlength="13" name="RFC" placeholder="Ejemplo '445633377753'" value="<?php if($resultado) echo $resultado['RFC']; ?>" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
				<br><a>Seguro de vida</a><br>
				<input type="text" maxlength="2" name="SeguroDeVida" placeholder="Ejemplo 'NO" value="<?php if($resultado) echo $resultado['SeguroDeVida']; ?>" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div>
				<a>Carta de Precentación</a><br>
				<input type="text" maxlength="2" name="CartPrecentacion" placeholder="Ejemplo 'SI'" value="<?php if($resultado) echo $resultado['CartPrecentacion']; ?>" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
				<br><a>Carta de aceptación</a><br>
				<input type="text" maxlength="2" name="CartAceptacion" placeholder="Ejemplo 'NO'" value="<?php if($resultado) echo $resultado['CartAceptacion']; ?>" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div>
				<a>Compromiso DC</a><br>
				<input type="text" maxlength="2" name="Compromiso_DC" placeholder="Ejemplo 'SI'" value="<?php if($resultado) echo $resultado['Compromiso_DC']; ?>" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
				<br><a>Encuesta</a><br>
				<input type="text" maxlength="2" name="Encuesta" placeholder="Ejemplo 'NO" value="<?php if($resultado) echo $resultado['Encuesta']; ?>" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div>
				<a>Liberacion</a><br>
				<input type="text" maxlength="2" name="Liberacion" placeholder="Ejemplo 'NO'" value="<?php if($resultado) echo $resultado['Liberacion']; ?>" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div class="btn__group">
				<a href="TablaGeneral.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
			</center>
		</form>
	</div>
</body>
</html>
