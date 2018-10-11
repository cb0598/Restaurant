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
  <body onload="doSum()">
    <script>
        $(document).ready(function() {
            $('#navbar').load('navbar.php');
            $('#footer').load('footer.html');
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

    <?php 
        $dochtml = new DOMDocument();
    ?>
    
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
                                    echo "<tr><td><input class='form-control text-input' type='number' value='1'></td><td>" . $row["Name"] . "</td><td>" . $row["Preis"] . "€</td><td><button class='btn btn-primary pull-right' data-toggle='modal' data-target='#details' onclick='getInfoButtonID(" . $row['SpeiseNr'] . ")'>Details</button></td><td><input class='form-check-input' type='checkbox' id='" . $row['SpeiseNr'] . "'</input></td></tr>";
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
                                    echo "<tr><td><input class='form-control text-input' type='number' value='1'></td><td>" . $row["Name"] . "</td><td>" . $row["Preis"] . "€</td><td><button class='btn btn-primary pull-right' data-toggle='modal' data-target='#details' onclick='getInfoButtonID(" . $row['SpeiseNr'] . ")'>Details</button></td><td><input class='form-check-input' type='checkbox' id='" . $row['SpeiseNr'] . "'</input></td></tr>";
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
                                    echo "<tr><td><input class='form-control text-input' type='number' value='1'></td><td>" . $row["Name"] . "</td><td>" . $row["Preis"] . "€</td><td><button class='btn btn-primary pull-right' data-toggle='modal' data-target='#details' onclick='getInfoButtonID(" . $row['SpeiseNr'] . ")'>Details</button></td><td><input class='form-check-input' type='checkbox' id='" . $row['SpeiseNr'] . "'</input></td></tr>";
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
                                    echo "<tr><td><input class='form-control text-input' type='number' value='1'></td><td>" . $row["Name"] . "</td><td>" . $row["Preis"] . "€</td><td><button class='btn btn-primary pull-right' data-toggle='modal' data-target='#details' onclick='getInfoButtonID(" . $row['SpeiseNr'] . ")'>Details</button></td><td><input class='form-check-input' type='checkbox' id='" . $row['SpeiseNr'] . "'</input></td></tr>";
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
            <h2 class="modal-title" id="verkaufenDialogTitel">Details</h2>
            </div>
            <div class="modal-body">
                <div id="detailsContentID">
                    <!--Inhalt im Dialog Mitarbeiter-->
                    <table class="table">

                            <?php 
                                
                                //$sqlDialog = "SELECT * FROM speise WHERE SpeiseNr = $test";
                                //$resultDialog = $db-> query($sqlDialog);

                                //$rowDialog = $resultDialog-> fetch_assoc();
                                echo "<tr>
                                        <td class='col-sm-1'>" . $rowDialog['Name'] . "</td>
                                        <td>test1</td>
                                    </tr>
                                    <tr>
                                        <td>test</td>
                                        <td>test1</td>
                                    </tr>
                                    <tr>
                                        <td>test</td>
                                        <td>test1</td>
                                    </tr>
                                    <tr>
                                        <td>test</td>
                                        <td>test1</td>
                                    </tr>";
                                echo "testchen";
                            ?>
                        
                    </table>
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

    <script>
        function getInfoButtonID(id){
            console.log(id);

            var variableToSend = id;
            $.post('speisekarte.php', {variable: variableToSend});


                <?php $variable = $_POST['variable'];
                for ($var = 0; $var < 10; $var++) {
                     echo $variable;
                 } 
                
                ?>



            //$.ajax({
            //    url: "/speisekarte.php",
            //    method: "POST",
            //    data: { id },
            //    //dataType: "JSON",
            //    success: data => {
            //        console.log(data)
            //    }
            //})


            /*$.ajax({
            type: "POST",
            url: "speisekarte.php",
            data: {"id":id},
                        success: function(response) {
                        }})

            <?php
            //$uid = isset($_POST['id']);
            //echo "hat geklappt!!!";
            //rest of code that uses $uid
            ?>*/

            $("input:checkbox").each(function(){
                var $this = $(this);
            
                if($this.is(":checked")){
                    console.log($this.attr("id"));
                }else{
                    //someObj.fruitsDenied.push($this.attr("id"));
                }
            });
                

            /*$(".clickable").click(function() {
                var userID = $(this).attr('id');
                //alert($(this).attr('id'));
                $.ajax({
                    type: "POST",
                    url: 'logtime.php',
                    data: "userID=" + userID,
                    success: function(data)
                    {
                        alert("success!");
                    }
                });
            });

        <?php //logtime.php
        //$uid = isset($_POST['userID']);
        //rest of code that uses $uid
        ?>*/
        }
    </script>

                <?php 
                if (isset($_COOKIE['tischNr'])) {//prüfen ob TischNr gesetzt
                    $tischNummer = $_COOKIE['tischNr'];

                    //MitarbeiterNr setzen
                    if ($tischNummer == 1 || $tischNummer == 3 || $tischNummer == 5) {
                        $mitarbeiterNummer = 1;
                    } else {
                        $mitarbeiterNummer = 2;
                    }

                    //SPEISE-NR HIER

                    //bestellteMenge HIER

                    $sqlWrite = "INSERT INTO bestellung (TischNr, SpeiseNr, MitarbeiterNr, bestellteMenge)
                                VALUES ($tischNummer, 10, $mitarbeiterNummer, 2)";
                    if ($db-> query($sqlWrite) === TRUE) {
                        echo "Datensatz erfolgreich eingefügt";
                    } else {
                        echo "Fehler: " . $sqlWrite . "<br>" . $db->error;
                    }

                } else {
                    //header('location: login.php');
                    echo "<h1>BITTE ANMELDEN</h1>";
                }
                
                






                ?>
  </body>
</html>