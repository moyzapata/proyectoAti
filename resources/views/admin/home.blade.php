<?php

require_once __DIR__ . '././vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->SetHTMLHeader('Tecnologia integrada');
$mpdf->SetHTMLFooter('Pag. {PAGENO} de {nb}');

$mpdf->WriteHTML('<h1>reporte de servicio</h1>');
$mpdf->WriteHTML('<p>reporte de servicio</p>');
$mpdf->writeHTML('<P>Nombre</p>');
$mpdf->writeHTML('<P>Domicilio</p>');
$mpdf->writeHTML('<P>correo</p>');
$mpdf->writeHTML('<P>telefono</p>');
$mpdf->writeHTML('<P>Area</p>');
$mpdf->writeHTML('<P>Dependencia</p>');
$mpdf->writeHTML('<P>Detalles</p>');
$mpdf->writeHTML('<P>fecha</p>');

$mpdf->Output();
