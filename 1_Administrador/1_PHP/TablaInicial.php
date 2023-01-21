<?php
include_once 'conexion.php';

	$sentencia_select=$con->prepare('SELECT *FROM usuarios ORDER BY id_Alumno_Expediente DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

        if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('
			SELECT *FROM usuarios WHERE PAterno LIKE :campo OR MAterno LIKE :campo;'
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
	<link rel="stylesheet" href="../2_css/estilos.css">
</head>
<body>
	<div class="contenedor">
		<center><big><h1>Tabla Inicial</h1></big></center>
		<div class="barra__buscador" style="text-align:center;">
			<form action="" class="formulario" method="post" font-family: 'Arial',sans-serif>
			    <a href="../0_Menu/Cargar-BD.html" class="btn__delete">Cargar Datos</a>
				<input type="text" name="buscar" placeholder="Buscar por Apellidos" 
				value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">
				<a href="insertar.php" class="btn btn__nuevo">Nuevo</a>
				<input type="submit" class="btn btn__nuevo" href="Btn-PDF-Inicial.php" value="Descargar PDF">
			</form>
		</div>
		<table border="1" bordercolor="666633" cellpadding="2" cellspacing="2">
			<tr class="tabla" >  
				<td>Periodo</td>
				<td>ApellidoPaterno</td>
				<td>ApellidoMaterno</td>
				<td>Nombre</td>
				<td>Generacion</td>
                <td>Extencion</td>
                <td>Modalidad</td>
                <td>Carrera</td>
                <td>Matricula</td>
                <td>NombreCompleto</td>
                <td>Genero</td>
                <td>Curp</td>   
				<td colspan="2">Acción</td>
			</tr>
                       
			<?php foreach($resultado as $fila):?>
				<tr >
					<td><?php echo $fila['Periodo']; ?></td>
					<td><?php echo $fila['PAterno']; ?></td>
					<td><?php echo $fila['MAterno']; ?></td>
					<td><?php echo $fila['Nombre']; ?></td>
                    <td><?php echo $fila['Generacion']; ?></td>
                    <td><?php echo $fila['Extencion']; ?></td>
                    <td><?php echo $fila['Modalidad']; ?></td>
                    <td><?php echo $fila['Carrera']; ?></td>
					<td><?php echo $fila['Matricula']; ?></td>
                    <td><?php echo $fila['NomCompleto']; ?></td>
					<td><?php echo $fila['Genero']; ?></td>
                    <td><?php echo $fila['Curp']; ?></td>
		<td><a href="actualizar.php?id_Alumno_Expediente=<?php echo $fila['id_Alumno_Expediente']; ?>"  class="btn__update" >Editar</a></td>
		<td><a href="delete.php?id_Alumno_Expediente=<?php echo $fila['id_Alumno_Expediente']; ?>" class="btn__delete">Eliminar</a></td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
</body>
</html>