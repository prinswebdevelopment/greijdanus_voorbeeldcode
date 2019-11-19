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

        case 'registreren':
            return 'registreren.php';
            break;

        default:
            return 'index.php';
            break;

    }
}