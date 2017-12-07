<?php
	session_start();
	include 'database.php';

	if($_GET["submit"] =='true' && !$_SESSION['hasvoted']) {

		$_SESSION['hasvoted'] = 1;
		$choice = $_POST["gender"];
		putChoiceInDB($choice);
	}
	
	$maleCount = getCountFromDatabase('male');
	$femaleCount = getCountFromDatabase('female');
?>