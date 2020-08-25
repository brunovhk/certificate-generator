<?php

$image = imagecreatefromjpeg('certificado.jpg');

$titleColor = imagecolorallocate($image,0,0,0);
$grey = imagecolorallocate($image, 100,100,100);
$font = 'Bevan-Regular.ttf';
$font_path1 = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'fonts'. DIRECTORY_SEPARATOR . 'Bevan' . DIRECTORY_SEPARATOR .'Bevan-Regular.ttf';
$font_path2 = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'fonts'. DIRECTORY_SEPARATOR . 'Playball' . DIRECTORY_SEPARATOR .'Playball-Regular.ttf';

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$fullname = $_POST['name'] . " " . $_POST['lastname'];

imagettftext($image, 32,0, 314,150, $titleColor,$font_path1, utf8_decode("CERTIFICADO"));
imagettftext($image, 20,0, 214,250, $titleColor,$font_path1, utf8_decode("Certificamos que o:"));
imagettftext($image, 20,0, 214,380, $titleColor,$font_path1, utf8_decode("É o mais brabo de todos, e quem discordar"));
imagettftext($image, 20,0, 214,410, $titleColor,$font_path1, utf8_decode("é um grandessíssimo otário."));
imagettftext($image, 32,0, 350,320, $titleColor,$font_path2, utf8_decode($fullname));
imagestring($image, 5, 580 ,600,utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header('Content-Type: image/jpeg');
header('Content-Disposition: attachment; filename="Certificado.jpeg"');
imagejpeg($image);
imagedestroy($image);