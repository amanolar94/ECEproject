<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Βιβλία</title>

    <!-- Bootstrap -->
    <script src="js/jquery-3.1.1.min.js"></script>

    <link href="../plugins/chosen_v1.6.1/chosen.min.css" rel="stylesheet">
    <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../plugins/summernote-master/dist/summernote.css" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/admin_body.css" rel="stylesheet">
    <link href="css/admin_side.css" rel="stylesheet">
    <link href="css/new_announcement.css" rel="stylesheet">
    <link href="css/books.css" rel="stylesheet">
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
            <img src="img/wtf.jpg">
          </div>

          <div id="content">

          <div class="side-by-side clearfix hidden-xs hidden-sm">
            <em class="book_title"><b>Διαθέσιμα Συγγράματα</b></em>
            <select    data-placeholder="Επιλέξτε μάθημα"  id="small-input" class="chosen-select  " tabindex="5">
              <option value=""></option>
              <optgroup label="1ο Εξάμηνο">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject where teach_year='A' and semester='xeimerino';";
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
                            echo '<option value="">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
              <optgroup label="2ο Εξάμηνο">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject where teach_year='A' and semester='earino';";
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
                            echo '<option value="">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
              <optgroup label="3ο Εξάμηνο">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject where teach_year='B' and semester='xeimerino';";
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
                            echo '<option value="">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
              <optgroup label="4ο Εξάμηνο">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject where teach_year='B' and semester='earino';";
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
                            echo '<option value="">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
              <optgroup label="5ο Εξάμηνο">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject where teach_year='C' and semester='xeimerino';";
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
                            echo '<option value="">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
              <optgroup label="6ο Εξάμηνο">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject where teach_year='C' and semester='earino';";
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
                            echo '<option value="">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
              <optgroup label="7ο Εξάμηνο">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject where teach_year='D' and semester='xeimerino';";
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
                            echo '<option value="">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
              <optgroup label="8ο Εξάμηνο">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject where teach_year='D' and semester='earino';";
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
                            echo '<option value="">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
              <optgroup label="9ο Εξάμηνο">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject where teach_year='E' and semester='xeimerino';";
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
                            echo '<option value="">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
              <optgroup label="10ο Εξάμηνο">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject where teach_year='E' and semester='earino';";
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
                            echo '<option value="">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
              <optgroup label="Μεταπτυχιακό">
                <?php 
                    require 'phpplugins/database_connect.php';

                      $sql = "SELECT code,title FROM subject where teach_year='F' ;";
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
                            echo '<option value="">No subjects</option>';
                        }
                             $conn->close();                 
                        ?>
              </optgroup>
            </select>
          </div><br>
          <div id="subject-book"></div><br><br>
          <div id="book-info" style="display: none;">
            <div class="panel panel-success">
              <div class="panel-heading"></div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-6">
                    <span>ISBN: <b class="isbn"></b></span><br>
                    <span>Συγγραφέας: <b class="writer"></b></span><br>
                    <span>Έτος έκδοσης: <b class="pub_year"></b></span><br>
                    <span>Αριθμός έκδοσης: <b class="pub_no"></b></span><br>
                    <span>Εκδότης: <b class="publisher"></b></span><br>
                    <div><b>Περιγραφή:</b><br>
                      <p class="description"></p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <img src="img" alt="book-image" class="book-image" style="height: 300px;">
                  </div>
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
    <!-- Chosen plugin for multiple tags select -->
    <script type="text/javascript">
      var config = {
        '.chosen-select' : {},
        '.chosen-select-no-result' : {no_results_text: 'OOOps, nothing found!'},
        '.chosen-select-width' : {width: "10%"}
        
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
          $(document).ready($("#books").addClass('active'));
     </script>
  </body>
</html>
