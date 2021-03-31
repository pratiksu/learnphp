<?php

     function fibo($n) {             // n = 10
		 $num1 = 0;                 // num1 = 0
		 $num2 = 1;                   // num2 =1
		 $counter = 0;                   // increment counter 0 to 10
		 $series = '';
		 
		 while($counter < $n) {             // cond print 10 only
			 $series.=$num1;                   // store fibo seris
			 if($counter < ($n-1)){          // to print com not for 10 
				 $series.=', ';                 // for adding com
			 }
			 $num3 = $num1 + $num2;             // for add
			 $num1 = $num2;
			 $num2 = $num3;
			 $counter++;                        
			 
		 }
		 return $series;                        
	 }
	
	 echo fibo(10);
?>	 