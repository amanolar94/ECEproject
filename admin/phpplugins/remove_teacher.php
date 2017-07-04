<?php 
	require 'database_connect.php';
	$id=$_POST['subject_id'];
	$user=$_POST['teacher_id'];
	$sql="DELETE FROM teaching WHERE teacher_username='$user' AND teaching_subject_code='$id';";
	if ($conn->query($sql) === TRUE) {
	    


	                          
	    } else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	    
	    }
	    
	    $sql="INSERT INTO `was_teaching`(`t_username`, `t_subject_code`) VALUES ('$user','$id');";
	    if ($conn->query($sql) === TRUE) {
	    echo "Ο καθηγητής αφαιρέθηκε!";


	                          
	    } else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	    
	    }
	    $conn->close();

?>