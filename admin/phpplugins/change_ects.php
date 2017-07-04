<?php 
	require 'database_connect.php';
	$code=$_POST['code'];
	$ects=$_POST['ects'];
	$dm=$_POST['dm'];
	$sql="UPDATE `subject` SET `ects`='$ects',`dm`='$dm' WHERE code='$code';";
	if ($conn->query($sql) === TRUE) {
	    echo "Success change!";
	    


	                          
	    } else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	    
	    }
	    $conn->close();

?>