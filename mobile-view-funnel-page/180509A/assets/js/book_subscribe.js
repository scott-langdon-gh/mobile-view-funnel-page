
$(document).ready(function() {

	// variable functions
  var six_jar_sub = function() {
        $("a#ctaLink").attr("href", "http://gundrymd.com/cmd.php?pid=05cb71303d204c7a8ad46dd848a637cf&bn=1&clear=1");
          $(".old-price").html("$419.70");
          $(".sav-price").html("$189.75");
          $(".memb-price").html("$24.75");
          $(".big-price").html("$229.95 <span class='monthly'>per month</span>");
          $(".ship-cost").html("FREE SHIPPING");
          $(".cta").html("Buy Now");
  }

  var three_jar_sub = function() {
        $("a#ctaLink").attr("href", "http://gundrymd.com/cmd.php?pid=2fa570366f734811822ecebd7d2d012b&bn=1&clear=1");
        $(".old-price").html("$209.85");
        $(".sav-price").html("$87.90");
        $(".memb-price").html("$12.90");
        $(".big-price").html("$121.95 <span class='monthly'>per month</span>");
        $(".ship-cost").html("FREE SHIPPING");
        $(".cta").html("Buy Now");
  }

  var one_jar_sub = function() {
        $("a#ctaLink").attr("href", "http://gundrymd.com/cmd.php?pid=e30c33910a534535954aa269f645d100&bn=1&clear=1");
        $(".old-price").html("$69.95");
        $(".sav-price").html("$25.00");
        $(".memb-price").html("$5.00");
        $(".big-price").html("$44.95 <span class='monthly'>per month</span>");
        $(".ship-cost").html("FREE SHIPPING");
        $(".cta").html("Buy Now");
  }

  var six_jar_reg = function() {
      $("a#ctaLink").attr("href", "http://gundrymd.com/cmd.php?pid=9e938a47eab742e78fa3fd2cab5e3340&bn=1&clear=1");
      $(".subInfo").html("(This is a one time payment)")
        $(".old-price").html("$419.70");
        $(".sav-price").html("$165.00");
        $(".big-price").html("$254.70");
        $(".ship-cost").html("FREE SHIPPING");
        $(".cta").html("Buy Now");
  }

  var three_jar_reg = function() {
      $("a#ctaLink").attr("href", "http://gundrymd.com/cmd.php?pid=02b66eaf18ff4babb549ebc9f86ea40f&bn=1&clear=1");
      $(".subInfo").html("(This is a one time payment)")
        $(".old-price").html("$209.85");
        $(".sav-price").html("$75.00");
        $(".big-price").html("$134.85");
        $(".ship-cost").html("FREE SHIPPING");
        $(".cta").html("Buy Now");
  }

  var one_jar_reg = function() {
      $("a#ctaLink").attr("href", "http://gundrymd.com/cmd.php?pid=5fb9c7bc9dab4438a20123f555487339&bn=1&clear=1");
      $(".subInfo").html("(This is a one time payment)")
        $(".old-price").html("$69.95");
        $(".sav-price").html("$20.00");
        $(".big-price").html("$49.95");
        $(".ship-cost").html("+$4.95 SHIPPING");
        $(".cta").html("Buy Now");
  }

	var six_jar_sub_book = function() {
		    $("a#ctaLink").attr("href", "http://gundrymd.com/cmd.php?pid=27d397a7d6d941a4964729b0a3130a9e&bn=1&clear=1");
		    $(".memb-sav").hide();
		    $(".subInfo").html("+ $14.95 one time payment for book")
	        $(".old-price").html("$419.70");
	        $(".sav-price").html("$219.75");
	        $(".big-price").html("$229.95 <span class='monthly'>per month</span>");
	        $(".ship-cost").html("FREE SHIPPING");
	        $(".cta").html("Buy Now");
	}

	var three_jar_sub_book = function() {
		    $("a#ctaLink").attr("href", "http://gundrymd.com/cmd.php?pid=1d30cf46eb18481c9ad92b0501436219&bn=1&clear=1");
		    $(".memb-sav").hide();
		    $(".subInfo").html("+ $14.95 one time payment for book")
	    	$(".old-price").html("$209.85");
	    	$(".sav-price").html("$87.90");
	    	$(".big-price").html("$121.95 <span class='monthly'>per month</span>");
	    	$(".ship-cost").html("FREE SHIPPING");
	    	$(".cta").html("Buy Now");
	}


	var one_jar_sub_book = function() {
	    	$("a#ctaLink").attr("href", "http://gundrymd.com/cmd.php?pid=936b1a17dd6d47149497e47218b30490&bn=1&clear=1");
	    	$(".memb-sav").hide();
	    	$(".subInfo").html("+ $14.95 one time payment for book")
	    	$(".old-price").html("$69.95");
	    	$(".sav-price").html("$25.00");
	    	$(".big-price").html("$44.95 <span class='monthly'>per month</span>");
	    	$(".ship-cost").html("FREE SHIPPING");
	    	$(".cta").html("Buy Now");
	}


	var six_jar_reg_book = function() {
			$("a#ctaLink").attr("href", "http://gundrymd.com/cmd.php?pid=a7c435e87b5745eb92688ac365b4c32c&bn=1&brand=mbg&clear=1");
			$(".subInfo").html("(This is a one time payment)")
	    	$(".old-price").html("$419.70");
	    	$(".sav-price").html("$195.00");
	    	$(".big-price").html("$269.65");
	    	$(".ship-cost").html("FREE SHIPPING");
	    	$(".cta").html("Buy Now");
	}

	var three_jar_reg_book = function() {
			$("a#ctaLink").attr("href", "http://gundrymd.com/cmd.php?pid=5a2d3dd1322345459aa7080eb5520d93&bn=1&brand=mbg&clear=1");
			$(".subInfo").html("(This is a one time payment)")
	    	$(".old-price").html("$209.85");
	    	$(".sav-price").html("$75.00");
	    	$(".big-price").html("$149.80");
	    	$(".ship-cost").html("FREE SHIPPING");
	    	$(".cta").html("Buy Now");
	}

	var one_jar_reg_book = function() {
			$("a#ctaLink").attr("href", "http://gundrymd.com/cmd.php?pid=215536ab54f34b54bebabaaa6fef9382&bn=1&brand=mbg&clear=1");
			$(".subInfo").html("(This is a one time payment)")
	    	$(".old-price").html("$69.95");
	    	$(".sav-price").html("$20.00");
	    	$(".big-price").html("$64.90");
	    	$(".ship-cost").html("FREE SHIPPING");
	    	$(".cta").html("Buy Now");
	}


	// Adding the class of Active
	$('.jar').click(function() {
		if(!$(this).hasClass("active")) {
			$(".jar").removeClass("active");
			$(this).addClass("active");
		}
		if( $(".jar-grey.grey2.jar").hasClass("active") ){
			if ($('input[name=inputy]').is(':checked')  && $('input[name=book-input]').is(':checked') ) {
				six_jar_sub_book();
			}
			else if ($('input[name=book-input]').is(':checked')) {
				six_jar_reg_book();
			}
			else if ($('input[name=inputy]').is(':checked')) {
				six_jar_sub();
			}
			else {
				six_jar_reg();
			}
		}
		if($(".jar3.jar").hasClass("active")){
			if ($('input[name=book-input]').is(':checked') && $('input[name=inputy]').is(':checked')) {
				three_jar_sub_book();
			}
			else if ($('input[name=book-input]').is(':checked')) {
				three_jar_reg_book();
			}
			else if ($('input[name=inputy]').is(':checked')) {
				three_jar_sub();
			}
			else {
				three_jar_reg();
			}
		}
		if($(".jar-grey.grey1.jar").hasClass("active")){
			if ($('input[name=book-input]').is(':checked') && $('input[name=inputy]').is(':checked')) {
				one_jar_sub_book();
			}
			else if ($('input[name=book-input]').is(':checked')) {
				one_jar_reg_book();
			}
			else if ($('input[name=inputy]').is(':checked')) {
				one_jar_sub();
			}
			else {
				one_jar_reg();
			}
		}

	})
	
	function SubscribeOn() {	  
		$('#inputy').prop('checked', true).triggerHandler('click')

		$('#sub-check').show()
		$(".memb-sav").show();

		if ($('input[name=book-input]').is(':checked')) {
				$(".subInfo").html("+ $14.95 one time payment for book");
			}

		else {
			$(".subInfo").hide();
		}

		if($(".jar-grey.grey2.jar").hasClass("active")){
			if ($('input[name=book-input]').is(':checked')) {
				six_jar_sub_book();
			}
			else {
				six_jar_sub()
			} 
		}

		if($(".jar3.jar").hasClass("active")){
			if ($('input[name=book-input]').is(':checked')) {
				three_jar_sub_book();
			}
			else {
				three_jar_sub()
			} 
		}

		if($(".jar-grey.grey1.jar").hasClass("active")){
			if ($('input[name=book-input]').is(':checked')) {
				one_jar_sub_book();
			}
			else {
				one_jar_sub()
			} 
		}
	}

	function SubscribeOff() {	
		$('#inputy').prop('checked', false).triggerHandler('click')  

		$('#sub-check').hide()
		$(".memb-sav").hide();
		$(".subInfo").show();

		if($(".jar-grey.grey2.jar").hasClass("active")){
			if ($('input[name=book-input]').is(':checked')) {
				six_jar_reg_book();
			}
			else {
				six_jar_reg()
			}
		}

		if($(".jar3.jar").hasClass("active")){
			if ($('input[name=book-input]').is(':checked')) {
				three_jar_reg_book();
			}
			else {
				three_jar_reg()
			}
		}

		if($(".jar-grey.grey1.jar").hasClass("active")){
			if ($('input[name=book-input]').is(':checked')) {
				one_jar_reg_book();
			}
			else {
				one_jar_reg()
			}
		}
	}


	$('#main-subscribe').click(function() { 
		return (this.tog = !this.tog) ? SubscribeOn() : SubscribeOff();
	})

	function BuyBookOn() {	  
		$('#book-input').prop('checked', true).triggerHandler('click')
		$(".subInfo").show();
		$('#book-check').show()

		if($(".jar-grey.grey2.jar").hasClass("active")){
		   if ($('input[name=inputy]').is(':checked')) {
		   		$(".memb-sav").hide();
				six_jar_sub_book();
			}
			else {
				six_jar_reg_book();
			} 
		}

		if($(".jar3.jar").hasClass("active")){
		   if ($('input[name=inputy]').is(':checked')) {
		   		$(".memb-sav").hide();
				three_jar_sub_book();
			}
			else {
				three_jar_reg_book();
			}
		}

		if($(".jar-grey.grey1.jar").hasClass("active")){
			if ($('input[name=inputy]').is(':checked')) {
				$(".memb-sav").hide();
				one_jar_sub_book();
			}
			else {
				one_jar_reg_book();
			}
		}
	}

	function BuyBookOff() {	
		$('#book-input').prop('checked', false).triggerHandler('click')  
		$('#book-check').hide()

		if($(".jar-grey.grey2.jar").hasClass("active")){
			
			if ($('input[name=inputy]').is(':checked')) {
				$(".subInfo").hide();
				$(".memb-sav").show();
				six_jar_sub();
			}
			else {
				six_jar_reg();
			}
		}

		if($(".jar3.jar").hasClass("active")){
			
			if ($('input[name=inputy]').is(':checked')) {
				$(".subInfo").hide();
				$(".memb-sav").show();
				three_jar_sub();
			}
			else {
				three_jar_reg();
			}
		}

		if($(".jar-grey.grey1.jar").hasClass("active")){
			if ($('input[name=inputy]').is(':checked')) {
				$(".subInfo").hide();
				$(".memb-sav").show();
				one_jar_sub();
			}
			else {
				one_jar_reg();
			}
		}
	}

	$('.buybook-div').click(function(){
		return (this.tog = !this.tog) ? BuyBookOn() : BuyBookOff();
	})

	// slow scroll
		$("#bottom-cta").click(function(e){
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