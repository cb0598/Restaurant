<?php include("dbconnect.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Übersicht</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  </head>
  <body>

    <script>
        $(document).ready(function() {
            $('#navbar').load('navbar.php');
            $('#footer').load('footer.html');
            });
    </script>

    <!-- Fixed navbar -->
    <div id="navbar">
    </div>
    <style>
    .panelTop{
      margin-top: 2px;
      margin-bottom: 2px;
    }
    </style>
    <div class="container">
        <div class="page-header">
            <h1>Aufgegebene Bestellungen</h1>
        </div>

        <div class="well" style="font-size: 16px">

                    <?php
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
                                                                <td> </td>
                                                                <td> </td>
                                                                <td> </td>
                                                                <td style='text-align: right;''><b>Zu zahlen:</b></td>
                                                                <td><b>" . number_format((float)$summe, 2, '.', '') . " €</b></td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>";
                                                    $summe = 0;
                                            }
                                            echo "
                                                <button type='button' class='close' aria-label='Close'>
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

                                            //Daten
                                            echo "<tr><td>" . $row["BestellNr"] . "</td><td>" . $row["bestellteMenge"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["Speiseart"] . "</td><td>" . $row["Bestellzeitpunkt"] . "</td><td>" . $row["Preis"] . " €</td><td>" . number_format((float)$row["Preis"] * $row["bestellteMenge"], 2, '.', '') .     "   €</td></tr>";
                                            $summe += $row["Preis"] * $row["bestellteMenge"];
    
                                           
                                        $lastRow = $currentRow;
                                    } //ende while
                                    echo "</tbody>
                                            <tfoot>
                                                <tr>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td style='text-align: right;''><b>Zu zahlen:</b></td>
                                                    <td><b>" . number_format((float)$summe, 2, '.', '') . " €</b></td>
                                                </tr>
                                            </tfoot>
                                        </table>";
                                } else {
                                	echo "<b>Aktuell keine Bestellungen!</b>";
                                }
                        ?>
        </div> 

        <br>
        <h1>Tische</h1>
        <hr>
        <canvas id="myCanvas" width="800" height="400"
            style="border:1px solid #c3c3c3;">
            Your browser does not support the canvas element.
        </canvas>

        <script>
            var canvas = document.getElementById("myCanvas");
            var ctx = canvas.getContext("2d");

            // if/else Bedingung einfügen: wenn Tisch belegt & Bestellung aufgegeben, dann rot

            ctx.fillStyle = "#FF0000";
            ctx.fillRect(200,75,100,50);
            
            ctx.fillStyle = "#FF0000";
            ctx.fillRect(200,175,100,50);

            ctx.fillStyle = "#32CD32";
            ctx.fillRect(200,275,100,50);

            ctx.fillStyle = "#32CD32";
            ctx.fillRect(500,75,100,50);

            ctx.fillStyle = "#32CD32";
            ctx.fillRect(500,175,100,50);

            ctx.fillStyle = "#32CD32";
            ctx.fillRect(500,275,100,50);

        </script> 
    </div>
            
    <!-- Fixed footer -->        
    <div id="footer">
    </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>