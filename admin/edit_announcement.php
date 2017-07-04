<?php require 'phpplugins/database_connect.php';?>

<?php $idannouncement=$_POST['id_announcement']; ?>
<?php include 'phpplugins/get_announcement_data.php' ?>

<!DOCTYPE html>

<html >
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <title>Επεξεργασία ανακοίνωσης</title>

    <!-- Bootstrap -->

    <link href="../plugins/chosen_v1.6.1/chosen.min.css" rel="stylesheet">
    <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../plugins/summernote-master/dist/summernote.css" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/admin_body.css" rel="stylesheet">
    <link href="css/admin_side.css" rel="stylesheet">
    <link href="css/new_announcement.css" rel="stylesheet">
    <script src="js/admin.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="htps://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
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

          <div id="content">
            <header>
              <h2 class="page_title">Επεξεργασία ανακοίνωσης</h2>
            </header>

            <div class="content-inner">

              <div class="form-wrapper">
                <form   id="edit_form" > <!--htmlspecialchars is for safety reasons-->
                  <div class="form-group">
                    <label>Τίτλος</label>
                    <textarea type="text" class="form-control " id="title" name="title"><?php echo $announcement_title ?></textarea>
                  </div>
                  <input type="radio" name="id_announcement" id="id_announcement" value="<?php echo $idannouncement ?>" checked="checked" style="display: none"></input> 

                  

                  <div class="form-group">
                    <label >Περιεχόμενο</label>
                    <textarea type="text" class="form-control summernote "  name="announcement" id="announcement"><?php echo $announcement_content ?></textarea>
                  </div>
                  

                  <div class="clearfix">
                    <span>
                    <button type="submit"  name="submit" value="Submit" class="btn btn-primary pull-right" id="editsubmit">Αποθήκευση</button>
                    <div class="pull-right text-danger" id="notsubmited">Πρέπει να συμπληρωθουν όλα τα πεδία</div>
                    <div class="pull-right text-success" id="submited" style="display: none;float: left;margin-right: 10px;margin-top: 7px;">SAVED!!</div>
                      
                    </span>
                    
                  </div>

                </form>
                
                
                  
                  
                  

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
    <script type="text/javascript">
      $('.summernote').summernote({
        height: 200
      })

    </script>
    <script>
          $(document).ready($("#announcements").addClass('active'));
     </script>
   
    
    
    
  </body>
</html>
