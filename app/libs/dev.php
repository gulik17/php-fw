<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

function deb($str, $die = true) {
    echo '<pre>';
    print_r($str);
    echo '</pre>';
    if ($die) {
        die();
    }
}
