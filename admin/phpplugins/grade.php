<?php 
 

	require 'database_connect.php';
	$username=$_SESSION["username"];	
	$sql="SELECT dm,grade from subject,attends where username='$username' AND grade>='5' and subject_code=code";
	$result = mysqli_query($conn,$sql);
	$i=-1;
	$grade = array();
	$weight = array();
	while($row = mysqli_fetch_array($result)){
		$i=$i+1;
		$grade[$i]=$row['grade'];
		// echo $grade[$i];
		if($row['dm']<=2){
			$weight[$i]=1.0;
		}elseif($row['dm']<=4){
			$weight[$i]=1.5;
		}else{
			$weight[$i]=2.0;
		}

	}
	if($i>=0){
		$total=array_sum($weight);
		
		$part=0;
		for($j=0;$j<=$i;$j++){
			$part=$part+$grade[$j]*$weight[$j];
			
		}
		$full=$part/$total;

		 echo round($full, 2);


	}else{
		echo "0";
	}
                        



                          $conn->close();

 ?>