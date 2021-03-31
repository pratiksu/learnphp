<?php

// progrm is csvfile read and convert into in array..

$totoalArrOfCsv=array();
$keyArr=array();
$valueOfArr=array();
$i=0;


$readCsvFile=fopen("user_data.csv","r");		//read csv file..
while (!feof($readCsvFile)) 
{

	$array=fgetcsv($readCsvFile);              //convert into arr.
	
	if ($i==0) 
	{
		array_push($keyArr,$array);
	}
	else
	{
		array_push($valueOfArr,$array);
	}

	array_push($totoalArrOfCsv,$array);
	$i++;

}
/*
$mainArr=array();

echo "<pre>";
print_r($valueOfArr);
echo "<pre>";
print_r($keyArr);
*/

//print array with key and value..

for ($a=0; $a < count($valueOfArr) ; $a++) 
{ 
   $mainArr[$a] [$keyArr[0][0]] = $valueOfArr[$a][0];
   
   $mainArr[$a] [$keyArr[0][1]] = $valueOfArr[$a][1];
   $mainArr[$a] [$keyArr[0][2]] = $valueOfArr[$a][2];
   $mainArr[$a] [$keyArr[0][3]] = $valueOfArr[$a][3];
   $mainArr[$a] [$keyArr[0][4]] = $valueOfArr[$a][4];
   
}

echo "<pre>";
print_r($mainArr);
exit();

//conert array in JSON.

$json=json_encode($mainArr);
print_r($json);

?>