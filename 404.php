<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>JJU Official Website</title>
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
  <link rel="stylesheet" href="./css/fontawesome/css/all.css">

  <style>
   td{
  padding-top: 40px;
  }
  
  </style>
</head>

<body>
  <div id="wrapper">
    
  <header>
      <?php 
        $page = 'home';
        include 'header.php';
        include 'social.php';
      ?>
    </header>
    
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
                            <!-- <li><a href="PresidentMessage.php">Messages</a></li> -->
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
    <?php
                                                require_once 'app/db/dbfile.php';
                                                $obj = new Database();
                                                $obj->connect();
                                               
                                                $table = "web_slideinfo";
                                                $cols = "slideid,slide_title,description,pic,recstatus,created_date";
                                                $where = "recstatus in (0,1)";
//                                                $order = "slideid desc";
                                                $obj->select($table, $cols, $where);
                                                $res = $obj->getResult();
                                                $a = 0;
                                                foreach ($res as $value) {
                                                    $slid = $res[$a]['slideid'];
                                                    $slinfo[$a] = $res[$a]['slide_title'];
                                                    $des[$a] = $res[$a]['description'];
                                                    $path[$a] = $res[$a]['pic'];
                                                   
                                                    $recstatus = $res[$a]['recstatus'];
                                                    $cdate = $res[$a]['created_date'];
                                                    
                                                    $cnt = $a + 1;
                                                     $a++;
                                                }
                                                    ?>
    <!--<section id="featured">
       start slider 
      <!-- Slider 
      <div class="container">
      <div id="nivo-slider">
        <div class="nivo-slider">
          <!-- Slide Main 
          <a href="./docs/preelec.pdf"><img src="<?php echo "app/".$path[0]; ?>" alt="" title="" /></a>
           
          <img src="<?php echo "app/".$path[1]; ?>" alt="" title="#caption-1" />
           
          <img src="<?php echo "app/".$path[2]; ?>" alt="" title="#caption-2" />
           
          <img src="<?php echo "app/".$path[3]; ?>" alt="" title="#caption-3" />
            
          <img src="<?php echo "app/".$path[4]; ?>" alt="" title="#caption-4" />
        </div>
        <div class="container">
          <div class="row">
            <div class="span12">
              <!-- Slide #1 caption 
              <div class="nivo-caption" id="caption-1">
                <div>
                  <h2><?php echo $slinfo[1]; ?></h2>
                  <p>
                    <?php echo $des[1]; ?>
                  </p>
                  
                </div>
              </div>
              <!-- Slide #2 caption 
              <div class="nivo-caption" id="caption-2">
                <div>
                  <h2>Well spaced classroom buildings</h2>
                  <p>
                   Jigjiga university is equipped with spacious and best class rooms and laboratories.
                  </p>
                  
                </div>
              </div>
              <!-- Slide #3 caption 
              <div class="nivo-caption" id="caption-3">
                <div>
                  <h2>Jigjiga University's Library</h2>
                  <p>
                    Providing sources of information,necessary for faculty members, students and staff, as well as local community.
                  </p>
                
                </div>
              </div>
			  <!-- Slide #4 caption 
			  <div class="nivo-caption" id="caption-4">
                <div>
                  <h2>Pleasant and Peaceful Green campus</h2>
                  <p>
                    Jigjiga university has many Greenery places which provides healthy atmosphere for students.
                  </p>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      <!-- end slider 
    </section>-->
    <section id="content">
	<div class="container">
        <div class="row">
		<div class="span12">
		<!-- <marquee>New : President Elections are going on, Currently participents gave their presentations and under verification process</marquee> -->
		<img src="<?php echo "app/".$path[1]; ?>" width=1200/>
		</div>
		</div>
	</div>
	</section>
	
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
              
              
            <div class="row">
              
              <div class="span6">
                  
                                    <div class="table-responsive">
                                        
                                        <table id="example" class="table table-striped table-bordered display">
                                            <thead>
                                                <tr><strong><h6>Recent Events  </h6></strong></tr>
                                                <tr>
