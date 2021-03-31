		<?php
    $conn=mysqli_connect("localhost","root","","login");

	?>
	<!DOCTYPE html>
	<html>
	<table>
	<form method=post action="">
	ID       <input type="text" name="id"><br><br>
	Name     <input type="text" name="name"><br><br>
	Password <input type="password" name="password"><br><br>
	        <input type="submit" name="Go" > 
	<body>
	</form>
	</table>
	</body>
	</html>




   <?php
   echo "0";
   if ( isset($_POST['Go'])) 
  {   
   	echo "1";
   	$id=$_POST['id'];
   	$Name=$_POST['name'];
   	$password=$_POST['password'];

   	$insert="insert into differatiate(id,name,password)
   	         values(id,'$Name','$password')";
   	$execute=mysqli_query($conn,$insert);
   	if ($execute) 
   	{
   		echo "inserted success";
   	}
   	else
   	{
   		echo "inserted failed";
   	}
   }
   else
   {
	  echo"jhj";
   }
   


   ?>






