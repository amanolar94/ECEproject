<?php 
	$class_id=$_POST['class_id'];
	$lesson_id=$_POST['lesson_id'];
	
	require 'database_connect.php';
	$sql="UPDATE teaching SET class_id='$class_id' WHERE teaching_subject_code='$lesson_id';";
	if ($conn->query($sql) === TRUE) {
	    echo "Success change!";
	                          
	    } else {
	    echo "Error: " . $sql1 . "<br>" . $conn->error;
	    }
	    $conn->close();


 ?>