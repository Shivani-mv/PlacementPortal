<?php

session_start();

if(!isset($_SESSION['admin_name']) && !isset($_SESSION['password'])) {
    header("Location:../../index.php");
}

include ("../../src/common/DBConnection.php");

$conn=new DBConnection();

$tests=$conn->getOne("SELECT COUNT(id) TOTAL FROM test WHERE status2 = 1");

$_SESSION["tests"] = $tests['TOTAL'];

$events=$conn->getOne("SELECT COUNT(id) TOTAL FROM online WHERE status1 = 1");

$_SESSION["events"] = $events['TOTAL'];

$allEvents=$conn->getAll("SELECT * FROM online WHERE status1 = 1");

$_SESSION["events"] = $allEvents;

$notices=$conn->getOne("SELECT COUNT(id) TOTAL FROM offline WHERE status = 1");

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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.pos_img{
    position:relative;
    height: 120px;
    width: 230px;
    padding: 15px
  
}
.pos_img_google{
    position:relative;
    height: 80px;
    width: 180px;
    padding: 15px
  
}
.pos_img_target{
    position:relative;
    height: 110px;
    width: 100px;
    padding: 15px;
}
.pos_img_vm{
    position:relative;
    height: 60px;
    width: 180px;
    padding: 15px;
}
.pos_img_atnt{
    position:relative;
    height: 80px;
    width: 141px;
    padding: 15px;
}

.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
    width: 100%;
    margin: auto;
}
.x_panel1 {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
    padding: 10px 17px;
    display: inline-block;
    background: #282828;
    border: 1px solid #E6E9ED;
    -webkit-column-break-inside: avoid;
    -moz-column-break-inside: avoid;
    column-break-inside: avoid;
    opacity: 1;
}

body .container.body .right_col1 {
    background-image: url("bg.jpg");
    backgroud-repeat: no-repeat;
    background-size: cover;
    padding:5px;
    background-attachment: fixed;
    transition: none;

}
.nav-sm .container.body .right_col1 {
    padding: 10px 20px;
    margin-left: 70px;
    z-index: 2
}
.nav-md .container.body .right_col1 {
    padding: 10px 20px 0;
    margin-left: 230px;

}
@media (max-width: 991px) {
    .nav-md .container.body .right_col1,
    .nav-md .container.body .top_nav {
        width: 100%;
        margin: 0
    }
    .nav-md .container.body .col-md-3.left_col {
        display: none
    }
    .nav-md .container.body .right_col1 {
        width: 100%;
        padding-right: 0;
    }
    .right_col1 {
        padding: 10px !important
    }
}
.title_slider {
    color: white;
    font-size: 30px;
    position: relative;
    left: 400px;
    font-family: 'Montserrat';
}
.x_title {
    border-bottom: 2px solid #E6E9ED;
    padding: 1px 5px 6px;
    margin-bottom: 10px
}


.dashboard-widget .dashboard-widget-title1 {
    font-weight: normal;
    border-bottom: 1px solid #c1cdcd;
    margin: 0 0 10px 0;
    padding-bottom: 5px;
    padding-left: 40px;
    line-height: 30px
}
.dashboard-widget .dashboard-widget-title1 i {
    font-size: 100%;
    margin-left: -35px;
    margin-right: 10px;
    color: #33a1c9;
    padding: 3px 6px;
    border: 1px solid #fff;
    border-radius: 5px;
    background: #fff
}
.box_heading{
    font-size: 30px;
    color: #fff;
    font-family: 'Montserrat';
}
.subtitle_box{
    font-size: 20px;
    color: #fff;
    font-family: 'Montserrat';
}
.subtitle_box1{
    font-size: 15px;
    color: #fff;
    font-family: 'Montserrat';
}
.subtitle_box_tile{
    font-size: 20px;
    color: #707070;
    font-family: 'Montserrat';
    margin-left: 20px;
}
.inside_box1{
    font-size: 14px;
    color: #fff;
    font-family: 'Montserrat';
}
.count1{
    font-size: 40px;
    margin-left: 10px;
    font-family: 'Montserrat';
}
.tile_img{
    width: 70px;
    height: 70px;
    position: relative;
    margin: 10px;
    float: right;
}


.timeline .byline1 {
    padding: .25em 0
}
.byline1 {
    -webkit-font-smoothing: antialiased;
    font-style: italic;
    font-size: .9375em;
    line-height: 0;
    color: #aab6aa
}
.col-md-120{
    position: relative;
    min-height: 10px;
    padding: 0px 100x 0px 100px;

}
.x_panel2 {
    position: relative;
    padding: 0px 10px 0px 10px;
    width: 100%;
    margin-bottom: 10px;
    display: block;
    background-color: #202020;
    overflow-y: overlay


}
.rectangle {
  height: 200px;
  width: 100%;
  padding: 10px 0 10px 0;
  background-color: #202020;
}



