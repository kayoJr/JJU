<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Community Service</title>
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
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/nav_bar.css">
  <link rel="stylesheet" href="./css/social.css">
    <link rel="stylesheet" href="./css/fontawesome/css/all.css">


</head>

<body>
  <div id="wrapper">
    <!-- start header -->
        <header>
      <?php 
        $page = 'acadamic';
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
                      
                    <li>
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
                <h2>CSD</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="index.php"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
           
              <li class="active">Community Service Directorate</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
<section id="content">
		<div class="container">
			<div class="row" style="margin-top:-40px;">
				<div class="span12">
				
					<!--<div class="post-image">
						<img src="img/dummies/blog/maingate.jpg" alt="" />
					</div>-->
					<h4 class="heading"><strong>Community Service Directorate (CSD)</strong></h4>
					<div class="span6">
            <!-- start flexslider -->
            
						<div class="flexslider">
							<ul class="slides">
								<li>
									<img src="img/others/csd1.jpg" alt="" />
								</li>
								<li>
									<img src="img/others/csd2.jpg" alt="" />
								</li>
						
							</ul>
						</div>
            <!-- end flexslider -->
          </div>
					
					<div class="span5">
					<p>
                    The aim of this Community Services Directorate is to maintain and enhance one of the University's objectives - serving the community - by being significant contributor of intellectual, educational, cultural and other services.

					</p>
					<p><ins>
                    Ever since the Directorate was formed, it has been carrying out a number of activities in various aspects of its programs. Recently, it has tremendously expanded its outreach in terms of teaching and other community services. These include:</ins>

					</p>
					<ul>
						<li>The Science, Technology, Engineering and Mathematics (STEM) education program has been given to 365 secondary and preparatory students selected from the Ethiopian Somali Regional State (ESRS). 
						</li>
						<li class="margintop10"> More than 70,000 reference books were donated to various preparatory and secondary schools of ESRS. 
						</li>
						<li class="margintop10">Full-fledged libraries have been established for three preparatory and secondary schools.
						</li>
						<li class="margintop10">Technical drawing training was given to 1280 students from Jigjiga Preparatory and Senior Secondary School. 
						</li>
					</ul>
					</div>
					

					
				
				
				
				
				
				
					
				</div>
			</div>
			<div class="row">
					<ul>
						<li class="margintop10">Free legal aid services have been given to more than 72 individuals.

						</li>
						<li class="margintop10">Veterinary health care services were given to more than 19, 386 livestock in the drought affected areas of the ESRS.
						</li>
						<li class="margintop10">Complete library equipments and chemicals have been donated to Bursaredo Health Center in Addadle Wereda of Shabelle Zone.
						</li>
					</ul>
					
					<p>JJU Community Service reaches the pastoralists in need: Primary veterinary health services - vaccination and treatment - provision for draught affected animals, Dolo Zone</p>
					
	
			</div>
			<div class="row">
				<div class="span8">
				<div class="aligncenter">
					<img src="img/others/csd5.jpg"/>
						Reaching the local secondary schools : Dr. Abdulaziz Ibrahim (Right), JJU President handing laboratory equipments to Mr. Ibrahim Mehad (Left), ESRS Education Bureau Head
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
