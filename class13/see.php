<?php 
	header("Content-type:text/event-stream");
	ob_start();
	ob_flush();
	flush();	
	for ($i=0; $i <4 ; $i++) { 
		
		echo "data:hello".$i."\n\n";
		ob_flush();
		flush();
		echo "event:event1\n";
		echo "data:test\n";
		// echo "retry:1000\n\n";
		// sleep(3);
	}

 ?>