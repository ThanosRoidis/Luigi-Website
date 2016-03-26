<?php 
$tabs = ['news.php','bio.php','appearances.php','index.php','media.php','comments.php','quiz.php'];
$tabsTitles = ['News','Bio','Appearances','Home','Media','Comments','Quiz'];
$uri = $_SERVER["REQUEST_URI"];
$cur = substr($uri,strrpos($uri,"/")+1);
$cur = explode("?",$cur)[0];
if($cur == ""){
	$cur = "index.php";
}
echo '<div id="navigation"><ul>';

for($i = 0; $i < count($tabs); $i++){

	
	if($cur == $tabs[$i]){
		echo '<li><a class="current" href="#"  onclick="return false;">'. $tabsTitles[$i].'</a></li>';

	}else{
		echo '<li><a href="'.$tabs[$i].'">'.$tabsTitles[$i].'</a></li>';
	}
}
echo '</ul></div>';
?>
