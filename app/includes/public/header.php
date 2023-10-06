<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $site_title; ?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/normalize.css'; ?>">
</head>

<body>
    <header class="clearfix">
        <div class="logo">
            <a href="<?php echo BASE_URL . '/index.php'; ?>">
                <h1 class="logo-text"><span>Kodin</span>.ta</h1>
            </a>
        </div>
        <div class="fa fa-reorder menu-toggle"></div>
        <nav>
            <ul>
                <li><a href="<?php echo BASE_URL . '/index.php'; ?>">Home</a></li>
                <?php if(isset($_SESSION['u_id'])) : ?>
                    <li>
                        <a href="#" class="userinfo">
                            <i class="fa fa-user"></i>
                            <?php echo $_SESSION['username']; ?>
                            <i class="fa fa-chevron-down"></i>
                        </a>
                        <ul class="dropdown">
                            <?php if ($_SESSION['username']) : ?>
                                <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a></li>
                            <?php endif; ?>

                            <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">logout</a></li>
                        </ul>
                    </li>
                <?php else : ?>
                    <li><a href="<?php echo BASE_URL . '/views/frontend/signup.php'; ?>">Sign up</a></li>
                    <li>
                        <a href="<?php echo BASE_URL . '/views/frontend/login.php'; ?>">
                            <i class="fa fa-sign-in"></i>
                            Login
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>