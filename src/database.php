<?php
	echo 'Rico is gek';
	

	// function getDatabaseData() {
	// 	include 'credentials.php';
	// 	try {
	// 		echo 'getdatabasething\r\n';
	// 	    $dbh = new PDO('mysql:host=' . $serverAddr .';dbname=teentjestellen_nl_teentjesdb', $username, $password);
	// 	    foreach($dbh->query('SELECT * from gender') as $row) {
	// 	        print_r($row);
	// 	    }
	//     $dbh = null;

	// 	} catch (PDOException $e) {
	// 	    print "Error!: " . $e->getMessage() . "<br/>";
	// 	    die();
	// 	}
	// }

	function putChoiceInDB($choice) {
		include 'credentials.php';
		echo 'set choice '.$choice.'<br>';

		try {
		    $dbh = new PDO('mysql:host=' . $serverAddr .';dbname=teentjestellen_nl_teentjesdb', $username, $password);
			   if($choice == "girl") {
			   	echo 'chosen a girl<br>';
			   $dbh->query('UPDATE gender SET girl = girl + 1');
			   } else {
			   	echo 'chosen a boy<br>';
			   }

		    
	    $dbh = null;

		} catch (PDOException $e) {
		    print "Error!: " . $e->getMessage() . "<br/>";
		    die();
		}
	}	
?>