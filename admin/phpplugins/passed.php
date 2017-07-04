<?php 
 

	require 'database_connect.php';
	$username=$_SESSION["username"];	
	$sql="SELECT count(*) as subjects from attends where username='$username' AND grade>='5'";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)){
		echo $row['subjects'];
		

	}
	
                        



                          $conn->close();

 ?>