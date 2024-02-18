<?php
session_start();
require '../dashboard_includes/header.php';
?>

<!-- PRICING SECTION -->
<section id="users">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
            <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_pricing/header/add_header.php" class="btn btn-primary d-block mt-3">Add Header Content</a>
                <?php } ?>
                <a href="/probizz/option_pricing/header/view_header.php" class="btn btn-info d-block mt-3">View Header Content</a>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_pricing/add_pricing_items.php" class="btn btn-primary d-block mt-3">Add Packages</a>
                <?php } ?>
                <a href="/probizz/option_pricing/view_pricing_items.php" class="btn btn-info d-block mt-3">View Packages</a>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_pricing/add_pricing_lists.php" class="btn btn-primary d-block mt-3">Add List</a>
                <?php } ?>
                <a href="/probizz/option_pricing/view_pricing_lists.php" class="btn btn-info d-block mt-3">View List</a>
            </div>
        </div>
    </div>
</section>

<?php require '../dashboard_includes/footer.php'; ?>