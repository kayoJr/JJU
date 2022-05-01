<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Research</title>
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
        $page = 'research';
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
                <h2>Research</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="index.php"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="">Offices</a><i class="icon-angle-right"></i></li>
              <li class="active">Research</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
<section id="content">
		<div class="container">
			<div class="row" style="margin-top:-40px;">
				<div class="span12">
				
					
					<div class="row">
					<div class="span6">Production of cheese from camel milk using lemon juice
						<div class="flexslider">
							<ul class="slides">
								<li>
									<img src="img/works/full/res1.jpg" alt="" />
								</li>
								<li>
									<img src="img/works/full/res2.jpg" alt="" />
								</li>
								
							</ul>
						</div>
					</div>
					<div class="span6">
					<h4 class="heading"><strong>Research</strong></h4>
						<p>
						The level of internal funding availed for research projects had witnessed substantial reform and improvement in 2009 E.C. Accordingly, moving away from its original fragmented and small amount of annual research funding scheme, DRPTT introduced a multiple years, interdisciplinary and collaborative mega-projects grant system. 	
						</p>
						
						<p>
						After initial capacity building training, a total of 56 mega-research project proposals engaging a total of 204 JJU researchers were submitted for funding. After college and University level screening, 22 mega-research projects involving 135 JJU researchers had received funding approval and have been commenced. 
						</p>
						
						<p>
						In addition to its regular research funding scheme, the Directorate has established dedicated grant opportunities targeting technology transfer, students, female staffs and projects collaborating with the Ethiopian Somali Regional Pastoral and Agro-pastoral Research Institute (ESoRPARI). Accordingly, competitive funding of more than 1million Birr has been provided to 8 technology transfer projects (Dairy, Water/Power conservation, etc.), currently underway participating 32 JJU academic staffs and 450 pastoral/agro-pastoral beneficiaries. In addition, competitive funding of 73, 880.00 Birr has been offered to five graduation research projects.  
						</p>
					</div>
					</div>
					
					
					
					<p>
					With an aim of improving women capacity and role in research, scientific methodology and ethics, training has been offered to around 30 JJU female academic staffs. Thereafter, 7 teams comprising 25 female staffs have received funding of 517, 201.50 Birr to undertake research on a wide range of locally relevant topics.
					</p>
					<p>
					Realizing pressing need to transform regional agricultural sector, JJU has signed a research collaboration memorandum of understanding (MoU) with ESoRPARI. In line with this arrangement, DRPTT has allocated funding of about 4 million Birr to collaborative JJU - ESoRPARI research projects focused on increasing crop and livestock production. Therein, the partner has been committed to avail much needed field research expertise and facilities to the collaborating JJU experts.
					</p>
					<p>
					The office of DRPTT has also taken further steps towards developing institutional research and demonstration facilities. This year, DRPTT secured a nursery site and 10 hectares crop demonstration farm plot, and established experimental Green/Lath houses. 
					</p>
					
					
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
