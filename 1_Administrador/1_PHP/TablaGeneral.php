<?php
include_once 'conexion.php';

	$sentencia_select=$con->prepare('SELECT * FROM usuarios ORDER BY id_Alumno_Expediente DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

    if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$con->prepare('
			SELECT *FROM usuarios WHERE PAterno LIKE :campo OR MAterno LIKE :campo OR Matricula LIKE :campo OR Periodo LIKE :campo OR Carrera LIKE :campo;'
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
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="#" />
	<title>Inicio</title>
	<link rel="stylesheet" href="../2_css/estilos.css">
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
	<div class="contenedor">
		<center><big><h1>Tabla General</h1></big></center>
		<div class="barra__buscador" style="text-align:center;">
			<form action="" class="formulario" method="post" font-family: 'Arial',sans-serif>
				<input type="text" name="buscar" placeholder="Buscar por Apellidos" 
				value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">
				<a href="insertarGeneral.php" class="btn btn__nuevo">Nuevo</a>
			</form>
		</div>
		<table border="1" bordercolor="666633" cellpadding="2" cellspacing="2">

<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" cellspacing="1" width="100%">
                        <thead>    
                      <tr >



		<!--	<tr class="tabla"> -->
				<td>Expediente</td>
				<td>Periodo</td>
				<td>Generacion</td>
                <td>Extencion</td>
                <td>Modalidad</td>
                <td>Carrera</td>
                <td>Matricula</td>
                <td>NombreCompleto</td>
                <td>Genero</td>
                <td>Curp</td>
                <td>editar</td>
                 <td>eliminar</td>
				 <td>Estatus</td>
<!--
				<td>Fecha de Nacimiento</td>
				<td>Edad</td>
				<td>Induccion</td>
				<td>Pre-Registro</td>
				<td>Solicitud de estadías</td>
				<td>Consentimiento Seguro</td>
				<td>Empresa</td>
				<td>Giro</td>
				<td>Tamaño</td>
				<td>Sector</td>
				<td>Dirigido a</td>
				<td>Cargo</td>
				<td>Dirección</td>
				<td>Municipio</td>
				<td>Estado</td>
				<td>Local o Foranea</td>
				<td>Telefono</td>
				<td>Email</td>
				<td>RFC</td>
				<td>Seguro de vida</td>
				<td>Carta precentación</td>
				<td>Carta aceptación</td>
				<td>Carta compromiso</td>
				<td>Encuesta</td>
				<td>Liberacion</td> 
-->        
				
			</tr>

                       </thead>

                        <tbody>

                          <tr >
                       
			<?php foreach($resultado as $fila):?>


				
					<td><?php echo $fila['id_Alumno_Expediente']; ?></td>
					<td><?php echo $fila['Periodo']; ?></td>
                    <td><?php echo $fila['Generacion']; ?></td>
                    <td><?php echo $fila['Extencion']; ?></td>
                    <td><?php echo $fila['Modalidad']; ?></td>
                    <td><?php echo $fila['Carrera']; ?></td>
					<td><?php echo $fila['Matricula']; ?></td>
                    <td><?php echo $fila['NomCompleto']; ?></td>
					<td><?php echo $fila['Genero']; ?></td>
                    <td><?php echo $fila['Curp']; ?></td>

                    <td><a href="actualizarGeneral.php?id_Alumno_Expediente=<?php echo $fila['id_Alumno_Expediente']; ?>"  class="btn__update" >Editar</a></td>
		<td><a href="Generaldelete.php?id_Alumno_Expediente=<?php echo $fila['id_Alumno_Expediente']; ?>" class="btn__delete">Eliminar</a></td>
		<td><a>
		<html>
<head>
<script>
var seleccionado=new Array()
function cambia(fila1){
if(seleccionado fila1=true)
	{
	document.getElementById("fila1"+fila1).style.background='#3399FF';
	document.getElementById("fila1"+fila1).style.color='#048033';
	seleccionado fila1=true;
	}

}
</script>
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td bgcolor="#048033" id="fila1"><input type="checkbox" onClick="cambia(1)">documentos en orden</td>
  </tr>
  <tr>
    <td bgcolor="#C4AC10" id="fila2"><input type="checkbox" onClick="cambia(2)">falta un documeto</td>
  </tr>
  <tr>
    <td bgcolor="#EBAC10" id="fila3"><input type="checkbox" onClick="cambia(3)">falta datos</td>
  </tr>
  <tr>
    <td bgcolor="#F50539" id="fila4"><input type="checkbox" onClick="cambia(4)">falta todo</td>
  </tr>
</table>
</body>
</html>
</a></td>


<!--
					<td><?php echo $fila['Festividad']; ?></td>
					<td><?php echo $fila['edad']; ?></td>
					<td><?php echo $fila['Induccion']; ?></td>
					<td><?php echo $fila['PreRegistro']; ?></td>
					<td><?php echo $fila['SoliciEstadia']; ?></td>
					<td><?php echo $fila['ConsentSeguro']; ?></td>
					<td><?php echo $fila['Empresa']; ?></td>
					<td><?php echo $fila['Giro']; ?></td>
					<td><?php echo $fila['Tamano']; ?></td>
					<td><?php echo $fila['Sector']; ?></td>
					<td><?php echo $fila['Dirigido']; ?></td>
					<td><?php echo $fila['Cargo']; ?></td>
					<td><?php echo $fila['Direccion']; ?></td>
					<td><?php echo $fila['Municipio']; ?></td>
					<td><?php echo $fila['Estado']; ?></td>
					<td><?php echo $fila['LocalForane']; ?></td>
					<td><?php echo $fila['Telefono']; ?></td>
					<td><?php echo $fila['Email']; ?></td>
					<td><?php echo $fila['RFC']; ?></td>
					<td><?php echo $fila['SeguroDeVida']; ?></td>
					<td><?php echo $fila['CartPrecentacion']; ?></td>
					<td><?php echo $fila['CartAceptacion']; ?></td>
					<td><?php echo $fila['Compromiso_DC']; ?></td>
					<td><?php echo $fila['Encuesta']; ?></td>
					<td><?php echo $fila['Liberacion']; ?></td>

 

-->                       


  		
				</tr>
			<?php endforeach ?>
		</table>



                        

		

			
			
		
</tbody>
	</div>
<!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <!-- para usar botones en datatables JS -->  
    <script src="datatables/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>  
    <script src="datatables/JSZip-2.5.0/jszip.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/pdfmake.min.js"></script>    
    <script src="datatables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="datatables/Buttons-1.5.6/js/buttons.html5.min.js"></script>
     
    <!-- código JS propìo-->    
    <script type="text/javascript" src="main.js"></script>
</body>
</html>	