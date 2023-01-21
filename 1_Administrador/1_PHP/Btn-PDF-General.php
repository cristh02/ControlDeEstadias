<?php
ob_start();
require "TablaGeneral.php";
$html = ob_get_clean();

require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->loadHtml($html);

$paper_size = array(0,0,2500,5000);
$dompdf->setpaper($paper_size);

$dompdf->render();

$dompdf->stream('BD_General-Estadias.pdf');
?>