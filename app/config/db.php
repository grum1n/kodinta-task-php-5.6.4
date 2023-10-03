<?php

session_start();
require('connect.php');

function dd($value) //to be deleted
{
    echo "<pre>", print_r($value, true), "</pre>";
    die();
}
