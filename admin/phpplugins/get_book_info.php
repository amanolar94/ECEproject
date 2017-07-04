<?php 
	require 'database_connect.php';
	$code=$_POST['code'];
	$sql="SELECT title,desciption,writer,issue_date,publication_number,publisher,frontpage FROM book WHERE isbn='$code'; ";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)){
		$info[0]=$code;
	    $info[1]=$row['title'];
	    $info[2]=$row['desciption'];
	    $info[3]=$row['writer'];
	    $info[4]=$row['issue_date'];
	    $info[5]=$row['publication_number'];
	    $info[6]=$row['publisher'];
	    $info[7]=$row['frontpage'];

		
		
	}
	echo json_encode($info);

	
          $conn->close();      
                        
?>