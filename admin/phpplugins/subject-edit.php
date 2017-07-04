<?php 
require 'database_connect.php';
$code=$_POST['code'];
$info=array();


$sql="SELECT title, description,dm,ects,teach_year,semester,name,webpage,eclass_link,id,class_name FROM subject,teaching,class,sector where teaching_subject_code='$code' and teaching_subject_code=code AND id=class_id and subjectsectorid=sector_id LIMIT 1";
$result = mysqli_query($conn,$sql);
  while($row = mysqli_fetch_array($result)) {
    
    $info[0]=$code;
    $info[1]=$row['title'];
    $info[2]=$row['description'];
    $info[3]=$row['dm'];
    $info[4]=$row['ects'];
    $info[5]=$row['teach_year'];
    if($row['semester']=='xeimerino'){
      $info[6]="Χειμερινό";
    }else{
      $info[6]="Εαρινό";
    }
    $info[7]=$row['webpage'];
    $info[8]=$row['eclass_link'];
    $info[9]=$row['id'];
    $info[10]=$row['name'];
    $class[0]=$row['class_name'];
    $sql2="SELECT DISTINCT name,username FROM user,faculty,teaching WHERE teaching_subject_code='$code' AND teacher_username=faculty_username AND faculty_username=username";
    $result2 = mysqli_query($conn,$sql2);
    $i=-1;
    while($row2 = mysqli_fetch_array($result2)) {
      $i=$i+1;
      $teacher[$i]=$row2['name'];
      $teacher_username[$i]=$row2['username'];
      


  };
  $teacher_count=$i;
  $sql2="SELECT DISTINCT name FROM user,faculty,was_teaching WHERE t_subject_code='$code' AND t_username=faculty_username AND faculty_username=username";
    $result2 = mysqli_query($conn,$sql2);
    $i=-1;
    while($row2 = mysqli_fetch_array($result2)) {
      $i=$i+1;
      $past_teacher[$i]=$row2['name'];
      
      


  };
  $past_teacher_count=$i;
  if($past_teacher_count=='-1'){
    $past_teacher=0;
  }
  

  $sql2="SELECT teaching_id, teaching_day,DATE_FORMAT(beginning_time, '%H:%i') as beginning_time ,DATE_FORMAT(end_time, '%H:%i') as end_time FROM subject,class,teaching,user where code='$code' AND code=teaching_subject_code AND id=class_id AND teacher_username=username;";
    $result2 = mysqli_query($conn,$sql2);
    $i=-1;
    while($row2 = mysqli_fetch_array($result2)) {
      $i=$i+1;
      $teachingid[$i]=$row2['teaching_id'];
      $teachingday[$i]=$row2['teaching_day'];
      $beginningtime[$i]=$row2['beginning_time'];
      $endtime[$i]=$row2['end_time'];
      


  };
  $schedule_count=$i;


  };
  $sql2="SELECT COUNT(*) as comments FROM comment WHERE subject_code='$code' AND approved='1';";
                  $result2 = mysqli_query($conn,$sql2);
                  while($row2 = mysqli_fetch_array($result2)) {
                    $info[11]=$row2['comments'];
                  }
  $sql2="SELECT AVG(grade) as mean FROM attends WHERE subject_code='$code' AND grade>='5';";
                  $result2 = mysqli_query($conn,$sql2);
                  while($row2 = mysqli_fetch_array($result2)) {

                    $info[12]=round($row2['mean'], 2);
                  }
  $sql2="SELECT AVG(rating) as mean FROM attends WHERE subject_code='$code' AND rating>='0';";
                  $result2 = mysqli_query($conn,$sql2);
                  while($row2 = mysqli_fetch_array($result2)) {

                    $info[13]=round($row2['mean'], 2);
                  }
  $response=array(
    'subject_info' => $info,
    'teacher_count' =>$teacher_count,
    'teachers' =>$teacher,
    'teacher_username' =>$teacher_username,
    'schedule_count' =>$schedule_count,
    'teaching_id' =>$teachingid,
    'teaching_day' =>$teachingday,
    'start_time' =>$beginningtime,
    'end_time' =>$endtime,
    'past_teacher_count' =>$past_teacher_count,
    'past_teachers' =>$past_teacher,
    'class' =>$class
    );

  echo json_encode($response);
  
  





$conn->close();
?>