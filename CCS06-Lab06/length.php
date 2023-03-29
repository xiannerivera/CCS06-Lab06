<?php

function compute($value) {
    $value = strlen($value);
    $value = $value * 2;
    return $value;
}
$value = "TWISTER";
echo compute($value);
?>
