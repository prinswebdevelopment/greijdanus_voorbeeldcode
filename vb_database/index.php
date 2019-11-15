<?php

echo "runcode"; //output om te controleren of iets wordt uitgevoerd.

require 'settings.php';
require 'import.php';

$db = dbConnection();

$data = query($db, "select * from aanmeldingen", false);

dbClose($db);

print_r($data);