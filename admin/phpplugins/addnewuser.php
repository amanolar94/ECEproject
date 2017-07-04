<?php require 'database_connect.php';?>
<?php 
$mail=$_POST['mail'];
$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];
$address=$_POST['address'];
$bdate=$_POST['bdate'];
$bdate=date_create($bdate);
$bdate = date_format($bdate,"Y-m-d ");
$htel=$_POST['htel'];
$mtel=$_POST['mtel'];
$type=$_POST['type'];
if($type=='secretary'){
	$position=$_POST['position'];
	$sql="INSERT INTO user(username,password,name,bdate,address,mail,htel,mtel,role)
			 VALUES ('$username' , '$password' , '$name' ,'$bdate' , '$address' , '$mail' , '$htel' , '$mtel' , '$type');";
	if ($conn->query($sql) === TRUE) {
                       echo "New user added";
                            
                          } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                          }
	$sql="INSERT INTO secratery(secretary_username,job) VALUES ('$username','$position' )";
	if ($conn->query($sql) === TRUE) {
                       echo "New user added";
                            
                          } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                          }
}elseif($type=='faculty'){
	$type='teacher';
	$title=$_POST['title'];
	$tomeas=$_POST['tomeas'];
	$sql="INSERT INTO user(username,password,name,bdate,address,mail,htel,mtel,role)
	 VALUES ('$username' , '$password' , '$name' ,'$bdate' , '$address' , '$mail' , '$htel' , '$mtel' , '$type');"; 
	 if ($conn->query($sql) === TRUE) {
                       echo "New user added";
                            
                          } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                          } 
	$sql="INSERT INTO faculty(faculty_username,title,facultysectorid)
	VALUES ('$username','$title','$tomeas')";
	if ($conn->query($sql) === TRUE) {
                       echo "New user added";
                            
                          } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                          }
}else{
	$sql="INSERT INTO user(username,password,name,bdate,address,mail,htel,mtel,role)
	VALUES ('$username' , '$password' , '$name' ,'$bdate' , '$address' , '$mail' , '$htel' , '$mtel' , '$type');";
	if ($conn->query($sql) === TRUE) {
                       echo "New user added";
                            
                          } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                          } 
	$sql="INSERT INTO student(student_username) VALUES ('$username')";
	if ($conn->query($sql) === TRUE) {
                       echo "New user added";
                            
                          } else {
                              echo "Error: " . $sql . "<br>" . $conn->error;
                          }


}

$conn->close();


 ?>