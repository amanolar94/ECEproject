
<?php

    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "ecedatabase";
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");
    $announcements_per_page = 5;
    // Create connection
    
    mysqli_set_charset($conn,"utf8");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    // Change character set to utf8
    
    // $sql="GRANT ALL PRIVILEGES ON ecedatabase. * TO 'root'@'127.0.0.1';";
    // if ($conn->query($sql) === TRUE) {
    // //application id
    //     $last_id = mysqli_insert_id($conn);
                        
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }




   
    
  


  





 ?>