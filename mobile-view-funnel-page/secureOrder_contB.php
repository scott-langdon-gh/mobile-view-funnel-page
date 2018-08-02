<?php
	$tablet_browser = 0;
	$mobile_browser = 0;
	$httpUserAgent = empty($_SERVER['HTTP_USER_AGENT']) ? "" : $_SERVER['HTTP_USER_AGENT'];

	if (preg_match('/(tablet|ipad|playbook)|(android(?!.*(mobi|opera mini)))/i', strtolower($httpUserAgent))) {
		$tablet_browser++;
	}

	if (preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|android|iemobile)/i', strtolower($httpUserAgent))) {
		$mobile_browser++;
	}

	if ((strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') > 0) or ((isset($_SERVER['HTTP_X_WAP_PROFILE']) or isset($_SERVER['HTTP_PROFILE'])))) {
		$mobile_browser++;
	}

	$mobile_ua = strtolower(substr($httpUserAgent, 0, 4));
	$mobile_agents = array(
		'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',
		'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',
		'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',
		'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',
		'newt','noki','palm','pana','pant','phil','play','port','prox',
		'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',
		'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',
		'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',
		'wapr','webc','winw','winw','xda ','xda-');

	if (in_array($mobile_ua,$mobile_agents)) {
		$mobile_browser++;
	}

	if (strpos(strtolower($httpUserAgent),'opera mini') > 0) {
		$mobile_browser++;
		//Check for tablets on opera mini alternative headers
		$stock_ua = strtolower(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA'])?$_SERVER['HTTP_X_OPERAMINI_PHONE_UA']:(isset($_SERVER['HTTP_DEVICE_STOCK_UA'])?$_SERVER['HTTP_DEVICE_STOCK_UA']:''));
		if (preg_match('/(tablet|ipad|playbook)|(android(?!.*mobile))/i', $stock_ua)) {
			$tablet_browser++;
		}
	}

	if ($tablet_browser > 0) {
		// do something for tablet devices
	}
	else if ($mobile_browser > 0) {
		// do something for mobile devices
		header("Location: secureOrder_m_cont.php");
	}
	else {
		// do something for everything else - Desktop or unknown
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gundry MD Total Restore Order Page</title>
	<link rel="stylesheet" href="css/new-style1.css">
	<style>
		.backorder{margin: 0; margin-bottom: -35px; padding: 20px; border: 1px solid #e3e3e3; background-color: #fff;}
		.red{color: #cc0000;}
		.new-lists{margin-left: 40px; margin-top: -20px; width: 400px;}
		.list-ul li{list-style-image: url("images/check.png"); width: 440px !important; 
					margin-top: 5px !important; line-height: 1.7 !important; margin-left: -15px !important;}
		.list-ul.second-list li:first-child{margin-top: 0 !important;}
		#video-title{color: #27377a; font-size: 30px; margin: 35px 0 20px;}
		.title{margin-top: 50px;}
		.results{font-size: 14px; text-align: left; margin-left: 50px; padding-top: 10px;}
		.jar-grey{float: right; width: 95px; background-color: #f2f2f2; margin-top: 13px;}
		.jar-grey p{padding: 5px 0; font-size: 20px;}
		.jar3{float: right; width: 105px; background-color: #f2f2f2;}
		.jar3 p{padding: 10px 0; font-size: 25px;}
		.bottle-pic-div{text-align: center; margin: 10px 0 15px;}
		.grey1{margin-left: 10px;}
		.grey2{margin-right: 10px;}
		.jar-div{width: 334px; text-align: center; margin: 10px auto 5px;}
		.details-div{text-align: center;}
		.reg-price{font-size: 20px; margin-bottom: 5px; margin-top: 10px;}
		.inst-sav{font-size: 21px; font-family: 'Proxima_Nova_SemiBold'; margin: 0;}
		.memb-sav{color: #d00;}
		.details-div hr{width: 45px; margin: 15px auto 8px;}
		.big-price{margin-top: 0; font-size: 40px; font-family: 'Proxima_Nova_SemiBold'; margin-bottom: 10px;}
		.truck-pic{width: 25px;}
		.ship-cost{margin-left: 10px; vertical-align: 4px; font-family: 'Proxima_Nova_SemiBold'; color: #4880c2; text-align: center;}
		.addToCart{width: 280px; text-align: center; border: 1px solid #e47925; background: #dfa15a;
				   color: #fff; font-size: 25px; border-radius: 2px; box-shadow: 0px 1px 3px #666666; 
				   margin: auto; padding: 7px; background-image: linear-gradient(to  bottom, #dfa15a, #ed8924);}
		.addToCart:hover{box-shadow: 0px 1px 3px #666666; background: #e47825; background-image: linear-gradient(to bottom, #e47825, #ba5b12);}
		.choice{height: 100%; width: 350px; margin-top: 35px;}
		.ship-div{text-align: center; margin: 10px 0;}
		.title h1{width: 100%; font-weight: normal;}
		.jar{border: 2px solid #fff;}
		.jar:hover{cursor: pointer;}
		.jar.active{background-color: #e4f3fc; border: 2px solid #4880c2;}
		#intro{color: #27377a; font-weight: 100; margin-top: 0; padding-top: 70px; font-size:36px; line-height: 1.4; 
			   margin-bottom: 0;}
		.title{margin-top: 0;}
		.checking-text{text-align: center; font-size: 13px; letter-spacing: 0; max-width: 365px; margin: 0 auto 12px;}
		.subscribe-div{padding: 15px 5px 15px 15px; font-size: 18px; font-weight: 900;position: relative; width: 260px;
					   margin: auto; border-radius: 10px; cursor: pointer; border: 1px solid #b4d2e6; margin-top: 14px;
					   -webkit-box-shadow: 2px 2px 5px 0px rgba(220,220,221,1);
					   -moz-box-shadow: 2px 2px 5px 0px rgba(220,220,221,1);
					   box-shadow: 2px 2px 5px 0px rgba(220,220,221,1);
					   background: rgba(201,228,243,1);
						background: -moz-linear-gradient(top, rgba(201,228,243,1) 0%, rgba(209,232,245,1) 22%, rgba(215,234,245,1) 39%, rgba(203,227,241,1) 69%, rgba(164,204,227,1) 100%);
						background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(201,228,243,1)), color-stop(22%, rgba(209,232,245,1)), color-stop(39%, rgba(215,234,245,1)), color-stop(69%, rgba(203,227,241,1)), color-stop(100%, rgba(164,204,227,1)));
						background: -webkit-linear-gradient(top, rgba(201,228,243,1) 0%, rgba(209,232,245,1) 22%, rgba(215,234,245,1) 39%, rgba(203,227,241,1) 69%, rgba(164,204,227,1) 100%);
						background: -o-linear-gradient(top, rgba(201,228,243,1) 0%, rgba(209,232,245,1) 22%, rgba(215,234,245,1) 39%, rgba(203,227,241,1) 69%, rgba(164,204,227,1) 100%);
						background: -ms-linear-gradient(top, rgba(201,228,243,1) 0%, rgba(209,232,245,1) 22%, rgba(215,234,245,1) 39%, rgba(203,227,241,1) 69%, rgba(164,204,227,1) 100%);
						background: linear-gradient(to bottom, rgba(201,228,243,1) 0%, rgba(209,232,245,1) 22%, rgba(215,234,245,1) 39%, rgba(203,227,241,1) 69%, rgba(164,204,227,1) 100%);
						filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c9e4f3', endColorstr='#a4cce3', GradientType=0 );}
    	.sub-save{color: #27377a; font-size: 22px; font-family: 'Proxima_Nova_SemiBold';}
    	.checkbox{border: 1px solid #b7b7b7; border-radius: 5px; background-color: #fff; width: 23px; height: 23px; 
    			  display: inline-block; vertical-align: -6px; margin-right: 5px; position: relative; cursor: pointer;}
    	.red-check{position: absolute; left: -7px; top: -2px; display: none;}
    	#inputy, #book-input{position: absolute; z-index: 100; opacity: 0; height: 30px; width: 30px; left: 0; 
    						top: -6px; cursor: pointer;}
    	.monthly{font-size: 26px; color: #616161;}
    	.terms-link{color: #4880c2; font-family: 'Proxima_Nova_SemiBold';}
    	.center{text-align: center; margin: 5px 0 0;}
    	.optional-title{background-color: #27377a; color: #fff; text-align: center;}
    	.optional-text{font-family: 'Proxima_Nova_SemiBold'; margin: 0; padding: 10px 0 0; font-size: 18px;}
    	.sub-ten-title{font-family: 'Proxima_Nova_SemiBold'; margin: 0; font-size: 24px; padding-bottom: 10px;}
    	.blue-triangle {width: 0; height: 0; border-left: 28px solid transparent; border-right: 28px solid transparent;
						border-top: 20px solid #27377a; margin: auto;}
		.sign-up{color: #474648; margin: 10px 0;}
		.save-ten{color: #d72d2a; font-family: 'Proxima_Nova_SemiBold';}
		.sub-text-div{text-align: left; display: inline;}
		.top-list li{font-family: 'Proxima_Nova_SemiBold'; background: url(images/red-check.png) no-repeat;
					 margin-bottom: 20px;  color: #474648; font-size: 20px; background-position: -10px -3px;
					 padding-left: 30px;}
		.top-list{margin: 28px 0 38px; margin-left: -13px;}
		.choose-title{padding: 15px 0;}
		.second-box{margin-top: 10px;}
		.list-ul{margin-top: 30px;}
		.subInfo{margin-top: -10px; font-weight: bold;}
		.oo-player-container .oo-state-screen .oo-fading-underlay{
			background-color: transparent !important;}
		.oo-player-container .oo-start-screen .oo-start-screen-linear-gradient{
			background: transparent !important;}
		.red-title{color: #c22d19 !important; font-family: 'Proxima_Nova_SemiBold'; font-size: 23px !important;
				   width: 530px !important; margin: 0; padding-bottom: 10px;}
		.book-content ul li{width: 90%; margin-top: 10px; background: url("images/red-check.png") no-repeat; 
							padding-left: 33px; background-position: -9px 0px;}
		.book-content ul{padding-left: 0;}
		.buybook-div{width: 215px; margin: auto; padding: 15px; border-radius: 5px; padding-bottom: 10px}
		.add-book{font-size: 22px !important;}
		.over-div{margin: 5px auto 0; float: right; width: 340px;}
		.stars-div{float: right; text-align: left; padding-top: 20px;}
		.mar0{margin: 0;}
		.sidebar-div{text-align: center;}
		.bold{font-family: 'Proxima_Nova_SemiBold';}
		.mon-back{font-size: 17px; color: #23376e; font-family: 'Proxima_Nova_SemiBold';}
		.sidep{line-height: 150%; font-size: 14px;}
		.font19{font-size: 19px; margin-top: 0;}
		.side-hr{text-align: left; width: 30px; margin: 0; color: #22376e; border-color: #22376e; border-bottom: none;
    			 margin-bottom: 15px;}
    	.text-left{text-align: left;}
    	.star-down{margin-bottom: -2px;}
    	.marleft1{margin-left: 1px;}
    	.marleft3{margin-left: 3px;}
    	.review-title{color: #23376e; font-size: 20px; font-family: 'Proxima_Nova_SemiBold';}
    	.customer-name{font-size: 14px; vertical-align: 4px; margin-left: 9px;}
    	.reviews-link{vertical-align: 4px; margin-left: 10px;}
    	.small-garan-div{width: 320px; text-align: center;}
    	#doctorWrap{z-index: 999; margin-top: 40px; position: relative;}
    	.light-blue{background-color: #d9ecf7; width: 400px; padding: 30px 0 10px; margin: -15px 0 20px -25px;}
    	.firstImage{height: 302px; width: 351px;}
    	#main{height: 845px; padding-bottom: 50px;}
    	.faqs.bottomFaq{border-bottom: 0 !important;}
		.faq{width: 960px;}
		.font14{font-size: 14px;}
		#book-image{width: 110px; margin-right: 10px;}
		.reg-hr{float:left; width: 45px;}
		.second-list{float: right; width: 450px;}
		.choice3{padding-bottom: 22px; background-color: #eff9fe;}
		.book-content{float: right; width: 120px; margin-top: 10px; margin-right: 40px;}
		.book-content p{margin: 0; margin-top: 5px;}
		.book-img{width: 100px; margin-left: 20px; margin-top: 5px;}
		.choice1{margin-right: -5px; margin-left: 0;}
		.mid-choice{z-index: 99; float: left; padding-bottom: 10px;}
		.smaller-title{font-size: 22px; padding: 0;}
		.option-title{font-size: 17px; color: #fff; margin: 0;}
		.yes-text{float: right; width: 210px; margin: 0; padding-right: 10px;}
		.hover-checking{position: absolute; background: #fff; width: 212px; padding: 20px 15px 10px;
					    border-radius: 5px; right: -230px; top: -46px; border: 1px solid; display: none;}
		.garan-content{float: right; width: 740px; padding-top: 20px;}
		.blue-big-div{background-color: #d9ecf7; padding: 25px 0 20px; position: relative; z-index: 2; 
					  margin-top: -40px;}
		.garan-h3{font-size: 27px; margin: 0; color: #27377a;}
		.garan-img{height: 140px;}
		.martop20{margin-top: 20px;}
		#blue-arrow{position: absolute; left: 320px; top: 350px; z-index: 9;}
		.choice-wrapper{position: relative; width: 765px; margin-left: auto; margin-right: auto;}
		.upgrade-title{font-size: 34px; font-family: 'Proxima_Nova_SemiBold'; margin: 0; color: #fff;}
		.nopacity{opacity: 0;}
		.memb-sav{font-size: 21px; font-family: 'Proxima_Nova_SemiBold'; margin: 0; color: #d00; display: none;}
		.noshow{opacity: 0;}
		.bottom-guarantee{position: absolute; top: 30px; right: -85px; width: 150px;}
		.productImage{position: relative;}
	</style>
	<!--[if lt IE 9]>
	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
</head>
<body>
<header>
	<div class="container">
		<div class="topFooter">
			<br>
			<img src="images/Logo.png"/>
		</div>
		<div class="phone">
			<div class="logoPhone">
				<img src="images/phone.png" id="phoneImage"/>
			</div>
			<div class="number">
				(800) 852 - 0477
			</div>
		</div>
	</div>
</header>
<div class="clear"></div>
<div id="main">
	<div class="container">
		<h1 id="intro">Attack Leaky Gut at its Source with Gundry MD Total Restore</h1>
		<hr class="reg-hr">
			<ul class="list-ul second-list">
				<li>Relieves uncomfortable and embarrassing digestive worries</li>
				<li>Soothes achy muscles and joints</li>
			</ul>
		 	<ul class="list-ul">
				<li>Naturally elevates energy levels without<br>any “crash”</li>
				<li>Calms cravings and gives you incredible control over food</li>
			</ul>
			<div class="clear"></div>
	    <div class="choice-wrapper">
	    <img src="images/blue-arrow.png" alt="" id="blue-arrow">
		<div class="choice choice3">
			<div class="optional-title choose-title">
			<p class="upgrade-title">UPGRADE <br>TO VIP</p>
			</div>
			<div class="blue-triangle"></div>
			<div class="list-div">
				<ul class="top-list">
					<li>Instant Member Savings</li>
					<li>Convenient Monthly Refill</li>
					<li>Exclusive Discounts</li>
					<li>Free Membership</li>
				</ul>
			</div>
				<div class="subscribe-div" id="main-subscribe">
					<div class="sub-text-div">
					<div class="checkbox"><input type="checkbox" id="inputy" name="inputy"><img src="images/red-check.png" class="red-check" id="sub-check" alt=""></div><p class="yes-text"> <span class="sub-save">YES!</span> I want to be a GUNDRY VIP Member and <span class="save-ten">SAVE TODAY</span>!</p>
			<div class="hover-checking">
			<p class="checking-text">By checking the "Subscribe" box above. You agree to receive "Total Restore" once per month and that your credit card will be charged the amount matching your selected package size, billed to your card as "Gundry MD" You can stop shipments anytime by calling customer service at 1-800-852-0477, from 6am to 6pm PST <a href="new-terms.php" target="_blank" onclick="return !window.open(this.href, 'NUCIFIC', 'toolbar=no, scrollbars=no, resizable=no, status=no, menubar=no, location=no, top=300, left=300, width=400, height=400')" class="terms-link">(All terms and conditions apply).</a></p>
			</div>
					<div class="clear"></div>
					</div>
				</div>
			</div>
		<div class="choice mid-choice">
			<div class="optional-title choose-title">
				<p class="sub-ten-title">CHOOSE YOUR PACKAGE</p>
			</div>
			<div class="blue-triangle"></div>
			<div class="jar-div">
				<div class="jar-grey grey1 jar">
					<p>1 JAR</p>
				</div>
				<div class="jar3 jar active">
					<p>3 JARS</p>
				</div>
				<div class="jar-grey grey2 jar">
					<p>6 JARS</p>
				</div>
				<div class="clear"></div>
			</div>
				<div class="details-div">
					<p class="reg-price">Regular Price: <s><span class="old-price">$209.85</span></s></p>
					<p class="inst-sav">Instant Savings: <span class="sav-price">$75.00</span></p>
					<p class="memb-sav">Member Savings: <span class="memb-price">$12.90</span></p>
					<hr>
					<p class="big-price">$134.85</p>
					<p class="subInfo">(This is a one time payment)</p>
				</div>
				<a id="ctaLink" href="http://gundrymd.com/cmd.php?pid=733f34a2dce647fb94a69ddae981b715&brand=mbg&bn=1&clear=1" onclick="_gaq.push(['_link', this.href]); return false;">
					<div class="addToCart">Buy Now</div>
				</a>
			<div class="ship-div">
			<img src="images/truck.png" alt="" class="truck-pic"><span class="ship-cost">FREE SHIPPING</span>
			</div>
			</div>
		<div class="clear"></div>
		</div>
	</div>
</div>
<div class="blue-big-div">
	<div class="container">
		<div class="garan-content">
			<h3 class="garan-h3">100% MONEY BACK GUARANTEE</h3>
			<hr class="reg-hr">
			<p class="martop20">We work hard to formulate the most advanced products on the market. Our 90-Day Customer Satisfaction Guarantee is designed to give you ample opportunity to experience optimal results from your product, completely risk-free.</p>
		</div>
		<img src="images/guarantee.png" alt="" class="garan-img">
	</div>
</div>
	<div class="container">
				
		<div class="faq">
			<p>FAQ</p>
			<hr class="faqHr">
			<div class="clear"></div>
			<div class="faqs">
				How many bottles should I order?<br>
				<span class="faqInformation">The most popular order for new customers is the 3-bottle package. However, longtime customers usually opt for the 6-bottle option, which gives you even greater opportunities to save.
				</span>
			</div>
			<div class="faqs">
				What are the ingredients in Gundry MD Total Restore?<br>
				<span class="faqInformation"><div align="center"><img src="images/restore-supp.png" width="400px" /></div></span>
			</div>
            <div class="faqs">
				How Safe Is Gundry MD Total Restore? Are There Any Side Effects?<br>
				<span class="faqInformation">
                Gundry MD Total Restore was formulated for maximum all-natural purity. It should be effective and safe for daily use for the vast majority of people.<br>Of course, I recommend consulting with your physician before using any supplement, including Gundry MD Total Restore.</span>
			</div>
            <div class="faqs">
				How do I use Gundry MD Total Restore?<br>
				<span class="faqInformation">Gundry MD Total Restore is formulated as a safe, easy-to-swallow capsule. For maximum effectiveness, I recommend taking three capsules once per day, with your biggest meal of the day. You can also take 1 capsule three times a day if you prefer.</span>
			</div>
            <div class="faqs">
				When can I expect results?<br>
				<span class="faqInformation">Many users report a distinct improvement in digestion, energy, and overall health within just a few days of first taking Gundry MD Total Restore. However, for many users, the most dramatic results were first noticed over the course of 2-3 weeks. Please use as directed.</span>
			</div>
			<div class="faqs bottomFaq">
				What if Total Restore doesn't work for me? Is there a guarantee?<br>
				<span class="faqInformation">I'm confident Gundry MD Total Restore will offer you powerful support against the effects of "leaky gut." But I also understand no two people's systems work the same way, so a small number of people might find Total Restore does not give them the benefits they need.<br>That's why each bottle of Total Restore comes with my personal 90-day guarantee. If, for any reason, Gundry MD Total Restore does not offer you comprehensive anti-endotoxin health support, just return what you haven't used within that time for a full, no-questions-asked refund.</span>
			</div>
			<div class="clear"></div>
</div>
</div>
<div class="clear"></div>
	<div id="doctorWrap">
	<div class="container">
		<div class="info">
			<p> Dr. <span id="space">Gundry</span></p>
			<hr>
			<br>
			<p id="docInfo">Dr. Steven Gundry, MD is one of the world's most celebrated pediatric heart surgeons, and the author of the best-selling book "Dr. Gundry's Diet Evolution." He is the director of the International Heart &amp; Lung Institute in Palm Springs, CA, and the founder / director of the Center for Restorative Medicine in Palm Springs and Santa Barbara.
</p>
		</div>
		<img src="images/docGun.jpg" id="docGun"/>
	</div>
</div>
<div class="container">
			<div class="product">
				<div class="insideContainer">
					<div class="productImage">
						<img src="images/guarantee.png" class="bottom-guarantee" alt="">
						<img src="images/Total-Restore-sm.png"/>
					</div>
					<div class="clear"></div>

					<div class="productInfo">
						<span class="imageTitle">GUNDRY MD TOTAL RESTORE</span>
						<div class="clear"></div>

						<hr class="imageHr">
						<div class="clear"></div>
						
						<br>
						<span class="imageInfo">This formula is designed to neutralize the effects of "leaky gut", when microscopic endotoxins damage your digestion and overall health. I’ve combined 16 dynamically effective all-natural ingredients to protect your body from endotoxin overload and promote full-body wellness.</span><br>
						<div class="button1">
							<a href="#" id="now1"> BUY NOW </a>
						</div>
						<div class="clear"></div>

					</div>
					<div class="clear"></div>

				</div>
			</div>
		</div>
<div class="clear"></div>
<footer>
	<div class="container">
		<div class="information">
			†These statements have not been evaluated by the Food and Drug Administration. This product is not intended to diagnose, treat, cure or prevent any disease. Use only as directed. Consult your healthcare provider before using supplements or providing supplements to children under the age of 18. The information provided herein is intended for your general knowledge only and is not intended to be, nor is it, medical advice or a substitute for medical advice. If you have or suspect you have, a specific medical condition or disease, please consult your healthcare provider.
		</div>
		<div class="copyright">
			&copy; Gundry MD <script language="JavaScript" type="text/javascript">
    now = new Date
    theYear=now.getYear()
    if (theYear < 1900)
    theYear=theYear+1900
    document.write(theYear)
</script>. All Rights Reserved  <a href="http://gundrymd.com/terms/" class="terms"><span class="termStyle">Terms &amp; Conditions</span></a>  |  <a href="http://gundrymd.com/privacy/" class="terms"><span class="termStyle">Privacy Policy</span></a> |  9465 Wilshire Boulevard, Suite 300 Beverly Hills, California, 90212
		</div>
	</div>
</footer>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
	$(document).ready(function() {

			// variable functions
	var six_jar_sub = function() {
		    $("a#ctaLink").attr("href", "http://gundrymd.com/cmd.php?pid=944bc886e317471a80ea388dff880b3c&brand=mbg&bn=1&clear=1");
	        $(".old-price").html("$419.70");
	        $(".sav-price").html("$192.00");
	        $(".memb-price").html("$27.00");
	        $(".big-price").html("$227.70 <span class='monthly'>per month</span>");
	        $(".ship-cost").html("FREE SHIPPING");
	        $(".cta").html("Buy Now");
	}

	var three_jar_sub = function() {
		    $("a#ctaLink").attr("href", "http://gundrymd.com/cmd.php?pid=f50f9510fa96416c895e962f0c4ee708&brand=mbg&bn=1&clear=1");
	    	$(".old-price").html("$209.85");
	    	$(".sav-price").html("$90.00");
	    	$(".memb-price").html("$15.00");
	    	$(".big-price").html("$119.85 <span class='monthly'>per month</span>");
	    	$(".ship-cost").html("FREE SHIPPING");
	    	$(".cta").html("Buy Now");
	}

	var one_jar_sub = function() {
	    	$("a#ctaLink").attr("href", "http://gundrymd.com/cmd.php?pid=0a19e007a1e249f5a92468df6b70f2b7&brand=mbg&bn=1&clear=1");
	    	$(".old-price").html("$69.95");
	    	$(".sav-price").html("$28.00");
	    	$(".memb-price").html("$8.00");
	    	$(".big-price").html("$41.95 <span class='monthly'>per month</span>");
	    	$(".ship-cost").html("FREE SHIPPING");
	    	$(".cta").html("Buy Now");
	}

	var six_jar_reg = function() {
			$("a#ctaLink").attr("href", "http://gundrymd.com/cmd.php?pid=4112f0d3f2884dd68dd47c09f696ce6a&brand=mbg&bn=1&clear=1");
			$(".subInfo").html("(This is a one time payment)")
	    	$(".old-price").html("$419.70");
	    	$(".sav-price").html("$165.00");
	    	$(".big-price").html("$254.70");
	    	$(".ship-cost").html("FREE SHIPPING");
	    	$(".cta").html("Buy Now");
	}

	var three_jar_reg = function() {
			$("a#ctaLink").attr("href", "http://gundrymd.com/cmd.php?pid=733f34a2dce647fb94a69ddae981b715&brand=mbg&bn=1&clear=1");
			$(".subInfo").html("(This is a one time payment)")
	    	$(".old-price").html("$209.85");
	    	$(".sav-price").html("$75.00");
	    	$(".big-price").html("$134.85");
	    	$(".ship-cost").html("FREE SHIPPING");
	    	$(".cta").html("Buy Now");
	}

	var one_jar_reg = function() {
			$("a#ctaLink").attr("href", "http://gundrymd.com/cmd.php?pid=7a47b1aae179487cbcaf09d2d51c557d&brand=mbg&bn=1&clear=1");
			$(".subInfo").html("(This is a one time payment)")
	    	$(".old-price").html("$69.95");
	    	$(".sav-price").html("$20.00");
	    	$(".big-price").html("$49.95");
	    	$(".ship-cost").html("+$4.95 SHIPPING");
	    	$(".cta").html("Buy Now");
	}



	// Adding the class of Active
	$('.jar').click(function() {
		if(!$(this).hasClass("active")) {
			$(".jar").removeClass("active");
			$(this).addClass("active");
		}
		if($(".jar-grey.grey2.jar").hasClass("active")){
			if ($('input[name=inputy]').is(':checked')) {
				six_jar_sub();
			}
			else {
				six_jar_reg();
			}
		}
		if($(".jar3.jar").hasClass("active")){
			if ($('input[name=inputy]').is(':checked')) {
				three_jar_sub();
			}
			else {
				three_jar_reg();
			}
		}
		if($(".jar-grey.grey1.jar").hasClass("active")){
			if ($('input[name=inputy]').is(':checked')) {
				one_jar_sub();
			}
			else {
				one_jar_reg();
			}
		}

	})


	
	
	function SubscribeOn() {	  
		$('#inputy').prop('checked', true).triggerHandler('click')

		$('.red-check').show()
		$(".memb-sav").show();
		$(".subInfo").hide();

		if($(".jar-grey.grey2.jar").hasClass("active")){
			six_jar_sub(); 
		}

		if($(".jar3.jar").hasClass("active")){
			three_jar_sub();
		}

		if($(".jar-grey.grey1.jar").hasClass("active")){
			one_jar_sub();
		}
	}

	function SubscribeOff() {	
		$('#inputy').prop('checked', false).triggerHandler('click')  

		$('.red-check').hide()
		$(".memb-sav").hide();
		$(".subInfo").show();

		if($(".jar-grey.grey2.jar").hasClass("active")){
			six_jar_reg();
		}

		if($(".jar3.jar").hasClass("active")){
			three_jar_reg();
		}

		if($(".jar-grey.grey1.jar").hasClass("active")){
			one_jar_reg();
		}
	}


	$('.subscribe-div').click(function() { 
		return (this.tog = !this.tog) ? SubscribeOn() : SubscribeOff();
	})

	// terms and conditions hover
	$('#main-subscribe, .hover-checking').hover(
  		function () {
    		$('.hover-checking').show();
  	}, 
  		function () {
    		$(".hover-checking").hide();
 	 }
	);


	// slow scroll
		$(".button1").click(function(e){
		    e.preventDefault();
		    $('html, body').animate({
		     scrollTop: $(".list-ul").offset().top
		    }, 1000);
	   });
	})


	window.onbeforeunload = function() {
         //unchecked your check box here.  
      $("input[type='checkbox']").prop('checked', false)
 };


</script>
</body>
</html>