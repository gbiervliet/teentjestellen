<?php
	include 'database.php';

	$choice = $_POST["gender"];
	echo 'chosen<br>';
	if($choice == "female") {
		echo 'chosen a girl<br>';
		putChoiceInDB('girl');

	} else {
		echo 'chosen a boy<br>';
		putChoiceInDB('boy');
	}

	// getDatabaseData();

?>