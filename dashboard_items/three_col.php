<?php
session_start();
require '../dashboard_includes/header.php';
?>

<!-- THREE COLUMN SECTION -->
<section id="users">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
            <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_three_col/add_three_col.php" class="btn btn-primary d-block mt-3">Add Three Column Content</a>
                <?php } ?>
                <a href="/probizz/option_three_col/view_three_col.php" class="btn btn-info d-block mt-3">View Three Column Content</a>
            </div>
        </div>
    </div>
</section>

<?php require '../dashboard_includes/footer.php'; ?>