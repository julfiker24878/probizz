<?php
session_start();
require '../dashboard_includes/header.php';
?>

<!-- TESTIMONIAL SECTION -->
<section id="users">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
            <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_testimonial/header/add_header.php" class="btn btn-primary d-block mt-3">Add Header Content</a>
                <?php } ?>
                <a href="/probizz/option_testimonial/header/view_header.php" class="btn btn-info d-block mt-3">View Header Content</a>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_testimonial/add_testimonial.php" class="btn btn-primary d-block mt-3">Add Testimonial</a>
                <?php } ?>
                <a href="/probizz/option_testimonial/view_testimonial.php" class="btn btn-info d-block mt-3">View Testimonial</a>
            </div>
        </div>
    </div>
</section>

<?php require '../dashboard_includes/footer.php'; ?>