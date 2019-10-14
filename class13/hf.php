<?php
// set_time_limit(0); 
ob_start(); // control php buffer
ob_flush();
flush();    // flush apache buffer
	$oldtime = filemtime("data.txt");

	while (true) {
		clearstatcache();
		$newtime=filemtime("data.txt");
		if($newtime>$oldtime){
			echo "<script>";
			echo "parent.obj.showChange('File Changed at".date("H i s",$newtime).";')";
			echo "</script>";
			ob_flush();
			flush();
			$oldtime=$newtime;
		}
		else{
			echo "<script>";
			echo "parent.obj.heartbeat()";
			echo "</script>";
			ob_flush();
			flush();
		}
		sleep(5);
	}
 ?>