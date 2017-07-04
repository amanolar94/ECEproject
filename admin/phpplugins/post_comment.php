<?php 
	require 'database_connect.php';
	$comment=$_POST['comment'];
	$subject=$_POST['subject'];
	$user=$_POST['user'];
	$sql="INSERT INTO `comment`(`comment_username`, `subject_code`, `content`,`timedate`)
	VALUES ('$user','$subject','$comment', CURRENT_TIMESTAMP);
";
                        if ($conn->query($sql) === TRUE) {
                          //application id
                          echo "Comment saved";
                            
                          } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                          }




                          $conn->close();

?>