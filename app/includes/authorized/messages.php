<?php if (isset($_SESSION['message'])) : ?>
    <div class=" ">
        <li class="">
            <?php echo $_SESSION['message']; ?>
        </li>
        <?php
            unset($_SESSION['message']);
            unset($_SESSION['type']);
        ?>
    </div>
<?php endif; ?>