<html>

<head>
 <title>Ejemplo sencillo de AJAX</title>
 <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
  <script>
function enviar(){
  //var n =  document.getElementById("nombre").value;
  var datos={
                "nombre": $("#nombre").val(),
              }

$.ajax({
type:'post',
url: 'prueba_consulta.php',
data: datos,
//data: {nombre:n},
success: function(d){
  $("#respa").html(d);
}

});
return false;
}
</script>


<?php
include 'prueba_consulta.php';
?>

<form method="post">
  <input type="text" name="nombre" size="30" name="" id="nombre">
  <input type="button" name="" value="enviar" onclick="enviar()">
  <div id="respa"></div><!-- Aca si sale el valor-->
  </form>
<input type="text" value="<?php echo($row['nombre_site']);?>"><!-- Aca NO sale el valor-->
</body>
 </html>




Prueba_consulta.php

<?php
//************ conexion a BD ***************
    $con = mysql_connect("localhost","root","");
    mysql_select_db("mantenimiento",$con);


 $filtro=$_POST["nombre"];
 $rs= mysql_query("SELECT * FROM registro_energia_temp WHERE nombre_site like '%$filtro%' order by id_energia desc ;"); 

$row = mysql_fetch_assoc($rs);

$nombre_site= $row['nombre_site'];
echo $nombre_site; //este valor se completa en el DIV y deseo mostrarlo en la caje de texto
?>