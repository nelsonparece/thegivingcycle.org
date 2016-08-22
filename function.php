<?php
require( '/home/thegivingcycle/public_html/info/wp-load.php' );

function wordpress_register($firstname,$lastname,$user_email){
$fname=trim($firstname);
$lname=trim($lastname);
$email=trim($user_email);
$user_name=$fname."_".$lname;
$user_id = username_exists( $user_name );
$random_password = wp_generate_password( $length=12, $include_standard_special_chars=false );
if ( !$user_id and email_exists($email) == false ) {

$user_id = wp_create_user($user_name,$random_password,$email);
$user = new WP_User($user_id);
$user->set_role('author');

//Mail Function
send_email($email,"Registration Successful At TheGivingCycle.org!\n","Congratulations! Registration Successful!\n Your Username Is: <b>{$user_name}</b> And Password Is: {$random_password}\nThank You For Registering. Login at https://thegivingcycle.org/info/, then click the site name at the top left of your screen.");
//Mail To Admin
send_email("newsletter@thegivingcycle.org ","Registration Successful","User {$fname} {$lname} registered for https://thegivingcycle.org/info/. The Username Is: <b>{$user_name}</b> And Password Is: {$random_password}\n");

//echo "Thank You, Registration Sucessful";

}else if ($user_id and email_exists($email) == false ) {
$inc=substr($user_name, -1);
$num=array('1','2','3','4','5','6','7','8','9');

    if (in_array($inc, $num)){
		  while(username_exists( $user_name )){
		  $inc=(int)$inc+1;
		  $user_name=substr_replace($user_name,$inc, -1);
		  }
	}else{
	  $inc=1;
	  $user_name=$user_name."_".$inc;
	  if(username_exists( $user_name )){
		  while(username_exists( $user_name )){
		  $user_name=substr_replace($user_name,$inc, -1);
		  $inc=$inc+1;
		  }
	  }
	}
	$user_id = wp_create_user($user_name,$random_password,$email);
	$user = new WP_User($user_id);
	$user->set_role('author');
	//Mail Function
	send_email($email,"Registration Successful At TheGivingCycle.org!","Congratulations! Registration Successful! Your Username Is: {$user_name} And Password Is: <b>{$random_password}\n Thank You For Registering. Login at https://thegivingcycle.org/info/");
	//Mail To Admin
	send_email("newsletter@thegivingcycle.org ","Registration Successful","User {$fname} {$lname} registered for https://thegivingcycle.org/info/. The Username Is: {$user_name} And Password Is: {$random_password}\n Thank You For Registration.");

    //echo "Thank You, Registration Sucessfully";
	
}else{
	echo "Sorry, Email Address Already Exists !";
}
}

function send_email($email,$subject,$body){
    $to = $email;
    $subject = $subject;
    $body = "<div>".$body."</div>";

    $headers = 'From: TheGivingCycle.Org <newsletter@thegivingcycle.org>' . "\r\n" ;
    $headers .='Reply-To: '. $to . "\r\n" ;
    $headers .='X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   
    mail($to, $subject, $body,$headers);

}

?>
