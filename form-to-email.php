<?php
if(isset($_POST['btncontact']))
{
	

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $sub = $_POST['subject'];
    $message = $_POST['message'];



    $email_from = $visitor_email;//<== update the email address
    $email_subject = $sub." by ".$name;
    $email_body = "From : $visitor_email\t\tSubject : $sub\n\n".
                  "Dear Sir/Madam,\n$message\n".
    
    $to = "abpradeep@jju.edu.et";//<== update the email address
//    $headers = "Reply-To: $visitor_email \r\n";
//    $headers .= "Reply-To: $visitor_email \r\n";
    //Send the email!
    mail($to,$email_subject,$email_body);
    //done. redirect to thank-you page.
    echo 'Your enquiry reached Us!! We will get back to you soon.';
            header('Refresh:2; URL=./contact.php');


   
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

?> 