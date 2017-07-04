<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];

$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ecedatabase";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    // Change character set to utf8
    mysqli_set_charset($conn,"utf8");

    mysqli_select_db($conn,"ajax_demo");
    $sql="SELECT announcement_id,title,content,post_timedate,post_status
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

echo "<table>";
//Get tag names for each announcement!
while($row = mysqli_fetch_array($result)) {
    $sql="  SELECT tags_name 
            from tags,announcement,post
            where announcement.announcement_id='$row[announcement_id]'
            and announcement.announcement_id=post.announcementid
            and post.tagid=tags.tags_id;";
    $result1 = mysqli_query($conn,$sql);
    echo "<tr>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td>" . $row['content'] . "</td>";
    echo "<td>" . $row['post_timedate'] . "</td>";
    echo "<td>" . $row['post_status'] . "</td>";
    while ($row1=mysqli_fetch_array($result1)) {
        echo "<td>".$row1['tags_name']. "</td>";
    }                      
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>