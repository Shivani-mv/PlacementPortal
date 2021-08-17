<?php

session_start();

if(!isset($_SESSION['admin_name']) && !isset($_SESSION['password'])) {
    header("Location:../../index.php");
}

include '../../src/common/DBConnection.php';

$conn=new DBConnection();

$achievements=$conn->getAll("SELECT * FROM `achievement`");

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
                <div class="x_panel1">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="topnav123">
  			<a href="../StudentProfile/Profile.php">Profile</a>
                        <a href="../StudentProfile/Education.php">Education</a>
                        <a class="active" href="../StudentProfile/Achievements.php">Achievements</a>
                        <a href="../StudentProfile/Resume.php">Resume</a>
  		     </div>
                              
			      
 <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                           <div class="x_content">
                               <h1 style="font-family:Montserrat">Achievements</h1>
<br><br>
                                <p class="text-muted font-13 m-b-30">

                                </p>

                                <table id="datatable-buttons" class="table table-striped table-bordered" style="font-family:Montserrat;font-size:15px">
                                    <thead>
                                    <tr>
                                        <th>USN</th>
                                        <th>Event Name</th>
                                        <th>Event Date</th>
                                        <th>Position Secured</th>
                                        <th>Event Level</th>
                                        <th>Event Type</th> 
					<th>Status</th>
					<th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    foreach ($achievements as $achievement){
                                    ?>
                                    <tr>
                                        <td><?=$achievement['Usn']?></td>
                                        <td><?=$achievement['event_name2']?></td>
                                        <td><?=$achievement['event_date2']?></td>
                                        <td><?=$achievement['position']?></td>
                                        <td><?=$achievement['event_level']?></td>
                                        <td><?=$achievement['event_type2']?></td>
                                        <td>
                                            <?php
                                            if($achievement['status4']==1){
                                                echo "Due Event";
                                            }else{
                                                echo "Event Abandon";
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
			     
                             <h4 style="color: black;font-family:Montserrat">Add new achievements</h4>
                               <a href="../StudentProfile/create_achievements.php"><button class="btn1234">Add</button></a>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>        

                            </div>
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
