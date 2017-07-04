
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ωρολόγιο Πρόγραμμα</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
     <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->


    <!-- Bootstrap -->

    <link href="../plugins/chosen_v1.6.1/chosen.min.css" rel="stylesheet">
    <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../plugins/summernote-master/dist/summernote.css" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="js/jquery-3.1.1.min.js"></script>


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/admin_body.css" rel="stylesheet">
    <link href="css/admin_side.css" rel="stylesheet">
    <link href="css/schedule.css" rel="stylesheet">
     
     
      <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <script>
      function hidesector(){
        $("#sector").css("display","none");
        $("#tomeas").prop("checked",true);
        
       
      };
      function showsector(){
        $("#sector").css("display","block");
               
      }
    </script>
    
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
          <div class="hidden-lg hidden-md">
            <img src="img/futurama.jpg">
          </div>

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
                                    require 'phpplugins/database_connect.php';
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
                                    require 'phpplugins/database_connect.php';
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
                                    require 'phpplugins/database_connect.php';
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
                                    require 'phpplugins/database_connect.php';
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
                                    require 'phpplugins/database_connect.php';
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
                <!-- Modal -->
            <div id="myModal" class="modal fade " role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content container">
                  <div class="row">                    
                    <div class="col-xs-4 col-sm-4 col-md-4 modal-header">
                      <div class="row">
                        <div class="col-md-12 modal_time"></div>
                      </div>
                       <div class="row">
                        <div class="col-md-12 modal_class"></div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 modal_title"></div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 modal_teacher"></div>
                      </div>
                     
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8 modal-body " ><div></div></div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>

              </div>
            </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="../plugins/chosen_v1.6.1/chosen.jquery.min.js"></script>
    <script src="../plugins/summernote-master/dist/summernote.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/main.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="js/admin.js"></script>
    <!-- Chosen plugin for multiple tags select -->
    <script type="text/javascript">
      var config = {
        '.chosen-select' : {},
        '.chosen-select-deselect' : {allow_single_deselect: true},
        '.chosen-select-no-single' : {disable_search_threshold: 10},
        '.chosen-select-no-result' : {no_results_text: 'OOOps, nothing found!'},
        '.chosen-select-width' : {width: "95%"}
      }
      for (var selector in config) {
        $(selector).chosen(config[selector]);
      }
    </script>
    <script>
          $(document).ready($("#schedule").addClass('active'));
     </script>
    <script type="text/javascript">
      $('.summernote').summernote({
        height: 200
      })

    </script>
    
  </body>
</html>
