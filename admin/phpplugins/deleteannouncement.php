<?php require 'database_connect.php';?>
<?php
      
     
                  	
                  	
	                  $sql1="DELETE FROM post WHERE announcementid ='$_POST[id_announcement]';";
	                        if ($conn->query($sql1) === TRUE) {
	                          echo "Success Delete!";
	                            
	                          } else {
	                              echo "Error: " . $sql1 . "<br>" . $conn->error;
	                          }
					$sql2="DELETE FROM announcement WHERE announcement_id ='$_POST[id_announcement]';";
					                        if ($conn->query($sql2) === TRUE) {
					                          //application id
					                          echo "Success Delete!";
					                            
					                          } else {
					                              echo "Error: " . $sql1 . "<br>" . $conn->error;
					                          }


					                          							                                   
                  $conn->close();

                  
                  


                ?>