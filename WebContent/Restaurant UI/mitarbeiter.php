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
    <!-- Fixed navbar -->
    <!--<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Restaurant Plöck</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Start</a></li>   
            <li><a href="speisekarte.php">Speisekarte</a></li> 
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="img/account.svg"></img><b class="caret"></b> </a>
                <ul class="dropdown-menu">
                    <li><a href="login.php">*Anmelden bzw. Benutzername*</a></li> 
                    <li><a href="logout.php">*Abmelden*</a></li>
                </ul>
            </li> 
          </ul>
        </div>--><!--/.nav-collapse -->
      <!--</div>
    </div>-->

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
                                                <h3>Tisch Nr. " . $currentRow . "</h3>
                                                        <table class='table'>
                                                            <thead>
                                                                <tr>
                                                                    <td class='col-sm-1'>BestellNr</td>
                                                                    <td class='col-sm-1'>Anzahl</td>
                                                                    <td class='col-sm-4'>Gericht</td>
                                                                    <td class='col-sm-2'>Speiseart</td>
                                                                    <td class='col-sm-1'>Bestellzeitpunkt</td>
                                                                    <td class='col-sm-2'>Einzelpreis</td>
                                                                    <td class='col-sm-1'>Gesamtpreis</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>";
                                        }

                                            //Daten
                                            echo "<tr><td>" . $row["BestellNr"] . "</td><td>" . $row["bestellteMenge"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["Speiseart"] . "</td><td>" . $row["Bestellzeitpunkt"] . "</td><td>" . $row["Preis"] . " €</td><td>" . number_format((float)$row["Preis"] * $row["bestellteMenge"], 2, '.', '') .     "   €</td></tr>";
                                            $summe += $row["Preis"] * $row["bestellteMenge"];
    
                                           
                                        $lastRow = $currentRow;
                                    } //ende while
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
            ctx.fillRect(0,0,100,50);
            
            ctx.fillStyle = "#FF0000";
            ctx.fillRect(0,100,100,50);

            ctx.fillStyle = "#32CD32";
            ctx.fillRect(0,200,100,50);

            ctx.fillStyle = "#32CD32";
            ctx.fillRect(0,300,100,50);

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