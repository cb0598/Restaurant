<?php
//error_reporting(E_ALL);
error_reporting(0);//alle Fehlermeldungen ausschalten
$db = new mysqli('localhost', 'root', '', 'restaurant');
$db->set_charset('utf8');
print_r($db->connect_error);//damit nicht angezeigt wird, wo sich die Datenbank und die Verzeichnisse befinden
?>