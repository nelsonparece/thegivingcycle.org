<?
//index.php
// emailtid is email tracking id and is set if user comes to this page from an email link.
// if emailtid is set, then firstname, lastname, and emailaddress should, also, be set.
// if set, grab the data in order to create user as free member, if not already done.
if (isset($_GET['emailtid'])) {
	//user probably came from email link
	$emailtid = $_GET['emailtid'];
	$firstname = $_GET['firstname'];
	$lastname = $_GET['lastname'];
	$emailaddress = $_GET['emailaddress'];
	// if affid is set, then user came here from an email referral link sent from referral form.
	if (isset($_GET['emailtid'])) {
		$affid = $_GET['affid'];
	}
}
?>
<!DOCTYPE HTML>
<HTML LANG="en">
<HEAD>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Restoring America’s Middle Class | Online Shopping Cash Rebates | The Giving Cycle</title>
<meta name="generator" content="Bootply" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<meta name="keywords" content="">
<meta name="description" content="TheGivingCycle.org creates an economy that fairly benefits members, charitable organizations and businesses who contribute to the program.You earn cash online shopping rebates AND can support your favorite charitable organizations as well.">
<!--
Online Shopping Cash Rebates, 
Fundraising Ideas for Charitable Organizations
-->

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link href="css/styles.css" rel="stylesheet">

<?php include("js/ga.js"); ?>

</head>
<body>

<?php include("inc/newtopnav.inc"); ?>

<!-- 4 stripes for branding -->
<div class="text-center" style="height: 4rem; width: 100%; color: white; vertical-align: middle; text-align: center; font-size: 3rem; background-color: #ecb212;">Interests And Education</div><!-- gold -->
<div class="text-center" style="height: 4rem; width: 100%; color: white; vertical-align: middle; text-align: center; font-size: 3rem; background-color: #6cacde;">Philanthropy</div><!-- blue -->
<div class="text-center" style="height: 4rem; width: 100%; color: white; vertical-align: middle; text-align: center; font-size: 3rem; background-color: #149a77;">Discount Shopping</div><!-- green -->
<div class="text-center" style="height: 4rem; width: 100%; color: white; vertical-align: middle; text-align: center; font-size: 3rem; background-color: #98012e;">Social Interaction</div><!-- red -->
<!-- end 4 stripes for branding -->

<div class="container">
	<div class="row">
		<div class="text-center">
			<h1>The Giving Cycle&trade;<br>Crowd Funding Project</h1>
		</div>
	</div>
</div>

<div style="margin-top: 3rem; margin-bottom: 3rem; !important;"></div>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 col-xs-12">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe src="https://www.youtube.com/embed/yweyk4Pdq6M?rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div><!-- /.row -->
</div><!-- /.container -->

<div style="margin-top: 3rem; margin-bottom: 3rem; !important;"></div>

