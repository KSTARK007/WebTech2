<?php
	extract($_GET);
	if($mname="race"){
		$res=array("lead"=>"saif","year"=>"2010");
	}
	echo json_encode($res);


?>