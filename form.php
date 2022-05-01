<?php
        $email;$comment;$captcha;
        if(isset($_POST['name'])){
          $name=$_POST['name'];
        }if(isset($_POST['email'])){
          $email=$_POST['email'];}
          if(isset($_POST['subject'])){
          $subject=$_POST['subject'];
        }if(isset($_POST['message'])){
          $message=$_POST['message'];
        }if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '<h2>Please check the the captcha form.</h2>';
          exit;
        }
        $secretKey = "6LdyUXQUAAAAAAhP4kM8nSlFCYVb01XQNXyDtxXZ";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        if(intval($responseKeys["success"]) !== 1) {
          echo '<h2>You are spammer ! Get the @$%K out</h2>';
        } else {
            if(isset($_POST['btnreg']))
{
	
    
    

    $headers = "From: JJU Official Website \r\n";

   // $email_from = $visitor_email;//<== update the email address
    $email_subject = $subject." by ".$name;
    $email_body = "From : JJU Official Website\t\tSubject : $subject\t\tPurpose : Verification\n\n".
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
    //header('Refresh:3; URL=./contact.php');
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
   
    
}  
          echo '<h2>Thanks for posting comment.</h2>';
        }
?>