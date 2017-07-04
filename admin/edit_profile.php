<!DOCTYPE html>

<html >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Επεξεργασία προφίλ</title>

    <!-- Bootstrap CSS -->


        <link href="../plugins/chosen_v1.6.1/chosen.min.css" rel="stylesheet">
        <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../plugins/summernote-master/dist/summernote.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
          
          <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
          <script src="js/jquery-3.1.1.min.js"></script>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="css/admin_body.css" rel="stylesheet">


    <link href="css/admin_body.css" rel="stylesheet">
      <link href="css/admin_side.css" rel="stylesheet">
      <link href="css/announcements.css" rel="stylesheet">
      <link href="css/settings.css" rel="stylesheet">
      <style>
        input::-webkit-input-placeholder {
              direction: rtl;
              text-align: left;
          }  .danger{
            display: none;

          }
      </style>
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

               require 'phpplugins/database_connect.php';
                  $online=$_SESSION["username"];?>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
          <?php if(isset($_SESSION["teacher"])){ ?>

            <div class="form-group">
              <form method="post"  id="form" action="profile-prof.php">
                <div class="row">


                    <div class="col-md-4">
                    <label >Ώρες γραφείου:</label>


                  </div>
                  <div class="col-md-8">
                    <input type="text" size="50" name="newhours" id="newhours" style="text-align:left"  placeholder="
                    <?php
                     $sql = "SELECT hours FROM faculty where faculty_username='$online' ";

                                                   $result = $conn->query($sql);
                                                   $row = mysqli_fetch_array($result);
                                                      echo $row["hours"];


                    ?>"></div>
                  </div>
                  <div class="row">



                    <div class="col-md-4">
                    <label >Όνομα/Επώνυμο:</label>


                  </div>
                  <div class="col-md-8">

                    <input type="text" size="50" name="newname" id="newname" style="text-align:left"  placeholder="
                    <?php
                     $sql = "SELECT name FROM user where username='$online' ";

                                                   $result = $conn->query($sql);
                                                   $row = mysqli_fetch_array($result);
                                                      echo $row["name"];


                    ?>"></div></div>
                    <div class="row">




                      <div class="col-md-4">
                      <label >Password:</label>


                    </div>
                    <div class="col-md-8">
                    <input type="text" size="50" name="newpass" id="newpass" style="text-align:left"  placeholder="
                    <?php
                     $sql = "SELECT password FROM user where username='$online' ";

                                                   $result = $conn->query($sql);
                                                   $row = mysqli_fetch_array($result);
                                                      echo $row["password"];


                    ?>"><div class="danger alert alert-danger" id="danger"><strong> Επιβαβαίωση;</strong></div></div></div>
                    
                 
                    <div class="well ">
                    <h3 style="font-style:italic">Biography edit </h3>
                  <div class="row">
                    <label>Εκπαιδευση</label>
                    <select id="s1" name="rows1">
                      <option value='0'>Αριθμός εκπ. ιδρυμάτων</option>
                      <option value='1'>1</option>
                        <option value='2'>2</option>
                    <option value='3'>3</option></select>
                     <p id="p1" ></p>




                  </div>
                  <div class="row">
                    <label>Πανεπιστημιακές θέσεις</label>
                    <select id="s2" name="rows2">
                      <option value='0'>Παρούσα θέση και Παλαιότερες θέσεις</option>
                      <option value='1'>1</option>
                        <option value='2'>2</option>
                    <option value='3'>3</option></select>
                     <p id="p2" ></p>




                  </div>
                  <div class="row">
                    <label>Σπουδαιοτερα Έργα</label>
                    <select id="s3" name="rows3">
                      <option value='0'>Αριθμός έργων</option>
                      <option value='1'>1</option>
                        <option value='2'>2</option>
                    <option value='3'>3</option></select>
                     <p id="p3" ></p>




                  </div>
                </div>
                               <script>

                        $("#s1").change(function(){
                           var i;
                          var word="";
                          $("#p1").html("");
                          if($("#s1").val()!=0){
                            var times=$("#s1").val();

                            for(i=1;i<=times;i++){



                              $("#p1").append('<p  class="glyphicon glyphicon-triangle-right"></p><input name="a'+i+'" id="a'+i+'"  type="text" size="30" placeholder="Εκπαιδευτικό ίδρυμα"></input><br>');
                          }







                      }

                        });
                        $("#s2").change(function(){
                           var i;
                          var word="";
                          $("#p2").html("");
                          if($("#s2").val()!=0){
                            var times=$("#s2").val();

                            for(i=1;i<=times;i++){



                              $("#p2").append('<p  class="glyphicon glyphicon-triangle-right"></p><input name="b'+i+'" id="b'+i+'"  type="text" size="30" placeholder="Θέση"></input><br>');
                          }







                      }

                        });
                        $("#s3").change(function(){
                           var i;
                          var word="";
                          $("#p3").html("");
                          if($("#s3").val()!=0){
                            var times=$("#s3").val();

                            for(i=1;i<=times;i++){



                              $("#p3").append('<p  class="glyphicon glyphicon-triangle-right"></p><input name="c'+i+'" id="c'+i+'"  type="text" size="30" placeholder="Έργο"></input><br>');
                          }







                      }

                        });


                  </script>
                </form><?php } ?>

            <?php if(isset($_SESSION["student"])){ ?>
            
              <div class="form-group">
                  <div class="row">


                      <div class="col-md-4">
                      <label >Επιλογή Κατάστασης:</label>


                    </div>
                    <div class="col-md-8">
                      <input type="text" size="60" name="newsector" id="newsector" style="text-align:left"  placeholder="Κορμός->1 Η/Υ->2 Τ/ΤΠ->3 ΣΑΕ->4 ΣΗΕ->5 Μεταπτυχιακο->6"></div>
                    </div>
                    <div class="row">



                      <div class="col-md-4">
                      <label >Όνομα/Επώνυμο:</label>


                    </div>
                    <div class="col-md-8">

                      <input type="text" size="60" name="newstudname" id="newstudname" style="text-align:left"  placeholder="
                      <?php
                       $sql = "SELECT name FROM user where username='$online' ";

                                                     $result = $conn->query($sql);
                                                     $row = mysqli_fetch_array($result);
                                                        echo $row["name"];


                      ?>"></div></div>
                      <div class="row">




                        <div class="col-md-4">
                        <label >Password:</label>


                      </div>
                      <div class="col-md-8">
                      <input type="text" size="60" name="newpass" id="newstudpass" style="text-align:left"  placeholder="
                      <?php
                       $sql = "SELECT password FROM user where username='$online' ";

                                                     $result = $conn->query($sql);
                                                     $row = mysqli_fetch_array($result);
                                                        echo $row["password"];


                      ?>"><div class="danger alert alert-danger" id="danger"><strong>Επιβαβαίωση;</strong></div></div></div>
                     
                    <div class="row">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th>Μάθημα</th>
                                <th>Κωδικός</th>
                                <th>Βαθμός</th>
                                <th>Παρακολούθηση</th>
                                <th>Rating</th>
                                <th>Submit</th>
                              </tr>
                            </thead>

                              <tbody>
                  <?php
                  $sql = "SELECT title,grade,code,on_schedule,rating  FROM subject,attends WHERE username='$online' and code=subject_code  ";

                                                $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {

                                                    // output data of each row
                                                    while($row = $result->fetch_assoc()) {

                                                      $title=$row["title"];
                                                      $grade=$row["grade"];
                                                      $code=$row["code"];
                                                      $attend=$row["on_schedule"];
                                                      $rat=$row["rating"];

                                                   echo "<tr><td> ".$title."</td><td><p id='code$code' name='code'>".$code."</td><td><input type='text' size='5' name='newgrade$code' id='newgrade$code' style='text-align:left'  placeholder='$grade'></td><td style='text-align:center'><input style='align:' type='checkbox' id='attend$code'  ></td> ";
                                                   echo "<td><input type='number' min='0' max='10' id='rat$code' placeholder='$rat' ></td><td><button id='button$code' >Submit field</button></td></tr>";?>
                                                     <?php
                                                     if($attend=='1'){
                                                       ?> <script>

                                                        $("#attend<?php echo $code ;?>").prop('checked',true);

                                                       </script> <?php } ?>
                                                       <?php
                                                       if($rat=='-1'){
                                                         ?> <script>

                                                          $("#rat<?php echo $code ;?>").attr("placeholder"," ");

                                                         </script> <?php } ?>
                                                       <script>

                                                     $("#button<?php echo $code ;?>").click(function(){

                                                      var newgrade=$("#newgrade<?php echo $code ;?> ").val();
                                                      var code=$("#code<?php echo $code; ?>").text();
                                                      var attend=$("#attend<?php echo $code;?>").is(":checked");
                                                      var rat=$("#rat<?php echo $code ;?> ").val();

                                                      if(attend==true){
                                                        var sendattend=1;
                                                      }else{
                                                        var sendattend=0;
                                                      }




                                                      $.ajax({
                                                        type:"POST",
                                                        url:"edit-info.php",
                                                        data:{newgrade,code,sendattend,rat}
                                                                      });



                                                     });




                                                     </script>



                                <?php                    }}?>






                 </table>
                
               </tbody>
                </div>







              <?php } ?>



                </div>


        </div>
    </div>
