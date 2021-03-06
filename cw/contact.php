
	<?php include "header.php"; ?>

    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Get in touch</h2>
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
      <!--<div id="google-map" data-latitude="40.713417" data-longitude="-74.0092125"></div>-->

      <div class="container">
        <div class="row">
          <div class="span9">
            <h4>Get in touch with us by filling <strong>contact form below</strong></h4>

            <form action="" method="post" role="form" class="contactForm">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>

              <div class="row">
                <div class="span3 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="span3 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="span3 form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="span9 form-group">
                  <textarea class="form-control" name="message" rows="9" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                  <p class="text-center">
                    <button class="btn btn-large btn-theme" type="submit">Submit message</button>
                  </p>
                </div>
              </div>
            </form>
          </div>
		  <div class="span3">
			 <div class="testimonial margintop20">
			<h6><span class="font-icon-map-marker"></span>Address</h6>
			<p>
				New Management Building<br>
				Jigjiga University - 
				Jijiga, Somali Region
			</p>
			
			<div class="solidline">
            </div>
			
			<h6><i class="icon-phone"></i>Call Us</h6>
			<p>
				Please feel free to contact us on :<br>
				tel : +251 912060095<br>
				email : yigzawh@yahoo.<br>
				(O)email : yigzawh@jju.edu.et
			</p>
			
			
			
			</div>
		 </div>
        </div>
      </div>
    </section>
    
	<?php include "footer.php"; ?>