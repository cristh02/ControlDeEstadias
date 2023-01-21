<?php
session_start();
if (isset($_SESSION['usuario'])) 
{
	include("../config/header.php");
?>
    <div class="container">
    	<div class="row">
			  <div class="col-lg-12">
				<div class="page-header">
				  <h1 id="tables">Bienvenido: <?php echo $_SESSION['usuario'];?></h1>
				</div>
			  </div>  
			  <div class="col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Gestión de Líder</h3>
					</div>
					<div class="panel-body">
						<div class="item">
							<a class="visibility-on" href="nuevotante.php">
								<span class="icon icon-1"></span>
								<span class="label2">Crear Votante</span>
							</a>
						</div>						
						<div class="item">
							<a class="visibility-on" href="nuesublider.php">
								<span class="icon icon-1"></span>
								<span class="label2">Crear Sub-Líder</span>
							</a>
						</div>
						<div class="item">
							<a class="visibility-on" href="../reportes/reportvotlider.php">
								<span class="icon icon-19"></span>
								<span class="label2">Reporte por Votantes</span>
							</a>
						</div>
						<div class="item">
							<a class="visibility-on" href="../reportes/reportvotsublider.php">
								<span class="icon icon-19"></span>
								<span class="label2">Reporte por Sublíderes</span>
							</a>
						</div>
					</div>
				</div>
			   </div> 
			 </div>
<?php
include("../config/footer.php");
}
else
{
	header('Location: ../index.php');
}
?>
