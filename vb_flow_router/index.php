<?php
session_start();

require 'import.php';

$content = start();

ob_start("callback");

importTemplate();

ob_end_flush();