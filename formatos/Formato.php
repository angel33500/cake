<?php
/*
AQUI VA LA CONECCION A LA BASE DE DATO O EN DADO CASO EL REQUIERED
*/
/*

AQUI SE RECIVEN LOS DATOS QUE ENVIASTE DESDE EL OTRO FORMULARIO
$idfactura= $_POST['vHTML']; *
*/
		
/*
AQUI VAN TODAS LA CONSULTAS NECESARIAS PARA OBTENER LOS DATOS DE LA BD
*/
include 'phpqrcode/qrlib.php';

$file = 'QR.png';
$size = 3;
$data = "SARM890824HJ1ESTO&ES&PRUEBA&DE6QUE&FUNCIONA";
$level = QR_ECLEVEL_H;

QRcode::png($data, $file, $level, $size);

	$html = '
<table width="700" align="center" cellpadding="1" class="tabletop" border="1" style="border-collapse:collapse;">
  <tr>
    <td rowspan="3" width="100" align="center"><img src="QR.png" style="width:50px; height:50px;"  /></td>
    <td width="400">Nombre del documento: formato para solicitud de mantenimiento correctivo2</td>
    <td width="200">SNEST/D-AD-PO-001-02</td>
  </tr>
  <tr>
    <td  width="300" rowspan="2">&nbsp;</td>
    <td width="200">Revisión: 0</td>
  </tr>
  <tr>
    <td width="200">Pagina 1-1</td>
  </tr>

</table>
<h4 align="center">SOICITUD MANTENIMIENTO CORRECTIVO</h4>
<table width="250" align="right" cellpadding="1" class="tabletop" border="1" style="border-collapse:collapse;">

 <tr>
    <td width="200" align="center">Recursos Materiales y servicios Generales Redes e Informatica</td>
    <td width="40" align="center">X</td>
  </tr>
</table>

';


		


    require_once('_pdf/html2pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr');
    $html2pdf->WriteHTML($html);
    $html2pdf->Output('Facturas.pdf');
	
	unlink("QR.png");
	


/*    require_once('_pdf/html2pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P','A4','fr');
    $html2pdf->WriteHTML($html);


$to = "bir_19_89@hotmail.com";
$from = "masr33500@gmail.com";
$subject = "send email with pdf attachment";
$message = "<p>Please see the attachment.</p>";
$separator = md5(time());
$eol = PHP_EOL;
$filename = "example.pdf";
$pdfdoc = $html2pdf->Output('', 'S');
$attachment = chunk_split(base64_encode($pdfdoc));


$headers = "From: ".$from.$eol;
$headers .= "MIME-Version: 1.0".$eol;
$headers .= "Content-Type: multipart/mixed; boundary=\"".$separator."\"".$eol.$eol;



$body .= "Content-Transfer-Encoding: 7bit".$eol;
$body .= "This is a MIME encoded message.".$eol; //had one more .$eol


$body .= "--".$separator.$eol;
$body .= "Content-Type: text/html; charset=\"iso-8859-1\"".$eol;
$body .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
$body .= $message.$eol; 


$body .= "--".$separator.$eol;
$body .= "Content-Type: application/octet-stream; name=\"".$filename."\"".$eol;
$body .= "Content-Transfer-Encoding: base64".$eol;
$body .= "Content-Disposition: attachment".$eol.$eol;
$body .= $attachment.$eol;
$body .= "--".$separator."--";

mail($to, $subject, $body, $headers);*/
?>