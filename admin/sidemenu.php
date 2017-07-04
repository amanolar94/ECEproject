<?php
if(!isset($_SESSION))
      {
        session_start();
      }
      if(time()-$_SESSION['loggedin_time']>600){
        header('Location: ../template/logout.php');

      }
   ?>
   <?php 
  if(!isset($_SESSION["login"])){
    // echo '<script>alert("You must be logged in")</script>';
   header('Location: ../template/index.php');
    exit(""); 

  }
   ?>

<html >
  <head>
      
  
  </head>
  <body>
  
<div class="col-md-2 col-sm-1 hidden-xsmall display-table-cell vertical-align-top" id="sidemenu">
          <h1 class="hidden-sm hidden-xs logo-side"><a href="../template/index.php"><img class="logo " src="../img/ece.png"></a></h1>
          <ul>
          <?php if(isset($_SESSION["admin"])){ ?>
          <li class="link " id="admin">
              <a href="index.php">
                <span class="glyphicon glyphicon-th" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Πίνακας</span>
              </a>
            </li>
            <?php }?>
            <li class="link" id="announcements">
              <a href="#collapse-post" data-toggle="collapse" aria-controls="collapse-post">
              <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
              <span class="hidden-sm hidden-xs">Ανακοινώσεις</span>
              <span class="label label-success pull-right hidden-sm hidden-xs"><?php include 'phpplugins/announcement-count.php' ?></span>
            </a>
            <ul class="collapse collapseable" id="collapse-post">
                <?php if(isset($_SESSION["admin"])){ ?>
                <li><a href="new-announcement.php">Νέα ανακοίνωση</a></li><?php }?>
                <li><a href="announcements.php">Προβολή Ανακοινώσεων</a></li>
            </ul>
            </li>
            <li class="link" id="comments">
              <a id="button-collapse" href="#collapse-comments" data-toggle="collapse" aria-controls="collapse-comments">
              <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
              <span class="hidden-sm hidden-xs">Σχόλια</span>
            </a>
            <ul class="collapse collapseable" id="collapse-comments">

                <li><a href="approved.php">Προβολή Σχολίων
                <span class="label label-success pull-right hidden-sm hidden-xs"><?php include 'phpplugins/approved-count.php' ?></span>
              </a></li>
              <?php if(isset($_SESSION["admin"])){ ?>
                <li><a href="unapproved.php">Σε εκκρεμότητα
                  <span class="label label-warning pull-right hidden-sm hidden-xs"><?php include 'phpplugins/unapproved-count.php' ?></span>
                </a></li><?php }?>
            </ul>
            </li>
            <li class="link" id="users">
              <a href="users.php">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Μέλη</span>
              </a>
            </li>
            <li class="link hidden-xs hidden-sm" id="subjects">
              <a href=" <?php if(isset($_SESSION['admin'])){ echo  'subjects.php'; }elseif (isset($_SESSION['teacher'])) {echo 'subjects-prof.php';}else{echo'subjects-student.php';  }?>">
                <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Μαθήματα</span>
              </a>
            </li>
            <li class="link hidden-xs hidden-sm" id="books">
              <a href="books.php">
                <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Συγγράματα</span>
              </a>
            </li>
            <li class="link hidden-xs hidden-sm" id="schedule">
              <a href="schedule.php">
                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Ωρολόγιο πρόγραμμα</span>
              </a>
            </li>
            <?php if(isset($_SESSION["student"])){ ?>
            <li class="link" id="schedule-student">
              <a href="schedule-student.php">
                <span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">To πρόγραμμα μου</span>
              </a>
            </li><?php }?>
            
            <?php if(isset($_SESSION["admin"])){ ?>
            <li class="link" id="tags">
              <a href="tags.php">
                <span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Ετικέτες</span>
              </a>
            </li><?php }?>
            <?php if(!isset($_SESSION["admin"])){ ?>
            <li class="link" id="profile">
              <a href="<?php if(isset($_SESSION["student"])){ echo 'profile.php';}elseif(isset($_SESSION["teacher"])){echo 'profile-prof.php';} ?>">
                <span class="glyphicon glyphicon-sunglasses" aria-hidden="true"></span>
                <span class="hidden-sm hidden-xs">Προφίλ</span>
              </a>
            </li><?php }?>

          </ul>

        </div>
        <?php $_SESSION['loggedin_time'] = time();?>

  	
  </body>
 </html>


