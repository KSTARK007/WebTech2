<?php
	header("Content-type:video/mp4");
	$file = fopen("suits.mp4", "rb");
	for ($i=0; $i < 24 ; $i++) { 
		$f = fread($file,filesize("suits.mp4")/24);
		echo $f;
	}
	
	fclose($file)

	
?>