<?php


$read=fopen("user_data.csv", "r");
$arrALL= array();
$firstKey=array();
$heading=array();
$actual=array();



$i = 0;

while (!feof ($read))
 {
		$cvsFileToArray=fgetcsv($read);
		
		if($i==0)
			array_push($heading, $cvsFileToArray);
		else
		{
			if(!empty($cvsFileToArray))
				array_push($actual, $cvsFileToArray);
		}

		array_push($arrALL, $cvsFileToArray);

		$i++;
	}
	echo "<pre>";
	print_r($heading);
	print_r($actual);
	exit();
	
foreach ($heading as $value) {
	echo "<pre>";
print_r($value);
}
echo "<pre>";
$headingKey=(array_flip($value));
foreach ($actual as $all) {
	echo "<pre>";
print_r($all);
echo "prem<BR>";
}
print_r(array_combine($headingKey, $all));
?>