</div>

<p> done editing?</p>
<?php if(isset($_SESSION['student'])){ ?>
<button type="button" id="submitbutton">Done Editing</button><br> <?php } ?>
<?php if(isset($_SESSION['teacher'])){ ?>
<button type="button" id="submitbutton2">Done Editing</button> <?php } ?>
<?php if(isset($_SESSION['student'])){ ?> <label for="chose-subject">Προσθήκη Μαθήματος</label><br> 
                 <select    data-placeholder="Επιλέξτε μάθημα"  id="chose-subject" name="chose-subject" class="chosen-select " tabindex="5" data-user="<?php echo $online; ?>">
                 </div>
              <option value=""></option>
              <optgroup label="1ο Εξάμηνο">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject WHERE (code NOT IN (SELECT code FROM subject,attends WHERE username='$online' and code=subject_code)) AND semester='xeimerino' AND teach_year='A' AND type!='lab';";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              unset($tags_id, $tags_name);
                              $code = $row['code'];
                              $title = $row['title']; 
                              echo '<option value="'.$code.'">'.$title.'</option>';
                              
                      }
                          } else {
                            echo '<option value="" disabled="disabled">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
              <optgroup label="2ο Εξάμηνο">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject WHERE (code NOT IN (SELECT code FROM subject,attends WHERE username='$online' and code=subject_code)) AND semester='earino' AND teach_year='A' AND type!='lab';";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              unset($tags_id, $tags_name);
                              $code = $row['code'];
                              $title = $row['title']; 
                              echo '<option value="'.$code.'">'.$title.'</option>';
                              
                      }
                          } else {
                            echo '<option value="" disabled="disabled">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
              <optgroup label="3ο Εξάμηνο">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject WHERE (code NOT IN (SELECT code FROM subject,attends WHERE username='$online' and code=subject_code)) AND semester='xeimerino' AND teach_year='B' AND type!='lab';";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              unset($tags_id, $tags_name);
                              $code = $row['code'];
                              $title = $row['title']; 
                              echo '<option value="'.$code.'">'.$title.'</option>';
                              
                      }
                          } else {
                            echo '<option value="" disabled="disabled">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
              <optgroup label="4ο Εξάμηνο">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject WHERE (code NOT IN (SELECT code FROM subject,attends WHERE username='$online' and code=subject_code)) AND semester='earino' AND teach_year='B' AND type!='lab';";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              unset($tags_id, $tags_name);
                              $code = $row['code'];
                              $title = $row['title']; 
                              echo '<option value="'.$code.'">'.$title.'</option>';
                              
                      }
                          } else {
                            echo '<option value="" disabled="disabled">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
              <optgroup label="5ο Εξάμηνο">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject WHERE (code NOT IN (SELECT code FROM subject,attends WHERE username='$online' and code=subject_code)) AND semester='xeimerino' AND teach_year='C' AND type!='lab';";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              unset($tags_id, $tags_name);
                              $code = $row['code'];
                              $title = $row['title']; 
                              echo '<option value="'.$code.'">'.$title.'</option>';
                              
                      }
                          } else {
                            echo '<option value="" disabled="disabled">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
              <optgroup label="6ο Εξάμηνο">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject WHERE (code NOT IN (SELECT code FROM subject,attends WHERE username='$online' and code=subject_code)) AND semester='earino' AND teach_year='C' AND type!='lab';";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              unset($tags_id, $tags_name);
                              $code = $row['code'];
                              $title = $row['title']; 
                              echo '<option value="'.$code.'">'.$title.'</option>';
                              
                      }
                          } else {
                            echo '<option value="" disabled="disabled">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
              <optgroup label="7ο Εξάμηνο">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject WHERE (code NOT IN (SELECT code FROM subject,attends WHERE username='$online' and code=subject_code)) AND semester='xeimerino' AND teach_year='D' AND type!='lab';";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              unset($tags_id, $tags_name);
                              $code = $row['code'];
                              $title = $row['title']; 
                              echo '<option value="'.$code.'">'.$title.'</option>';
                              
                      }
                          } else {
                            echo '<option value="" disabled="disabled">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
              <optgroup label="8ο Εξάμηνο">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject WHERE (code NOT IN (SELECT code FROM subject,attends WHERE username='$online' and code=subject_code)) AND semester='earino' AND teach_year='D';";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              unset($tags_id, $tags_name);
                              $code = $row['code'];
                              $title = $row['title']; 
                              echo '<option value="'.$code.'">'.$title.'</option>';
                              
                      }
                          } else {
                            echo '<option value="" disabled="disabled">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
              <optgroup label="9ο Εξάμηνο">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject WHERE (code NOT IN (SELECT code FROM subject,attends WHERE username='$online' and code=subject_code)) AND semester='xeimerino' AND teach_year='E';";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              unset($tags_id, $tags_name);
                              $code = $row['code'];
                              $title = $row['title']; 
                              echo '<option value="'.$code.'">'.$title.'</option>';
                              
                      }
                          } else {
                            echo '<option value="" disabled="disabled">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
              <optgroup label="10ο Εξάμηνο">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject WHERE (code NOT IN (SELECT code FROM subject,attends WHERE username='$online' and code=subject_code)) AND semester='earino' AND teach_year='E';";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              unset($tags_id, $tags_name);
                              $code = $row['code'];
                              $title = $row['title']; 
                              echo '<option value="'.$code.'">'.$title.'</option>';
                              
                      }
                          } else {
                            echo '<option value="" disabled="disabled">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
              <optgroup label="Μεταπτυχιακό">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject WHERE (code NOT IN (SELECT code FROM subject,attends WHERE username='$online' and code=subject_code))  AND teach_year='F' ;";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              unset($tags_id, $tags_name);
                              $code = $row['code'];
                              $title = $row['title']; 
                              echo '<option value="'.$code.'">'.$title.'</option>';
                              
                      }
                          } else {
                            echo '<option value="" disabled="disabled">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
            </select><?php } ?>


               <script>
               $("#submitbutton2").click(function(){
                   var i;
                   var bio1='';
                   var times1=$("#s1").val();
                    for(i=1;i<=times1;i++){
                      if(i==1){
                          bio1=bio1+$("#a"+i+"").val();
                      }else{
                      bio1=bio1+","+$("#a"+i+"").val();

                    }}
                    var bio2='';
                    var times2=$("#s2").val();
                     for(i=1;i<=times2;i++){
                       if(i==1){
                           bio2=bio2+$("#b"+i+"").val();
                       }else{
                       bio2=bio2+","+$("#b"+i+"").val();

                     }}
                     var bio3='';
                     var times3=$("#s3").val();
                      for(i=1;i<=times3;i++){
                        if(i==1){
                            bio3=bio3+$("#c"+i+"").val();
                        }else{
                        bio3=bio3+","+$("#c"+i+"").val();

                      }}

                   var newhours=$("#newhours").val();

                   var newname=$("#newname").val();

                   $.ajax({
                     type:"POST",
                     url:"edit-info.php",
                     data:{newhours,newname,bio1,bio2,bio3,times1,times2,times3}
                                   });
               $("#form").submit();

               });

               $("#submitbutton").click(function(){

                var newsector=$("#newsector").val();
                var newname=$("#newstudname").val();
                var newstudpass=$("#newstudpass").val();



                $.ajax({
                  type:"POST",
                  url:"edit-info.php",
                  data:{newsector,newname,newstudpass}
                  
                                });
                $("#stud").submit();



               });

               $("#newpass").mousedown(function(){
                 $("#danger").css("display","block");



               });
               $("#newpass").mouseout(function(){
                 $("#danger").css("display","none");



               });









               </script><form id="stud" action="profile.php" method="post"></form>

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


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../js/bootstrap.min.js"></script>
<script src="js/admin.js"></script>
<!-- Chosen plugin for multiple tags select -->

    <script src="js/admin.js"></script>
  </body>
</html>

