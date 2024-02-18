<?php
session_start();
require '../dashboard_includes/header.php';
?>

<!-- SOCIAL ACCOUNTS -->
<section id="users">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
            <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_social_accounts/add_social_account.php" class="btn btn-primary d-block">Add Social Account</a>
                <?php } ?>
                <a href="/probizz/option_social_accounts/view_social_account.php" class="btn btn-info d-block mt-3">View Social Account</a>
            </div>
        </div>
    </div>
</section>

<?php require '../dashboard_includes/footer.php'; ?>