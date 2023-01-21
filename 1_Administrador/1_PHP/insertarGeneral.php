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
		$CartPresentacion=$_POST['CartPresentacion'];
		$CartAceptacion=$_POST['CartAceptacion'];
		$Compromiso_DC=$_POST['Compromiso_DC'];
		$Encuesta=$_POST['Encuesta'];
		$Liberacion=$_POST['Liberacion'];
               
		if(!empty($Periodo) && !empty($PAterno) && !empty($MAterno) && !empty($Nombre) && !empty($Generacion) && !empty($Extencion) && !empty($Modalidad) && !empty($Carrera) && !empty($Matricula) && !empty($NomCompleto) && !empty($Genero) && !empty($Curp) ){

			//if(!filter_var($correo,FILTER_VALIDATE_EMAIL)){
			//echo "<script> alert('Correo no valido');</script>";
			//}else{

$consulta_insert=$con->prepare('INSERT INTO usuarios(Periodo,PAterno,MAterno,Nombre,Generacion,Extencion,Modalidad,Carrera,Matricula,NomCompleto,Genero,Curp,Festividad,edad,Induccion,
PreRegistro,SoliciEstadia,ConsentSeguro,Empresa,Giro,Tamano,Sector,Dirigido,Cargo,Direccion,Municipio,Estado,LocalForane,Telefono,Email,RFC,SeguroDeVida,CartPrecentacion,
CartAceptacion,Compromiso_DC,Encuesta,Liberacion) 
VALUES (:Periodo,:PAterno,:MAterno,:Nombre,:Generacion,:Extencion,:Modalidad,:Carrera,:Matricula,:NomCompleto,:Genero,:Curp,:Festividad,:edad,:Induccion,:PreRegistro,
:SoliciEstadia,:ConsentSeguro,:Empresa,:Giro,:Tamano,:Sector,:Dirigido,:Cargo,:Direccion,:Municipio,:Estado,:LocalForane,:Telefono,:Email,:RFC,
:SeguroDeVida,:CartPrecentacion,:CartAceptacion,:Compromiso_DC,:Encuesta,:Liberacion)');

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
					':Liberacion'=>$Liberacion
				));

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
	<title>Nuevo</title>
	<link rel="stylesheet" href="../2_CSS/estilos.css"
</head>
<body>
	<div class="contenedor">
		<h2>UNIVERSIDAD TECNOLÓGICA DEL SURESTE DE VERACRUZ</h2>
		<form action="" method="post">
			<center><div class="form-group">
				<a>Periodo</a><br>
				<input type="Number" maxlength="2" name="Periodo" placeholder="Ejemplo '10'" class="input__text">
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
                <input type="text" maxlength="9"  name="Generacion" placeholder="Ejemplo '2018-2020'" class="input__text">
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
                <input type="Number" name="Matricula" placeholder="Ejemplo '17180500'" class="input__text">
			</div>
			<div class="btn__group">
				<!--<a>Nombre Completo</a><br>
                 <input type="text" name="NomCompleto" placeholder="NomCompleto" class="input__text">-Este no es necesario pues el el array concatenamos el nombre-->
				 <br><a>Genero</a><br>
                <input type="text" maxlength="6" name="Genero" placeholder="Ejemplo 'MUJER/HOMBRE'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div class="btn__group">
				<a>Curp</a><br>
            <input type="text" maxlength="18" name="Curp" placeholder="Ejemplo 'HGCL000212HVZLNRA5'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">           
			</div>
			<div>
				<a>Fecha de nacimiento</a><br>
				<input type="date" maxlength="8" name="Festividad" placeholder="Ejemplo '2000-04-30'" class="input__text">
				<br><a>Edad</a><br>
				<input type="Number" max="99" name="edad" placeholder="Ejemplo '21'" class="input__text">
			</div>
			<div>
				<a>Fecha de inducción</a><br>
				<input type="date" name="Induccion" class="input__text">
				<br><a>Pre-registro</a><br>
				<input type="text" maxlength="2" name="PreRegistro" placeholder="Ejemplo 'SI'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div>
				<a>Solicitud de estadía</a><br>
				<input type="text" maxlength="2" name="SoliciEstadia" placeholder="Ejemplo 'SI'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
				<br><a>Consentimiento de Seguro</a><br>
				<input type="text" maxlength="2" name="ConsentSeguro" placeholder="Ejemplo 'SI'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div>
				<a>Empresa</a><br>
				<input type="text" name="Empresa" placeholder="Ejemplo 'Braskem Idesa'" class="input__text">
				<br><a>Giro</a><br>
				<input type="text" maxlength="9" name="Giro" placeholder="Ejemplo 'Servicio'" class="input__text">
			</div>
			<div>
				<a>Tamaño</a><br>
				<input type="text" maxlength="7" name="Tamano" placeholder="Ejemplo 'Mediana'" class="input__text">
				<br><a>Sector</a><br>
				<input type="text" maxlength="7" name="Sector" placeholder="Ejemplo 'Productivo'" class="input__text">
			</div>
			<div>
				<a>Dirigido a</a><br>
				<input type="text" name="Dirigido" placeholder="Ejemplo 'LIC. José Hermida Mijangos'" class="input__text">
				<br><a>Cargo</a><br>
				<input type="text" name="Cargo" placeholder="Ejemplo 'Recursos Humanos'" class="input__text">
			</div>
			<div>
				<a>Direccion</a><br>
				<input type="text" name="Direccion" placeholder="Ejemplo 'Calle obrera Col. 18 de Marzo #3 97750'" class="input__text" >
				<br><a>Municipio</a><br>
				<input type="text" name="Municipio" placeholder="Ejemplo 'Coatzacoalcos'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div>
				<a>Estado</a><br>
				<input type="text" name="Estado" placeholder="Ejemplo 'Veracruz'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
				<br><a>Local o Foranea</a><br>
				<input type="text" maxlength="7" name="LocalForane" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div>
				<a>Telefono</a><br>
				<input type="Number" name="Telefono" placeholder="Ejemplo '9261124400'" class="input__text">
				<br><a>Email</a><br>
				<input type="text" name="Email" placeholder="Ejemplo 'OlivaCE1320@hotmail.com'" class="input__text">
			</div>
			<div>
				<a>RFC</a><br>
				<input type="text" maxlength="13" name="RFC" placeholder="Ejemplo '445633377753'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
				<br><a>Seguro de vida</a><br>
				<input type="text" maxlength="2" name="SeguroDeVida" placeholder="Ejemplo 'NO" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div>
				<a>Carta de Precentación</a><br>
				<input type="text" maxlength="2" name="CartPrecentacion" placeholder="Ejemplo 'SI'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
				<br><a>Carta de aceptación</a><br>
				<input type="text" maxlength="2" name="CartAceptacion" placeholder="Ejemplo 'NO'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div>
				<a>Compromiso DC</a><br>
				<input type="text" maxlength="2" name="Compromiso_DC" placeholder="Ejemplo 'SI'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
				<br><a>Encuesta</a><br>
				<input type="text" maxlength="2" name="Encuesta" placeholder="Ejemplo 'NO" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
			</div>
			<div>
				<a>Liberacion</a><br>
				<input type="text" maxlength="2" name="Liberacion" placeholder="Ejemplo 'NO'" class="input__text" onkeyup="this.value=this.value.toUpperCase();">
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
