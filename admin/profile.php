
<!DOCTYPE html>

<html >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Προφίλ</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/admin_body.css" rel="stylesheet">
    <link href="css/admin_side.css" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script src="../js/bootstrap.min.js"></script>
    <script src="js/admin.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container display-table">
        <div class="row display-table-row">
          <!-- SIDE MENU!!!! ------>
        <?php include 'sidemenu.php';?>
        <!-- MAIN CONTENT------>
        <div class="col-md-10 col-sm-11  display-table-cell vertical-align-top" >
          <div class="row">
          <!--HEADER!!!!-->
            <?php include 'header.php';?>
            </div>

            <div id="content">
              <div class="container">
                <div style="display:none">

                <?php
                if(!isset($_SESSION))
                      {
                        session_start();
                      }
                      if(isset($_SESSION["student"])){
                  //  ?></div> <?php

               require 'phpplugins/database_connect.php';?>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 pull-left">

            <div class="well well-sm">
                <div class="row">

                  <?php  $online=$_SESSION["username"];
                  $sql = "SELECT * FROM user where username='$online'";



                    $result = $conn->query($sql);


                    if ($result->num_rows > 0) {

                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          $image_name=$row["image_name"];
                          if($image_name==''){

                         ?>
                    <div class="col-sm-6 col-md-4">
                        <img src="http://placehold.it/150x250" alt="" class="img-rounded img-responsive" />

                    </div>
                    <?php }
                      else{ ?>

                        <div class="col-sm-6 col-md-4">
                            <img src="<?php echo $row["image_path"] ; ?><?php echo $row["image_name"] ;?>" alt="" class="img-rounded img-responsive" />

                        </div>

                    <?php  } ?>

                    <?php }} ;?>
                    <?php  $sql = "SELECT name,mail,address,bdate FROM user where username='$online'";


                      $result = $conn->query($sql);


                      if ($result->num_rows > 0) {

                          // output data of each row
                          while($row = $result->fetch_assoc()) {

                           ?>
                    <div class="col-sm-6 col-md-8">

                        <h4><?php echo "<br><b>". $row["name"]."</b><hr>";  ?>
                            </h4>
                        <small><cite title="San Francisco, USA"><?php echo "<b>". $row["address"]."</b>";  ?> <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <p class="glyphicon glyphicon-envelope"></p><?php echo "<b>". $row["mail"]."</b>";  ?>
                            <br/>
                            <p class="glyphicon glyphicon-gift"></p><?php echo "<b>". $row["bdate"]."</b>";  ?>
                            <br/>
                            <?php } }; ?>
                            <p>Κατάσταση:
                            <?php  $sql = "SELECT student_username,studentsectorid,sector.name as sectorname FROM student,sector where student_username='$online' and studentsectorid=sector_id";



                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {


                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {
                                    if($row["studentsectorid"]!=6){
                                      echo "Προπτυχιακός-".$row["sectorname"];
                                    }
                                    elseif($row["studentsectorid"]==6){
                                      echo "Μεταπτυχιακός";
                                    }





                            }}?></p>
                            <form method="POST" action="profile.php" enctype="multipart/form-data">
                              <input type="file" name="my_image">
                              <input type="submit" name="submit_image" value="Upload_Image">
                            </form>

                        </p>
                        <div style="display:none" >
                        <?php
                           if(isset($_POST["submit_image"])){
                           $sql = "SELECT name,username FROM user where username='$online'";
                           $result = $conn->query($sql);
                           if ($result->num_rows > 0) {

                               // output data of each row
                               while($row = $result->fetch_assoc()) {
                                 }}

                           $upload_image=$_FILES["my_image"]["name"];
                           $folder="img/";

                          if(strlen($upload_image)>0){
                           move_uploaded_file($_FILES["my_image"]["tmp_name"],"$folder".$_FILES["my_image"]["name"]);
                           $sql1="UPDATE  user SET image_name='$upload_image',image_path='$folder'  WHERE username='$online'; ";
                           $var=mysqli_query($conn,$sql1);
                            if ($result->num_rows > 0) {
                              ?>
                              <meta http-equiv="refresh" content= "0;URL=profile.php" />
                             <?php
                            }


                          } }


                            ?>
                            </div>





                        <!-- Split button -->

                    </div>
                </div>
                <div class="well">
                    <div class="row">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>Μάθημα</td>
                                <th>Βαθμός</td>
                              </tr>
                            </thead>

                              <tbody>
                  <?php
                  $sql = "SELECT title,grade  FROM subject,attends WHERE username='$online' and code=subject_code  ";

                                                $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {

                                                    // output data of each row
                                                    while($row = $result->fetch_assoc()) {

                                                      $title=$row["title"];
                                                      $grade=$row["grade"];
                                                   echo "<tr><td> ".$title."</td><td>".$grade."</td></tr>";


                                                    }}?>
                                    <button ><a href="edit_profile.php">EDIT</a></button>


                 </table>
               </tbody>
                </div>
              </div>


            </div>
            </div>
        <div class="col-xs-6 col-sm-6 col-md-6 pull-right">
        <h2 style="text-align: center;">Μέσος όρος</h2> <br>
        <div class="btn btn-primary btn-lg" style="margin-left: 45%"><?php include 'phpplugins/grade.php' ?></div><br><br>
        <h2 style="text-align: center;">Περασμένα μαθήματα</h2> <br>
        <div class="btn btn-success btn-lg" style="margin-left: 48%"><?php include 'phpplugins/passed.php' ?></div><br><br>
        <h2 style="text-align: center;">Χρωστούμενα μαθήματα</h2> <br>
        <div class="btn btn-danger btn-lg" style="margin-left: 48%"><?php include 'phpplugins/topass.php' ?></div>
        </div>
    </div>
</div>
<?php
}else{ ?> <script>alert("you dont have access here");</script><?php

}


  ?>


            <div class="row">
              <footer id="adminfooter" class="clearfix">
                <div class="pull-left">
                  <b>Copyright </b>&copy; 2015
                </div>
                <div class="pull-right">
                  admin system
                </div>
              </footer>
            </div>

          </div>
        </div>

    </div>
  </div>

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="js/admin.js"></script>
  </body>
</html>
