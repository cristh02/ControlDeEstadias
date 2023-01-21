<?php
$usuario = "root";
$contrasena = "";  
$servidor = "localhost";
$basededatos = "InformacionAlumno";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);

	if(mysqli_connect_errno()){
		echo 'Error de comunicacion con Base de Datos: ', mysqli_connect_error();
		exit();
	}
	
	echo '<table border=1px><tr> <td>id Sesion</td> <td>Correo</td> <td>Contraseña</td>  <td>Usuario</td>
         
	</tr>';	

	mysqli_select_db($conexion, $basededatos) or die("No se encontró la Base de Datos.");
	$Consulta = "SELECT idSesion, correo, contrasena, id_Usuarios FROM InicioSesion;";
	$resultado = mysqli_query($conexion,$Consulta);

	$filas = array();

	if ($resultado = mysqli_query($conexion, $Consulta)) {

		
		while ($row = mysqli_fetch_assoc($resultado)) {
			echo '<tr>';
			echo '<td>';
			    printf ("%s\n", $row["idSesion"]);
                       class="btn__update" >Editar</a></td>
			echo '</td>';
			echo '<td>';
			    printf ("%s\n", $row["correo"]);
			echo '</td>';
			echo '<td>';
			    printf ("%s\n", $row["contrasena"]);
			echo '</td>';
			echo '<td>';
			    printf ("%s\n" , $row["id_Usuarios"]);
			echo '</td>';
			echo '</tr>';
		}
		
		mysqli_free_result($resultado);
	}
	echo '</table>';
	mysqli_close($conexion);
	
	return $filas;
?>
