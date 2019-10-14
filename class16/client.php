<?php 
extract($_GET);
if(count($_GET)==1){
	$ret=file_get_contents("http://localhost/WebTech2/class16/getdetails/srn/".$srn);
	echo($ret);
}
if(count($_GET)==2){
	$data=http_build_query($_GET);
	$header=array("Content-type:application/x-www-form_urlencoded");
	$request = array("http"=>array("method"=>"PUT","header"=>$header,"content"=>$data));

	$context = stream_context_create($request);


	$retVal=file_get_contents("http://localhost/WebTech2/class16/studentdetails/update/gpa.json",FALSE,$context);
	echo($retVal);
}




 ?>