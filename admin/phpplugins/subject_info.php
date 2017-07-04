<?php 
require 'database_connect.php';
$code=$_POST['code'];


$sql="SELECT title, description, class_name FROM subject,class,teaching where code='$code' AND teaching_subject_code=code AND id=class_id LIMIT 1;";
$result = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_array($result)) {
    
   
    $info[0]=$row['title'];
    $info[1]=$row['description'];
    $info[2]=$row['class_name'];
    $sql2="SELECT DISTINCT name FROM user,faculty,teaching WHERE teaching_subject_code='$code' AND teacher_username=faculty_username AND faculty_username=username;";
    $result2 = mysqli_query($conn,$sql2);
    $i=3;
    while($row2 = mysqli_fetch_array($result2)) {

      $info[$i]=$row2['name'];
      $i=$i+1;


  };

  };
   echo json_encode($info);

  





$conn->close();
?>