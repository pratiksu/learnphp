<?php
$conn = mysqli_connect("localhost", "root","","test1");    //creat connection
$search="";
 if(!empty($_POST['search_box'])) 
 {  $search=$_POST['search_box'];
 }
?>
<html>
<body>
<form name="femserch" action="mysql.php" method="post">        
<input type="text" name="search_box" value="<?php echo $search;?>" >
<input type="submit" name="Go" > 
</form>
<table border="2">
    
    <tr>
		 <th>firstname</th>
		 <th>lastname</th>
		 <th>Email</th>
    </tr>	
	
<?php
	
  if ( isset($_POST['Go']))               // cheack click on submit butten 
  {
	  
	  if(!empty($_POST['search_box']))        // cheack search bar empty
	  
        {
			$search=$_POST['search_box']; 
			$select = "select * from student  where firstname like '%$search%' or lastname like '$search%' or email like'%$search'";
            $execute = mysqli_query($conn,$select);             
	             while ($all=mysqli_fetch_assoc($execute))
                { 			
	              echo"<tr> <td>";
		          echo$all['firstname'];
		          echo"</td> <td>";
		          echo$all['lastname'];
		          echo"</td> <td>";
		          echo$all['email'];
	              echo"</td> </tr>";
                }
        }
     	   else
			{
			   die("please enter the charchter");
			}
			
	}else{
		$select="select * from student";
		$execute=mysqli_query($conn,$select);
		
		 while ($all=mysqli_fetch_assoc($execute))
                { 			
	              echo"<tr> <td>";
		          echo$all['firstname'];
		          echo"</td> <td>";
		          echo$all['lastname'];
		          echo"</td> <td>";
		          echo$all['email'];
	              echo"</td> </tr>";
                }
	}		
?>
    
	</table>
	</body>
	</head>
	</html>
	
	