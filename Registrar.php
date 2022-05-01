<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Registrar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />
  <link rel="stylesheet" href="css/main_header.css">
  <link rel="stylesheet" href="./css/social.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/nav_bar.css">
  <link rel="stylesheet" href="./css/fontawesome/css/all.css">

</head>

<body>
  <div id="wrapper">
    <!-- start header -->
    <header>
      <?php 
        $page = 'other';
        include 'header.php';
      ?>
    </header>
    <?php include 'social.php';
        include 'ham.php';
  ?>
        <!-- end header -->
       
        <div class="row mob-nav">
          <div class="span4">
            <div class="logo">
              <a href="index.php"><img src="img/lo.png" alt="" class="logo" /></a>
            </div>
          </div>
            
          <div class="span8">
            <div class="navbar navbar-static-top pull-left">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav" style="padding-top:20px;">
                     
                    <li class="active">
                      <a href="index.php">Home</a>
                    </li>
					<li class="dropdown">
                      <a href="#">Administration <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li class="dropdown"><a href="#">President's <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="">Profile</a></li>
                            <li><a href="PresidentMessage.php">Messages</a></li>
                          </ul>
                        </li>
                        
                        <li class="dropdown"><a href="#">Vice President's <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="ARVPmessage.php">ARVP Message</a></li>
                            <li><a href="ADVPmessage.php">ADVP Message</a></li>
                          </ul>
                        </li>
                  </ul>
				  </li>
					<li class="dropdown">
                      <a href="#">Research<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li class="dropdown"><a href="#">Directorate of Research, Publication & Technology Transfer <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="aboutDRPTT.php">About</a></li>
                            <li><a href="ThematicArea.php">Thematic&nbsp;Area</a></li>
                            <li><a href="">Research&nbsp;Database</a></li>
                          </ul>
                        </li>
						<li class="dropdown"><a href="#">Offices <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="Research.php">Research</a></li>
                            <li><a href="Publication.php">Publication</a></li>
                            <li><a href="">Technology&nbsp;Transfer</a></li>
                            
                          </ul>
                        </li>
						<li class="dropdown"><a href="#">Research Site <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="poultery.php">Poultry</a></li>
							<li><a href="farm.php">Farm</a></li>
							<li><a href="Nursery.php">Nursery</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
					
					<li class="dropdown">
                      <a href="#">Academic<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li class="dropdown"><a href="#">Colleges <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="eng&tech.php">Engineering&nbsp;&amp;&nbsp;Technology</a></li>
                            <li><a href="coMHS.php">Medicine&nbsp;&amp;&nbsp;Health&nbsp;science</a></li>
                            <li><a href="cda.php">Dryland&nbsp;Agriculture</a></li>
							<li><a href="coEBS.php">Education&nbsp;&amp;&nbsp;Behavioural&nbsp;studies</a></li>
							<li><a href="cvm.php">Veterinary&#8303;&nbsp;&nbsp;Medicine</a></li>
							<li><a href="coBE.php">Business&nbsp;&amp;&nbsp;Economics</a></li>
							<li><a href="CSSH.php">Social&nbsp;Sciences&nbsp;&amp;&nbsp;Humanities</a></li>
							<li><a href="CNCS.php">Natural&nbsp;&amp;&nbsp;Computational&nbsp;Science</a></li>
                          </ul>
                        </li>
						<li class="dropdown"><a href="#">Schools <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="SL.php">Law</a></li>
                            <li><a href="">Psychology</a></li>
                            <li><a href="SGS.php">Graduate&nbsp;Studies</a></li>
                          </ul>
                        </li>
						<li class="dropdown"><a href="#">Institute <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="ISLLS.php">Somali&nbsp;Language&nbsp;and&nbsp;Literature&nbsp;Studies</a></li>
                            
                          </ul>
                        </li>
                      </ul>
                    </li>
					<li class="dropdown">
                      <a href="#">OTHERS<i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="RefHospital.php">Referral Hospital</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="Registrar.php">Registrar</a></li>
                      </ul>
                    </li>
                    <li>
                      <a href="about.php">About us</a>
                    </li>
					
                    <li>
                      <a href="contact.php">Contact Us</a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
	
	<section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
                <h2>Registrar</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="index.php"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="">OTHERS</a><i class="icon-angle-right"></i></li>
              <li class="active">Registrar</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
