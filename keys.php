<?php
     
	$color =[ 
	          "first" =>"red",
			  "second" =>"yellow",
			   "third" =>"blue",
			];
			
	$newArray = array_keys($color);                 //use array_keys()
	
	echo "<pre>";
	print_r($newArray);
	echo "</pre>";                                /*array_keys()function returns an array containing the keys*/
	
?>