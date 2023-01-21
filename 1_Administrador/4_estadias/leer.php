 <?php
	
	require 'Classes/PHPExcel/IOFactory.php';
	require 'conexion.php';
	
	$nombreArchivo = 'ESTADIA.xlsx';
	
	$objPHPExcel = PHPEXCEL_IOFactory::load($nombreArchivo);
	
	$objPHPExcel->setActiveSheetIndex(0);
	
	$numRows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
	
	echo '<table border=1px><tr> <td>PERIODO</td> <td>EXPEDIENTE</td> <td>PATERNO</td> <td>MATERNO</td>  <td>NOMBRE</td> <td>GENERACION</td> 
	<td>EXTENSION</td> <td>MODALIDAD</td> <td>CARRERA</td> <td>MATRICULA</td> <td>NOMBRE COMPLETO</td> <td>GENERO</td> <td>CURP</td> 
	<td>FECHA-NACIMIENTO</td> <td>EDAD</td> <td>INDUCCION</td> <td>PRE-REGISTRO</td> <td>SOLICITUD DE ESTADIA</td> <td>CONSETIMIENTO SEGURO</td>
	<td>EMPRESA</td> <td>GIRO</td> <td>TAMAÑO</td> <td>SECTOR</td> <td>DIRIGIDO A</td> <td>CARGO</td> <td>DIRECCION</td> <td>MUNICIPIO</td> <td>ESTADO</td>
	<td>LOCAL / FORANEA</td> <td>TELEFONO</td> <td>EMAIL</td> <td>RFC</td> <td>SEGURO DE VIDA</td> <td>CARTA PRESENTACION</td> <td>CARTA ACEPTACION</td> 
	<td>COMPROMISO-DC</td> <td>ENCUESTA</td> <td>LIBERACION</td></tr>';
	
	for($i = 2; $i < $numRows; $i++){
		
		$PERIODO = $objPHPExcel->getActiveSheet()->getCell('A'.$i)->getCalculatedValue();
		$EXPEDIENTE = $objPHPExcel->getActiveSheet()->getCell('B'.$i)->getCalculatedValue();
		$PATERNO = $objPHPExcel->getActiveSheet()->getCell('C'.$i)->getCalculatedValue();
		$MATERNO = $objPHPExcel->getActiveSheet()->getCell('D'.$i)->getCalculatedValue();
		$NOMBRE = $objPHPExcel->getActiveSheet()->getCell('E'.$i)->getCalculatedValue();
		$GENERACION = $objPHPExcel->getActiveSheet()->getCell('F'.$i)->getCalculatedValue();
		$EXTENCION = $objPHPExcel->getActiveSheet()->getCell('G'.$i)->getCalculatedValue();
		$MODALIDAD = $objPHPExcel->getActiveSheet()->getCell('H'.$i)->getCalculatedValue();
		$CARRERA = $objPHPExcel->getActiveSheet()->getCell('I'.$i)->getCalculatedValue();
		$MATRICULA = $objPHPExcel->getActiveSheet()->getCell('J'.$i)->getCalculatedValue();
		$NomCompleto = $PATERNO.' '.$MATERNO.' '.$NOMBRE;
		$GENERO = $objPHPExcel->getActiveSheet()->getCell('K'.$i)->getCalculatedValue();
		$CURP = $objPHPExcel->getActiveSheet()->getCell('L'.$i)->getCalculatedValue();			
		$FECHA_NACIMIENTO= $objPHPExcel->getActiveSheet()->getCell('M'.$i)->getCalculatedValue();	
		$EDAD = $objPHPExcel->getActiveSheet()->getCell('m'.$i)->getCalculatedValue();	
		$INDUCCION = $objPHPExcel->getActiveSheet()->getCell('N'.$i)->getCalculatedValue();
		$PREREGISTRO = $objPHPExcel->getActiveSheet()->getCell('O'.$i)->getCalculatedValue();	
		$SOLICITUDESTADIA = $objPHPExcel->getActiveSheet()->getCell('P'.$i)->getCalculatedValue();	
		$CONSENTIMIENTO = $objPHPExcel->getActiveSheet()->getCell('Q'.$i)->getCalculatedValue();
		$EMPRESA = $objPHPExcel->getActiveSheet()->getCell('R'.$i)->getCalculatedValue();
		$GIRO = $objPHPExcel->getActiveSheet()->getCell('S'.$i)->getCalculatedValue();	
		$TAMANO = $objPHPExcel->getActiveSheet()->getCell('T'.$i)->getCalculatedValue();	
		$SECTOR = $objPHPExcel->getActiveSheet()->getCell('U'.$i)->getCalculatedValue();	
		$DIRIGIDO = $objPHPExcel->getActiveSheet()->getCell('V'.$i)->getCalculatedValue();
		$CARGO = $objPHPExcel->getActiveSheet()->getCell('W'.$i)->getCalculatedValue();
		$DIRECCION = $objPHPExcel->getActiveSheet()->getCell('X'.$i)->getCalculatedValue();
		$MUNICIPIO = $objPHPExcel->getActiveSheet()->getCell('Y'.$i)->getCalculatedValue();
		$ESTADO = $objPHPExcel->getActiveSheet()->getCell('Z'.$i)->getCalculatedValue();
		$LOCALFORANEA = $objPHPExcel->getActiveSheet()->getCell('AA'.$i)->getCalculatedValue();
		$TELEFONO = $objPHPExcel->getActiveSheet()->getCell('AB'.$i)->getCalculatedValue();
		$EMAIL = $objPHPExcel->getActiveSheet()->getCell('AC'.$i)->getCalculatedValue();
		$RFC = $objPHPExcel->getActiveSheet()->getCell('AD'.$i)->getCalculatedValue();
		$SEGDEVIDA = $objPHPExcel->getActiveSheet()->getCell('AE'.$i)->getCalculatedValue();
		$CARTPRESENTACION = $objPHPExcel->getActiveSheet()->getCell('AF'.$i)->getCalculatedValue();
		$CARTACEPTACION = $objPHPExcel->getActiveSheet()->getCell('AG'.$i)->getCalculatedValue();
		$COMPROMISO = $objPHPExcel->getActiveSheet()->getCell('AH'.$i)->getCalculatedValue();
		$ENCUESTA = $objPHPExcel->getActiveSheet()->getCell('AI'.$i)->getCalculatedValue();
		$LIBERACION = $objPHPExcel->getActiveSheet()->getCell('AJ'.$i)->getCalculatedValue();


		echo '<tr>';
		echo '<td>'.$PERIODO.'</td>';
		echo '<td>'.$EXPEDIENTE.'</td>';
		echo '<td>'.$PATERNO.'</td>';
		echo '<td>'.$MATERNO.'</td>';
		echo '<td>'.$NOMBRE.'</td>'; 
		echo '<td>'.$GENERACION.'</td>'; 
		echo '<td>'.$EXTENCION.'</td>';
		echo '<td>'.$MODALIDAD.'</td>';
		echo '<td>'.$CARRERA.'</td>';
		echo '<td>'.$MATRICULA.'</td>';
		echo '<td>'.$NomCompleto.'</td>';
		echo '<td>'.$GENERO.'</td>';
		echo '<td>'.$CURP.'</td>';
		echo '<td>'.$FECHA_NACIMIENTO.'</td>';
		echo '<td>'.$EDAD.'</td>';
		echo '<td>'.$INDUCCION.'</td>';
		echo '<td>'.$PREREGISTRO.'</td>';
		echo '<td>'.$SOLICITUDESTADIA.'</td>';
		echo '<td>'.$CONSENTIMIENTO.'</td>';
		echo '<td>'.$EMPRESA.'</td>';
		echo '<td>'.$GIRO.'</td>';
		echo '<td>'.$TAMANO.'</td>';
		echo '<td>'.$SECTOR.'</td>';
		echo '<td>'.$DIRIGIDO.'</td>';
		echo '<td>'.$CARGO.'</td>';
		echo '<td>'.$DIRECCION.'</td>';
		echo '<td>'.$MUNICIPIO.'</td>';
		echo '<td>'.$ESTADO.'</td>';
		echo '<td>'.$LOCALFORANEA.'</td>';
		echo '<td>'.$TELEFONO.'</td>';
		echo '<td>'.$EMAIL.'</td>';
		echo '<td>'.$RFC.'</td>';
		echo '<td>'.$SEGDEVIDA.'</td>';
		echo '<td>'.$CARTPRESENTACION.'</td>';
		echo '<td>'.$CARTACEPTACION.'</td>';
		echo '<td>'.$COMPROMISO.'</td>';
		echo '<td>'.$ENCUESTA.'</td>';
		echo '<td>'.$LIBERACION.'</td>';
		echo '</tr>';
		
		$sql = "INSERT INTO Usuarios (Periodo, Expediente, PAterno, MAterno, Nombre, Generacion, Extencion, Modalidad, Carrera, Matricula, NomCompleto, Genero, Curp, Festividad, edad, Induccion, PreRegistro, SoliciEstadia, ConsentSeguro, Empresa,
		Giro, Tamano, Sector, Dirigido, Cargo, Direccion, Municipio, Estado, LocalForane, Telefono, Email, RFC, SeguroDeVida, CartPrecentacion, CartAceptacion, Compromiso_DC, Encuesta, Liberacion) 
		VALUES ($PERIODO, $EXPEDIENTE,'$PATERNO','$MATERNO','$NOMBRE','$GENERACION','$EXTENCION','$MODALIDAD','$CARRERA',$MATRICULA,'$NomCompleto','$GENERO','$CURP','$FECHA_NACIMIENTO',$EDAD,'$INDUCCION','$PREREGISTRO','$SOLICITUDESTADIA','$CONSENTIMIENTO','$EMPRESA',
		'$GIRO','$TAMANO','$SECTOR','$DIRIGIDO','$CARGO','$DIRECCION','$MUNICIPIO','$ESTADO','$LOCALFORANEA','$TELEFONO','$EMAIL','$RFC','$SEGDEVIDA','$CARTPRESENTACION','$CARTACEPTACION','$COMPROMISO','$ENCUESTA','$LIBERACION')";
		$result = $mysqli->query($sql);
		
	}
	echo '</table>';
?>