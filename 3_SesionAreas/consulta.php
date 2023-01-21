<?php
require_once 'Conexion.php';
session_start();
if(isset($_SESSION["admin_login"]))
{
	header("location: Administrador/PagAdministrador.html");
}
if(isset($_SESSIOM["administrativo_login"]))
{
	header("lotacion: SesionAlumno/PagAlumno.html");
}
if(isset($_SESSION["alumno_login"]))
{
	header("lotacion: SesionAlumno/PagAlumno.html");
}

if(isset($_REQUEST['btn_login']))
{
	$email = $_REQUEST["txt_email"];
	$password=$_REQUEST["txt_Password"];
	$role = $_REQUEST["txt_role"];
}

if(empty($email)){
	$errorMsg[]= "Por favor ingrese su email";
}else if(empty($password)){
	$errorMsg[]= "Por favor ingrese una contraseña";
}else if(empty($role)){
	$errorMsg[]= "Por favor seleccion un rol";
}else if($email AND $password AND $role)
{
	try{
	$select_stmt=$bd->prepare("SELECT email,password,rol FROMmainlogin WHERE email=:uemail AND password=:upassword AND role=:urole");
	$select_stmt->bindParam(":uemail", $email);
	$select_stmt->bindParam(":upassword", $password);
	$select_stmt->bindParam(":urole",$role);
	$select_stmt->execute();
	
	while ($row=$select_stmt->fetch(PDO::FETCH_ASSOC)) {
		$dbemail=$row["email"];
		$dbepasword=$row["password"];
		$dbrole=$row["role"];
	}
	if ($email!=null AND $password!=null AND $role!=null) {
		if($select_stmt->rowCount()>0){
			if ($email==$dbemail AND $password == $bdpassword AND $role==$bdrole) {
				switch ($bdrole) {
					case 'admin':
						$_SESSION["admin_login"]=$email;
						$loginMsg="Admin: Bienvenido a pagina Administrador";
						header("refresh:3;Administrador/PagAdministrador.html");
						break;
					case 'otro':
						$_SESSION["administrativo_login"]=$email;
						$loginMsg="Administrativo: Bienvenido a pagina Administrativa";
						header("refresh:3;Administrador/PagAdministrador.html");
					break;
					case 'alumno':
						$_SESSION["alumno_login"]=$email;
						$loginMsg="alumno: Bienvenido alumno";
						header("refresh:3;SesionAlumno/PagAlumno.html");
					break;
				
					default:
						$errorMsg[]="veifique que sus datos sean correctos";
						break;
				}
			}else
			{
				$errorMsg[]=$errorMsg[]="veifique que sus datos sean correctos e intentalo de nuevo";
			}
		}else
		{
			$errorMsg[]="veifique tus datos y vuelve a intentarlo";
		}
	}
	else
	{
		$errorMsg[]="Por favor, veifique que sus datos sean correctos";
	}
}
catch (PDOExeption $e){
	$e->getMessage();
}
}
else{
	$errorMsg[]="Datos incorrectos";
}
}
include("header.php");