.left carousel-control{
          font-size:100px;
}
.bar_pos {
   position: relative;
   font-size: 15px;
   font-family: 'Montserrat';  
   color: white;
}
.bar_pos1 {
   position: relative;
   font-size: 15px;
   font-family: 'Montserrat';  
}
</style>

    <title>Placement Portal</title>

    <!-- Bootstrap -->
    <link href="../../resource/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../resource/css/font-awesome.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../resource/css/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../../resource/css/daterangepicker.css" rel="stylesheet">
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
        <div class="right_col1" role="main">
            <div class="">
                <div class="row top_tiles">

                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
			    <img class="tile_img" src="company.png">
                            <div class="count1"><b>72<b></div>
                            <div class="subtitle_box_tile">Number of companies visited</div>
                            <p></p>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
			    <img class="tile_img" src="placed.png">
                            <div class="count1">7,892</div>
                            <div class="subtitle_box_tile">Number of students placed</div>
                            <p></p>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
			    <img class="tile_img" src="avg_package.jpg">
                            <div class="count1">4.87LPA</div>
                            <div class="subtitle_box_tile">Average package</div>
                            <p><br><br></p>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="icon"><i class="fa fa-check-square-o"></i></div>
                            <div class="count1">22LPA</div>
                            <div class="subtitle_box_tile">Highest Package<br></div>
                            <p><br>2020</p>
                        </div>
                    </div>
	        </div>




                
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="about_overview.jpg" alt="Chania" width="460" height="345">
      </div>

      <div class="item">
        <img src="banner.png" alt="Chania" width="460" height="345">
      </div>
    
      <div class="item">
        <img src="careers.jpg" alt="Flower" width="50" height="50">
      </div>

      <div class="item">
        <img src="old_cdx.png" alt="Flower" width="460" height="345">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="icon-prev" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="icon-next" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="clearfix"></div>
<br>

                <div class="row">
      
                <div class="col-md-4 col-sm-4 col-xs-12">
                    
                    <div class="x_panel1">
                        <div class="x_title">
                          <div class="box_heading"><b>About Placements</b></div>                         
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="dashboard-widget-content">

                                <ul class="list-unstyled timeline widget">
                                    <li>
                                        <div class="block">
                                            <div class="block_content">
                                                <div class="subtitle_box"><b>Our Vision<b></div>
                                                <div class="byline1"></div>
                                                <div class="inside_box1">Career Guidance and Placement Bureau echoes CMRIT Vision by guiding students to become competent graduates with domain and professional skills, meet their career aspirations, and serve the nation and the society at large.</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="block">
                                            <div class="block_content">
                                                <div class="subtitle_box"><b>Our Mission</b></div>
                                                <div class="byline1"></div>
                                                <div class="inside_box1"><ul>- To collaborate with Industries and Companies to understand business and technology needs, trends and career opportunities</ul><br>
