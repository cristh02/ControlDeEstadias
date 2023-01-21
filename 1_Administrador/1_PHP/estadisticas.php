<!--
Diseño CSS3, HTML5 y Programación en PHP y Javascript
Genesis Vargas J 
http://genesisvargasj.com
http://dstic.co
-->
<!DOCTYPE html>
<html lang="es">
<head>
<title>Estadístias PHP - JS</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../2_CSS/estiloG.css">
<script src="../7_JavaScript/js/jquery.min.js"></script>
<script src="../7_JavaScript/js/highcharts/js/highcharts.js"></script>
<script src="../7_JavaScript/js/highcharts/js/themes/grid.js"></script>
<script src="../7_JavaScript/js/highcharts/js/modules/exporting.js"></script>
</head>
<body>
	<div class="contendor">
		<div id="consulta">
			<h1>UTSV-Estadias</h1><hr>
			<table>
			<thead>
			<tr>
					<th>Género</th>
					<th>Cantidad</th>
					<th>Porcentaje</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
			<?php
			include("conexionGrafi.php");
			$query = 'SELECT Genero, COUNT(Genero) as total FROM usuarios  GROUP BY Genero';

			$result = mysqli_query($con, $query);
			$c=0;
			$a=0;
			$total=0;
			while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
			{
				$categoria[$c] = $row["Genero"];
				$datos[$c] = $row["total"];  
				$total = $total + $row["total"];
				$c++;
			}
			for ($j=0;$j<=$c-1;$j++)
			{
				$a++;
				echo "<tr><td>".$categoria[$j];
				echo "</td><td>".$datos[$j];
				echo "</td><td>".number_format((($datos[$j]/$total)*100), 1, ',', '')."%";
				$por[$j]= round( ($datos[$j]/$total)*100, 1);
				if ($j==0) 
				{
					echo "</td><td rowspan=".$c.">".$total."</td></tr>";
				}
			}
			mysqli_close($con);	  
			?>
			</tbody>
			</table>
		</div>
		<script type="text/javascript">
		$(function () {
			var colors = Highcharts.getOptions().colors,
			categories = [<?php for($y=0;$y<=$c-1;$y++){ echo "'".$categoria[$y]."',";}?>	],
			name = 'Graficos',
			data = [
			<?php for($x=0;$x<=$c-1;$x++){?>	
			{
				y: <?php echo $por[$x] ?>,
				color: colors[<?php echo $x?>],                   
			}, 
			<?php }?>	   
			];
			function setChart(name, categories, data, color) {
				chart.xAxis[0].setCategories(categories, false);
				chart.series[0].remove(false);
				chart.addSeries({
					name: name,
					data: data,
					color: color || 'white'
				}, false);
				chart.redraw();
			}
			var chart = $('#grafica').highcharts({
				chart: {
					type: 'column'
				},
				title: {
				text: 'Porcentajes de Hombre y Mujeres '
				},
				xAxis: {
					categories: categories
				},
				credits: {
					enabled: false
				},
				plotOptions: {
					column: {
						cursor: 'pointer',
						point: {
							events: {
								click: function() {
									var drilldown = this.drilldown;
									if (drilldown) { 
										setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
									} else { 
										setChart(name, categories, data);
									}
								}
							}
						},
						dataLabels: {
							enabled: true,
							color: colors[0],
							style: {
								fontWeight: 'bold'
							},
							formatter: function() {
								return this.y +' %';
							},
						}
					}
				},
				series: [{
					name: name,
					data: data,
					color: 'white'
				}],
				exporting: {
					enabled: true
				}
			})
			.highcharts(); 
		});
		</script>
		<div id="grafica"></div>
	</div>
</body>
</html>
