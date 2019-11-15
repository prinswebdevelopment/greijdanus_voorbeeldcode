<?php
session_start();

require 'import.php';

ob_start("callback");

importTemplate();

ob_end_flush();