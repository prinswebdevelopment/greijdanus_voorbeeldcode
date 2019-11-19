<?php

function start() {
    $page = getPage();

    ob_start();
    require('template/' . $page);
    return ob_get_clean();
}