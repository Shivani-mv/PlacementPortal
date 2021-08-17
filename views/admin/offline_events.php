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
                        <h3 style="font-family:Montserrat;color:black">Offline Events</h3>
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
                           <div class="x_content">
                                <p class="text-muted font-13 m-b-30"></p>

                                <table id="datatable-buttons" class="table table-striped table-bordered" style="font-family:Montserrat;font-size:15px">
                                    <thead>
                                    <tr>
                                        <th>Event Name</th>
                                        <th>Event Date</th>
                                        <th>Event Time</th>
                                        <th>Event Type</th>
                                        <th>Guests</th>
                                        <th>Venue</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($offline as $notice){
                                    ?>
                                    <tr>
                                        <td><?=$notice['event_name']?></td>
                                        <td><?=$notice['event_date']?></td>
                                        <td><?=$notice['event_time']?></td>
                                        <td><?=$notice['event_type']?></td>
                                        <td><?=$notice['guest']?></td>
                                        <td><?=$notice['venue']?></td>
                                        <td>
                                            <?php
                                            if($notice['status']==1){
                                                echo "Due Notice";
                                            }else{
                                                echo "Notice Abandon";
                                            }
                                            ?>
                                        </td>
                                        <td>Show/Edit/Delete</td>
                                    </tr>
                                    <?php
                                   }
                                    ?>
                                    </tbody>
                                </table>
                                <br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br>
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
