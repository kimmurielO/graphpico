<?php
Header( "Content-type: image/png");
//Header( "Content-type: image/jpeg");
require("grab_globals.lib.php");

if($ref == "") $ref=1;
if($typ == "") $typ=1;
if($dim == "") $dim=3;
if(!isset($bkg)) $bkg="FFFFFF";


	/* crea imagen */
	$image = imagecreate(($dim*2)+1,($dim*2)+1);

	// librerias de Colores y Funciones
	include('libcolores.php');
	include('libfunciones.php');

	sscanf($bkg, "%2x%2x%2x", $rr, $gg, $bb);
	$colorbkg = ImageColorAllocate($image,$rr,$gg,$bb);
	// crea bkg blanco
	imagefilledrectangle($image,0,0,$dim*2,$dim*2,$colorbkg);

	if($typ == 1)
		imagefilledarc($image, $dim,$dim, $dim*2,$dim*2, 0, 360, $colores[$ref], IMG_ARC_PIE);
	else
		imagefilledrectangle($image,1,1,($dim*2)-1,($dim*2)-1,$colores[$ref]);

/* Realiza la generacion del grafico */
imagePNG($image);
	//ImageJPEG($image,'',100);

/* Vacia la memoria */
imageDestroy($image);
?>