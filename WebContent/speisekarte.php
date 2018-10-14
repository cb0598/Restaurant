<?php
include("dbconnect.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Speisekarte</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  </head>
  <body> <!-- onload="doSum()"-->
    <script>
        $(document).ready(function() {
            $('#navbar').load('navbar.php');
            $('#footer').load('footer.php');
            });
    </script>
    <style>
        .form-check-input {
        width: 15px;
        height: 15px;
        }
    </style>

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
                    <img src="img/menu.jpg" alt="Speisekarte">
                   
                </div>

                <h3>Vorspeisen</h3>

                <table class="table">
                    <thead>
                      <tr>
                        <th class="col-sm-1">Anzahl</th>
                        <th class="col-sm-8">Gericht</th>
                        <th class="col-sm-2">Preis</th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM speise WHERE Speiseart = 'Vorspeise'";
                            $result = $db-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_assoc()) {
                                    echo "<tr><td><input class='form-control text-input' type='number' min='0' value='1'></td><td>" . $row["Name"] . "</td><td>" . $row["Preis"] . "€</td><td><button class='btn btn-primary pull-right' data-toggle='modal' data-target='#details' onclick='getInfoButtonID(" . $row['SpeiseNr'] . ")'>Details</button></td><td><input class='form-check-input' type='checkbox' id='" . $row['SpeiseNr'] . "'</input></td></tr>";
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
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM speise WHERE Speiseart = 'Hauptspeise'";
                            $result = $db-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_assoc()) {
                                    echo "<tr><td><input class='form-control text-input' type='number' min='0' value='1'></td><td>" . $row["Name"] . "</td><td>" . $row["Preis"] . "€</td><td><button class='btn btn-primary pull-right' data-toggle='modal' data-target='#details' onclick='getInfoButtonID(" . $row['SpeiseNr'] . ")'>Details</button></td><td><input class='form-check-input' type='checkbox' id='" . $row['SpeiseNr'] . "'</input></td></tr>";
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
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM speise WHERE Speiseart = 'Nachspeise'";
                            $result = $db-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_assoc()) {
                                    echo "<tr><td><input class='form-control text-input' type='number' min='0' value='1'></td><td>" . $row["Name"] . "</td><td>" . $row["Preis"] . "€</td><td><button class='btn btn-primary pull-right' data-toggle='modal' data-target='#details' onclick='getInfoButtonID(" . $row['SpeiseNr'] . ")'>Details</button></td><td><input class='form-check-input' type='checkbox' id='" . $row['SpeiseNr'] . "'</input></td></tr>";
                                }
                            }
                        ?>

                    </tbody>
                  </table>

                <h3>Getränke</h3>
                <div id="test">
                    
                </div>

                <table class="table">
                    <thead>
                      <tr>
                        <th class="col-sm-1">Anzahl</th>
                        <th class="col-sm-8">Getränk</th>
                        <th class="col-sm-2">Preis</th>
                        <th></th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM speise WHERE Speiseart = 'Getränk'";
                            $result = $db-> query($sql);

                            if ($result-> num_rows > 0) {
                                while ($row = $result-> fetch_assoc()) {
                                    echo "<tr><td><input class='form-control text-input' type='number' min='0' value='1'></td><td>" . $row["Name"] . "</td><td>" . $row["Preis"] . "€</td><td><button class='btn btn-primary pull-right' data-toggle='modal' data-target='#details' onclick='getInfoButtonID(" . $row['SpeiseNr'] . ")'>Details</button></td><td><input class='form-check-input' type='checkbox' id='" . $row['SpeiseNr'] . "'</input></td></tr>";
                                }
                            }
                        ?>
                    </tbody>
                  </table>

            </div>
            <div class="col-sm-4">
                <div class="thumbnail bg-grey text-center">
                    <h2>Gericht des Jahres</h2>
                    <p>Entenkeule mit Knödel und Rotkraut</p>
                    <img src="img/entenkeule.jpg" alt="Entenkeule">
                    <br>
                    <p>9,50€ </p>
                    
                </div>
              </div>
        </div>

        <br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#openBestellbestätigung">Bestellung aufgeben</button>
        <p></p>

        <div class="alert alert-success" id="successDialog" style="width: 50%; display: none;">
                    <p><b>Ihre Bestellung wurde erfolgreich übermittelt!</b></p>
        </div>

        <div class="alert alert-danger" id="dangerDialog" style="width: 50%; display: none;">
                    <p><b>Bitte wählen Sie ein Gericht aus um eine Bestellung aufzugeben!</b></p>
        </div>
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

    <!--Modal-Details-->
    <div class="modal fade" id="details" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h2 class="modal-title">Details</h2>
            </div>
            <div class="modal-body">
                <div id="detailsContentID">
                    <!--Inhalt im Dialog Mitarbeiter-->
                    
                </div>
            </div>
            <div class="modal-footer">
                <p>
                <button class="btn btn-primary" data-dismiss="modal" role="button">Schließen</button>
                </p>  
            </div>
        </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="openBestellbestätigung" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2 class="modal-title">Bestätigen Sie bitte Ihre Bestellung!</h2>
            </div>
            <div class="modal-body">
                <p>
                    Ihre Bestellung ist fast abgeschlossen. Bestätigen Sie Ihre Bestellung mit der Schaltfläche im unteren Bereich.
                </p>
                <div class="alert alert-warning">
                    <p>Bitte kontrollieren Sie Ihre Bestellung bevor Sie die Bestellung abschicken. Aufgegebene Bestellungen können nicht rückgängig gemacht werden.</p>
                </div>
                <div class="alert alert-danger">
                    Bitte beachten Sie, dass Ihre Bestellung nur bearbeitet wird, wenn Sie sich mit dem Kundenlogin einloggt haben.
                </div>
                

                <button type="submit" onclick="orderProducts()" data-dismiss='modal' class="btn btn-primary">Jetzt kostenpflichtig bestellen</button>

            </div>
        </div>
        </div>
    </div> 

    <!-- Fixed footer -->        
    <div id="footer">
    </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script>
        function getInfoButtonID(id){
            $.ajax({
                url: "details.php",
                method: "GET",
                data: { id },
                success: data => {
                    document.getElementById('detailsContentID').innerHTML = data;
                }
            })
        }

        function orderProducts(){
            var orders = [];
            var amounts = [];

            $("input:checkbox").each(function(){
                var $this = $(this);
            
                if($this.is(":checked")){
                    orders.push($this.attr("id"));
                    $this.closest('tr').find("input").each(function() {
                        if (this.value != "on") {
                            amounts.push(this.value);
                        }
                    });
                }else{
                    //someObj.fruitsDenied.push($this.attr("id"));
                }
            });
            for (var i = 0; i < orders.length; i++) {
                var order = orders[i];
                var amount = amounts[i];
                $.ajax({
                    url: "bestellung.php",
                    method: "GET",
                    data: { order, amount },
                    success: data => {
                        document.getElementById("successDialog").style["display"] = "block";
                    }
                })
            }
                if (orders === undefined || orders.length == 0) {
                    document.getElementById("dangerDialog").style["display"] = "block";
                }

        }
    </script>
  </body>
</html>