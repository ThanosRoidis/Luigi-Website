<?php


	if(isset($_GET['newsPage'])){
		$page = $_GET['newsPage'];
	}
	else
		$page = 0;
	
	//Check page value
	$page = (int) $page;
	

	require('connection.php');

	$news_per_page = 5;

	$query_num = "SELECT COUNT(*) FROM news";
	$total_news= mysqli_query($link,$query_num);
	$total_news = mysqli_fetch_row($total_news)[0];
	
	$max_page = $total_news/$news_per_page;
	//an diaireitai teleia afairese 1, px 31/10 = 3.1, ara prepei to maxPage einai 3, omws 30/10 = 3 prepei na exei maxPage = 2 
	if($max_page == (int) $max_page )
		$max_page --;
	else
		$max_page = (int)$max_page ;
	
	if($page > $max_page ){
		$page = $max_page ;
	}
	
	if($page < 0){
		$page = 0;
	}




	$query = "SELECT * FROM news ORDER BY ndate DESC LIMIT ".$news_per_page." OFFSET " . $page*$news_per_page;
	$results = mysqli_query($link,$query);


	if($results == false){
			$num_results = 0;

	}
	else
		$num_results = mysqli_num_rows($results);
	

	
	echo "<ul>";
	for($i=0; $i < $num_results ; $i++) {
	
		$row = mysqli_fetch_assoc($results);
		
		
		echo '<li class="news"><b>'.$row['ndate'].'</b>: '.$row['title'];  					


		if($row['media'] == "img") {
			echo '<img class="news_item" src="'.$row['media_url'].'" alt="'.$row['title'].'" /></li>';
		}
		else if($row['media'] == "vid"){	
			echo '<iframe class="news_item" src="'.$row['media_url'].'" ></iframe></li>';
		}
		else {
			echo '</li>';
		}

	}
	echo "</ul>";

	
	$diff = $total_news - ($page+1)*$news_per_page;
	
			
	if($page == 0 || $num_results == 0)
		$prev = 'Previous ';	
	else
		$prev = '<a href="news.php?newsPage='.($page-1).'">Previous </a>';
	
	if($diff <= 0)
		$next = ' Next';	
	else
		$next = '<a href="news.php?newsPage='.($page+1).'"> Next</a>';
						
	echo "<p class=\"prev_next\">$prev -".($page + 1)."- $next</p>";
					








?>
