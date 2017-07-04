<?php
if(!isset($_SESSION))
      {
        session_start();
      }
    require 'database_connect.php';


    // --------------------
        //sanitize post value
    if(isset($_POST["page"])){
        $page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
        if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
    }else{
        $page_number = 1;
    }

    //get current starting point of records
    $position = (($page_number-1) * $announcements_per_page);

    




    // ------------


    
    $sql="SELECT * FROM announcement ORDER BY announcement_id DESC LIMIT $position, $announcements_per_page
            ";
    $result = mysqli_query($conn,$sql);


//Get tag names for each announcement

while($row = mysqli_fetch_array($result)) {
    $sql="  SELECT tags_name,post_timedate 
            from tags,announcement,post
            where announcement.announcement_id='$row[announcement_id]'
            and announcement.announcement_id=post.announcementid
            and post.tagid=tags.tags_id;";
    $result1 = mysqli_query($conn,$sql);
    echo '<div class="row article-row jumbotron" >';
    echo '<div class="col-xs-12 col-sm-7 col-md-9 article-title "><b>'.$row['announcement_id'].'&nbsp;</b><h2><b>'.$row['title'].'</b></h2><br>'.$row['content']. '<br>Ετικέτες:&nbsp';
    while ($row1=mysqli_fetch_array($result1)) {
        echo '<b>' .$row1['tags_name']. '</b>&nbsp';
        $posttimedate=$row1['post_timedate'];
    }     
    echo                '<br><small>Created&nbsp&nbsp'.$posttimedate.'</small></div>';          
    echo '<div class="col-xs-10 col-sm-5 col-md-3 col-xs-offset-2 col-sm-offset-0 col-md-offset-0 col-lg-offset-0  ">';
    echo                   '<div class="article-actions">';
    
    echo '<span>';
    echo '<form method="post" action="edit_announcement.php"  class="pull-left" id="deleteform'.$row['announcement_id'].'">';
    echo '<input type="radio" name="id_announcement" id="id_announcement" value="'.$row['announcement_id'].'" checked="checked" style="display: none"></input>';
    if(isset($_SESSION["admin"])){
        echo '<button class="btn btn-xs btn-default glyphicon glyphicon-folder-open" type="submit" name="submit1" value="submit1"   role="button" aria-hidden="true">&nbsp;View/Edit</button>';
        echo '<span class="btn btn-xs btn-default glyphicon glyphicon-remove delete" type="button" name="delete" value="delete" id="delete'.$row['announcement_id'].'" role="button" aria-hidden="true">&nbsp;Delete</span>';}
        echo '</form></span></div></div></div>';
    
                         
                        
                   
                    
                                   
                    
                        
}

mysqli_close($conn);
?>