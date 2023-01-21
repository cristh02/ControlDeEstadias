<?php
//Archivo de conexión a la base de datos
$usuario = "root";
$contrasena = "";  
$servidor = "localhost";
$basededatos = "InformacionAlumno";

$conexion = mysqli_connect( $servidor, $usuario, $contrasena, $basededatos );// agregé Base dedatos innecesariamente

if(!$conexion){
	echo"No se estableció la conexión.";
}else{
	$base=mysqli_select_db($conexion,$basededatos);
	if(!$base){
		echo"No se encontro la Base de Datos solicitada.";
	}
}
$consultaBusqueda = $_POST['valorBusqueda'];
$mensaje = "";
if (isset($consultaBusqueda)) {

	//Selecciona El nombre y apellods de la tabla si la matricula se encuentra
	$consulta = mysqli_query($conexion, "SELECT Nombre, PAterno, MAterno, Generacion FROM Usuarios
	WHERE Matricula LIKE '%$consultaBusqueda%'
	");

    //Obtiene la cantidad de filas que hay en la consulta
    $filas = mysqli_num_rows($consulta);

    //Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
    if ($filas === 0) {
        $mensaje = "<p>No hay registro de alumno con esa matricula</p>";
    } else {
        //Si existe alguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
        echo 'Resultados para <strong>'.$consultaBusqueda.'</strong>';

        //La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los datos y los mostramos en un bucle
        while($resultados = mysqli_fetch_array($consulta)) {
            $nombre = $resultados['Nombre'];
            $apellido = $resultados['PAterno'];
            $edad = $resultados['MAterno'];
            $generacion = $resultados['Generacion'];

            //Output
            $mensaje .= '
            <p>
            <label>Nombre: ' . $nombre . '</label><br>
            <label>Primer Apellido:' . $apellido . '</label><br>
            <label>Segundo Apellido:' . $edad . '</label><br>
            </p>';

        };//Fin while $resultados

    }; //Fin else $filas
};
echo $mensaje;
?>