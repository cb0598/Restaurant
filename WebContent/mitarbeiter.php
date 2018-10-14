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
            $('#footer').load('footer.php');
            getData();

            setInterval(function(){
    			loadlink();
			}, 1000);
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

        <div class="well" style="font-size: 16px" id="wellID">
           
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

            ctx.fillStyle = "#32CD32";
            ctx.fillRect(200,75,100,50);

            ctx.fillStyle = "#000000";
            ctx.font="20px Arial";
            ctx.fillText("Tisch Nr. 1",200,145);
            
            ctx.fillStyle = "#32CD32";
            ctx.fillRect(200,175,100,50);

            ctx.fillStyle = "#000000";
            ctx.fillText("Tisch Nr. 2",200,245);

            ctx.fillStyle = "#32CD32";
            ctx.fillRect(200,275,100,50);

            ctx.fillStyle = "#000000";
            ctx.fillText("Tisch Nr. 3",200,345);

            ctx.fillStyle = "#32CD32";
            ctx.fillRect(500,75,100,50);

            ctx.fillStyle = "#000000";
            ctx.fillText("Tisch Nr. 4",500,145);

            ctx.fillStyle = "#32CD32";
            ctx.fillRect(500,175,100,50);

            ctx.fillStyle = "#000000";
            ctx.fillText("Tisch Nr. 5",500,245);

            ctx.fillStyle = "#32CD32";
            ctx.fillRect(500,275,100,50);

            ctx.fillStyle = "#000000";
            ctx.fillText("Tisch Nr. 6",500,345);

        </script> 
    </div>
            
    <!-- Fixed footer -->        
    <div id="footer">
    </div>
    
    <!--Modal-Bestätigung-->
    <div class="modal fade" id="bestaetigung" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h2 class="modal-title">Bestätigung</h2>
            </div>
            <div class="modal-body">
                <div id="bestaetigungContentID">
                    <!--Inhalt im Dialog Mitarbeiter-->
                    <p>Sind Sie sicher, dass Sie die folgenden Datensätze löschen wollen?</p>

                    <div class="alert alert-danger">
                    	<p>Löschen Sie Datensätze nur dann, wenn ein Kunde seine Rechnung bezahlt hat und das Restaurant verlassen hat.</p>
                    </div>

                    <p>Möchten Sie fortfahren?</p>


                </div>
            </div>
            <div class="modal-footer">
                <p>
                <button class="btn btn-primary" data-dismiss="modal" role="button">Schließen</button>
                <button class="btn btn-danger" onclick="deleteData()" data-dismiss="modal" role="button">Löschen</button>
                </p>  
            </div>
        </div>
        </div>
    </div>

    <script>
    	var dataID = null;
    	function getDataID(id){
    		console.log(id);
    		dataID = id;
    	}

    	function deleteData(){
    		$.ajax({
                url: "deleteData.php",
                method: "GET",
                data: { dataID },
                success: data => {
                	document.getElementById(dataID).innerHTML = "";
                }
            })
    	}

    	function getData(){
    		$.ajax({
                url: "bestelluebersichtMitarbeiter.php",
                method: "GET",
                data: {  },
                success: data => {
                	document.getElementById('wellID').innerHTML = data;
                }
            })
    	}

    	function loadlink(){
    		$('#wellID').load('bestelluebersichtMitarbeiter.php',function () {
         		getData();
    		});
		}

    </script>

  </body>
</html>