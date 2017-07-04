<?php require 'database_connect.php';?>
<?php
                
                  
                  
                  if( (strlen($_POST["announcement"])>0)and (strlen($_POST['title'])>0)){
                        $sql="UPDATE announcement SET title='$_POST[title]',content='$_POST[announcement]' WHERE announcement_id='$_POST[id_announcement]';";
                        if ($conn->query($sql) === TRUE) {
                          //application id
                          $last_id = mysqli_insert_id($conn);
                            
                          } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                          }

                        
                        
                        
                  }

                  
                  


                ?>