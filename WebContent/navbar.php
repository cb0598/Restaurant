<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navigationsleiste</title>

 </head>

 <body>
  <?php if (isset($_GET['logout'])) {
    setcookie("userName", "", time()-3600);
    session_destroy();
    header("location: login.php");
  }?>
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
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Start</a></li>       
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Wir über uns <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="kontakt.html">Kontakt</a></li> 
                    <li><a href="oeffnungszeiten.html">Öffnungszeiten</a></li>
                    <li><a href="fotosundvideos.html">Fotos und Videos</a></li>
                    <li><a href="dasteam.html">Das Team</a></li>
                </ul>
             </li>     
            <li><a href="speisekarte.php">Speisekarte</a></li> 
            <?php if (isset($_COOKIE['userName']) && $_COOKIE['isMitarbeiter'] == "false") {
              echo "<li><a href='meinebestellung.php'>Meine Bestellung</a></li>";
            }?>
            <?php if (isset($_COOKIE['userName']) && $_COOKIE['isMitarbeiter'] == "true") {
              echo "<li><a href='mitarbeiter.php'>Übersicht</a></li>";
              echo "<li><a href='ArbeitseinheitServlet'>Dienstplan</a></li>";
            }?>

            <?php if (isset($_COOKIE['userName'])) {
            echo "<li><a><b>" . $_COOKIE['userName'] . "</b></a></li>";}?>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="img/account.svg"></img><b class="caret"></b> </a>
                <ul class="dropdown-menu">
                    <?php if (!isset($_COOKIE['userName'])) {
                      echo "<li><a href='login.php'>Anmelden</a></li>";
                    }
                     
                    ?>
                    <?php if (isset($_COOKIE['userName'])) {
                      echo "<li><a href='logout.php'>Abmelden</a></li>";
                    }?>
                </ul>
             </li> 
          </ul>
        </div>
      </div>
    </div>
  </body>