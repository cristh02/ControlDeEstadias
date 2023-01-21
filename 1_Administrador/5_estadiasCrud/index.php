<?php
	include_once 'conexion.php';

	$sentencia_select=$con->prepare('SELECT *FROM informacion ORDER BY id_INFORMACION DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

	// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('
			SELECT *FROM informacion WHERE EXPEDIENTE LIKE :campo OR GENERACION LIKE :campo;'
		);

		$select_buscar->execute(array(
			':campo' =>"%".$buscar_text."%"
		));

		$resultado=$select_buscar->fetchAll();

	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	
</head>
<body>
	<div class="contenedor">
		<h2>UNIVERSIDAD TECNOLÓGICA DEL SURESTE DE VERACRUZ</h2>
		<div class="barra__buscador">
			<form action="" class="formulario" method="post" font-family: 'Arial',sans-serif>
				<input type="text" name="buscar" placeholder="Buscar Expediente o Generación" 
				value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">
				<a href="insert.php" class="btn btn__nuevo">Nuevo</a>
			</form>
		</div>
		<table>
			<tr class="tabla" >
                       
				<td>Periodo</td>
				<td>Expediente</td>
				<td>Paterno</td>
				<td>Materno</td>
				<td>Nombre</td>
				<td>Generacion</td>
                                <td>Extension</td>
                                <td>Modalidad</td>
                                <td>Carrera</td>
                                
                             
				<td colspan="2">Acción</td>
			</tr>
                       
			<?php foreach($resultado as $fila):?>
				<tr >
					<td><?php echo $fila['PERIODO']; ?></td>
					<td><?php echo $fila['EXPEDIENTE']; ?></td>
					<td><?php echo $fila['PATERNO']; ?></td>
					<td><?php echo $fila['MATERNO']; ?></td>
                                        <td><?php echo $fila['NOMBRE']; ?></td>
                                        <td><?php echo $fila['GENERACION']; ?></td>
                                        <td><?php echo $fila['EXTENSION']; ?></td>
                                        <td><?php echo $fila['MODALIDAD']; ?></td>
					<td><?php echo $fila['CARRERA']; ?></td>
					
					<td><a href="update.php?id_INFORMACION=<?php echo $fila['id_INFORMACION']; ?>"  class="btn__update" >Editar</a></td>
					<td><a href="delete.php?id_INFORMACION=<?php echo $fila['id_INFORMACION']; ?>" class="btn__delete">Eliminar</a></td>
				</tr>
			<?php endforeach ?>

		</table>
	</div>
</body>
</html>