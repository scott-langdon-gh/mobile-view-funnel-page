<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="http://gundrymd.com/favicon.ico" type="image/x-icon">
  <meta name="robots" content="noindex, nofollow">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="http://player.ooyala.com/static/v4/stable/latest/skin-plugin/html5-skin.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

  <title>Gundry MD Total Restore</title>

	<style>
  /* GENERAL STYLING */
    * {margin: 0; padding: 0; border: 0; outline: 0;vertical-align: baseline; background: transparent;}
    body {font-family:Montserrat, Tahoma, Geneva, sans-serif;}
    a {color: white; text-decoration: none;}
    .fixed-width-centered {width: 60%; margin-left: 50%; transform: translateX(-50%);}
    .center {margin-left: 50%; transform: translateX(-50%);}
    .float-right {float: right;}
    .float-left {float: left;}
    .clear {clear: both;}
    .flip-hor {-moz-transform: scaleX(-1); -o-transform: scaleX(-1); -webkit-transform: scaleX(-1); transform: scaleX(-1); filter: FlipH; -ms-filter: "FlipH";}
    .flip-vert {-moz-transform: scaleY(-1); -o-transform: scaleY(-1); -webkit-transform: scaleY(-1); transform: scaleY(-1); filter: FlipV; -ms-filter: "FlipV";}
    .wrapper {width: 900px;}

  /* HEADER */
    header {height: 90px; width: 100%;  background: linear-gradient(179.72deg, #4965A7 0%, #23356E 100%);}
    header .logo {height: 55px; margin-top: 10px;}
    header p {text-align: center; color: white;}
    header ul {margin-top: 22px;}
    header li {background: url("images/TotalRestore/phone-46-xxl.png") no-repeat 9px 7px; list-style: none; background-size: 30px; padding-left: 45px; padding-top: 14px; color: white;}

  /* VIDEO SECTION */
    article.video-section img {height: 20px; position: absolute; margin-top: -2px;}
    article.video-section #speaker-left {margin-left: -38px;}
    article.video-section #speaker-right {margin-left: 8px;}
    article.video-section section {display: inline-block; text-align: center;}
    article.video-section p {color: #23356E; width: 100%; text-align: center; margin: 30px 0px; padding-bottom: 3px;}
    article.video-section p span {font-weight: 900;}
    article.video-section #CTALink {text-align: center; margin: 30px 0px;}
    article.video-section button.cta {height: 44px; width: 170px; border-radius: 5px; background: linear-gradient(180deg, #FAD961 0%, #FF8038 100%); font-size: 18px; display: none;}
      /* OOYALA VIDEO PLAYER STYLING */
      article.video-section #ooyalaplayer {width:100%;}
      .oo-player {border-radius: 20px;}
      .oo-control-bar{visibility: hidden; pointer-events: none;}
      .oo-animate-pause {opacity: 1 !important}
      .oo-spinner-wrapper {width: 20px;}
      .oo-icon-system-replay {font-size: 20px;}
      .oo-state-screen-info, .oo-watermark-container {display: none;}

  /* GUNDRY INFO SECTION */
    .info-section {height: 466px;  width: 100%;  background: linear-gradient(191.45deg, #4965A7 0%, #23356E 100%);}
    .info-section img.bg-stripes {width: 466px; height: 466px;}
    .info-section section.about-gundry {position: absolute; ;height: 466px; display: inline-block; width: 900px;}
    .gundry-info {width: 500px; color: white; margin-top: 13%; margin-left: 30px;}
    .line {box-sizing: border-box; height: 3px; width: 49px; border: 2px solid #C7D463; border-radius: 5px;}
    .info-section img.gundry {height: 100%; position: absolute; right: 0; bottom: 0; margin-right: 10px; height: 100%; z-index: -3;}

  /* n=ob & n=obm STYLE */
    .shield li{background: url("images/favicon.png") no-repeat 9px 7px; list-style: none;
               padding-left: 58px; padding-top: 12px; font-size: 15px; margin-bottom: 30px; background-size:40px; height: 34px;}
    .ob-points-container {border: 1px solid black; padding-top: 15px; border-radius: 20px; -webkit-box-shadow: 0px 0px 17px 2px rgba(0,0,0,0.75);-moz-box-shadow: 0px 0px 17px 2px rgba(0,0,0,0.75);box-shadow: 0px 0px 17px 2px rgba(0,0,0,0.75);}

  /* FOOTER */
    footer {width: 100%; text-align: center; font-size: 15px;}
    footer a {color: #4A90E2;}
    .citations {width: 50%; text-align: left; margin: 50px auto; font-size: 12px;}
    .citations p {padding: 5px 0 5px 0;}
    .footer__content {font-size: 13px;}
    hr {border: 1px solid black; margin-top: 10px;}

  </style>	
</head>

<body>
  <header class="header">
    <div class="fixed-width-centered">
      <img class="logo" src="images/TotalRestore/gmd_logo_whiteandgreen@3x.png" alt="Gundry Logo">
      <ul class="float-right">
        <li>(800)852-0477</li>
      </ul>
      <!-- <img class="logo" src="images/TotalRestore/phone-icon.png" alt=""> -->
    </div>
      <?php $n = empty($_GET['n']) ? "" : $_GET['n']; ?>
      <?php if($n=='cad'){ ?><p class="center">Advertorial</p><?php } ?>
      <?php if($n=='ob' || $n=='obm'){ ?><p class="center">Advertorial</p><?php } ?>
      <?php if($n=='tba'){ ?><p class="center">Advertisement</p><?php } ?>
  </header>

  <article class="video-section"> 
    <div class="wrapper center">
      <p>
        <img id="speaker-left" class="flip-hor" src="images/TotalRestore/Page 1@3x.png" alt="Left Speaker icon">
        <span>Make sure your speakers are on</span> | May take 10 seconds to load
        <img id="speaker-right" src="images/TotalRestore/Page 1@3x.png" alt="Right Speaker icon">
      </p>
      
      <?php if($n=='obm'){ ?>
        <style>
          .oo-control-bar{
            visibility: visible;
          }
        </style>
      <?php } ?>
      
      <div id='ooyalaplayer'></div>
    </div> <!-- End .wrapper center -->

    <div id="CTALink">
      <button class="cta">
        <a href="assessment180308A.php" target="_blank">Next Step</a>
      </button>
    </div>
  </article> <!-- End Article.video-section --> 

  <?php if($n=='ob' || $n=='obm'){ ?>
    <article class="center">
      <div class="ob-points-container">
      <p align="center">In this video, you will learn about...</p><br>
        <ul class="shield">
            <li>How Dr. Gundry has helped his patients overcome fatigue, unhealthy food cravings, and a host of related issues.</li>
            <li>The dangerous toxin that causes "Leaky Gut," a common problem that can affect your digestion, weight, mood, joints, and even your mental clarity.</li>
        </ul> <ul class="shield">
          <li>The natural vitamins and minerals that have been shown to soothe gut lining and help boost overall health.</li>
          <li>The groundbreaking results of Dr. Gundry’s landmark 2013 study presented to the American Heart Association.</li>
                    
        </ul>
        <div class="clear"></div>
      </div>
    </article>
    <br>
  <?php } ?>

  <article class="info-section">
      <img class="bg-stripes float-right" src="images/TotalRestore/Green Pattern@3x.png">

      <section class="about-gundry wrapper center">
        <article class="gundry-info">
          <span style="font-size: 48px;">Dr. Steven Gundry</span><br>
          <span style="font-size: 13px; font-style: italic;">Cardiac Surgeon, Author, Founder</span>
          <div class="line"></div><br>
          <span style="font-size: 18px;">Dr. Steven Gundry, MD is one of the world's most celebrated pediatric heart surgeons, and the author of the best-selling book "Dr. Gundry's Diet Evolution." He is the director of the International Heart & Lung Institute in Palm Springs, CA, and the founder / director of the Center for Restorative Medicine in Palm Springs and Santa Barbara.</span>
        </article>
        <img class="gundry float-right" src="images/TotalRestore/gundry_photo@3x.png">
      </section>
  </article>

  <footer class="footer">
    <?php if($n=='tba' || $n=='obm'){ ?>
      <div class="citations">
        <p>Citations</p>                 
         
        <!-- section 1 -->
        <p>[1] — World Journal of Gastrointestinal Pathophysiology (November 2014), <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4231515/" target="_BLANK" onclick="return !window.open(this.href, 'Google', 'scrollbars=1,width=500,height=500')">[Link]</a></p>
       
        <p>[2] — Gut. (February 2007),<a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC1856764/" target="_BLANK" onclick="return !window.open(this.href, 'Google', 'scrollbars=1,width=500,height=500')">[Link]</a></p>
       
        <p>[3] — Journal of Epithelial Biology & Pharmacology (January 2012), <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4369670/" target="_BLANK" onclick="return !window.open(this.href, 'Google', 'scrollbars=1,width=500,height=500')">[Link]</a> </p>
       
        <p>[4] — Journal of Parenteral and Enteral Nutrition (July 2010), <a href="https://www.ncbi.nlm.nih.gov/pubmed/20631386" target="_BLANK" onclick="return !window.open(this.href, 'Google', 'scrollbars=1,width=500,height=500')">[Link]</a> </p>
       
        <p>[5] — World Journal of Gastrointestinal Pathophysiology (April 2014), <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4000502/" target="_BLANK" onclick="return !window.open(this.href, 'Google', 'scrollbars=1,width=500,height=500')">[Link]</a></p>
       
        <p>[6] — Current Opinion in Clinical Nutrition & Metabolic Care (January 2017), <a href="https://www.ncbi.nlm.nih.gov/pubmed/27749689" target="_BLANK" onclick="return !window.open(this.href, 'Google', 'scrollbars=1,width=500,height=500')">[Link]</a></p>
       
        <p>[7] — Nutrition. (November 1996), <a href="https://www.ncbi.nlm.nih.gov/pubmed/8974125" target="_BLANK" onclick="return !window.open(this.href, 'Google', 'scrollbars=1,width=500,height=500')">[Link]</a></p>
       
        <p>[8] — Evidence-Based Complementary and Alternative Medicine (2012), <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3123991/" target="_BLANK" onclick="return !window.open(this.href, 'Google', 'scrollbars=1,width=500,height=500')">[Link]</a></p>
       
        <p>[9] — Acta Pharmaceutica Sinica B (July 2015), <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4629407/" target="_BLANK" onclick="return !window.open(this.href, 'Google', 'scrollbars=1,width=500,height=500')">[Link]</a></p>

        <p>[10] — Journal of Natural Science, Biology and Medicine (July 2015), <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4518423/" target="_BLANK" onclick="return !window.open(this.href, 'Google', 'scrollbars=1,width=500,height=500')">[Link]</a></p>

        <p>[11] — Saudi Journal of Gastroenterology (January 2012), <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3271691/" target="_BLANK" onclick="return !window.open(this.href, 'Google', 'scrollbars=1,width=500,height=500')">[Link]</a></p>

        <p>[12] — Alimentary Pharmacology & Therapeutics (December 2000), <a href="https://www.ncbi.nlm.nih.gov/pubmed/11121904" target="_BLANK" onclick="return !window.open(this.href, 'Google', 'scrollbars=1,width=500,height=500')">[Link]</a></p>

        <p>[13] — The BMJ (April 17 1999), <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC1115436/" target="_BLANK" onclick="return !window.open(this.href, 'Google', 'scrollbars=1,width=500,height=500')">[Link]</a></p>

        <p>[14] — Journal of Epithelial Biology & Pharmacology (March 23 2015), <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4369670/" target="_BLANK" onclick="return !window.open(this.href, 'Google', 'scrollbars=1,width=500,height=500')">[Link]</a></p>

        <p>[15] — PLoS One. (December 2016), <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5176274/" target="_BLANK" onclick="return !window.open(this.href, 'Google', 'scrollbars=1,width=500,height=500')">[Link]</a></p>

        <p>[16] — Mediators of Inflammation (November 23 2014), <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4258329/" target="_BLANK" onclick="return !window.open(this.href, 'Google', 'scrollbars=1,width=500,height=500')">[Link]</a></p>
      </div>
    <?php } ?>

    <hr>

    <p class="footer__content">
      <br>
      
      The information on this website has not been evaluated by the Food and Drug Administration. These products are not intended to diagnose, treat, cure or prevent any disease.<br><br>
      
      <?php if($n=='rev'){ ?>
        <p>Representations regarding the efficacy and safety of Total Restore have not been evaluated by the Food and Drug Administration. The FDA only evaluates foods and drugs, not supplements like these products. These products are not intended to diagnose, prevent, treat, or cure any disease. Click <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4231515/" target="_BLANK">here</a>, <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC1856764/" target="_BLANK">here</a>, and <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC4369670/" target="_BLANK">here</a> to find evidence of a test, analysis, research, or study describing the benefits, performance or efficacy of Total Restore based on the expertise of relevant professionals.</p><br>
      <?php } ?>


      © Gundry MD <?php echo date("Y"); ?>. All Rights Reserved 
      <a href="http://gundrymd.com/terms">Terms & Conditions |</a>
      <?php if($n=='tba'){ ?>
        Click <a href="vslScript.php" target="_BLANK">here</a> to view Text 
      <?php } ?>
      <a href="http://gundrymd.com/privacy">Privacy Policy</a> 9465 Wilshire Boulevard, Suite 300 Beverly Hills, California, 90212
    </p><br>
  </footer>

  <!-- SCRIPT TAGS -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>    
  <script src="js/jquery.cookie.js"></script>

  <script src="http://player.ooyala.com/static/v4/stable/latest/core.min.js"></script>
  <script src="http://player.ooyala.com/static/v4/stable/latest/video-plugin/main_html5.min.js"></script>
  <script src="http://player.ooyala.com/static/v4/stable/latest/skin-plugin/html5-skin.min.js"></script>

  <script>
    
    // PLEASE UPDATE THIS COMMENT WHEN UPDATING VIDEO //
    //        Gundry Total Restore VSL 180308A        //
    var playerParam = {
        "autoplay": true,
        "pcode": "42dWgyOq26LapmzP0dkDCzEhlyfW",
        "playerBrandingId": "1a4519374354edeb30fda41ce0a2b33",
        "skin": {
            "inline": {
                "startScreen": {
                    "showDescription": false
                },
                "general": {
                    "watermark": {
                        "imageResource": {
                            "url": "http://player.ooyala.com/static/v4/stable/4.5.5/skin-plugin/assets/images/ooyala-watermark.png","androidResource" : "logo","iosResource" : "logo"
                        }
                    },
                    "loadingImage": {
                        "imageResource": {
                            "url": "http://player.ooyala.com/static/v4/stable/4.5.5/skin-plugin/assets/images/loader_svg.svg"
                        }
                    }
                }
            }
        }
    };
    OO.ready(function() {
        window.pp = OO.Player.create( "ooyalaplayer", "w5dmdtZTE6VgBaJafGRexYnpr5wJdCj9", playerParam );
    } );
  </script>

  <script>
    if(!$.cookie('returning180308A')){
      // Button PRICE: 37:49
      var delay = <?php if(isset($_GET['del'])) echo $_GET['del']; else echo '37.816'; ?> * 60000;
      setTimeout(function() {
        $("button.cta").show();
      }, delay);
      $.cookie("returning180308A", 1, { expires : 7 });
    }
    else { 
      $("button.cta").show();
    }
  </script>
</body>
</html>