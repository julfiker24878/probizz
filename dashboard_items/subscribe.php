<?php
session_start();
require '../dashboard_includes/header.php';
?>

<!-- SUBSCRIBE -->
<section id="users">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
            <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_subscribe/header/add_header.php" class="btn btn-primary d-block mt-3">Add Header Content</a>
                <?php } ?>
                <a href="/probizz/option_subscribe/header/view_header.php" class="btn btn-info d-block mt-3">View Header Content</a>
                <a href="/probizz/option_subscribe/view_subscribe.php" class="btn btn-info d-block mt-3">View Subscribed Mails</a>
            </div>
        </div>
    </div>
</section>

<?php require '../dashboard_includes/footer.php'; ?>