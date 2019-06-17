<?php
session_start();
$ototal = 25000;
$ctotal = 25000;
$_SESSION['product'] = 25000;
$_SESSION['offer'] = 0;

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Arfeen Khan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bumper.css">
	<link rel="shortcut icon" href="images/Fevicon.png">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab|Oswald|Lato' rel='stylesheet' type='text/css'>
	<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
	
<!-- Facebook Pixel Code - General Retargeting Code HRA -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '363160880504868');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=363160880504868&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109138999-9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109138999-9');
</script>

	<script>
	function checkInput(textbox) 
	{
		var price = document.getElementById(textbox).value;
		document.getElementById('ptotal').innerHTML = price;
		document.getElementById('total').innerHTML = price;
	}
	function validateForm() 
	{
		var x = document.forms["form1"]["price"].value;
		//alert(x);
	}
	</script>
	
	
		<script>
function OnButton1()
{
	var n=document.forms["form1"]["name"].value;
	var e=document.forms["form1"]["email"].value;
	var p=document.forms["form1"]["phone"].value;
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(n==null || n=="" ||e==null || e=="" ||p==null || p=="")
	{
		alert('Name , Email Id or Contact No field cannot be empty');
		return false;
	}
   	if (!filter.test(e))
	{
		alert('Please enter a valid Email Id');
		return false;
	}
	if(p.length<10)
	{
		alert('Mobile number should be 10 digit or more');
		return false;
	}
	
}
function OnButton2()
{
	var n=document.forms["form1"]["name"].value;
	var e=document.forms["form1"]["email"].value;
	var p=document.forms["form1"]["phone"].value;
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if(n==null || n=="" ||e==null || e=="" ||p==null || p=="")
	{
		alert('Name , Email Id or Contact No field cannot be empty');
		return false;
	}
    if (!filter.test(e))
	{
		alert('Please enter a valid Email Id');
		return false;
	}
	if(p.length<13)
	{
if(p.value==($.isNumeric)){
alert(1);}
		alert('Mobile number should be 10 digit or more');
		return false;
	}
	
	
}
</script>

	
</head>
<body style="background: black;">
	<div class="wrapper" style="background-image: url(images/about.png);background-repeat: no-repeat;">
		<div class="header">
				<h1 style="font-weight: 600;color: #fff;">The Incredible You Coach Training Event </h1>
		</div>
		<div class="webinar-countdown cf" id="countdown-container">
				
                <!--<!-- TIMER -->
						<!--	<div id="countdown-container">
								
								<div id="timer">
									<ul id="countdown"><li>
											<span id="days"></span>
											<div class="count-holder">
												<p class="timeRefDays" data-lb="editable-text" data-lb-id="count-down-text-days" data-lb-name="Countdown Text Days">day</p>
											</div>
										</li>
										<li>
											<span id="hours"></span>
											<div class="count-holder">
												<p class="timeRefHours" data-lb="editable-text" data-lb-id="count-down-text-hours" data-lb-name="Countdown Text Hours">hour</p>
											</div>
										</li>
										<li>
											<span id="minutes"></span>
											<div class="count-holder">
												<p class="timeRefMinutes" data-lb="editable-text" data-lb-id="count-down-min" data-lb-name="Countdown Text Minutes">minute</p>
											</div>
										</li>
										<li>
											<span id="seconds"></span>
											<div class="count-holder">
												<p class="timeRefSeconds" data-lb="editable-text" data-lb-id="count-down-text-sec" data-lb-name="Countdown Text Seconds">second</p>
											</div>
										</li>
									</ul></div>
								<div class="clear"></div>						
							</div>-->
		
			</div>
		<div class="clearfix"></div>
		<div class="main" style="background-color: white;">
			<div class="section-lft">
				<form name="form1" method="POST" id = "form1" action = "online.php" onsubmit="return validateForm()">
					<div class="stp-1">
						<h2 style="font-weight: 600;color: black;">step 1: contact information </h2>
						<div class="contact-info">
							<div class="form-input">
								<label>First Name:*</label> 
								<input type="text" placeholder = "Enter Full Name" pattern = "[a-zA-Z ]{3,}"  name = "name" id = "name" title="It must contain only letters and a length of minimum 3 characters!"  required autofocus>
								<div class="clearfix"></div>
							</div>	
							<div class="form-input">	
								<label>Email:*</label>
								<input type="email" placeholder = "Enter Email ID" pattern = "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$"  name = "email" id = "email" title = "It must contain the email that you have chosen at registration."  required autofocus >
								<div class="clearfix"></div>
							</div>
							<div class="form-input">	
								<label>Phone:*</label>
								<input type="text" placeholder = "Enter Contact No" name = "phone" id = "phone"  title = "It must contain a valid 10 digits mobile number! e.g.9836193498"  required autofocus >
								<div class="clearfix"></div>
							</div>	
						</div>

					</div>
					<div class="clearfix"></div>
					<div class="stp-4">
						<h2 style="font-weight: 600;color: #000000ba;">Product Details </h2>
						<hr>
						<div class="product_name">Coach To A Fortune Economy Ticket :</div>
						<div class="price" ><label id="ptotal">Free</label></div>
						<div class="clearfix"></div>
						<hr>
						<div class="product_name">GST :</div>
						<div class="price" ><label id="gsttotal">Free</label></div>
						<div class="clearfix"></div>
						<hr>
						<div class="product_name ">Total Price:</div>
						<div class="price"><label id="total"><span class="rupe" id="pstotal">Free</span></label></div>
						<div class="clearfix"></div>
					</div>
					
					<div class="button-section">
					
					<div class="clearfix"></div>
				</div>
					
					<div class="button-section">
							<input type="hidden" id="totalo1" name="totalo1" value="<?php echo $ototal;?>">
								<input type="submit" style="padding: 3% 7%;background-color: #FF6F00;font-weight: 600;font-size: 23px;opacity:0.8" class="pay-button" value="Buy Now" onclick="return OnButton1();" disabled="disabled">	
