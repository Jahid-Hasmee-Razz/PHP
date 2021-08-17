<?php
	$mark = 100;
	if($mark < 0 || $mark > 100){
		echo '<h1> Sorry! You have inputed an Invalid Mark</h1>';

	}elseif ($mark > 0 && $mark < 33) {
		echo '<h1>Bad Luck! You have Failed</h1>';
	}elseif($mark >= 33 && $mark <= 39){
		echo '<h1>You have Got D</h1>';

	}elseif ($mark >= 40 && $mark <= 49) {
		echo '<h1>You have got D+</h1>';
		
	}elseif ($mark >= 50 && $mark <= 59) {
		echo '<h1>You have Got C </h1>';
	}elseif ($mark >= 60 && $mark <= 69) {
		echo '<h1> You have got B</h1>';
	}elseif ($mark >= 70 && $mark <= 79) {
		echo '<h1>You have Got A</h1>';
	}elseif ($mark >= 80 && $mark <= 100) {
		echo '<h1> Congratulations!You have Got A+ </h1>';
	}
	else{
		echo '<h1>Welcome to Your Result</h1>';
	}

?>