<?php

function callback($buffer) {
    global $content;
    $buffer = str_replace("{{ titel }}", "Welkom", $buffer);
    $buffer = str_replace("{{ content }}", $content, $buffer);
    return $buffer;
}

