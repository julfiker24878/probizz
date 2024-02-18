<?php
session_start();
require '../dashboard_includes/header.php'; 
?>

<div class="row">
    <div class="col-md-6 m-auto">
        <div class="card">
            <!-- TITLE -->
            <div class="card-header">
                <h2 style="color: #111; font-family: 'Montserrat', sans-serif;">Add Site Logo</h2>
            </div>
            <!-- FORM -->
            <div class="card-body">
                <form action="post_logo.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3"><!-- LOGO TEXT -->
                        <label for="logo_text" class="form-label">Logo Text</label>
                        <input name="logo_text" type="text" class="form-control" id="logo_text">
                    </div>
                    <div class="mb-3"><!-- INSERT LOGO -->
                        <label for="logo" class="form-label">Insert Logo</label>
                        <input name="logo_image" type="file" class="form-control" id="logo">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require '../dashboard_includes/footer.php'; ?>

<!-- SWEET ALERT -->
<?php if(isset($_SESSION['success'])){ ?>
    <script>
        Swal.fire(
            'Done!',
            '<?= $_SESSION['success']; ?>',
            'success'
            )
    </script>
<?php } unset($_SESSION['success']); ?>