<?php
//echo "email: " . $_REQUEST['subscribe-email'] . "<BR>";
//exit;
if($_REQUEST['subscribe-email'] == ''):
  return "error";
endif;
if (filter_var($_REQUEST['subscribe-email'], FILTER_VALIDATE_EMAIL)):
  $subject = 'Email from TGC Landing Page'; // Subject of your email

  // Receiver email address
  $to = 'newsletter@thegivingcycle.org';  //Change the email address by yours
 
  // prepare header
  $header = 'From: '. ' <'. $_REQUEST['subscribe-email'] .'>'. "\r\n";
  $header .= 'Reply-To:  '. $_REQUEST['subscribe-email'] . "\r\n";
  $header .= 'Cc:  ' . 'jesse.josserand@thegivingcycle.org' . "\r\n";
  $header .= 'Bcc:  ' . 'jesse.josserand@gmail.com' . "\r\n";
  $header .= 'X-Mailer: PHP/' . phpversion();

  $message .= 'Email: ' . $_REQUEST['subscribe-email'] . "\n";
  $message .= 'Subject: Email from TGC Newletter Signup' . "\n";
  //$message .= 'Message: '. $_REQUEST['message'];
  $message .= 'Message: Please add me to your newsletter mailing list and notify me when you launch.';

  // Send subscribe information
  $mail = mail( $to, $subject , $message, $header );
  `echo $message|mail -s $subject $to`;
  echo 'sent';
  else:
    return "error";
  endif; 

?>
