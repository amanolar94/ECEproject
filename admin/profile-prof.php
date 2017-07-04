<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Προφίλ</title>

    <!-- Bootstrap CSS -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">


    <link href="css/admin_body.css" rel="stylesheet">
      <link href="css/admin_side.css" rel="stylesheet">
      <link href="css/announcements.css" rel="stylesheet">
      <link href="css/settings.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container-fluid display-table">
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
                <?php

                require 'phpplugins/database_connect.php';?>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">

            <div class="well well-sm">
                <div class="row">
                  <?php  $online=$_SESSION['username'];
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
                            <p>Ώρες Γραφείου:
                            <?php  $sql = "SELECT hours FROM faculty where faculty_username='$online' ";



                              $result = $conn->query($sql);
                              if ($result->num_rows > 0) {


                                  // output data of each row
                                  while($row = $result->fetch_assoc()) {
                                    echo $row["hours"];





                            }}?></p>

                            <form method="POST" action="profile-prof.php" enctype="multipart/form-data">
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
                              <meta http-equiv="refresh" content= "0;URL=profile-prof.php" />
                              <?php
                             }


                           } } ?>

                            </div>
                            <button ><a href="edit_profile.php">EDIT</a></button>




                        <!-- Split button -->

                    </div>
                </div>

            </div>
            <div class="well ">
                <div class="row">
                  <h1 style="font-style:italic">Biography</h1>
                  <?php  $sql = "SELECT bio_1,bio_2,bio_3 FROM faculty where faculty_username='$online' ";



                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {


                        // output data of each row
                        while($row = $result->fetch_assoc()) {






                  ?>

                  <h4 ><span class="glyphicon glyphicon-share-alt">Εκπαίδευση/Εκπαιδευτικά ιδρύματα που έχει τελειώσει</h4>
                     <?php echo $row["bio_1"];?>



                     <h4 ><span class="glyphicon glyphicon-share-alt">Πανεπιστημιακές θέσεις του παρόντος  καθώς και του παρελθόντος</h4>
                       <?php echo $row["bio_2"];?>

                        <h4 ><span class="glyphicon glyphicon-share-alt">Σπουδαιότερα έργα στην καριέρα του διδάσκοντα </h4>
                          <?php echo $row["bio_3"];?>



                </div>
              </div>


              <?php }}$conn->close();?>
            </div>
        </div>
    </div>
</div>




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
