<?php
session_start();
require '../db.php';
require '../session.php';

// SELECTING ID FROM URL //
$id = $_GET['id'];

// SELECT QUERY FOR USERS TABLE //
$select = "SELECT * FROM users WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

require '../dashboard_includes/header.php';
?>

<!-- START ROW -->
<div class="row">
    <div class="col-md-10 m-auto">
        <div class="card">
            <!-- CARD HEADER -->
            <div class="card-header bg-primary text-light">
                <h1 class="text-white">Edit Users info</h1>
            </div>

            <!-- SESSION FOR UPDATE -->
            <?php if(isset($_SESSION['updated'])){ ?>
                <div class="alert alert-success mt-2">
                    <?php echo $_SESSION['updated']; ?>
                </div>
            <?php } unset($_SESSION['updated']); ?>

            <!-- CARD BODY -->
            <div class="card-body">
                <form action="update.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3"><!-- NAME -->
                        <label for="name" class="form-label">Name</label>
                        <input value="<?= $after_assoc['id'] ?>" name="id" type="hidden" class="form-control" id="name">
                        <input value="<?= $after_assoc['name'] ?>" name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3"><!-- EMAIL -->
                        <label for="email" class="form-label">Email</label>
                        <input value="<?= $after_assoc['email'] ?>" name="email" type="type" class="form-control" id="email">
                    </div>
                    <div class="mb-3"><!-- PASSWORD -->
                        <label for="pass" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="pass">
                    </div>
                    <div class="mb-3"><!-- PROFILE IMAGE -->
                        <img class="pb-2" width="60" height="60" src="uploaded/<?php echo $after_assoc['profile_image']; ?>" alt="">
                        <label for="pro" class="form-label">Profile Image</label>
                        <input name="profile_image" type="file" class="form-control" id="pro">

                        <!-- SESSION FOR INVALID IMAGE EXTENSIONS -->
                        <?php if(isset($_SESSION['invalid_extension'])){ ?>
                            <div class="alert alert-warning mt-2">
                                <?php echo $_SESSION['invalid_extension']; ?>
                            </div>
                        <?php } unset($_SESSION['invalid_extension']); ?>

                        <!-- SESSION FOR LARGE IMAGE SIZE -->
                        <?php if(isset($_SESSION['invalid_size'])){ ?>
                            <div class="alert alert-warning mt-2">
                                <?php echo $_SESSION['invalid_size']; ?>
                            </div>
                        <?php } unset($_SESSION['invalid_size']); ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END ROW -->

<?php require '../dashboard_includes/footer.php'; ?>

<!-- SWEET ALERT SESSION -->
<?php if(isset($_SESSION['success'])){ ?>
    <script>
        Swal.fire(
            'Done!',
            '<?= $_SESSION['success']; ?>',
            'success'
            )
    </script>
<?php } unset($_SESSION['success']); ?>