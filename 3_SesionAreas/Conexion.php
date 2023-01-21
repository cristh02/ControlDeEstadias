<php
$host= "localhost";
$user="root";
$password="";
$name"InformaionAlumno";

try
{
	$bd=new PDO("msyql:host={$host};name={$name}",$user,$Password);
	$bd->seAttribute(PDO::ATTR_ERRMODE, PDO::EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}
?>