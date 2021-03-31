<?php
    
	function dis($number){
	   
	   if($number <= 5){
		  echo "$number <br>";
		  dis($number + 1);
	   }
	}
	
	dis(1);

?>