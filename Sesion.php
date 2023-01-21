<!DOCTYPE html>
<html>
    <script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//esta linea es necesaria para chrome
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>
    <head>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="CSS/Estilo.css">
        <link >
    </head>
    <body>
        <h2>INICIAR SESION</h2>
        <div class="forma">
            <form action="1_Administrador/1_PHP/ValidarUsuario.php" method="POST" >
	            <h1>Ingresa tus datos</h1>
                <p id="usu">Correo</p>
                <input type="text" name="txtcorreo" required >
                <p id="contr">Contraseña</p>
                <input type="password" name="txtcontrasena" required >
                <br>
                <br>
                <input type="submit"  value="Ingresar">
            </form>
        </div>
    </body>
</html>