<?php
if(!isset($_SESSION))
      {
        session_start();
      }

require 'phpplugins/database_connect.php';
  $online=$_SESSION["username"];





 ?>

<?php
$online=$_SESSION["username"];
if(isset($_SESSION['teacher'])){
$newhours=$_POST['newhours'];
$newname=$_POST['newname'];
$bio1=$_POST['bio1'];
$bio2=$_POST['bio2'];
$bio3=$_POST['bio3'];
$times1=$_POST['times1'];
$times2=$_POST['times2'];
$times3=$_POST['times3'];

if($times1!=0){
$sql = "UPDATE faculty SET bio_1='$bio1' where faculty_username='$online' ";



  $result = $conn->query($sql);}

  if($times2!=0){
  $sql = "UPDATE faculty SET bio_2='$bio2' where faculty_username='$online' ";



    $result = $conn->query($sql);}

    if($times3!=0){
    $sql = "UPDATE faculty SET bio_3='$bio3' where faculty_username='$online' ";



      $result = $conn->query($sql);}

if($newhours!=""){

$sql = "UPDATE faculty SET hours='$newhours' where faculty_username='$online' ";



  $result = $conn->query($sql);}
if($newname!=''){
  $sql="UPDATE user SET name='$newname' where username='$online'";
  $result = $conn->query($sql);
}}
if(isset($_SESSION["student"])){
  $online=$_SESSION["username"];
  $newname=$_POST["newname"];
  $code=$_POST["code"];
  $newgrade=$_POST["newgrade"];
  $attend=$_POST["sendattend"];
  $rating=$_POST["rat"];

  if($newgrade!=""){
  $sql = "UPDATE attends SET grade='$newgrade'  where username='$online' and subject_code='$code' ";



    $result = $conn->query($sql);}
    if($newname!=""){
  $sql = "UPDATE user SET name='$newname'  where username='$online'  ";



    $result = $conn->query($sql);}
    if($attend!=""){
    $sql = "UPDATE attends SET on_schedule='$attend'  where username='$online' and subject_code='$code' ";



      $result = $conn->query($sql);}
      if($rating!=""){

      $sql = "UPDATE attends SET rating='$rating'  where username='$online' and subject_code='$code' ";



        $result = $conn->query($sql);}





    mysqli_close($conn);}

 ?>
