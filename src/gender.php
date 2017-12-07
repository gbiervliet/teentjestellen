<?php
	include 'database.php';

	if($_GET["submit"] =='true') {
		$choice = $_POST["gender"];
		putChoiceInDB($choice);
	}
	
	$maleCount = getCountFromDatabase('male');
	$femaleCount = getCountFromDatabase('female');
?>