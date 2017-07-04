<?php require 'phpplugins/database_connect.php';?>
<?php
                
                  
                  
                  if( (strlen($_POST["announcement"])>0) and isset($_POST["tags"]) and (strlen($_POST['title'])>0)){
                        $sql="INSERT INTO announcement(title,content) VALUES ('$_POST[title]', '$_POST[announcement]')";
                        if ($conn->query($sql) === TRUE) {
                          //application id
                          $last_id = mysqli_insert_id($conn);
                            
                          } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                          }

                        
                        foreach($_POST["tags"] as $tagsid) {
                           $sql="INSERT INTO post(announcementid,secretaryusername,tagid,post_timedate) VALUES ('$last_id', 'admin', '$tagsid',CURRENT_TIMESTAMP)";
                           if ($conn->query($sql) === TRUE) {

                          
                          
                            
                          } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                          }
                        } 
                        
                  }

                  
                  
                  $conn->close();

                ?>