<?php
session_start();
require '../dashboard_includes/header.php';
?>

<!-- CONTACT SECTION -->
<section id="users">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
            <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_contact/header/add_header.php" class="btn btn-primary d-block mt-3">Add Header Content</a>
                <?php } ?>
                <a href="/probizz/option_contact/header/view_header.php" class="btn btn-info d-block mt-3">View Header Content</a>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_contact_banner/add_contact_banner.php" class="btn btn-primary d-block mt-3">Add Contact Banner Content</a>
                <?php } ?>
                <a href="/probizz/option_contact_banner/view_contact_banner.php" class="btn btn-info d-block mt-3">View Contact Banner Content</a>
                <a href="/probizz/option_contact/form/view_contact_form.php" class="btn btn-primary d-block mt-3">View Clients Query</a>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_contact/add_contact.php" class="btn btn-info d-block mt-3">Add Contact Us Section Content</a>
                <?php } ?>
                <a href="/probizz/option_contact/view_contact.php" class="btn btn-primary d-block mt-3">View Contact Us Section Content</a>
            </div>
        </div>
    </div>
</section>

<?php require '../dashboard_includes/footer.php'; ?>