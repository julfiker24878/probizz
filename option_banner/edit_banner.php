<?php
session_start();
require '../session.php';
require '../db.php';
require '../dashboard_includes/header.php';
$id = $_GET['id']; 
$select = "SELECT * FROM banner WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header">
				<h2>Edit Banner Section</h2>
			</div>
			
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="update_banner.php" method="POST" enctype="multipart/form-data">
					<div class="mb-3"><!-- TITLE -->
						<input value="<?= $after_assoc['id']; ?>" name="id" type="hidden" class="form-control">
						<label for="heading" class="form-label">Title</label>
						<input value="<?= $after_assoc['heading']; ?>" name="heading" type="text" class="form-control" id="heading">
					</div>
					<div class="mb-3"><!-- DESCRIPTION -->
						<label for="description" class="form-label">Description</label>
						<textarea name="description" class="form-control" id="description" rows="5"><?= $after_assoc['description']; ?></textarea>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3"><!-- BUTTON 1 TEXT -->
								<label for="btn1_text" class="form-label">Button1 Text</label>
								<input value="<?= $after_assoc['btn1_text']; ?>" name="btn1_text" class="form-control" id="btn1_text">
							</div>
							<div class="mb-3"><!-- BUTTON 2 TEXT -->
								<label for="btn2_text" class="form-label">Button2 Text</label>
								<input value="<?= $after_assoc['btn2_text']; ?>" name="btn2_text" class="form-control" id="btn2_text">
							</div>
						</div>

						<div class="col-md-6">
							<div class="mb-3"><!-- BUTTON 1 LINK -->
								<label for="btn1_link" class="form-label">Button1 Link</label>
								<input value="<?= $after_assoc['btn1_link']; ?>" name="btn1_link" class="form-control" id="btn1_link">
							</div>
							<div class="mb-3"><!-- BUTTON 2 LINK -->
								<label for="btn2_link" class="form-label">Button2 Link</label>
								<input value="<?= $after_assoc['btn2_link']; ?>" name="btn2_link" class="form-control" id="btn2_link">
							</div>
						</div>
					</div>
					<div class="mb-3"><!-- BANNER IMAGE -->
						<label for="img" class="form-label">Banner Image</label>
						<img src="uploaded/<?= $after_assoc['banner_image']; ?>" width="70" class="img-fluid mb-3">
						<input name="banner_image" type="file" class="form-control" id="img">
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