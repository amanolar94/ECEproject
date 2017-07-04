
<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href="css/customcss.css" rel="stylesheet">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://use.fontawesome.com/484df5253e.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>

  <style>
  #history1{
    background-color: white;
   border-radius: 8%;
  box-shadow: 10px 10px 5px #888888;

  }

  </style>
<body background="giphy.gif">


<?php
 include 'navigation.php' ?>
 <br><br><br><br><br><br><br><br><br><br>
 <div class="row content">
   <div class="col-md-2 ">

   </div>
   <div class="col-md-8 " id="history1">
     <form method="POST" action="profile.php" enctype="multipart/form-data">
       <input type="file" name="my_image">
       <input type="submit" name="sumbit_image" value="Upload">
     </form>


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
       mysqli_set_charset($conn,"utf8"); ?>
       <?php
          $upload_image=$_FILES["my_image"]["name"];
          $folder="img/";
          move_uploaded_file($_FILES["my_image"]["tmp_name"],"$folder".$_FILES["my_image"]["name"]);
          $sql=$conn->prepare("INSERT INTO image (image_name,image_path) VALUES('$upload_image','$folder'); ");
          $sql->execute();



               ?>

      <div>




      </div>







   <?php
   $conn->close();
     ?>

 <div class="col-md-2 ">
 </div>
 </div>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="js/bootstrap.min.js"></script>
 </body>
</html>
