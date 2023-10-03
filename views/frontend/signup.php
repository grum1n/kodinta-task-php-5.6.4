<?php

include('../../path.php');
include(ROOT_PATH . '/app/controllers/users.php');
$site_title = 'Sign up';

?>

<?php include(ROOT_PATH . '/app/includes/public/header.php'); ?>

<main>
    <section class="">
        <div class="">
            <h3 class="form-title">Sign Up</h3>

            <?php include(ROOT_PATH . '/app/helpers/formErrors.php') ?>

            <form action="signup.php" method="post">
                <div>
                    <label>User name</label>
                    <input type="text" name="username" value="<?php echo $username; ?>" class="">
                </div>

                <div>
                    <label>Password</label>
                    <input type="password" name="password" value="<?php echo $password; ?>" class="">
                </div>

                <div>
                    <label>Confirm Password</label>
                    <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="">
                </div>

                <div>
                    <button type="submit" name="register-btn" class="">Register</button>
                </div>

                <p class="">Or <a href="<?php echo BASE_URL . '/views/frontend/login.php'; ?>">Sign In</a></p>
            </form>
        </div>
    </section>
</main>

<?php include(ROOT_PATH . '/app/includes/public/footer.php'); ?>