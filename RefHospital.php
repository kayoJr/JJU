<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Referral Hospital</title>
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
					<li class="dropdown active">
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
                <h2>Referral Hospital</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="index.php"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="">OTHERS</a><i class="icon-angle-right"></i></li>
              <li class="active">Referral Hospital</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
	
	<section id="content">
      <div class="container">
        <div class="row">
			<div class="span6">
			<h5 class="heading"><strong>JJU Meles Zenawi Memorial Referral Hospital</strong></h5>
            <p> Jigjiga University Meles Zenawi Memorial Referral Hospital (JJU-MZMRH) was inaugurated in January, 2017 in fond remembrance of the beloved former Ethiopian Prime Minister Ato Meles Zenawi. It is situated in eastern part of Ethiopia, Jigjiga town, the capital city of Ethiopian Somali Regional State (635 KM east of Addis Ababa).JJU-MZMRH is the largest and modern hospital, providing state-of-the-art, and comprehensive service under one roof in eastern Ethiopia. The hospital is built on 60,000 m2 land. The initial contract agreement of the hospital was 250 million Ethiopian Birr entirely financed by the government of Ethiopian Somali Regional State. It is a ground plus two floors building with wide corridors, 8 courtyards, and 364 different sizes of rooms, 4 lifts, 9 stairs, 1 wide ramp and large parking lots. It is planned to provide Preventive, Diagnostic, Curative, Therapeutic, Rehabilitative and Support Services to all patients. In addition to teaching, training and research, JJU-MZMRH is expected to cover an estimated population of more than seven million people living in all zones and districts of the region, neighboring district of Oromia and large part of the neighboring country of Somalia. 
            </p>
 
          </div>
		  
		   <div class="span6">
            <!-- start flexslider -->
            
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <img src="img/works/full/ref1.jpg" alt="" />
                </li>
                <li>
                  <img src="img/works/full/ref2.jpg" alt="" />
                </li>
                <li>
                  <img src="img/works/full/ref3.jpg" alt="" />
                </li>
              </ul>
            </div>
            <!-- end flexslider -->
          </div>
		</div>
		
			<div class="row">
				<div class="span12">
            <p>The Hospital has a team of dedicated Doctors, Dieticians, Nurses, Midwifes, Physiotherapist and other all trained professionals committed to the welfare of patients. It also has ongoing staff education and training programmes with emphasis on competent and humane care for the patients. Our hospital has a total of 342 beds, a 13 bed Intensive Care Unit, Operation Theatre with the state of art facilities. Round the clock emergency, Intensive Care Unit, Pharmacy and Clinical Lab facilities are available. Since the Hospital is part of Jigjiga University Medicine and Health Science College, it is on the way to organize Residential Internship Programme for Students on an annual basis. </p>
				</div>
			</div>
			
			<h4 class="aligncenter">Hospital Manpower</h4>
					<table class="table table-striped">
              <thead>
                <tr>
                  <th>Profession</th>
                  <th>Male</th>
				  <th>female</th>
                  <th>Total</th>
				  <th>Remark</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Specialist Doctors (Permanent)</td>
                  <td>7</td>
                  <td>1</td>
                  <td>8</td>
				  <td>3 surgeons, 2 Internists, 1 pediatrician, 1 Gyn/obs, 1 Ophthalmologist.</td>
				</tr>
				<tr>
                  <td>Specialist Doctors (Contract)</td>
                  <td>7</td>
                  <td>2</td>
                  <td>9</td>
				  <td>2 surgeons, 2 pediatricians, 2 Gyn/obs., 2 Radiologists, 1Pathologist.</td>
				</tr>
				<tr>
                  <td>General Practitioner(GP )</td>
                  <td>54</td>
                  <td>9</td>
                  <td>63</td>
				  <td></td>
				</tr>
				<tr>
                  <td>Nurse</td>
                  <td>121</td>
                  <td>67</td>
                  <td>188</td>
				  <td>Degree & Diploma</td>
				</tr>
				<tr>
                  <td>Midwifery</td>
                  <td>14</td>
                  <td>74</td>
                  <td>88</td>
				  <td>Degree & Diploma</td>
				</tr>
				<tr>
                  <td>Pharmacist</td>
                  <td>23</td>
                  <td>6</td>
                  <td>29</td>
				  <td>Degree & Diploma</td>
				</tr>
				<tr>
                  <td>Laboratory Technician</td>
                  <td>23</td>
                  <td>7</td>
                  <td>30</td>
				  <td>Degree & Diploma</td>
				</tr>
				<tr>
                  <td>Other clinical staff</td>
                  <td>14</td>
                  <td>8</td>
                  <td>22</td>
				  <td>Biomed.,Radiogra.,Anest.,Steri.,HMIS</td>
				</tr>
				<tr>
                  <td>Supportive staff</td>
                  <td>138</td>
                  <td>309</td>
                  <td>447</td>
				  <td>Porter & runner, Cleaner, Driver,food,laun…</td>
				</tr>
				<tr>
                  <td>Administration staff</td>
                  <td>63</td>
                  <td>25</td>
                  <td>88</td>
				  <td></td>
				</tr>
				<tr>
                  <td><h6>Grand Total</h6></td>
                  <td> <h6>468</h6></td>
                  <td> <h6>504</h6> </td>
                  <td><h6>972</h6></td>
				  <td></td>
				</tr>
              </tbody>
            </table>
			
			<h4 class="aligncenter">Services Available</h4>
					<table class="table table-striped">
              <thead>
                <tr>
                  <th>Clinical services</th>
                  <th>Laboratory services</th>
				  <th>Diagnostic Service</th>
                  <th>Other services</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>OPD medical service (adult and pediatric)</td>
                  <td>Full Clinical chemistry with Lipid profile Test</td>
                  <td>X ray Exam</td>
                  <td>Clinical Pharmacy Service</td>
				</tr>
				<tr>
                  <td>OPD surgical service (adult and pediatric)</td>
                  <td>P.Morphology</td>
                  <td>Doppler ultrasound Exam</td>
                  <td>Compounding of drugs & medicine</td>
				</tr>
				<tr>
                  <td>OPD gyn and obstetrics service</td>
                  <td>FNA Pathology</td>
                  <td>CT scan</td>
                  <td>Physiotherapy</td>
				</tr>
				<tr>
                  <td>OPD psychiatrics service</td>
                  <td>Bacteriology for GRAM & AFB</td>
                  <td>ECG</td>
                  <td>Family Planning</td>
				</tr>
				<tr>
                  <td>General Surgery</td>
                  <td>Body fluid Analisis</td>
                  <td>Echocardiography</td>
                  <td>Food service for patient</td>
				</tr>
				<tr>
                  <td>OPD Dermatology</td>
                  <td>All Serology Tests</td>
                  <td>Cervical PAP</td>
                  <td>Health education</td>
				</tr>
				<tr>
                  <td>24 hrs. Emergency Service (For Adult and Pediatrics)</td>
                  <td>CBC & Electrolyte Test</td>
                  <td>Cervical cancer screening & treatment</td>
                  <td>Environmental health & sanitation.</td>
				</tr>
				<tr>
                  <td>MNCH service</td>
                  <td>Hormonal Tests</td>
                  <td>Fluoroscopic x-ray</td>
                  <td>Private wing</td>
				</tr>
				<tr>
                  <td>Inpatient Service</td>
                  <td>T3,T4,TSH,FT3,FT4N</td>
                  <td>Ultrasound Exam</td>
                  <td>Drug Supply</td>
				</tr>
				<tr>
                  <td>Labor and Delivery service</td>
                  <td>CEA,FPSA,FSH</td>
                  <td></td>
                  <td>Laundry service for patients</td>
				</tr>
				<tr>
                  <td>Ophthalmology service</td>
                  <td> Esteradiol, Testosterones</td>
                  <td> </td>
                  <td>Liaison Service</td>
				</tr>
				<tr>
                  <td>Dental care and treatment</td>
                  <td> B-HCG</td>
                  <td> </td>
                  <td>Central Sterilization</td>
				</tr>
				<tr>
                  <td>Adult & Pediatric Intensive Care</td>
                  <td>AFP,CA-19-9, CK-MP</td>
                  <td> </td>
                  <td>Triage Service</td>
				</tr>
				<tr>
                  <td>Neonate Intensive Care</td>
                  <td>Troponine</td>
                  <td></td>
                  <td></td>
				</tr>
				<tr>
                  <td>TB & HIV testing and treatment</td>
                  <td>Prolactine</td>
                  <td></td>
                  <td></td>
				</tr>
              </tbody>
            </table>	
			
			<div class="row">
			<div class="span6">
            <!-- start flexslider -->
            
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <img src="img/works/full/ref5.jpg" alt="" />
                </li>
                <li>
                  <img src="img/works/full/ref6.jpg" alt="" />
                </li>
                <li>
                  <img src="img/works/full/ref7.jpg" alt="" />
                </li>
              </ul>
            </div>
            <!-- end flexslider -->
          </div>
			<div class="span6">
			
			<h6>Main activities done by the Hospital since Tahesas 24/2009 E.C to Sene 30/2009 E.C <br>(January 2/2017 to July 7/2017):</h6>
				<ol>
              <li>Total Patient served is 17,798.t</li>
              <li>Outpatient service for 9,826 Patients.</li>
              <li>Inpatient service for 2,153 Patients.</li>
              <li>Emergency service for 3,285 Patients.</li>
			  <li>Delivery service for 1,060 mothers.</li>
			  <li>Family planning service for 108 women and Antenatal care service for 1,142 pregnant mothers.</li>
			  <li>Performed 165 major surgeries and 59 minor surgeries.</li>
			  <li>Triage, Liaison and social service.</li>
			  
				</ol>
		
    
            
          </div>
		   
		</div>
		
			 <div class="row">
			<div class="span6">
				
				<h6>Facilities</h6>
					<ul>
						  <li>342 beds </li>
						  <li>3 Operation Theaters</li>
						  <li>ICU</li>
						  <li>C/S Room
						  </li>
						  <li>Neonatal ICU</li>
						  <li>24 Hours Pharmacy</li>
						  <li>24 Hours Emergency and Ambulance services</li>
					</ul>
            
			</div>
		   <div class="span6">
				<h6><ins>Address of the Hospital</ins></h6>
				<p>
				JJU, Meles Zenawi Memorial Referral Hospital <br>
				Jigjiga City, Kebele 07 <br>
				Phone No: +251-257-752783, +251-911-916901<br>
				Fax: +251-257-755976<br>
				P.o.Box: 919<br>
				E-mail: jjumzmrh@gmail.com / referral@jju.edu.et
				</p>
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
