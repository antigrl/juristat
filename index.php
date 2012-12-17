<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Juristat</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<!-- 1140px Grid styles for IE -->
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->
	
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/1140.css" type="text/css" media="screen" />

	<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
	<script type="text/javascript" src="js/lib/css3-mediaqueries.js"></script>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
	<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	
		// validate signup form on keyup and submit
		var validator = $("#contactform").validate({
			rules: {
				contactname: {
					required: true,
					minlength: 2
				},
				email: {
					required: true,
					email: true
				},
			},	
			messages: {
				contactname: {
					required: "Please enter your name",
					minlength: jQuery.format("Your name needs to be at least {0} characters")
				},
				email: {
					required: "Please enter a valid email address",
					minlength: "Please enter a valid email address"
				},
			},
			// set this class to error-labels to indicate valid fields
			success: function(label) {
				// set &nbsp; as text for IE
				label.addClass("checked");
			}
		});
	});
	</script>
</head>

<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="eightcol">
					<p>Armed with Juristat, attorneys can better predict their success rates throughout 
						every step of the litigation process, increasing efficiency and client satisfaction.</p>
					<div class="gavel"></div>
				</div>
				<div class="fourcol last">
					<div id="contactWrapper" role="form">
						<h1 role="heading">Stay in the loop</h1>
						<form method="post" action="index.php" id="contactform">
							<div class="stage clear">
								<label for="name"><strong>Name: <em>*</em></strong></label>
								<input type="text" name="contactname" id="contactname" value="" class="required" role="input" aria-required="true" />
							</div>
							<div class="stage clear">
								<label for="email"><strong>Email: <em>*</em></strong></label>
								<input type="text" name="email" id="email" value="" class="required email" role="input" aria-required="true" />
							</div>
							<input type="submit" value="submit" name="submit" id="submitButton" title="Submit" />
							</div>
						</form>
					</div><!-- /contactform -->	
				</div>
			</div><!-- /row -->
		</div><!-- container -->
	</header>
	<nav>
		<div class="container">
			<div class="row">
				<div class="twelvecol">
					<img src="images/sm-logo.png" />
					<ul id="navlist">
						<li><a href="#">Search FAQ</a></li>
						<li><a href="#">Terms of Use</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

<div class="container">
	<div class="row">
		<div class="space">
			<div class="fourcol">
				<h1 class="centered">Search</h1>
				<div class="boxes">
					<p>Find what you need with an intuitive interface for searching state and federal case information and docket entries.</p>
					<p>Juristat converts court records into a highly structured dataset. This lets you drill down into individually indexed fields to produce powerful results with an elegant and familiar interface.</p>
				</div>
			</div>
			<div class="fourcol">
				<h1 class="centered">Analyze</h1>
				<div class="boxes">
					<p>Use the results of your search to systematically develop quantitative insight to support subjective theories. Organize your results based on lawyer, judge, date, venue, type of case, and even specific text within each entry to discover behaviors of judges and juries, success rates of other firms, and to predict activity of future clients.</p>
				</div>
			</div>
			<div class="fourcol last">
				<h1 class="centered">Report</h1>
				<div class="boxes">
					<p>Generate beautiful charts to visually plot your chance of success in numerous scenarios ranging from appeals, to jury verdicts, to virtually any type of substantive motion.</p><p>Export your results to PDF, spreadsheet, or email it directly to your client</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="twelvecol centered">
			<small>Copyright © 2013 Datanalytics, Inc. All rights reserved.</small>
		</div>
	</div><!-- /row -->
</div><!-- /container-->
</body>

</html>