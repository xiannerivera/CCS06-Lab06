<?php
function greet($message) {
    $date = date("m d Y");
    $hello = "Hello World! The date today is ";
    $message = $hello . $date;

    return $message;
}
$message = '';
echo greet($message);
?>