<?php
session_start();
require '../dashboard_includes/header.php';
?>

<!-- USER SECTION -->
<section id="users">
    <div class="container">
        <div class="row">
            <div class="col-md-7 m-auto">
                <?php if($_SESSION['user_role'] == 1){ ?>
                <a href="/probizz/users/add_user.php" class="btn btn-primary d-block">Add User</a>
                <?php } ?>
                <a href="/probizz/users/view.php" class="btn btn-info d-block mt-3">View User</a>
            </div>
        </div>
    </div>
</section>

<?php require '../dashboard_includes/footer.php'; ?>