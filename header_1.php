<!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <strong><li>ICT Help Desk : </li></strong>
              <li><i class="icon-user"></i> Akram Md. <i class="icon-envelope-alt"></i> <strong>admin@jju.edu.et <i class="icon-phone"></i>  0913520003</strong></li>
              <li> | <i class="icon-user"></i> A B Pradeep <i class="icon-envelope-alt"></i> <strong>abpradeep@jju.edu.et <i class="icon-phone"></i>  0904243771</strong></li>
              <!--<li><strong>Or </strong>by Calling us </i><strong>AKRAM <i class="icon-phone"> +251 91-352-0003</strong><strong>A B Pradeep <i class="icon-phone">+251 90-424-3771</i> </strong></li>-->
            </ul>
            <ul>
              <strong><li>For Registrations : </li></strong>
              <li><i class="icon-user"></i> Mr.Selamsew (Registrar)<i class="icon-envelope-alt"></i> <strong>regi@jju.edu.et <i class="icon-phone"></i>  0913333325</strong></li>
              <li> | <i class="icon-user"></i> Mr.Mahdi (Deputy Director) <i class="icon-envelope-alt"></i> <strong>qayadfamily11@gmail.com <i class="icon-phone"></i>  910436121</strong></li>
              <!--<li><strong>Or </strong>by Calling us </i><strong>AKRAM <i class="icon-phone"> +251 91-352-0003</strong><strong>A B Pradeep <i class="icon-phone">+251 90-424-3771</i> </strong></li>-->
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
        <?php
                                if (isset($_GET['sorry'])) {
                                    echo '<div  class="alert alert-danger alert-dismissible" role="alert" >
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <strong>Alert! </strong>
                Invalid Username or Password or Permission Denied
                </div>';
                                }
                                ?>
      <div class="container ">
	   <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
              <ul>
                  <li><a href="index.php"><i class="icon-home"></i>HOME</a></li>
                  
                <li><a href="appexpat/play.htm"><i class="icon-home"></i>Expat E-Brochure</a></li>
                <li><a href="aboutict.php"><i class="icon-desktop"></i> About ICT</a></li>
                <li><a href="appexpat/list.php"><i class="icon-home"></i>Expats List</a></li>
                <li><a href="#mySignin" data-toggle="modal"><i class="icon-key"></i>Private Access</a></li>
              </ul>
            </div>
            <!-- Signup Modal -->
            <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Web <strong>Team</strong></h4>
              </div>
              <div class="modal-body">
			  <table class="table table-striped ">
              <thead>
                <tr>
                  <th>
                    S.No.
                  </th>
                  <th>
                    Full Name
                  </th>
                  <th>
                    Website Version
                  </th>
                  
                </tr>
              </thead>
              <tbody>
                <tr >
                  <td>
                    1
                  </td>
                  <td>
                    Mr.Gezahegn
                  </td>
                  <td>
                    Old Version
                  </td>
                  
                </tr>
                <tr>
                  <td>
                    2
                  </td>
                  <td>
                    Mr.Akram Mahmoud
                  </td>
                  <td>
                    Old Version
                  </td>
                  
                </tr>
                <tr>
                  <td>
                    3
                  </td>
                  <td>
                    Application Development Team 
                    <br>( Mr.A B Pradeep Kumar, Mr.Mustafa Md )
                  </td>
                  <td>
                    Latest Version
                  </td>
                  
                </tr>
              </tbody>
            </table>
                <!--<form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword2">Confirm Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword2" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Sign up</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                    </p>
                  </div>
                </form>-->
              </div>
            </div>
            <!-- end signup modal -->
            <!-- Sign in Modal -->
            <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                  <form action="appexpat/process_1.php" class="form-horizontal" method="POST">
                  <div class="control-group">
                       
                    <label class="control-label" for="inputText">Username</label>
                    <div class="controls">
                        <input type="text" name="txtuname" id="inputText" placeholder="Username" required="">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSigninPassword">Password</label>
                    <div class="controls">
                        <input type="password" name="txtpass" id="inputSigninPassword" placeholder="Password" required="">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" name="btnlogin" class="btn btn-dark">Sign in</button>
                     Forgot password? <a href="ju_forgot_1.php" ><strong>RESET</strong></a>
                    
                </form>
                  <form action="app/process_gst.php" class="form-horizontal" method="POST">
                       
                  </div>
                    <p class="alignleft margintop20">
                     <button type="submit" name="btngst" class="btn btn-rounded btn-orange">Guest Login</button>
                     Guests can access news and event updates by clicking here
                    </p>
                  </div>
                  </form>
              </div>
            </div>
            <!-- end signin modal -->
            <!-- Reset Modal -->
            <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputResetEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputResetEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Reset password</button>
                    </div>
                    <p class="aligncenter margintop20">
                      We will send instructions on how to reset your password to your inbox
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end reset modal -->
          </div>
        </div>
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me for more info" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->