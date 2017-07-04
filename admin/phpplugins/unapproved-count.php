<?php 
	require 'phpplugins/database_connect.php';
	$sql="SELECT COUNT(comment_id) as total_unapproved FROM comment WHERE approved='0';";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)){
		echo $row['total_unapproved'];
		
	}
	

	
        $conn->close();        
                        
?>