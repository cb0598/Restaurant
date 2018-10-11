<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8" %>
<%@ page import="java.sql.*" %>

<?php include("dbconnect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dienstplan</title>
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
            <h1>Dienstplan</h1>
        </div>

      <%--   <c:choose>
        <c:when test="${empty mitarbeiter}">
            <h3>Keine Daten für Mitarbeiter.</h3>
        </c:when>
        <c:otherwise>
        </c:otherwise>
    </c:choose> --%>

    <%
   
        //Connection conn = null;
        try {
            // Laut MySQL-Web-Seiten ist zusaetzlicher Aufruf von
            // newInstance() wegen moeglicher Probleme in
            // manchen Java-Varianten anzuraten.

            Class.forName("com.mysql.jdbc.Driver").newInstance();
            out.println("<b>MySQL-Treiber wurde geladen!</b>");
            Connection con= DriverManager.getConnection("jdbc:mysql://localhost:3306/restaurant","root","");
            Statement stmt=con.createStatement(); 
            ResultSet rs=stmt.executeQuery("select * from mitarbeiter");
            while(rs.next())  
            	out.println("  "+rs.getString(2)+"  "+rs.getString(3));  
            con.close();  
        } catch (ClassNotFoundException e) {
            out.println("<b>MySQL-Treiber konnte nicht geladen werden</b>");
            out.println("<pre><code>");
            out.println(e.getStackTrace());
            out.println("</code></pre>");
        }
    %>

        <div class="well" style="font-size: 16px">
            <table class="table">
                <thead>
                     <tr>
                        <th >Wochentag</td>
                        <th >Uhrzeit</thd>
                        <th> Wer?</th>
                     </tr>
                </thead>
                <tbody>
                    <tr>
                        <td >${mitarbeiter1.wochentag}</td>
                        <td >${mitarbeiter1.schicht}</td>
                        <td>${mitarbeiter1.name}   ${mitarbeiter1.nachname}</td>
                    </tr>

                    <tr>
                        <td >${mitarbeiter2.wochentag}</td>
                        <td >${mitarbeiter2.schicht}</td>
                        <td>${mitarbeiter2.name}   ${mitarbeiter2.nachname}</td>
                    </tr>
                    
                    <tr>
                        <td >${mitarbeiter3.wochentag}</td>
                        <td >${mitarbeiter3.schicht}</td>
                        <td>${mitarbeiter3.name}   ${mitarbeiter3.nachname}</td>
                    </tr>
                    
                    <tr>
                        <td >${mitarbeiter4.wochentag}</td>
                        <td >${mitarbeiter4.schicht}</td>
                        <td>${mitarbeiter4.name}   ${mitarbeiter4.nachname}</td>
                    </tr>
                    
                    <tr>
                        <td >${mitarbeiter5.wochentag}</td>
                        <td >${mitarbeiter5.schicht}</td>
                        <td>${mitarbeiter5.name}   ${mitarbeiter5.nachname}</td>
                    </tr>
                    
                    <tr>
                        <td >${mitarbeiter6.wochentag}</td>
                        <td >${mitarbeiter6.schicht}</td>
                        <td>${mitarbeiter6.name}   ${mitarbeiter6.nachname}</td>
                    </tr>
                    
                    <tr>
                        <td >${mitarbeiter7.wochentag}</td>
                        <td >${mitarbeiter7.schicht}</td>
                        <td>${mitarbeiter7.name}   ${mitarbeiter7.nachname}</td>
                    </tr>
                    
                    <tr>
                        <td >${mitarbeiter8.wochentag}</td>
                        <td >${mitarbeiter8.schicht}</td>
                        <td>${mitarbeiter8.name}   ${mitarbeiter8.nachname}</td>
                    </tr>
                    
                    <tr>
                        <td >${mitarbeiter9.wochentag}</td>
                        <td >${mitarbeiter9.schicht}</td>
                        <td>${mitarbeiter9.name}   ${mitarbeiter9.nachname}</td>
                    </tr>
                    
                    <tr>
                        <td >${mitarbeiter10.wochentag}</td>
                        <td >${mitarbeiter10.schicht}</td>
                        <td>${mitarbeiter10.name}   ${mitarbeiter10.nachname}</td>
                    </tr>
                    
                    <tr>
                        <td >${mitarbeiter11.wochentag}</td>
                        <td >${mitarbeiter11.schicht}</td>
                        <td>${mitarbeiter11.name}   ${mitarbeiter11.nachname}</td>
                    </tr>
                    
                    <tr>
                        <td >${mitarbeiter12.wochentag}</td>
                        <td >${mitarbeiter12.schicht}</td>
                        <td>${mitarbeiter12.name}   ${mitarbeiter12.nachname}</td>
                    </tr>
                </tbody>
            </table>
        </div> 
    </div>
            
    <!-- Fixed footer -->        
    <div id="footer">
    </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>