<?php 
require 'phpplugins/database_connect.php';
?>
<?php
if(!isset($_SESSION))
      {
        session_start();
      }
   ?>

          <?php 
  if(!isset($_SESSION["admin"])){
    // echo '<script>alert("You must be logged in")</script>';
    header('Location: ../template/index.php');
    exit(""); 

  }
   ?>
   <?php
if(!isset($_SESSION))
      {
        session_start();
      }
   ?>

          
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ετικέτες</title>

    <!-- Bootstrap -->

    <link href="../plugins/chosen_v1.6.1/chosen.min.css" rel="stylesheet">
    <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../plugins/summernote-master/dist/summernote.css" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/admin_body.css" rel="stylesheet">
    <link href="css/admin_side.css" rel="stylesheet">
    <link href="css/tags.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/admin.js"></script>
    
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
          <div class="row">
            <div class="col-md-4 dashboard-left-cell">
              <div class="admin-content-con">
                <header>
                  <h5>
                    Δημιουργία ετικετών 
                  </h5>
                </header>
                <form class="form-group" >
                  <label >Add comma separated tags below</label>
                  <p>
                    <textarea class="form-control" id="tag_content" name="tag_content" rows="3" placeholder="π.χ Γενικές Ανακοινώσεις, Εξετάσεις κλπ" ></textarea>
                  </p>
                  <p>
                    <button type="button" class="btn btn-large btn-block btn-primary create_tag">Αποθήκευση</button>
                  </p>
                  </form>
                  
                </form id="tag1">
              </div>
            </div>
            <div class="col-md-8 dashboard-right-cell">
              <div class="admin-content-con">
                <header>
                  <h5>Ετικέτες</h5>
                </header>
                <div class="row row-eq-height taghead active">
                    <div class="col-xs-4 col-sm-3 col-md-3">Name</div>
                    <div class="col-xs-2 col-sm-3 col-md-3">Status</div>
                    <div class="col-xs-3 col-sm-3 col-md-3">Created</div>
                    <div class="col-xs-3 col-sm-3 col-md-3">Actions</div>
                  </div>
                  <?php 
                    include  'phpplugins/active_tag_count.php' 
                   ?>
                
                
                
                         
                
                
                  
                
                
                


              </div>
            </div>
            
          </div>

          

          <br><br><br><br>
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
    
    <script src="../plugins/chosen_v1.6.1/chosen.jquery.min.js"></script>
    <script src="../plugins/summernote-master/dist/summernote.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    
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
          $(document).ready($("#tags").addClass('active'));
     </script>
    <script type="text/javascript">
      $('.summernote').summernote({
        height: 200
      })

    </script>
  </body>
</html>
