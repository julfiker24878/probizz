<?php
session_start();
require '../session.php';
require '../db.php';
require '../dashboard_includes/header.php';
$id = $_GET['id']; 
$select = "SELECT * FROM portfolio_image WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header">
				<h2>Edit Portfolio Image</h2>
			</div>
			
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="update_portfolio_image.php" method="POST" enctype="multipart/form-data">
					<div class="mb-3"><!-- TAB NAME -->
						<input value="<?= $after_assoc['id']; ?>" name="id" type="hidden" class="form-control">
						<label for="title" class="form-label">Tab Name</label>
						<input style="text-transform: capitalize;" value="<?= $after_assoc['all_selected']; ?>" name="title" type="text" class="form-control" id="title">
					</div>
					<div class="mb-3"><!-- PORTFOLIO IMAGE -->
						<label for="img" class="form-label d-block">Portfolio Image</label>
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