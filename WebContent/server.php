<?php

ini_set('display_errors', '1');
include("dbconnect.php");
session_start();

    $username = "";
    $errors = array();

    $tischnr = "";
    $errors2 = array();

    //Mitarbeiter-Login
    if (isset($_POST['login_user'])) {
        
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (empty($username)) {
            array_push($errors, "Geben Sie Ihren Benutzernamen ein!");
        }

        if (empty($password)) {
            array_push($errors, "Geben Sie ein gültiges Passwort ein!");
        }

        if (count($errors) == 0) {
            $query ="SELECT * FROM anmeldedaten WHERE Benutzername='$username' AND Passwort='$password'";
            $result = mysqli_query($db, $query);

            if (mysqli_num_rows($result) == 1) {
                $eingeloggtAls = "$username";
                setcookie("userName", $eingeloggtAls);
                $isMitarbeiter = "true";
                setcookie("isMitarbeiter", $isMitarbeiter);

                $row = $result-> fetch_assoc();
                $mitarbeiterNummer = $row["MitarbeiterNr"];
                setcookie("mitarbeiterNr", $mitarbeiterNummer);

                header('location: index.html');
            } else {
                array_push($errors, "Der Benutzername oder das Passwort sind inkorrekt!");
            }
        }
    }

    //Gast-Login
    if (isset($_POST['login_userGast'])) {
        
        $tischnr = mysqli_real_escape_string($db, $_POST['usernameGast']);
        $passwordGuest = mysqli_real_escape_string($db, $_POST['passwordGast']);

        if (empty($tischnr)) {
            array_push($errors2, "Geben Sie Ihren Benutzernamen ein!");
        }

        if (empty($passwordGuest)) {
            array_push($errors2, "Geben Sie ein gültiges Passwort ein!");
        }

        if (count($errors2) == 0) {
            $queryGuest ="SELECT * FROM tisch WHERE TischNr='$tischnr' AND SessionPasswort='$passwordGuest'";
            $resultGuest = mysqli_query($db, $queryGuest);

            if (mysqli_num_rows($resultGuest) == 1) {
                $nummerTisch = "$tischnr";
                setcookie("tischNr", $nummerTisch);
                $eingeloggtAls = "Tisch Nr. $tischnr";
                setcookie("userName", $eingeloggtAls);
                $isMitarbeiter = "false";
                setcookie("isMitarbeiter", $isMitarbeiter);

                header('location: index.html');
            } else {
                array_push($errors2, "Der Benutzername oder das Passwort sind inkorrekt!");
            }
        }
    }
    ?>