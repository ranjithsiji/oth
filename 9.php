<? ob_start(); session_start();?>

<!DOCTYPE HTML>
<?php
$level=basename(__FILE__, ".php"); //level number (derived from file name) DO NOT MODIFY THIS
require_once("config.php");


//**************************************************************
//You may modify these values
//Directly modify the html (in this file) if you wish to make advanced changes
$question = "";	//question
$correct="bubble sort::bubblesort";		//the correct answer

//name of image to be displayed (please give a unpredictable random string as the name of the image. This is so that the player does not guess the name of images in other level)
$image="img/ques.jpg";		

//End Of You may modify these values
//**************************************************************


require('./includes/check.php');
?>

<html>
<head>
	<title>
	LEVEL <?echo $level?>
	</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/bbl.css" />
	<link rel="shortcut icon" type="image/png" href="favicon.ico"/>
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-loading">
<div id="wrapper">
<section id="main">

<header>
	<h2 style="text-transform: none;"><? echo $question ?></h2>
</header>

<?require('./includes/html_incorrect.php'); //Display that the answer is incorrect?>

<? //Image is placed here ?>

<img src="<?echo $image?>"/>

<?require('./includes/html_form.php');?>

<?require('./includes/bottomlinks.php');?>

<footer id="footer">
	<p><span style="opacity: 0.1;">                   SO MUCH SPACE!!                                   </span></p>
</footer>

</div>

<!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
<script>
	if ('addEventListener' in window) {
		window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
		document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
	}
</script>
<?require('./includes/track.php');?>

</body>
</html>

<? ob_flush(); ?>