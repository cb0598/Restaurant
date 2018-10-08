<?php
include("dbconnect.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meine Bestellung</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  </head>
  <body onload="doSum()">
    <script type="text/javascript" >
        
            $(document).ready(function() {
                $('#navbar').load('navbar.php');
                $('#footer').load('footer.html');
                });
            </script>

                <!-- Fixed navbar -->
    <div id="navbar">
    </div>
    
    <div class="container">
        <div class="page-header">
            <h1>Meine Bestellung</h1>
        </div>

        <script type="text/javascript">
            function doSum() {
            var fields = document.getElementsByName("anzahl");
            var sum = 0;
            for (var i=0; i<fields.length; i++) {
            var v = parseFloat(fields[i].value, 10);
            if (isNaN(v)) v = 0;
            sum += v;
            }
            sum=Math.round(sum*100)/100;
            document.getElementById("output").value = sum +"€";
            }
        </script>

        <form action="">
        <div class="well" style="font-size: 16px">
            <table class="table">
                <thead>
                     <tr>
                        <th>Anzahl</td>
                        <th>Gericht</thd>
                        <th>Speiseart</th>
                        <th>Einzelpreis</th>
                        <th>Preis</th>
                     </tr>
                </thead>
                <tbody>
                    <?php
                            $sql = "SELECT *, Name FROM bestellung INNER JOIN speise USING (SpeiseNr)";

                            $erg = $db->query("SELECT *, Name FROM bestellung INNER JOIN speise USING (SpeiseNr)")
                                        or die($db->error);  

                            $datensatz = $erg->fetch_assoc();//den ersten Datensatz ausgeben
                            echo "<pre>";
                            print_r($datensatz);
                            echo "</pre>";

                            $result = $db-> query($sql);

                            $summe = 0;

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_assoc()) {
                                    echo "<tr><td>" . $row["bestellteMenge"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["Speiseart"] . "</td><td>" . $row["Preis"] . " €</td><td>" . $row["Preis"] * $row["bestellteMenge"] ." €</td></tr>";
                                    $summe += $row["Preis"] * $row["bestellteMenge"];
                                }
                            }
                        ?>

                </tbody>
                <tfoot>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td style="text-align: right;"><b>Zu zahlen:</b></td>
                        <?php
                            echo "<td><b>$summe €</b></td>";
                        ?>
                    </tr>
                </tfoot>
            </table>
        </div>
    </form>
    </div>
            
    <!-- Fixed footer -->        
    <div id="footer">
    </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>