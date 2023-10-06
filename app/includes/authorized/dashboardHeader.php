<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML, CSS, JavaScript, jQuery, PHP, MySQL">
    <meta name="author" content="grumin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN - <?php echo $site_title; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c630c8eb00.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/normalize.css'; ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/dashboard-style.css'; ?>">
</head>
<body>
<header>
    <ul class="header-grid">
        <li class="col-1"><a href="<?php echo BASE_URL . '/views/authorized/dashboard.php'; ?>">Kodin<span>.ta</span></a></li>
        <li class="col-2">
            <div id="menu" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">Pages</a>
                </div>
                <div class="menu-button">
                <a href="javascript:void(0)" onclick="openNav()"><i class="fa fa-bars"></i></a>
            </div>
        </li>
       
        <li class="col-4">
            <div class="dropdown">
                <i onclick="myFunction()" class="fas fa-user dropbtn"></i>
                <div id="myDropdown" class="dropdown-content">
                  <a href="#"><?php echo $_SESSION['username'] ?></a>
                  <a href="<?php echo BASE_URL . '/index.php'; ?>" target="_blank"><i class="fas fa-cog"></i> Frontend</a>
                  <a href="<?php echo BASE_URL . '/views/authorized/logout.php'; ?>"><i class="fas fa-sign-out-alt"></i> Sign out</a>
                </div>
            </div>
        </li>
    </ul>
</header>