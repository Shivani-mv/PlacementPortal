<?php

session_start();

if(!isset($_SESSION['admin_name']) && !isset($_SESSION['password'])) {
    header("Location:../../index.php");
}

//include '../../src/common/DBConnection.php';
//
//$conn=new DBConnection();
//
//print_r($conn->getAll("SELECT * FROM `online`"));

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
    <!-- Custom Theme Style -->
    <link href="../../resource/css/custom.css" rel="stylesheet">
<style>
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
    font-family:Montserrat;
    color: black;
}
.btn1234 {
  background-color: #d0d0d0;
  color: black;
  border-radius: 20px;
  padding: 6px 10px;
  border: none;
  cursor: pointer;
  width: 20%;
  margin-bottom:10px;
  opacity: 0.8;
  font-family:Montserrat;
  font-size: 20px;
  position: relative;
  left: 150px;
}
</style>
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
                        <h5>
                            <?php
                            if(!empty($_GET['message'])) {
                                if($_GET['message']=="success") {
                                    echo "<div class=\"alert alert-success fade in alert-dismissable\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\" title=\"close\">×</a>
                                    Event Successfully Send To Live
                                    </div>";
                                } else if($_GET['message']=="failed") {
                                    echo "<div class=\"alert alert-danger fade in alert-dismissable\">
                                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\" title=\"close\">×</a>
                                    Event Send To Live Unfortunately Failed, Please Try Again Later
                                    </div>";
                                }
                            }
                            ?>
                        </h5>
                        <h3 style="font-family:Montserrat;color:black">Create Online Events <small> Only for admins and coordinators</small></h3>
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
                 <div class="x_panel1">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_content" style="font-family:Montserrat;font-size:15px">
                                <form action="../../src/store/EventStore.php" method="post" class="form-horizontal form-label-left" novalidate>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="eventName">Event Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="eventName" class="form-control col-md-7 col-xs-12" data-validate-minmax="10,20" name="eventSubject" placeholder="Event Name" required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="eventDate1">Event Date <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="eventDate1" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="eventDate1" placeholder="Event Date" required="required" type="date">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="eventTime1">Event Time <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="time" id="eventTime1" name="eventTime1" required="required" placeholder="Event Time" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="eventType1">Event Type<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea rows="3" id="eventType1" name="eventType1" required="required" placeholder="Event Type" class="form-control col-md-7 col-xs-12"></textarea>
                                        </div>
                                    </div>

                                    

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="eventCoordinator">Event Coordinator<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea rows="3" id="eventCoordinator" name="eventCoordinator" required="required" placeholder="Event Type" class="form-control col-md-7 col-xs-12"></textarea>

                                      </div>
                                    </div>

<div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="eventPlatform">Platform<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="eventPlatform" name="eventPlatform" required="required" placeholder="Platform" class="form-control col-md-7 col-xs-12" type="text">
                                        </div>
                                    </div>
<br>                                        



                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="reset" class="btn1234">Reset</button>
                                            <button name="btn-notice" id="btn-notice" type="submit" class="btn1234">Submit</button>


<br><br>
<br><br>
<br><br><br><br>
<br><br>
<br><br><br><br>

                                        
                                          </div>
                                       </div>
                                   </form>
                               </div>
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
