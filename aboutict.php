<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>JJU Web Team</title>
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
  <!-- boxed bg -->
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
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
        $page = 'ict';
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
                <h2>About <strong>ICT</strong></h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
                <li><a href="index.php"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li class="active">About ICT</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span6">
            <h4>Welcome to <strong>ICT</strong></h4>
            <p>
                ICT infrastructure is the backbone of the University, the ICT Directorate this year firstly tried to fill the human resource gaps in the first phase. Thus, 18 new different experts in the ICT sector were employed which this raised the number of total staffs into 29.</p>

            <p>In 2009 E.C Academic Year, the Directorate installed standard computer networks in 20 computer laboratories and in five G+2 class and staff buildings and in two computer centers in the main library. 1,920 computers are joined to the campus network in all the mentioned areas which this makes the total number of computers joined to the network more than 3200.</p>

            <p>The total University wide internet bandwidth has been upgraded from 110mb to 300mb to allow all the University community use internet service without any speed related barriers. 15 wireless devices are deployed in libraries and outside office buildings to deliver Wi-Fi service for students during their spare times. </p>

            <p><strong>ICT Application Development team </strong>has launched new software like Quick launch, OIS - Online Information System, Help Desk and also new version of Website</p> 
            
          </div>
          <div class="span6">
            <!-- start flexslider -->
            
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <img src="img/works/full/image-01-full.jpg" alt="" />
                </li>
                <li>
                  <img src="img/works/full/image-02-full.jpg" alt="" />
                </li>
                <li>
                  <img src="img/works/full/image-03-full.jpg" alt="" />
                </li>
              </ul>
            </div>
            <!-- end flexslider -->
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <div class="row">
          <div class="span12">
              <h4>Meet our Web <strong>Team</strong></h4>
          </div>
          
          <div class="span2">
            <img src="img/dummies/avatar.jpg" alt="" class="img-polaroid" />
            <div class="roles">
              <p class="">
                <strong>Mr.Kemal Hashi</strong>
              </p>
              <p>
                Communication Director
                Web Master
              </p>
            </div>
          </div>
          
          <div class="span2">
            <img src="img/dummies/team1.jpg" alt="" class="img-polaroid" />
            <div class="roles">
              <p class="">
                <strong>Mr.Jemal Ayedrus</strong>
              </p>
              <p>
                ICT Director
              </p>
            </div>
          </div>
          
          
              <div class="span2">
            <img src="img/dummies/team2.jpg" alt="" class="img-polaroid" />
            <div class="roles">
              <p class="">
                <strong>Mr.A B Pradeep</strong><br>
                <a href="./profiles/abp.doc"><strong>Profile</strong></a>
              </p>
              <p>
                Development Section Team Leader
              </p>
            </div>
          </div>
          <div class="span2">
            <img src="img/dummies/team3.jpg" alt="" class="img-polaroid" />
            <div class="roles">
              <p class="">
                <strong>Mr.Mustafa</strong>
              </p>
              <p>
                Sr. Developer 
              </p>
            </div>
          </div>
          
         
        </div>
       
      
          
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <div class="row">
          <div class="span6">
            <h4>More about ICT ADC Team </h4>
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
							1. What we do </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <p>
                      We develop software using new standards to facilitate and automate the daily transactions of the university.
                      And also we provide software consultation for the university and also to the outside clients.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
							2. Work process </a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      We follow strict recursive software development approach to avoid future bugs, and also we throughly test our
                      software in different levels in order to produce robust modules. And we also provide end user training after the implementation of product.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
							3. Quality assurance </a>
                </div>
                <div id="collapseThree" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      We use the latest technologies like bootstrap and HTML5 to give best User Interface experience to the user.
                      And also we give support for the implemented modules. We provide responsive single sign on applications for 
                      the better performance. 
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
							4. What we can deliver </a>
                </div>
                <div id="collapseFour" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                        We deliver the following:<br>
                      1. Responsive Websites for all kind of clients<br>
                      2. We handle the internal projects of JJU. <br>
                      3. We provide support for the delivered products.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="span6">
            <h4>Our expertise</h4>
            <label>Web design:</label>
            
            <div class="progress progress-success progress-striped active">
              <div class="bar" style="width: 80%">
              </div>
            </div>
            <label>Ubuntu Server Administration :</label>
            <div class="progress progress-success progress-striped active">
              <div class="bar" style="width: 60%">
              </div>
            </div>
            <label>Photoshop & Graphics Design:</label>
            <div class="progress progress-success progress-striped active">
              <div class="bar" style="width: 70%">
              </div>
            </div>
            <label>Database Administration and Web Services :</label>
            <div class="progress progress-warning progress-striped active">
              <div class="bar" style="width: 50%">
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
