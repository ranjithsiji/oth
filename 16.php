<? ob_start(); session_start();?><? ob_start(); session_start();?>

<!DOCTYPE HTML>
<?php
$level=basename(__FILE__, ".php"); //level number (derived from file name) DO NOT MODIFY THIS
require_once("config.php");


//**************************************************************
//You may modify these values
//Directly modify the html (in this file) if you wish to make advanced changes
$question = "Chandu is a snake catcher. He catches two types of snakes - Taipan & Boas.<br/>He was puting them in 2 different baskets for classification. <br/>Ankit comes to meet Chandu and said, 
\"Hey you idiot, why are doing such a laborious thing. <br/>You can apply a well known statistical method for this task.\"
<br /> <br />
What's that?";	//question
$correct="lda::linear discriminant analysis";		//the correct answer

//name of image to be displayed (please give a unpredictable random string as the name of the image. This is so that the player does not guess the name of images in other level)
$image="img/fisher's_projection.png";		

//End Of You may modify these values
//**************************************************************


require('./includes/check.php');

?>

<?require('./includes/html1.php');?>

<header>
	<h2 style="text-transform: none;"><? echo $question ?></h2>
</header>

<?require('./includes/html_incorrect.php'); //Display that the answer is incorrect?>

<? //Image is placed here ?>

<img src="<?echo $image?>" width = '500dp'/>

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

