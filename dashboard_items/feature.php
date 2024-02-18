<?php
session_start();
require '../dashboard_includes/header.php';
?>

<!-- FEATURE SECTION -->
<section id="users">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
            <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_feature/header/add_header.php" class="btn btn-primary d-block mt-3">Add Header Content</a>
                <?php } ?>
                <a href="/probizz/option_feature/header/view_header.php" class="btn btn-info d-block mt-3">View Header Content</a>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_feature/add_feature.php" class="btn btn-primary d-block mt-3">Add Feature Left</a>
                <?php } ?>
                <a href="/probizz/option_feature/view_feature.php" class="btn btn-info d-block mt-3">View Feature Left</a>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_feature/add_feature_right.php" class="btn btn-primary d-block mt-3">Add Feature Right</a>
                <?php } ?>
                <a href="/probizz/option_feature/view_feature_right.php" class="btn btn-info d-block mt-3">View Feature Right</a>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_feature/add_feature_image.php" class="btn btn-primary d-block mt-3">Add Feature Image</a>
                <?php } ?>
                <a href="/probizz/option_feature/view_feature_image.php" class="btn btn-info d-block mt-3">View Feature Image</a>
            </div>
        </div>
    </div>
</section>

<?php require '../dashboard_includes/footer.php'; ?>