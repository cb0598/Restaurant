<?php
include 'dbconnect.php';
	$tischNr = $_GET['tischNr'];
            $sqlWrite = "UPDATE tisch SET weitererWunsch = 0 WHERE TischNr = $tischNr";
                    if ($db-> query($sqlWrite) === TRUE) {
                        echo "Datensatz erfolgreich eingefügt";
                    } else {
                        echo "Fehler: " . $sqlWrite . "<br>" . $db->error;
                    }
?>