<?php
include_once 'conexion.php';
$matricula =$_POST['Matricula'];
	$sentencia_select=$con->prepare('SELECT * FROM usuarios ORDER BY id_Alumno_Expediente DESC');
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
    <tr >
					<td><?php echo $fila['PAterno']; ?></td>
					<td><?php echo $fila['MAterno']; ?></td>
					<td><?php echo $fila['Nombre']; ?></td>
					<td><?php echo $fila['Matricula']; ?></td>

    </tr>
?>
<input type="text" name="buscar" placeholder="Buscar por Apellidos" value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">