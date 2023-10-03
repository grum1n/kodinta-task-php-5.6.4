<?php
include_once(ROOT_PATH . "/app/config/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include_once(ROOT_PATH . "/app/helpers/validateUser.php");

$users = selectAll('users');

$errors = array();
$username = '';
$password = '';
$passwordConf = '';

if(isset($_POST['register-btn'])){
    $errors = validateUser($conn, $_POST);

    if (count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['passwordConf']);
       
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(user,password) VALUES('$username','$hashedPwd');";
        mysqli_query($conn, $sql);
      
        $_SESSION['username'] = $username;
        $_SESSION['message'] = 'You are now logged in';
        $_SESSION['type'] = 'success';
        header('Location: ' . BASE_URL . '/views/authorized/dashboard.php');
        exit();
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }
} 

if(isset($_POST['login-btn'])){
    $errors = validateLogin($conn, $_POST);

    if (count($errors) === 0) {
        unset($_POST['login-btn']);
        $user = $_POST;
        $username = $_POST['username'];
        $pwd = $_POST['password'];
        $sql = "SELECT * FROM users WHERE user = '$username'";
        $result = mysqli_query($conn, $sql);
        $result_check = mysqli_num_rows($result);
       
        if($row = mysqli_fetch_assoc($result)) {
            $hashedPwdCheck = password_verify($pwd, $row['password']);
            if($hashedPwdCheck == false) {
                array_push($errors, 'Wrong credentials.');
                // header("Location: ../index.php?=login=error");
                // exit();
            } elseif ($hashedPwdCheck == true) {
                $_SESSION['username'] =  $username;
                $_SESSION['message'] = "User logged in successfully";
                header('Location: ' . BASE_URL . '/views/authorized/dashboard.php');
                exit();
            }
        }
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
}