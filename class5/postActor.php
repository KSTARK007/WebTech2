<?php
	extract($_POST);
	if($mname=="race"){
		$res=array("lead"=>"saif","year"=>"2010");
		echo json_encode($res);	
	}
	else{
		$res=array("lead"=>"not found","year"=>"not found");
		echo json_encode($res);	
	}
	


?>