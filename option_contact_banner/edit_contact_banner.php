<?php
session_start();
require '../session.php';
require '../db.php';
require '../dashboard_includes/header.php';
$id = $_GET['id']; 
$select = "SELECT * FROM contact_banner WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header">
				<h2>Edit Contact Banner Content</h2>
			</div>
			
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="update_contact_banner.php" method="POST" enctype="multipart/form-data">
					<div class="mb-3"><!-- TITLE 1 -->
						<label for="title1" class="form-label">Title-1</label>
						<input value="<?= $after_assoc['id']; ?>" name="id" type="hidden" class="form-control">
						<input value="<?= $after_assoc['title1']; ?>" name="title1" type="text" class="form-control" id="title1">
					</div>
					<div class="mb-3"><!-- TITLE 2 -->
						<label for="title2" class="form-label">Title-2</label>
						<input value="<?= $after_assoc['title2']; ?>" name="title2" type="text" class="form-control" id="title2">
					</div>
					<div class="mb-3"><!-- BUTTON TEXT -->
						<label for="btn_text" class="form-label">Button Text</label>
						<input value="<?= $after_assoc['btn_text']; ?>" name="btn_text" type="text" class="form-control" id="btn_text">
					</div>
					<div class="mb-3"><!-- BANNER IMAGE -->
						<label for="img" class="form-label d-block">Banner Image</label>
						<img src="uploaded/<?= $after_assoc['contact_banner_image']; ?>" width="200" class="img-fluid mb-3">
						<input name="contact_banner_image" type="file" class="form-control" id="img">
						<?php if(isset($_SESSION['invalid_extension'])){ ?>
							<div class="alert alert-warning mt-2">
								<?= $_SESSION['invalid_extension']; ?>
							</div>
						<?php } unset($_SESSION['invalid_extension']); ?>

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
<!-- END ROW -->

<?php require '../dashboard_includes/footer.php'; ?>

<!-- SUCCESS SESSION IN SWEET ALERT -->
<?php if(isset($_SESSION['success'])){ ?>
    <script>
        Swal.fire(
            'Done!',
            '<?= $_SESSION['success']; ?>',
            'success'
            )
    </script>
<?php } unset($_SESSION['success']); ?>