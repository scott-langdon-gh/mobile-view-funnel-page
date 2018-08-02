<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Total Restore | Secure Order Mobile</title>
	<link rel="stylesheet" href="css/secureOrder_m180731A.css">
</head>
<body>
	<div class="header-title" id="header-title">  
		<img class="gundry-md-logo" src="./images/GundryMD-Logo.png">
	</div>	
	<div class="content">
		<div class="special-internet-onl">
			<p>Special Internet-Only Offer</p>
			<p>Gundry MD Total Restore</p>
		</div>
		<div class="total-restore">
			<img class="total-restore-mockup" src="./images/TotalRestoreMockup.png">
		</div>
		<div class="vip-buttons">
			<div style="display: inline-block;">
				<div class="non-vip-link" href="">
					<div class="non-vip-button"><span class="non-vip-text">Non-VIP</span></div>
				</div>
			</div>
			<div style="width: 10%; display: inline-block;"></div>
			<div style="display: inline-block;">
				<div class="vip-link" href="">
					<div class="vip-button"><span class="vip-text">VIP Club</span></div>
				</div>
			</div>
		</div>
		<div style="margin: auto; width: 82%; ">
			<p>Quantity:</p>
		</div>
		<div class="quantity-buttons">
			<div class="unselected-quantity-button"><span class="quanity-number">1</span></div>
			<div class="selected-button"><span class="quanity-number">3</span></div>
			<div class="unselected-quantity-button"><span class="quanity-number">6</span></div>
		</div>
		<div class="per-jar" style="margin-top: 10px;">
			<span class="per-jar-copy">$44.95 per Jar</span>
		</div>
		<div class="retail-price">
			<span class="retail-price-copy">Retail: $209.85</span>
		</div>
		<div class="now-price">
			<span class="now-price-text">Now: $134.85</span>
		</div>
		<div class="free-shipping">
			<span class="free-shipping-text"><span>+</span> Free Shipping</span>
		</div>
		<div class="buy-now">
			<a class="buy-now-link" href="">
				<div class="buy-now-button"><span class="buy-now-text">Buy Now</span></div>
			</a>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		    $(".non-vip-link").click(function(){
		        // 
		    });
		    $(".vip-link").click(function(){
		        // take off styling for non-vip 
		        // add styling for non-selected 
		        // add styling for selected 
		    });

		});
	</script>
	<script>
		window.onscroll = function() {
			fixedHeader();
		};

		var header = document.getElementById("header-title");
		var sticky = header.offsetTop;

		function fixedHeader() {
		  if (window.pageYOffset > sticky) {
		    header.classList.add("sticky");
		  } else {
		    header.classList.remove("sticky");
		  }
		}
	</script>
</body>
</html>








<!-- <div id="tabs-container">
  <div class="tabs-menu">
    <div><a href="#quantity-1">1</a></div>
    <div class="current"><a href="#quantity-3">3</a></div>
    <div><a href="#quantity-6">6</a></div>
  </div>
  <div class="tab">
    <div id="quantity-1" class="tab-content">Quantity 1</div>
    <div id="quantity-3" class="tab-content">Quantity 3</div>
    <div id="quantity-6" class="tab-content">Quantity 6</div>
  </div>
</div>



.current a {
  color:red;
}

.tab-content {
  display:none;
}

#quantity-3 {
  display:block;
}



$(document).ready(function(){
  $('.tabs-menu a').click(function(event) {
    event.preventDefault();
    
    // Toggle active class on tab buttons
    $(this).parent().addClass("current");
    $(this).parent().siblings().removeClass("current");
   
    // display only active tab content
    activeTab = $(this).attr("href"); // sets the active tab
    $('.tab-content').not(activeTab).css("display","none");	 //sets all non active tabs to display none
    $(activeTab).fadeIn(); // fades in active tab
    
  });
  
}); -->










