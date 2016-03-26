<?php
	
	if(isset($_COOKIE['quiz_no']))
		$quiz_no = $_COOKIE['quiz_no'];
	else
		$quiz_no = 0;

	
	
	require('connection.php');
	
	
	$query_num = "SELECT COUNT(*) FROM quiz";
	$total_quiz = mysqli_query($link,$query_num);
	$total_quiz = mysqli_fetch_row($total_quiz)[0];
	
	$quiz_no = $quiz_no % $total_quiz;


	
	$query = "SELECT * FROM quiz LIMIT 1 OFFSET ".$quiz_no;
	
	$results = mysqli_query($link,$query);
	
	
	$row = mysqli_fetch_row($results);
	
	$choices = explode("/",$row[1]);
	
	$correct = $choices[0];
	
	shuffle($choices);
	
	
	echo ' <div  id="quiz_form"> 
				<p id="quiz_text">'.$row[0].'</p>';
			
	for($i=0 ; $i < count($choices) ; $i++)
	{
		if($choices[$i] == $correct)
			echo '<div class="quiz_radio" >
					<label>
						
							<input id="correct" type="radio" name="choices" value="'.$choices[$i].'">'.$choices[$i].'
						
				  	</label>
				  </div>';
		else
			echo '
				<div class="quiz_radio" >
					<label>
							<input type="radio" name="choices"  value="'.$choices[$i].'">'.$choices[$i].'	
				 	</label>
				 </div>'
				 ;

	}
				
	echo '		<p id="quiz_no_select">Please select an answer!</p>
			</div>';
	
	//echo '<p><input class="submit_button" id="quiz_submit" type="submit" value="" > </p> ';

	echo '<input class="submit_button" id="quiz_submit" type="submit" value="" > ';






?>
