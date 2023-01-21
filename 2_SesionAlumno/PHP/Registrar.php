<?php

require_once 'conexion.php';
//concateno variables del nombre para hacer el nombre completo
$ApePaterno =$_POST['Apaterno'];//info alumo
$ApeMaterno =$_POST['Amaterno'];
$Nombre =$_POST['Nombre'];
$NombreC=$ApePaterno.' '.$ApeMaterno.' '.$Nombre;

//recuperar variables
$contra1=$_POST['Contra'];
$Contra2 =$_POST['Contras'];
if ($contra1!==$Contra2) {
	echo 'Las contraseñas no coinciden';
}else{
	$correo =$_POST['email'];//inicio sesion
	$contrasena = $contra1;

$ApePaterno =$_POST['Apaterno'];//segunda parte de Infor de Alumno
$ApeMaterno =$_POST['Amaterno'];
$Nombre =$_POST['Nombre'];
$Generacion =$_POST['Generación'];
$Extencion =$_POST['Extención'];
$Modalidad =$_POST['Modalidad'];
$Carrera =$_POST['Carrera'];
$Matricula =$_POST['Matricula'];
$NombreCompleto =$NombreC;
$Genero =$_POST['Genero'];
$CURP =$_POST['CURP'];
$FechNacimieto =$_POST['FechNacimiento'];
//$edad = $_POST['edadCalculada'];

//consulta para insertar
$sql2="INSERT INTO InicioSesion (correo, contrasena) 
VALUES ('$correo','$contrasena');";
/*
$sql="INSERT INTO Usuarios (PAterno, MAterno, Nombre, 
Generacion, Extencion, Modalidad, Carrera, Matricula, NomCompleto, 
Genero, Curp, Festividad) 
VALUES ('$ApePaterno','$ApeMaterno','$Nombre','$Generacion',
'$Extencion','$Modalidad','$Carrera', $Matricula,
'$NombreCompleto','$Genero','$CURP','$FechNacimieto');";*/
$trigger= "DELIMITER$$
CREATE TRIGGER UsuariosRegistrados
AFTER INSERT ON InicioSesion VALUES (id_Usuiarios)
FOR EACH ROW
BEGIN
SELECT id_Alumno_Expediente FROM Usuarios WHERE Matricula='$Matricula'
END;$$";
/*$sql->mysqli_query($conexion,$trigger);
se ejecuta la consulta*/
$ejecutar1=mysqli_query($conexion,$sql2);/*
$ejecutar=mysqli_query($conexion,$sql);
*/
if(!$ejecutar1){
	echo"Tu usuario y contraseña no se pudieron guardar";
   /* }else if(!$sql){
		echo"Trigger no ejecutado";
*/
    }else{	
		echo"<h1>Datos Guardados con exito</h1>"; /* quiero poner un alert de confirmacion que al aceptar me mande a la pagina de inicio
		header("Location: Login.html");*/
		echo'<script type="text/javascript">
    alert("Datos gurdados con Exito");
    window.location.href="Login.html";
    </script>';
	}
}
?>