<?php
	// extract($_FILES);
	var_dump($_FILES);
	$temp=$_FILES["f"]["tmp_name"];
	$dest="bla.html";
	if(move_uploaded_file($temp, $dest)){
		echo "file saved ".realpath($dest);
	}
	else{
		echo "error";
	}

?>