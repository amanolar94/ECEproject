<!DOCTYPE html><?php
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
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin table</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/admin_body.css" rel="stylesheet">
    <link href="css/admin_side.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="js/admin.js"></script>


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


          <div id="dashboard-con">
            <div></div>
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


    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    
    <script>
      $(document).ready($("#admin").addClass('active'));
    </script>

  </body>
</html>
