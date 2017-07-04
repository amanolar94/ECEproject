
	<?php 
	require 'database_connect.php';
	$sql="SELECT tagid,COUNT(tagid) as tagCount,tags_name,tag_date,DATEDIFF(CURRENT_DATE,tag_date) as created
	 FROM tags,post
	 WHERE tagid=tags_id 
	 GROUP BY tagid 
	 HAVING COUNT(tagid)>0 
	 ORDER BY tagid;";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)) {
		echo 	    '<form id="tag'.$row['tagid'].'" >              
                  
                  <div class="row row-eq-height tagcontent">
                    <div class="col-xs-4 col-sm-3 col-md-3">'.$row['tags_name'].'</div>
                    <div class="col-xs-2 col-sm-3 col-md-3"><span class="label label-success">In use</span></div>';
                    if ($row['created']==0){
                    	echo '<div class="col-xs-3 col-sm-3 col-md-3">Today</div>';
                    }elseif($row['created']==1){
                    	echo '<div class="col-xs-3 col-sm-3 col-md-3">'.$row['created'].' day ago</div>';
                    }else{
                    	echo '<div class="col-xs-3 col-sm-3 col-md-3">'.$row['created'].' days ago</div>';

                    }

         echo           '<div class="col-xs-3 col-sm-3 col-md-3">
                        <button type="button" class="btn btn-xs btn-warning editButton">Edit</button>
                        <button type="button" class="btn btn-xs btn-danger disabled">Delete</button>

                    </div>
                  </div>
                  <div class="row row-eq-height edit_tag" id="edit_tag'.$row['tagid'].'" >
                    <div class="col-md-12">                    
                      <span>
                        <textarea class="pull-left" name="changed_tag" placeholder="Νέο Όνομα" rows="1" cols="12" ></textarea>
                        <button  type="button" class="btn btn-xs btn-success pull-left edit_save" value="'.$row['tagid'].'" style="margin-left: 5px" >Save</button>
                        <input type="radio" name="edit_save" id="edit_save" value="'.$row['tagid'].'" checked="checked" style="display: none"></input>
                        <button  type="button" class="btn btn-xs btn-warning pull-left edit_abort" style="margin-left: 5px" >Abort</button>
                      </span>                
                    </div>
                  </div>
                
                  
                </form>';
    
                        
                   
                    
                                   
                    
                        
}
	$sql="SELECT tags_id,tags_name,tag_date,DATEDIFF(CURRENT_DATE,tag_date) as created FROM tags WHERE tags_id NOT IN (SELECT tagid from post)";
	$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)) {
		echo 	    '<form  id="tag'.$row['tags_id'].'" >              
                  
                  <div class="row row-eq-height tagcontent">
                    <div class="col-xs-4 col-sm-3 col-md-3">'.$row['tags_name'].'</div>
                    <div class="col-xs-2 col-sm-3 col-md-3"><span class="label label-danger">Not use</span></div>';
                    if ($row['created']==0){
                    	echo '<div class="col-xs-3 col-sm-3 col-md-3">Today</div>';
                    }elseif($row['created']==1){
                    	echo '<div class="col-xs-3 col-sm-3 col-md-3">'.$row['created'].' day ago</div>';
                    }else{
                    	echo '<div class="col-xs-3 col-sm-3 col-md-3">'.$row['created'].' days ago</div>';

                    }

         echo           '<div class="col-xs-3 col-sm-3 col-md-3">
                        <button type="button" class="btn btn-xs btn-warning editButton">Edit</button>
                        <button type="button" name="delete_tag" class="btn btn-xs btn-danger delete_tag " value="'.$row['tags_id'].'">Delete</button>
                        <input type="radio" name="tagID" id="tagID" value="'.$row['tags_id'].'" checked="checked" style="display: none"></input>
                    </div>
                  </div>
                  <div class="row row-eq-height edit_tag" id="edit_tag'.$row['tags_id'].'" >
                    <div class="col-md-12">                    
                      <span>
                        <textarea class="pull-left" name="changed_tag" placeholder="Νέο Όνομα" rows="1" cols="12" ></textarea>
                        <button  type="button" name="edit_save" class="btn btn-xs btn-success pull-left edit_save" value="'.$row['tags_id'].'" style="margin-left: 5px" >Save</button>
                        <input type="radio" name="edit_save" id="edit_save" value="'.$row['tags_id'].'" checked="checked" style="display: none"></input>
                        <button  type="button" class="btn btn-xs btn-warning pull-left edit_abort" style="margin-left: 5px" >Abort</button>
                      </span>                
                    </div>
                  </div>
                
                  
                </form>';
    
                        
                   
                    
                                   
                    
                        
}
	
	    $conn->close();
 ?>