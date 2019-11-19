<?php

function callback($buffer) {
    global $content, $meldingen;
    $buffer = str_replace("{{ titel }}", "Welkom", $buffer);
    $buffer = str_replace("{{ meldingen }}", implode("<br/>", $meldingen), $buffer);
    $buffer = str_replace("{{ content }}", $content, $buffer);
    return $buffer;
}

