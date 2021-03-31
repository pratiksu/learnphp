
<?php


$CvsA=array();
$keyA=array();
$valueA=array();
$i=0;

     $handle=fopen("user_data.csv", "r");
      //$CvsArra= array();
       while (!feof ($handle))
        {
	      $data=fgetcsv($handle);
		  if ($i==0)
	     {   
	       
		   array_push($CvsA, $data);
         }
		  else
		 {
			array_push($valueA,$data);
	     }
		    array_push($keyA,$data);
	    $i++;
		
        }
       
		for ($a=0; $a < count($valueA) ; $a++) 
        { 
          $lastA[$a] [$CvsA[0][0]] = $valueA[$a][0];
   
          $lastA[$a] [$CvsA[0][1]] = $valueA[$a][1];
          $lastA[$a] [$CvsA[0][2]] = $valueA[$a][2];
          $lastA[$a] [$CvsA[0][3]] = $valueA[$a][3];
          $lastA[$a] [$CvsA[0][4]] = $valueA[$a][4];
   
        }
		
		echo "<pre>";
        print_r($lastA);
        exit();

 
        $JSON=json_encode($CvsA);
         print_r($JSON);

	    //fclose($handle);
?>