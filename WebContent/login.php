<?php
ini_set('display_errors', '1');
include("dbconnect.php");
include("server.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
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
              
                $('#footer').load('footer.html');
                });
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
            <h1>Login</h1>
        </div>

        <?php echo $_COOKIE['userName'];?>

        <div class="panel-group" id="accordion">
            <!--LOGIN 1-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Gäste-Login</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class ="row">

                           <form id="loginformGast" method="post" action="login.php">
                                <?php include('errors2.php');?>
                                <div class="form-group">

                                    <label for="contact-name" class="col-sm-10 control-label">Tischnummer</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="usernameGast" class="form-control">
                                    </div>
                                </div>
                                                    
                                <div class="form-group">
                                    <label for="password" class="col-sm-10 control-label">Passwort</label>
                                    <div class="col-sm-6">
                                        <input type="password" name="passwordGast" class="form-control">
                                    </div>
                                </div>
                            </form>

                        </div>
                    <br>
                    <a class="btn btn-default" data-dismiss="modal">Abbrechen</a>
                    <button form="loginformGast" type="submit" class="btn btn-primary" name="login_userGast">Login</button>

                    </div>
                </div>
            </div>

            <!--LOGIN 2-->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Mitarbeiter-Login</a>
                    </h4>
                </div>
            <div id="collapse2" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div class ="row">

                        <form id="loginform" method="post" action="login.php">
                                <?php include('errors.php');?>
                            <div class="form-group">
                                <label for="contact-name" class="col-sm-10 control-label">Benutzername</label>
                                <div class="col-sm-6">
                                    <input type="text" name="username" class="form-control">
                                </div>
                            </div>
                                                
                            <div class="form-group">
                                <label for="passwordMitarbeiter" class="col-sm-10 control-label">Passwort</label>
                                <div class="col-sm-6">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>
                        </form>
                        </div>
                    <br>
                    <a class="btn btn-default" data-dismiss="modal">Abbrechen</a>
                    <button form="loginform" type="submit" class="btn btn-primary" name="login_user">Login</button>

                    <!--<button type="submit" class="btn btn-primary" onclick= "window.location.href = 'mitarbeiter.html'" "mitarbeiterseiteAufrufen()">Anmelden</button>-->                           
                </div>
            </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        // Anmeldedaten speichern, sucess: Startseite aufrufen
        function startseiteAufrufen(){
            jQuery.ajax({
                url: "...",
                type: "POST",
                dataType: "text",
                success: function(response){
                    window.location.href="index.html";
                }
            });
        }

        function mitarbeiterseiteAufrufen(){
            jQuery.ajax({
                url: "...",
                type: "POST",
                dataType: "text",
                success: function(response){
                    window.location.href="mitarbeiter.html";
                }
            });
        }
    </script>
            
    <!-- Fixed footer -->        
    <div id="footer">
    </div>

  </body>
</html>