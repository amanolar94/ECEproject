<!DOCTYPE html>
<?php
if(!isset($_SESSION))
      {
        session_start();
      }
  //  ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Το τμήμα</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
      <link href="css/customcss.css" rel="stylesheet">
      <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://use.fontawesome.com/484df5253e.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnycWatbGyK6ldFqErjFtko1yeMclNUOA&amp;sensor=true"></script>
      <script type="text/javascript" src="java.js"></script>
      <script>
      $(document).ready(function(){
        var readMoreHtml =$(".read-more").html();
        var lessText=readMoreHtml.substr(0,300);
        if(readMoreHtml.length>300){
          $(".read-more").html(lessText).append("<a href='' class='read-more-link'>... Read more</a>");}
          else{
            $(".read-more").html(readMoreHtml);
          }
          $("body").on("click",".read-more-link",function(event){
            event.preventDefault();
            $(this).parent(".read-more").html(readMoreHtml).append("<a href=''  class=show-less-link >Read less</a>");

          });
          $("body").on("click",".show-less-link",function(){
              event.preventDefault();
            $(this).parent(".read-more").html(readMoreHtml.substr(0,300)).append("<a href=''  class=read-more-link >... Read more</a>");

          });
        });

      </script>
      <style>

.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
      #box{

         box-shadow: 10px 10px 5px #888888;
      }
      #title{
        text-decoration: underline;
      }
      #black{
        color: black;
      }

      .read-more{

        padding: 15px;
        margin-bottom: 20px;

      }
      .read-more-link, .show-less-link{
        text-decoration: none;
        font-weight: bolder;
        color:black;
      }
      .symbol {
    margin: 0 auto;

    width: 128px;
    height: 128px;

    background-image: url(../image/symbol.png);
    background-size: cover;
}


      </style>


		<!-- SCRIPTS -->



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body background="coverme.png">
    <?php
    include 'navigation.php';
     ?>

    <?php
           ?>


      <div class="container-fluid text-center">
       <div class="row content">
         <div class="col-md-2 ">

         </div>
         <div class="col-md-8 ">
           <div class="bookmark-box">

			<a class="boxclose" id="boxclose"></a>


			<img  src="uni.png"class="bookmark-title"></img>

		<div class="description ">

			<p>Σας καλωσορίζουμε στο Τμήμα Ηλεκτρολόγων Μηχανικών και Τεχνολογίας Υπολογιστών το οποίο ιδρύθηκε το 1967 ως το πρώτο Τμήμα της Πολυτεχνικής Σχολής του Πανεπιστημίου Πατρών. Το Τμήμα μας καλύπτει εκπαιδευτικά και ερευνητικά τις περιοχές Ηλεκτρικής Ενέργειας, Τηλεπικοινωνιών και Τεχνολογίας Πληροφορίας, Ηλεκτρονικής και Υπολογιστών, Συστημάτων και Αυτομάτου Ελέγχου. Σας προσκαλούμε να επισκεφθείτε τις εγκαταστάσεις μας ή να περιηγηθείτε ηλεκτρονικά στον ιστότοπό μας.
</p>
		</div>



	</div><!-- /bookmark-box -->



         </div>
         <div class="col-md-2 ">

         </div>
       </div>
       <div class="row content " id="color">
         <div class="col-md-2 ">
           <div class="slideshow">
               <div class="slide" style="background: url('proedras.jpg');"><h2>ΜΕΓΑΛΟΣ Πρόεδρος Τμήματος (Νικ)</h2></div>
                 <div class="slide" style="background: url('augolemonos.jpg');"><h2>Διακριθέν Μέλος (Αυγολέμονος) </h2></div>
                 <div class="slide" style="background: url('ypoyifios.jpg'); "><h2>Απόφοιτος Τμήματος(Μ.Ο. 10)</h2></div>
              </div></br>
              <div class="calendar-wrapper">
               <button id="btnPrev" type="button">Prev</button>
               <button id="btnNext" type="button">Next</button>
               <div id="divCal"></div>
              </div>








         </div>
         <div class="col-md-10 " id="dec1" >
           <h1 id="black"> Ανακοινώσεις </h1>

             <?php

            /* <a href="web/viewer.html?file=New-Doc.pdf">View PDF</a> */
             $servername = "localhost";
               $username = "root";
               $password = "";
               $dbname = "ecedatabase";
               $i=0;
               // Create connection
               $conn = new mysqli($servername, $username, $password, $dbname);
               // Check connection
               if ($conn->connect_error) {
                   die("Connection failed: " . $conn->connect_error);
               }
               // Change character set to utf8
               mysqli_set_charset($conn,"utf8");
              // session_start();
               $sql = "SELECT * FROM announcement ORDER BY announcement_id DESC;  ";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
                   // output data of each row
                   while($row = $result->fetch_assoc() ) {
                     if($i<=3){
                     ?>

                  <div id="box">
                  <div id="title">
                 <?php       echo
                       "<br> <b> " . $row["title"]."</b>" ?> </div>

                  <div class="read-more" >  <?php  echo "<br> Επώνυμο " . $row["content"]."<br>";
                   $i=$i+1; ?></div></div>
                <?php   }}
                 } else {
                   echo "0 results";
               }










           $conn->close();
            ?>



         </div>


     </div>


  <footer class="container-fluid text-center">
    <div class="row" >
      <div class="col-md-2">
      </br><p> Μέσα κοινωνικής δικτύωσης </p></br>
        <a  href="https://www.facebook.com/eceupatras" ><img src="logo-fb.png" id="fb"></a></br></br>
        <a href="https://twitter.com/EceUpatras"><img src="twitter-logo.png" id="fb" ></a></br></br>
        <a href="https://www.linkedin.com/in/upatrasece"><img src="logo-in.png" id="fb" ></a></br></br>
      <p> ΗΜΤΥ Forum </p></br>
      <a href="http://eceforum.ece.upatras.gr/"> <img src="code.png" id="cd"></a>




      </div>
      <div class="col-md-10">
        <div class="map">
      <div id="map"></div>
      <div class="map-c">
        <h1 id="black">Τοποθεσία Σχολής</h1>
        <p id="black">Η σχολή μας στεγάζεται στην Πανεπιστημιούπολη Πατρών.</p>
        <div id="black" class="det"><i class="fa fa-map-marker"></i> Υπατίας-25ης Μαρτίου, Πανεπιστημιούπολη Πατρών</div>
        <div id="black" class="det"><i class="fa fa-phone"></i>0030 2610 996420 </div>
        <div id="black" class="det"><i class="fa fa-globe"></i> http://www.ece.upatras.gr/</div>

      </div>

      </div>
    </div>

  </footer>














    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
