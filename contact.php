<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Contact Us</title>
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
<script src="https://www.google.com/recaptcha/api.js?render=6LfJf5kUAAAAAMPr6GUi9-vEQLo6XfcLRXoOsYno"></script>
  <script>
  grecaptcha.ready(function() {
      grecaptcha.execute('6LfJf5kUAAAAAMPr6GUi9-vEQLo6XfcLRXoOsYno', {action: 'feedback_form'}).then(function(token) {
         ...
      });
  });
  </script>
 
</head>

<body>
 
    <!-- start header -->
    
    <header>
      <?php 
        $page = 'home';
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
    <!-- end header -->
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
                <h2>Contact<strong> Us</strong></h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="index.php"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li class="active">Contact</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      

      <div class="container">
        <div class="row">
          <div class="span7">
            
              <?php
if(isset($_POST['btncontact']))
{
	$name = mysql_real_escape_string($_POST['name']);
    $visitor_email = mysql_real_escape_string($_POST['email']);
    $sub = mysql_real_escape_string($_POST['subject']);
    $message = mysql_real_escape_string($_POST['message']);
    
    
            $headers = "From: JJU_Website \r\n";

   // $email_from = $visitor_email;//<== update the email address
    $email_subject = $sub." by ".$name;
    $email_body = "From : $visitor_email\t\tSubject : $sub\t\tPurpose : Verification\n\n".
                  "Dear Sir/Madam,\n$message\n\n".
    
    $to = "info@jju.edu.et";//<== update the email address
    $to_me = "abpradeep@jju.edu.et";
//    $headers .= "Reply-To: $visitor_email \r\n";
    //Send the email!
    try
    {
    mail($to,$email_subject,$email_body,$headers);
    mail($to_me,$email_subject,$email_body,$headers);
    //done. redirect to thank-you page.
    //echo 'Your enquiry reached Us!! We will get back to you soon.';
    echo '<div class="alert alert-block alert-success">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>
                                    <i class="ace-icon fa fa-check green"></i>
                                    Your enquiry reached Us!!
                                    <strong class="green">
                                        We will get back to you soon.
                                    </strong>
                                </div>';
   // header('Refresh:2; URL=./contact.php');
    function IsInjected($str)
    {
      $injections = array('(\n+)',
                  '(\r+)',
                  '(\t+)',
                  '(%0A+)',
                  '(%0D+)',
                  '(%08+)',
                  '(%09+)'
                  );
      $inject = join('|', $injections);
      $inject = "/$inject/i";
      if(preg_match($inject,$str))
        {
        return true;
      }
      else
        {
        return false;
      }
    }

    }
    catch(Exception $e)
    {
        echo '\n Keep in touch with us!!';
    }
          //echo '<h2>Thanks for posting comment.</h2>';
        

    
   
    
    
}  
if(isset($_POST['btnreg']))
{
	
    
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $sub = $_POST['subject'];
    $message = $_POST['message'];
    
    
            $headers = "From: JJU_Website \r\n";

   // $email_from = $visitor_email;//<== update the email address
    $email_subject = $sub." by ".$name;
    $email_body = "From : $visitor_email\t\tSubject : $sub\t\tPurpose : Verification\n\n".
                  "Dear Sir/Madam,\n$message\n\n".
    
    $to = "regi@jju.edu.et";//<== update the email address
    $to_me = "abpradeep@jju.edu.et";
//    $headers .= "Reply-To: $visitor_email \r\n";
    //Send the email!
    try
    {
    mail($to,$email_subject,$email_body,$headers);
    mail($to_me,$email_subject,$email_body,$headers);
    //done. redirect to thank-you page.
    //echo 'Your enquiry reached Us!! We will get back to you soon.';
    echo '<div class="alert alert-block alert-success">
                                    <button type="button" class="close" data-dismiss="alert">
                                        <i class="ace-icon fa fa-times"></i>
                                    </button>
                                    <i class="ace-icon fa fa-check green"></i>
                                    Your enquiry reached Us!!
                                    <strong class="green">
                                        We will get back to you soon.
                                    </strong>
                                </div>';
   // header('Refresh:2; URL=./contact.php');
    function IsInjected($str)
    {
      $injections = array('(\n+)',
                  '(\r+)',
                  '(\t+)',
                  '(%0A+)',
                  '(%0D+)',
                  '(%08+)',
                  '(%09+)'
                  );
      $inject = join('|', $injections);
      $inject = "/$inject/i";
      if(preg_match($inject,$str))
        {
        return true;
      }
      else
        {
        return false;
      }
    }

    }
    catch(Exception $e)
    {
        echo '\n Keep in touch with us!!';
    }
          //echo '<h2>Thanks for posting comment.</h2>';
        

    
   
    
}  
?> 
            <form id="feedback_form" action="" method="post" class="form-horizontal" >
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div >

              <div class="row">
                  <h5>Get in touch with us by filling <strong>contact form below</strong></h5>
                <!--<div class="span6 form-group">-->
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required="" autofocus=""/>
                  <div class="validation"></div>
                <!--</div>-->
<!--                <div class="span6 margintop10 form-group">-->
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required="" />
                  <div class="validation"></div>
                <!--</div>-->
                <!--<div class="span6 margintop10 form-group">-->
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required="" />
                  <div class="validation"></div>
                <!--</div>-->
                <div class="margintop10">
                  <textarea class="form-control" style="min-width: 93%" name="message" rows="9" data-rule="minlen:10" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                 
                  <p class="text-center">
                  <button class="btn pull-left btn-large btn-theme margintop10" type="submit" name="btncontact">To Info</button>
                  <button class="btn pull-left btn-large btn-dark margintop10" type="submit" name="btnreg">To Registrar</button>
                  
                  </p>
                </div>
              </div>
            </form>
            
          </div>
            <div class="span4"> 
            <div class="widget">
                <h5 class="widgetheading">our<strong> Contacts</strong></h5>
                <address>
                    <strong>Registrar Office</strong><br>
                                School of Law #Building No: OB24<br>
                                JigJiga,Somali Region of Ethiopia<br>
                				<strong>Registrar</strong> Tel: 0913333325  Email: regi@jju.edu.et<br>
                				<strong>Deputy Director</strong> Tel: 910436121<br>
                                
                </address>
				<address>
                    <strong>Corporate Communication Office & IR</strong><br>
					New Management Building , Floor No : 02<br>
                                Jigjiga University,Ethiopia<br>
				E-mail: info@jju.edu.et , tomohay51@gmail.com<br>
                                Tel: +251 915330781<br>
                                
                </address>
                <address>
                    <strong>ICT Directorate</strong><br>
					School of Law #Building No: OB24<br>
                                Jigjiga University,Ethiopia<br>
				E-mail: jemalayderus123@jju.edu.et <br>
                                Tel: +251 915051427<br>
                                
                </address>
                
            </div>
            
            </div>
        </div>
      </div>
    </section>
    <!-- footer begin -->
  <?php include('footer.php');?>
    <!-- footer end -->
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>

</body>

</html>
