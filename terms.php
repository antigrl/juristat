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
			<div class="twelvecol">
				<h1 class="centered">Terms of Use</h1>
				<div class="boxes">
<p>Datanalytics, Inc. (the Company") provide this website to you, subject to the below terms of use (the "Terms"). The Terms constitute a binding and enforceable legal agreement between you and the Company. Further the Terms govern all use of this website. We may update these Terms at any time, without notice to you. Each time you access this website, you agree to be bound by the Terms in effect at the time you access the website. If you do not agree to these terms, do not use this site. By accessing or otherwise using this website, you acknowledge that you have read, understood, and agree to be bound by these Terms.</p>

<p><strong>Privacy</strong><br/ >
You can reveiw our Privacy Statement for a description of our practices to ensure privacy and protect your personal data and the personal data of others.</p>

<p><strong>Intellectual Property</strong><br />
All technology, content, patents, trademarks, trade dress, copyrights, and/or any other intellectual property is owned by or licensed to the Company and protected by United States and international intellectual property laws and treaties. The Company and its licensors retain all proprietary rights to that content, technology, and intellectual property. Pleas note that all the trademarks, service marks, trade names and/or logos on this website are trademarks the Company.</p>

<p><strong>License</strong><br />
As a registered user of this website, you have been granted a non-exclusive, non-transferable, fully-revocable, limited license to access and use the information, content, and services on this website. All use is expressly subject to and limited by the Terms. We reserve the right to terminate this license at any time and for any reason. Your failure to comply with these Terms will result in automatic termination of this license, with or without prior notice, and you must immediately destroy all copies of downloaded materials in your possession or control. Except for the limited license set forth above,, the Company does not grant you any express or implied rights or licenses under any patents, trademarks, copyrights, or other proprietary or intellectual property rights.</p>

<p><strong>Usage Restrictions</strong></br >
By accessing, browsing, or using this website, you agree to the following restrictions: you will not use, intentionally or unintentionally any of the content, information, or services on this website in a manner contrary to or in violation of any applicable international, national, federal, state, or local law, rule, or regulation having the force of law. Please note that the Company is not a consumer reporting agency, and you will not use any of the content, information, or services on this website as a factor in establishing a consumer's eligibility for credit or insurance to be used primarily for personal, family, or household purposes, for employment purposes, or for any other purpose authorized under section 1681b of the Fair Credit Reporting Act (15 U.S.C.A. § 1681b you will not use this website in any manner that could harm, infect, take over, disable, overburden, or otherwise impair any of our computer systems, including, but not limited to, the servers, networks, and other components connected to or used for this website you will not interfere with any other party's use and enjoyment of this website, or of any of the content, information, or services provided on this website; to the extent that you are able to upload, post or otherwise transmit content using this site you will not upload, post, or otherwise transmit any content that you do not have a right to transmit under any law or under contractual or fiduciary relationships (such as inside information, proprietary and confidential information learned or disclosed as part of employment relationships or under nondisclosure agreements); you will not upload, post, or otherwise transmit any material that contains software viruses or any other computer code, files, or programs designed to interrupt, destroy, or limit the functionality of any computer software or hardware or telecommunications equipment; you will not attempt to gain unauthorized access to any services, accounts, computer systems, or networks connected to any server used for this website, through password mining, hacking, or any other means; you will not seek to gain access to any materials or information through any means not intentionally made available by us; you will not reproduce, duplicate, copy, download, store, further transmit, disseminate, transfer, or otherwise exploit this website, or any portion hereof without the Companys prior written consent, except that you may reproduce limited content from this site describing the Companysproducts and services solely to educate users or potential users about the Companys products or services ; you will not use any framing techniques to enclose any portion of this website (including, but not limited to, images, text, page layout, and form) without the Companys' prior written consent; you will not make any use of the trademarks, service marks, trade names, logos, and graphics on this website without the Companys prior written consent; you will not use any network monitoring or discovery software to determine the site architecture, or extract information about usage, individual identities, or users; you will not use any robot, spider, other automatic software or device, or manual process to monitor or copy our website or the content, information, or services on this website without the Companysprior written consent; you will not collect any email addresses made available on this site for purposes of promotions or marketing campaigns; you will not distribute, on or through this website, any advertising; promotion; solicitation for goods, services, or funds; or solicitation for others to become members of any enterprise or organization without the Companys prior written permission; and you will not use or otherwise export or re-export this website, or any portion thereof, in violation of the export control laws and regulations of the United States of America or any other country.</p>

<p><strong>DISCLAIMER OF WARRANTIES AND LIMITATION OF LIABILITY</strong><br />
The Company provides this website as is, witout warranty of any kind, express or implied, including, but not limited to: WARRANTIES OF PERFORMANCE, MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, ACCURACY, OMISSIONS, and/or COMPLETENESS; WARRANTIES THAT ACCESS TO ANY PRODUCT WILL BE UNINTERRUPTED, SECURE, COMPLETE, OR ERROR FREE; WARRANTIES AS TO THE LIFE OF ANY URL OR THIRD-PARTY WEB SERVICE; AND WARRANTIES WITH REGARD TO ANY CONTENT OR SOFTWARE THAT HAS BEEN MODIFIED IN ANY WAY BY ANYONE OTHER THAN, AND WITHOUT THE EXPRESS APPROVAL OF, THE COMPANY</p>

<p>BY ACCESSING, BROWSING, OR USING THIS WEBSITE, YOU ACKNOWLEDGE THAT PROVISION OF CONTENT AND SOFTWARE ENTAILS THE LIKELIHOOD OF SOME HUMAN AND MACHINE ERRORS, DELAYS, INTERRUPTIONS, AND LOSSES, INCLUDING THE INADVERTENT LOSS OF DATA OR DAMAGE TO MEDIA; THIS SITE, AND THE PRODUCTS AND SERVICES REFERENCED HEREIN MAY NOT SATISFY CUSTOMER REQUIREMENTS NOT EXPRESSLY STATED IN THE CUSTOMER AGREEMENT;</p>

<p>IN NO EVENT WILL THE COMPANY BE LIABLE, IN CONTRACT, TORT, STRICT LIABILITY, OR OTHERWISE, FOR INDIRECT, INCIDENTAL, SPECIAL, PUNITIVE, OR CONSEQUENTIAL DAMAGES OF ANY KIND ARISING OUT OF, OR IN CONNECTION WITH USE OF THIS WEBSITE, WHETHER OR NOT THE COMPANY HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGE; ANY CLAIM(S) RELATING IN ANY WAY TO CUSTOMER'S INABILITY OR FAILURE TO PERFORM RESEARCH OR OTHER WORK OR TO PERFORM SUCH RESEARCH OR WORK PROPERLY OR COMPLETELY, EVEN IF ASSISTED BY THE COMPANY; ANY DECISION MADE OR ACTION TAKEN BY CUSTOMER IN RELIANCE UPON THE AVAILABILITY OF OR CONTENT MADE AVAILABLE THROUGH THIS WEBSITE.</p>

<p>No Legal Advice By using this website you expressly agree that the Company is not providing legal services nor do you believe the Company to be providing law-related services as defined by the Missouri Rules of Ethics. No attorney-client relationship is formed. You use the content, information, and services on this website at your own risk.</p>

<p><strong>Advertisers</strong><br />
This website may contain advertising and sponsorship. Advertisers and sponsors are responsible for ensuring that material submitted for inclusion on this website is accurate and complies with applicable laws. The Company is not responsible for the illegality of, or any error or inaccuracy in, advertisers' or sponsors' materials, or for the acts or omissions of such advertisers or sponsors.</p>

<p>Links to Third Party Sites This Site may provide links to other third-party World Wide Web sites or resources. The Company makes no representations whatsoever about any other web site which you may access through this Site. Because the Company has no control over such sites and resources, you acknowledge and agree that the Company is not responsible for the availability of such external sites or resources and is not responsible or liable for any Content, advertising, products, services or other materials on or available from such sites or resources.</p>

<p><strong>Registration and Account Information</strong><br />
Certain sections of this website may require you to register as a user or create an account. By registering or creating an account, you agree to provide accurate and complete information and to inform us of any changes to that information. Each registration is for a single user only, unless otherwise expressly provided on the registration page. You are responsible for maintaining the confidentiality of your account and password and for restricting access to your computer, and you agree to accept responsibility for all activities that occur under your account or password. If you believe there has been unauthorized use, you must notify us immediately.</p>

<p><strong>Termination</strong><br />
You acknowledge and agree that the Company, in its sole discretion, may terminate your website access if your conduct is found to be unlawful, inconsistent with, or in violation of, the letter or spirit of these Terms, or for any other reason, the Company shall not be liable to you or any third party for termination of website access. Should you object to any terms and conditions of these Terms, or to any subsequent modifications thereto, your only recourse is to immediately discontinue use of the website.</p>

<p><strong>Indemnification</strong><br />
You agree to indemnify, defend, and hold harmless the Company and its officers, directors, employees, affiliates, agents, licensors, and suppliers from and against all claims, losses, expenses, damages, and costs, including reasonable attorneys' fees, resulting from any violation of these Terms by you.</p>

<p><strong>Governing Law and Jurisdiction</strong><br />
These Terms are governed by and construed in accordance with the laws of the State of Missouri, and any action arising out of or relating to these terms shall be filed only in state or federal courts located in St. Louis, Missouri, and you hereby consent and submit to the personal jurisdiction of such courts for the purpose of litigating any such action.</p>

<p><strong>Severability of Provisions</strong><br />
Should any portion of the Terms be found or declared to be unenforceable or void for any reason, the remaining portions shall be severable, and fully enforceable as if no such finding of unenforceability had issued.</p>

<p><strong>Contact Information</strong><br />
If you have any questions about these Terms, or about the content, information, or services on this website, you may contact us using any of the methods described on our contact us page.</p>
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