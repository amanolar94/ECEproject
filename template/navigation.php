<?php
if(!isset($_SESSION))
      {
        session_start();
      }
  //  ?>
<html>
<head>
<style>
#login-dp{
    min-width: 250px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:#444;
}
#login-dp .help-block{
    font-size:12px
}
#login-dp .bottom{
    background-color:rgba(255,255,255,.8);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
}
#login-dp .social-buttons{
    margin:12px 0
}
#login-dp .social-buttons a{
    width: 49%;
}
#login-dp .form-group {
    margin-bottom: 10px;
}
.btn-fb{
    color: #fff;
    background-color:#3b5998;
}
.btn-fb:hover{
    color: #fff;
    background-color:#496ebc
}
.btn-tw{
    color: #fff;
    background-color:#55acee;
}
.btn-tw:hover{
    color: #fff;
    background-color:#59b5fa;
}
@media(max-width:768px){
    #login-dp{
        background-color: inherit;
        color: #fff;
    }

}
</style>
</head>
<body>
<div class="row">
  <div class="col-md-12">
        <div id="myjumbotron" class="jumbotron">
              <a href="index.php"><img class="myimage" id="hidden-small"  src="img/ece.png" ></a></br>

              <nav id="mynav" class="navbar navbar-inverse">
                  <div id="navigation" class="container-fluid">
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">WebSiteName</a>
                      </div>
                      <div class="collapse navbar-collapse" id="myNavbar">
                         <ul class="nav navbar-nav">

                           <li class="dropdown">
                               <a role="button" class="dropdown-toggle" data-toggle="dropdown" id="dec" href="#">Το Τμήμα
                               <span class="caret"></span></a>
                               <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" id="drop">
                                 <li ><a href="xairetoures.php"  id="dec"  >Χαιρετισμοί</a></li>
                                 <li ><a href="history.php"  id="dec" >Ιστορία</a></li>
                                 <li ><a href="secre.php" id="dec" >Γραμματεία</a></li>
                                 <li ><a href="epitropes.php" id="dec">Επιτροπές τμήματος</a></li>
                                 <li ><a id="dec"  href="ugeia.php" >Υγιεινή και Ασφάλεια</a></li>


                               </ul>
                             </li>
                            <li><a href="division.php" id="dec" >Τομείς</a></li>
                            <li class="dropdown">
                                <a role="button" class="dropdown-toggle" data-toggle="dropdown" id="dec" href="#">Εκπαίδευση
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" id="drop">
                                  <li ><a href="secretary.php"  id="dec"  >Οδηγοί Σπουδών</a></li>
                                  <li ><a href="../admin/schedule2.php"  id="dec" >Ωρολόγιο Πρόγραμμα</a></li>



                                </ul>
                              </li>

                            <li><a href="personal.php" id="dec">Προσωπικό</a></li>


                         </ul>
                        <ul class="nav navbar-nav navbar-right">
                          <li><a href="professors.php" id="dec">Καθηγητές</a></li>
                          
                          <li><a href="information.php" id="dec">Πληροφορίες</a></li>
                          <?php if(isset($_SESSION["username"])){
                            ?>  <li><a href="../admin/<?php if(isset($_SESSION['student'])){ echo 'profile.php';}elseif(isset($_SESSION['teacher'])){ echo 'profile-prof.php';} ?>" id="dec">User menu</a></li><?php }else{ ?>
                          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Login</a>
                            <ul id="login-dp" class="dropdown-menu">
                          <li>
                            <div class="row">
                                  <div class="col-md-12">

                                        <?php

                                        $servername = "localhost";
                                          $username = "root";
                                          $password = "";
                                          $dbname = "ecedatabase";
                                          // Create connection
                                          $conn = new mysqli($servername, $username, $password, $dbname);
                                          // Check connection
                                          if ($conn->connect_error) {
                                              die("Connection failed: " . $conn->connect_error);
                                          }
                                          // Change character set to utf8
                                          mysqli_set_charset($conn,"utf8"); ?>


                                           <form class="form"  method="post" action="login.php" accept-charset="UTF-8" id="login-nav">
                                           <div class='form-group'>

                                         <label class="sr-only" >Username</label>
                                         <input name="username" class="form-control"   placeholder="Username" required>
                                       </div>
                                       <div class="form-group">

                                         <label class="sr-only" for="exampleInputPassword2">Password</label>
                                         <input type="password" name="password" class="form-control"   placeholder="Password" required>
                                       </div>
                                         <div class="form-group">
                                          <input id="check" type="checkbox" >
                                          <label for="check" style="color:white"><span class="icon"></span> Keep me Signed in</label>
                                        </div>
                                                              <!-- <div class="help-block text-right"><a href="">Forget the password ?</a></div> -->


                                         <input type="submit" class="btn btn-primary btn-block" name="login" value="login">


                                        <!--<div class="checkbox">
                                         <label>
                                         <input type="checkbox"> keep me logged-in
                                         </label>
                                       </div> -->
                                     </form> <?php } ?>
                                          <?php //include "login.php"; ?>
                                        </div>

                                  </div>
                         </li>
                    </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</body>
</html>
