<?php

	echo '<div id="media_videos">';
    echo		'<h3 class="subheader">Videos</h3>';



	$videosPerPage = 2;


	if(isset($_GET['videosPage'])){
		$page = $_GET['videosPage'];
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
	
	
	$query = "SELECT COUNT(*) FROM mediaVideos";
	$totalVideos = mysqli_query($link,$query);
	$totalVideos = mysqli_fetch_row($totalVideos)[0];
	
	
	
	$maxPage = $totalVideos/$videosPerPage;
	//an diaireitai teleia afairese 1, px 31/10 = 3.1, ara prepei to maxPage einai 3, omws 30/10 = 3 prepei na exei maxPage = 2 
	if($maxPage == (int) $maxPage)
		$maxPage--;
	else
		$maxPage = (int)$maxPage;
	
	if($page > $maxPage){
		$page = $maxPage;
	}

	
	

	
	
	$query = "SELECT * FROM mediaVideos LIMIT $videosPerPage OFFSET " . $page*$videosPerPage;
	$results = mysqli_query($link,$query);
		

	if($results == false){
		$num_results = 0;
	}else{
		$num_results = mysqli_num_rows($results);
	}
	
	echo "<ul>";
	for($i=0; $i < $num_results ; $i++)
	{
		$row = mysqli_fetch_assoc($results);
		$src = $row['source'];
		echo '<li>';
		echo '<iframe  src="'.$src.'"></iframe>';		
		echo '</li>';	
	}
	echo "</ul>";
	
	
	mysqli_close($link);
			

	$diff = $totalVideos - ($page+1)*$videosPerPage;
			
	if($page == 0 || $num_results == 0)
		$prev = 'Previous ';	
	else
		$prev = '<a href="media.php?videosPage='.($page-1).'">Previous </a>';
	
	if($diff <= 0)
		$next = ' Next';	
	else
		$next = '<a href="media.php?videosPage='.($page+1).'"> Next</a>';
						
	echo "<p class=\"prev_next\">$prev -".($page + 1)."- $next</p>";
	echo '</div>';
					
?>