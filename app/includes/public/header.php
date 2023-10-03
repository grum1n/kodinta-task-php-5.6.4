<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/style.css'; ?>">
</head>

<body>
    <header class="container">
        <nav class="">
            <ul class="navigation">
                <li>
                    <a href="<?php echo BASE_URL . '/index.php'; ?>">Home</a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL . '/views/frontend/signup.php'; ?>">Signup</a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL . '/views/frontend/login.php'; ?>">Login</a>
                </li>
            </ul>
        </nav>
    </header>