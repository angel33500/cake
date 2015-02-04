<?php
include '../phpqrcode/qrlib.php';

$file = 'QR.png';//factura
$size = 3;
$data = "SARM890824HJ1SHKJFHSKJFHKJSDHFKJDHFJKSJ";
$level = QR_ECLEVEL_H;

QRcode::png($data, $file, $level, $size);
?>