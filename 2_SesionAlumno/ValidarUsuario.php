<?php
$conexion=mysqli_connect("localhost", "root","", "InformacionAlumno");

if(!$conexion){
die("No se pudo conectar: ".mysqli_connect_error());
}

$usuario =$_POST['txtusuario'];
$contrasena= $_POST['txtcontrasena'];

$consulta="SELECT * FROM InicioSesion WHERE correo='$usuario' AND contrasena='$contrasena';";
$resultado=mysqli_query($conexion,$consulta);
$resultadoBloqueo= mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);

if($filas>0 and $resultadoBloqueo == 0){
   
        header("Location: PagAlumno.html");
    

}else{
    header("Location: Login.html");
}
mysqli_free_result($resultado);
msyqli_close($conexion);

?>