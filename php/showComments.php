<?php

	echo '<div id="comments">';

	if(isset($_GET['page'])){
		$page = $_GET['page'];
	}
	else
		$page = 0;

	$commentsPerPage=10;
	
	require('connection.php');
	
	
	$query_num = "SELECT COUNT(*) FROM comments";
	$total_comments = mysqli_query($link,$query_num);
	$total_comments = mysqli_fetch_row($total_comments)[0];
	
	
	//Check page value
	$page = (int) $page;
	if($page < 0){
		$page = 0;
	}
	
	$maxPage = $total_comments/$commentsPerPage;
	//an diaireitai teleia afairese 1, px 31/10 = 3.1, ara prepei to maxPage einai 3, omws 30/10 = 3 prepei na exei maxPage = 2 
	if($maxPage == (int) $maxPage)
		$maxPage--;
	else
		$maxPage = (int)$maxPage;
	
	if($page > $maxPage){
		$page = $maxPage;
	}
	
	$query = "SELECT * FROM comments ORDER BY date DESC LIMIT $commentsPerPage OFFSET " . $page*$commentsPerPage;
	$results = mysqli_query($link,$query);
	
			

	if($results == false){
		$num_results = 0;
	}else{
		$num_results = mysqli_num_rows($results);
	
	}
	for($i=0; $i < $num_results ; $i++)
	{
		$row = mysqli_fetch_assoc($results);
		
		
		$commentServerDate = $row['date'];
		

		if(isset($_COOKIE['timezoneOffset']))
		{
			//UCT offset
			$datetimeObject = DateTime::createFromFormat('Y-m-d H:i:s', $commentServerDate);
			$serverOffset = $datetimeObject->getOffset()/3600;
			
			//GMT offset
			$localOffset = $_COOKIE['timezoneOffset'];
			
			$diffOffset = -$localOffset-$serverOffset;
						
			$timestamp = strtotime($commentServerDate) + $diffOffset*3600;
			$commentLocalDate = date("Y-m-d H:i:s", $timestamp);
			
			$nowServerDate = date('Y-m-d H:i:s');
			$timestamp =  strtotime($nowServerDate) + $diffOffset*3600;
			$nowLocalDate = date("Y-m-d H:i:s", $timestamp);

				
		}else{
			$commentLocalDate = $commentServerDate;
			$nowLocalDate = date('Y-m-d H:i:s');
		}
		
		$today = date("d/m/Y",strtotime($nowLocalDate));
		$commentDay = date("d/m/Y",strtotime($commentLocalDate));
		if($today != $commentDay){
			$commentLocalDate = $commentDay;
		}else{
			$commentLocalDate = date("H:i:s",strtotime($commentLocalDate));
		}
				
		$hoursDiff = (strtotime($nowLocalDate) - strtotime($commentLocalDate)) / 3600;
		if($hoursDiff < 24){
			//$commentLocalDate = 
		}
		

		
		echo '<div class="comment_entry"> 
				<div class="comment_header">
					<p class="email">'.$row['email'].'</p> 
					<p class="comment_id">#'.($total_comments - $page*$commentsPerPage - $i).'</p>
				</div>
				<p class="comment">'.$row['comment'].'</p> 
				<p class="date">'.$commentLocalDate.' </p> 
			  </div>';

	
	}
		
	mysqli_close($link);
			


	$diff = $total_comments - ($page+1)*$commentsPerPage;
			
	if($page == 0 || $num_results == 0)
		$prev = 'Previous ';	
	else
		$prev = '<a href="comments.php?page='.($page-1).'">Previous </a>';
	
	if($diff <= 0)
		$next = ' Next';	
	else
		$next = '<a href="comments.php?page='.($page+1).'"> Next</a>';
						
	echo "<p class=\"prev_next\">$prev -".($page + 1)."- $next</p>";
	
	echo '</div>';
	
?>
