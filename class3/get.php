<!DOCTYPE html>
<html>
<head>
	<title></title>
<script type="text/javascript">
	
	<?php 
		extract($_GET);
		if($srn=="SRN1"){
			$ret="SRN1;abc;9.8";
		}
		if($srn=="SRN2"){
			$ret="SRN2;def;9.2";
		}
		echo "parent.showDetails('$ret')";
	 ?>

</script>
</head>
<body>

</body>
</html>
