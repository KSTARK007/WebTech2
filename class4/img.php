<?php 

header('content-type:image/jpeg');
// header('jaiismad:guy')
extract($_GET);


if($uname=="USER1" || $uname=="USER2" || $uname=="USER3"){
	$im=imagecreate(1, 1);
	imagecolorallocate($im, 255, 255, 255);
 }
 else{
 	$im=imagecreate(2, 2);
	imagecolorallocate($im, 255, 255, 255);
 }
 
 	imagejpeg($im);
 

 ?>