<section id="content">
		<div class="container">
			<div class="row" style="margin-top:-40px;">
				<div class="span10 offset1">
				<div class="testimonial">
					<!--<div class="post-image">
						<img src="img/dummies/blog/maingate.jpg" alt="" />
					</div>-->
					<h4 class="heading"><strong>Registrar Office </strong></h4>
					<p>
					Jigjiga University (JJU) is one of the Ethiopian public universities which is consists of all the six Bands namely; Engineering and Technology, Natural and Computational Science, Medicine and Health Science, Agriculture and Life Science, Business and Economics, Social Science and Humanities). 
					JJU has eight colleges, four schools, two institutes including the newly established Institute of Pastoral Studies and fifty nine departments/programs. 
					</p>
					<h6>Currently the University has; </h6>
						<ul>
							<li>7273 male, and 3567 female ( a total of 10840) students in Undergraduate Regular Programs .</li>
							<li>3658 male, and 1249 female (a total of 5041) students in Undergraduate Extension Programs .</li>
							<li>4174 male and 910 female (a total of 5084) students in summer programs .</li>
							<li>380 male and 34 female (a total of 414) students in Postgraduate programs .</li>
							
						</ul>
					<p>
						Hence, our University has a total of 15619 male and 5760 female (21379 total) number of students.
					</p>
					<p>
                    JJU is also contributing towards the development of neighboring countries. Among the above mentioned students, about 120 are from Somalia, Punt Land and Somali land in undergraduate and postgraduate programs.
					</p>
					<p>
                    Except in some departments (School of Medicine and Software Engineering Department), all regular under graduate programs business process is automated through the Student Information Management System (SIMS) including the 2008 E.C and 2009 E.C batch extension students, and 2008 batch summer students.
 
					</p>
					<p>
					The implementation of this system is paramount in facilitating the teaching and learning process through creating ease of grade submission process in online system, perfect academic achievement determination, and graduation certification which are supported by different student related reports. In addition to this, dormitory placement and total building management are also supported by the system. 

					</p>
					<p>
					Furthermore, the Registrar Office conducted three trainings for instructors, heads of departments, students and Registrar workers on Academic Rules and Regulations, SIMS usage skills, Kiasen, and Customer service handling in order to create harmonious working environment with our stakeholders.
					</p>
					<p>
					Finally, handling Masters students’ business process automation and one window customer service mechanism are in the Office’s plan which hopefully will be implemented in 2010 Academic Year. 
					</p>
					
						
							<div class="solidline">
							</div>
							
							<h4 class="heading"><strong>Continuing and Distance Education Program (CDEP)</strong></h4>
					<p>
					Since its establishment, JJU has been investing great efforts to meet the demand of higher education by taking the mandate to solve the shortage of qualified human power in the Region.
					</p>
					<p>
					Currently, about 9,798 students are enrolled in continuing education programs in summer, evening and weekend setups in different disciplines. 
					</p>
					<p>
					The Continuing and Distance Education Program (CDEP) office is working to expand its weekend programs to a neighboring country, Somaliland, Hargiesa City in both undergraduate and postgraduate programs in the coming Academic Year.  Furthermore, the office of CDEP will start distance education program in Warder, Gode and Filtu in seven departments. 
					</p>
					<p><ins>
					The major achievements that have been met in this Academic Year in the weekend programs outside Jigjiga, evening, summer and distance programs are listed here under :</ins>
					</p>
					<ul>
						<li>A total of 935 students were accepted and received in degree program in this Academic Year, 2016/17 according to MOE university entry criteria. About 255 students have already registered for weekend education outside Jigjiga in Gode, Qebridehar, Deghabour and Fik centers. They have been attending in the Departments of Management, Public Administration, Accounting and Finance.
						</li>
						<li class="margintop10"> In Jigjiga Center, 680 students of Evening and Weekend programs have been enrolled in the departments of Management, Public Administration, Accounting and Finance, Civil Engineering, IT, Food Science and Nutrition, and Arabic Language. 
						</li>
						<li class="margintop10">CDEP office has made possible for the students to have an access for all important information through the Student Management Information Systems (SIMS)
						</li>
						<li class="margintop10">To improve the quality of education in weekend Program outside Jigjiga, the CDEP has made program change (additional teaching time table and travel schedule) in order to provide enough time for course coverage and appropriate continuous assessments. 
						</li>
						<li class="margintop10">The Office has already fulfilled important educational and office materials to all weekend centers (Gode, Qebridehar, Degahabour, Fik and Shinille).
						</li>
						<li class="margintop10">With the strong commitment and great efforts of the CDEP office, Colleges, Departments, Registrar Office and other stakeholders, it was made possible to graduate a total of 628 Evening and Weekend students who fulfilled the minimum requirement for graduation in different field of studies in this Academic Year.
						</li>
					</ul>
					
					<p class="margintop20">
					Lastly, the CDEP office wants to thank all its students, partners, academic and administrative staffs and stakeholders for all the commitments, and wishes warmest congratulations to all the graduates of this year in all programs. 
					</p>
					<p>
					
					</p>
					<p>
					
					</p>
					
					
					</div>
				</div>
			</div>
		</div>
	</section>
  
    <section id="bottom">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div id="twitter-wrapper">
                <div id="twitter">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
   <?php include('footer.php');?>
   
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.fancybox-media.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="js/jquery.nivo.slider.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery.ba-cond.min.js"></script>
  <script src="js/jquery.slitslider.js"></script>
  <script src="js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>

</body>
</html>
