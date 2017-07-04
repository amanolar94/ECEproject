

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
  #history{
    background-color: white;
   border-radius: 5%;
  box-shadow: 10px 10px 5px #888888;

  }
  pre {
  background-color: white;
  white-space: pre-line;
  border: none;
 }

  </style>
<body background="coverme.png">


<?php
 include 'navigation.php' ?>

 
 <br><br><br><br><br><br><br><br><br><br>
 <div class="row content">
   <div class="col-md-2 ">

   </div>
   <div class="col-md-8 " id="history">
       <h1 style="font-style:italic">Ιστορία</h1>


     <?php

       $myfile = fopen("files/history.txt", "r") or die("Unable to open file!");
       $page=fread($myfile,filesize("files/history.txt"));

       echo $page;
       fclose($myfile);
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
