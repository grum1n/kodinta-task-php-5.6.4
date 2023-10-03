<?php

include('../../path.php');
include(ROOT_PATH . '/app/controllers/users.php');
$site_title = 'Login';

?>

<?php include(ROOT_PATH . '/app/includes/public/header.php'); ?>

<main>
    <section class="">
        <div class="">
            <h3 class="form-title">Sign Up</h3>

            <?php include(ROOT_PATH . '/app/helpers/formErrors.php') ?>

            <form action="login.php" method="post">
               <div>
                    <label>User name</label>
                    <input type="text" name="username" value="<?php echo $username; ?>" class="">
                </div>

                <div>
                    <label>Password</label>
                    <input type="password" name="password" value="<?php echo $password; ?>" class="">
                </div>

                <div>
                    <button type="submit" name="login-btn" class="">Login</button>
                </div>

                <p class="">Or <a href="<?php echo BASE_URL . '/views/frontend/signup.php'; ?>">Sign up</a></p>
            </form>
        </div>
    </section>
</main>

<?php include(ROOT_PATH . '/app/includes/public/footer.php'); ?>