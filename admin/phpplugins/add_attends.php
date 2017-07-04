<?php 
	require 'database_connect.php';
	$code=$_POST['code'];
	$user=$_POST['user'];
	$sql="INSERT INTO `attends`(`username`, `subject_code`) VALUES ('$user','$code');";
                        if ($conn->query($sql) === TRUE) {
                          //application id
                          echo "success";
                            
                          } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                          }




                          $conn->close();

?>