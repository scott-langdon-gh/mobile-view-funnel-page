<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Total Restore Qualifier</title>
	<style>
		body{font-family: "Helvetica Neue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; margin:0; padding:0;}
		.wrapper{position:absolute; top:0; bottom:0; background-color:#eeeeee; padding:30px 0 30px; width:100%; height:100%; min-height:830px;}
		.main{margin:auto; background-color:#ffffff; border-radius:10px; width:700px; height:725px;}
		#surveyContainer{padding:25px;}
		label{font-size:16px; line-height:24px; font-weight:normal; margin:3px 0;}
		#surveySubmit{
			background: -webkit-linear-gradient(#00CC00, #006600); /* For Safari 5.1 to 6.0 */
			background: -o-linear-gradient(#00CC00, #006600); /* For Opera 11.1 to 12.0 */
			background: -moz-linear-gradient(#00CC00, #006600); /* For Firefox 3.6 to 15 */
			background: linear-gradient(#00CC00, #006600); /* Standard syntax */ 
			border: 1px solid #006600; 
			border-radius:8px; 
			width: 300px; 
			height: 39px; 
			margin-top: 10px; 
			text-align: center;
			text-decoration: none; 
			color: #fff; 
			font-weight: bold; 
			font-size: 22px; 
			line-height: 37px;}
		#surveySubmit:hover{
			box-shadow:2px 2px 10px 2px #aaa;
			cursor:pointer;}
			
@media only screen 
and (min-device-width : 320px) 
and (max-device-width : 480px) {
/* Smartphones (portrait and landscape) ----------- */

}

@media only screen 
and (min-width : 321px) {
/* Smartphones (landscape) ----------- */

}


@media only screen 
and (max-width : 320px) {
/* Smartphones (portrait) ----------- */


}


@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) {
/* iPads (portrait and landscape) ----------- */

}


@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (orientation : landscape) {
/* iPads (landscape) ----------- */

}


@media only screen 
and (min-device-width : 768px) 
and (max-device-width : 1024px) 
and (orientation : portrait) {
/* iPads (portrait) ----------- */


}

@media only screen 
and (min-width : 1200px) {
/* Desktops and laptops ----------- */

}

@media only screen 
and (min-width : 1700px) {
/* Large screens ----------- */

}

@media
only screen and (-webkit-min-device-pixel-ratio : 1.5),
only screen and (min-device-pixel-ratio : 1.5) {
/* iPhone 4 ----------- */

	.main{
			margin:auto;
			background-color:#ffffff;
			border-radius:10px;
			width: auto;
			height: auto;}
			
	.wrapper{
			position:absolute;
			top:0;
			bottom:0;
			background-color:#eeeeee;
			padding:30px 0 30px;
			width:100%;
			height:100%;
			min-height:900px;}

}
	</style>
</head>
<body>
	<div class='wrapper'>
		<section class="main" id='surveyMain'>
			<div id='surveyContainer' class="container">
				<form id='survey' action='secureOrder_180410.php' method='post'>
					<ol>
						<li><h2>Are you a...</h2>
							<input type='radio' name='sex' value='M' id="sexM" /><label for="sexM">Man</label> or 
							<input type='radio' name='sex' value='W' id="sexW" /><label for="sexW">Woman</label>
						</li>
						<li><h2>How old are you?</h2>
							<input type='radio' name='age' value='under 30' id="age29" /><label for="age29">under 30</label><br>
							<input type='radio' name='age' value='30-39' id="age30" /><label for="age30">30 - 39</label><br>
							<input type='radio' name='age' value='40-49' id="age40" /><label for="age40">40 - 49</label><br>
							<input type='radio' name='age' value='50-59' id="age50" /><label for="age50">50 - 59</label><br>
							<input type='radio' name='age' value='over 59' id="age59" /><label for="age59">over 59</label>
						</li>
						<li><h2>Why do you want Total Restore?<h2>
							<input type='checkbox' name='problems1' value='Brain Fog' id="brain" /><label for="brain"> I want more energy</label><br>
							<input type='checkbox' name='problems2' value='Dizziness' id="dizz" /><label for="dizz"> I want better digestion</label><br>
							<input type='checkbox' name='problems3' value='Weight Gain' id="weight" /><label for="weight"> I want better sleep</label><br>
							<input type='checkbox' name='problems4' value='Stress' id="stress" /><label for="stress"> I want to lose weight</label><br>
							<input type='checkbox' name='problems5' value='Poor Sleep' id="sleep" /><label for="sleep"> I have frequent brain fog</label><br>
							<input type='checkbox' name='problems6' value='Soreness' id="sore" /><label for="sore"> I want improved skin</label><br>
							<input type='checkbox' name='problems7' value='Bad Circulation' id="circ" /><label for="circ"> I have joint pain</label><br>
							<input type='checkbox' name='problems8' value='Feeling Older' id="older" /><label for="older"> I want to feel younger</label><br>
						</li>
						<input type='submit' id='surveySubmit' value='Next Step'></input>
						<p><a href="secureOrder_180410.php">Skip this step</a></p>
					</ol>
				</form><!--End of Survey-->

			</div><!--End of Survey Container-->
		</section><!--End of Main-->
	</div><!--End of Wrapper-->
</body>
</html>