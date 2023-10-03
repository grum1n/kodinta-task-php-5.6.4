<?php

function adminOnly($redirect = '/index.php')
{
    if(empty($_SESSION['username'])){
        $_SESSION['message'] = 'You are not authorized';
        $_SESSION['type'] = 'error';
        header('location: ' . BASE_URL . $redirect);
        exit();
    }
}
