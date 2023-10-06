<?php

include('../../path.php');
include(ROOT_PATH . '/app/controllers/users.php');
$site_title = 'Sign Up';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/normalize.css'; ?>">
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/style.css'; ?>">
</head>

<body>
    <main>
        <section class="auth-content">
            <?php include(ROOT_PATH . '/app/helpers/formErrors.php') ?>

            <form action="signup.php" method="post">
                <div>
                    <label>User name</label>
                    <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
                </div>

                <div>
                    <label>Password</label>
                    <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
                </div>

                <div>
                    <label>Confirm Password</label>
                    <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
                </div>

                <div>
                    <button type="submit" name="register-btn" class="btn">Register</button>
                </div>

                <p class="auth-nav"><a href="<?php echo BASE_URL . '/index.php'; ?>">Home</a> <a href="<?php echo BASE_URL . '/views/frontend/login.php'; ?>">Login</a></p>
            </form>
        </section>
    </main>

</body>

</html>