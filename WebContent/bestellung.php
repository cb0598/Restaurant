<?php 
	include 'dbconnect.php';
	$orderSpeise = $_GET['order'];
	$orderMenge = $_GET['amount'];

                if (isset($_COOKIE['tischNr'])) {//prüfen ob TischNr gesetzt
                    $tischNummer = $_COOKIE['tischNr'];

                    //MitarbeiterNr setzen
                    if ($tischNummer == 1 || $tischNummer == 3 || $tischNummer == 5) {
                        $mitarbeiterNummer = 1;
                    } else {
                        $mitarbeiterNummer = 2;
                    }

                    //bestellteMenge HIER

                    $sqlWrite = "INSERT INTO bestellung (TischNr, SpeiseNr, MitarbeiterNr, bestellteMenge)
                                VALUES ($tischNummer, $orderSpeise, $mitarbeiterNummer, $orderMenge)";
                    if ($db-> query($sqlWrite) === TRUE) {
                        echo "Datensatz erfolgreich eingefügt";
                    } else {
                        echo "Fehler: " . $sqlWrite . "<br>" . $db->error;
                    }

                } else {
                    header('location: login.php');
                    //exit;
                    echo "<h1>BITTE ANMELDEN</h1>";
                }
?>