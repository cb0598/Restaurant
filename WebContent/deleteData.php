<?php
	include 'dbconnect.php';
	$tischID = $_GET['dataID'];

	$sqlDelete = "DELETE FROM bestellung WHERE TischNr = $tischID";

	if ($db->query($sqlDelete) === TRUE) {
		echo "Record deleted succesfully";
	} else {
		echo "Error deleting record: " . $db->error;
	}

$db->close();
?>