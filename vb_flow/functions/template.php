<?php

function callback($buffer) {
    $buffer = str_replace("{{ titel }}", "Welkom", $buffer);
    $buffer = str_replace("{{ content }}", "<h1>Content</h1>", $buffer);
    return $buffer;
}