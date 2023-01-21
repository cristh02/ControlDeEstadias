<?PHP
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$html=file_get_contents_curl("http://localhost/ProyectoPrueba/SesionAlumno/PHP/documento.php");

$dompdf = new DOMPDF();
$dompdf->set_paper("letter","portrait");
$dompdf->load_html(utf8_decode($html));

$dompdf->render();

$dompdf->stream('Solicitud-Estadía.pdf');

function file_get_contents_curl($url){
    $crl=curl_init();
    $timeout=5;
    curl_setopt($crl, CURLOPT_URL, $url);
    curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($crl, CURLOPT_CONNECTTIMEOUT, $timeout);
    $ret= curl_exec($crl);
    curl_close($crl);
    return $ret;
}
?>