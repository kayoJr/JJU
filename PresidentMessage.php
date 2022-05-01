<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>President Massage</title>
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

  <style type="text/css">
.auto-style1 {
	background: #fff;
	padding: 20px;
	border: 1px solid #e6e6e6;
	text-align: center;
}
</style>

</head>

<body>
  <div id="wrapper">
  <header>
      <?php 
        $page = 'admin';
        include 'header.php';
      ?>
    </header>
    <?php include 'social.php';
        include 'ham.php';
  ?>
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
                <h2>President Message</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="index.php"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="">Messages</a><i class="icon-angle-right"></i></li>
              <li class="active">President Message</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
<section id="content">
		<div class="container">
			<div class="row" style="margin-top:-40px;">
				<div class="span12">
				
					<div class="span5">
					<img src="img/abdi.png" title="" />
					<div class="text aligncenter">
                      <strong>Dr. Abdi Ahmed</strong><br>President(Acting)
					<small></small>
                   
                  </div>
					</div>
					<div class="span6">				
					<p>
                    Dear jigjiga university community, board and stakeholders,
					</p>
					<p>
                    it is my pleasure to welcome you all to this significant event on the occasion of releasing 4,738 of our trained personnel from whom the country has high expectations and hopes. 

					</p>
					<p>
                    Ethiopia is currently engaged in a highly ambitious effort to realign its higher education system in order to contribute more directly to its national strategy for economic growth and poverty reduction. The country’s achievements over the past two decades have been tremendous. We realize that economic growth in the 21st century will be driven by the nation’s performance in raising its levels of national productivity in comparison to its economic competitors. We therefore, are determined to make up the ground lost over the past regimes because of political instability and economic stagnation. The dedicated efforts have targeted all levels: the overall system, the institutions, and the academic programs. 
					</p>
					</div>
					
					

					
				</div>
			</div>
			<div class="row">
				<p>
					At the level of academic programs, new degree courses have been being introduced in response to anticipated industry market requirements. These underpin the country’s economic development strategy to prepare our citizens for democratic participation in civic and social affairs.
				</p>
				
				<p>
					One can see graduate program enrolments are expanding rapidly. We have made earnest efforts to simultaneously increase the availability of academic staff for the expanding system. To shore up quality in classrooms, series of national and local pedagogical exercise is on. This has encouraged instructional innovation. New measures like introducing class management system, audio-visual support system, partnership development, ict into instruction and for accessing the global network of information, and the utilization of jju meles zenawi memorial referral hospital has added greater efficiency, knowledge, and depth to the learning process, research and outreach services leading to remarkable achievements. 
 
				</p>
				
				<p>
					Most significant challenge before our education system today is to design effective implementation of policies and action plans to strengthen national capacities to implement vital strategies. 
					We have at the same time to ensure that the new measures are fiscally sustainable within the overall sector budget and within the financial resources available to higher education.

				</p>
				
				<p>
					The country has to be equipped adequately to foster greater private sector involvement in the higher education expansion program. We have also to improve the linkages between the labour force demands of our emerging knowledge economy and instructional programs offered at our places of learning. 
				</p>
				
				<p>
					It has been my proud privilege to head this august place of learning. The small span since i joined has allowed me to closely study the short term and long term challenges facing my team and our objectives. I assess the job undoubtly hilly and tough. But the spirit of my colleagues and their positive attitude assure me that the success ultimately will be ours and will not be far. The day is not distant when jigjiga university reaches the summit of our achievements thanks to the robust planning and determination i and my colleagues have shown.  
				</p>
				
				<p>
					On this significant day, when our university is sending our well trained and dedicated youth to the battle field of nation building, i invite the cooperation of each and every one present here and others to help us achieve this stupendous task. 

				</p>
				
				<p>
					I congratulate all my boys for the degrees they have earned and achieved and wish them a successful future. I also caution the struggle will not be a cake walk. But thanks to the skills you have learnt here when applied with care, dedication and confidence will always keep you victorious and successful.
				</p>
				
				<p>
					I would like to take this chance to thank the university community, board, regional and federal governments for their immediate support throughout this successful year. 
				</p>
				
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
