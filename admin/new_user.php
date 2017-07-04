<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Προσθήκη νέου χρήστη</title>

    <!-- Bootstrap -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
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
            <form id="new_user" name="new_user" >
            <h3>Βασικές πληροφορίες</h3>
              <div class=" row row-eq-heigth basic_info">
                <div class="col-md-4 form-group">
                <label for="mail">Email:</label>
                <input type="email" class="form-control" name="mail" id="mail" placeholder="Email" data-placement="top" data-trigger="manual" data-content="Please enter a valid mail">
                  
                </div>
                
                <div class="username col-md-4 form-group">
                  <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" data-placement="top" data-trigger="manual" data-content="Min: 3chars Max: 20 chars, only '_' supported ">
                  
                </div>
                <div class="username_warning col-md-2" style="display: none;">
                  <div class="danger_text" >Username already exists</div>
                  
                </div>
                <div class="mail_warning col-md-2" style="display: none;">
                  
                  <div class="danger_text " >Email already exists</div>
                </div>
                
              </div>
              <div class="row row-eq-height basic_info">
                <div class="thepassword col-md-4 form-group">
                 <label for="password">Password:</label>
                <input type="text" class="form-control " name="password" id="password" placeholder="Password" data-placement="top" data-trigger="manual" data-content="Password must be from 6 to 20 chars">
                  
                </div>
                <div class="col-md-4">
                  <label for="conf_password" >Confirm password:</label>
                <input type="text" class="form-control" name="conf_password" id="conf_password"  placeholder="Confirm password">
                  
                </div>
                <div class="same_pas_warning col-md-4 form-group" style="display: none;">
                  <div class="danger_text" >Passwords must be the same</div>


                </div>
                
              </div>
              <div class="row row-eq-height basic_info">
                <div class="col-md-4">
                <em ><b>Είδος χρήστη</b></em>
                  <select   data-placeholder="Επιλέξτε είδος χρήστη"  id="type" name="type" class="chosen-select  " tabindex="5">
                  <option></option>
              <optgroup label="Είδος χρήστη">
                <option value="secretary">Γραμματεία</option>
                <option value="faculty">Καθηγητής</option>
                <option value="student">Φοιτητής</option>
              </optgroup>
              
            </select>
                </div>
                <div class=" position_col col-md-4 form-group" style="display: none;">
                 <label for="position">Πόστο</label>
                <input type="text" class="form-control" id="position" name="position" placeholder="Πόστο">
                  
                </div>
                <div class="title_col col-md-4 form-group" style="display: none;" >
                 <label for="title">Τίτλος</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Τίτλος">
                  
                </div>
                
              
              </div>

              <div class="row" id="sector" style="display: none;" >
                                <div class="col-md-12">
                                <b>Τομέας:&nbsp;</b>
                                  <label class="radio-inline"><input class="radio_sector" id="tomeas" name="tomeas" type="radio" value="2" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Η&amp;Υ</label>
                                  <label class="radio-inline"><input class="radio_sector" id="tomeas" name="tomeas" type="radio" value="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ΤΤΠ</label>
                                  <label class="radio-inline"><input class="radio_sector" id="tomeas" name="tomeas" type="radio" value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ΣΗΕ</label>
                                  <label class="radio-inline"><input class="radio_sector" id="tomeas" name="tomeas" type="radio" value="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ΣΑΕ</label>
                                </div>
                                  
                                  
                                </div>


               <h3>Προσωπικές Πληροφορίες</h3>
              <div class="row row-eq-heigth basic_info">
                <div class="col-md-4 form-group">
                <label for="name">Ονοματεπώνυμο:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Ονοματεπώνυμο" >
                  
                </div>
                
                <div class="col-md-4 form-group">
                  <label for="username">Διεύθυνση:</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Διεύθυνση" >
                  
                </div>
                <div class="col-md-2">
                  
                  
                </div>
                <div class="col-md-2">
                  
                  
                </div>
                
              </div>
              <div class="row row-eq-heigth basic_info">
                <div class="col-md-4 form-group">
                 <label for="bdate">Ημερομηνία γέννησης:</label>
                <input type="date" class="form-control" name="bdate" id="bdate" placeholder="Ημ/νια γέννησης">
                  
                </div>
                <div class="col-md-4">
                  
                  
                </div>
                <div class="col-md-4 form-group">
                 


                </div>
                
              </div>
              <h3>Επικοινωνία</h3>
              <div class="row row-eq-heigth basic_info">
                <div class="col-md-4 form-group">
                <label for="htel">Σταθερό τηλέφωνο:</label>
                <input type="text" class="form-control" name="htel" id="htel" placeholder="Σταθερό τηλέφωνο" data-placement="top" data-trigger="manual" data-content="Please enter a valid phone number">
                  
                </div>
                
                <div class="col-md-4 form-group">
                  <label for="mtel">Κινητό τελέφωνο</label>
                <input type="text" class="form-control" name="mtel" id="mtel" placeholder="Κινητό τηλέφωνο" data-placement="top" data-trigger="manual" data-content="Please enter a valid phone number">
                  
                </div>
                <div class="col-md-2">
                  
                  
                </div>
                <div class="col-md-2">
                  
                  
                </div>
                
              </div>
              <div class="btn btn-success" id="create">Δημιουργία χρήστη</div>

            </form>
            
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
          $(document).ready($("#users").addClass('active'));
     </script>
    <script type="text/javascript">
      $('.summernote').summernote({
        height: 200
      })

    </script>
    
  </body>
</html>
