<div class="ham">
<ul class="left_link">
    <li><a href="#mySignin" data-toggle="modal">Log In</a></li>
    <li><a href="#">Contact Us</a></li>
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
    <div id="mysidenav" class="sidenav">
        <div class="links">
            <ul>
               
                <li> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
                <li><a href="#">Web Mail</a></li>
                <li><a href="./contact_apo.php">Expats Information</a></li>
                <li><a href="#">Student Login</a></li>
                <li><a href="./aboutict.php">Web Teams</a></li>
                <li><a href="#">Student Registration Portal</a></li>
                
            </ul>  
        </div>
    </div>
    <span onclick="openNav()"><i class="fas fa-bars fa-2x"></i></span>
</div>