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
    height: 100%;
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
.coding{
  font-family: 'Montserrat';
  position: relative;
  left: 500px; 
  font-size: 50px; 
}
.break{
  position: relative;
  left: 0px;
  width: 100%;
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
                       <div class="coding" style="font-family: 'Montserrat';color:black"><b>CODING</b></div>
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
				<div class="container1">
                                  <a href="https://www.hackerrank.com/dashboard">		
				  <img src="hackerrank1.png" class="image" style="width:850px">
				  <div class="middle">
				    <div class="text"><h1>About HackerRank:</h1><br>HackerRank is a technology hiring platform that is the standard for assessing developer skills for over 2,000+ companies around the world.</div>
				  </div></a>
				</div>
                                <img class="break" src="break_g.png">
				<br><br><br><br>
                                <div class="container1">
                                  <a href="https://www.codechef.com/">		
				  <img src="codechef.png"  class="image" style="width:850px">
				  <div class="middle">
				    <div class="text"><h1>About CodeChef:</h1><br>Codechef is a competitive programming community of programmers from across the globe. Apart from its monthly coding contests for the community, CodeChef has many initiatives for Schools, Colleges and Women in competitive programming.</div>
				  </div></a>
				</div>
                                <img class="break" src="break_g.png">
				<br><br><br><br>
                                <div class="container1">
                                  <a href="https://www.hackerearth.com/">		
				  <img src="hackerearth.png"  class="image" style="width:850px">
				  <div class="middle">
				    <div class="text"><h1>About HackerEarth:</h1><br>HackerEarth provides enterprise software that helps organisations with their technical hiring needs. </div>
				  </div></a>
				</div>
                                <img class="break" src="break_g.png">
				<br><br><br><br>
                                <div class="container1">
                                  <a href="https://www.topcoder.com/">			
				  <img src="topcoder.png"  class="image" style="width:850px ">
				  <div class="middle">
				    <div class="text"><h1>About Topcoder:</h1><br>Topcoder (formerly TopCoder) is a crowdsourcing company with an open global community of designers, developers, data scientists, and competitive programmers.</div>
				  </div></a>
				</div>
                                <img class="break" src="break_g.png">
				<br><br><br><br>
                                <div class="container1">
                                  <a href="https://coderbyte.com/">			
				  <img src="codebyte.png"  class="image" style="width:850px">
				  <div class="middle">
				    <div class="text"><h1>About Coderbyte:</h1><br>Coderbyte is a web application built to help you practice programming and improve your coding skills.</div>
				  </div></a>
				</div>

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
