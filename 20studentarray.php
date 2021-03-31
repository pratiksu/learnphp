<?php
$studentsample[0]= ["student name" => "prem pawar","marks" => "610","subject" => "PHP", "email" => "prempawar130@gmail.com","DOB" => "09-07-2000"];

$studentsample[1] =["student name"=>"swapnil shewale","marks"=>"508","subject"=>"C", "email" =>"swapnil142@gmail.com","DOB" => "04-05-2000"];
$studentsample[2] =["student name"=>"rahul sonwane","marks"=>"550","subject"=>"PHP", "email" =>"rahul885@gmail.com","DOB" => "10-11-2000"];
$studentsample[3] =["student name"=>"salman mansuri","marks"=>"555","subject"=>"C", "email" =>"salman786@gmail.com","DOB" => "01-05-1999"];
$studentsample[4] =["student name"=>"mayur savant","marks"=>"570","subject"=>"java", "email" =>"mayur452@gmail.com","DOB" => "04-05-2000"];
$studentsample[5] =["student name"=>"ganesh desale","marks"=>"700","subject"=>"OOPS","email"=>"ganesh520@gmail.com","DOB" => "04-11-1999"];
$studentsample[6] =["student name"=>"Mangesh shinde","marks"=>"590","subject"=>"OOPS","email"=>"mangesh343@gmail.com","DOB" => "03-12-1997"];
$studentsample[7] =["student name"=>"Rohit kapadanis","marks"=>"710","subject"=>"DBMS","email"=>"ROHIT950@gmail.com","DOB" => "23-07-2000"];
$studentsample[8] =["student name"=>"Mayur patil","marks"=>"654","subject"=>"c++","email"=>"Mayur143gmail.com","DOB" => "27-01-2000"];
$studentsample[9] =["student name"=>"Yogesh deore","marks"=>"698","subject"=>"php","email"=>"Yogesh9923@gmail.com","DOB" => "13-08-1998"];
$studentsample[10] =["student name"=>"swapnil hire","marks"=>"700","subject"=>"OOPS","email"=>"hire@gmail.com","DOB" => "30-10-1999"];
$studentsample[11] =["student name"=>"Mukesh wagh","marks"=>"508","subject"=>"java","email"=>"Mukesh8407@gmail.com","DOB" => "06-12-2000"];
$studentsample[12] =["student name"=>"rahul patil","marks"=>"775","subject"=>"networking","email"=>"rahul212@gmail.com","DOB" => "25-08-2000"];
$studentsample[13] =["student name"=>"sanket khairnar","marks"=>"650","subject"=>"c","email"=>"sanket785@gmail.com","DOB" => "12-11-2000"];
$studentsample[14] =["student name"=>"ghanshyam pawar","marks"=>"701","subject"=>"OOPS","email"=>"ghanshyam000@gmail.com","DOB" => "28-01-2000"];
$studentsample[15] =["student name"=>"Hritik thakre","marks"=>"450","subject"=>"DBMS","email"=>"HrTHKARE454@gmail.com","DOB" => "55-11-1999"];
$studentsample[16] =["student name"=>"Harshal kachave","marks"=>"654","subject"=>"c++","email"=>"Hrsh9730@gmail.com","DOB" => "27-03-1999"];
$studentsample[17] =["student name"=>"Mayank sonwane","marks"=>"521","subject"=>"OOPS","email"=>"mayank850@gmail.com","DOB" => "31-12-2000"];
$studentsample[18] =["student name"=>"Sagar ahire","marks"=>"689","subject"=>"php","email"=>"sagar882@gmail.com","DOB" => "15-08-2000"];
$studentsample[19] =["student name"=>"tushar patil","marks"=>"610","subject"=>"DBMS","email"=>"Tush776@gmail.com","DOB" => "08-07-2000"];
$studentsample[20] =["student name"=>"Harshal mohite","marks"=>"715","subject"=>"php","email"=>"harshal451@gmail.com","DOB" => "23-07-2000"];




										//count total student in array

echo "Total student sample is :-";
echo count($studentsample);
echo "<br><br><br>";
  

 										//total students start with M=>

$arrStartwithM=array();



foreach ($studentsample as $key => $value) {

  $startwithM = substr($value['student name'],0,1);	
  
if (strtolower($startwithM )  == 'm'){

array_push($arrStartwithM, $value);      
}

	}	
	
					
echo "total student start with m is:" .  count($arrStartwithM);
echo "<br><br><br>";

?>


<?php
/*										//first student with highest number of marks
$mark=0;
foreach ($studentsample as $key => $value) {
$mark>$value['marks'];
}
$heighestMark=$value['marks'];

print_r($value);

*/
?>