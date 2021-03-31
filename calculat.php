<?php
        $firstvalue=7;
	    $secondvalue=3;
		
		//addition
		function Add($firstvalue,$secondvalue)
		{
         		
		    $sum=$firstvalue + $secondvalue;
		    return $sum."<br>";
		
	    }
		$totaladd=Add($firstvalue,$secondvalue);
		echo $totaladd."<br>";		
				
		//multipication
	    function Multiply($firstvalue,$secondvalue)
		{
		
			$multipication=$firstvalue * $secondvalue;
			return $multipication."<br>";
			
	    }
	    $totalmult=Multiply($firstvalue,$secondvalue);
	    echo $totalmult."<br>";
	   
	   //subtaction
		function Subtract($firstvalue,$secondvalue)
		{
			
			$sub=$firstvalue - $secondvalue;
			return $sub."<br>";
			
		}
		$totalsub=Subtract($firstvalue,$secondvalue);
		echo $totalsub."<br>";
		
		//divide
		function Divide($firstvalue,$secondvalue)
		{
			$div=$firstvalue / $secondvalue;
			return $div."<br>";
			
		}
		$totaldiv=Divide($firstvalue,$secondvalue);
		echo $totaldiv."<br>";
?>