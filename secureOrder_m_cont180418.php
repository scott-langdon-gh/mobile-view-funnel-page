<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<title>Total Restore | Secure Order Mobile</title>
	<link rel="stylesheet" href="css/mobile-style.css">
	<style>
		.package-title{color: #fff; text-align: center; background-color: #303679; padding: 20px 0 15px;}
		.choose-package{font-size: 23px; font-family: 'Proxima_Nova_SemiBold';}
		.down-triangle{width: 0; height: 0; border-left: 25px solid transparent; border-right: 25px solid transparent; 
					   border-top: 20px solid #303679; margin: auto;}
		.choices{margin: 20px auto; background-color: #f2f2f2; border: 2px solid white; color: #abaeb6; text-align: center;}
		.choices p{padding: 3px 0;}
		.total{text-decoration: line-through;}
		.jars{font-size: 20px; padding: 15px 0 10px !important;}
		.free-shipping{font-size: 13px; vertical-align: 6px; letter-spacing: .5px;}
		.cta{width: 50%; margin: 10px auto 25px; text-align: center; padding: 5px; color: #fff; border: 1px solid #e47925; font-size: 20px; box-shadow: 0px 1px 3px #666666;
			 border-radius: 2px; background: rgba(240,169,69,1);
			background: -moz-linear-gradient(top, rgba(240,169,69,1) 0%, rgba(226,153,57,1) 36%, rgba(226,153,57,1) 51%, rgba(219,147,52,1) 66%, rgba(209,136,46,1) 82%, rgba(209,136,46,1) 100%);
			background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(240,169,69,1)), color-stop(36%, rgba(226,153,57,1)), color-stop(51%, rgba(226,153,57,1)), color-stop(66%, rgba(219,147,52,1)), color-stop(82%, rgba(209,136,46,1)), color-stop(100%, rgba(209,136,46,1)));
			background: -webkit-linear-gradient(top, rgba(240,169,69,1) 0%, rgba(226,153,57,1) 36%, rgba(226,153,57,1) 51%, rgba(219,147,52,1) 66%, rgba(209,136,46,1) 82%, rgba(209,136,46,1) 100%);
			background: -o-linear-gradient(top, rgba(240,169,69,1) 0%, rgba(226,153,57,1) 36%, rgba(226,153,57,1) 51%, rgba(219,147,52,1) 66%, rgba(209,136,46,1) 82%, rgba(209,136,46,1) 100%);
			background: -ms-linear-gradient(top, rgba(240,169,69,1) 0%, rgba(226,153,57,1) 36%, rgba(226,153,57,1) 51%, rgba(219,147,52,1) 66%, rgba(209,136,46,1) 82%, rgba(209,136,46,1) 100%);
			background: linear-gradient(to bottom, rgba(240,169,69,1) 0%, rgba(226,153,57,1) 36%, rgba(226,153,57,1) 51%, rgba(219,147,52,1) 66%, rgba(209,136,46,1) 82%, rgba(209,136,46,1) 100%);
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f0a945', endColorstr='#d1882e', GradientType=0 );}
		.cta a{color: #fff; display: block;}
		.order-div{background-color: #fff; margin-top: 97px; margin-right: -10px; box-shadow: 0px 1px 10px #666666;}
		.options-div{padding: 0 20px 15px;}
		.options-wrapper{box-shadow: 0 5px 7px -2px #ccc;}
		.truck-image{margin-right: 5px; width: 25px; padding-top: 10px;}
		#last-choice-details{margin-top: 15px;}
		#last-choice-div{margin-bottom: 10px;}
		.choices.active{border: 2px solid #4880c2; background-color: #e4f3fc; color: #474648;}
		.choices.active .save{color: #2f3779;}
		.bold-nova{font-family: 'Proxima_Nova_SemiBold';}
		.money-back{color: #303679; font-size: 27px;}
		.guarantee-pic-div{width: 155px; margin: 35px auto 15px;}
		hr{width: 42px; border: 0; border-top: 1px solid; margin: 15px 0;}
		.basic-div{padding: 0 10px 20px;}
		.gundry-div{background-color: #b9d537; padding: 1px 10px 20px;}
		.gundry-pic-div{width: 275px; margin: 15px auto;}
		.white-hr{border-top: 1px solid #fff;}
		.doc{font-size: 27px; color: #fff;}
		.white{color: #fff;}

		.faqs-div{margin-bottom: 15px; padding: 0 20px 20px;}
		.question-div h3{font-size: 17px; margin: 20px 0 0; color: #4780c2;}
		.faqs-p{margin-top: 30px;}
		.glyco-points{margin-top: 10px;}
		.glyco-points li{list-style-type: square; color: #333; margin-bottom: 10px; margin-left: 25px;}
		.faqs-text{font-size: 17px; margin: 0; vertical-align: 2px;}
		.ingredient-div{width: 340px; margin-right: 80px; margin-top: 7px;}
		.faqs-div b{font-size: 17px; vertical-align: 2px;}
		.ingredient-links{font-size: 12px;}
		.blue-triangle{position: absolute; top: 7px; left: -2px;}
		.answer{margin-top: 10px;}
		.transition{transform: rotate(90deg); transition-timing-function: ease-in;}
		.hidden-answer{display: none;}
		.question-div{padding-left: 14px; position: relative;}
		.hidden-reviews{display: none;}
		.show-reviews{display: block;}
		.wide-hr{width: 275px; margin: auto; margin-bottom: 40px;}
		#bottom-cta{margin-top: 25px;}
		.firstImage{max-width: 230px; margin: auto;}
		#last-div{padding: 0px 20px 20px;}
		.each .bold-nova{font-size: 20px;}
		.save{font-size: 20px;}
		.most{position: absolute; right: 0;}
		.choice1{position: relative;}
		.blue-save{background: #a7cd06; color: #fff; padding: 15px; margin: 20px auto; border-radius: 25px; margin-bottom: 25px;
				   max-width: 320px;}
		.red-under{border-bottom: 4px solid #233a72;}
		.big-white{font-size: 24px; margin-bottom: 12px;}
		.save-info{float: right; width: 70%}
		.tap{color: #233a72;}
		.db{display: block;}
	</style>
	<!-- Google Tag Manager -->
	<script>
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-M266MH');
	</script>
	<!-- End Google Tag Manager -->
</head>
<body>
	<header>
		<div class="container">
			<img src="images/mobile-logo.png" alt="">
		</div>
	</header>
	<div class="package-title">
		<div class="container">
			<p class="choose-package">CHOOSE YOUR PACKAGE</p> 
			<p>Select one of the options</p>	
		</div>
	</div>
	<div class="down-triangle"></div>
	<div class="options-wrapper">
		<div class="options-div">
			<div class="choices choice1 active" id="decision">
			<img src="images/most.png" alt="" class="most">
					<p class="jars bold-nova">6 JARS</p>
					<p class="each"><span class="bold-nova">$42.45</span> per jar</p>
					<p class="total">Retail: $419.70</p>
					<p class="save bold-nova">Now Only: $254.70</p>
				<div class="cta"><a href="http://gundrymd.com/cmd.php?pid=4112f0d3f2884dd68dd47c09f696ce6a&brand=mbg&bn=1&clear=1&mob=1" id="now"><div>BUY NOW</div></a></div>
			</div>
			<div class="choices choice2 active" id="decision1">
					<p class="jars bold-nova">3 JARS</p>
					<p class="each"><span class="bold-nova">$44.95</span> per jar</p>
					<p class="total">Retail: $209.85</p>
					<p class="save bold-nova">Now Only: $134.85</p>
				<div class="cta"><a href="http://gundrymd.com/cmd.php?pid=733f34a2dce647fb94a69ddae981b715&brand=mbg&bn=1&clear=1&mob=1" id="now"><div>BUY NOW</div></a></div>
			</div>
			<div class="choices choice3 active" id="last-choice-div">
					<p class="jars bold-nova">1 JAR</p>
					<p class="total">Retail: $69.95</p>
					<p class="save bold-nova">Now Only: $49.95</p>
				<div class="cta"><a href="http://gundrymd.com/cmd.php?pid=7a47b1aae179487cbcaf09d2d51c557d&brand=mbg&bn=1&clear=1&mob=1" id="now"><div>BUY NOW</div></a></div>
			</div>
			<span class="free-shipping"><span class="bold-nova">FREE SHIPPING</span> ON U.S. ORDERS OVER $60</span>
			<a href="JoinCont180418.php" class="db">
			<div class="blue-save">
				<div class="save-info">
					<p class="big-white"><b>Want to SAVE <span class="red-under">EVEN MORE?</span></b></p>
					<p><span class="tap">TAP HERE</span> to see GUNDRY VIP CLUB pricing</p>
				</div>
				<img src="images/hand-point.png" alt="">
				<div class="clear"></div>
			</div>
		</a>
		</div>
	</div>
	<div class="container">
		<div class="guarantee-pic-div">
		<img src="images/guarantee.png" alt="">
		</div>
		<div class="basic-div">
			<p class="money-back">100% MONEY BACK GUARANTEE</p>
			<hr>
			<p class="work-hard">We work hard to formulate the most advanced products on the market. Our 90-Day Customer Satisfaction Guarantee is designed to give you ample opportunity to experience optimal results from your product, completely risk-free.</p>
		</div>
	
	</div>
	<div class="gundry-div">
		<div class="gundry-pic-div">
			<img src="images/docGun.jpg" alt="">
		</div>
		<div class="basic-div">
			<p class="doc">Dr. Gundry</p>
			<hr class="white-hr">
			<p class="white">Dr. Steven Gundry, MD is one of the world's most celebrated pediatric heart surgeons, and the author of the best-selling book "Dr. Gundry's Diet Evolution." He is the director of the International Heart &amp; Lung Institute in Palm Springs, CA, and the founder / director of the Center for Restorative Medicine in Palm Springs and Santa Barbara.</p>
		</div>
	</div>
	<div class="basic-div faqs-div">
		<p class="money-back faqs-p">FAQs</p>
		<hr>
		<div class="question-div">
			<h3><img src="images/blue-triangle.png" alt="" class="blue-triangle"> How many bottles should I order?</h3>
			<p class="answer hidden-answer">The most popular order for new customers is the 3-bottle package. However, longtime customers usually opt for the 6-bottle option, which gives you even greater opportunities to save.</p>
		</div>		
		<div class="question-div">
			<h3><img src="images/blue-triangle.png" alt="" class="blue-triangle"> What are the ingredients in Gundry MD Total Restore?</h3>
			<div class="hidden-answer">
				<img src="images/restore-supp.png" class="answer" />
			</div>
		</div>
		<div class="question-div">
			<h3><img src="images/blue-triangle.png" alt="" class="blue-triangle"> How Safe Is Gundry MD Total Restore? Are There Any Side Effects?</h3>
			<p class="answer hidden-answer">Gundry MD Total Restore was formulated for maximum all-natural purity. It should be effective and safe for daily use for the vast majority of people. <br>Of course, I recommend consulting with your physician before using any supplement, including Gundry MD Total Restore.</p>
		</div>
		<div class="question-div">
			<h3><img src="images/blue-triangle.png" alt="" class="blue-triangle"> How do I use Gundry MD Total Restore?</h3>
			<div class="hidden-answer">
				<p class="answer">Gundry MD Total Restore is formulated as a safe, easy-to-swallow capsule. For maximum effectiveness, I recommend taking three capsules once per day, with your biggest meal of the day. You can also take 1 capsule three times a day if you prefer.</p>
			</div>
		</div>
		<div class="question-div">
			<h3><img src="images/blue-triangle.png" alt="" class="blue-triangle"> When can I expect results?</h3>
			<p class="answer hidden-answer">Many users report a distinct improvement in digestion, energy, and overall health within just a few days of first taking Gundry MD Total Restore. However, for many users, the most dramatic results were first noticed over the course of 2-3 weeks. Please use as directed.</p>
		</div>
		<div class="question-div">
			<h3><img src="images/blue-triangle.png" alt="" class="blue-triangle"> What if Total Restore doesn't work for me? Is there a guarantee?</h3>
			<div class="hidden-answer">
				<p class="answer">I'm confident Gundry MD Total Restore will offer you powerful support against the effects of "leaky gut." But I also understand no two people's systems work the same way, so a small number of people might find Total Restore does not give them the benefits they need.<br>That's why each bottle of Total Restore comes with my personal 90-day guarantee. If, for any reason, Gundry MD Total Restore does not offer you comprehensive anti-endotoxin health support, just return what you haven't used within that time for a full, no-questions-asked refund.</p>
			</div>
		</div>
	</div>
	<hr class="wide-hr">
	<div class="basic-div" id="last-div">
		<div class="firstImage">
		<img src="images/Total-Restore-mbg.png"/>
		</div>
		<p class="money-back">GUNDRY MD</p>
		<p class="money-back">TOTAL RESTORE</p>
		<hr>
		<p>This formula is designed to neutralize the effects of "leaky gut", when microscopic endotoxins damage your digestion and overall health. I’ve combined 16 dynamically effective all-natural ingredients to protect your body from endotoxin overload and promote full-body wellness.</p>
		<div class="cta" id="bottom-cta"><a href="#"><div>BUY NOW</div></a></div>
	</div>
	<footer>
		<div class="container">
			<p>†These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure or prevent any disease. Use only as directed. Consult your healthcare provider before using supplements or providing supplements to children under the age of 18. The information provided herein is intended for your general knowledge only and is not intended to be, nor is it, medical advice or a substitute for medical advice. If you have or suspect you have, a specific medical condition or disease, please consult your healthcare provider.</p>
			<p>&copy; Gundry MD <script language="JavaScript" type="text/javascript">
			    now = new Date
			    theYear=now.getYear()
			    if (theYear < 1900)
			    theYear=theYear+1900
			    document.write(theYear)
			</script>. All Rights Reserved </p>
			<p><a href="http://gundrymd.com/terms/" target="_blank">Terms &amp; Conditions</a> | <a href="http://gundrymd.com/privacy/" target="_blank">Privacy Policy</a></p>
			<p>9465 Wilshire Boulevard, Suite 300 Beverly Hills, California, 90212</p>
		</div>
	</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {


	// slow scroll
		$("#bottom-cta").click(function(e){
		    e.preventDefault();
		    $('html, body').animate({
		     scrollTop: $(".down-triangle").offset().top
		    }, 1300);
	   });

		   $("#readMore").click(function(){ 
		   $(".hidden-reviews").slideToggle( 1500, function() {
		   $(".hidden-reviews").toggleClass("show-reviews");

		   		})
		   });

		   $(".question-div").click(function(){
		   		$(this).find(".blue-triangle").toggleClass("transition");
		   		$(this).find(".hidden-answer").slideToggle( 1200, function() {
		   		$(this).find(".hidden-answer").toggleClass("show-reviews");
			})
		});
	})
</script>
</body>
</html>