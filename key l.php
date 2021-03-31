<?php
     
	$color =[ 
	          "first" =>"red",
			  "second" =>"yellow",
			   "third" =>"blue",
			];
			
	$newArray = array_key_last($color);                 //using array_key_last()function
	
	echo "<pre>";
	print_r($newArray);
	echo "</pre>";                                      /*array_key_last() function is use to returns last key*/                              
	
?>