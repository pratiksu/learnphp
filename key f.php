<?php
     
	$color =[ 
	          "first" =>"red",
			  "second" =>"yellow",
			   "third" =>"blue",
			];
			
	$newArray = array_key_first($color);              //using array_key_first()function
	
	echo "<pre>";
	print_r($newArray);
	echo "</pre>";                                    /*array_key_first()is used to returns first key.*/
	
?>