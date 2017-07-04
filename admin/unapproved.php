<!DOCTYPE html>
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
<html >
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Μη εγκεκριμένα σχόλια</title>

		<!-- Bootstrap CSS -->
		<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		
		
		<link href="css/admin_body.css" rel="stylesheet">
    	<link href="css/admin_side.css" rel="stylesheet">
    	<link href="css/announcements.css" rel="stylesheet">
    	<link href="css/comments.css" rel="stylesheet">
    	<script src="js/jquery-3.1.1.min.js"></script>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
	            <header class="clearfix">
	              <h2 class="page_title pull-left">Εκκρεμή σχόλια</h2>
	              
	            </header>

	            <div class="content-inner">
	            	<?php 
					require 'phpplugins/database_connect.php';
					$sql="SELECT image_name,name,title,timedate,content,comment_id FROM comment,user,subject WHERE comment_username=username and subject_code=code and approved='0';";
					$result = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_array($result)){
						echo '<div class="row comments-row">
	            	<div class="col-sm-2 col-md-1">
	            		<img class="img-circle hidden-xs image-comment" src="img/'.$row['image_name'].'">
	            			
	            	</div>
	            	<div class=" commentarea col-sm-10 col-md-11">
						<div class="row">
							<div class="col-xs-9 col-sm-10 col-md-9">
							<b>'.$row['name'].'</b> δημοσίευσε σχόλιο για το μάθημα: <b>'.$row['title'].'</b><br>
							<small>'.$row['timedate'].'</small>
								
							</div>
							<div class="col-xs-3 col-sm-2 col-md-3">
								<div class="clearfix">
									<div class="pull-right comment-age"></div>
								</div>
							</div>
						</div>
						<div class="well well-sm comments-well">
			            	'.$row['content'].'
			      		</div>
			      		<div class="clearfix">
			      			<div class="pull-right">
			      				<a class="btn btn-xs btn-default approve_comment" href="#" role="button" name="'.$row['comment_id'].'"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>&nbsp;Approve</a>
			      				<a class="btn btn-xs btn-default delete_comment" href="#" role="button" name="'.$row['comment_id'].'"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>&nbsp;Delete</a>			
			      			</div>
			      			
			      		</div>

	            	</div>

	            </div>';
						
					};

				 ?>
	          

	            
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

		<!-- jQuery -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="js/admin.js"></script>
		<script  type="text/javascript" src="../js/bootstrap.min.js"></script>
		<script>
		      $(document).ready($("#comments").addClass('active'));
		 </script>
	</body>
</html>