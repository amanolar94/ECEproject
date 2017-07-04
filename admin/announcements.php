<?php require 'phpplugins/database_connect.php';?>
<!DOCTYPE html>
<html >
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ανακοινώσεις</title>
		
		<!-- jQuery -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/jquery-3.1.1.min.js"></script>


		<!-- Bootstrap CSS -->
		<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.css" rel="stylesheet">
		<link href="../css/bootstrap.min.css" rel="stylesheet">

		<!-- Bootstrap JavaScript -->
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script  type="text/javascript" src="../js/bootstrap.min.js"></script>
		
		
		<link href="css/admin_body.css" rel="stylesheet">
    	<link href="css/admin_side.css" rel="stylesheet">
    	<link href="css/announcements.css" rel="stylesheet">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script  type="text/javascript" src="js/admin.js"></script>
		<script type="text/javascript" src="../plugins/jquery-bootpag-master/lib/jquery.bootpag.js"></script>

		<script>
		  getPost();
		  enterpress();
		</script>
		 <script>
		      $(document).ready($("#announcements").addClass('active'));
		 </script>
		 

	</head>
	<body>
		<div class="container-fluid display-table">
	      <div class="row display-table-row">
	        <!-- SIDE MENU!!!! ------>
        <?php include 'sidemenu.php';?>
        <!-- MAIN CONTENT------>
        <div class="col-md-10 col-sm-12 col-xs-12  display-table-cell vertical-align-top" >
          <div class="row">
          <!--HEADER!!!!-->
            <?php include 'header.php';?>
	          </div>

	          <div class="row">
	          	<div class="col-md-12 col-sm-12 col-xs-10 col-xs-offset-2"  id="content">
	            <header class="clearfix">
	              <h2 class="page_title pull-left">Ανακοινώσεις</h2>
	              
	            <?php if(isset($_SESSION["admin"])){ ?><a class="btn btn-primary " id="new_announcement_button" href="new-announcement.php" >Δημιουργία νέας ανακοίνωσης</a> <?php }?>
	              
	            </header>

	            <div class="content-inner">
	            <div class="row search-row">
	            	<div class="col-md-12">
	            	<div class="input-group">
	            			<span class="input-group-btn">
	            				<button type="button" class="btn btn-warning go clearsearch"  >Clear</button>
	            			</span>
	            			<input type="text" class="form-control search-field searchbar"  onkeypress="javascript:enterpress()" placeholder="Αναζήτηση">
	            			<span class="input-group-btn">
	            				<button type="button" class="btn btn-primary go gosearch"  onclick="javascript:getPost()">Go!</button>
	            			</span>
	            			
	            		</div>	

	            	</div>
	            </div>
	            <div id="results">
	            		
	            </div>
	            <div class="row search-row" id="after_search" style="display: none;">
	            	<div class="col-md-12">
	            	<div class="input-group">
	            			<span class="input-group-btn">
	            				<button type="button" class="btn btn-warning go clearsearch"  >Clear</button>
	            			</span>
	            			<input type="text" class="form-control search-field searchbar"  onkeypress="javascript:enterpress()" placeholder="Αναζήτηση">
	            			<span class="input-group-btn">
	            				<button type="button" class="btn btn-primary go gosearch"  onclick="javascript:getPost()">Go!</button>
	            			</span>
	            			
	            		</div>	

	            	</div>
	            </div>
	            <p  class="pagination"></p>
	            <div id="all_announcements">
	            	 
	            </div>
	           
				<p class="pagination"></p>
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
    
	<script>
		$(document).ready(function(){
			$('#all_announcements').load("phpplugins/fetch_announcements.php");
			$('.pagination').bootpag({
		    total: <?php echo $pages_number; ?>,
		    page: 1,
		    maxVisible: 5,
		    leaps: true,
		    firstLastUse: true,
		    first: '←',
		    last: '→',
		    wrapClass: 'pagination',
		    activeClass: 'active',
		    disabledClass: 'disabled',
		    nextClass: 'next',
		    prevClass: 'prev',
		    lastClass: 'last',
		    firstClass: 'first'
		}).on("page", function(event, num){
			event.preventDefault();
		    $("#all_announcements").load("phpplugins/fetch_announcements.php", {'page':num});
		}); 
	});

	</script>

		
		
		
	</body>
</html>