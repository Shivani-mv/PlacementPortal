<?php

session_start();

if(!isset($_SESSION['admin_name']) && !isset($_SESSION['password'])) {
    header("Location:../../index.php");
}

include '../../src/common/DBConnection.php';

$conn=new DBConnection();

$offline=$conn->getAll("SELECT * FROM `offline`");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Placement Portal</title>

    <!-- Bootstrap -->
    <link href="../../resource/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../resource/css/font-awesome.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../resource/css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../resource/css/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../../resource/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../../resource/css/buttons.bootstrap.css" rel="stylesheet">
    <link href="../../resource/css/fixedHeader.bootstrap.css" rel="stylesheet">
    <link href="../../resource/css/responsive.bootstrap.css" rel="stylesheet">
    <link href="../../resource/css/scroller.bootstrap.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../../resource/css/custom.css" rel="stylesheet">
<style>
.profile_icon{
   height: 200px;
   width: 200px;
   position: relative;
   left: 50px;
   
}
.profile_contents{
   font-size: 20px;
   position: relative;
   bottom:170px;
   left:300px;
   font-family:Montserrat;
   color: black;
   
}
.profile_contents1{
   font-size: 20px;
   position: relative;
   font-family:Montserrat;
   color: black;
   
}


.topnav123 {
  overflow: hidden;
  background-color: #000;
}

.topnav123 a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  font-family:Montserrat;
}

.topnav123 a:hover {
  background-color: #d0d0d0;
  color: black;
}

.topnav123 a.active {
  background-color: #a0a0a0;
  color: black;
}
* {
  box-sizing: border-box;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
table {
    		    font-family: arial, sans-serif;
    		    border-collapse: collapse;
    		    width: 100%;
    		}
    		td, th {
    		    border: 1px solid #dddddd;
    		    text-align: left;
    		    padding: 8px;
    		}
.kd {
   position: relative;
   left: 30px;
   bottom: 40px;
}
.per_head {
   position: relative;
   bottom: 60px;
   left: 40px;
   color: black;
   font-family:Montserrat;
}
.rectangle {
   width: 700px;
   height: 300px;
   border: 5px solid #000;
   position: relative;
   left: 260px;
}
.x_panel12 {
    position: relative;
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
    padding: 10px 17px;
    display: inline-block;
    background: url("bg1234.jpg");
    backgroud-repeat: no-repeat;
    background-size: cover;
    border: 1px solid #E6E9ED;
    -webkit-column-break-inside: avoid;
    -moz-column-break-inside: avoid;
    column-break-inside: avoid;
    opacity: 1;
    transition: all .2s ease
    font-family:Montserrat;
    color: black;
}

</style
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        <!-- side and top bar include -->
        <?php include '../partPage/sideAndTopBarMenu.html' ?>
        <!-- /side and top bar include -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">



           <div class="clearfix"></div>
               <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="topnav123">
  			<a class="active" href="../StudentProfile/Profile.php">Profile</a>
                        <a href="../StudentProfile/Education.php">Education</a>
                        <a href="../StudentProfile/Achievements.php">Achievements</a>
                        <a href="../StudentProfile/Resume.php">Resume</a>
  		     </div>
                        <div class="x_panel12">
               		    <div class="x_content">
                              <br><br><br>
                              <div class="rectangle">
                              <br><br>
                              <img class="profile_icon" src="profile.png">
                              <div class="profile_contents">
                                <p><b>ABC</b></p>
                                <p><i class="fa fa-envelope" aria-hidden="true"></i> abc@cmrit.ac.in</p> 
                                <p><i class="fa fa-university" aria-hidden="true"></i><span> CMR Institue Of Technology</span></p>
                                <p><i class="fa fa-graduation-cap" aria-hidden="true"></i>  <span> CSE - 7th SEM</span></p>
                                <i class="fa fa-pencil" aria-hidden="true"></i>  <span> USN : 1CR17CS001 </span> <br><br>
                              </div>
                           </div>

<br><br><br><br><br><br><br><br>
                              <div class="per_head"><h1> PERSONAL DETAILS </h1></div>
                              <br><br>
                              <img class="kd" src="kd_work.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- /page content -->
 
<?php include '../partPage/footer.html' ?>
</div>
</div> 



<!-- jQuery -->
<script src="../../resource/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../resource/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../resource/js/fastclick.js"></script>
<!-- NProgress -->
<script src="../../resource/js/nprogress.js"></script>
<!-- iCheck -->
<script src="../../resource/js/icheck.min.js"></script>
<!-- Datatables -->
<script src="../../resource/js/jquery.dataTables.min.js"></script>
<script src="../../resource/js/dataTables.bootstrap.min.js"></script>
<script src="../../resource/js/dataTables.buttons.min.js"></script>
<script src="../../resource/js/buttons.bootstrap.min.js"></script>
<script src="../../resource/js/buttons.flash.min.js"></script>
<script src="../../resource/js/buttons.html5.min.js"></script>
<script src="../../resource/js/buttons.print.min.js"></script>
<script src="../../resource/js/dataTables.fixedHeader.min.js"></script>
<script src="../../resource/js/dataTables.keyTable.min.js"></script>
<script src="../../resource/js/dataTables.responsive.min.js"></script>
<script src="../../resource/js/responsive.bootstrap.js"></script>
<script src="../../resource/js/dataTables.scroller.min.js"></script>
<script src="../../resource/js/jszip.min.js"></script>
<script src="../../resource/js/pdfmake.min.js"></script>
<script src="../../resource/js/vfs_fonts.js"></script>
<!-- Custom Theme Scripts -->
<script src="../../resource/js/custom.min.js"></script>
</body>
</html>
