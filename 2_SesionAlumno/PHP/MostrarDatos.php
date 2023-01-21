<?PHP
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
$matricula =$_POST['Matricula'];
$sql="SELECT * FROM Usuarios WHERE Matricula='$matricula';";
$resultado = mysqli_query($conexion,$sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
if(!$sql){
    echo '<script language="javascript">alert("Tu matricula no coincide con nuestros registros");</script>';
    echo "No se encontró el alumno";
}else{

}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>