<!--                                                    <th>SNo.</th>
                                                    <th>Information</th>-->
                                                    <th>Click/Picture</th>
                                                    <th>Headlines</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require_once 'app/db/dbfile.php';
                                                $obj = new Database();
                                                $obj->connect();
                                                $uid = $_SESSION['session_userid'];
                                                $table = "web_info t1
                                              inner join web_users t2 on
                                              t1.userid=t2.userid
                                              inner join web_categories t6 on
                                              t1.catid=t6.catid";
                                                $cols = "t1.infoid,t1.infono,t1.userid,t1.catid,t1.title,t1.story,t1.pic,t1.recstatus,t1.created_date,t2.fname,t6.cat_name";
                                                $where = "t1.recstatus = 1 and t6.main_catid = 2";
                                                $order = "t1.created_date desc limit 4";
                                                $obj->select($table, $cols, $where, $order);
                                                $res = $obj->getResult();
                                                $a = 0;
                                                foreach ($res as $value) {
                                                    $id = $res[$a]['infoid'];
                                                    $infono = $res[$a]['infono'];
                                                    $userid = $res[$a]['userid'];
                                                    $pic = $res[$a]['pic'];
                                                    $fpic = "app/".$pic;
                                                    $catid = $res[$a]['catid'];
                                                    $title = $res[$a]['title'];
                                                    $story = $res[$a]['story'];
                                                    $recstatus = $res[$a]['recstatus'];
                                                    $cdate = $res[$a]['created_date'];
                                                    
                                                    $fname = $res[$a]['fname'];
                                                    $catname = $res[$a]['cat_name'];
                                                    
                                                    
                                                   
                                                    
                                                    
                                                    date_default_timezone_set('Africa/Addis_Ababa');
//                                                    $cdate = date('d-M-Y', strtotime($res[$a]['created_date']));
//                                                    $fbdate = date('d-M-Y', strtotime($res[$a]['fbdate']));
//                                                    $solvedd = date('d-M-Y', strtotime($res[$a]['solved_date']));
                                                    $cnt = $a + 1;
                                                    ?>
                                                    <tr>
<!--                                                        <td><?php echo $cnt; ?></td>
                                                        <td><b><?php echo $infono; ?></b><br><i> by (<?php echo $fname; ?>)<br> <strong><?php echo $catname; ?></strong></i></td>-->
                                                        <td><img src="<?php echo $fpic; ?>" alt="" class="ico-img" width="100px"></td>
                                                        <td><strong><?php echo $title; ?></strong>
                                                        <!--<br><?php echo $story; ?>-->
                                                        </td>
                                                        
                                                            <!--<button type="button" class="btn btn-icon btn-icon-right btn-<?php echo $color; ?> btn-xs waves-effect waves-light"><?php echo $status; ?></button>--> 
<!--                                                        <?php if ($recstatus == 0) { ?>
                                                        <td width="100px">
                                                            Not Published                                                            by pradeep 
                                                        </td>
                                                        <?php } else { ?>
                                                        <td width="100px">
                                                    
                                                            Published on <?php echo $cdate; ?>
                                                              by pradeep 
                                                       
                                                        </td>
                                                        <?php } ?>
                                                        -->
                                                        <td width="100px">
                                                            
                                                            <a  href="app/moreview_1.php?eid=<?php echo $id; ?>"><button type="button" class="btn btn-icon btn-icon-right btn-success btn-xs waves-effect waves-light"><i class="ico fa fa-binoculars"></i>MORE</button> </a>
                                                            
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $a++;
                                                }
                                                ?>
                                                    
                                            </tbody>
                                            <thead><tr><th><a  href="app/show_notice.php">OLDER EVENTS (Archives)</a></th></tr></thead>

                                        </table>
                                    </div>
              </div>
                               <div class="span6">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered display">
                                            <thead>
                                                <tr><strong><h6>Latest NEWS  </h6></strong></tr>
                                                <tr>
