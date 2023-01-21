 <?php
$usuario = "root";
$contrasena = "1234";  
$servidor = "localhost";
$basededatos = "InformacionAlumno";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);

	if(mysqli_connect_errno()){
		echo 'Error de comunicacion con Base de Datos: ', mysqli_connect_error();
		exit();
	}
	
	echo '<table border=1px><tr> <td>MUNICIPIO DE VERACRUZ</td> <td>CAMBIO</td> <td>GIRO</td>  <td>TAMAÑO</td> <td>SECTOR</td> 
	<td>ESTADOS DE MÉXICO</td> <td>EMPRESA</td> <td>SELECCION</td>
	</tr>';	
	
	mysqli_select_db($conexion, $basededatos) or die("No se encontró la Base de Datos.");
	$Consulta = "SELECT MunicipDeVeracruz, Cambio, Giro, Tamanio, Sector, EstadosEnMexico, Empresa, Seleccion FROM DatoLugar;";
	$resultado = mysqli_query($conexion,$Consulta);

	if ($resultado = mysqli_query($conexion, $Consulta)) {

		while ($row = mysqli_fetch_assoc($resultado)) {
			echo '<tr>';
			echo '<td>';
			    printf ("%s\n", $row["MunicipDeVeracruz"]);
			echo '</td>';
			echo '<td>';
			    printf ("%s\n", $row["Cambio"]);
			echo '</td>';
			echo '<td>';
			    printf ("%s\n", $row["Giro"]);
			echo '</td>';
			echo '<td>';
			    printf ("%s\n" , $row["Tamanio"]);
			echo '</td>';
			echo '<td>';
			    printf ("%s\n", $row["Sector"]);
			echo '</td>';
			echo '<td>';
			    printf ("%s\n", $row["EstadosEnMexico"]);
			echo '</td>';
			echo '<td>';
			    printf ("%s\n", $row["Empresa"]);
			echo '</td>';
			echo '<td>';
			    printf ("%s\n", $row["Seleccion"]) ;
			echo '</td>';
			echo '</tr>';
		}
		/* liberar el conjunto de resultados */
		mysqli_free_result($resultado);
	}
	echo '</table>';
	mysqli_close($conexion);
?>