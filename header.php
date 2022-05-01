
    <header class=".header">
        <div class="top" id="top">
            <div class="cont">

                <div class="title">
                    <h3>Announcements</h3>
                    <div id="slider">
                      <figure>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, impedit?</p>
                        <p>Lorem, ipsum dolor.</p>
                        <p>Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                      </figure>
                    </div>
                  </div>
                <div class="close_x">
                    <p style="color: #fff;" id="closebtn">X</p>
                </div>
            </div>
        </div>
        <div class="middle">
            <div class="cont">

                <div class="left">
                    <ul>
                    <li><a href="#">Webmail</a></li>
                    <li><a href="./contact_apo.php">Expats Information</a></li>
                    <li><a href="#">Student Login</a></li>
                    <li><a href="./aboutict.php">Web Teams</a></li>
                    <li><a href="#">Student Registration Portal</a></li>
                </ul>
            </div>
            <div class="right">
                <ul>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="#mySignin" data-toggle="modal">Log In</a></li> 
                </ul>
                <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
                     </div>
                    <div class="modal-body">
                        <form action="app/process.php" class="form-horizontal" method="POST">
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
                     Forgot password? <a href="ju_forgot.php" ><strong>RESET</strong></a>
                    </div>
                  </div>
                 </form>
                </div>
                </div>
                <form action="app/process.php" class="form-horizontal" method="POST">
                    <p class="alignleft margintop20">
                    </p>
                  </form>
              </div>
            </div>
            </div>
        </div>
        </div>
        <div class="bottom">
            <div class="cont">
                <div class="left">
                    <nav id="main-nav">
                        <ul class="links">
                          <li class="<?php if($page == 'home'){echo 'active';} ?>">
                            <a href="index.php">Home</a>
                          </li>
                          <li class="<?php if($page == 'admin'){echo 'active';}?>">
                            <a href="#"
                              >Administration
                              <span class="main-arrow"><i class="fal fa-angle-down"></i></span>
                            </a>
                            <ul class="submenu">
                              <li class="min"> 
                                <a href="#"
                                  >President
                                  <span class="arrow"><i class="fal fa-chevron-right"></i></span>
                                </a>
                                <ul class="submenu-2 max-sub2">
                                  <li class="min">
                                    <a href="./PresidentMessage.php">Profile</a>
                                  </li>
                                  <li class="min">
                                    <a href="./PresidentMessage.php">Messages</a>
                                  </li>
                                </ul>
                              </li>
                              <li class="min">
                                <a href="#"
                                  >Vice President
                                  <span class="arrow"><i class="fal fa-chevron-right"></i></span>
                                </a>
                                <ul class="submenu-2 max-sub2">
                                  <li class="min">
                                    <a href="./ARVmessage.php">AAVP Messages</a>
                                  </li>
                                  <li class="min">
                                    <a href="./ADVPmessage.php">ADVP Messages</a>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li  class="<?php if($page == 'research'){echo 'active';}?>">
                            <a href="#"
                              >Research
                              <span class="main-arrow"><i class="fal fa-angle-down"></i></span>
                            </a>
                            <ul class="submenu">
                              <li class="wide">
                                <a href="#"
                                  >Directorate of Research, Publication & Technology Transfer
                                  <span class="arrow"><i class="fal fa-chevron-right"></i></span>
                                </a>
                                <ul class="submenu-2 max-sub2">
                                  <li>
                                    <a href="./aboutDRPTT.php">About</a>
                                  </li>
                                  <li>
                                    <a href="./ThematicArea.php">Thematic Area</a>
                                  </li>
                                  <li>
                                    <a href="./PresidentMessage.php">Research Database</a>
                                  </li>
                                </ul>
                              </li>
                              <li class="wide">
                                <a href="#"
                                  >Offices
                                  <span class="arrow"><i class="fal fa-chevron-right"></i></span>
                                </a>
                                <ul class="submenu-2 max-sub2">
                                  <li>
                                    <a href="./Research.php">Research</a>
                                  </li>
                                  <li>
                                    <a href="./Publication.php">Publication</a>
                                  </li>
                                  <li>
                                    <a href="./PresidentMessage.php">Technology Transfer</a>
                                  </li>
                                </ul>
                              </li>
                              <li class="wide">
                                <a href="#"
                                  >Research Site
                                  <span class="arrow"><i class="fal fa-chevron-right"></i></span>
                                </a>
                                <ul class="submenu-2 max-sub2">
                                  <li class="min">
                                    <a href="./poultery.php">Poultry</a>
                                  </li>
                                  <li class="min">
                                    <a href="./farm.php">Farm</a>
                                  </li>
                                  <li class="min">
                                    <a href="./Nursery.php">Nursary</a>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          </ul>
                          </nav>
                </div>
                <div class="logo">
                    <img src="./img/jjlogo.png" alt="">
                </div>
                <div class="right">
                    <nav id="main-nav">
                        <ul class="links-2">
                            <li  class="<?php if($page == 'acadamic'){echo 'active';}?>">
                                <a class="acadamic" href="#"
                                  >
                                  <span class="main-arrow"><i class="fal fa-angle-down"></i></span>Acadamic
                                </a>
                                <ul class="submenu">
                                  <li class="head">
                                    <a href="#"
                                      >Colleges
                                      <span class="arrow"><i class="fal fa-chevron-right"></i></span>
                                    </a>
                                    <ul class="submenu-2 max-sub2">
                                      <li class="mid">
                                        <a href="./eng&tech.php">institute of technology</a>
                                      </li>
                                      <li class="mid">
                                        <a href="./coMHS.php">medicine & health science</a>
                                      </li>
                                      <li class="mid">
                                        <a href="./cda.php">Dryland agriculture</a>
                                      </li>
                                      <li class="mid">
                                        <a href="./coEBS.php">education & behavioural studies</a>
                                      </li>
                                      <li class="mid">
                                        <a href="./cvm.php">veternery medicine</a>
                                      </li>
                                      <li class="mid">
                                        <a href="./coBE.php">business & economics</a>
                                      </li>
                                      <li class="mid">
                                        <a href="./CSSH.php">social science & humanities</a>
                                      </li>
                                      <li class="mid">
                                        <a href="./CNCS.php">natural & computational science</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="#"
                                      >Schools
                                      <span class="arrow"><i class="fal fa-chevron-right"></i></span>
                                    </a>
                                    <ul class="submenu-2 max-sub2">
                                      <li class="min">
                                        <a href="./SL.php">Law</a>
                                      </li>
                                      <li class="min">
                                        <a href="./PresidentMessage.php">Psychology</a>
                                      </li>
                                      <li class="min">
                                        <a href="./SGS.php">graduate studies</a>
                                      </li>
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="#"
                                      >Institutes
                                      <span class="arrow"><i class="fal fa-chevron-right"></i></span>
                                    </a>
                                    <ul class="submenu-2 max-sub2">
                                      <li class="mid">
                                        <a href="./ISLLS.php">somali language & literature studies</a>
                                      </li>
                                    
                                    </ul>
                                  </li>
                                  <li>
                                    <a href="#"
                                      >Accreditations
                                      <span class="arrow"><i class="fal fa-chevron-right"></i></span>
                                    </a>
                                    <ul class="submenu-2 max-sub2">
                                      <li class="mid">
                                        <a href="#">Continuing Professional Development</a>
                                      </li>
                                  
                                    </ul>
                                  </li>
                                </ul>
                              </li>
                            <li 
 class="<?php if($page == 'other'){echo 'active';}?>">
                                <a href="#"
                                  >
                                  <span class="main-arrow"><i class="fal fa-angle-down"></i></span>Others
                                </a>
                                <ul class="submenu">
                                  <li>
                                    <a href="./RefHospital.php"
                                      >Referral Hospital
                              
                                    </a>
                                   
                                  </li>
                                  <li>
                                    <a href="./services.php"
                                      >Services
                                
                                    </a>
            
                                  </li>
                                  <li>
                                    <a href="./Registrar.php"
                                      >Registrar
                                    
                                    </a>
                                  
                                  </li>
                                </ul>
                              </li>

                              <li class="<?php if($page == 'about'){echo 'active';}?>">
                                <a href="about.php">About Us</a>
                              </li>
                          </ul>
                          </nav>
                </div>
            </div>
        </div>
        </header>

 <script src="js/script.js"></script>

