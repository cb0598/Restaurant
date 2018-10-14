<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8" %>

<?php include("dbconnect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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

    <script>
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
            <h1>Dienstplan</h1>
        </div>

        <div class="well" style="font-size: 16px">
            <table class="table">
                <thead>
                     <tr>
                        <th >Wochentag</th>
                        <th >Uhrzeit</th>
                        <th> Wer?</th>
                     </tr>
                </thead>
                <tbody>
                    <tr>
                        <td >${arbeitseinheit1.wochentag}</td>
                        <td >${arbeitseinheit1.schicht}</td>
                        <td>${arbeitseinheit1.mitarbeiterNr1} & ${arbeitseinheit1.mitarbeiterNr2}</td>
                    </tr>

                    <tr>
                        <td >${arbeitseinheit2.wochentag}</td>
                        <td >${arbeitseinheit2.schicht}</td>
                        <td>${arbeitseinheit2.mitarbeiterNr1} & ${arbeitseinheit2.mitarbeiterNr2}</td>
                    </tr>
                    
                    <tr>
                        <td >${arbeitseinheit3.wochentag}</td>
                        <td >${arbeitseinheit3.schicht}</td>
                        <td>${arbeitseinheit3.mitarbeiterNr1} & ${arbeitseinheit3.mitarbeiterNr2}</td>
                    </tr>
                    
                    <tr>
                        <td >${arbeitseinheit4.wochentag}</td>
                        <td >${arbeitseinheit4.schicht}</td>
                        <td>${arbeitseinheit4.mitarbeiterNr1} & ${arbeitseinheit4.mitarbeiterNr2}</td>
                    </tr>
                    
                    <tr>
                        <td >${arbeitseinheit5.wochentag}</td>
                        <td >${arbeitseinheit5.schicht}</td>
                        <td>${arbeitseinheit5.mitarbeiterNr1} & ${arbeitseinheit5.mitarbeiterNr2}</td>
                    </tr>
                    
                    <tr>
                        <td >${arbeitseinheit6.wochentag}</td>
                        <td >${arbeitseinheit6.schicht}</td>
                        <td>${arbeitseinheit6.mitarbeiterNr1} & ${arbeitseinheit6.mitarbeiterNr2}</td>
                    </tr>
                    
                    <tr>
                        <td >${arbeitseinheit7.wochentag}</td>
                        <td >${arbeitseinheit7.schicht}</td>
                        <td>${arbeitseinheit7.mitarbeiterNr1} & ${arbeitseinheit7.mitarbeiterNr2}</td>
                    </tr>
                    
                    <tr>
                        <td >${arbeitseinheit8.wochentag}</td>
                        <td >${arbeitseinheit8.schicht}</td>
                        <td>${arbeitseinheit8.mitarbeiterNr1} & ${arbeitseinheit8.mitarbeiterNr2}</td>
                    </tr>
                    
                    <tr>
                        <td >${arbeitseinheit9.wochentag}</td>
                        <td >${arbeitseinheit9.schicht}</td>
                        <td>${arbeitseinheit9.mitarbeiterNr1} & ${arbeitseinheit9.mitarbeiterNr2}</td>
                    </tr>
                    
                    <tr>
                        <td >${arbeitseinheit10.wochentag}</td>
                        <td >${arbeitseinheit10.schicht}</td>
                        <td>${arbeitseinheit10.mitarbeiterNr1} & ${arbeitseinheit10.mitarbeiterNr2}</td>
                    </tr>
                    
                    <tr>
                        <td >${arbeitseinheit11.wochentag}</td>
                        <td >${arbeitseinheit11.schicht}</td>
                        <td>${arbeitseinheit11.mitarbeiterNr1} & ${arbeitseinheit11.mitarbeiterNr2}</td>
                    </tr>
                    
                    <tr>
                        <td >${arbeitseinheit12.wochentag}</td>
                        <td >${arbeitseinheit12.schicht}</td>
                        <td>${arbeitseinheit12.mitarbeiterNr1} & ${arbeitseinheit12.mitarbeiterNr2}</td>
                    </tr>
                </tbody>
            </table>
        </div> 
    </div>
            
    <!-- Fixed footer -->        
    <div id="footer">
    </div>

  </body>
</html>