<?php
ob_start();
require "Tablainicial.php";

$html = ob_get_clean();

require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->loadHtml($html);

$paper_size = array(0,0,1100,2000);
$dompdf->setpaper($paper_size);

$dompdf->render();

$dompdf->stream('BD-Estadias.pdf');
?>