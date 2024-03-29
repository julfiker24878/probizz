<?php
session_start();
require '../dashboard_includes/header.php';
?>

<!-- COUNTER SECTION -->
<section id="users">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
            <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_counter/add_counter.php" class="btn btn-primary d-block mt-3">Add Counter</a>
                <?php } ?>
                <a href="/probizz/option_counter/view_counter.php" class="btn btn-info d-block mt-3">View Counter</a>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_counter/add_counter_image.php" class="btn btn-primary d-block mt-3">Add Section Image</a>
                <?php } ?>
                <a href="/probizz/option_counter/view_counter_image.php" class="btn btn-info d-block mt-3">View Section Image</a>
            </div>
        </div>
    </div>
</section>

<?php require '../dashboard_includes/footer.php'; ?>