<!--                                                    <th>SNo.</th>
                                                    <th>Information</th>-->
                                                    <th>Click/Picture</th>
                                                    <th>Headlines</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                require_once 'app/db/dbfile.php';
                                                $obj = new Database();
                                                $obj->connect();
                                                $uid = $_SESSION['session_userid'];
                                                $table = "web_info t1
                                              inner join web_users t2 on
                                              t1.userid=t2.userid
                                              inner join web_categories t6 on
                                              t1.catid=t6.catid";
                                                $cols = "t1.infoid,t1.infono,t1.userid,t1.catid,t1.title,t1.pic,t1.story,t1.recstatus,t1.created_date,t2.fname,t6.cat_name";
                                                $where = "t1.recstatus = 1 and t6.main_catid = 1";
                                                $order = "t1.created_date desc limit 4";
                                                $obj->select($table, $cols, $where, $order);
                                                $res = $obj->getResult();
                                                $a = 0;
                                                foreach ($res as $value) {
                                                    $id = $res[$a]['infoid'];
                                                    $infono = $res[$a]['infono'];
                                                    $userid = $res[$a]['userid'];
                                                    $catid = $res[$a]['catid'];
                                                    $title = $res[$a]['title'];
                                                    $story = $res[$a]['story'];
                                                    $recstatus = $res[$a]['recstatus'];
                                                    $cdate = $res[$a]['created_date'];
                                                     $pic = $res[$a]['pic'];
                                                    $fpic = "app/".$pic;
                                                    $fname = $res[$a]['fname'];
                                                    $catname = $res[$a]['cat_name'];
                                                    
                                                    
                                                   
                                                    
                                                    
                                                    date_default_timezone_set('Africa/Addis_Ababa');
//                                                    $cdate = date('d-M-Y', strtotime($res[$a]['created_date']));
//                                                    $fbdate = date('d-M-Y', strtotime($res[$a]['fbdate']));
//                                                    $solvedd = date('d-M-Y', strtotime($res[$a]['solved_date']));
                                                    $cnt = $a + 1;
                                                    ?>
                                                    <tr>
<!--                                                        <td><?php echo $cnt; ?></td>
                                                        <td><b><?php echo $infono; ?></b><br><i> by (<?php echo $fname; ?>)<br> <strong><?php echo $catname; ?></strong></i></td>-->
                                                       <td><a href="<?php echo $fpic; ?>"><img src="<?php echo $fpic; ?>" alt="click me" class="ico-img" width="100px"></a></td>
                                                        <td><strong><?php echo $title; ?></strong>
                                                        <!--<br><?php echo $story; ?>-->
                                                        </td>
                                                        
                                                            <!--<button type="button" class="btn btn-icon btn-icon-right btn-<?php echo $color; ?> btn-xs waves-effect waves-light"><?php echo $status; ?></button>--> 
<!--                                                        <?php if ($recstatus == 0) { ?>
                                                        <td width="100px">
                                                            Not Published                                                            by pradeep 
                                                        </td>
                                                        <?php } else { ?>
                                                        <td width="100px">
                                                    
                                                            Published on <?php echo $cdate; ?>
                                                              by pradeep 
                                                       
                                                        </td>
                                                        <?php } ?>
                                                        -->
                                                        <td width="100px">
                                                            
                                                            <a  href="app/moreview_1.php?eid=<?php echo $id; ?>"><button type="button" class="btn btn-icon btn-icon-right btn-success btn-xs waves-effect waves-light"><i class="ico fa fa-binoculars"></i>MORE</button> </a>
                                                            
                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $a++;
                                                }
                                                ?>
                                                    
                                            </tbody>
                                            <thead><tr><th><a  href="app/show_news.php">OLDER NEWS (Archives)</a></th></tr></thead>

                                        </table>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </section>
	  <section class="callaction">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="big-cta">
              <div class="cta-text">
                <h3>For Latest<span class="highlight"><strong> Updates</strong></span> click here</h3>
              </div>
              <div class="cta floatright">
                <!--<a class="btn btn-medium btn-blue" href="http://www.careercenter.jju.edu.et/">Career Center</a>-->
                <a class="btn btn-medium btn-orange" href="app/show_news.php">Latest News</a>
                <a class="btn btn-medium btn-dark" href="app/show_notice.php">Recent Events</a>
                <a class="btn btn-medium btn-red" href="./show_gallery.php">Gallery</a>
                <a class="btn btn-medium btn-green" href="app/show_videos.php">Videos</a>
                <a class="btn btn-medium btn-brown" href="app/show_jobs.php">Job Vacancies</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              
              <!--<div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    
					<img src="img/p2.jpg" alt="" title="" />
                  </div>
                  <div class="text">
                      <strong>Mr. Elias Oumer</strong><br>President (Acting)
                    <a href="PresidentMessage.php"> | MESSAGE</a>
                  </div>
                </div>
              </div>-->
            <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <!--<i class="icon-desktop icon-circled icon-64 active"></i>-->
					<img src="img/abdi.png" alt="" title="" />
                  </div>
                  <div class="text">
                      <strong>Dr. Abdi Ahmed</strong><br>President (Acting)
                   <!--  <a href="PresidentMessage.php"> | MESSAGE</a> -->
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <!--<i class="icon-beaker icon-circled icon-64 active"></i>-->
					<img src="img/p3.jpg" alt="" title="" />
                  </div>
                  <div class="text">
                      <strong>Mr. Salah Hussien</strong><br>ADVP
					
                   <!-- <a href="ADVPmessage.php"> | MESSAGE</a> -->
                  </div>
                </div>
              </div>
              <div class="span3">
             <aside class="right-sidebar">
                <div class="widget">
                  <h5 class="widgetheading">Search@JJU</h5>
                
                  <script>
                        (function() {
                          var cx = '007046288087740027826:c7p6gksmyms';
                          var gcse = document.createElement('script');
                          gcse.type = 'text/javascript';
                          gcse.async = true;
                          gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                          var s = document.getElementsByTagName('script')[0];
                          s.parentNode.insertBefore(gcse, s);
                        })();
                   </script>
                      <gcse:search></gcse:search>
