<?php
$conexion=mysqli_connect("localhost", "root","", "InformacionAlumno");

if(!$conexion){
die("No se pudo conectar: ".mysqli_connect_error());
echo "<script>
				alert('Conexiòn establecida');
					  </script>";
}else{
//Recuperamos datos con metodo post
$correo =$_POST['txtcorreo'];
$contrasena= $_POST['txtcontrasena'];
//Hacemos consulta a las tablas de usuarios para verificar si existe en alguna
$Administrador = mysqli_query($conexion, "SELECT * FROM Administrador WHERE correo = '$correo' AND contrasena = '$contrasena';");
$Alumno = mysqli_query($conexion, "SELECT * FROM InicioSesion WHERE correo = '$correo' AND contrasena = '$contrasena' AND  bloqueo  != 0;");
//$OtraArea = mysql_query("SELECT * FROM directores WHERE director = '$correo' AND password = '$password'");
//los if comprueban si el resultado de l consulta es ese usuario y lo envia al su pagina
if(mysqli_num_rows($Administrador) > 0) 
{
    session_start();
    
        if (!isset($_SESSION['Administrador'])) 
        {
            //$_SESSION['Administrador']="$Administrador";
            /* nos envía a la siguiente dirección en el caso de no poseer autorización */
            header("Location: ../PagAdministrador.html");
    
        /* terminamos la ejecución ya que si redireccionamos ya no es necesario
        seguir ejecutando código de este archivo */
        exit();
        }
}else if(mysqli_num_rows($Alumno) > 0) 
{
    session_start();
    
    if (!isset($_SESSION['Alumno'])) 
    {
        //$_SESSION['Alumno']="$Alumno";
    header("Location: ../PagAlumno.php");
    
    exit();
    } 
}
/*else if(mysql_num_rows($director) > 0) //La rason por la que las lineas de codigo de OtraArea estan comentados
                                         //es porque aún no existe sus archivos en pagina
{
    session_start();
    $_SESSION['OtraArea']="$OtraArea";
    if (!isset($_SESSION['OtraArea'])) 
    {
    header("Location: ");
    }
    exit();
} */
else 
{
   /* Si no el usuario no se encuentra en ninguna de las tablas 
   imprime el siguiente mensaje */
   $mensajeaccesoincorrecto = "Usuario Bloqueado";
   echo $mensajeaccesoincorrecto; 
}
} 
/*
$consulta="SELECT * FROM InicioSesion WHERE correo='$correo' AND contrasena='$contrasena';";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_num_rows($resultado);
session_start();

//$_SESSION['txtusuario'];
//$_SESSION['txtcontrasena'];
if($filas>0){
header("Location: ../PagAdministrador.html");
}else{
    header("Location: ../Login.html");
}

}
mysqli_free_result($resultado);*/
//msyqli_close($conexion);
?>