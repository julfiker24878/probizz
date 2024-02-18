<?php
session_start();
require '../dashboard_includes/header.php';
?>

<!-- ABOUT US SECTION -->
<section id="users">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
            <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_about/add_about.php" class="btn btn-primary d-block mt-3">Add About</a>
                <?php } ?>
                <a href="/probizz/option_about/view_about.php" class="btn btn-info d-block mt-3">View About</a>
            </div>
        </div>
    </div>
</section>

<?php require '../dashboard_includes/footer.php'; ?>