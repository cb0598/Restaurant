<?php
//error_reporting(E_ALL);
error_reporting(0);//alle Fehlermeldungen ausschalten
$db = new mysqli('localhost', 'root', '', 'restaurant');
$db->set_charset('utf8');
print_r($db->connect_error);//damit nicht angezeigt wird wo sich die Datenbank und die Verzeichnisse befinden

/*$erg = $db->query("SELECT * FROM speise")HIER
	   or die($db->error);

$datensatz = $erg->fetch_assoc();//den ersten Datensatz ausgeben
echo "<pre>";
print_r($datensatz);
echo "</pre>";

//$datensatz = $erg->fetch_all(MYSQLI_ASSOC);//alle Datensätze ausgeben
//echo "<pre>";
//print_r($datensatz);
//echo "</pre>";

$datensatz = $erg->fetch_all(MYSQLI_ASSOC);
foreach ($datensatz as $zeile) {
	echo "<br>";
	echo "<br>" . $zeile['Speise-Nr'] . ' ' . $zeile['Name'];
}

print_r($erg);
echo date("H:i:s");*/
?>