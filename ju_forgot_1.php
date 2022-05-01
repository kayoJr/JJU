<!DOCTYPE html>

<html lang="en-us">
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

  <style>
   td{
  padding-top: 40px;
  }
  
  </style>
</head>
    <body>
        
        <div class="container">
            <div class="row">
          <div class="span4">
              <div class="margintop20"></div>
            <div class="logo">
              <a href="index.php"><img src="img/lo.png" alt="" class="logo" /></a>
            </div>
          </div>              
                       
        </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="wrapper">
                        <?php
                        if (isset($_POST['btnreset'])) {
                            $uname = trim($_POST['txtuname']);
                            $new_pass = trim($_POST['txtnewpassword']);
                            $cnf_pass = trim($_POST['txtcnfpassword']);
                            if ($new_pass == $cnf_pass) {
                                require_once 'appexpat/db/dbfile.php';
                                $obj = new Database();
                                $obj->connect();
                                $table = "expat_users";
                                $cols2 = array(passwrd => md5($new_pass));
                                $condition = array("uname='$uname'");
                                $result = $obj->update($table, $cols2, $condition);
                                if ($result) {
                                    ?>
                                    <form action="" class="form-horizontal" method="POST">
                                        <div class="inside">
                                            <a href="index"><img src="img/change_pass.jpg" width="250" class="img-responsive center-block" style="margin-bottom: 10px;"/></a>
                                            <div class="well"><b style="color: green;">Password Successfully Changed! </b></div>
                                        </div>
                                    </form>
                                    <?php
                                    header('Refresh:2; URL=ju_login.php');
                                }
                            } else {
                                ?>
                                <form action="" class="form-horizontal" method="POST">
                                    <div class="inside">
                                        <a href="index"><img src="img/forgot.png" class="img-responsive center-block" style="margin-bottom: 10px;"/></a>
                                        <div class="well"><b style="color: red;">Sorry! Password Reset Failed! </b></div>
                                    </div>
                                </form>
                                <?php
                                header('Refresh:2; URL=ju_forgot_1.php');
                            }
                        } else if (isset($_POST['btnvalidate'])) {
                            $uname = trim($_POST['txtuname']);
                            $answer = strtoupper(trim($_POST['txtanswer']));
                            require_once 'appexpat/db/dbfile.php';
                            $obj = new Database();
                            $obj->connect();
                            $table = "expat_users";
                            $cols = "userid, uname, passwrd, fname, phone, email, user_type, recstatus, logstatus, created_date, expatid, photo, squest, sanswer";
                            $where = "uname='$uname' and sanswer='$answer'";
                            $order = "created_date desc";
                            $obj->select($table, $cols, $where, $order);
                            $res = $obj->getResult();
                            if ($res) {
                                $a = 0;
                                $userid = $res[$a]['userid'];
                                $squest = $res[$a]['squest'];
                                $sanswer = $res[$a]['sanswer'];
                                ?>
                        <section id="inner-headline">
                            <div class="container">
                                <div class="row">
                                  <div class="span4">
                                    <div class="inner-heading">
                                        <h2>Reset <strong>Password</strong></h2>
                                    </div>
                                  </div>
                                  <div class="span8">
                                    <ul class="breadcrumb">
                                        <li><a href="index.php"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                                        <li><a href="">Login</a><i class="icon-angle-right"></i></li>
                                      <li class="active">Reset</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>

                          </section>
                                <form action="" class="form-horizontal" method="POST">
                                    <div class="span4 offset4">
                                    <div class="margintop20"></div>
                                    <div class="testimonial">
                                        <div class="margintop20"></div>
                                        <div class="aligncenter">
                                        <a href="" ><img src="img/forgotpass.png" style="width:70px; height: 70px;" /></a>
                                        <input type="hidden" placeholder="Enter New Password" name="txtuname" class="frm-inp" required=""  value="<?php echo $uname; ?>">
                                        <div class="control-groupt"><input type="password" placeholder="Enter New Password" name="txtnewpassword" required="" autofocus=""></div>
                                        <div class="margintop20"></div>
                                        <div class="control-group"><input type="password" placeholder="Confirm Password" name="txtcnfpassword" required="" ></div>
                                        <button type="submit" name="btnreset" class="btn">Reset Password<i class="fa fa-arrow-circle-right"></i></button>
                                    <a href="index.php"><i class="icon-home icon-circled icon-32 active"></i></a>
                                        </div>
                                </form>
                                <?php
                            } else {
                                ?>
                                <form action="" class="form-horizontal" method="POST">
                                    <div class="inside">
                                        <!--<a href="index"><img src="img/forgot.png" class="img-responsive center-block" style="margin-bottom: 10px;"/></a>-->
                                        <div class="well"><b style="color: red;">Sorry! The Security Answer Doesnot Match With Your Answer! </b></div>
                                    </div>
                                </form>
                                <?php
                                header('Refresh:2; URL=ju_forgot_1.php');
                            }
                        } else if (isset($_POST['btnforgot'])) {
                            $uname = trim($_POST['txtuname']);
                            require_once 'appexpat/db/dbfile.php';
                            $obj = new Database();
                            $obj->connect();
                            $table = "expat_users";
                            $cols = "userid, uname, passwrd, fname, phone, email, user_type, recstatus, logstatus, created_date, expatid, photo, squest, sanswer";
                            $where = "recstatus in (1) and uname='$uname'";
                            $order = "created_date desc";
                            $obj->select($table, $cols, $where, $order);
                            $res = $obj->getResult();
                            if ($res) {
                                $a = 0;
                                $userid = $res[$a]['userid'];
                                $squest = $res[$a]['squest'];
                                $sanswer = $res[$a]['sanswer'];
                                ?>
                                <section id="inner-headline">
                            <div class="container">
                                <div class="row">
                                  <div class="span4">
                                    <div class="inner-heading">
                                        <h2>Reset <strong>Password</strong></h2>
                                    </div>
                                  </div>
                                  <div class="span8">
                                    <ul class="breadcrumb">
                                        <li><a href="index.php"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                                        <li><a href="">Login</a><i class="icon-angle-right"></i></li>
                                      <li class="active">Reset</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>

                          </section>
                                <form action="" class="form-horizontal" method="POST">
                                    <div class="span4 offset4">
                                    <div class="margintop20"></div>
                                    <div class="testimonial">
                                        <div class="margintop20"></div>
                                        <div class="aligncenter">
                                        <a href="" ><img src="img/forgotpass.png" style="width:70px; height: 70px;" /></a>
                                        <input type="hidden" placeholder="Username or Email Id" name="txtuname" class="frm-inp" required="" autocomplete="off" readonly="" value="<?php echo $uname; ?>">
                                        <div class="control-group"><input type="text" placeholder="Username or Email Id" name="txtsquest" class="frm-inp" required="" autocomplete="off" readonly="" value="<?php echo $squest; ?>"><i class="fa fa-user frm-ico"></i></div>
                                        <div class="control-group"><input type="password" placeholder="Security Answer" name="txtanswer" class="frm-inp" required="" autofocus=""><i class="fa fa-user frm-ico"></i></div>
                                        <button type="submit" name="btnvalidate" class="btn">Validate</button>
                                        <a href="index.php"><i class="icon-home icon-circled icon-32 active"></i></a>
                                    </div>
                                </form>
                                <?php
                            } else {
                                ?>
                                <form action="" class="form-horizontal" method="POST">
                                    <div class="inside">
                                        <!--<a href="index"><img src="img/forgot.png" style="width:70px; height: 70px;" class="img-responsive center-block" style="margin-bottom: 10px;"/></a>-->
                                        <div class="well"><b style="color: red;">Sorry! This Username Doesnot Exists in Our Database </b></div>
                                    </div>
                                </form>
                                <?php
                                header('Refresh:2; URL=ju_forgot.php');
                            }
                        } else {
                            ?>
                        <section id="inner-headline">
                            <div class="container">
                                <div class="row">
                                  <div class="span4">
                                    <div class="inner-heading">
                                        <h2>Reset <strong>Password</strong></h2>
                                    </div>
                                  </div>
                                  <div class="span8">
                                    <ul class="breadcrumb">
                                        <li><a href="index.php"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                                        <li><a href="">Login</a><i class="icon-angle-right"></i></li>
                                      <li class="active">Reset</li>
                                    </ul>
                                  </div>
                                </div>
                              </div>

                          </section>
                        

                            <form action="" class="form-horizontal" method="POST">
                                <div class="span4 offset4">
                                    <div class="margintop20"></div>
                                    <div class="testimonial">
                                        <div class="margintop20"></div>
                                        <div class="aligncenter">
                                        <a href="" ><img src="img/forgotpass.png" style="width:70px; height: 70px;" /></a>
                                        
                                    <?php
                                    if (isset($_GET['sorry'])) {
                                        echo '<div  class="alert alert-danger alert-dismissible" role="alert" >
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <strong>Alert! </strong>
                Invalid Username or Password
                </div>';
                                    }
                                    ?>
                                        
                                    <div class="control-group "><input type="text" placeholder="Username or Email Id" name="txtuname" required="" autofocus="" autocomplete="off">
                                    <button type="submit" name="btnforgot" class="btn">Proceed</button>
                                    </div>
                                    
                                        
                                        <a href="index.php"><i class="icon-home icon-circled icon-32 active"></i></a>
                                    
                                    </div>
                                    </div>
                            </div>
                            </form>
                        
                        
                            <?php
                        }
                        ?>

                    </div>
                </div><!--/#single-wrapper -->
            </div>
        </div>
        
    </div>
    
        
    
<!--    <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>-->
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