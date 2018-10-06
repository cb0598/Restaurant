<?php
include("dbconnect.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap 3 Tutorial from BootstrapBay.com">
    <meta name="author" content="BootstrapBay.com">
    <title>Speisekarte</title>
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
                $('#navbar').load('navbar.html');
                $('#footer').load('footer.html');
                });
            </script>

    <!-- Fixed navbar -->
    <div id="navbar">
    </div>
    
	<div class="container">
        <div class="page-header">
            <h1>Speisekarte</h1>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <div class="thumbnail">
                    <img src="img/menu.jpg" alt="Speisekarte Single Page Portfolio">
                   
                </div>

                <h3>Vorspeisen</h3>

                <table class="table">
                    <thead>
                      <tr>
                        <th class="col-sm-1">Anzahl</th>
                        <th class="col-sm-8">Gericht</th>
                        <th class="col-sm-2">Preis</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM speise WHERE Speiseart = 'Vorspeise'";
                            $result = $db-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_assoc()) {
                                    echo "<tr><td><input class='form-control text-input' type='number' value='1'></td><td>" . $row["Name"] . "</td><td>" . $row["Preis"] . "€</td><td><button class='btn btn-primary pull-right' data-toggle='modal' data-target='#contact'>Bestellen</button></td></tr>";
                                }
                            }
                        ?>
                        

                    </tbody>
                  </table>

                <h3>Hauptspeisen</h3>

                <table class="table">
                    <thead>
                      <tr>
                        <th class="col-sm-1">Anzahl</th>
                        <th class="col-sm-8">Gericht</th>
                        <th class="col-sm-2">Preis</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM speise WHERE Speiseart = 'Hauptspeise'";
                            $result = $db-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_assoc()) {
                                    echo "<tr><td><input class='form-control text-input' type='number' value='1'></td><td>" . $row["Name"] . "</td><td>" . $row["Preis"] . "€</td><td><button class='btn btn-primary pull-right' data-toggle='modal' data-target='#contact'>Bestellen</button></td></tr>";
                                }
                            }
                        ?>

                    </tbody>
                  </table>

                <h3>Desserts</h3>

                <table class="table">
                    <thead>
                      <tr>
                        <th class="col-sm-1">Anzahl</th>
                        <th class="col-sm-8">Gericht</th>
                        <th class="col-sm-2">Preis</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM speise WHERE Speiseart = 'Nachspeise'";
                            $result = $db-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_assoc()) {
                                    echo "<tr><td><input class='form-control text-input' type='number' value='1'></td><td>" . $row["Name"] . "</td><td>" . $row["Preis"] . "€</td><td><button class='btn btn-primary pull-right' data-toggle='modal' data-target='#contact'>Bestellen</button></td></tr>";
                                }
                            }
                        ?>

                    </tbody>
                  </table>

                <h3>Getränke</h3>

                <table class="table">
                    <thead>
                      <tr>
                        <th class="col-sm-1">Anzahl</th>
                        <th class="col-sm-8">Getränk</th>
                        <th class="col-sm-2">Preis</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM speise WHERE Speiseart = 'Getränk'";
                            $result = $db-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_assoc()) {
                                    echo "<tr><td><input class='form-control text-input' type='number' value='1'></td><td>" . $row["Name"] . "</td><td>" . $row["Preis"] . "€</td><td><button class='btn btn-primary pull-right' data-toggle='modal' data-target='#contact'>Bestellen</button></td></tr>";
                                }
                            }
                        ?>
                    </tbody>
                  </table>

            </div>
            <div class="col-sm-4">
                <div class="thumbnail bg-grey text-center">
                    <h2>Gericht des Tages</h2>
                    <p>Entenkeule mit Knödel und Rotkraut </p>
                    <img src="img/entenkeule.jpg" alt="Entenkeule">
                    <br>
                    <p>9,50€ </p>
                    
                </div>
              </div>
        </div>

        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#openBestellbestätigung">Bestellung aufgeben</button>
    </div>

    <script>
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

    <!-- Modal -->
    <form action="">
        <div class="modal fade" id="openBestellbestätigung" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <h2 class="modal-title" id="exampleModalLongTitle">Bestätigen Sie bitte Ihre Bestellung!</h2>
              </div>
              <div class="modal-body">
                    <div class="well" style="font-size: 16px">
                    <table class="table">
                        <thead>
                             <tr>
                                <th class="col-sm-1">Anzahl</td>
                                <th class="col-sm-8">Gericht</thd>
                                <th class="col-sm-2">Für wen?</th>
                                <th class="col-sm-2">Preis</th>
                                <th class="col-sm-2"></th>
                             </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1 </td>
                                <td>Hauptspeise: Rindergulasch mit Käsespätzle</td>
                                <td>Erwachsener</td>
                                <td><input name="anzahl" id="input" size="2" value="8.9€"></td>
                                <td> <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#contact">Entfernen</button>
                            </tr>

                            <tr>
                                <td>1 </td>
                                <td>Hauptspeise: Rindergulasch mit Käsespätzle</td>
                                <td>Erwachsener</td>
                                <td><input name="anzahl" id="input" size="2" value="8.9€"></td>
                                <td> <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#contact">Entfernen</button>
                            </tr>
                            <tr>
                                <td>1 </td>
                                <td>Hauptspeise: Rindergulasch mit Käsespätzle</td>
                                <td>Erwachsener</td>
                                <td><input name="anzahl" id="input" size="2" value="8.9€"></td>
                                <td> <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#contact">Entfernen</button>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td> </td>
                                <td> </td>
                                <td> </td>
                                <td><input name="ausgabe" id="output" size="2"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <br>
                 <button type="submit" class="btn btn-primary">Jetzt kostenpflichtig bestellen</button>
                   
             
              </div>
            </div>
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