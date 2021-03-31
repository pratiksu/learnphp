<?php
    $person[0]='akshay';
	$person[1]='priti';
	$person[2]='bhalchandra';
	$person[3]='pratik';
	
	foreach($person as $emp){
		if($emp=='priti' || $emp=='akshay'){
			echo "team leader"  .  $emp . "<br>";
		} 
		elseif($emp=='bhalchandra' || $emp=='pratik'){
		    echo "interns" . $emp . "<br>";
		}
		
		if($emp=='pratik'){
			echo "my self" . $emp . "<br>";
		}
		
		if($emp!='priti'){
			echo $emp . ":male" . "<br>";
		}
		else{
		     echo $emp .  "<br>";
        }			 
	}
?>