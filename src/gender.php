<?php
	include 'database.php';

	$choice = $_POST["gender"];

	if(choice ==='female') {
		putChoiceInDB('girl');

	} else {
		putChoiceInDB('boy');
	}

	getDatabaseData();

	die(var_dump($choice));

?>