<?php

function getPage() {
    $page = 'index';
    if(isset($_GET['page'])) {
        $page = $_GET['page'];
    }


    switch($page) {
        case 'inloggen':
            return 'inloggen.php';
            break;

        case 'inloggenformulier':
            return inloggen();
            break;

        case 'registreren':
            return 'registreren.php';
            break;

        case 'registrerenformulier':
            return registreren();
            break;

        default:
            return 'index.php';
            break;

    }
}

function inloggen() {
    global $meldingen;
    if($_POST['gebruikersnaam'] && $_POST['wachtwoord']) {
        // controleren gebruikersnaam en wachtwoord

        // akkoord dan
        $meldingen[] = "Succesvol ingelogd!";
        return 'index.php';
    } else {
        $meldingen[] = "Alle velden moeten ingevuld worden.";
        return 'inloggen.php';
    }
}

function registreren() {
    global $meldingen;
    if($_POST['gebruikersnaam'] && $_POST['wachtwoord'] && $_POST['wachtwoord2']) {
        // controleren en opslaan in database

        // akkoord dan
        $meldingen[] = "Succesvol geregistreerd!";
        return 'index.php';
    } else {
        $meldingen[] = "Alle velden moeten ingevuld worden.";
        return 'registreren.php';
    }
}