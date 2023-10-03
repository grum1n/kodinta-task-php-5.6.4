<?php

function validateUser($conn, $user)
{
    $errors = array();

    $name = mysqli_real_escape_string($conn, $_POST['username']);
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($name)) {
        array_push($errors, 'Username is required');
    } else {
        if(!preg_match("/^[a-zA-Z]*$/", $name)) {
            array_push($errors, 'Username is invalid');
        } else {
            $sql = "SELECT * FROM users WHERE user = '$name'";
            $result = mysqli_query($conn, $sql);
            $result_check = mysqli_num_rows($result);
            if($result_check > 0) {
                array_push($errors, 'Username already exists');
            } 
        }
    }
   
    if (empty($pwd)) {
        array_push($errors, 'Password is required');
    }
    
    if (empty($user['passwordConf'])) {
        array_push($errors, 'Password confirmation is required');
    } elseif ($user['passwordConf'] !== $pwd){
        array_push($errors, 'Password do not match');
    }
    
    return $errors;
}

function validateLogin($conn, $user)
{
    $errors = array();

    $name = mysqli_real_escape_string($conn, $user['username']);
    $pwd = mysqli_real_escape_string($conn, $user['password']);

    if (empty($name)) {
        array_push($errors, 'Username is required');
        // header("Location: ../index.php?=login=error");
        // exit();
    } else {
        if(!preg_match("/^[a-zA-Z]*$/", $name)) {
            array_push($errors, 'Username is invalid');
            // header("Location: ../index.php?=login=error");
            // exit();
        } else {
            $sql = "SELECT * FROM users WHERE user = '$name'";
            $result = mysqli_query($conn, $sql);
            $result_check = mysqli_num_rows($result);
            if($result_check < 1) {
                array_push($errors, 'Login error');
                 // header("Location: ../index.php?=login=error");
                    // exit();
            }
        }
    }

    if (empty($pwd)) {
        array_push($errors, 'Password is required');
         // header("Location: ../index.php?=login=error");
            // exit();
    }
    
    return $errors;
}