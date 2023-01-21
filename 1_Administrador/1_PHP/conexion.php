<?php
$database="InformacionAlumno";
	$user='root';
	$password='';


try {
	
	$con=new PDO('mysql:host=localhost;dbname='.$database,$user,$password);
echo "<script>
				alert('Conexiòn establecida');
					  </script>";
} catch (PDOException $e) {
	echo "Error".$e->getMessage();
}

?>