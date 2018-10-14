<?php
    include 'dbconnect.php';
                            $mitarbeiternummer = $_COOKIE['mitarbeiterNr'];
                            $sql = "SELECT *, Name FROM bestellung INNER JOIN speise USING (SpeiseNr)  WHERE MitarbeiterNr='$mitarbeiternummer' ORDER BY TischNr";

                            $result = $db-> query($sql);

                            $summe = 0;
                            $isFirstEntry = true;
                            $lastrow = 0;
                            $currentRow = 0;

                                if ($result-> num_rows > 0) {
                                        
                                    while ($row = $result-> fetch_assoc()) {
                                        $currentRow = $row['TischNr'];

                                        if ($lastRow != $currentRow) {
                                            if ($lastRow != 0) {
                                                echo "
                                                    </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td> </td>
                                                                <td> </td>
                                                                <td style='color: red'><b>" . $isWeitererWunsch . "</b></td>
                                                                <td> </td>
                                                                <td> </td>
                                                                <td style='text-align: right;''><b>Zu zahlen:</b></td>
                                                                <td><b>" . number_format((float)$summe, 2, '.', '') . " €</b></td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                    </div>";
                                                    $summe = 0;
                                            }
                                            echo "
                                            <div id='" . $currentRow . "'>
                                                <button type='button' onclick='getDataID(" . $currentRow . ")' class='close' data-toggle='modal' data-target='#bestaetigung' aria-label='Close'>
                  									<span aria-hidden='true'>&times;</span>
                								</button>
                								<h3>Tisch Nr. " . $currentRow . "</h3>	
                                                      <table class='table'>
                                                          <thead>
                                                              <tr>
                                                                  <th class='col-sm-1'>BestellNr</th>
                                                                  <th class='col-sm-1'>Anzahl</th>
                                                                  <th class='col-sm-4'>Gericht</th>
                                                                  <th class='col-sm-2'>Speiseart</th>
                                                                  <th class='col-sm-1'>Bestellzeitpunkt</th>
                                                                  <th class='col-sm-2'>Einzelpreis</th>
                                                                  <th class='col-sm-1'>Gesamtpreis</th>
                                                              </tr>
                                                          </thead>
                                                          <tbody>";
                                        }
                                        $sqlTisch = "SELECT * FROM tisch WHERE TischNr = $currentRow";
                                        $resultTisch = $db-> query($sqlTisch);
                                        $rowTisch = $resultTisch-> fetch_assoc();

                                        $isWeitererWunsch = "";

                                        if ($rowTisch['weitererWunsch'] == 1) {
                                            $isWeitererWunsch = "Bedienung gerufen! 
                                            <button type='button' class='close' aria-label='Close' onclick='deleteWeitererWunsch(" . $currentRow . ")'>
                                                <span aria-hidden='true'>&times;</span>
                                            </button>";
                                        } else {
                                            $isWeitererWunsch = "";
                                        }

                                            //Daten
                                            echo "<tr><td>" . $row["BestellNr"] . "</td><td>" . $row["bestellteMenge"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["Speiseart"] . "</td><td>" . $row["Bestellzeitpunkt"] . "</td><td>" . $row["Preis"] . " €</td><td>" . number_format((float)$row["Preis"] * $row["bestellteMenge"], 2, '.', '') .     "   €</td></tr>";
                                            $summe += $row["Preis"] * $row["bestellteMenge"];
    
                                           
                                        $lastRow = $currentRow;
                                    } //Ende while
                                    echo "</tbody>
                                            <tfoot>
                                                <tr>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td style='color: red'><b>" . $isWeitererWunsch . "</b></td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td style='text-align: right;''><b>Zu zahlen:</b></td>
                                                    <td><b>" . number_format((float)$summe, 2, '.', '') . " €</b></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        </div>";
                                } else {
                                	echo "<b>Aktuell keine Bestellungen!</b>";
                                }
?>
<script>
        function deleteWeitererWunsch(tischNr){
            $.ajax({
                url: "deleteWeitererWunsch.php",
                method: "GET",
                data: { tischNr },
                success: data => {
                    
                }
            })
        }
</script>