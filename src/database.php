<?php
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
		try {
		    $dbh = new PDO('mysql:host=' . $serverAddr .';dbname=teentjestellen_nl_teentjesdb', $username, $password);
			   if($choice == "boy") {
			   	$dbh->query('UPDATE gender SET votes=votes+1 WHERE id=0');
			   } else {
			    $dbh->query('UPDATE gender SET votes=votes+1 WHERE id=1');
			   }

		    
	    $dbh = null;

		} catch (PDOException $e) {
		    print "Error!: " . $e->getMessage() . "<br/>";
		    die();
		}
	}	
?>