<div class="container">
	<div class="row">
		<div class="text-center">
			<h1>Welcome To The Giving Cycle</h1>
			<h2>We Need To Build Our Member Site So We Can Provide Benefits</h2>
			<h2>We Are, Therefore, Running A Crowd Funding Campaign</h2>
			<h3>For More Information, Please Continue Below</h3>
			<p class="lead">The Giving Cycle&trade; is a <i>New Business Model</i> that benefits individuals, families, businesses, and non-profits.<br>To learn how, please watch the video above.</p>
			<p class="lead">Below, we seek to answer the following questions: "Why do we need Your contribution?", "How will we use contributions?", "How will that benefit You?", and "What are we all about?" (also answered in the video above).</p>
		</div>

		<div class="col-md-12 text-center" style="background-color:#6cacde;border:solid 2px black;">
			<h1>Why?</h1>
			<p class="lead"><i>Why is "The Giving Cycle" Business model unique?</i> It is a whole new business model that You will be seeing for the first time.</p>
			<p class="lead"><i>Why is it exciting?</i> Because not only will You personally benefit from it in many different ways, including financially, but also because it is structured to insure that someone else benefits, too!</p>
			<p class="lead"><i>Why do we need Your contribution?</i> We need to complete our websites that make all this possible and that takes money.</p>
		</div>
		<div class="col-md-12 text-center" style="background-color:#6cacde;border:solid 2px black;">
			<h1>How?</h1>
			<p class="lead"><i>How does our unique business model work?</i> The answer to that is in the video above, and on our <a href="aboutus.php" target="_blank"><i>About Us</i></a> page.</p>
			<p class="lead"><i>How will You and others benefit? There are many benefits to members including discounts on products, as well as other financial benefits, including income.</i></p>
			<p class="lead"><i>How can You help make a difference in the lives of other Americans?</i> "One person at a time"... Every time You refer a new member, You receive part of their membership fee as long as they remain a member. Everytime You buy a discount product on our site, part of that goes back to You, part goes to the charity of Your choice, and part goes into a philanthropic fund. These are not the only benefits!</p>
			<p class="lead"><i>How will contributions be used?</i> We must complete our member sites, add features, enlist businesses and nonprofit organizations, do marketing, and more. Those things are the primary uses of contributions acquired here.</i></p>
		</div>
		<div class="col-md-12 text-center" style="background-color:#6cacde;border:solid 2px black;">
			<h1>About Us</h1>
			<p class="lead">We are glad that You have come to our site, and hope You have watched the video above so You know about the many benefits in joining us and starting Your own Giving Cycle. We feature The World's 8<sup>th</sup> Business Model &quot;The Giving Cycle Business Model&quot; -patent pending. Our model is designed to become self-sustaining. It is designed to benefit You, while allowing us, working together, to restore America's Middle Class in a more fair and balanced manner.</p>
			<p class="lead">This business model is NOT an MLM (Multi-Level Marketing or Network Marketing) operation! By watching the video above, You will learn what The Giving Cycle is about.</p>
			<p class="lead">We desire to become the hub which will bring people, non-profits and businesses together by utilizing two universal laws with Judeo-Christian principles within a free market economy. This will allow us to help restore America's Middle class.</p>
			<p class="lead">We know that there are better solutions to the problems individuals (and their families), non-profits and businesses are facing every day, and we seek Your ideas and help to find those solutions.</p>
			<p class="lead">We are setting out to monetarily enrich You as our member, as well as all three of our member groups, without changing what You normally do. By joining us as a member, You can begin to reap growing benefits that will only increase over time.</p>
			<p class="lead">We plan not just to be an internet based business, but one in which people work with and for the sake of helping other people in each one of our member groups.</p>
			<p class="lead">There is a lot more to know about us, and You will learn that inside our main site when it is completed. Contribute now to help us reach our financial goal so that we can complete our websites and not only help You, but also begin to restore the American Middle Class with Your help.</p>
			<p class="lead">Start Your Giving Cycle that will, by virtue of the Law of Giving and Receiving, benefit You, help others at the same time, and <i>Know You Made A Difference</i>!</p>
		</div>
	</div><!-- /.row -->
</div><!-- /.container -->

<div style="margin: 0 0 5rem 0 !important;"></div>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 col-xs-12">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe src="https://www.youtube.com/embed/ZH0dopslScw?rel=0&autoplay=0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div><!-- /.row -->
</div><!-- /.container -->

<div style="margin: 0 0 5rem 0 !important;"></div>

<div class="container">
	<div class="row">
		<div class="text-center">
			<h1>In Summary...</h1>
			<p class="lead">The middle class has always been the engine that has been the driver of our nation's success.</p>
			<p class="lead">Over the last few generations, as the middle class has grown smaller and weaker, so has our nation's economy, as well as opportunities for each of us.</p>
			<p class="lead">Our nation is faced with multiple problems, many of which seem almost insurmountable, and which have impacted our society, the middle class... all of us ...and You!</p>
			<p class="lead">You wish and pray things will change for the better and You want to help, but You don't know what to do, nor how to start.</p>
			<p class="lead">We believe that the best place You can start is to contribute to our funding campaign here, and thereby begin to help us restore the American Middle Class and the Sovereignty of the Individual in our country!</p>
			<p class="lead">If You agree that the multiple problems faced by our society today have affected You and Your family, join us now, and become part of the SOLUTION.</p>
			<p class="lead">We can help You, and You can help us help our country.</p>
			<p class="lead">Contributing now allows You and us to begin to change all of our circumstances for the better.</p>
			<p class="lead">More than anything else, The Giving Cycle is an opportunity for You to be a part of the solution to help restore and strengthen the American Middle Class.</p>
		</div>
	</div><!-- /.row -->
</div><!-- /.container -->

<div style="margin: 0 0 5rem 0 !important;"></div>

<div class="container">
	<div class="row">
		<div class="text-center">
			<h1>The Giving Cycle&trade;</h1>
			<p class="lead">We choose to share profits with everyone in such a way that benefits the well-being of all parties involved.<br>The Giving Cycle community is full of wonderful people from a diverse range of backgrounds, and we want to ensure it remains a welcoming and safe environment to all who wish to be a part of it.</p>
			<p class="lead">We Are Restoring America's Middle Class For Everyone.<br><i>But We Need Your Help!</i><br>Join, Shop, Gain, Share, and Know That You Made a Difference!</p>
		</div>
	</div><!-- /.row -->
</div><!-- /.container -->

<?php include("inc/contribute.inc"); ?>

<?php include("inc/footer.inc"); ?>

<!-- script references -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
  (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
    t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
  })(window, document, '_gscq','script','//widgets.getsitecontrol.com/49909/script.js');
</script>

</body>
</html>
