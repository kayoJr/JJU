<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>ARVP Message</title>
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
                <h2>ARVP Message</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="index.php"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="">Messages</a><i class="icon-angle-right"></i></li>
              <li class="active">ARVP Message</li>
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
					<img src="img/works/full/p2.jpg" title="" />
						<div class="text aligncenter">
						  <strong>Mr. Elias Oumer</strong><br>President (Acting)
						<small></small>
					   
						</div>
					</div>
					
					<div class="span6">				
					<p class="text-left">
                   Congratulatory <span lang="en-gb">R</span>emark !!
					</p>
					<p class="text-left">
                    It is my gratitude to deliver my message in such historical and unforgettable graduation ceremony, as of which it is a special occasion when you see a sense of accomplishment mixed with no small measure of relief too. It is also a happiness emanating from well-earned achievement and I hope that you will each rightly celebrate in style. Congratulations! I also congratulate the families of the graduating students, academic and support staffs and all stakeholders who contributed in one way or the other to the fruitition of this remarkable day.  

					</p>
					<p class="text-left">
                    Dear graduates, my message to you is clear and loud. Higher education is all about hope. It gives young people the knowledge and confidence they need to get on in life and make a contribution to society.  It allows those with disadvantaged backgrounds to overcome their challenges and pay back. It provides the skilled labour that countries need to increase prosperity. It produces research that helps societies make progress in solving the problems we all face.  Development has gone hand-in-hand with expansion in higher education. The need to acquire knowledge and use it effectively is a never-ending one if humanity‘s well-being is to be protected and enhanced. 
					</p>
					</div>
					
					
					
					
					
				
				</div>
			</div>
			<div class="row">
					<p class="text-left">
					So, now as a graduate from a Higher education, you have a force for change and a force for good. We live in globalization era whereby our world comes beyond a village to a home. In such an information age that is continuously experiencing growing levels of connectivity, one wonders what happens in the next 20 to 30 years. Two things are certain: technology will continue to evolve and knowledge and information will continue to fuel the economy. This hopefully creates a society characterized by fierce competition in every walk of life and myriads of opportunities. As there are challenges, there are opportunities awaiting you.
					</p>
					
					<p class="text-left">
					Your chances to secure jobs are going to come from the interconnected world of Social Media rather than from traditional job advertisements and headhunting methods. Who invented these multi-billion Dollar Social Media companies? It was students like you who took it upon themselves to become entrepreneurs while they were still at university. Today our government has created an enabling environment and an entrepreneur friendly climate for job creation. As a graduate, you need to benefit from the entrepreneurial environment that exists in the country.  You are expected to translate your knowledge into thriving business. To this end you should have a mindset that regards every type of work as a productive and deserves respect. 
 
					</p>
					
					<p class="text-left">
					Dear graduates, during these short but eventful years, your country and Jigjiga University have heavily invested in you. The country and the institution invested on you from its shortage, the money that came from poor tax payers. All these investments were made so as to enable you become globally competitive, responsible and productive citizens equipped with the required knowledge, skills and attitudes. This is, therefore, the right time that you shall pay it back to your country by serving your nation efficiently, effectively and responsibly. 

					</p>
					
					<p class="text-left">
					To conclude, please note that graduation isjust a first step and learning is a lifelong process which will continue to shape your future. Congratulations once more! May you all have prosperous and productive life!  
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
