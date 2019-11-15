<?php

echo "runcode";

require 'settings.php';
require 'import.php';

$db = dbConnection();

$data = query($db, "select * from aanmeldingen", false);

$dbClose($db);

print_r($data);