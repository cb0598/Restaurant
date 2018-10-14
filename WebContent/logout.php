<?php 
session_start();
session_unset();
setcookie("userName", "", time()-3600);
setcookie("isMitarbeiter", "", time()-3600);
setcookie("mitarbeiterNr", "", time()-3600);
setcookie("tischNr", "", time()-3600);
header("Location: index.html");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logout</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  </head>
  <body onload="zurueckIndex()">

    <script type="text/javascript">
         $(document).ready(function() {
              
                $('#footer').load('footer.php');
                });


        function zurueckIndex(){
             window.setTimeout(function(){
            window.location.href = "index.html";
            }, 5000); //Test: 5sec 
        }

    </script>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
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
      </div>
    </div>
    
    <div class="container">
        <div class="page-header">
            <h1>Logout</h1>
        </div>

        <p style="font-size: 16px">Sie haben sich erfolgreich abgemeldet!</p>
    </div>
 <!--Hier Inhalt-->
            
    <!-- Fixed footer -->        
    <div id="footer">
    </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>