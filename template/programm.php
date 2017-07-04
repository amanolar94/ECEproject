


<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href="css/customcss.css" rel="stylesheet">
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://use.fontawesome.com/484df5253e.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
  <script type="text/javascript" src="java.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link rel="stylesheet" href="../admin/css/reset.css">
    <link href="../admin/css/admin_body.css" rel="stylesheet">
    <link href="../admin/css/admin_side.css" rel="stylesheet">
    <link href="../admin/css/schedule.css" rel="stylesheet">
    <script>
     function hidesector(){
       $("#sector").css("display","none");
       $("#tomeas").prop("checked",true);


     };
     function showsector(){
       $("#sector").css("display","block");

     }
   </script>
  <style>
  #history{
    background-color: white;
   border-radius: 5%;
  box-shadow: 10px 10px 5px #888888;

  }
  pre {
  background-color: white;
  white-space: pre-line;
  border: none;
 }

  </style>
<body background="coverme.png">


<?php
 include 'navigation.php';
 ?>
 <div class=" hidden-sm hidden-xs myschedule-header " id="content ">
   <form id="schedule_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <header class="clearfix ">
                     <div class="col-md-12"><b>Διαμόρφωση προγράμματος</b></div>
                     <div class="col-md-12">


                     <div class="year pull-left  "><b>Έτος:&nbsp;</b>
                         <label class="radio-inline"><input  name="etos" type="radio" value="A" onclick="javascript:hidesector();" >1ο</label>
                         <label class="radio-inline"><input  name="etos" type="radio" value="B" onclick="javascript:hidesector();">2o</input></label>
                         <label class="radio-inline"><input  name="etos" type="radio" value="C" onclick="javascript:hidesector();">3o</input></label>
                         <label class="radio-inline"><input  name="etos" type="radio" value="D" onclick="javascript:showsector();">4o</input></label>
                         <label class="radio-inline"><input  name="etos" type="radio" value="E" onclick="javascript:showsector();">5o</input></label>
                         <label class="radio-inline"><input  name="etos" type="radio" value="F" onclick="javascript:hidesector();">Μετ/κό</label>


                       </div>
                       </div>

                       <div class="col-md-12">
                       <div id="sector" style="display: none;"><b>Τομέας:&nbsp;</b>
                       <label class="radio-inline" style="display: none;"><input id="tomeas" name="tomeas" type="radio" value="1" >Κορμός</label>
                         <label class="radio-inline"><input id="tomeas" name="tomeas" type="radio" value="2" >Η&amp;Υ</label>
                         <label class="radio-inline"><input id="tomeas" name="tomeas" type="radio" value="3">ΤΤΠ</label>
                         <label class="radio-inline"><input id="tomeas" name="tomeas" type="radio" value="5">ΣΗΕ</label>
                         <label class="radio-inline"><input id="tomeas" name="tomeas" type="radio" value="4">ΣΑΕ</label>

                       </div>





                     </div>




                     <div class="col-md-12">
                       <div class="eksamino pull-left"><b>&nbsp;Εξάμηνο:&nbsp;</b>
                       <label class="radio-inline"><input name="eksamino" type="radio" value="xeimerino" >Χειμερινό</label>
                         <label class="radio-inline"><input name="eksamino" type="radio" value="earino" >Εαρινό &nbsp;&nbsp;&nbsp;&nbsp;</label>



                       </div>
                       </div>
                       <div class="col-md-12">

                       <button type="submit" id="show_schedule" class="btn btn-xs btn-primary ">Εμφάνιση</button type="submit">


                     </div>

                   </header>



         </form>


         <div class="cd-schedule loading">
                 <div class="timeline">
                   <ul>
                     <li><span>09:00</span></li>
                     <li><span>09:30</span></li>
                     <li><span>10:00</span></li>
                     <li><span>10:30</span></li>
                     <li><span>11:00</span></li>
                     <li><span>11:30</span></li>
                     <li><span>12:00</span></li>
                     <li><span>12:30</span></li>
                     <li><span>13:00</span></li>
                     <li><span>13:30</span></li>
                     <li><span>14:00</span></li>
                     <li><span>14:30</span></li>
                     <li><span>15:00</span></li>
                     <li><span>15:30</span></li>
                     <li><span>16:00</span></li>
                     <li><span>16:30</span></li>
                     <li><span>17:00</span></li>
                     <li><span>17:30</span></li>
                     <li><span>18:00</span></li>
                     <li><span>18:30</span></li>
                     <li><span>19:00</span></li>
                     <li><span>19:30</span></li>
                     <li><span>20:00</span></li>
                     <li><span>20:30</span></li>
                     <li><span>21:00</span></li>
                     <li><span>21:30</span></li>
                     <li><span>22:00</span></li>
                   </ul>
                 </div> <!-- .timeline -->

                 <div class="events">
                   <ul>
                     <li class="events-group" >
                       <div class="top-info"><span>Δευτέρα</span></div>

                       <ul id="monday">
                         <!--.data-event class is for different colors.-->
                         <?php
                           require '../admin/phpplugins/database_connect.php';
                           if(isset($_POST['eksamino'])&&isset($_POST['etos'])&&isset($_POST['tomeas'])){
                             $eksamino=$_POST['eksamino'];
                             $etos=$_POST['etos'];
                             $tomeas=$_POST['tomeas'];

                           }else{
                             $eksamino='xeimerino';
                             $etos='A';
                             $tomeas='1';
                           }


                           $sql="SELECT code,title,type,DATE_FORMAT(beginning_time, '%H:%i') AS start,DATE_FORMAT(end_time, '%H:%i') AS end FROM subject,teaching WHERE code=teaching_subject_code AND teaching_day='Monday' AND semester='$eksamino' AND teach_year='$etos' AND subjectsectorid='$tomeas';";
                           $result = mysqli_query($conn,$sql);

                          while($row = mysqli_fetch_array($result)) {
                             if($row['type']=='theory'){
                               $type='math1';
                             }else{
                               $type='lab';
                             }
                             echo '<li class="single-event subject" id="'.$row['code'].'" data-toggle="modal" data-target="#myModal" id="'.$row['code'].'" data-start="'.$row['start'].'" data-end="'.$row['end'].'"  data-content="'.$type.'" data-event="'.$type.'" >
                                     <h3>
                                       <em class="event-name">'.$row['title'].'</em>
                                     </h3>
                                   </li>';
                           };


                          ?>











                       </ul>

                     </li>


                     <li class="events-group" >
                       <div class="top-info"><span>Τρίτη</span></div>

                       <ul id="tuesday">
                          <?php
                           require '../admin/phpplugins/database_connect.php';
                           if(isset($_POST['eksamino'])&&isset($_POST['etos'])&&isset($_POST['tomeas'])){
                             $eksamino=$_POST['eksamino'];
                             $etos=$_POST['etos'];
                             $tomeas=$_POST['tomeas'];

                           }else{
                             $eksamino='xeimerino';
                             $etos='A';
                             $tomeas='1';
                           }


                           $sql="SELECT code,title,type,DATE_FORMAT(beginning_time, '%H:%i') AS start,DATE_FORMAT(end_time, '%H:%i') AS end FROM subject,teaching WHERE code=teaching_subject_code AND teaching_day='Tuesday' AND semester='$eksamino' AND teach_year='$etos' AND subjectsectorid='$tomeas';";
                           $result = mysqli_query($conn,$sql);

                          while($row = mysqli_fetch_array($result)) {
                             if($row['type']=='theory'){
                               $type='math1';
                             }else{
                               $type='lab';
                             }
                             echo '<li class="single-event subject" id="'.$row['code'].'" data-toggle="modal" data-target="#myModal" id="'.$row['code'].'" data-start="'.$row['start'].'" data-end="'.$row['end'].'"  data-content="'.$type.'" data-event="'.$type.'" >
                                     <h3>
                                       <em class="event-name">'.$row['title'].'</em>
                                     </h3>
                                   </li>';
                           };

                          ?>

                       </ul>
                     </li>

                     <li class="events-group" >
                       <div class="top-info"><span>Τετάρτη</span></div>

                       <ul id="wednesday">

                       <?php
                           require '../admin/phpplugins/database_connect.php';
                           if(isset($_POST['eksamino'])&&isset($_POST['etos'])&&isset($_POST['tomeas'])){
                             $eksamino=$_POST['eksamino'];
                             $etos=$_POST['etos'];
                             $tomeas=$_POST['tomeas'];

                           }else{
                             $eksamino='xeimerino';
                             $etos='A';
                             $tomeas='1';
                           }


                           $sql="SELECT code,title,type,DATE_FORMAT(beginning_time, '%H:%i') AS start,DATE_FORMAT(end_time, '%H:%i') AS end FROM subject,teaching WHERE code=teaching_subject_code AND teaching_day='Wednesday' AND semester='$eksamino' AND teach_year='$etos' AND subjectsectorid='$tomeas';";
                           $result = mysqli_query($conn,$sql);

                           while($row = mysqli_fetch_array($result)) {
                             if($row['type']=='theory'){
                               $type='math1';
                             }else{
                               $type='lab';
                             }
                             echo '<li class="single-event subject" id="'.$row['code'].'" data-toggle="modal" data-target="#myModal" id="'.$row['code'].'" data-start="'.$row['start'].'" data-end="'.$row['end'].'"  data-content="'.$type.'" data-event="'.$type.'" >
                                     <h3>
                                       <em class="event-name">'.$row['title'].'</em>
                                     </h3>
                                   </li>';
                           };


                          ?>


                       </ul>
                     </li>

                     <li class="events-group" >
                       <div class="top-info"><span>Πέμπτη</span></div>

                       <ul id="thursday">
                         <?php
                           require '../admin/phpplugins/database_connect.php';
                           if(isset($_POST['eksamino'])&&isset($_POST['etos'])&&isset($_POST['tomeas'])){
                             $eksamino=$_POST['eksamino'];
                             $etos=$_POST['etos'];
                             $tomeas=$_POST['tomeas'];

                           }else{
                             $eksamino='xeimerino';
                             $etos='A';
                             $tomeas='1';
                           }


                           $sql="SELECT code,title,type,DATE_FORMAT(beginning_time, '%H:%i') AS start,DATE_FORMAT(end_time, '%H:%i') AS end FROM subject,teaching WHERE code=teaching_subject_code AND teaching_day='Thursday' AND semester='$eksamino' AND teach_year='$etos' AND subjectsectorid='$tomeas';";
                           $result = mysqli_query($conn,$sql);
                           while($row = mysqli_fetch_array($result)) {
                             if($row['type']=='theory'){
                               $type='math1';
                             }else{
                               $type='lab';
                             }
                             echo '<li class="single-event subject" id="'.$row['code'].'" data-toggle="modal" data-target="#myModal" id="'.$row['code'].'" data-start="'.$row['start'].'" data-end="'.$row['end'].'"  data-content="'.$type.'" data-event="'.$type.'" >
                                     <h3>
                                       <em class="event-name">'.$row['title'].'</em>
                                     </h3>
                                   </li>';
                           };


                          ?>


                       </ul>
                     </li>

                     <li class="events-group" >
                       <div class="top-info"><span>Παρασκευή</span></div>

                       <ul id="friday">
                         <?php
                           require '../admin/phpplugins/database_connect.php';
                           if(isset($_POST['eksamino'])&&isset($_POST['etos'])&&isset($_POST['tomeas'])){
                             $eksamino=$_POST['eksamino'];
                             $etos=$_POST['etos'];
                             $tomeas=$_POST['tomeas'];

                           }else{
                             $eksamino='xeimerino';
                             $etos='A';
                             $tomeas='1';
                           }


                           $sql="SELECT code,title,type,DATE_FORMAT(beginning_time, '%H:%i') AS start,DATE_FORMAT(end_time, '%H:%i') AS end FROM subject,teaching WHERE code=teaching_subject_code AND teaching_day='Friday' AND semester='$eksamino' AND teach_year='$etos' AND subjectsectorid='$tomeas';";
                           $result = mysqli_query($conn,$sql);

                          while($row = mysqli_fetch_array($result)) {
                             if($row['type']=='theory'){
                               $type='math1';
                             }else{
                               $type='lab';
                             }
                             echo '<li class="single-event subject" id="'.$row['code'].'" data-toggle="modal" data-target="#myModal" id="'.$row['code'].'" data-start="'.$row['start'].'" data-end="'.$row['end'].'"  data-content="'.$type.'" data-event="'.$type.'" >
                                     <h3>
                                       <em class="event-name">'.$row['title'].'</em>
                                     </h3>
                                   </li>';
                           };


                          ?>


                       </ul>
                     </li>
                   </ul>
                 </div>




                 <div class="cover-layer"></div>
         </div>






</div>


 </body>
</html>
