<!DOCTYPE HTML>
<html>
<head>
<meta charset=utf-8> 
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">

<!-- other head tags, scripts, etc. -->
<?php
if (isset($_SERVER['HTTP_USER_AGENT']) &&
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
        header('X-UA-Compatible: IE=edge,chrome=1');
?>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->

<TITLE>The Giving Cycle</TITLE>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<meta name="keywords" content="">
<meta name="description" content="">
<!--
Online Shopping Cash Rebates, 
Fundraising Ideas for Charitable Organizations
-->

<!--link href="CSS/style.css" rel="stylesheet"-->
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="js/bootstrap.min.js"></script>
<STYLE>
body, div, p {
	font-family: times new roman, times, georgia, serif;
}
</STYLE>

<?php include("js/ga.js"); ?>

</HEAD>

<BODY>
<div class="mycontainer">
	<div class="mycontainer1">
		<div class="row">
			<div class="col-xs-12 col-md-12">
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<img src="http://thegivingcycle.org/images/The-Giving-Cycle.png" alt="" class="responsive-image" />
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 col-md-4" style="vertical-align: bottom";>
				<a href="about.php"><img src="http://thegivingcycle.org/images/About.png" alt="" class="responsive-image" /></a>
				<p>&nbsp;</p>
				<a href="about.php"><B style="color: white;">ABOUT</B></a><br>
				<p>&nbsp;</p>
			</div>
			<div class="col-sm-4 col-md-4" style="vertical-align: bottom";>
				<a href="connect.php"><img src="http://thegivingcycle.org/images/Connect.png" alt="" class="responsive-image" /></a>
				<p>&nbsp;</p>
				<a href="connect.php"><B style="color: white;">CONNECT</B></a><br>
				<p>&nbsp;</p>
			</div>
			<div class="col-sm-4 col-md-4" style="vertical-align: bottom";>
				<a href="gain.php"><img src="http://thegivingcycle.org/images/Gain2.png" alt="" class="responsive-image" /></a>
				<p>&nbsp;</p>
				<a href="gain.php"><B style="color: white;">GAIN</B></a><br>
				<p>&nbsp;</p>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-12">
				<p>&nbsp;</p>
				<?php include ("inc/nav.inc"); ?>
				<?php //include ("inc/pre-launch-nav.inc"); ?>
			</div>
		</div>
	</div>
</div>
<?php include("inc/footer.inc"); ?>
<!-- div class="row" style="background-color: white;">
	<div class="col-xs-12 col-md-12">
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		Copyright &copy; 2016 Victory In Giving, LLC | All rights reserved
		<p>&nbsp;</p>
	</div>
</div -->

<script>
function myFunction() {
    document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}
</script>

<script>
  (function (w,i,d,g,e,t,s) {w[d] = w[d]||[];t= i.createElement(g);
    t.async=1;t.src=e;s=i.getElementsByTagName(g)[0];s.parentNode.insertBefore(t, s);
  })(window, document, '_gscq','script','//widgets.getsitecontrol.com/49909/script.js');
</script>

</BODY>
</HTML>
