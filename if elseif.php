<?php
     $per = 77;
	 
	 if($per >= 80 &&  $per <=100){
		 echo"your are in merit.";
		 
	 }elseif($per >= 60 && $per <80){
		 echo"your are in 1st division.";
		 
	 }elseif($per >= 35 && $per <60){
		 echo"your are in 2nd division.";
		 
	 }elseif($per <35){
		 echo"your are fail.";
		 
	 }else{
	     echo"please enter valid percentage.";
	}
?>