<?php 
	require 'database_connect.php';
	$code=$_POST['code'];
	$sql="SELECT isbn,title FROM book,subjectbook WHERE subject_code='$code' AND book_isbn=isbn ";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)){
		
		echo '<div class="btn btn-info book" id="'.$row['isbn'].'">'.$row['title'].'</div>&nbsp;';
	}

	
          $conn->close();      
                        
?>