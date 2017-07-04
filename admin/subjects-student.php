<?php 
require 'phpplugins/database_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Μαθήματα</title>

    <!-- Bootstrap -->

    <link href="../plugins/chosen_v1.6.1/chosen.min.css" rel="stylesheet">
    <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../plugins/summernote-master/dist/summernote.css" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="js/jquery-3.1.1.min.js"></script>


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/admin_body.css" rel="stylesheet">
    <link href="css/admin_side.css" rel="stylesheet">
    <link href="css/new_announcement.css" rel="stylesheet">
    <link href="css/subjects.css" rel="stylesheet">
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
            <img src="img/yoda.jpg">
          </div>

          <div class="hidden-sm hidden-xs" id="content">
            <form id="subjects_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <header class="clearfix row subject-menu" style="display: inline-block;">
                              <div class="col-md-12"><b>Εμφάνιση μαθημάτων</b></div>
                              <div class="col-md-12">
                                
                              
                              <div class="year pull-left  "><b>Έτος:&nbsp;</b>
                                  <label class="radio-inline"><input  name="etos" type="radio" value="A" onclick="javascript:hidesector();" >1ο</label>
                                  <label class="radio-inline"><input  name="etos" type="radio" value="B" onclick="javascript:hidesector();">2o</label>
                                  <label class="radio-inline"><input  name="etos" type="radio" value="C" onclick="javascript:hidesector();">3o</label>
                                  <label class="radio-inline"><input  name="etos" type="radio" value="D" onclick="javascript:showsector();">4o</label>
                                  <label class="radio-inline"><input  name="etos" type="radio" value="E" onclick="javascript:showsector();">5o</label>
                                  <label class="radio-inline"><input  name="etos" type="radio" value="F" onclick="javascript:hidesector();">Μετ/κό</label>

                                </div>
                                </div>

                                <div class="col-md-12">
                                <div id="sector" style="display: none;"><b>Τομέας:&nbsp;</b>
                                <label class="radio-inline" style="display: none;"><input id="tomeas" name="tomeas" type="radio" value="1"  >Κορμός</label>
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

                                <button type="submit" class="btn btn-xs btn-primary ">Εμφάνιση</button>
                                    
                              
                              </div>

                            </header>

                                  
                  </form>

            <div class="content-inner">
            <table class="table table-hover all-subjects" style="display:inline-block;">
              <thead>
                <tr>
                  <th class="hidden-xs">Κωδικός</th>
                  <th>Τίτλος</th>
                  <th>Καθηγητής</th>
                  <th>Σχόλια</th>
                  <th class="hidden-xs hidden-sm">Διδακτικές Μονάδες</th>
                  <th class="hidden-xs hidden-sm">ECTS</th>
                  <th class="hidden-xs hidden-sm">Λεπτομέρειες</th>

                  
                  
                </tr>
              </thead>
              <tbody>
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
                $sql="SELECT title,code,ects,dm FROM subject where teach_year='$etos' AND semester='$eksamino' AND subjectsectorid='$tomeas'";
                $result = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($result)) {
                  $sql2="SELECT COUNT(*) as comments FROM comment WHERE subject_code='$row[code]' AND approved='1';";
                  $result2 = mysqli_query($conn,$sql2);
                  while($row2 = mysqli_fetch_array($result2)) {
                    $comments=$row2['comments'];
                  }
                  $sql2="SELECT DISTINCT name FROM user,faculty,teaching WHERE teaching_subject_code='$row[code]' AND teacher_username=faculty_username AND faculty_username=username";
                  $result2 = mysqli_query($conn,$sql2);
                  $i=-1;
                  while($row2 = mysqli_fetch_array($result2)) {
                    $i=$i+1;
                    $teacher[$i]=$row2['name'];
                  }
                  if($i>0){
                    $teacher2 = array_slice($teacher, $i-1);
                    $teacher2=implode(", ",$teacher2);
                    echo '<tr>
                        <td class="hidden-xs">'.$row['code'].'</td>
                        <td>'.$row['title'].'</td>
                        <td  data-toggle="popover" title="'.$teacher2.'" data-trigger="hover" data-placement="bottom">'.$teacher[0].'</td>
                        <th>'.$comments.'</th>
                        <td class="hidden-xs hidden-sm">'.$row['dm'].'</td>
                        <td class="hidden-xs hidden-sm">'.$row['ects'].'</td>
                        <td class="hidden-xs hidden-sm"><button type="button" class="btn btn-xs btn-primary view-subject" id="'.$row['code'].'">View</button></td>
                        
                      </tr>'; 
                  }elseif($i==0){
                    echo '<tr>
                        <td class="hidden-xs">'.$row['code'].'</td>
                          <td>'.$row['title'].'</td>
                        <td>'.$teacher[0].'</td>
                        <th>'.$comments.'</th>
                        <td class="hidden-xs hidden-sm">'.$row['dm'].'</td>
                        <td class="hidden-xs hidden-sm">'.$row['ects'].'</td>
                        <td class="hidden-xs hidden-sm"><button type="button" class="btn btn-xs btn-primary view-subject" id="'.$row['code'].'">View</button></td>
                        
                      </tr>'; 

                  }else{
                    echo '<tr>
                        <td class="hidden-xs">'.$row['code'].'</td>
                        <td>'.$row['title'].'</td>
                        <td>-</td>
                        <th>'.$comments.'</th>
                        <td class="hidden-xs hidden-sm">'.$row['dm'].'</td>
                        <td class="hidden-xs hidden-sm">'.$row['ects'].'</td>
                        <td class="hidden-xs hidden-sm"><button type="button" class="btn btn-xs btn-primary view-subject" id="'.$row['code'].'">View</button></td>
                        
                      </tr>'; 

                  }
                  

                }


               ?>
               
              </tbody>
            </table>

            <div class="container-fluid subject-part" style="display: none;">
            <div class="btn btn-primary go-back">Back</div>
              
                
                <div class="row">
                <div class="col-md-6 general-info pull-left">

                <h3 class="subject-title"></h3>
                
                    <div class="code">
                      <b class="pull-left">Κωδικός Μάθήματος: &nbsp;</b> <div class="subject-code"></div>
                    </div>
                    <div class="description">
                      <b class="">Περιγραφή: </b><br>
                      <p class="subject-description">
                        
                      </p> 
                    </div>
                    <span>
                      <div  >
                        <b class="pull-left">ECTS: </b><div  id="ects" name="ects"></div>
                      </div>
                      <div >
                        <b class="pull-left">&nbsp;&nbsp;Διδακτικές μονάδες: </b><div  id="dm" name="dm"></div>
                      </div>&nbsp;
                      
                    </span><br>
                    <span>
                      <div class="year pull-left" >
                        <b class="pull-left">Έτος: &nbsp;</b> <div class="pull-left subject-year">Α</div>
                      </div>
                      <div class="semester pull-left" >
                        <b class="pull-left">&nbsp;&nbsp;Εξάμηνο: &nbsp; </b><div class="pull-left subject-semester">Χειμερινό</div>
                      </div>
                      <div class="sector" >
                        <b class="pull-left">&nbsp;&nbsp;Τομέας:&nbsp; </b><div class="pull-left subject-sector">Κορμός</div>
                      </div>
                    </span><br>
                    <span>
                      <div>
                        <a class="pull-left webpage" href="http://www.nolink.ece.upatras.gr">Ιστοσελίδα μαθήματος </a> 
                    </div>
                    <div ><div class="pull-left">&nbsp; &nbsp;&nbsp;</div>
                        <a class="eclass" href="http://www.nolink.ece.upatras.gr">Ιστοσελίδα Eclass</a>
                    </div>

                      
                    </span><br> 
                        <label for="teaching-day">Πρόγραμμα μαθηματων:</label><br>
                        <div id="teaching-schedule">
                        
                    
                            
                          
                        </div>
                        <br>
                    <div>
                    <div class="pull-left" ><b>Αίθουσα διδασκαλίας:</b>&nbsp;</div> <div class="place"></div>  
                    </div>
                    <form method="post" action="approved.php" class="comment-form" >
                    <input type="text" class="comments-title" name="comments-title" style="display: none;">
                    <button type="submit" class="btn btn-primary subject-comments" name="subject-comments" >Εμφάνη σχολίων</button>

                    

                  </form>
                </div>
                <div class="col-md-6 teachers">
                <div style="display: block; margin: 0px;">
                  <h2  style="text-align: center; margin-top: 0px;">Μέση Βαθμολογία</h2> <br>
                <div class="btn btn-primary btn-lg mean-grade"" style="margin-left: 45%"></div><br><br><br>
                </div>
                <div style="display: block; margin: 0px;">
                  <h2  style="text-align: center; margin-top: 0px;">Μέση Αξιολόγηση</h2> <br>
                <div class="btn btn-primary btn-lg mean-rating"" style="margin-left: 45%"></div><br><br><br>
                </div>
                  <div><h3>Διδάσκοντες:</h3></div>
                  <table class="table table-striped table-condensed" style="width:100%;">
                    <thead>
                      <tr>
                        <th colspan="2">Ον/μο</th>                        
                      </tr>                      
                    </thead>
                    <tbody class="current-teachers">
                      
                    </tbody>
                  </table>
                  
                  <div ><h3 class="table-past-teachers">Παλαιότεροι Διδάσκοντες:</h3></div>
                  <table class="table table-striped table-condensed table-past-teachers" style="width: 100%;" >
                    <thead>
                      <th>Ον/μο</th>
                    </thead>
                    <tbody class="past-teachers">


                      
                    </tbody>
                  </table>
                  <span>
                  <label for="comment">Σχολιασμός</label><br>
                  <textarea name="comment" id="comment"  rows="3" style="width: 100%;"></textarea><br>
                  <div class="btn btn-primary" id="save-comment" data-user="<?php echo $_SESSION['username']; ?>">Save</div>
                    
                  </span>
                  
                  
                    
                  
                  
                </div>

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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="../plugins/chosen_v1.6.1/chosen.jquery.min.js"></script>
    <script src="../plugins/summernote-master/dist/summernote.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/jquery.redirect.js"></script>
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
    <script type="text/javascript">
      $('.summernote').summernote({
        height: 200
      })

    </script>
    <script>
          $(document).ready($("#subjects").addClass('active'));
     </script>
     
  </body>
</html>
