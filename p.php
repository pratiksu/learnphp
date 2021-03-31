<?php
 $conn= mysqli_connect("localhost","root","","company");
 //CHECK GO BUTTON CLIK
	$search="";
 if (!empty($_POST['search']))
 {
 		$search=$_POST['search'];
 }
?>

<html>
	<head>
		<title>Dynamic Table</title>
	</head>
	<body>
		<form method="post" name="frm_search" action="connection & fetch.php">
			<input type="text" name="search" value="<?php echo $search; ?>">
			<input type="submit" name="Go" value="Go">
		</form>
		<br>
		<br>
		<br>
		<table border="2">
			<tr>
				<td>Sr no.</td>
				<td>firstnme</td>
				<td>lastname</td>
				<td>skill</td>
				<td>age</td>
			</tr>

			<?php
				$srno=1;
			 if ( isset($_POST['Go']))
			 {
				 if (!empty($_POST['search']))
				 { 	
						$search=$_POST['search'];
						$select= "select * from programmers where firstname like '%$search%' or lastname like '$search%' or skill like '%$search'";
						$execute= mysqli_query($conn,$select);
						while ( $fetch= mysqli_fetch_assoc($execute))
						{
								$age=rand(25,50	);
							echo "<tr><td>".$srno++."</td><td> ".$fetch['firstname']."</td><td> ".$fetch['lastname']."</td><td> ".$fetch['skill']."</td><td>".$age."</td></tr>";
						
						}
				 }
				 else
				{
					die("please enter the charchter");
				}


			}
			else
			{
		
			
				$AllSelect="select * from programmers";
				$execute1= mysqli_query($conn,$AllSelect);
				while ($fetch= mysqli_fetch_assoc($execute1))
				 {
				
				echo "<tr><td> ".$fetch['firstname']."</td><td> ".$fetch['lastname']."</td><td> ".$fetch['skill']."</td></tr>";

				}

			} ?>
		</table>
	</body>
</html>

<?php
//print total value in db
//in search bar after search kay search kelay te 
?>
