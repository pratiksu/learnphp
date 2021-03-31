<?php
    $x = 5985;
	var_dump(is_numeric($x));
	
	$y = "5985";
	var_dump(is_numeric($y));
	
	$z = "59.85" + 100;
	var_dump(is_numeric($z));
	
	$p = "hello";
	var_dump(is_numeric($p));

?>