<?php 
	require 'database_connect.php';
	$sql="INSERT INTO tags(tags_name,tag_date) VALUES ('$_POST[tag]', CURRENT_DATE)";
                        if ($conn->query($sql) === TRUE) {
                          //application id
                          echo "success";
                            
                          } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                          }




                          $conn->close();

?>