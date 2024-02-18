<?php
session_start();
require '../dashboard_includes/header.php';
?>

<!-- BANNER SECTION -->
<section id="users">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
            <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_banner/add_banner.php" class="btn btn-primary d-block mt-3">Add Banner</a>
                <?php } ?>
                <a href="/probizz/option_banner/view_banner.php" class="btn btn-info d-block mt-3">View Banner</a>
            </div>
        </div>
    </div>
</section>

<?php require '../dashboard_includes/footer.php'; ?>