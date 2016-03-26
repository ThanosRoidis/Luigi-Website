<!DOCTYPE html>
<html>

<!-- #BeginTemplate "master.dwt" -->

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<!-- #BeginEditable "doctitle" -->
<title>Media</title>
<!-- #EndEditable -->
<link href="styles/basic.css" media="screen" rel="stylesheet" title="CSS" type="text/css" />
<link rel="shortcut icon" href="images/favicon.ico"/>
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
		<h2 class="header">Media</h2>
		
				
			<?php include('php/showMediaVideos.php')?>

			<?php include('php/showImageGallery.php')?>
					
		
		<!-- #EndEditable --></div>
	<!-- End Left Column -->
	<!-- Begin Right Column -->
	<div id="column_r">
		<!-- #BeginEditable "sidebar" -->
		<img  class="side_img" src="images/media/1.png" alt="Media Image"  />

		<!-- #EndEditable --></div>
	<!-- End Right Column -->
	<!-- Begin Footer -->
		<?php include('php/footer.php') ?>
	<!-- End Footer --></div>
<!-- End Container -->

</body>

<!-- #EndTemplate -->

</html>
