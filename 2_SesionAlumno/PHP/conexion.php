<?php
/*	$database="InformacionAlumno";
	$user='root';
	$password='';

try {
	
	$con=new PDO('mysql:host=localhost;dbname='.$database,$user,$password);

} catch (PDOException $e) {
	echo "Error".$e->getMessage();
}
*/
$usuario = "root";
$contrasena = "";  
$servidor = "localhost";
$basededatos = "InformacionAlumno";
//coneccion con el servidor
$conexion = mysqli_connect( $servidor, $usuario, $contrasena, $basededatos );// agregé Base dedatos innecesariamente

//evaluamos la conexion
if(!$conexion){
	echo"No se estableció la conexión.";
}else{
	$base=mysqli_select_db($conexion,$basededatos);
	if(!$base){
		echo"No se encontro la Base de Datos solicitada.";
	}
}
?>