<?php 
	require 'database_connect.php';
	$teacher = $_POST['teachers'];
    $start = $_POST['start-time'];
    $end = $_POST['end-time'];
    $classid = $_POST['class'];
    $day = $_POST['day'];
    $code = $_POST['code'];

	$sql="INSERT INTO `teaching`(`teacher_username`, `class_id`, `teaching_subject_code`, `teaching_day`, `beginning_time`, `end_time`)
	VALUES ('$teacher','$classid','$code','$day','$start','$end');";
                        if ($conn->query($sql) === TRUE) {
                          
                          echo "success";
                            
                          } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                          }
   	$sql="DELETE FROM was_teaching WHERE t_username='$teacher' and t_subject_code='$code';";
                        if ($conn->query($sql) === TRUE) {
                          
                          echo "";
                            
                          } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                          }




                          $conn->close();

?>