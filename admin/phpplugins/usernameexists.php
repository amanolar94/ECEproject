<?php 
	require 'database_connect.php';
	$mail=$_POST['mail'];
	$sql="SELECT COUNT(*) AS count FROM user WHERE username='$mail'";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)) {
    	if($row['count']>0){
    		echo 0;
    	}else{
    		echo 1;
    	}
  };

   $conn->close();
 ?>