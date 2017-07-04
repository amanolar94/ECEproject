
<!DOCTYPE html>

<html >
  <head>
  </head>
  <body>
  
    <header id="nav-header" class="clearfix">
              <div class="col-md-5">
                <nav class="navbar-default pull-left">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#sidemenu" aria-expanded="false">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                   </button>
                </nav>
                

              </div>
              <div class="col-md-7">
                <ul class="pull-right" >
                  
                  

                  <li class=" fixed-width" >
                    <a id="navoptions" href="#">
                      <span class="" aria-hidden="true"></span>
                      <span class="label label-message"></span>
                    </a>




                  </li>



                  <li class="hidden-xs" id="welcome-message">
                    Welcome to your administration area
                  </li>


                  <li class=" fixed-width ">
                    <?php if(isset($_SESSION['admin'])){ ?>
                    <a id="navoptions" href="unapproved.php" data-toggle="popover" title="<?php include 'phpplugins/unapproved-count.php' ?> Un-approved comments" data-trigger="hover" data-placement="bottom">
                      <span class="glyphicon glyphicon-bell" aria-hidden="true" ></span>
                      <span class="label label-warning" ><?php include 'phpplugins/unapproved-count.php' ?></span>
                    </a><?php }?>



                  </li>

                  <li  class="logout">
                    <a id="navoptions" href="../template/logout.php">
                    <span class="glyphicon glyphicon-log-out" aria-hidden="true"> </span> &nbsp log out
                  </a>



                  </li>
                </ul>


              </div>
            </header>
  
  
  	
  </body>
 </html>

