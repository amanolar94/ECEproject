<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
$q = $_GET['q'];

    
    require "phpplugins/database_connect.php";
    

    
    $sql="SELECT announcement_id,title,content,post_timedate
            FROM announcement,post,tags
            WHERE 
            (announcement.title LIKE '%$q%'
            OR
            announcement.content LIKE '%$q%'
            OR
            tags.tags_name LIKE '%$q%')
            AND
            announcement.announcement_id=post.announcementid
            AND 
            tags.tags_id=post.tagid
            GROUP BY post.announcementid
            ORDER BY post_timedate DESC
            ";
    $result = mysqli_query($conn,$sql);


//Get tag names for each announcement
while($row = mysqli_fetch_array($result)) {
    $sql="  SELECT tags_name 
            from tags,announcement,post
            where announcement.announcement_id='$row[announcement_id]'
            and announcement.announcement_id=post.announcementid
            and post.tagid=tags.tags_id;";
    $result1 = mysqli_query($conn,$sql);
    echo '<div class="row article-row jumbotron" >';
    echo '<div class="col-xs-12 col-sm-7 col-md-9 article-title "><b>'.$row['announcement_id'].'&nbsp;</b><h2><b>'.$row['title'].'</b></h2><br>'.$row['content']. '<br>Ετικέτες:&nbsp';
    while ($row1=mysqli_fetch_array($result1)) {
        echo '<b>' .$row1['tags_name']. '</b>&nbsp';
    }     
    echo                '<br><small>Created&nbsp&nbsp'.$row['post_timedate'].'</small></div>';          
    echo '<div class="col-xs-10 col-sm-5 col-md-3 col-xs-offset-2 col-sm-offset-0 col-md-offset-0 col-lg-offset-0  ">';
    echo                   '<div class="article-actions">';
    
    echo '<span>';
    echo '<form method="post" action="edit_announcement.php"  class="pull-left" id="deleteform'.$row['announcement_id'].'">';
    echo '<input type="radio" name="id_announcement" id="id_announcement" value="'.$row['announcement_id'].'" checked="checked" style="display: none"></input>';
    if (isset($_SESSION['admin'])){ echo '<button class="btn btn-xs btn-default glyphicon glyphicon-folder-open" type="submit" name="submit1" value="submit1"   role="button" aria-hidden="true">&nbsp;View/Edit</button>';}

       if (isset($_SESSION['admin'])){ echo '<span class="btn btn-xs btn-default glyphicon glyphicon-remove delete" type="button" name="delete" value="delete" id="delete'.$row['announcement_id'].'" role="button" aria-hidden="true">&nbsp;Delete</span>';}
       echo '</form></span></div></div></div>';
    
                         
                        
                        
                    
                                   
                    
                        
                        
                        
                    
                    
   
    
}

mysqli_close($conn);
?>
</body>
</html>