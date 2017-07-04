<?php 
	
	$sql="SELECT announcement.announcement_id,announcement.title,announcement.content FROM announcement WHERE announcement_id= $idannouncement;";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)){
		$announcement_title= $row['title'];
		$announcement_content= $row['content'];

	}

	
                
                        
?>