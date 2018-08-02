<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<title>Total Restore | Secure Order Mobile</title>
	<link rel="stylesheet" href="css/mobile-style.css">
	<style>
		
			a{text-decoration: none !important;}
			.floatLeft{float: left;}
			.floatRight{float: right;}
            .font28{font-size: 28px;}
			.clear{clear: both;}
	        .memberOption {border-radius: 5px; box-shadow: 0 6px 8px #ebebeb; padding: 15px; background: #fff;}
			.mbWraps33{box-shadow: -5px 1px 18px #ebebeb; padding: 10px; padding-left: 19px;}
			.orderGuarantee{top: 10px; float: right;}
			.memberOptionPricing {padding: 5px 10px;}
			.memberTitle {font-size: 23px; text-align: center;}
			.memberOptionDetails {font-size: 18px;}
			.memberOption ul {font-size: 15px; padding-left: 20px;}
			.memberOptionRight {position: relative;}
			#memberCheckbox {display: none;}
			#memberCheckbox + label {margin-top: 20px; cursor: pointer;}
			.memberCheckButton {border-radius: 16px; box-shadow: 3px 3px 3px #000; background: #007922; background: -moz-linear-gradient(top, #01C068 0%, #007922 50%, #499E4C 100%); background: -webkit-linear-gradient(top, #01C068 0%,#007922 50%,#499E4C 100%); background: linear-gradient(to bottom, #01C068 0%,#007922 50%,#499E4C 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#007922', endColorstr='#499E4C',GradientType=0 ); color: #FFF; margin-bottom: 10px; font-size: 21px; line-height: 22px; text-align: left;}
			#memberCheckbox + label div.memberCheckInner {padding: 10px 10px 10px 70px; background-position: 18px center; background-repeat: no-repeat; background-image: url(images/member-check.png);}
			.hoverFunction2{display: none;}
			/*#memberCheckbox:checked + label div.memberCheckInner {background-image: url(images/member-checked.png);}*/
			.memberAgreement{font-size: 12px;}
			.memberOptionDetails li{text-align: left; list-style-image: url("images/check.png"); margin-bottom: 10px;}
			.offerTitle{font-size: 20px;}
			.orderOptionPayment{text-align: center;}
			#memberCheckbox + label div.memberCheckInner{background-image: none;}
			#memberSection .memberCheckInner.memberCheckInner2{background: rgba(254,254,254,1);
			background: -moz-linear-gradient(top, rgba(254,254,254,1) 0%, rgba(219,219,219,1) 18%, rgba(209,209,209,1) 53%, rgba(254,254,254,1) 100%);
			background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(254,254,254,1)), color-stop(18%, rgba(219,219,219,1)), color-stop(53%, rgba(209,209,209,1)), color-stop(100%, rgba(254,254,254,1)));
			background: -webkit-linear-gradient(top, rgba(254,254,254,1) 0%, rgba(219,219,219,1) 18%, rgba(209,209,209,1) 53%, rgba(254,254,254,1) 100%);
			background: -o-linear-gradient(top, rgba(254,254,254,1) 0%, rgba(219,219,219,1) 18%, rgba(209,209,209,1) 53%, rgba(254,254,254,1) 100%);
			background: -ms-linear-gradient(top, rgba(254,254,254,1) 0%, rgba(219,219,219,1) 18%, rgba(209,209,209,1) 53%, rgba(254,254,254,1) 100%);
			background: linear-gradient(to bottom, rgba(254,254,254,1) 0%, rgba(219,219,219,1) 18%, rgba(209,209,209,1) 53%, rgba(254,254,254,1) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fefefe', endColorstr='#fefefe', GradientType=0 );color: black;border-radius: 8px;}
			a{cursor: pointer;}
			#memberCheckbox + label div.memberCheckInner{padding: 10px !important; text-align: center;}
			.smallerFont{font-size: 18px;}
			.memberAgreement{margin: 0px auto; font-size: 10px; width: 95%;}
			.wait{color: #3a5eac; font-weight: bold; font-size: 28px;}
			.join{font-weight: bold; color: #00aab1;}
			.subscribe-div{padding: 15px 5px 15px 15px; position: relative; width: 92%;
					   margin:5px auto 15px; color: #5e5f61;font-weight: bold;
					   -webkit-box-shadow: 2px 2px 5px 0px rgba(220,220,221,1);
					   -moz-box-shadow: 2px 2px 5px 0px rgba(220,220,221,1);
					   box-shadow: 2px 2px 5px 0px rgba(220,220,221,1);
					   background: #00aab1;}
			.sub-save{font-weight: bold; font-size: 19px;}
			.save-ten{color: #d72d2a;font-weight: bold}
			.yes-text{margin: 0; font-size: 19px; color: #fff; width: 80%; float: right; padding-top: 10px;}
            .checkbox{display: inline-block;}
			.checkbox img{width: 40px;}
    		.smallFont{font-size: 13px; color: #fff; text-align: center; display: block; margin-top: 2px; font-weight: normal;}
    		#termslink{font-size: 15px; color: #3a5eac;}
    		#no-div{font-weight: normal; padding: 15px; width: 90%; text-align: center; border: 1px solid #d3d3d3;
    				background: #d3d3d3; border-radius: 50px;}
            .special-div{color: #fff; padding: 20px 15px; background: #303679; text-align: center;}
            .special-div p{margin: 0;}
            .optional{margin-top: 10px !important; font-size: 17px;}
            .blue-save{background: #a7cd06; color: #fff; padding: 15px; margin: 20px auto; border-radius: 25px; margin-bottom: 25px;
				   max-width: 320px;}
			.red-under{border-bottom: 4px solid #233a72;}
			.big-white{font-size: 24px; margin-bottom: 12px;}
			.save-info{float: left; width: 70%}
			.tap{color: #233a72;}
		.finger {float: left;margin-left: 30px;margin-right: -20px;}
		.db{display: block;}
	</style>
</head>
<body>
	<header>
		<div class="container">
			<img src="images/mobile-logo.png" alt="">
		</div>
	</header>
		<div class="special-div">
            <p class="font28"><b>Join the GUNDRY VIP CLUB</b> and Save on Total Restore</p>
            <p class="optional">(optional)</p>
        </div>

    	<div id="">
    		<div class="memberRight">
    			<div id="memberSection">
    				<div class="memberOption">
    					<div class="memberOptionPricing">
    						<div class="memberOptionDetails">
    							<ul>
    								<li>Additional savings on top-selling Total Restore</li>
    								<li>Lock in the <b>same LOW price now</b></li>
    								<li><b>Guaranteed</b> product availability</li>
    								<li>Sneak peeks at new Gundry MD Products</li>
    								<li>Convenient monthly delivery</li>
    								<li><b>Cancel anytime</b></li>
    							</ul>
    						</div>

    					</div>
    					<div class="memberOptionRight">
    						<input type="checkbox" id="memberCheckbox" />
    						<label for="memberCheckbox">
    							<a href="secureOrder_m_continuity180627A.php" class="db">
    								<div class="blue-save">
										<img src="images/hand-point.png" class="finger" alt="">
										<div class="save-info">
											<p class="yes-text"> <span class="sub-save">YES!</span> I want to sign up for the Gundry VIP Club and receive my Discount Today!</p>
										</div>
										<div class="clear"></div>
									</div>
    							</a>
    							<div class="hoverFunction">
    								<p class="memberAgreement">The "Sign Up" option above will take you to the Gundry VIP Club order page. If you choose to order from the Gundry VIP Club order page with special discount pricing, you agree to receive "Total Restore" once per month and that your credit card will be charged the amount matching your selected package size, billed to your card as "Gundry MD" You can stop shipments anytime by calling customer service at 1-800-852-0477, from Monday-Friday, 5:00 a.m. to 7:00 p.m. PST or Saturday-Sunday, 6:00 a.m. to 4:30 p.m.</p>    								
									<p class="orderOptionPayment">(<a href="new-terms.php" id="termslink" target="_blank" onclick="return !window.open(this.href, 'GundryMD', 'toolbar=no, scrollbars=no, resizable=no, status=no, menubar=no, location=no, top=300, left=300, width=400, height=400')">All terms and conditions apply</a>)</p>
    							</div>
    						</label>
							<a href="secureOrder_m180627A.php" class="db">
    						<div class="subscribe-div" id="no-div">
    							No, Take me Back to the Non-VIP Section
    						</div>
    						</a>
    					</div>
    				</div> 
    			</div>
    		</div>
	<footer>
		<div class="container">
			<p>The information on this website has not been evaluated by the Food and Drug Administration. These products are not intended to diagnose, treat, cure or prevent any disease.</p>
			<p>&copy; Gundry MD 2018. All Rights Reserved </p>
			<p><a href="http://gundrymd.com/terms/" target="_blank">Terms &amp; Conditions</a> | <a href="http://gundrymd.com/privacy/" target="_blank">Privacy Policy</a></p>
			<p>9465 Wilshire Boulevard, Suite 300 Beverly Hills, California, 90212</p>
		</div>
	</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {


	})
</script>
</body>
</html>