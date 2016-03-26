<?php
		if (isset($_POST['email']) && isset($_POST['comment'])){
			
			$email = $_POST['email'];
			if($email == '') $email = 'Anonymous'; 
			$comment = $_POST['comment'];
						
			require('connection.php');
			$email = mysqli_real_escape_string($link,$email);
			$comment = mysqli_real_escape_string($link,$comment);
			
			$email = filter($email);
			$comment = filter($comment);
			
			if($comment != ''){
				//Server time
				$date = date("Y-m-d H:i:s");
				$query = "INSERT INTO comments(email,comment,date) VALUES ('$email','$comment','$date');";
									
				mysqli_query($link,$query);
				mysqli_close($link);
			}
			else{
				mysqli_close($link);
			}
			header('location:'.$_SERVER['PHP_SELF']);			
		}
		
		
		
		
		function filter($string){	
			$string = trim($string);
   			$string = stripslashes($string);
   			$string = htmlspecialchars($string);
   			return $string;
			/*$tok = strtok($string,"<>");
			$finalString = "";
			while ($tok !== false) {
			    $finalString = $finalString.$tok;
			    $tok = strtok("<>");
			}
			return $finalString;*/			
		}
?>
