<?php 
		
		
	if(isset($_POST['subject_id'])){
		$id=$_POST['subject_id'];

	}
	else{
		header('Location: index.php');
		exit(""); 

		
	}
	
	
	

?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Προσθήκη Χρήστη</title>

    <!-- Bootstrap -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/admin.js"></script>

    <link href="../plugins/chosen_v1.6.1/chosen.min.css" rel="stylesheet">
    <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../plugins/summernote-master/dist/summernote.css" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/admin_body.css" rel="stylesheet">
    <link href="css/admin_side.css" rel="stylesheet">
    <link href="css/new_announcement.css" rel="stylesheet">
    <link href="css/new_user.css" rel="stylesheet">
    <link href="css/jquery.timepicker.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
          <div class="hidden-lg hidden-md">
            <img src="img/no.jpg">
          </div>

          <div class="hidden-sm hidden-xs" id="content">
          <h2>Προσθήκη καθηγητή</h2>
            <div class="row">
            	<form id="teaching-new" ">

            	<div class="col-md-6">
            	<input type="text" value="<?php echo $id; ?>" id="code" name="code" style="display: none;">
            	<label for="teachers" >Διαθέσιμοι καθηγητές</label>
                    <select data-placeholder="Επιλέξτε καθηγητή" id="teachers" name="teachers" class="form-control chosen-select" >
                    <option>   </option>
                    <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT name,username from user,faculty WHERE username NOT IN(SELECT DISTINCT username FROM user,faculty,teaching WHERE teaching_subject_code='$id' AND teacher_username=faculty_username AND faculty_username=username) and username=faculty_username;";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              unset($tags_id, $tags_name);
                              $username = $row['username'];
                              $name = $row['name']; 
                              echo '<option value="'.$username.'">'.$name.'</option>';
                              
                      }
                          } else {
                            echo '<option value="">No tags</option>';
                        }
                             $conn->close();                 
                        ?>
                    </select><br><br>
					<span>
						<label for="start-time">Από:</label>
                    <input id="start-time" name="start-time" type="text" data-time-format="H:i" style="width:30%;" >
                    <label for="start-time">μέχρι:</label>
                    <input id="end-time" name="end-time" type="text" data-time-format="H:i" style="width:30%;" >
					</span><br><br>
					<label for="class" >Αίθουσα</label>
                    <select data-placeholder="Επιλέξτε αίθουσα" id="class" name="class" class="form-control chosen-select" >
                    <option>   </option>
                    <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT id,class_name FROM class;";
                      $result = $conn->query($sql);
                      if ($result->num_rows > 0) {
                          // output data of each row
                          while($row = $result->fetch_assoc()) {
                              unset($tags_id, $tags_name);
                              $id = $row['id'];
                              $name = $row['class_name']; 
                              echo '<option value="'.$id.'">'.$name.'</option>';
                              
                      }
                          } else {
                            echo '<option value="">No tags</option>';
                        }
                             $conn->close();                 
                        ?>
                    </select><br><br>
                    <label for="day" >Μέρα</label>
                    <select data-placeholder="Επιλέξτε μέρα" id="day" name="day" class="form-control chosen-select" >
                    <option>   </option>
                    <option value="Monday">Δευτέρα</option>
                    <option value="Tuesday">Τρίτη</option>
                    <option value="Wednesday">Τετάρτη</option>
                    <option value="Thursday">Πέμπτη</option>
                    <option value="Friday">Παρασκευή</option>
                    
                    </select><br><br>
                    <div class="btn btn-primary" id="save-teaching">Αποθήκευση</div>


            </form>
            	</div>
            	<div class="col-md-6"></div>
            </div>
            
          </div>


          <div class="row">
            <footer id="adminfooter" class="clearfix">
              <div class="pull-left">
                <b>Copyright </b>&copy; 2015
              </div>
              <div class="pull-right">
                
              </div>
            </footer>
          </div>

        </div>
      </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="../plugins/chosen_v1.6.1/chosen.jquery.min.js"></script>
    <script src="../plugins/summernote-master/dist/summernote.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
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
          $(document).ready($("#subjects").addClass('active'));
     </script>
     
    <script type="text/javascript">
      $('.summernote').summernote({
        height: 200
      })

    </script>
    <script>
    	$('#start-time').timepicker({'minTime': '09:00','maxTime': '21:00'});
    	$('#end-time').timepicker({'minTime': '09:00','maxTime': '21:00'});
    </script>
    <script>
    	$(document).on("click","#save-teaching",function(){
        var teacher = $('#teachers').val();
        var start = $('#start-time').val();
        var end = $('#end-time').val();
        var classid = $('#class').val();
        var day = $('#day').val();
        if(teacher==="" || start==="" || end==="" || classid==="" || day===""){
            alert("Πρέπει να συμπληρωθούν όλα τα πεδία");

        }else{
            var r = confirm("Αποθήκευση;");
        if (r == true) {
            
            $.ajax({
                    type: "POST",
                    url: "phpplugins/add_teaching.php",
                    data:$('#teaching-new').serialize(),
                    cache: false,
                    success: function(result){    
                    alert(result);

                    window.location.replace('subjects.php');


                        

        

                        
                        
                        

                        }
        
                    });
        } else {
             
            return false;
            
        
        
        }
        }

    });
    </script>
    
    
  </body>
</html>
