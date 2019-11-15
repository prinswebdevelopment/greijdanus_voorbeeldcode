<?php

function dbConnection() {
    global $dbServer, $dbName, $dbPassword, $dbUser;

    $link = mysqli_connect($dbServer, $dbUser, $dbPassword, $dbName) or die ("MySql server kan niet bereikt worden.");

    return $link;
}

function query($db, $query, $returnlist = true) {
    $resultaat = mysqli_query($db, $query);

    if(!$resultaat) {
        echo "fout in query"; // dit kan beter
        return false;
    }

    if($returnlist) {
        $list = array();
        while ($record = mysqli_fetch_assoc($resultaat)) {
            $list[] = $record;
        }
        return $list;
    } else {
        $record = mysqli_fetch_assoc($resultaat);
        return $record;
    }

}

function dbClose($db) {
    mysqli_close($db);
}

function insert($db, $tabel, $velden, $data) {
    // let op de parameters
}

function update($db, $query) {
    // of kunnen hier de parameters ook slimmer
}

function delete($db, $query) {
    // of kunnen hier de parameters ook slimmer
}

