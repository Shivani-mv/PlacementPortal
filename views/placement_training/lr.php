<?php

session_start();

if(!isset($_SESSION['admin_name']) && !isset($_SESSION['password'])) {
    header("Location:../../index.php");
}

include '../../src/common/DBConnection.php';

$conn=new DBConnection();


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
    margin-bottom: 10px;
    padding: 10px 17px;
    display: inline-block;
    background: url("bg1234.jpg");
    backgroud-repeat: no-repeat;
    background-size: contain;
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
.aptitude{
  font-family: 'Montserrat';
  position: relative;
  left: 350px; 
  font-size: 43px; 
}
.break{
  position: relative;
  left: 200px;
  top: 25px;
}
.apt_icon{
  width: 600px;
  height: 600px;
  position: relative;
  right: 450px;
  margin: -40px 0 0 0;
}
.apt_icon1{
  width: 600px;
  height: 600px;
  position: relative;
  left: -40px;
  margin: -40px 0 0 0;
}
* {
  box-sizing: border-box;
}

.zoom {
  padding: 50px;
  transition: transform 1s;
  width: 200px;
  height: 200px;
  margin: 0 auto; 
}

.zoom:hover {
  transform: scale(1.1,1.1); 
}
.apt_text {
  width: 400px;
  padding: 20px;
  border: 5px solid gray;
  margin: 50px 0 0 0;
  position: relative;
  left: 750px;
  font-size: 20px;
}
.apt_text1 {
  width: 450px;
  padding: 20px;
  border: 5px solid gray;
  margin: 50px 0 0 0;
  position: relative;
  left: 30px;
  font-size: 20px;
}
.box12 {
  background: white;
  margin: auto;
  margin-top: 5%;
  max-width: 50%;
  padding: 20px 50px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
  position:relative;
  left:270px;
  bottom:30px;
  font-family: 'Montserrat';
  font-size: 20px;
  color:black;
  
}

.box12:hover {
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  animation-name: example;
  animation-duration: 0s;
  border-right: 15px solid #24E500;
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

.box11 {
  background: white;
  margin: auto;
  margin-top: 5%;
  max-width: 50%;
  padding: 20px 50px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
  position:relative;
  right:270px;
  bottom:30px;
  font-family: 'Montserrat';
  font-size: 20px;
  color:black;
  
}

.box11:hover {
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
  animation-name: example;
  animation-duration: 0s;
  border-left: 15px solid #24E500;
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
p {
  text-align: justify;
  
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
                       <div class="aptitude" style="font-family: 'Montserrat';color:black"><b>LOGICAL REASONING</b></div>
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

                                <form class="form-horizontal form-label-left" novalidate>


				<div class="zoom">
				<a href="https://www.indiabix.com/online-test/logical-reasoning-test/">
                                <img class="apt_icon" src="ot_lr.png"></a>
				</div>
				<div class="box12"><i class="fa fa-quote-left"></i><b> Logical reasoning consists of aptitude questions which require a logical level of analysis to arrive at the correct solution. Most of the questions are constructed based on concepts and the rest are out of the box thinking ones. </b><i class="fa fa-quote-right"></i></div>
				<br><br><br><br>
				<br><br><br><br>


				<div class="zoom">
				<a href="https://www.indiabix.com/logical-reasoning/number-series/">
                                <img class="apt_icon1" src="num_series.png"></a>
				</div>
				<div class="box11"><i class="fa fa-quote-left"></i><b> Number series aptitude questions present you with mathematical sequences that follow a logical rule, based on elementary arithmetic. </b><i class="fa fa-quote-right"></i></div>
				<br><br><br><br>
				<br><br><br><br>
				
				

				<div class="zoom">
				<a href="https://www.indiabix.com/verbal-reasoning/syllogism/">
				<img class="apt_icon" src="syllogism.png"></a>
				</div>
				<div class="box12"><i class="fa fa-quote-left"></i><b> Syllogisms are a logical argument of statements using deductive reasoning to arrive at a conclusion. </b><i class="fa fa-quote-right"></i></div>
				<br><br><br><br>
				<br><br><br><br>
				
				

				<div class="zoom">
				<a href="https://www.indiabix.com/verbal-reasoning/blood-relation-test/">
				<img class="apt_icon1" src="blood_relatio.png"></a>
				</div>
				<div class="box11"><i class="fa fa-quote-left"></i><b> Blood relation and distance tests the analytical skills of the students and how one can approach the solution of logical problems with the help of diagrams instead of calculations. </b><i class="fa fa-quote-right"></i></div>
				<br><br><br><br>
				<br><br><br><br>
				
				
				<div class="zoom">
				<a href="https://www.indiabix.com/">
				<img class="apt_icon" src="verbal.png"></a>
				</div>
				<div class="box12"><b><ul><i class="fa fa-quote-left"></i> Verbal Reasoning requires problem solving using words and letters.</ul>
<ul>Non – Verbal Reasoning is problem-solving using pictures and diagrams. <i class="fa fa-quote-right"></i></ul></b></div>
				<br><br><br><br>
				<br><br><br><br>
				<br><br><br><br>
				<br><br>
				
                                </form>
			     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content include -->
        <?php include '../partPage/footer.html' ?>
        <!-- /footer content include -->
    
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
