<?php
     
	$color =[ 
	          "first" =>"red",
			  "second" =>"yellow",
			   "third" =>"blue",
			];
			
	$newArray = array_key_exists("third",$color);           //using array_key_exists()function
	
	echo "<pre>";
	print_r($newArray);
	echo "</pre>";                                          /*array_key_exists() function is use to check exist key*/
	
?>