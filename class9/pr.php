<?php
	// sleep(5);
	$myfile = fopen("score.txt", "r") or die("Unable to open file!");
		$data = fread($myfile,filesize("score.txt"));
		// echo "1;2;3";
		echo $data;
		fclose($myfile);

?>