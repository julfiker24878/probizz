<?php
session_start();
require '../dashboard_includes/header.php';
?>

<!-- FOOTER -->
<section id="users">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
            <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_footer_credit/add_footer_credit.php" class="btn btn-primary d-block mt-3">Add Footer Credit</a>
                <?php } ?>
                <a href="/probizz/option_footer_credit/view_footer_credit.php" class="btn btn-info d-block mt-3">View Footer Credit</a>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_important_links/add_important_links.php" class="btn btn-primary d-block mt-3">Add Important Links</a>
                <?php } ?>
                <a href="/probizz/option_important_links/view_important_links.php" class="btn btn-info d-block mt-3">View Important Links</a>
            </div>
        </div>
    </div>
</section>

<?php require '../dashboard_includes/footer.php'; ?>