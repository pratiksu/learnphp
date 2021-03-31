<?php


$$handle=fopen("user_data.csv", "r");
$CvsArra= array();
while (!feof ($$handle))
 {
	
$data=fgetcsv($$handle);
array_push($CvsArra, $data);


 }
 
 $JSON=json_encode($CvsArra);
 print_r($JSON);

	
	


 

 fclose($handle);
?>




