<?php 
	require 'database_connect.php';
	$sql="DELETE FROM tags WHERE tags_id='$_POST[tag_id]';";
	if ($conn->query($sql) === TRUE) {
	    echo "Success Delete!";
	    echo '<script>problem();</script>';


	                          
	    } else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	    
	    }
	    $conn->close();

?>