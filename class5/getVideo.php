<?php
	header("Content-type:video/mp4");
	$file = fopen("suits.mp4", "rb");
	$f = fread($file,filesize("suits.mp4")/2);
	echo $f;
	fclose($file)

	
?>