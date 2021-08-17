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
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>

<style>
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
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: PowderBlue;
}

.container123 {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
h1{
           background-color:white;
           text-align:center;
           color:red; 
}
.upload {
   height: 25px;
   width: 25px;
   float: left;
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

#the-canvas {
  border: 1px solid black;
  direction: ltr;
}
.res_template{
   height: 500px;
   width: 400px;
   float: left;
   margin: 10px 10px 10px 10px;
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
  			<a href="../StudentProfile/Profile.php">Profile</a>
                        <a href="../StudentProfile/Education.php">Education</a>
                        <a href="../StudentProfile/Achievements.php">Achievements</a>
                        <a class="active" href="../StudentProfile/Resume.php">Resume</a>
  		     </div>
                        <div class="x_panel12">
               		    <div class="x_content">
			    
			<h3 style="font-family:Montserrat;font-size:30px"><b>Resume Template</b></h3>
                        <br>
			<img class="res_template" src="Page1.jpeg">
			<img class="res_template" src="Page2.jpeg">


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br>

			<h2> <img class="upload" src="upload.png"><p style="color:black;font-size:20px;font-family:Montserrat;">Upload Your Resume</p></h2>
                            </div>
              <script src="//mozilla.github.io/pdf.js/build/pdf.js"></script>
<input type='file' onchange="readURL(this);" />
<br>
    <img id="blah" src="#" alt="your image" />

<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br>

                </div>
            </div>
        </div>
    </div>
</div>
        <!-- /page content -->


        <!-- footer content include -->
        <?php include '../partPage/footer.html' ?>
        <!-- /footer content include -->

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
<script>
 function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(1000)
                        .height(1000);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
</body>
</html>
