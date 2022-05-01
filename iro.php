<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Expats Information</title>
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
  <div id="wrapper">
    <!-- start header -->
    
            <?php include './header_2.php'; ?>
        <!-- end header -->
        <!--<div style="width:30px; height: 30px;"></div>-->
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="index.php"><img src="img/lo.png" alt="" class="logo" /></a>
            </div>
          </div>
          
        </div>
      </div>
    </header>
    <!-- end header -->
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="inner-heading">
                <h2 style="font-size: 30px;"><i class="icon-globe"></i><strong> IRO</strong> ( International Relations Office )</h2>
                
            </div>
          </div>
          
        </div>
      </div>
    </section>
    <section id="content">
      

      <div class="container">
        <div class="row">
          <div class="span3">
            
              <?php
if(isset($_POST['btncontact']))
{
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $ph = $_POST['subject'];
    $message = $_POST['message'];
    
    
        $headers = "From: JJU_Website \r\n";

   // $email_from = $visitor_email;//<== update the email address
    $email_subject = $name." with ".$ph;
    $email_body = "From : $visitor_email\t\tPhone : $ph\t\tPurpose : Feedback or Contact\n\n".
                  "Dear Sir/Madam,\n$message\n\n".
    
    $to = "iro@jju.edu.et";//<== update the email address
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
                  <h5>Write us <strong>Here</strong></h5>
                <!--<div class="span6 form-group">-->
                <input type="text" name="name" class="form-control" style="min-width: 72%" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required="" autofocus=""/>
                  <div class="validation"></div>
                <!--</div>-->
<!--                <div class="span6 margintop10 form-group">-->
                  <input type="email" class="form-control" style="min-width: 72%" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required="" />
                  <div class="validation"></div>
                <!--</div>-->
                <!--<div class="span6 margintop10 form-group">-->
                  <input type="text" class="form-control" style="min-width: 72%" name="subject" id="subject" placeholder="Tour Phone" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required="" />
                  <div class="validation"></div>
                <!--</div>-->
                <div class="margintop5">
                  <textarea class="form-control" style="min-width: 72%" name="message" rows="4" data-rule="minlen:10" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                 
                  <p class="text-center">
                  <button class="btn pull-left btn-large btn-theme margintop10" type="submit" name="btncontact">Send Message</button>
                  
                  
                  </p>
                </div>
              </div>
            </form>
          </div>
            <div class="span4"> 
        <div class="row">
          <div class="span4">
            <h4>More about IRO </h4>
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
							1. Mission </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse ">
                  <div class="accordion-inner">
                    <p>
                      International Relations Office Directorate develops university wide leadership to build and sustain quality   
                      education at Jigjiga University on par with the international standards. Bringing new technology, knowledge and practices
                      in vogue to JJU through MOU's with various world class Universities
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
							2. Our Core Activities </a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                        - International Agreements <br>
                        - Collaborative  Research and Development <br>
                        - Resources and Fund Mobilization<br>
                        - Community Development
                      
                      
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
							3. What we are </a>
                </div>
                <div id="collapseThree" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <p>
                      To respond to swiftly changing external environment, JJU had established the office
                      of the Directorate <strong >(International Relations)</strong> in the year 2017. Ever since, Directorate
                      has become one of the most important organs in providing assistance to the administrators,
                      faculty and students community of the university in enhancing their abilities to adopt
                      practices which are in vogue. The directorate actively associating with international
                      universities and research institutions to get the mutual benefit in addressing the current
                      needs and problems of the society
                      </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
							4. Contact Us </a>
                </div>
                <div id="collapseFour" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                    <srtong>Mr. Tingirtu G/Tsadik </strong>(Director)<br>
                      email : iro@jju.edu.et <br>
                      Ph : +251 923177679
                    </p>
                    <p>
                    <srtong>Dr. Hashim Yonis </strong>(Deputy Director)<br>
                      email : iro@jju.edu.et <br>
                      Ph : +251 908998596
                    </p>
                    <p>
                     <srtong>Dr. Nandeeswara Rao</strong><br>(Officer,International Acedemic Research & Affairs)<br>
                      email : pnraao@jju.edu.et <br>
                      Ph : +251 932319328
                    </p>
                    <p>
                      <srtong>Dr. Y Jagannadha Rao</strong><br>(Officer,International Research & Fund Mobilization)<br>
                      email : yjrao@jju.edu.et <br>
                      Ph : +251 925633657
                    </p>
                    <p>
                     <srtong>Mr. Elyas Abdi Ismail</strong>(Officer - Internal Affairs)<br>
                      email : erdoganamin100@gmail.com <br>
                      Ph : +251 915224186
                    </p>
                    <p>
                      <srtong>Ms. Selam Kiflu</strong>(Officer - Public Relations)<br>
                      email : christholic19@gmail.com <br>
                      Ph : +251 942992715
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
            
            </div>
            <div class="span5">
                <h4>Meet our Team  </h4>
            <!-- start flexslider -->
            
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <img src="img/works/iro/p1.jpg" alt="" />
                </li>
                <li>
                  <img src="img/works/iro/p2.jpg" alt="" />
                </li>
                <li>
                  <img src="img/works/iro/p3.jpg" alt="" />
                </li>
                <li>
                  <img src="img/works/iro/p4.jpg" alt="" />
                </li>
                <li>
                  <img src="img/works/iro/p5.jpg" alt="" />
                </li>
                <li>
                  <img src="img/works/iro/p6.jpg" alt="" />
                </li>
              </ul>
            </div>
            <!-- end flexslider -->
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
