<?php
session_start();
require '../session.php';
require '../db.php';
require '../dashboard_includes/header.php';
$id = $_GET['id']; 
$select = "SELECT * FROM counter_image WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header">
				<h2>Edit Feature Image</h2>
			</div>
			
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="update_counter_image.php" method="POST" enctype="multipart/form-data">
					<div class="mb-3"><!-- IMAGE NAME -->
						<input value="<?= $after_assoc['id']; ?>" name="id" type="hidden" class="form-control">
						<label for="name" class="form-label">Image Name</label>
						<input value="<?= $after_assoc['name']; ?>" name="name" type="text" class="form-control" id="name">
					</div>
					<div class="mb-3"><!-- COUNTER SECTION IMAGE -->
						<label for="img" class="form-label d-block">Counter Section Image</label>
						<img src="uploaded/<?= $after_assoc['image']; ?>" width="200" class="img-fluid mb-3">
						<input name="image" type="file" class="form-control" id="img">
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