<div class="icon-container">
    
                          <i class="loader"></i>
                            </div>
						
						<div class="clearfix"></div>
					</div>
				</form>
			</div>
<img src="giphy.gif" id="loading-image" style="display: block; margin: 0 auto; width: 100px; visibility: hidden;">
			<div class="section-rth">
				<!--<div class="side-sec">-->
				<!--	<div clss="side-img"><img src="images/money.png"></div>-->
				<!--	<div class="side-txt">-->
				<!--	<h3>100% money back guarantee</h3>-->
				<!--	<p><!--You have a full 60 days to preview . If you decide during that time that it's not right for you, just let us know and you'll be issued a full and prompt refund, no questions asked. In short, you get a great return on your investment, or you get your money back.</p>-->
				<!--	</div>-->
				<!--	<div class="clearfix"></div>-->
				<!--</div>-->
					
						
				<div class="side-sec">
					<div clss="side-img"><img src="images/shil.png"></div>
					<div class="side-txt">
					<h3>your information is safe</h3>									
					<p>We will not sell or rent your personal contact information for any marketing purposes whatsoever.  </p>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="side-sec">
					<div clss="side-img"><img src="images/help.png"></div>
					<div class="side-txt">	
					<h3>secure checkout</h3>									
					<p>All information is encrypted and transmitted without risk using a Secure Sockets Layer protocol. </p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="side-sec">
					<div clss="side-img"> <img src="images/lock.png"></div>
					<div class="side-txt">	
					<h3>need help?</h3>	
					<p>Call Us @ (+91) 70456 55781<br></p>
					<p>Email us Anytime:<br><a href="#">support@arfeenkhan.com</a></p>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="images-wrap">	
					
						<img src="images/identity2.png">
						<img src="images/identity.png">
						<img src="images/identity1.png">									
				</div>	
			</div>
			<div class="clearfix"></div>
		</div>
		
	</div>
	<script type="text/javascript">


</script>
<script src="js/html5shiv.js"></script>
	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/a.js"></script> 
 <script>
	 
	$('#email').on('change',function()
	{
	 var email = document.getElementById('email').value;
	 //alert(email);
          $('.icon-container').css('display','block');
	 $(".pay-button").val("");
        $(".pay-button").css('width','30%');
	  $.ajax({  
        url : "onchange.php",
        data : {email: email},
        type : "POST",
        success : function(data) { 
console.log(data);  
            if(data==1)
              {
                 $('.pay-button').css('opacity', '1');
                 $('.pay-button').prop('disabled', false);
 		 $('.icon-container').css('display','none');
	         $(".pay-button").val("Buy Now");
		 $(".pay-button").css('width','unset');
              }
            else
             {
		$('.pay-button').css('opacity', '0.8');
                $('.icon-container').css('display','none');  
		$(".pay-button").val("Buy Now"); 
		 $(".pay-button").css('width','unset');
             }
         
            
        },
        error : function() {
        }
    });
	});

</script>
</body>
</html>