<ul>- To enhance the employability of every student through trainings, certifications, projects, internships, expert talks, workshops, hackathons, etc.</ul><br>
<ul>- To support and guide all students in meeting their career aspirations through Industry Job Placements, Company Internships, Mentoring for higher studies, and Innovation and Entrepreneurship Activities, etc.</ul></div>

                                            </div>
					</div>
                                    </li>                               
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


          <div class="bar_pos">
               <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="x_panel1 tile fixed_height_320">
                        <div class="x_title">
                            <h2><b>Placement Skills Tracker</b></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="widget_summary">
                                <div class="w_left w_25">
                                    <span>Aptitude</span>
                                </div>
                                <div class="w_center w_55">
                                    <div class="progress">
                                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                            <span class="sr-only"100% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w_right w_20">
                                    <span>45%</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="widget_summary">
                                <div class="w_left w_25">
                                    <span>Coding</span>
                                </div>
                                <div class="w_center w_55">
                                    <div class="progress">
                                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 54%;">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w_right w_20">
                                    <span>54%</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget_summary">
                                <div class="w_left w_25">
                                    <span>Technical Knowledge</span>
                                </div>
                                <div class="w_center w_55">
                                    <div class="progress">
                                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w_right w_20">
                                    <span>40%</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget_summary">
                                <div class="w_left w_25">
                                    <span>Soft Skills</span>
                                </div>
                                <div class="w_center w_55">
                                    <div class="progress">
                                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w_right w_20">
                                    <span>65%</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget_summary">
                                <div class="w_left w_25">
                                    <span>General knowledge</span>
                                </div>
                                <div class="w_center w_55">
                                    <div class="progress">
                                        <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w_right w_20">
                                    <span>60%</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br>

             
            <div class="bar_pos1">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="x_panel1 tile fixed_height_320">
                        <div class="x_title">
                            <h2><b>Quick Settings<b></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="dashboard-widget-content">
                                <ul class="quick-list">
                                    <li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>
                                    </li>
                                    <li><i class="fa fa-bars"></i><a href="#">Subscription</a>
                                    </li>
                                    <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                                    <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                                    </li>
                                    <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                                    <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                                    </li>
                                    <li><i class="fa fa-area-chart"></i><a href="#">Logout</a>
                                    </li>
                                </ul>

                                <div class="sidebar-widget">
                                    <h4>Profile Completion</h4>
                                    <canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas>
                                    <div class="goal-wrapper">
                                        <span id="gauge-text" class="gauge-value pull-left">0%</span>
                                        <span class="gauge-value pull-left"></span>
                                        <span id="goal-text" class="goal-value pull-right">100%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            
                <div class="row">
                    <div class="col-md-4">
                        <div class="x_panel1">
                            <div class="x_title">
			       <div class="box_heading">Placement Procedure</div>             
                                <div class="clearfix"></div>
                            </div>

                            <div class="x_content">
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">STEP</p>
                                        <p class="day">1</p>
                                    </a>
                                    <div class="media-body">
                                        <div class="subtitle_box1">Pre-Placement Presentation</div>
                                        <div class="inside_box1"> In the pre-placement presentation, the companies that have come for the campus placements put up presentations regarding their organisation.</div>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">STEP</p>
                                        <p class="day">2</p>
                                    </a>
                                    <div class="media-body">
                                        <div class="subtitle_box1">Qualifications</a></div>
                                        <div class="inside_box1">In this step, you will know about the qualifications and other important criteria companies have set for recruitment.</div>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">STEP</p>
                                        <p class="day">3</p>
                                    </a>
                                    <div class="media-body">
                                        <div class="subtitle_box1">Written Examination</div>
                                        <div class="inside_box1">Once you know the companies you are going to be applying for, you will have to attempt an aptitude test.</div>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">STEP</p>
                                        <p class="day">4</p>
                                    </a>
                                    <div class="media-body">
                                        <div class="subtitle_box1">Group Discussion</div>
                                        <div class="inside_box1">A group of students is created that is moderated by a judge. A common topic is given for the group to discuss. </div>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">STEP</p>
                                        <p class="day">5</p>
                                    </a>
                                    <div class="media-body">
                                        <div class="subtitle_box1">Technical Knowledge Interview</div>
                                        <div class="inside_box1">This is an interview that will check your knowledge related to the subject you are studying, and other important technical knowledge that will be related to your profession.</div>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">STEP</p>
                                        <p class="day">6</p>
                                    </a>
                                    <div class="media-body">
                                        <div class="subtitle_box1">Formal Interview</div>
                                        <div class="inside_box1">This is the final part of the procedure – formal interview. In this round, you are judged for your confidence and abilities.</div>
                                    </div>
                                </article>
                                <article class="media event">
                                    <a class="pull-left date">
                                        <p class="month">STEP</p>
                                        <p class="day">7</p>
                                    </a>
                                    <div class="media-body">
                                        <div class="subtitle_box1"> Post Placement Discussion</div>
                                        <div class="inside_box1">If you have cleared the formal interview, you will get an offer letter and a post-placement discussion.</div>                           
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
        </div>

<br>
                    
                       <div class="rectangle">
                         <div class="x_panel2">
                            <div class="x_title">
				   <div class="title_slider">
					Companies visiting CMRIT
				   </div>
                                <div class="clearfix"></div>
                            </div>
                            <img class="pos_img" src="bosch_w.png">
                            <img class="pos_img_google" src="google.png">
			    <img class="pos_img_target" src="target.png">
                            <img class="pos_img_google" src="accenture.png">
			    <img class="pos_img_vm" src="vmware.png">
			    <img class="pos_img_vm" src="deloite.png">
			    <img class="pos_img_atnt" src="atnt.png">
                           </div>
                        </div>  
                     </div>
            
        <!-- /page content -->

        <!-- footer content include -->
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
<!-- Chart.js -->
<script src="../../resource/js/Chart.min.js"></script>
<!-- jQuery Sparklines -->
<script src="../../resource/js/jquery.sparkline.min.js"></script>
<!-- Flot -->
<script src="../../resource/js/jquery.flot.js"></script>
<script src="../../resource/js/jquery.flot.pie.js"></script>
<script src="../../resource/js/jquery.flot.time.js"></script>
<script src="../../resource/js/jquery.flot.stack.js"></script>
<script src="../../resource/js/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="../../resource/js/jquery.flot.orderBars.js"></script>
<script src="../../resource/js/jquery.flot.spline.min.js"></script>
<script src="../../resource/js/curvedLines.js"></script>
<!-- DateJS -->
<script src="../../resource/js/date.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../../resource/js/moment.min.js"></script>
<script src="../../resource/js/daterangepicker.js"></script>
<!-- Custom Theme Scripts -->
<script src="../../resource/js/custom.min.js"></script>
</body>
</html>
