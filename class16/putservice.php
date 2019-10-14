<?php

if($_SERVER["REQUEST_METHOD"]=="PUT"){

	echo "get";
	extract($_GET);
	$res=array();
	if($srn==99){
		$data=array();
		$data["name"]="abc";
		$data["cgpa"]="9.9";
		$res["status"]=200;
		$res["message"]="ok";
		$res["data"]=$data;

	}
	else{
		$res["status"]=404;
		$res["message"]="Not Available";
		$res["data"]=null;		
	}
}

echo json_encode($res);



?>