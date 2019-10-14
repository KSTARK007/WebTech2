<?php

if($_SERVER["REQUEST_METHOD"]=="GET"){

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
echo json_encode($res);
}

if($_SERVER["REQUEST_METHOD"]=="PUT"){
	
	$params=file_get_contents("php://input");
	$data = explode("&", $params);
	$srnarr=explode("=", $data[0]);
	$srn=$srnarr[1];
	$cgpaaar=explode("=", $data[1]);
	$cgpa = $cgpaaar[1];
	$myfile = fopen("data.txt", "w");
	fwrite($myfile, "".$srn.":".$cgpa."");
	fclose($myfile);
	$res["status"]=200;
	$res["message"]="ok";
	$res["data"]=$data;
	echo json_encode($res);
}




?>