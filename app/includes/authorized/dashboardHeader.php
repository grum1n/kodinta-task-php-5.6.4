<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN - <?php echo $site_title; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/style.css'; ?>">
</head>

<body>
    <header class="container">
        <?php if (isset($_SESSION['username'])) : ?>
            <nav>
                <ul>
                    <li>
                    <a href="<?php echo BASE_URL . '/views/authorized/dashboard.php'; ?>">dashboard</a>
                    </li>
                    <li>
                        <?php echo $_SESSION['username']; ?>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL . '/views/authorized/logout.php' ?>" class="">logout</a>
                    </li>
                </ul>
            </nav>
        <?php endif; ?>
    </header>