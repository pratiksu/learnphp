<?php
     if(isset($_POST["sub"])){
		 
		 $person=$_POST["person"];
		  
		 if($person=="priti" || $person=="akshay"){
			 echo"team leader";
		 }elseif($porson=="pratik" || $porson=="bhalchandra"){
			 echo"intrens";
		 }
?>
		 