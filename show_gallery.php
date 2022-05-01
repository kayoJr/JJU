<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Picture Gallery</title>
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

</head>

<body>
  <div id="wrapper">
    <!-- start header -->
    
            <?php include './header.php'; ?>
        <!-- end header -->
        <div style="width:30px; height: 30px;"></div>
        <div class="row">
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
                      <a href="contact.php">Contact </a>
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
    <?php
                                                require_once 'app/db/dbfile.php';
                                                $obj = new Database();
                                                $obj->connect();
                                               
                                                $table = "web_galleryinfo";
                                                $cols = "galid,title,pic,recstatus,created_date";
                                                $where = "recstatus in (1)";
//                                                $order = "slideid desc";
                                                $obj->select($table, $cols, $where);
                                                $res = $obj->getResult();
                                                $a = 0;
                                                foreach ($res as $value) {
                                                    $galid = $res[$a]['galid'];
                                                    $title[$a] = $res[$a]['title'];
                                                    $picpath[$a] = $res[$a]['pic'];
                                                   
                                                    $recstatus = $res[$a]['recstatus'];
                                                    $cdate = $res[$a]['created_date'];
                                                    
                                                    $cnt = $a + 1;
                                                     $a++;
                                                }
                                                    ?>
	 <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
                <h2>Picture <strong>Gallery</strong></h2>
            </div>
          </div>
        </div>
      </div>
    </section>
	<section id="content">
      <div class="container">
		<div class="row">
          <div class="span12">
		   <div class="testimonial">
                       <strong><?php echo $title[0]; ?></strong>
                   </div>

<!--       <h4 class="aligncenter"><strong>Today News</strong></h4>
	   <div class="solidline">
            </div>-->

                       
<?php
if($picpath[0] != "")
{
$thumbs = glob("app/".$picpath[0]);
$images = glob("app/".$picpath[0]);
for ($i=0; $i<count($thumbs); $i++)
{
$numT = $thumbs[$i];
$numI = $images[$i];
echo '<div class="span3"><div class="testimonial"><a  href="'.$numI.'" title="'.$i.'"><img src="'.$numT.'"  style="height: 160px;width: 290px;float:right"></a></div></div>';
//echo '<div></div>';

}
}
?>
<?php
//$files = glob("app/slides/nivo/*.*");
//for ($i=0; $i<count($files); $i++)
//{
//	$num = $files[$i];
//	echo '<img src="'.$num.'" alt="random image">'."&nbsp;&nbsp;";
//	}
//?>


          <!--</div>-->
		  </div>
                </div>
          <div class="row">
                    <div class="span12">
		   <div class="testimonial">
                       <strong><?php echo $title[1]; ?></strong>
                   </div>

<!--       <h4 class="aligncenter"><strong>Today News</strong></h4>
	   <div class="solidline">
            </div>-->

                       <div id="vlightbox">
<?php
if($picpath[1] != "")
{
$thumbs = glob("app/".$picpath[1]);
$images = glob("app/".$picpath[1]);
for ($i=0; $i<count($thumbs); $i++)
{
$numT = $thumbs[$i];
$numI = $images[$i];
echo '<div class="span3"><div class="testimonial"><a  href="'.$numI.'" title="'.$i.'"><img src="'.$numT.'"  style="height: 160px;width: 290px;float:right"></a></div></div>';
}
}
?>
<?php
//$files = glob("app/slides/nivo/*.*");
//for ($i=0; $i<count($files); $i++)
//{
//	$num = $files[$i];
//	echo '<img src="'.$num.'" alt="random image">'."&nbsp;&nbsp;";
//	}
//?>
</div> 

          
		  </div>
          </div>
          <div class="row">
                    <div class="span12">
		   <div class="testimonial">
                       <strong><?php echo $title[2]; ?></strong>
                   </div>

<!--       <h4 class="aligncenter"><strong>Today News</strong></h4>
	   <div class="solidline">
            </div>-->

                       <div id="vlightbox">
<?php
if($picpath[2] != "")
{
$thumbs = glob("app/".$picpath[2]);
$images = glob("app/".$picpath[2]);
for ($i=0; $i<count($thumbs); $i++)
{
$numT = $thumbs[$i];
$numI = $images[$i];

echo '<div class="span3"><div class="testimonial"><a  href="'.$numI.'" title="'.$i.'"><img src="'.$numT.'"  style="height: 160px;width: 290px;float:right"></a></div></div>';
}
}
?>
<?php
//$files = glob("app/slides/nivo/*.*");
//for ($i=0; $i<count($files); $i++)
//{
//	$num = $files[$i];
//	echo '<img src="'.$num.'" alt="random image">'."&nbsp;&nbsp;";
//	}
//?>
</div> 

          
		  </div>
          </div>
<!--          <div class="span4">
		   <div class="testimonial">

            <h4 class="aligncenter"><strong>Oldest News</strong></h4>
           <div class="solidline">
            </div>
        
          </div>
		  </div>-->
<!--          <div class="span4">
		   <div class="testimonial">

            <h4 class="aligncenter"><strong>Qoutes</strong></h4>
          <div class="solidline">
            </div>
          </div>
		  </div>-->
        
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
    <!-- start header -->
    
            <?php include './footer.php'; ?>
        <!-- end header -->
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
