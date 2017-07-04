<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecedatabase";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // Change character set to utf8
    mysqli_set_charset($conn,"utf8");
    $sql = "SELECT * FROM user WHERE id='$_POST[id]'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo 
            "<br> Όνομα: " . $row["name"].
            "<br> Επώνυμο " . $row["username"]."<br>";
        }
      } else {
        echo "0 results";
    }










$conn->close();
 ?>
