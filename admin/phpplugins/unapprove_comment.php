<?php 
	require 'database_connect.php';
	$sql="UPDATE `comment` SET `approved`='0' WHERE comment_id='$_POST[comment_id]';";
	if ($conn->query($sql) === TRUE) {
	    echo "Comment approved!";


	                          
	    } else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	    
	    }
	    $conn->close();

?>