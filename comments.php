<!DOCTYPE html>
<html>
<!-- #BeginTemplate "master.dwt" -->

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<!-- #BeginEditable "doctitle" -->
<title>Comments</title>
<!-- #EndEditable -->
<link href="styles/basic.css" media="screen" rel="stylesheet" title="CSS" type="text/css" />
<link rel="shortcut icon" href="images/favicon.ico"/>
<script type="text/javascript">
window.onload = initialize;

function initialize() {
	var timezoneOffset = new Date().getTimezoneOffset()/60;
	document.cookie = "timezoneOffset="+timezoneOffset;
	submitButton = document.getElementById("comment_submit");	
	submitButton.onclick = play;
}

function play() {

		 var audio = new Audio('sounds/coin.wav');
		 audio.play();
	     
     
}
</script>




</head>

<body>


<!-- Begin Container -->
<div id="container">
	<!-- Begin Masthead -->
	<div id="masthead">
		
	</div>
	<!-- End Masthead -->
	<!-- Begin iMenu -->
		<?php include('php/navigation.php') ?>
	<!-- End iMenu -->
	<!-- Begin Left Column -->
	<div id="column_l">
		<!-- #BeginEditable "content" -->
		
		
		
		<form id="com_form" method="post" action="<?php header('refresh: '. $_SERVER['PHP_SELF']) ?>">
		
		
		<div id="email_area"><label> Email: <input type="email" name="email"  maxlength="25" placeholder="someone@example.com" /></label></div>		
		<textarea id="input_comment" required name="comment" rows="4" cols="45" maxlength="150" placeholder="Add a comment..."></textarea>
		
		<input class="submit_button" id="comment_submit" type="submit" value=""> 		
		</form>
		
		
		
		
			
		<?php
			include('php/submitComment.php');
		?>
		
		
		
				
		<?php		
			include('php/showComments.php');
		?>
		
		
	


		
		<!-- #EndEditable --></div>
	<!-- End Left Column -->
	<!-- Begin Right Column -->
	<div id="column_r">
		<!-- #BeginEditable "sidebar" -->
		<img  class="side_img" alt="Comments Image" height="360" src="images/sidecomments.png" />
				<!-- #EndEditable --></div>
	<!-- End Right Column -->
	<!-- Begin Footer -->
		<?php include('php/footer.php') ?>
	<!-- End Footer --></div>
<!-- End Container -->

</body>

<!-- #EndTemplate -->

</html>
