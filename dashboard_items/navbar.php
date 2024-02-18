<?php
session_start();
require '../dashboard_includes/header.php';
?>

<!-- NAVBAR -->
<section id="users">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
            <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_top_menu/add_top_menu.php" class="btn btn-primary d-block mt-3">Add Top Menu</a>
                <?php } ?>
                <a href="/probizz/option_top_menu/view_top_menu.php" class="btn btn-info d-block mt-3">View Top Menu</a>

                <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_logo/add_logo.php" class="btn btn-primary d-block mt-5">Add Logo</a>
                <?php } ?>
                <a href="/probizz/option_logo/view_logo.php" class="btn btn-info d-block mt-3">View Logo</a>

                <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_main_menu/add_menu.php" class="btn btn-primary d-block mt-5">Add Main Menu</a>
                <?php } ?>
                <a href="/probizz/option_main_menu/view_menu.php" class="btn btn-info d-block mt-3">View Main Menu</a>
            </div>
        </div>
    </div>
</section>

<?php require '../dashboard_includes/footer.php'; ?>