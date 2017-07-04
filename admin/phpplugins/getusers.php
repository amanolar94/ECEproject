<?php 
require 'database_connect.php';


$sql="SELECT username,name,mail,mtel FROM user WHERE role='$_POST[user]' ";
$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)) {
		echo '<form id="user'.$row['username'].'" >
				<input type="radio" name="username" id="username" value="'.$row['username'].'" checked="checked" style="display: none"></input>
                <div class="row row-eq-height active usercontent">
                  <div class="col-sm-2 col-md-2 hidden-xs">'.$row['username'].'</div>
                  <div class="col-xs-6 col-sm-4 col-md-4">'.$row['name'].'</div>
                  <div class="col-xs-6 col-sm-3 col-md-3">'.$row['mail'].'</div>
                  <div class="col-sm-3 col-md-3 hidden-xs">'.$row['mtel'].'</div>
                </div></form>';
	};





$conn->close();
?>