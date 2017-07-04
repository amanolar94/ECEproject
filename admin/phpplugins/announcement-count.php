<?php 
	require 'database_connect.php';
	$sql="SELECT COUNT(announcement_id) as total_announcements FROM announcement;";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)){
		echo $row['total_announcements'];
		$total=$row['total_announcements'];
	}
	

	// Get total pages number!!!!
	$pages_number = ceil($total/$announcements_per_page);
	$conn->close();  
	
                
                        
?>