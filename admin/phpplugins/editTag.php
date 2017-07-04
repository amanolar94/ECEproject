<?php 
	require 'database_connect.php';
	$sql="UPDATE tags SET tags_name='$_POST[changed_tag]' WHERE tags_id='$_POST[edit_save]';";
	if ($conn->query($sql) === TRUE) {
	    echo "Success change!";
	                          
	    } else {
	    echo "Error: " . $sql1 . "<br>" . $conn->error;
	    }
	    $conn->close();

?>