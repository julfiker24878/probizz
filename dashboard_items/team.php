<?php
session_start();
require '../dashboard_includes/header.php';
?>

<!-- TEAM SECTION -->
<section id="users">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
            <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_team/header/add_header.php" class="btn btn-primary d-block mt-3">Add Header Content</a>
                <?php } ?>
                <a href="/probizz/option_team/header/view_header.php" class="btn btn-info d-block mt-3">View Header Content</a>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_team/add_team_member.php" class="btn btn-primary d-block mt-3">Add Team Member</a>
                <?php } ?>
                <a href="/probizz/option_team/view_team_member.php" class="btn btn-info d-block mt-3">View All Team Member</a>
                <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/option_team/add_team_accounts.php" class="btn btn-primary d-block mt-3">Add Team Accounts</a>
                <?php } ?>
                <a href="/probizz/option_team/view_team_accounts.php" class="btn btn-info d-block mt-3">View All Team Accounts</a>
            </div>
        </div>
    </div>
</section>

<?php require '../dashboard_includes/footer.php'; ?>