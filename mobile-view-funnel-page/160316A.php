<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="http://gundrymd.com/favicon.ico" type="image/x-icon">
	<link rel="icon" href="http://gundrymd.com/favicon.ico" type="image/x-icon">
    <link rel="icon" href="http://gundrymd.com/favicon.ico">
    <title>LectinBlocker.com</title>
  	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<style>
		html,body {margin: 0; padding: 0; color: #fff; font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; font-weight: 300; font-size:16px;}
		.container{width: 960px; margin:0px auto;}
		.padding{padding-left:-15px; padding-right:-15px; z-index:999}
		.content{box-shadow: 0 0 25px #ccc;}
		.navbar{position:relative; min-height:90px; margin-bottom:0px; border:0px solid transparent; z-index:1000;}
		.navbar-inverse{background-color: #fff; border-color: #080808; -webkit-box-shadow: 0px 5px 10px -4px rgba(0,0,0,0.37); -moz-box-shadow: 0px 5px 10px -4px rgba(0,0,0,0.37); box-shadow: 0px 5px 10px -4px rgba(0,0,0,0.37); height: 90px;}
		header p{background: url("images/hero_logo.png") no-repeat; padding-left: 700px; height: 90px !important; margin:0px auto; margin-bottom:10px;}
		.left-column{float: left; width: 680px; margin-left:20px;}
		.right-column{width: 203px; float: right; padding-right:20px; margin-right:10px;}
		#doctor{width:203px; height:203px; margin-top:30px;} 
		.clear{clear: both;}
		.formCTA{color:#fff; font-size:22px; font-weight:300; height:36px; margin:0px auto;}
		footer{background-color: #fff; color: #fff; text-align: center; font-size: 14px; padding: 0px 0;}
		footer a, footer a:hover, footer a:visited{text-decoration: none; color: #333;}
		footer p {font-size:12px; text-align:left; color: #333;}
		#CTALinka{display: none;}
		#button{background-color:#4880c2; margin:0px auto !important; padding-left:100px; padding-right:100px; color:#fff; height:40px; padding-top:10px; padding-bottom:10px; width:282px;}	
		.optIn2{padding-top: 50px; padding-bottom: 60px; padding-left: 0px; padding-right: 0px; background:transparent url('../images/optin_bg2.png') no-repeat scroll center center; background-clip: border-box; background-origin: padding-box; background-size: auto auto; margin-bottom: -10px;}
		.row{margin-left: -15px; margin-right: -15px; box-sizing: border-box;}
		.col-md-4{width: 50%; float:left; position: relative; min-height: 1px; padding-left: 15px; padding-right: 15px; box-sizing: border-box;}
		.col-md-3{width: 21%; float: left; position: relative; min-height: 1px; padding-right: 15px; padding-left: 15px; padding-top: 5px; color:#62666a; margin-top:15px;}
		.col-md-offset-2{margin-left: 16.66666667%;}
		.orderpage_btnB{font-weight:700; background: #dfa15a; background-image: -webkit-linear-gradient(top, #dfa15a, #ed8924); background-image: -moz-linear-gradient(top, #dfa15a, #ed8924); background-image: -ms-linear-gradient(top, #dfa15a, #ed8924); background-image: -o-linear-gradient(top, #dfa15a, #ed8924); background-image: linear-gradient(to bottom, #dfa15a, #ed8924); -webkit-border-radius: 2px; -moz-border-radius: 2px; border-radius: 2px; -webkit-box-shadow: 0px 1px 3px #666666; -moz-box-shadow: 0px 1px 3px #666666; box-shadow: 0px 1px 3px #666666; font-family: Arial; color: #ffffff font-size: 20px; padding: 3px 68px 3px 68px; border: solid #e47925 1px; text-decoration: none; width:254px !important; margin-left:25px; margin-bottom:20px;}
		.orderpage_btnB:hover {background: #e47825; background-image: -webkit-linear-gradient(top, #e47825, #ba5b12); background-image: -moz-linear-gradient(top, #e47825, #ba5b12); background-image: -ms-linear-gradient(top, #e47825, #ba5b12); background-image: -o-linear-gradient(top, #e47825, #ba5b12); background-image: linear-gradient(to bottom, #e47825, #ba5b12); text-decoration:none; color:#fff;}
		h1 {font-size:23px; color:#27377a}
		h4 {color:#62666a; display:inline-block; float: left; border-right: 1px solid #62666a; padding-right:30px;}
		hr {border-top:1px solid #5e5f61; color:#5e5f61; text-decoration:none; height:0px; border-top-color:#d5d5d5}
		.hrsmll {width:35px !important;}
		.wrapper {outline:0px dashed red; display:block; margin:0px auto;}
		.flip {-moz-transform: scaleX(-1); -o-transform: scaleX(-1); -webkit-transform: scaleX(-1); transform: scaleX(-1); filter: FlipH; -ms-filter: “FlipH”; margin-left:100px;}
		.smftrtext {font-size:12.75px; text-align:left;}
		.videocontainer {margin:0px auto; margin-top:30px; margin-bottom:20px; padding-bottom:30px;}
		.caption {font-size:14px; color:#333}
		#left {width:380px; margin-left:-20px}
		#right {width:380px; margin-right:-20px}
		#lspeaker {position:relative; top:45px; left:30px; width:100px;}
		#rspeaker {margin-top:15px;}
		#optincontainer {margin-top:-50px;}
</style>	
 
  </head>
<body>
<div>

<?php 
	$n = empty($_GET['n']) ? "" : $_GET['n'];
?>

<?php if($n=='cad'){ ?><p align="center" style="margin-top:10px;">Advertorial</p><?php } ?>
<?php if($n=='tba'){ ?><p align="center" style="margin-top:10px;">Advertisement</p><?php } ?>
 
</div>

<script src="/js/jquery.cookie.js"></script>


<header align="center">
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          
          <p></p>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          
        </div>
        <!--/.navbar-collapse -->
      </div>
    </nav>
</header>

<div class="container" id="optincontainer">
<div class="optIn2">
	<div class="row">
    	<div id="lspeaker">
            <img src="http://lectinblocker.com/images/speaker.png" class="flip" />
		</div>
        <div class="col-md-4 col-md-offset-2" id="right">
            <h4>MAKE SURE YOUR SPEAKERS ARE ON</h4>
        </div>
        <div class="col-md-3">
            May take 10 seconds to load
        </div>
        <div id="rspeaker" style=""><img src="http://lectinblocker.com/images/speaker.png" /></div>
	</div>
</div>
</div>
 

<!-- main content -->
<div class="early-access-box container content">
		<div class="left-column">
        <div class="videocontainer">
        <!-- video -->

            <span class="LimelightEmbeddedPlayer" id="Gundry_Lectin_Shield_VSL_160316A">
			<script src="//video.limelight.com/player/embed.js"></script>
            <object type="application/x-shockwave-flash" id="limelight_player_679438" name="limelight_player_679438" class="LimelightEmbeddedPlayerFlash" width="679" height="382" data="//video.limelight.com/player/loader.swf">
            <param name="movie" value="//video.limelight.com/player/loader.swf"/>
            <param name="wmode" value="window"/>
            <param name="allowScriptAccess" value="always"/>
            <param name="allowFullScreen" value="true"/>
            <param name="flashVars" value="channelId=9dbfd6c47bd44dc3bb10b2a500abc74b&amp;deepLink=true&amp;playerForm=3408cce3252244e9b8db28df9f21f924"/></object>
			<script>LimelightPlayerUtil.initEmbed('limelight_player_679438');</script>
            </span>
            
        <!-- video -->
            </div>
            <div id="CTALink" align="center">
        	<a href="http://lectinblocker.com/secureOrder.php" id="button" class="orderpage_btnB" target="_blank">NEXT STEP</a>
        	</div>
		
	</div>
    
	<div class="right-column">
	<img src="images/gundry-309x300_2.png" id="doctor" />
    <h1>DR. GUNDRY</h1>
	<hr align="left" class="hrsmll">
    
	<p class="caption">Dr. Steven Gundry, MD is one of the world's most celebrated pediatric heart surgeons, and the author of the best-selling book "Dr. Gundry's Diet Evolution." He is the director of the International Heart & Lung Institute in Palm Springs, CA, and the founder / director of the Center for Restorative Medicine in Palm Springs and Santa Barbara.</p><br />
	</div>
	<div class="clear"></div>
</div><br />
<!-- main content -->

        <!-- PHP Footer Block -->

<hr><br />
		<footer>
                 <div class="container">
        
           <div align="center" class="wrapper">
           <div class="wrap-div-topSpacer">
           </div>

<?php if($n=='rc'){ ?>
           <p class="fnt16">Representations regarding the efficacy and safety of Correct + Calm Redness Relief Cream have not been evaluated by the Food and Drug Administration. The FDA only evaluates foods and drugs, not supplements like these products. These products are not intended to diagnose, prevent, treat, or cure any disease. Click 
           <a href="http://www.biospectrum.com/shop/page.html?id=103#title7" target="_BLANK">here</a>, 
           <a href="http://www.grantinc.com/cosmetics/active_series/granactive_ar-1423.php" target="_BLANK">here</a>, and 
           <a href="http://www.in-cosmeticsasia.com/__novadocuments/99548?v=635756602373700000" target="_BLANK">here</a> to find evidence of a test, analysis, research, or study describing the benefits, performance or efficacy of Correct + Calm Redness Relief Cream based on the expertise of relevant professionals.</p>
<?php } ?>

<p class="smftrtext">
The information on this website has not been evaluated by the Food and Drug Administration. These products are not intended to diagnose, treat, cure or prevent any disease.</font><br /><br />
© Gundry MD <script language="JavaScript" type="text/javascript">
    now = new Date
    theYear=now.getYear()
    if (theYear < 1900)
    theYear=theYear+1900
    document.write(theYear)
</script>. All Rights Reserved <text>&nbsp;
<a href="http://gundrymd.com/terms">Terms & Conditions</a>&nbsp; &nbsp;|&nbsp; &nbsp;<a href="http://gundrymd.com/privacy">Privacy Policy</a>&nbsp; &nbsp;|&nbsp; &nbsp; 9465 Wilshire Boulevard, Suite 300 Beverly Hills, California, 90212</text> </p>
          </div> 
                </div>
      
		</footer>
      
<script>
if(!$.cookie('returning')){
	var minD = <?php if(isset($_GET['d'])) echo $_GET['d']; else echo '29.5'; ?>;
	var secD = minD * 60;
	var delay = secD * 10000;
	 setTimeout(function() {
		$("#CTALink a").show();
		}, delay);
		$.cookie("returning", 1, { expires : 7 });
		}
	else $("#CTALink a").show();
</script>
    
    
<?php 
include_once('../modules/ftr_cde.inc.php');
?>
        
<!-- dyn -->
