<?php

   /* $conn= mysqli_connect("localhost","root","","student");       //made connection using variable conn with database  student
	
	    //validation and error_get_last
		
	$fname= $_GET['fname'];
	
	if (!empty($fname))         // when fname is empty it will not print
	{
		print_r($fname);
		echo "<br>";
	}else{
		    die("fail fname variable properly");
	}
	
	$lname= $_GET['lname'];
	
	if (!empty($lname)){
        print_r($lname);
        echo "<br>";
    }else{
		    die("fill lname variable properly");
	}
	
	$marks= $_GET['marks'];
		
	if (!empty($marks)){
		print_r($marks);
		echo "<br>";
	}else{
		    die("fill marks variable properly");
	}
	
	$subject= $_GET['subject'];
	
	if (!empty($subject)){
		print_r($subject);
		echo "<br>";
	}else{
		   die("fill marks variable properly");
	}

    $dob= $_GET['dob'];

    if (!empty($dob)){
        print_r($dob);
        echo "<br>";
	}else{
           die("fill dob variable properly");
    }

    $email= $_GET['email'];
    
    if (!empty($email)){
        print_r($email);
       	echo "<br>";
    }else{
           dia("fill email variable properly");
    }		   

    	
<html>
<body>
<form>
<input type="text" name="text" class= "search" placholder = "search hear">
<input type ="submit" name="submit" class="submit" value="serch">
</form>
</body>
</html>
	
	
	$execute = mysqli_query($conn,$insertValueInStudent);
	
	if($execute)
	{
		echo "insert successful";
	}
	else
	{
		echo "insert fail";
	}*/
	
?>
<?php
$firstname="";
if (!empty($_POST['firstname'])){
	$firstname=$_POST['firstname'];

}
$lastname="";
if(!empty($_POST['lastname']))
{
$lastname=$_POST['lastname'];
}
$email="";
if(!empty($_POST['email']))
{
$email=$_POST['email'];
}

?>


<?php
$conn= mysqli_connect("localhost","root","","test1");       //made connection using variable conn with database  student

	$fname="";
	$lname="";
	$mail="";
	$show=2;
	$show=1;
	
if(isset($_POST['submit']))
{
	$show=1;
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
    
	
	if (empty ($firstname)){
		$show= 2;
		
		$fname = "enter required value";
	}
	
	if (empty ($lastname)){
		$show= 2;
		$lname = "enter required value";
	}
	if (empty ($email)){
		$show= 2;
		$mail = "enter required value";
	}
	if ($show==1)
	{
	 $insertValueInStudent= "insert into student(firstname,lastname,email)
	                    values('$firstname','$lastname','$email')";
						
	 $exicute = mysqli_query($conn,$insertValueInStudent);
	
		if ($exicute)
		{
		echo "insert successful";
		}
		else
		{
		echo "not insert";
		}
	}
						
	
}
?>

<html>
<body>
<form method=post action="mysql.php">
firstname <input type="text" name="firstname" value="<?php echo $firstname;?>">
<?php echo $fname;?><br><br>
lastname <input type="text" name="lastname" value="<?php echo $lastname;?>">
<?php echo $lname;?><br><br>
email <input type="text" name="email" value="<?php echo $email;?>">
<?php echo $mail;?><br><br>
<input type ="submit" name="submit" >
</form>
</body>
</html>