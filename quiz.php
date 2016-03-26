<!DOCTYPE html>
<html>
<!-- #BeginTemplate "master.dwt" -->

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<!-- #BeginEditable "doctitle" -->
<title>Quiz</title>
<!-- #EndEditable -->
<link href="styles/basic.css" media="screen" rel="stylesheet" title="CSS" type="text/css" />
<link rel="shortcut icon" href="images/favicon.ico"/>
<script type="text/javascript">
window.onload = initialize;


function initialize(){
	var choices = document.getElementsByName('choices');
	for (var i = 0; i< choices.length;  i++){
			choices[i].disabled = false;
	}	
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
		
		<h2 class="header">Quiz!</h2>

		
		<?php
		
			include("php/loadQuiz.php");
			
		
		
		
		
		
		
		
		?>
		
		<script type="text/javascript" src="javascript/jquery-2.1.3.min.js"></script>
		<script type="text/javascript" src="javascript/quizHandler.js"></script>

		
		
		
		<!-- #EndEditable --></div>
	<!-- End Left Column -->
	<!-- Begin Right Column -->
	<div id="column_r">
		<!-- #BeginEditable "sidebar" -->
		 <img  class="side_img" src="images/sidequiz.png" alt="Quiz Image" />
		<!-- #EndEditable --></div>
	<!-- End Right Column -->
	<!-- Begin Footer -->
		<?php include('php/footer.php') ?>
	<!-- End Footer --></div>
<!-- End Container -->

</body>

<!-- #EndTemplate -->

</html>
