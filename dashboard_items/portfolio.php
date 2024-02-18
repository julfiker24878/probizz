<?php
session_start();
require '../dashboard_includes/header.php';
?>

<!-- PORTFOLIO SECTION -->
<section id="users">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
            <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_portfolio/header/add_header.php" class="btn btn-primary d-block mt-3">Add Header Content</a>
                <?php } ?>
                <a href="/probizz/option_portfolio/header/view_header.php" class="btn btn-info d-block mt-3">View Header Content</a>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_portfolio/add_portfolio_tabs.php" class="btn btn-primary d-block mt-3">Add Portfolio Tabs</a>
                <?php } ?>
                <a href="/probizz/option_portfolio/view_portfolio_tabs.php" class="btn btn-info d-block mt-3">View Portfolio Tabs</a>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_portfolio/add_portfolio_image.php" class="btn btn-primary d-block mt-3">Add Portfolio Image</a>
                <?php } ?>
                <a href="/probizz/option_portfolio/view_portfolio_image.php" class="btn btn-info d-block mt-3">View Portfolio Image</a>
            </div>
        </div>
    </div>
</section>

<?php require '../dashboard_includes/footer.php'; ?>