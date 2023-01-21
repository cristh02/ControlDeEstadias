<!DOCTYPE html>
<HTML Lang="es">
    <HEAD>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>Área de Vinculación y Estadías</title>
        <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="CSS/style.css"><!--exclusivo del diseño y menu-->
        <!-- Responsive-->
        <link rel="stylesheet" href="CSS/responsive.css">
        <link rel="stylesheet" href="CSS/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <script src="JS/jquery-3.3.1.min.js"></script> <!--Uso de ajax para mostra los datos de matricula con esta libreria-->
        <!--librerias Login-->
        <link rel="stylesheet" href="CSS/logStyle.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    </HEAD>
    <script>
            $(document).ready(function() {
            $("#resultado").html('<p>Escribe tu matrícula arriba</p>');
            });

            function buscar() {
            var textoBusqueda = $("input#busqueda").val();
	
                if (textoBusqueda != "") {
                    $.post("1_sAdministrador/1_PHP/buscarMatricula.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
                        $("#resultadoBusqueda").html(mensaje); }); 
                } else { 
                ("#resultadoBusqueda").html('<p>Aún no existen registro de tus datos</p>');
	            };
            };
        </script>
    <BODY>
        <!--header section start-->
        <div class="header_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-3">
					<div class="logo"><a href="index.php"><img ID="iLogo" src="IMAGENES/Logo.png"></a></div>
				</div>
				<div class="col-sm-6">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                           <a class="nav-item nav-link" href="index.php">Inicio</a>
                           <a class="nav-item nav-link" href="about.php">Ir a UTSV</a>
                           <a class="nav-item nav-link" href="student.php">Iniciar Sesion</a>
                           <a class="nav-item nav-link" style="border-bottom: 5px solid #4bc714;" href="">Registrarse</a>
                           <!--<a class="nav-item nav-link" href="contact.html">Contact</a>-->
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
	    </div>
	<!-- header section end -->
	<!-- login start-->
        <div class="container">
		    <div class="row text-center login-page">
			    <div class="col-md-12 login-form">
                <form action="1_sAdministrador/1_PHP/Registrar.php" method="POST"><br>
                    <p class="login-form-font-header">Regis<span>trarse</span><p>
                    <p>DATOS DE USUARIO</p>
                    <div class="row">
				        <div class="col-md-12 login-from-row">
                            <label for="Usuario"> Usuario</label><br>
                            <input type="text" name="NombreSesion" placeholder="Elí_Hernandez-29" required>
                        </div>
                    </div>
                    <!--<br>-->
                    <div class="row">
                        <div class="col-md-12 login-from-row">
                            <label for="email">Correo institucional</label><br>
                            <input type="text" name="email" placeholder="Luis.Canul@gmail.com" required>
                        </div>
                    </div>
                    <div class="row">
				        <div class="col-md-12 login-from-row">
                            <label for="Contra">Contraseña</label><br>
                            <input type="password" name="Contra" minlength=8 required>
                            <label for="Contras">Contraseña (nuevamente)</label><br>
                            <input type="password" name="Contras" minlength=8 required>
                        </div>
                    </div>
                    <div class="row">
				        <div class="col-md-12 login-from-row">
                            <p>DATOS PERSONALES</p>
                            <label for="Celular"> Celular</label><br>
                            <input type="text" name="Celular" maxlength=10 minlength=10 required/><br>
                            <label for="Matricula"> Matricula</label><br>
                            <input type="text"  maxlength=8 name="Matricula" id="busqueda" value="" placeholder="18190011" autocomplete="off"  onKeyUp="buscar();" required />
                            <div id="resultadoBusqueda"></div>
                        </div>
                    </div>
                    <div class="row">
						    <div class="col-md-12 login-from-row">
							    <input type="submit" class="btn btn__update" value="Registrarse" class="button">
						    </div>
					    </div>
                </form>
                </div>
            </div>   
        </div>
    <!-- login end-->
    <!-- Javascript files-->
      <script src="JS/jquery.min.js"></script>
      <script src="JS/popper.min.js"></script>
      <script src="JS/bootstrap.bundle.min.js"></script>
      <script src="JS/jquery-3.0.0.min.js"></script>
      <script src="JS/plugin.js"></script>
    <!-- sidebar -->
      <script src="JS/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="JS/custom.js"></script>
    </BODY>
</HTML>