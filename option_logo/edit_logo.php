<?php
session_start();
require '../session.php';
require '../db.php';
require '../dashboard_includes/header.php';

// GETTING ID FROM URL //
$id = $_GET['id'];

// SELECT QUERY FOR LOGO TABLE //
$select = "SELECT * FROM logo WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

?>

<div class="row">
    <div class="col-md-6 m-auto">
        <div class="card">
            <!-- CARD HEADER -->
            <div class="card-header bg-primary">
                <h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">Edit Logo</h2>
            </div>

            <!-- CARD BODY -->
            <div class="card-body">
                <form action="update_logo.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3"><!-- INPUT FOR LOGO TEXT -->
                        <label for="logo" class="form-label">Logo Text</label>
                        <input value="<?= $after_assoc['id']; ?>" name="id" type="hidden" class="form-control">
                        <input value="<?= $after_assoc['logo_text']; ?>" name="logo_text" type="text" class="form-control" id="logo">
                    </div>
                    <div class="mb-3"><!-- INPUT FOR LOGO IMAGE -->
                        <label for="img" class="form-label d-block mt-5">Logo Image</label>
                        <img src="uploaded/<?= $after_assoc['logo_image']; ?>" width="100" class="img-fluid mb-3">
                        <input name="logo_image" type="file" class="form-control" id="img">

                        <!-- SESSION FOR INVALID IMAGE EXTENSION -->
                        <?php if(isset($_SESSION['invalid_extension'])){ ?>
                            <div class="alert alert-warning mt-2">
                                <?= $_SESSION['invalid_extension']; ?>
                            </div>
                        <?php } unset($_SESSION['invalid_extension']); ?>

                        <!-- SESSION FOR LARGE IMAGE SIZE -->
                        <?php if(isset($_SESSION['invalid_size'])){ ?>
                            <div class="alert alert-warning mt-2">
                                <?= $_SESSION['invalid_size']; ?>
                            </div>
                        <?php } unset($_SESSION['invalid_size']); ?>
                    </div>

                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

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