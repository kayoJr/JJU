<!DOCTYPE html>
		
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>JJU Dashboard</title>
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
  <link href="skins/blue.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />


</head>
<div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">To add article plz fill this <strong>Form</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="Title">Title</label>
                    <div class="controls">
                      <input type="text" id="Title" placeholder="Enter A Title Here">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="subject">Subject</label>
                    <div class="controls">
                      <input type="password" id="subject" placeholder="Subject name">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="addphoto">Add Photo</label>
                    <div class="controls">
                      <input data-required="true" id="addphoto" type="file" name="file" data-show-preview="false">
                    </div>
                  </div>
				  <div class="control-group">
                    <label class="control-label" for="post">Post</label>
                    <div class="controls">
                      <textarea name="message" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Enter your post here"></textarea>
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn btn-pink">Save</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
<body>
  <div id="wrapper">
    <!-- start header -->
    <header>
      <div class="container-fluid ">
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="index.html"><img src="img/logo.png" alt="" class="logo pull-right" style="padding-top:40px;" /></a>
              
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav" style="padding-top:20px;">
                    <li class="dropdown">
                      <a href="index.html"><i class="icon-home icon-circled icon-64 active"></i><i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu" >
                        <li><a href="index-alt2.html">Homepage 2</a></li>
                        <li><a href="index-alt3.html">Homepage 3</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#"><i class="icon-bell icon-circled icon-64 active"></i><i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="">Typography</a></li>
                        <li><a href="">Table</a></li>
                        <li><a href="">Components</a></li>
                        <li><a href="">56 Animations</a></li>
                        <li><a href="">Icons</a></li>
                        <li><a href="">Icon variations</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#"><i class="icon-eye-open icon-circled icon-64 active"></i><i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="">About us</a></li>
                        <li><a href="">Pricing boxes</a></li>
                        <li><a href="">Testimonials</a></li>
                        <li><a href="">404</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#"><i class="icon-heart icon-circled icon-64 active"></i><i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="">Portfolio 2 columns</a></li>
                        <li><a href="">Portfolio 3 columns</a></li>
                        <li><a href="">Portfolio 4 columns</a></li>
                        <li><a href="">Portfolio detail</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#"><i class="icon-hospital icon-circled icon-64 active"></i><i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="">Blog left sidebar</a></li>
                        <li><a href="">Blog right sidebar</a></li>
                        <li><a href="">Post left sidebar</a></li>
                        <li><a href="">Post right sidebar</a></li>
                      </ul>
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
  <section id="content">
      <div class="container-fluid">
        <div class="row">
		<div class="span12">
			<div class="span3">
                <!-- start: Accordion -->
                <div class="accordion" id="accordion2">
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle " data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
									<i class="icon-minus"></i> Collapsible Group Item #1 </a>
                    </div>
                    <div id="collapseOne" class="accordion-body collapse in">
                      <div class="accordion-inner">
			<ul>
                            <li><a href="">Nivo slider</a></li>
                            <li><a href="">Slit slider</a></li>
                            <li><a href="">Parallax slider</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
									<i class="icon-plus"></i> Collapsible Group Item #2 </a>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse">
                      <div class="accordion-inner">
                        <ul>
                            <li><a href="">Nivo slider</a></li>
                            <li><a href="">Slit slider</a></li>
                            <li><a href="">Parallax slider</a></li>
                          </ul>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
									<i class="icon-plus"></i> Collapsible Group Item #3 </a>
                    </div>
                    <div id="collapseThree" class="accordion-body collapse">
                      <div class="accordion-inner">
                       <ul>
                            <li><a href="">Nivo slider</a></li>
                            <li><a href="">Slit slider</a></li>
                            <li><a href="">Parallax slider</a></li>
                          </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!--end: Accordion -->
              </div>
			  
			  <div class="span8">
				<a class="btn btn-medium btn-blue btn-rounded pull-right" href="#mySignup" data-toggle="modal"><i class="font-icon-magic"></i> Add to the table</a>
				<h4>View Tables</h4>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>
                    #
                  </th>
                  <th>
                    First Name
                  </th>
                  <th>
                    Last Name
                  </th>
                  <th>
                    Username
                  </th>
				  <th>
                    Action
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    1
                  </td>
                  <td>
                    Mark
                  </td>
                  <td>
                    Otto
                  </td>
                  <td>
                    @mdo
                  </td>
				  <td>
                    <div class="btn-group"> <button class="btn btn-primary"><i class="icon-cog"></i> Edit</button> <button class="btn btn-red"><i class="font-icon-remove"></i> Delete</button> <button class="btn btn-warning"><i class="font-icon-minus-sign"></i> warning</button> </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    2
                  </td>
                  <td>
                    Jacob
                  </td>
                  <td>
                    Thornton
                  </td>
                  <td>
                    @fat
                  </td>
				  <td>
                    <div class="btn-group"> <button class="btn btn-primary"><i class="icon-cog"></i> Edit</button> <button class="btn btn-red"><i class="font-icon-remove"></i> Delete</button> <button class="btn btn-warning"><i class="font-icon-minus-sign"></i> warning</button> </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    3
                  </td>
                  <td>
                    Larry
                  </td>
                  <td>
                    the Bird
                  </td>
                  <td>
                    @twitter
                  </td>
				  <td>
                    <div class="btn-group"> <button class="btn btn-primary"><i class="icon-cog"></i> Edit</button> <button class="btn btn-red"><i class="font-icon-remove"></i> Delete</button> <button class="btn btn-warning"><i class="font-icon-minus-sign"></i> warning</button> </div>
                  </td>
                </tr>
              </tbody>
            </table>
						<div class="row">
				  
							<div class="solidline">
							</div>
				  
						</div>
						<h4>Default Styles with Zebra-Striping</h4>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>
                    #
                  </th>
                  <th>
                    First Name
                  </th>
                  <th>
                    Last Name
                  </th>
                  <th>
                    Username
                  </th>
				  <th>
                    Action
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    1
                  </td>
                  <td>
                    Mark
                  </td>
                  <td>
                    Otto
                  </td>
				  <td>
                    @mdo
                  </td>
                  <td>
                    <div class="btn-group"> <button class="btn btn-primary"><i class="icon-cog"></i> Edit</button> <button class="btn btn-red"><i class="font-icon-remove"></i> Delete</button> <button class="btn btn-warning"><i class="font-icon-minus-sign"></i> warning</button> </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    2
                  </td>
                  <td>
                    Jacob
                  </td>
                  <td>
                    Thornton
                  </td>
                  <td>
                    @fat
                  </td>
				  <td>
                    <div class="btn-group"> <button class="btn btn-primary"><i class="icon-cog"></i> Edit</button> <button class="btn btn-red"><i class="font-icon-remove"></i> Delete</button> <button class="btn btn-warning"><i class="font-icon-minus-sign"></i> warning</button> </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    3
                  </td>
                  <td>
                    Larry
                  </td>
                  <td>
                    the Bird
                  </td>
                  <td>
                    @twitter
                  </td>
				  <td>
                    <div class="btn-group"> <button class="btn btn-primary"><i class="icon-cog"></i> Edit</button> <button class="btn btn-red"><i class="font-icon-remove"></i> Delete</button> <button class="btn btn-warning"><i class="font-icon-minus-sign"></i> warning</button> </div>
                  </td>
                </tr>
              </tbody>
            </table>
			  </div> 
		</div>
		</div>
		</div>
	</div>
	
</section>
<div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; Flattern - All right reserved.</span>
                </p>
                <div class="credits">
                  <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                  -->
                  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
			  
	
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
