<?php
//index.live.php
if(isset($_POST['Submit']) && (filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL))) {
//echo "email: " . $_REQUEST['email'] . "<BR>";
//exit;
//success=0 if email sent
//success=1 if email field blank on submit
//success=2 if did not pass filter_validate_email, error occurred, mail did not send, try again
//success=3 if not yet submitted
  $subject = 'Contact Email Submission from TGC index.live.php Page'; // Subject of your email

  // Receiver email address
  $to = 'contactus@thegivingcycle.org';  //Change the email address by yours

  // prepare header
  $header = 'From: '. ' <'. $_REQUEST['email'] .'>'. "\r\n";
  $header .= 'Reply-To:  '. $_REQUEST['email'] . "\r\n";
  $header .= 'Cc:  ' . 'jesse.josserand@thegivingcycle.org' . "\r\n";
  $header .= 'Bcc:  ' . 'jesse.josserand@gmail.com' . "\r\n";
  $header .= 'X-Mailer: PHP/' . phpversion();

  $message .= 'Email: ' . $_REQUEST['email'] . "\n";
  $message .= 'Subject: Email from TGC Newletter Signup' . "\n";
  $message .= 'Message: '. $_REQUEST['message'];

  // Send subscribe information
  $mail = mail( $to, $subject , $message, $header );
  `echo $message|mail -s $subject $to`;
  //echo 'sent';
  $success=0;
  } else {
  $success=3;
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width">
<meta name="apple-itunes-app" content="app-id=TBD">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title>Restoring America’s Middle Class | Online Shopping Cash Rebates | The Giving Cycle</title>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<meta name="keywords" content="">
<meta name="description" content="TheGivingCycle.org creates an economy that fairly benefits members, charitable organizations and businesses who contribute to the program.You earn cash online shopping rebates AND can support your favorite charitable organizations as well.">
<!--
Online Shopping Cash Rebates, 
Fundraising Ideas for Charitable Organizations
-->
		
<link rel="stylesheet" href="styles/site.min.css">

<style type='text/css'>
.site-title{
        text-align:center;
        font-size:66px;
        font-family:'Pacifico';
        margin:0 0 50px 0;
        padding-bottom:50px;
        position:relative;
}
.site-title:before,
.site-title:after{
        content:"";
        width:100px;
        height:10px;
        left:50%;
        margin-left:-50px;
        border-bottom:1px double #fff;
        position:absolute;
}
.site-title:before{
        bottom:0;
}
.site-title:after{
        bottom:2px;
}
		.easyhtml5video {
			margin: 0 auto;
		}

	.modalDialog {
		position: fixed;
		font-family: Arial, Helvetica, sans-serif;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background: rgba(0,0,0,0.8);
		z-index: 99999;
		opacity:0;
		-webkit-transition: opacity 400ms ease-in;
		-moz-transition: opacity 400ms ease-in;
		transition: opacity 400ms ease-in;
		pointer-events: none;
	}

	.modalDialog:target {
		opacity:1;
		pointer-events: auto;
	}

	.modalDialog > div {
		width: 320px;
		position: relative;
		margin: 10% auto;
		padding: 5px 20px 13px 20px;
		border-radius: 10px;
		background: #00f;
		background: -moz-linear-gradient(#00f, #009);
		background: -webkit-linear-gradient(#00f, #009);
		background: -o-linear-gradient(#00f, #009);
	}

	.close {
		background: #606061;
		color: #FFFFFF;
		line-height: 25px;
		position: absolute;
		right: -12px;
		text-align: center;
		top: -10px;
		width: 24px;
		text-decoration: none;
		font-weight: bold;
		-webkit-border-radius: 12px;
		-moz-border-radius: 12px;
		border-radius: 12px;
		-moz-box-shadow: 1px 1px 3px #000;
		-webkit-box-shadow: 1px 1px 3px #000;
		box-shadow: 1px 1px 3px #000;
	}

	.close:hover { background: #00d9ff; }

	</style>

	<!-- Start VideoLightBox.com HEAD section -->
                <link rel="stylesheet" href="Videos/s1/index_videolb/videolightbox.css" type="text/css" />
		<link rel="stylesheet" type="text/css" href="Videos/s1/index_videolb/overlay-minimal.css"/>
		<script src="Videos/s1/index_videolb/jquery.js" type="text/javascript"></script>
		<script src="Videos/s1/index_videolb/swfobject.js" type="text/javascript"></script>
	<!-- End VideoLightBox.com HEAD section -->
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<!-- link rel="stylesheet" href="css/templatemo-style.css" -->
	<link rel="stylesheet" href="css/templatemo-style.live.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.singlePageNav.min.js"></script>
	<script src="js/typed.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>
</head>
<body id="top" class="sitesection-home">
	<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-wave">
     	 			<div class="sk-rect1"></div>
       				<div class="sk-rect2"></div>
       				<div class="sk-rect3"></div>
      	 			<div class="sk-rect4"></div>
      				<div class="sk-rect5"></div>
     			</div>
    		</div>
    	<!-- end preloader -->
        <!-- start header -->
		<header>
			<div class="container">
                		<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-12">
						<p><i class="fa fa-phone"></i><span> Phone</span><a href="tel:+18553973339">Call us free!</a></p>
					</div>
					<div class="col-md-3 col-sm-4 col-xs-12">
						<p><i class="fa fa-envelope-o"></i><span> Contact Us</span><a href="mailto:contactus@thegivingcycle.org">By Email</a></p>
					</div>
					<div class="col-md-5 col-sm-4 col-xs-12">
						<ul class="social-icon">
							<li><span>Meet us on</span></li>
							<li><a href="https://www.facebook.com/groups/1276366605710942/" class="fa fa-facebook"></a></li>
							<li><a href="https://twitter.com/thegivingcycle" class="fa fa-twitter"></a></li>
							<li><a href="https://www.instagram.com/thegivingcycle/" class="fa fa-instagram"></a></li>
							<!-- li><a href="#" class="fa fa-apple"></a></li -->
						</ul>
					</div>
				</div>
			</div>
		</header>
        <!-- end header -->

    	<!-- start navigation -->
		<nav class="navbar navbar-default templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="http://thegivingcycle.org" class="navbar-brand" style="background-color: #6cacde;"><img src="../../images/VforVictoryTransparent30h.png"></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#top">HOME</a></li>
						<li><a href="#project">PROJECT</a></li>
						<li><a href="#about">ABOUT</a></li>
						<li><a href="#service">CONTRIBUTE</a></li>
						<!-- li><a href="#portfolio">VIDEOS</a></li -->
						<li><a href="#mbn">MEMBERS</a></li>
						<li><a href="#problems">PROBLEMS</a></li>
						<li><a href="#team">TEAM</a></li>
						<li><a href="#contact">CONTACT</a></li>
					</ul>
				</div>
			</div>
		</nav>
	<!-- end navigation -->
	<!-- 2 stripes for branding -->
		<div style="background-image: url(images/greenbg.png); background-color: #149a77; height: 4rem; width: 100%; color: black; vertical-align: middle; text-align: center; font-size: 3rem; color: #999;"><a style="font-size: 1.5rem;" href="privacy.php" target="_blank">Privacy Policy</a> | <a style="font-size: 1.5rem;" href="terms.php" target="_blank">Terms</a> | <a style="font-size: 1.5rem;" href="refunds.php" target="_blank">Refunds</a> | <a style="font-size: 1.5rem;" target="_blank" href="members/register.php">Become a Member</a> | <a style="font-size: 1.5rem;" target="_blank" href="members/index.php">Member Login</a></div>
		<div style="background-image: url(images/dkredbg.png); height: 4rem; width: 100%; color: black;"></div>
	<!-- end 2 stripes for branding -->

	<!-- start home -->
		<section id="project">
			<div class="container">
				<div class="row">
					<div class="col-md-offset-2 col-md-8">
						<div align="center">
							<div class="container">
								<div class="row">
									<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
										<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>THE&nbsp;GIVING CYCLE CROWD FUNDING PROJECT</span><br><br>
										<a href="#mbn"><span>HELPING MEMBERS BUSINESSES NONPROFITS</span></h2></a>
									</div>
								</div>
							</div>
						</div>
						<h1 class="wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">Welcome To The World's<br><span>Eighth Business Model</span></h1>
						<div class="element">
							<font color="#98012e">
							<div class="sub-element">The Giving Cycle&trade;</div>
							</font>
							<div class="sub-element">Restoring America's Middle Class For Everyone</div>
							<div class="sub-element">Join, Shop, Gain, Share, and Know That You Made A Difference!</div>
						</div>
						<a data-scroll href="#about" class="btn btn-default wow fadeInUp" data-wow-offset="50" data-wow-delay="0.6s">LEARN MORE</a>
					</div>
				</div>
			</div>
		</section>
	<!-- end home -->

	<!-- start about -->
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">WE ARE <span>SEEKING YOUR CONTRIBUTIONS</span></h2>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<a href="#why"><i class="fa fa-question"></i></a>
								</div>
								<a href="#why"><h3 class="media-heading">HERE'S WHY WE NEED YOUR HELP</h3></a>
							</div>
							<div class="media-body">
								<p><b>TheGivingCycle.Org</b> was founded to create an economy that fairly benefits everyone who joins. Our nation is faced with multiple problems, many of which seem almost insurmountable. You want to help, but you don't know what to do, or how to start. Click the "?" Icon or Title line above for more details regarding "Our Purpose", "Our Causes", and "Our Beliefs".</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<a href="#why"><i class="fa fa-dollar"></i></a>
								</div>
								<h3 class="media-heading">HERE'S WHERE YOU CAN GIVE</h3>
							</div>
							<div class="media-body">
								<p>If you are looking to become part of the solution, and benefit yourself, your neighborhood and your nation, The Giving Cycle is how you can do just that. See our <a href="aboutus.php">About Us Page Video</a> for the best explanation of what we're doing and how it will benefit you and our country. Additionally, You can <a href="contribute.php">contribute here and know you made a difference</a>!</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-offset="50" data-wow-delay="0.9s">
						<div class="media">
							<div class="media-heading-wrapper">
								<div class="media-object pull-left">
									<!-- i class="fa fa-comment-o"></i -->
									<a href="#why"><i class="fa fa-volume-up"></i></a>
								</div>
								<h3 class="media-heading">HERE'S WHAT WE'LL DO WITH WHAT YOU GIVE</h3>
							</div>
							<div class="media-body">
								<p>We will be building our member website and adding all the features needed to provide the ultimate best user experience possible, and doing so as fast as possible. We will be linking up with businesses and nonprofits to provide benefits to our individual and family members as discussed in our <a href="#portfolio">two videos</a> below.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<!-- end about -->

     	<!-- start portfolio -->
     		<!-- section id="portfolio">
     			<div class="container">
     				<div class="row">
     					<div class="col-md-12">
     						<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>AWESOME</span> VIDEO STORY</h2>
     					</div>
     					<div class="col-md-4 col-sm-8 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                         			<div class="portfolio-thumb">
							<img src="images/portfolio-img1.jpg" class="img-responsive" alt="portfolio img 1">
                                 			<div class="portfolio-overlay">
                         					<!-- Start VideoLightBox.com BODY section -->
                         						<div class="videogallery">
                         							<a class="voverlay" href="Videos/s1/index_videolb/vdbplayer.swf?volume=100&url=video/victory_shortvideo.mp4" title="victory_shortvideo"><img src="Videos/s1/index_videolb/thumbnails/victory_shortvideo.png" alt="victory_shortvideo" /><span></span></a>
                         						</div>
                         						<script src="Videos/s1/index_videolb/jquery.tools.min.js" type="text/javascript"></script>
                         						<script src="Videos/s1/index_videolb/videolightbox.js" type="text/javascript"></script>
                         					<!-- End VideoLightBox.com BODY section -->
                                     				<h4>Short About Us Video (40 secs)</h4>
                                     				<a target="_blank" href="about.php" target="_blank" class="btn btn-default">DETAIL</a>
                                 			</div>
							"About Us" (The Short Version)
                         			</div>
     					</div>
     					<div class="col-md-4 col-sm-8 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                         			<div class="portfolio-thumb">
                            				<img src="images/portfolio-img2.jpg" class="img-responsive" alt="portfolio img 2">
							<div class="portfolio-overlay">
                         					<!-- Start VideoLightBox.com BODY section -->
                         						<div class="videogallery">
                         							<a class="voverlay" href="Videos/s1/index_videolb/vdbplayer.swf?volume=100&url=video/givingcyclevideo.mp4" title="givingcyclevideo"><img src="Videos/s1/index_videolb/thumbnails/givingcyclevideo.png" alt="givingcyclevideo" /><span></span></a>
                         						</div>
                         						<script src="Videos/s1/index_videolb/jquery.tools.min.js" type="text/javascript"></script>
                         						<script src="Videos/s1/index_videolb/videolightbox.js" type="text/javascript"></script>
                         					<!-- End VideoLightBox.com BODY section -->
                                     				<h4>More Detailed Video About This New Business Model (4.5 mins)</h4>
                                     				<a target="_blank" href="aboutus.php" class="btn btn-default">DETAIL</a>
                                 			</div>
                         			</div>
						More Details About Us
                     			</div>
                     			<div class="col-md-4 col-sm-8 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
                         			<div class="portfolio-thumb">
                            				<img src="images/portfolio-img4b.jpg" class="img-responsive" alt="portfolio img 4">
                                 			<div class="portfolio-overlay">
                                     				<h4>Come With Us</h4>
                                     				<p><b>Join TheGivingCycle.Org now, start your giving cycle, and prepare to receive!</b></p>
                                     				<a href="#mbn" class="btn btn-default">DETAIL</a>
                                 			</div>
                         			</div>
						Join Us On The Road To Prosperity
					</div>
				</div>
			</div>
     		</section -->
     	<!-- end portfolio -->

	<a name="mbn"></a>
    	<!-- start mbn -->
    		<section id="mbn">
    			<div class="container">
    				<div class="row">
    					<div class="col-md-12">
    						<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">MEMBERS <span>BUSINESSES</span> NONPROFITS</h2>
    					</div>
    					<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
    						<i class="fa fa-laptop"></i>
    						<h4>Members</h4>
    						<p>We are glad that you have come to our site and hope you agree with the many benefits in starting your own Giving Cycle as part of Victory In Giving's "The Giving Cycle" concept.</p>
						<p>We say this because we feature the World's 8th Business Model "The Giving Cycle Business Model" -patent pending. Our model is designed to become self-sustaining. We desire for it to benefit you, while allowing us, working together, to restore America's Middle Class in a more fair and balanced manner.</p>
						<p>This business model is NOT MLM (Network Marketing). It shall operate in a free market system, inclusive of the Shared Economy, and all of the top seven business models are categorized in it. We hope that you have watched <a href="#portfolio">our videos</a> which make clear what the giving cycle is about. The history and the actual business model diagram of how The Giving Cycle business model works and came about shall be revealed to our members first and made public on a later date.</p>
						<p>We desire to become the hub which will bring people, non-profits, and businesses together. We are setting out to monetarily enrich all three groups without changing what each one normally does. We know that there are better solutions to the problems individuals, families, non-profits, and businesses are facing every day. Utilizing two universal laws with Judeo-Christian principles within a free market economy, will allow us to help restore America's Middle Class.</p>
						<p>By joining Victory In Giving as a member, one automatically starts their own giving cycle.</p>
						<p>The Giving Cycle is not just a business, for myself (Nelson Parece), it is both a business and a ministry.</p>
						<p>Generally speaking, because of shareholders and boards of directors, businesses aren't able to do the good which many citizens believe they could and should do. We; however, are a business that shall do the good people normally wish businesses would do.</p>
						<p>We are glad that more and more businesses are becoming socially aware and choosing to share in bettering society by giving to causes that people and non-profits champion.</p>
						<p>The Giving Cycle is made up of three main groups of members:
							<ul>
								<li>Individuals and their families</li>
								<li>Businesses</li>
								<li>NonProfit Organizations</li>
							</ul>
						</p>
						<p><b>Individuals and their families</b><br>
						Members in this group receive their own social profile membership page, set their privacy choices within our site, go shopping and receive CASH REBATES, discounts, and bonuses which we or our affiliated businesses provide. We shall, also, begin to build a social safety net for this group of our members, and offer many services; many being free or at a low discounted group rate. Such members will have cash payments credited to their accounts when Victory In Giving sells any Good or Service to non-members. We desire to allow this group of members to enjoy their own self-interests within our site. One may look up the many causes and non-profits along with their rankings, and choose those which they desire to share a designated portion of a product's gross markup. On each and every purchase they will be able to give to their favorite causes, get a cash rebate, and receive discounts on all product purchases they normally make. Other benefits and features will be implemented as we continue to grow.</p>
    					</div>
    					<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">
    						<i class="fa fa-cloud"></i>
    						<h4>Businesses</h4>
    						<p><b>Here is why you should want your business to become a part of "The Giving Cycle"...</b></p>
						<p>It shows you care about your customers and our Nation, and that is good for your business.</p>
						<p>By doing so, you are helping to build a stronger and more prosperous Middle Class, and that is good for your business.</p>
						<p>Business Memberships will be divided by the type of business category which they operate in.</p>
						<p>Categories are:
							<ul>
								<li> Mining and Farming</li>
								<li> Manufacturing</li>
								<li> B2B, B-B2C, B2C Internet or Brick-and-Mortar</li>
								<li> Original Arts and Creations</li>
								<li> Services, Associations, Educational, MLM and Other Groups</li>
							</ul>
						Each will have a membership profile page, and be able to be placed in our free advertising cache.</p>
						<p>Business members may utilize different services, tools, and may custom tailor needs with VIG and/or one of its affiliated businesses.</p>
						<p>Let us work together so we may help you find better ways to show you care, while attracting more customers to your business.</p>
						<p>Even if it's sharing just a little, it sends a powerful message that you are willing to THANK those who make possible your success.</p>
    					</div>
    					<div class="col-md-4 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
    						<i class="fa fa-cog"></i>
    						<h4>NonProfits</h4>
						<p>We offer Non-Profits new ways in which they can receive contributions.</p>
						<p>As you will read in the "Individuals and their families" member section here, a portion of purchases made by those members is contributed to nonprofits they select.</p>
						<p>Non-Profit members receive free advertising, and are able to post content and announcements regarding their organization and events. This lets our individual and family members know about you. Thus, by participating in the ways we offer you to make our members aware of your nonprofit organization, you can increase your current donors and your bottom line.</p>
						<p>Additionally, when Victory in Giving "<i>features</i>" a non-profit on our site, "TheGivingCycle.org", the featured nonprofit member organization will receive the set portion Victory In Giving contributes to non-profits from the sales to non-members for the length of time it is featured.</p>
						<p>We hope you will join us in restoring America's Middle Class.</p>
						<p>We desire to work alongside all three groups of our members.</p>
    					</div>
    				</div>
    			</div>
    		</section>
    	<!-- end mbn -->


    	<!-- start service -->
<a name="why"></a>
    	<section id="service">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">ABOUT OUR <span>AWESOME CROWD FUNDING</span> PROJECT<br>
    					We Need <span>Your Help!</span></h2>
    				</div>
    				<div class="col-md-3 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
    					<i class="fa fa-question"></i>
    					<h4>Why We Seek Funds</h4>
    					<b><p>The Middle Class has always been the engine that drove our nation's success. Over the last few generations, as the Middle Class grew smaller and weaker, so did the nation's economy, and the opportunities of the Middle Class.</p>
					<p>We believe that our Middle Class needs to be restored, and we believe that with your help, we can restore it! Before we can do this, we must complete our websites, gather resources for our soon-to-be members, prepare the marketing, and announce it when we're ready to launch.</p>
					<p>To do that requires money, and all this is why we're seeking funding from you. This business model will be self-sustaining. We just want good people, like you, who see the vision, care about it, and want to help get it off the ground. So, please, reach into your pocket and contribute whatever you can.
</p></b>
    				</div>
    				<div class="col-md-3 wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">
    					<i class="fa fa-volume-up"></i>
    					<h4>How We Will Spend Funds</h4>
    					<b><p>We will complete our member site, add the functionality it needs, and launch it ASAP! We hope to release the initial version of the site no later than the end of September 2016.</p>
					<p>We are a Sharing Community where Power, Money, and People can help change our Nation and the World; Helping Society by Helping You, Non-Profits, and Businesses to Prosper.</p>
					<p>At The Giving Cycle, we believe that the best place to begin to fix the problems in our country and our society is to restore the American Middle Class.</p>
					<p>For a short, to-the-point explanation, see our video, <a href="#portfolio">"The Short Version"</a>, below.</p></b>
    				</div>
    				<div class="col-md-3 wow fadeIn" data-wow-offset="50" data-wow-delay="0.9s">
    					<i class="fa fa-volume-up"></i>
    					<h4>What We Are About</h4>
    					<b><p>More than anything else, The Giving Cycle is an opportunity.</p>
					<p>More specifically, it is your opportunity to be a part of the solution to the restore and strengthen our country's Middle Class while, also, benefiting you and your family.</p>
					<p>The Giving Cycle&trade; is a new business model from Victory In Giving&trade;. It is designed to connect all segments of our economy, and our greater society at large. It is intended to create profitable relationships between individuals, businesses, and non-profits.</p>
					<p>To get more details about our new business model, and how it will benefit our country, and more specifically, you, take a look at our <a href="#portfolio">"More Details" video.</a></p></b>
    				</div>
    				<div class="col-md-3 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
    					<i class="fa fa-dollar"></i>
    					<h4>Contribute Here</h4>
    					<b>
					<p>You can give $10.00, $25.00, or more. We need to raise $90,000.00 to complete the work so that we can then quickly begin to provide the benefits mentioned and restore America's Middle Class!</p>
					<p><i>Join, Shop, Gain, Share. Make a difference! Contribute To TheGivingCycle.org Now!</i></p>
					<p>On the chance that there's an <i>angelic person</i> out there who might just want to fund our whole campaign, here's a contribution button for that. Of course, it comes with a lifetime membership!<br>

				<div align="center">
					Contribute $90,000.00<br>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="88PXUTXF9A39W">
					<input type="image" src="http://thegivingcycle.org/images/contribute-button-150x51.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
					<br><p>...and, of course, this contribution comes with ALL Founding Member Benefits and a lifetime membership!</p>
				</div>

					<p>Other contribution options are below.</p>
					</b>
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">Additional <span>Contribution</span> Options<br>
					Please <span>Contribute As Much As You Can<span>, And THANK YOU!</h2>
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">BECOME A <span>FOUNDING MEMBER</span> NOW!</h2>
<p><b>Any pre-launch contribution makes the contributor a <i>FOUNDING MEMBER</i> automatically as long as they eventually contribute a minimum total of $99 by December 31, 2016 and within the additional time limits below related to each contribution amount.</b></p>
<h3 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
Benefits of The <i>Founding Membership</i>
</h3>
<ul>
<li> Lock in annual membership at $99 per year for life
<li> Every 5th year free
<li> Direct access to top management via private phone number and email address no one else will have
<li> Additional benefits come with contribution levels above $99
</ul>
				</div>
			</div>
    			<div class="row">
				<p>&nbsp;</p>
			</div>

	<div class="row">
    		<div class="col-md-3 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
			<div align="center" style="border: 2px solid #73AD21; border-radius: 25px;">
				Contribute $5,000.00<br>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="3RVD889PHSA6U">
				<input type="image" src="http://thegivingcycle.org/images/contribute-button-150x51.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
				<br>
				<p>A contribution at this level provides a <b><i>LIFETIME FOUNDING MEMBERSHIP</i></b> in addition to other great Founding Member benefits.</p>
				<p>&nbsp;</p>
			</div>
    		</div>
    		<div class="col-md-3 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
			<div align="center" style="border: 2px solid #73AD21; border-radius: 25px;">
				Contribute $800.00<br>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="HJSBGU2Y5THG4">
				<input type="image" src="http://thegivingcycle.org/images/contribute-button-150x51.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
				<br>
				<p>A contribution at this level provides a 10 year paid <i>Founding Membership</i> in addition to other great Founding Member benefits.</p>
				<p>&nbsp;</p>
			</div>
    		</div>
    		<div class="col-md-3 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
			<div align="center" style="border: 2px solid #73AD21; border-radius: 25px;">
				Contribute $400.00<br>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="DGEL72V9XTLPW">
				<input type="image" src="http://thegivingcycle.org/images/contribute-button-150x51.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
				<br>
				<p>A contribution at this level provides a 5 year paid <i>Founding Membership</i> in addition to other great Founding Member benefits.</p>
				<p>&nbsp;</p>
			</div>
    		</div>
    		<div class="col-md-3 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
			<div align="center" style="border: 2px solid #73AD21; border-radius: 25px;">
				Contribute $99.00<br>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="UQ5SVB8NT9GAW">
				<input type="image" src="http://thegivingcycle.org/images/contribute-button-150x51.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
				<br>
				<p>A $99 contribution makes user an automatic full founding member, and locks in their annual membership price at $99 per year for life. By making such a contribution during our pre-launch, your membership is automatically paid up through December 31, 2017. Founding members receive other special benefits, as well. (See list above.)</p>
				<p>&nbsp;</p>
			</div>
    		</div>
    	</div>
    	<div class="row">
		<p>&nbsp;</p>
	</div>
	<div class="row">
    		<div class="col-md-3 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
			<div align="center" style="border: 2px solid #73AD21; border-radius: 25px;">
				Contribute $50.00<br>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="9QW49KCHBM7V4">
				<input type="image" src="http://thegivingcycle.org/images/contribute-button-150x51.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
				<br>
				Within 180 days (6 months) of this contribution (or by December 31st, 2016, whichever comes first), if you reach a total of $99 contributed, then you will qualify for and receive an annual founding membership.
				<p>&nbsp;</p>
			</div>
    		</div>
    		<div class="col-md-3 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
			<div align="center" style="border: 2px solid #73AD21; border-radius: 25px;">
				Contribute $25.00<br>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="99NYCP7AHD5AN">
				<input type="image" src="http://thegivingcycle.org/images/contribute-button-150x51.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
				<br>
				Within 90 days (3 months) of this contribution (or by December 31st, 2016, whichever comes first), if you reach a total of $99 contributed, then you will qualify for and receive an annual founding membership.
				<p>&nbsp;</p>
			</div>
    		</div>
    		<div class="col-md-3 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
			<div align="center" style="border: 2px solid #73AD21; border-radius: 25px;">
				Contribute $10.00<br>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="B9B5YPQR6B8D6">
				<input type="image" src="http://thegivingcycle.org/images/contribute-button-150x51.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
				<br>
				Within 30 days of this contribution (or by December 31st, 2016, whichever comes first), if you reach a total of $99 contributed, then you will qualify for and receive an annual founding membership.
				<p>&nbsp;</p>
			</div>
    		</div>
    		<div class="col-md-3 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
			<div align="center" style="border: 2px solid #73AD21; border-radius: 25px;">
				Contribute Any Amount You Specify<br>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="F7AAJZWTLC97U">
				<input type="image" src="http://thegivingcycle.org/images/contribute-button-150x51.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
				<p>A minimum $99 contribution makes user an automatic full founding member, and locks in their annual membership price at $99 per year for life. Larger contributions come with additional benefits as described in the other contribution options here. By making such a contribution during our pre-launch, your membership is automatically paid up through December 31, 2017. Founding members receive other special benefits, as well. (See list above.) Of course, we will accept any amount you generously give!</p>
				<p>&nbsp;</p>
			</div>
    		</div>
    	</div>

<p>&nbsp;</p>
<p>NOTE: Contributions are not presently tax deductible - that is why we are giving you the benefits such as founding membership, price lock, etc. - As soon as we receive our approval from the government for our non-profit status, you will be notified by email.</p>
    		</div>
    	</section>
    	<!-- end service -->

	<!-- start problems -->
		<div class="container">
		    	<section id="problems">
		    		<div class="container">
		    			<div class="row">
		
		    				<div class="col-md-12">
		    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>Problems</span> Facing Our Country And Society</h2>
		    				</div>

		    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
		                        		<div class="problems-thumb">
		    						<img src="images/freejobtraining.jpg" class="img-responsive" alt="problems img 1">
		                                		<div class="problems-overlay">
									<h4>Project One</h4>
									<p><b><i>The Job Situation</i></b></p>
									<a href="#openModaljobs" class="btn btn-default">DETAIL</a>
								</div>
							</div>
						</div>
						<div id="openModaljobs" class="modalDialog">
							<div>
								<a href="#close" title="Close" class="close">X</a>
								<h2>Jobs</h2>
								<p>Everyone knows that jobs continue to be hard to come by. The Bureau of Labor Statistics (www.bls.gov/news.release/pdf/empsit.pdf) reported on July 8th, 2016, that while the number of available jobs appears to have increased, so has unemployment. Wikipedia has an article called, "Solutions for creating more U.S. jobs" and there are good suggestions in it. We, too, have some ideas about how to begin to address this problem, and some suggestions we'll make available to our members. However, we also need our members, whether individuals, businesses, or non-profits, to help us with their suggestions.</p>
							</div>
						</div>
						<div>
		    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
							<div class="problems-thumb">
								<img src="images/privacy.jpg" class="img-responsive" alt="problems img 2">
								<div class="problems-overlay">
									<h4>Project Two</h4>
									<p><b><i>The Decline of Privacy</i></b></p>
									<a href="#openModal" class="btn btn-default">DETAIL</a>
								</div>
							</div>
						</div>
						<div id="openModal" class="modalDialog">
							<div>
								<a href="#close" title="Close" class="close">X</a>
								<h2>The Decline of Privacy</h2>
								<p>With the Surveillance State growing exponentially over the last decade in the way of drones, the TSA, the PATRIOT Act, stop-and-frisk, and other similar legislation, this has now become a serious issue. The Fourth Amendment is being thrown by the wayside in the name of "security."  These policies do little-if-not-nothing to make us safer, and put us on a slippery slope toward an Orwellian police state where big brother is always watching you. It is never irrelevant to quote Benjamin Franklin, when he said, "They who can give up essential liberty to obtain a little temporary safety, deserve neither liberty nor safety." -- We fully believe in your right to privacy! That's one of the things that we stress here. Read our <a target="_blank" href="privacy.php">Privacy Policy</a>.</p>
							</div>
						</div>
						<div>
		    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
		                        		<div class="problems-thumb">
		    						<img src="images/Pledge-of-Allegiance.jpg" class="img-responsive" alt="problems img 3">
		                                		<div class="problems-overlay">
									<h4>Project Three</h4>
									<p><b><i>Big Government vs. Small Government</i></b></p>
									<a href="#openModal2" class="btn btn-default">DETAIL</a>
								</div>
							</div>
						</div>
		<div id="openModal2" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h2>Big Government vs. Small Government</h2>
				<p>From an article by Frank Vernuccio, called America's Solvable Problems, we quote him here... "In large part, the American success story is based on the concept that the individual, not the government, is sovereign, and the greatest judge of his own well-being. Government intervention in daily life was conceptually and constitutionally limited to what was strictly necessary, primarily in areas covering defense or other emergencies, the establishment of a fair judicial system to end disputes and punish crime, and to promote the advance of this new civilization. Alexis de Tocqueville, who travelled to young America from France in 1831, marveled that “What most strikes the European who travels across the United States is the absence of what among us we call government or administration." ...While that doesn't fit in with the administration of the last 8 years (minimum), it is our view that reduction in government size and regulation, especially in the area of Small Business, Medical Insurance, and personal lives, is sorely needed. Become our member and help us fight to return America to greatness based on the sovereignty of the individual.</p>
			</div>
		</div>
						<div>
		    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
							<div class="problems-thumb">
								<img src="images/housingcrisis.jpg" class="img-responsive" alt="problems img 4">
								<div class="problems-overlay">
									<h4>Project Four</h4>
									<p><b><i>Another Housing Crisis</i></b></p>
									<a href="#openModal3" class="btn btn-default">DETAIL</a>
								</div>
							</div>
						</div>
		<div id="openModal3" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h2>Another Housing Crisis</h2>
				<p>The result of government mismanagement and bad business practices, the sub-prime mortgage crises (or the Housing Bubble Burst) became the major cause of economic downturn for the United States in 2007 and 2008. The Federal Reserve has decided to double down on these policies, by spending billions of dollars a month to buy up mortgage backed securities. Peter Schiff says this is an attempt to re-inflate the bubble that already burst, and could cause another collapse of similar proportions. We need our members to help us find new ways to solve problems like this before it's too late!</p>
			</div>
		</div>
		
		    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
		                        		<div class="problems-thumb">
		    						<img src="images/broken2partysys.jpg" class="img-responsive" alt="problems img 3">
		                                		<div class="problems-overlay">
									<h4>Project Five</h4>
									<p><b><i>The Broken Two-Party System</i></b></p>
									<a href="#openModal4" class="btn btn-default">DETAIL</a>
								</div>
							</div>
						</div>
		<div id="openModal4" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h2>The Broken Two-Party System</h2>
				<p>As Congressman Ron Paul asked in his farewell speech to Congress: "Why does changing the party in power never change policy? Could it be that the views of both parties are essentially the same?" The answer is yes. While Republicans and Democrats often tout very different rhetoric, and pretend to represent vastly different visions of government, both parties have frighteningly similar policies which have contributed to our demise: deficit spending, high taxation, endless wars, unfunded liabilities, destruction of civil liberties, broken monetary policy, corporate welfare ... cronyism, nepotism, despotism. -- Since this is the circumstance we face, and we cannot depend on politicians to solve problems, we will make every effort to reunify our people and our country with our members' help! That is why we're doing what we're doing here!</p>
			</div>
		</div>
		    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
							<div class="problems-thumb">
								<img src="images/1solutionforhomelessness.jpg" class="img-responsive" alt="problems img 4">
								<div class="problems-overlay">
									<h4>Project Six</h4>
									<p><b><i>Homelessness</i></b></p>
									<a href="#openModal5" class="btn btn-default">DETAIL</a>
								</div>
							</div>
						</div>
		<div id="openModal5" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h2>Homelessness</h2>
				<p>Homelessness is a Solvable Problem! While most people think of homelessness in terms of single men, roughly a third of the homeless population is made up of families, many of them headed by single parents. Families represent an especially vulnerable segment of the homeless population because of the presence of children. Homelessness is a solvable national problem, but the needed resources have not been forthcoming from the federal government. (http://americamagazine.org/issue/605/editorial/homelessness-solvable-problem) -- We believe at The Giving Cycle that together with our members, we can help affect this problem in a positive way. Join us and give us your suggestions!</p>
			</div>
		</div>
		    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
		                        		<div class="problems-thumb">
		    						<img src="images/hungersolved.jpg" class="img-responsive" alt="problems img 1">
		                                		<div class="problems-overlay">
									<h4>Project Seven</h4>
									<p><b><i>Hunger in America</i></b></p>
									<a href="#openModal6" class="btn btn-default">DETAIL</a>
								</div>
							</div>
						</div>
		<div id="openModal6" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h2>Hunger in America</h2>
				<p>Hunger in America is a solvable problem. In the richest, most agriculturally-productive nation on earth, it should stand as a point of national shame that we have any households struggling to put food on the table at all. Ensuring access to nutritious food is essential to productivity, health, and social functioning for those in all stages of life. Nutritious food means higher academic performance for kids, healthier workers for America’s businesses, and a senior population that can age independently in their own homes instead of in hospitals or institutions. (http://thehill.com/blogs/congress-blog/healthcare/218926-past-time-to-solve-hunger-in-america) -- Become our member at The Giving Cycle and help us find new ways to work toward solving this problem!</p>
			</div>
		</div>
		    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="0.6s">
							<div class="problems-thumb">
								<img src="images/restoringconstitutionalism.jpg" class="img-responsive" alt="problems img 2">
								<div class="problems-overlay">
									<h4>Project Eight</h4>
									<p><b><i>Restoring Constitutionalism</i></b></p>
									<a href="#openModal7" class="btn btn-default">DETAIL</a>
								</div>
							</div>
						</div>
		<div id="openModal7" class="modalDialog">
			<div>
				<a href="#close" title="Close" class="close">X</a>
				<h2>Restoring Constitutionalism</h2>
				<p>There is simply no issue more pressing to our time than restoring the principles held by our founding fathers and getting back to the Constitution. The fact that we have come so far away from these principles is the number one detriment to our society, and likely the cause of most, if not all of the problems we are facing. As the legitimacy of government is granted by the people, Constitutionalism demands that government power be limited and the people be free. This is the only practical path to liberty and prosperity.</p>
			</div>
		</div>
		<p>&nbsp;</p>
		<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>We Must</span> Take Action!</h2>
		<p>We all love our country. Some of us served in the Armed Forces, and were happy to serve. We love what it means to be an American, but whether you think that America is the greatest country in the world or not, you're probably right. There are many things that make America a great place to live, but there are a number of issues which we face, and will continue to face, that are sending us down a road towards mediocrity (and even failure).</p>
		<p>In a country where our discourse has become divided, and has recently scattered into a spider web of varying political thought, we are faced with a great deal of issues - some more important than others.</p>
		<p><b><i>Addressing these issues specifically would allow the United States to lead by example, and inevitably restore America to what once made it great.</i></b></p>
		<img src="images/childborder.jpg" alt="we love our children" align="right" class="img-responsive">
		<p><b><i>Clearly there are many problems in our country and these are but a few. However, we seek to address these issues and more, but we need your help! Using our new business model and with you and other people working collectively together, volunteering, meeting at events, and letting "The Giving Cycle Business Model" put money in your pocket, we can overcome these problems, one by one, a little at a time. Join Us! Then Feel Good, Knowing You Have Made A Difference!</i></b></p>
		<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>Help Us</span> Restore The American Middle Class <span>And Our Country</span> To Greatness While Helping <span>You And Your Family!</span></h2>
		    			</div>
		    		</div>
		    	</section>
		</div>
	<!-- end problems -->

    	<!-- start team -->
    	<section id="team">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">OUR <span>AWESOME</span> TEAM</h2>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
    					<div class="team-wrapper">
    						<img src="images/NelsonParece.jpg" class="img-responsive" alt="team img 1">
    							<div class="team-des">
    								<h4>NELSON PARECE</h4>
    								<span>Founder</span>
    								<p>Founder of Victory In Giving, LLC and TheGivingCycle.Org. Creator of our new business model which will benefit individuals, families, non-profit organizations, and businesses while restoring America's Middle Class.</p>
    							</div>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
    					<div class="team-wrapper">
    						<img src="images/jesse.jpg" class="img-responsive" alt="team img 2">
    							<div class="team-des">
    								<h4>JESSE JOSSERAND</h4>
    								<span>Development</span>
    								<p>Responsive Website Designer, Database Engineer, Programming Wild Man, IT experience since 1971. Favorite Quote: 'Never Give Up! Never Surrender!'</p>
    							</div>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
    					<div class="team-wrapper">
    						<img src="images/MarkCollins.jpg" class="img-responsive" alt="team img 3">
    							<div class="team-des">
    								<h4>MARK COLLINS</h4>
    								<span>SEO Expert</span>
    								<p>SEO guru for on site content and off site web presence enhancement via internet PR, social media, video and blogging. Blending creative flair with technical data to produce inspiring internet prose.</p>
    							</div>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
    					<div class="team-wrapper">
    						<img src="images/jimvan.jpg" class="img-responsive" alt="team img 4">
    							<div class="team-des">
    								<h4>JIM VAN</h4>
    								<span>Infrastructure</span>
    								<p>Internet Architect and Network Administrator with aspirations of Warlord and Supreme Ruler of the Universe. Provides data center support for our websites and the servers they run on.</p>
    							</div>
    					</div>
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-md-12">
    					<h3 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>&nbsp;</span>&nbsp;</h3>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
    					<div class="team-wrapper">
    						<img src="images/Barbara.jpg" class="img-responsive" alt="team img 1">
    							<div class="team-des">
    								<h4>BARBARA</h4>
    								<span>Itinerate Minister<br>Bible Teacher<BR>Our Prayer Warrior</span>
    								<p>"For it is in giving that we receive."<BR>--Francis of Assisi</p>
    							</div>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
    					<div class="team-wrapper">
    						<img src="images/Tamara.jpg" class="img-responsive" alt="team img 2">
    							<div class="team-des">
    								<h4>TAMARA</h4>
    								<span>Sales and Marketing</span>
    								<p>South Florida Area Sales and Marketing. No one cares how much you know until they know how much you care.  VIG ~ The Giving Cycle cares.  We are all awesome.  Come together with us!</p>
    							</div>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.3s">
    					<div class="team-wrapper">
    						<img src="images/teamlogo.jpg" class="img-responsive" alt="team img 3">
    							<div class="team-des">
    								<h4>ANDREA</h4>
    								<span>Graphics</span>
    								<p>Beautifully taking our rough concepts and drawings, and expertly transforming them digitally.</p>
    							</div>
    					</div>
    				</div>
    				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-offset="50" data-wow-delay="1.6s">
    					<div class="team-wrapper">
    						<img src="images/RichardAustin.jpg" class="img-responsive" alt="team img 4">
    							<div class="team-des">
    								<h4>RICH AUSTIN</h4>
    								<span>Content Provider</span>
    								<p>President, "Speaking of Success, LLC" dedicated to helping individuals and companies focus and hone their message through public speaking, networking, and written content.</p>
    							</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end team -->

    	<!-- start contact -->
    	<section id="contact">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
    					<h2 class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s"><span>CONTACT US</span></h2>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-offset="50" data-wow-delay="0.9s">
    					<form action="<?php print $_SERVER["PHP_SELF"]; ?>" method="post">
    						<label>NAME</label>
    						<input name="fullname" type="text" class="form-control" id="fullname">
   						  	
                            <label>EMAIL</label>
    						<input name="email" type="email" class="form-control" id="email">
   						  	
                            <label>MESSAGE</label>
    						<textarea name="message" rows="4" class="form-control" id="message"></textarea>
    						
                            <input type="submit" name="Submit" value="Submit" class="form-control">
    					</form>
    				</div>
    				<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-offset="50" data-wow-delay="0.6s">
    					<address>
    						<p class="address-title">OUR ADDRESS</p>
    						<span>We can be contacted at any time by phone, email, or regular mail using the phone and address information here.</span>
    						<p><i class="fa fa-phone"></i> 855-397-3339</p>
    						<p><i class="fa fa-envelope-o"></i> ContactUs@TheGivingCycle.Org</p>
    						<p><i class="fa fa-map-marker"></i> 333 Las Olas Way, CU1, Fort Lauderdale, FL. 33301</p>
    					</address>
<div align="center">
    					<ul class="social-icon">
    						<li><h4>WE ARE SOCIAL</h4></li><br>
    						<li><a href="https://www.facebook.com/groups/1276366605710942/" class="fa fa-facebook"></a></li>
    						<li><a href="https://twitter.com/thegivingcycle" class="fa fa-twitter"></a></li>
    						<li><a href="https://www.instagram.com/thegivingcycle/" class="fa fa-instagram"></a></li>
    					</ul>
</div>
    				</div>
    			</div>
    		</div>
    	</section>
    	<!-- end contact -->

			<!-- the giving cycle landing page -->
	<div class="site-wrapper">
		<main role="main" style="background-color:#161616;padding:0 !important;" class="site-body">
		<div style="z-index:-1;" class="container landing-height">
			<div id="bg" style="background-color:transparent;height:100%;width:100%;position:absolute;overflow:hidden;z-index:-1;"></div>
			<div id="wrapper" style="background-color:#161616;">
				<div id="mockup" style="background:#161616;">
                                        <?php
//success=0 if email sent
//success=1 if email field blank on submit
//success=2 if did not pass filter_validate_email, error occurred, mail did not send, try again
//success=3 if not yet submitted
                                        if ( $success == 0 ) {
                                        ?>
                                        <div align="center" style="color:white">Email Sent</div>
                                        <?php
                                        } elseif ( $success == 1 ) {
                                        ?>
                                        <div align="center" style="color:white">Email Required, Try Again.</div>
                                        <?php
                                        }
                                        ?>
					<div id="circle" style="position:relative;margin-left:auto;margin-right:auto;width:100%;background-color:#161616;">
						<div id="members" class="slideshow-1200"><img src="images/members2-1200.png" tppabs="http://www.thegivingcycle.com/images/members2-1200.png" width="100%" style="position:absolute;"></div>
						<div id="members" class="slideshow-680"><img src="images/members2-680.png" tppabs="http://www.thegivingcycle.com/images/members2-680.png" width="100%" style="position:absolute;"></div>
						<div id="members" class="slideshow-460"><img src="images/members2-460.png" tppabs="http://www.thegivingcycle.com/images/members2-460.png" width="100%" style="position:absolute;"></div>
						<div id="members3" class="slideshow-1200"><img src="images/members3-1200.png" tppabs="http://www.thegivingcycle.com/images/members3-1200.png" width="100%" style="position:absolute;"></div>
						<div id="members3" class="slideshow-680"><img src="images/members3-680.png" tppabs="http://www.thegivingcycle.com/images/members3-680.png" width="100%" style="position:absolute;"></div>
						<div id="members3" class="slideshow-460"><img src="images/members3-460.png" tppabs="http://www.thegivingcycle.com/images/members3-460.png" width="100%" style="position:absolute;"></div>
						<div id="members4" class="slideshow-1200"><img src="images/members4-1200.png" tppabs="http://www.thegivingcycle.com/images/members4-1200.png" width="100%" style="position:absolute;"></div>
						<div id="members4" class="slideshow-680"><img src="images/members4-680.png" tppabs="http://www.thegivingcycle.com/images/members4-680.png" width="100%" style="position:absolute;"></div>
						<div id="members4" class="slideshow-460"><img src="images/members4-460.png" tppabs="http://www.thegivingcycle.com/images/members4-460.png" width="100%" style="position:absolute;"></div>
						<div id="business" class="slideshow-1200"><img src="images/business2-1200.png" tppabs="http://www.thegivingcycle.com/images/business2-1200.png" width="100%" style="position:absolute;"></div>
						<div id="business" class="slideshow-680"><img src="images/business2-680.png" tppabs="http://www.thegivingcycle.com/images/business2-680.png" width="100%" style="position:absolute;"></div>
						<div id="business" class="slideshow-460"><img src="images/business2-460.png" tppabs="http://www.thegivingcycle.com/images/business2-460.png" width="100%" style="position:absolute;"></div>
						<div id="business3" class="slideshow-1200"><img src="images/business3-1200.png" tppabs="http://www.thegivingcycle.com/images/business3-1200.png" width="100%" style="position:absolute;"></div>
						<div id="business3" class="slideshow-680"><img src="images/business3-680.png" tppabs="http://www.thegivingcycle.com/images/business3-680.png" width="100%" style="position:absolute;"></div>
						<div id="business3" class="slideshow-460"><img src="images/business3-460.png" tppabs="http://www.thegivingcycle.com/images/business3-460.png" width="100%" style="position:absolute;"></div>
						<div id="business4" class="slideshow-1200"><img src="images/business4-1200.png" tppabs="http://www.thegivingcycle.com/images/business4-1200.png" width="100%" style="position:absolute;"></div>
						<div id="business4" class="slideshow-680"><img src="images/business4-680.png" tppabs="http://www.thegivingcycle.com/images/business4-680.png" width="100%" style="position:absolute;"></div>
						<div id="business4" class="slideshow-460"><img src="images/business4-460.png" tppabs="http://www.thegivingcycle.com/images/business4-460.png" width="100%" style="position:absolute;"></div>
						<div id="nonprofits" class="slideshow-1200"><img src="images/nonprofits2-1200.png" tppabs="http://www.thegivingcycle.com/images/nonprofits2-1200.png" width="100%" style="position:absolute;"></div>
						<div id="nonprofits" class="slideshow-680"><img src="images/nonprofits2-680.png" tppabs="http://www.thegivingcycle.com/images/nonprofits2-680.png" width="100%" style="position:absolute;"></div>
						<div id="nonprofits" class="slideshow-460"><img src="images/nonprofits2-460.png" tppabs="http://www.thegivingcycle.com/images/nonprofits2-460.png" width="100%" style="position:absolute;"></div>
						<div id="nonprofits3" class="slideshow-1200"><img src="images/nonprofits3-1200.png" tppabs="http://www.thegivingcycle.com/images/nonprofits3-1200.png" width="100%" style="position:absolute;"></div>
						<div id="nonprofits3" class="slideshow-680"><img src="images/nonprofits3-680.png" tppabs="http://www.thegivingcycle.com/images/nonprofits3-680.png" width="100%" style="position:absolute;"></div>
						<div id="nonprofits3" class="slideshow-460"><img src="images/nonprofits3-460.png" tppabs="http://www.thegivingcycle.com/images/nonprofits3-460.png" width="100%" style="position:absolute;"></div>
						<div id="nonprofits4" class="slideshow-1200"><img src="images/nonprofits4-1200.png" tppabs="http://www.thegivingcycle.com/images/nonprofits4-1200.png" width="100%" style="position:absolute;"></div>
						<div id="nonprofits4" class="slideshow-680"><img src="images/nonprofits4-680.png" tppabs="http://www.thegivingcycle.com/images/nonprofits4-680.png" width="100%" style="position:absolute;"></div>
						<div id="nonprofits4" class="slideshow-460"><img src="images/nonprofits4-460.png" tppabs="http://www.thegivingcycle.com/images/nonprofits4-460.png" width="100%" style="position:absolute;"></div>
					<img src="images/vig-fg2.png" tppabs="http://www.thegivingcycle.com/images/vig-fg2.png" width="100%" style="position:absolute;">
					</div>
				</div>
				<a href="#mbn"><div id="members-selector"></div></a>
				<a href="#mbn"><div id="business-selector"></div></a>
				<a href="#mbn"><div id="nonprofit-selector"></div></a>
			</div>
		</div>
	</div>
	<!-- /div -->

        <!-- start copyright -->
        <footer id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
			<p class="wow bounceIn" data-wow-offset="50" data-wow-delay="0.3s">
                        Copyright &copy; 2015-2016 By VictoryInGiving.Com and TheGivingCycle.Org. All Rights Reserved.</p>
<div align="center" style="background-image:none;background-color:#161616;padding:10%;border-top:solid 0px #CCC;" class="hero-background">
<img src="images/join-shop-gain-share.png" tppabs="images/join-shop-gain-share.png" class="img-responsive">
</div>
</section>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end copyright -->

</main>

<script>
  (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
    t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
  })(window, document, '_gscq','script','//widgets.getsitecontrol.com/49909/script.js');
</script>

	</body>
</html>
