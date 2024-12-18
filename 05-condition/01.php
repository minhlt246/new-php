<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	$number = 20;
	if($number % 2 == 0){
		$result = "Số chẵn ";
	}
	
	$result = ($number % 2 == 0) ? "Số chẵn " : "";
	echo $result;