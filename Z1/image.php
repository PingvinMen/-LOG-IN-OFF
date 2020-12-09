<?php
$im = imagecreatefrompng("image/1.png");

header('Content-Type: image/png');

$white = imagecolorallocate($im, 255, 255, 255);
imagefill ($im, 0, 0, $white);

imagepng($im);

imagedestroy($im);
?>