<!--                  <li><a class="btn btn-blue btn-medium " href="news.php">Go to News Page</a></li>
                  <li><i class="icon-angle-right"></i><a href="">Feedback</a></li>
                  <li><i class="icon-angle-right"></i><a href="">Another thing</a></li>-->
                
              </div>
            </aside>
              </div>
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
                            
                               
		<div class="row">
          <div class="span12">
              <div class="aligncenter"><h3 class="heading"><span class="highlight"><strong>| Annual Statistical Reports |</strong></span></h3></div>
			<div class="row">
                            <div class="margintop20"></div>
			<div class="span2 ">
				<div class="row"><div class="aligncenter"><i class="icon-home icon-circled icon-64 active"></i></div></div>
				<div class="row"><div class="aligncenter"><strong>21379 </strong><br> Intake capacity</div></div>
			</div>
			<div class="span2">
				<div class="row"><div class="aligncenter"><i class="font-icon-layer icon-circled icon-64 active"></i></div></div>
				<div class="row"><div class="aligncenter"><strong>23204 </strong><br> No of graduates (2009-2017)</div></div>
			</div>
			<div class="span2">
				<div class="row"><div class="aligncenter"><i class="icon-user icon-circled icon-64 active"></i></div></div>
				<div class="row"><div class="aligncenter"><strong>168 </strong><br> Total staff residence units</div></div>
			</div>
			<div class="span2">
				<div class="row"><div class="aligncenter"><i class="icon-group icon-circled icon-64 active"></i></div></div>
				<div class="row"><div class="aligncenter"><strong>722</strong><br> Total academic staffs on duty</div></div>
			</div>
			<div class="span2">
				<div class="row"><div class="aligncenter"><i class="icon-book icon-circled icon-64 active"></i></div></div>
				<div class="row"><div class="aligncenter"><strong>274 </strong><br> Total academic staffs on study leave</div></div>
			</div>
			<div class="span2">
				<div class="row"><div class="aligncenter"><i class="font-icon-user icon-circled icon-64 active"></i></div></div>
				<div class="row"><div class="aligncenter"><strong>758 </strong><br> Total administration staffs (non-teaching staff)
</div></div>
			</div>
			</div>
                  </div>
          </div>
        </div>
<!--		<div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>-->
        <!-- end divider -->
        <!-- Portfolio Projects -->
<!--        <div class="row">
          <div class="span12">
            <h4 class="heading"><strong>Life</strong> @ JJU</h4>
            <div class="row">
              <section id="projects">
                <ul id="thumbs" class="portfolio">
                   Item Project and Filter Name 
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                     Fancybox - Gallery Enabled - Title - Full Image 
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The City" href="img/works/full/image-01-full.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                     Thumb Image and Description 
                    <img src="img/works/thumbs/s1.png" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                   End Item Project 
                   Item Project and Filter Name 
                  <li class="item-thumbs span3 design" data-id="id-1" data-type="icon">
                     Fancybox - Gallery Enabled - Title - Full Image 
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Office" href="img/works/full/image-02-full.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                     Thumb Image and Description 
                    <img src="img/works/thumbs/s2.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                   End Item Project 
                   Item Project and Filter Name 
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                     Fancybox - Gallery Enabled - Title - Full Image 
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="img/works/full/image-03-full.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                     Thumb Image and Description 
                    <img src="img/works/thumbs/s3.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                   End Item Project 
                   Item Project and Filter Name 
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                     Fancybox - Gallery Enabled - Title - Full Image 
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="img/works/full/image-04-full.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                     Thumb Image and Description 
                    <img src="img/works/thumbs/s4.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                   End Item Project 
                   Item Project and Filter Name 
                  <li class="item-thumbs span3 photography" data-id="id-4" data-type="web">
                     Fancybox - Gallery Enabled - Title - Full Image 
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Sea" href="img/works/full/image-05-full.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                     Thumb Image and Description 
                    <img src="img/works/thumbs/s3.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                   End Item Project 
                   Item Project and Filter Name 
                  <li class="item-thumbs span3 photography" data-id="id-5" data-type="icon">
                     Fancybox - Gallery Enabled - Title - Full Image 
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Clouds" href="img/works/full/image-06-full.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                     Thumb Image and Description 
                    <img src="img/works/thumbs/s4.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                   End Item Project 
                   Item Project and Filter Name 
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                     Fancybox - Gallery Enabled - Title - Full Image 
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="img/works/full/image-07-full.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                     Thumb Image and Description 
                    <img src="img/works/thumbs/s1.png" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                   End Item Project 
                   Item Project and Filter Name 
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                     Fancybox - Gallery Enabled - Title - Full Image 
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Dark" href="img/works/full/image-08-full.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                     Thumb Image and Description 
                    <img src="img/works/thumbs/s2.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                   End Item Project 
                </ul>
              </section>
            </div>
          </div>
        </div>-->
        <!-- End Portfolio Projects -->
     
      </div>
    </section>
<!--    <section id="bottom">
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
    </section>-->
    <!-- start footer -->
    
    <?php include './footer.php'; ?>
    <!-- end footer -->
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
