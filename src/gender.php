<?php
	include 'database.php';

	$choice = $_POST["gender"];
	if($choice == "female") {
		putChoiceInDB('girl');

	} else {
		putChoiceInDB('boy');
	}
?>