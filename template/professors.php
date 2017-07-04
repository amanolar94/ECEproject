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
  <script type="text/javascript" src="java.js"></script>
  <style>
  #history1{
    background-color: white;
   border-radius: 8%;
  box-shadow: 10px 10px 5px #888888;

  }

  </style>
<body background="coverme.png">


<?php
 include 'navigation.php' ?>
 <br><br><br><br><br><br><br><br><br><br>
 <div class="row content">
   <div class="col-md-2 ">

   </div>
   <div class="col-md-8 " id="history1">
     <h1 style="font-style:italic">Oι Καθηγητές ανα τομέα</h1>


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
       $sql = "SELECT user.name as username,sector.name as sectorname,role,faculty_username,facultysectorid,sector_id FROM sector,user,faculty where username=faculty_username AND sector_id=facultysectorid and sector_id=2
        order by username
       ";


       $result = $conn->query($sql);

        $i=0;
       if ($result->num_rows > 0) {

           // output data of each row
           while($row = $result->fetch_assoc()) {
             if($i==0){
              echo "  <br> <br><b>". $row["sectorname"]."</b><hr>";}
              $i=1;
             echo  "  <br> <b> " . $row["username"]."</b>";





               ?>

          <div >
          <div >


          <div > </div></div>
        <?php   }
         } else {
           echo "0 results";
       }




            ?>

            <?php
       $sql = "SELECT user.name as username,sector.name as sectorname,role,faculty_username,facultysectorid,sector_id FROM sector,user,faculty where username=faculty_username AND sector_id=facultysectorid and sector_id=3
        order by username
       ";


       $result = $conn->query($sql);

        $i=0;
       if ($result->num_rows > 0) {

           // output data of each row
           while($row = $result->fetch_assoc()) {
             if($i==0){
              echo "  <br> <br><b>". $row["sectorname"]."</b><hr>";}
              $i=1;
             echo  "  <br> <b> " . $row["username"]."</b>";





               ?>

          <div >
          <div >


          <div > </div></div>
        <?php   }
         } else {
           echo "0 results";
       }




            ?>

            <?php
       $sql = "SELECT user.name as username,sector.name as sectorname,role,faculty_username,facultysectorid,sector_id FROM sector,user,faculty where username=faculty_username AND sector_id=facultysectorid and sector_id=5
        order by username
       ";


       $result = $conn->query($sql);

        $i=0;
       if ($result->num_rows > 0) {

           // output data of each row
           while($row = $result->fetch_assoc()) {
             if($i==0){
              echo "  <br> <br><b>". $row["sectorname"]."</b><hr>";}
              $i=1;
             echo  "  <br> <b> " . $row["username"]."</b>";





               ?>

          <div >
          <div >


          <div > </div></div>
        <?php   }
         } else {
           echo "0 results";
       }




            ?>
            <?php
            $sql = "SELECT user.name as username,sector.name as sectorname,role,faculty_username,facultysectorid,sector_id FROM sector,user,faculty where username=faculty_username AND sector_id=facultysectorid and sector_id=4
             order by username
            ";


            $result = $conn->query($sql);

             $i=0;
            if ($result->num_rows > 0) {

                // output data of each row
                while($row = $result->fetch_assoc()) {
                  if($i==0){
                   echo "<br><b>". $row["sectorname"]."</b><hr>";}
                   $i=1;
                  echo  "<br> <b> " . $row["username"]."</b>";





                    ?>

               <div >
               <div >


               <div > </div></div>
             <?php   }
              } else {
                echo "0 results";
            }




                 ?>




   <?php
   $conn->close();
     ?>
 </div>
 <div class="col-md-2 ">

 </div>
 </div>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="js/bootstrap.min.js"></script>
 </body>
</html>
