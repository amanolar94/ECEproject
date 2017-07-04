<?php 
	$id=$_POST['id'];
	$day=$_POST['day'];
	$start=$_POST['start'];
	$end=$_POST['end'];
	require 'database_connect.php';
	$sql="UPDATE teaching SET teaching_day='$day',beginning_time='$start',end_time='$end' WHERE teaching_id='$id';";
	if ($conn->query($sql) === TRUE) {
	    echo "Success change!";
	                          
	    } else {
	    echo "Error: " . $sql1 . "<br>" . $conn->error;
	    }
	    $conn->close();


 ?>