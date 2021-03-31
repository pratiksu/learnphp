<?php
    $num1 = 10;
	$name = "pune";
	echo "value is: ", $num1;   //without string interpolation
	echo "<br>value is: $num1<br>";   //with string interpolation
	echo "$num1 is good price<br>";
	echo "{$name}city<br>";
	echo 'apple price $ten<br>';   //only for print use single quotation mark
	echo "$num1 apple price is \$ten";  //use back slash only for print (\)
?>