<?php

	echo '<div id="imagegallery">';
	echo '		<h3 class="subheader">Image Gallery</h3>';


	$imagesPerRow = 2;
	$rowsNo = 2;
	$imagesPerPage = $imagesPerRow * $rowsNo ;


	if(isset($_GET['imagesPage'])){
		$page = $_GET['imagesPage'];
	}
	else
		$page = 0;
	
	//Check page value
	$page = (int) $page;
	if($page < 0){
		$page = 0;
	}

	

	
	
	
	//connect to database
	require('connection.php');
	
	
	$query = "SELECT COUNT(*) FROM images";
	$totalImages = mysqli_query($link,$query);
	$totalImages = mysqli_fetch_row($totalImages)[0];
	
	
	
	$maxPage = $totalImages/$imagesPerPage;
	//an diaireitai teleia afairese 1, px 31/10 = 3.1, ara prepei to maxPage einai 3, omws 30/10 = 3 prepei na exei maxPage = 2 
	if($maxPage == (int) $maxPage)
		$maxPage--;
	else
		$maxPage = (int)$maxPage;
	
	if($page > $maxPage){
		$page = $maxPage;
	}

	
	

	
	
	$query = "SELECT * FROM images LIMIT $imagesPerPage OFFSET " . $page*$imagesPerPage;
	$results = mysqli_query($link,$query);
		

	if($results == false){
		$num_results = 0;
	}else{
		$num_results = mysqli_num_rows($results);
	}
	
	echo "<table>";
	for($i=0; $i < $num_results ; $i++)
	{
		$row = mysqli_fetch_assoc($results);
		if($i % $imagesPerRow == 0){
			echo '<tr>';
		}
		echo '<td>';
		
		$src = $row['source'];
		$desc = $row['description'];
		$alt = $row['alternative'];
		
		echo '<a href="'.$src.'" target="_blank">';
		echo '	<img  src="'.$src.'" alt="'.$alt.'" />';
		echo '</a>';
		echo '<div class="img_desc">'.$desc.'</div>';
		
		
		echo '</td>';
		if(($i+1) % $imagesPerRow == 0){
			echo '</tr>';
		}
	}
	
	if($num_results % $imagesPerRow != 0){
		echo '</tr>';
	}

	echo "</table>";
	
	
	mysqli_close($link);
			

	$diff = $totalImages - ($page+1)*$imagesPerPage;
			
	if($page == 0 || $num_results == 0)
		$prev = 'Previous ';	
	else
		$prev = '<a href="media.php?imagesPage='.($page-1).'#imagegallery">Previous </a>';
	
	if($diff <= 0)
		$next = ' Next';	
	else
		$next = '<a href="media.php?imagesPage='.($page+1).'#imagegallery"> Next</a>';
						
	echo "<p class=\"prev_next\">$prev -".($page + 1)."- $next</p>";
	echo '</div>';
					
?>