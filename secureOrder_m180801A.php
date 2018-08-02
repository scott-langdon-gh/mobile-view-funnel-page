<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/secureOrder_m180801A.css">
	<title>Total Restore | Secure Order Mobile</title>
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="leftAlign">
				<img class="gundry-md-logo" src="./images/GundryMD-Logo.png">
			</div>
		</div>
	</div>
	<div class="product-content">
		<div class="container">
			<div class="leftAlign">
				<p>Special Internet-Only Offer</p>
				<p class="text-light">Gundry MD Total Restore</p>
			</div>
			<img class="total-restore-mockup" src="./images/TotalRestoreMockup.png">
			<div class="vip-buttons">
				<div class="active-vip-button vip-button" id="non-vip">Non-VIP</div>
				<div class="vip-button" id="vip">VIP Club</div>
			</div>
			<p class="quantity leftAlign text-light">Quantity:</p>
			<div class="quantity-buttons">
				<div id="quantity-one" class="quantity-button"><span>1</span></div>
				<div id="quantity-three" class="quantity-button active-quantity-button"><span>3</span></div>
				<div id="quantity-six" class="quantity-button"><span>6</span></div>
			</div>
			<p class="price leftAlign">$44.95 per Jar</p>
			<p class="retail-price leftAlign">Retail: $209.85</p>
			<p class="now-price leftAlign">Now: $134.85</p>
			<p class="free-shipping leftAlign">+ Free Shipping</p>
			<table class="check-yes-section">
				<tr>
					<th class="verticalAlignTop">
						<div id="isSignUpSelected" class="checkbox">
							<img class="checkmark" src="./images/red-check2.png">
						</div>
					</th>
					<th class="verticalAlignTop">
						<p class="check-yes-desc leftAlign">YES! I want to sign up for the Gundry VIP Club and receive my Discount Today!</p>
					</th>
				</tr>
			</table>
			<p class="vip-signup-desc leftAlign">		
				The "Sign Up" option above will take you to the Gundry VIP Club order page. If you choose to order from the Gundry VIP Club order page with special discount pricing, you agree to receive "Total Restore" once per month and that your credit card will be charged the amount matching your selected package size, billed to your card as "Gundry MD" You can stop shipments anytime by calling customer service at 1-800-852-0477, from Monday-Friday, 5:00 a.m. to 7:00 p.m. PST or Saturday-Sunday, 6:00 a.m. to 4:30 p.m.
				(<a class="terms-conditions" href="https://gundrymd.com/terms/">All terms and conditions apply</a>)
			</p>
			<div class="buy-button"><span>Buy Now</span></div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#non-vip").click(function(){
				$('#non-vip').addClass('active-vip-button');
				$('#vip').removeClass('active-vip-button');
				$('.now-price').text('Now $134.85');
				$('.check-yes-section').css('display','none');
				$('.vip-signup-desc').css('display','none');
			})
			$("#vip").click(function(){
				$('#non-vip').removeClass('active-vip-button');
				$('#vip').addClass('active-vip-button');
				$('.now-price').text('$134.85 Per Month');
				$('.check-yes-section').css('display','block');
				$('.vip-signup-desc').css('display','block');
				$('.buy-button').addClass('dead-buy-button');
				$('.buy-button span').addClass('dead-buy-text');
			});
			$("#quantity-one").click(function(){
				$('#quantity-one').addClass('active-quantity-button');
				$('#quantity-three').removeClass('active-quantity-button');
				$('#quantity-six').removeClass('active-quantity-button');
				$('.price').text('$14.98 per Jar');
				$('.retail-price').text('Retail: $69.95');
			});
			$("#quantity-three").click(function(){
				$('#quantity-three').addClass('active-quantity-button');
				$('#quantity-one').removeClass('active-quantity-button');
				$('#quantity-six').removeClass('active-quantity-button');
				$('.price').text('$44.95 per Jar');
				$('.retail-price').text('Retail: $209.85');
			});
			$("#quantity-six").click(function(){
				$('#quantity-six').addClass('active-quantity-button');
				$('#quantity-one').removeClass('active-quantity-button');
				$('#quantity-three').removeClass('active-quantity-button');
				$('.price').text('$89.88 per Jar');
				$('.retail-price').text('Retail: $419.70');
			});
			$('#isSignUpSelected').click(function(){
				$(".buy-button").toggleClass("dead-buy-button");
				$('.checkmark').toggle();
			});
			$('.buy-button').click(function(){
				if(!$('.buy-button').hasClass("dead-buy-button")){
					window.location.href='';
				}
			});
		});
	</script>
</body>
</html>


