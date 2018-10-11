<?php 
	include 'dbconnect.php';
	$id = $_GET['id'];
	echo $id;

	$sql = "SELECT * FROM speise WHERE SpeiseNr = $id";
    $result = $db-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_assoc()) {
                                    echo "". $row['Name'];
                                }
                            }
	?>