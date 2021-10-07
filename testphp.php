<?php

// create image
$image = imagecreatetruecolor(100, 100);

// allocate some colors
$white    = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
$gray     = imagecolorallocate($image, 0xC0, 0xC0, 0xC0);
$darkgray = imagecolorallocate($image, 0x90, 0x90, 0x90);
$navy     = imagecolorallocate($image, 0x00, 0x00, 0x80);
$darknavy = imagecolorallocate($image, 0x00, 0x00, 0x50);
$red      = imagecolorallocate($image, 0xFF, 0x00, 0x00);
$darkred  = imagecolorallocate($image, 0x90, 0x00, 0x00);

// make the 3D effect
for ($i = 60; $i > 50; $i--) {
   imagefilledarc($image, 50, $i, 100, 50, 0, 88, $darknavy, IMG_ARC_PIE);
   imagefilledarc($image, 50, $i, 100, 50, 88, 110 , $darkgray, IMG_ARC_PIE);
   imagefilledarc($image, 50, $i, 100, 50, 110, 268 , $darkred, IMG_ARC_PIE);
   imagefilledarc($image, 50, $i, 100, 50, 268, 360 , $darkgray, IMG_ARC_PIE);
}

imagefilledarc($image, 50, 50, 100, 50, 0, 88, $navy, IMG_ARC_PIE);
imagefilledarc($image, 50, 50, 100, 50, 88, 110, $gray, IMG_ARC_PIE);
imagefilledarc($image, 50, 50, 100, 50, 110, 268 , $red, IMG_ARC_PIE);
imagefilledarc($image, 50, $i, 100, 50, 268, 360 , $gray, IMG_ARC_PIE);

// flush image
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>
