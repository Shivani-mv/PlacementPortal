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
<meta name="viewport" content="width=device-width, initial-scale=1">

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
    margin-bottom: 15px;
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
  left: 300px; 
  font-size: 43px; 
}
.break{
  position: relative;
  left: 200px;
  top: 25px;
}
.apt_icon1{
  width: 450px;
  height: 450px;
  position: relative;
  right: 380px;
  border-radius: 50%;
}
.apt_icon{
  width: 450px;
  height: 450px;
  position: relative;
  left: 50px;
  border-radius: 50%;
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
  border-right: 15px solid #1034A6;
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
  border-left: 15px solid #1034A6;
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}






p {
  text-align: justify;
  
}

@keyframes example {
    0%   {border-left: 2px solid #ffffff;}
    25%  {border-left: 3px solid #ffe6e6;}
    50%  {border-left: 4px solid #ff8080;}
    100% {border-left: 5px solid #ff0000;}
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
                       <div class="aptitude" style="font-family: 'Montserrat';color:black"><b>QUANTITATIVE APTITUDE</b></div>
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

				<br>
				<div class="zoom">
                                <a href="https://www.indiabix.com/online-test/aptitude-test/">
				<img class="apt_icon1" src="online_test.jpg"></a><br><br><br><br>
				</div>
                                
				<div class="box12"><i class="fa fa-quote-left"></i><b> Quantitative aptitude is an inseparable and an integral part of aptitude exams in India. It tests the quantitative skills along with logical and analytical skills. </b><i class="fa fa-quote-right"></i></div>

				<br><br><br><br>
				<br><br><br><br>
				
				<div class="zoom">
                                <a href="https://www.indiabix.com/aptitude/numbers/">
				<img class="apt_icon" src="num_system.jpg"></a>
				</div>

				<div class="box11"><i class="fa fa-quote-left"></i><b> A number system is a system of writing for expressing numbers. It is the mathematical notation for indicating numbers of a given set by using numerals in a constant manner. <b><i class="fa fa-quote-right"></i></div>

				<br><br><br><br>
				<br><br><br><br>
                                <br><br>


				<div class="zoom">
                                <a href="https://www.indiabix.com/aptitude/time-and-distance/">
				<img class="apt_icon1" src="tsd1.jpg"></a><br><br><br><br>
				</div>
				<div class="box12"><i class="fa fa-quote-left"></i><b> Time, Speed and distance is an important part of every competitive exam. Speed is defined as distance traveled divided by the time. Using this formula all types of problems on speed and distance can be solved. </b><i class="fa fa-quote-right"></i></div>

				<br><br><br><br>
				<br><br><br><br>

				<div class="zoom">
                                <a href="https://www.indiabix.com/aptitude/time-and-work/">		
				<img class="apt_icon" src="time_work.jpg"></a><br><br><br><br>
				</div>
				<div class="box11"><i class="fa fa-quote-left"></i><b> Time and Work involves dealing with the rate at which individuals or group of people work. Rate of work is the most significant concept in Time and Work problems because it makes it possible, to add up the effort of different people working together where each of them has a different rate of work over a unit of time. </b><i class="fa fa-quote-right"></i></div>

				<br><br><br><br>
				<br><br><br><br>

				<div class="zoom">
                                <a href="https://www.indiabix.com/aptitude/numbers/">
                                <img class="apt_icon1" src="profit.jpg"></a><br><br><br><br>
				</div>
				<div class="box12"><i class="fa fa-quote-left"></i><b> Profit and loss is part and parcel of every business. If the selling price of a product exceeds its cost price or production price, then a profit is made. If the selling price of a product is less than its cost price, then a loss is incurred. </b><i class="fa fa-quote-right"></i></div>

				<br><br><br><br>
				<br><br><br><br>

				<div class="zoom">
                                <a href="https://www.indiabix.com/aptitude/bankers-discount/">
                                <img class="apt_icon" src="interest1.jpg"></a><br><br><br><br>
				</div>


                                <div class="box11"><i class="fa fa-quote-left"></i><b> When a person or bank lends money to a borrower, the borrower usually has to pay an extra amount of money to the lender. This extra money is called interest .</b><i class="fa fa-quote-right"></i></div>
				
				<br><br><br><br>
				<br><br><br><br>

				<div class="zoom">
                                <a href="https://www.indiabix.com/aptitude/profit-and-loss/">
				<img class="apt_icon1" src="ratio.jpg"></a><br><br><br><br>
                                </div>
                                <div class="box12"><i class="fa fa-quote-left"></i><b>
				The quantitative aptitude section in any competitive exam has many different types of questions. One of them is Ratio, proportion and variation. </b><i class="fa fa-quote-right"></i></div>
				<br><br><br><br>
				<br><br><br><br>
				<br><br><br><br>
				<br><br><br><br>
				<br><br><br><br>

			     
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
