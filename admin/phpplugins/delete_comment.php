<?php 
	require 'database_connect.php';
	$sql="DELETE FROM comment WHERE comment_id='$_POST[comment_id]';";
	if ($conn->query($sql) === TRUE) {
	    echo "Success Delete!";


	                          
	    } else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	    
	    }
	    $conn->close();

?>