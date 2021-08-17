<?php

session_start();

if(!isset($_SESSION['admin_name']) && !isset($_SESSION['password'])) {
    header("Location:../../index.php");
}

include '../../src/common/DBConnection.php';

$conn=new DBConnection();

$events=$conn->getOne("SELECT COUNT(id) TOTAL FROM online WHERE status1 = 1");

$_SESSION["event"] = $events['TOTAL'];

$allEvents=$conn->getAll("SELECT * FROM online WHERE status1 = 1");

$_SESSION["events"] = $allEvents;

$offline=$conn->getOne("SELECT COUNT(id) TOTAL FROM offline WHERE status = 1");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<style>

<!-- top tiles -->
body .container.body .right_col1 {
    background-image: url("bg.jpg");
    backgroud-repeat: no-repeat;
    background-size: cover;
    padding:5px;
    background-attachment: fixed;
    transition: none;
    overflow-x:hidden;

}
.nav-sm .container.body .right_col1 {
    padding: 10px 20px;
    margin-left: 70px;
    z-index: 2
    width:100%;
}
.nav-md .container.body .right_col1 {
    padding: 10px 20px 0;
    margin-left: 230px;
    width:100%;
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

.tile_img{
    width: 70px;
    height: 70px;
    position: relative;
    margin: 10px;
    float: right;
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
<!-- top tiles -->

<!-- Placement Skills Tracker -->
.bar_pos {
   position: relative;
   font-size: 15px;
   font-family: 'Montserrat';  
   color: white;
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
    color: white;
    font-family: 'Montserrat';
}
<!-- /Placement Skills Tracker -->

.x_panel_1 {
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
    left:10px;
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
.pos_todo{
     position: absolute;
     width:56%;
     left: 1084px;
     top: 1055px;
}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container123 {
  max-width: 1200px;
  position: relative;
  margin: auto;
}


/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #000;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 4s;
  animation-name: fade;
  animation-duration: 4s;
}

@-webkit-keyframes fade {
  from {opacity: .6} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .6} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.x_panel12 {

    background: url("bg1234.jpg");
    backgroud-repeat: no-repeat;
    background-size: cover;
  
}

</style>

    <title>Placement Portal</title>

    <!-- Bootstrap -->
    <link href="../../resource/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../../resource/css/font-awesome.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../../resource/css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../../resource/css/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../../resource/css/bootstrap-progressbar-3.3.4.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../../resource/css/jqvmap.css" rel="stylesheet"/>
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
        <div class="right_col" role="main">

            <!-- top tiles -->       
 
        <div class="x_panel12">
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
            </div>

            <!-- /top tiles -->


            <!-- Carousel -->
<div class="row">
  <div class="slideshow-container123">

<div class="mySlides fade">
  <img src="about_overview.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="banner.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="careers.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="old_cdx.png" style="width:100%">
</div>

</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
</div>
</div>
<br>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>

            
       <!-- /Carousel -->

          <div class="row">
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
          
          <!-- Subject Weightage -->

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="x_panel1 tile fixed_height_320 overflow_hidden">
                        <div class="x_title">
                            <h2><b>Subject Weightage</b></h2>
                            
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table class="" style="width:100%">
                                <tr>
                                    <th style="width:37%;">
                                        <p>Top 5</p>
                                    </th>
                                    <th>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                            <p class="">Subject</p>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                            <p class="">Weightage</p>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                                    </td>
                                    <td>
                                        <table class="tile_info">
                                            <tr>
                                              <td>
                                                <p><i class="fa fa-square blue"></i>Data Structure &</p><p> Algorithms </p>
                                               </td>
                                                <td>30%</td>
                                            </tr>
                                           <tr>
                                                <td>
                                          <p><i class="fa fa-square red"></i>Coding  </p>
                                                </td>
                                                <td>30%</td>
                                     
                                            </tr> 
                                            <tr>
                                                <td>
                                                    <p><i class="fa fa-square purple"></i>Aptitude</p>
                                                </td>
                                                <td>20%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p><i class="fa fa-square aero"></i>Soft Skills</p>
                                                </td>
                                                <td>15%</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>
                                                    <p><i class="fa fa-square green"></i>Other Subjects</p>
                                                </td>
                                                <td>10%</td>
                                            </tr>         
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

          <!-- /Subject Weightage -->

          <!-- Profile Status -->
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="x_panel1 tile fixed_height_320">
                        <div class="x_title">
                            <h2><b>Profile Status</b></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="dashboard-widget-content">
                                <ul class="quick-list">
                                    <li><i class="fa fa-user"></i><a href="../StudentProfile/Profile.php" style="color:white">Profile</a>
                                    </li>
                                    <li><i class="fa fa-bars"></i><a href="../StudentProfile/Personal.php" style="color:white">Personal Info</a>
                                    </li>
                                    <li><i class="fa fa-bar-chart"></i><a href="../StudentProfile/Education.php" style="color:white">Education</a> </li>
                                    <li><i class="fa fa-line-chart"></i><a href="../StudentProfile/Achievements.php" style="color:white">Achievements</a>
                                    </li>
                                    <li><i class="fa fa-bar-chart"></i><a href="../StudentProfile/Resume.php" style="color:white">Resume</a> </li>
 <li><i class="fa fa-line-chart"></i><a href="#" style="color:white">Achievements</a>
                                    </li>
                                    <li><i class="fa fa-area-chart"></i><a href="../../src/store/Logout.php" style="color:white">Logout</a>
                                    </li>
                                </ul>

                                <div class="sidebar-widget">
                                    <h4 style="color:black">Profile Completion</h4>
                                    <canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas>
                                    <div class="goal-wrapper">
                                        <span id="gauge-text" class="gauge-value pull-left">0%</span>
                                        
                                        <span id="goal-text" class="goal-value pull-right" style="color:black">100%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /Profile Status -->
 
            <!-- Placement Procedure -->
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="x_panel1">
                        <div class="x_title">
                            <h2><b>Placement Procedure</b></h2>
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
                                        <div class="subtitle_box1">Qualifications</div>
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



         <!-- /Placement Procedure -->

         <!-- About Placement -->

             <div class="row">
      
                <div class="col-md-4 col-sm-4 col-xs-12">
                    
                    <div class="x_panel1">
                        <div class="x_title">
                          <h2><b>About Placements</b></h2>                         
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="dashboard-widget-content">

                                <ul class="list-unstyled timeline widget">
                                    <li>
                                        <div class="block">
                                            <div class="block_content">
                                                <div class="subtitle_box"><b>Our Vision</b></div>
                                                <div class="byline1"></div>
                                                <div class="inside_box1"> Career Guidance and Placement Bureau echoes CMRIT Vision by guiding students to become competent graduates with domain and professional skills, meet their career aspirations, and serve the nation and the society at large.</div>
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
        <!-- /About Placement -->


                         <!-- Start to do list -->
                                   <div class="pos_todo">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel1">
                                <div class="x_title">

                                    <h2><b>Preparation for the Personal Interview<b></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <div class="">
                                        <ul class="to_do">
                                            <li>
                                                
                                            <div class="flat"><p style="color:black">1. Do not be late for your interview round.</p></div>
                                            </li>
                                            <li>
                                                
                                                    <div class="flat"><p style="color:black">2. Look confident but not appear brash.</p></div>
                                            </li>
                                            <li>
                                                
                                                    <div class="flat"><p style="color:black">3. Do not blatantly lie.</p></div>
                                            </li>
                                            <li>
                                                
                                                    <div class="flat"><p style="color:black">4. Keep your calm and do not not lose focus.</p></div>
                                            </li>
                                            <li>
                                                
                                                    <div class="flat"><p style="color:black">5. Read the ” About Us” page on the company website.</p></div>
                                            </li>
                                            <li>
                                                
                                                    <div class="flat"><p style="color:black">6. Do not get demotivated.</p></div>
                                            </li>
                                            <li>
                                                
                                                    <div class="flat"><p style="color:black">7. Be very prepared regarding the subjects of your interest.</p></div>
                                            </li>
                                            <li>
                                                
                                                    <div class="flat"><p style="color:black">8. Do bring 2-3 copies of your resume.</p></div>
                                            </li>
                                            <li>
                                                
                                                    <div class="flat"><p style="color:black">9. Ask for their feedback.</p></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                        <!-- End to do list -->

<br><br><br>

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
<!-- gauge.js -->
<script src="../../resource/js/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../../resource/js/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../../resource/js/icheck.min.js"></script>
<!-- Skycons -->
<script src="../../resource/js/skycons.js"></script>
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
<!-- JQVMap -->
<script src="../../resource/js/jquery.vmap.min.js"></script>
<script src="../../resource/js/jquery.vmap.world.js"></script>
<script src="../../resource/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../../resource/js/moment.min.js"></script>
<script src="../../resource/js/daterangepicker.js"></script>
<!-- Custom Theme Scripts -->
<script src="../../resource/js/custom.min.js"></script>
</body>
</html>

