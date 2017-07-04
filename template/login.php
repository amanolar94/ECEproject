<?php

/* <a href="web/viewer.html?file=New-Doc.pdf">View PDF</a> */
$servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ecedatabase";
  $i=0;
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  // Change character set to utf8
  mysqli_set_charset($conn,"utf8");


session_start();

  if(isset($_POST["login"])){
  //  include_once( "db.php");
    $username=strip_tags($_POST["username"]);
    $password=strip_tags($_POST["password"]);

    $username=stripcslashes($username);
    $password=stripcslashes($password);

?><div style="display:none"> <?php
    $username=mysql_real_escape_string($username);
    $password=mysql_real_escape_string($password); ?></div> <?php

    $sql="SELECT * FROM user WHERE username='$username' LIMIT 1";
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($query);
    $role=$row["role"];
    $db_pass=$row["password"];

    if($password==$db_pass){
      $_SESSION["username"]=$username;
      $_SESSION['loggedin_time'] = time();
      $_SESSION["login"]=1;
      if($role=='secretary'){
      $_SESSION["admin"]=1;


      require 'index.php';}
      elseif ($role=='teacher') {
        $_SESSION["teacher"]=1;

        require 'index.php';

      }elseif ($role=='student') {

        $_SESSION["student"]=1;


        require 'index.php';
      }

    }else{  require 'index.php';
      ?>
      <script> alert("wrong password nigga");</script><?php

    }




  } ?>
