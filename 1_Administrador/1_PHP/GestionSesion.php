<?php
include_once 'conexion.php';

	$sentencia_select=$con->prepare('SELECT *FROM  iniciosesion ORDER BY idSesion DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

                if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('
			SELECT *FROM iniciosesion WHERE correo LIKE :campo OR correo OR bloqueo LIKE :campo;'
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
	<link rel="stylesheet" href="../2_css/estilos.css"
</head>
<body>

	<div class="contenedor">
		<center><h2>Gestión de Usuarios</h2></center>
		<div class="barra__buscador" style="text-align:center;">
			<form action="" class="formulario" method="post" font-family: 'Arial',sans-serif>
				<input type="text" name="buscar" placeholder="Buscar por Correo" 
				value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">
				<a href="Nuevo.php" class="btn btn__nuevo">Nuevo</a>
			</form>
		</div>
		<table style="margin: 0 auto;" border="1" bordercolor="666633" cellpadding="2" cellspacing="2">
			<tr class="tabla" style="text-align:center;">
                       
				<td>Sesion</td>
				<td>Correo</td>
				<td>Contraseña</td>
				<td>Bloqueo</td>

				
				
                                
                             
				<td colspan="3">Acción</td>
			</tr>
                       
			<?php foreach($resultado as $fila):?>
				<tr>
					<td><?php echo $fila['idSesion']; ?></td>
					<td><?php echo $fila['correo']; ?></td>
					<td><?php echo $fila['contrasena']; ?></td>
                   <td><?php echo $fila['bloqueo']; ?></td>
				

	
					
		<td><a href="act.php?idSesion=<?php echo $fila['idSesion']; ?>"  class="btn__update" >Editar</a></td>
		<td><a href="Eliminar.php?idSesion=<?php echo $fila['idSesion']; ?>" class="btn__delete">Eliminar</a></td>
              <td><a href ="bloquear.php?idSesion=<?php echo $fila['idSesion']; ?>" class = "btn__update" > Bloquear </a> </td>
 <td><a href ="desbloquear.php?idSesion=<?php echo $fila['idSesion']; ?>" class = "btn__update" > DesBloquear </a> </td>

           



				</tr>
			<?php endforeach ?>

		</table>
	</div>
</body>

</html>	