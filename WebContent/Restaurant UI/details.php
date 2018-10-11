<?php 
	include 'dbconnect.php';
	$id = $_GET['id'];

	$sql = "SELECT * FROM speise WHERE SpeiseNr = $id";
    $result = $db-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_assoc()) {
                                    echo "<table class='table'>
                                    		<tr>
                                    			<td><b>Name:</b></td>
                                    			<td>". $row['Name'] . "</td>
                                    		</tr>
                                    		<tr>
                                    			<td><b>Preis:</b></td>
                                    			<td>" . $row['Preis'] . " €</td>
                                    		</tr>
                                    		<tr>
                                    			<td><b>Speiseart:</b></td>
                                    			<td>" . $row['Speiseart'] . "</td>
                                    		</tr>
                                    		<tr>
                                    			<td><b>Zubereitungszeit:</b></td>
                                    			<td>" . $row['Zubereitungszeit'] . "</td>
                                    		</tr>
                                    		<tr>
                                    			<td><b>Verfügbare Menge:</b></td>
                                    			<td>" . $row['verfügbareMenge'] . " Portionen</td>
                                    		</tr>
                                    	</table>";
                                }
                            }
	?>