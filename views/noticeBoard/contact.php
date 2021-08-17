<?php

session_start();

if(!isset($_SESSION['admin_name']) && !isset($_SESSION['password'])) {
    header("Location:../../index.php");
}

include '../../src/common/DBConnection.php';

$conn=new DBConnection();

$events=$conn->getAll("SELECT * FROM `online`");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<style>

.select2-container2--default .select2-selection--single,
.select2-container2--default .select2-selection--multiple {
    background-color: #808080;
    border: 1px solid #000;
    border-radius: 0;
    min-height: 38px
}

.x_content{
    padding: 0 5px 6px;
    position: relative;
    width: 100%;
    clear: both;
    margin-top: 5px
    background-color: #808080;
}
.x_panel1 {
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
}

.container1 {
  position: relative;
  width: 50%;
  left: 300px;
  padding: 15px 0 15px 0;
}

.image {
  opacity: 1;
  display: block;
  width: 200px;
  height: auto;
  position: relative;
  right:120px;
  transition: .5s ease;
  backface-visibility: hidden;
  padding: 50px 0 50px 0;
  
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  
}

.container1:hover .image {
  opacity: 0.01;
  height:80%;
  
}
.container1:hover .middle {
  opacity: 0.5;
  background-color: black;
  display: block;
  width: 850px;
  height:80%;
}
.text {
  color: white;
  font-size: 25px;
  font-family: 'Montserrat';
}
.coding{
  font-family: 'Montserrat';
  position: relative;
  left: 300px; 
  font-size: 40px; 
}
.break{
  position: relative;
  left: 0px;
  width: 100%;
}

.alumni1{
   border-radius:50%;
   width: 350px;
   position: relative;
   left: 150px;
   vertical-align: top;

 
}
.alum_font1{
   font-family:'Montserrat';
   position:relative;
   bottom: 270px;
   left: 250px;
   margin: 10px 150px 100px 10px;
   font-size: 20px;
   color:black;
   float: down;
   text-align: center;
}



</style>
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
    <!-- Custom Theme Style -->
    <link href="../../resource/css/custom.css" rel="stylesheet">
</head>
<body class="nav-md">
  <div class="container2">
<div class="container body">

    <div class="main_container">

        <!-- side and top bar include -->
        <?php include '../partPage/sideAndTopBarMenu.html' ?>
        <!-- /side and top bar include -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                       <div class="coding" style="color:black;font-family:Montserrat"><b>Placement Cell Members</b></div>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel1">
                            
                            <div class="x_content">
                            <br><br><br><br>
                        <h1 align="center" style="color:black;font-family:Montserrat">Teacher Co-ordinator</h1><br><br><br>
                            <img class="alumni1" src="malla1.png">
                             <div class="alum_font1"><b><p>Lakshman Malla</p><p>Placement Director</p><p><i class="fa fa-phone"></i> Contact : 98450 27392</p><p><i class="fa fa-envelope"></i> Email : director.placement@cmrit.ac.in </p></b></div>
                              
                             <img class="alumni1" src="sachu.png">                            
                             <div class="alum_font1"><b><p>Sachin Gudimani</p><p>Teacher Placement Co-ordinator</p><p><i class="fa fa-phone"></i> Contact : 96201 60796</p><p><i class="fa fa-envelope"></i> Email : sachin.g@cmrit.ac.in</p></b></div>

                             <img class="alumni1" src="rinku1.jpg">
                             <div class="alum_font1"><b><p>Rinku Talukdar</p><p>Teacher Placement Co-ordinator</p><p><i class="fa fa-phone"></i> Contact : 70023 51532</p><p><i class="fa fa-envelope"></i> Email : rinku.t@cmrit.ac.in</p></b></div>
                             <img class="alumni1" src="icon.png">
                             
                             <div class="alum_font1"><b><p>Simanth Kumar</p><p>Teacher Placement Co-ordinator</p><p><i class="fa fa-phone"></i> Contact : 97696 68121</p><p><i class="fa fa-envelope"></i> Email : simant.k@cmrit.ac.in</p> </b></div>

                            <h1 align="center" style="color:black;font-family:Montserrat">Student Co-ordinator</h1><br><br><br>

                             <img class="alumni1" src="ishita.jpg">
                             <div class="alum_font1"><b><p>Ishita Chattopadhyay</p><p>Student Placement Co-ordinator</p><p><i class="fa fa-phone"></i> Contact : 90662 17995</p> <p><i class="fa fa-envelope"></i> Email : isch18cs@cmrit.ac.in</p></b></div>
                             <img class="alumni1" src="paul1.jpeg">
                             <div class="alum_font1"><b><p>Thangam Paul Alex</p><p>Student Placement Co-ordinator</p><p><i class="fa fa-phone"></i> Contact : 81054 37270</p><p><i class="fa fa-envelope"></i> Email : thpa18cs@cmrit.ac.in</p> </b></div>
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
<!-- validator -->
<script src="../../resource/js/validator.js"></script>
<!-- Custom Theme Scripts -->
<script src="../../resource/js/custom.min.js"></script>
</body>
</html>
