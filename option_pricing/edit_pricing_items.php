<?php
session_start();
require '../session.php';
require '../db.php';
require '../dashboard_includes/header.php';
$id = $_GET['id']; 
$select = "SELECT * FROM pricing_items WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header">
				<h2>Edit Choosing Reason</h2>
			</div>
			
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="update_pricing_items.php" method="POST">
					<div class="mb-3"><!-- PACKAGE NAME -->
						<label for="package_name" class="form-label">Package Name</label>
						<input value="<?= $after_assoc['id']; ?>" name="id" type="hidden" class="form-control">
						<input value="<?= $after_assoc['package_name']; ?>" name="package_name" type="text" class="form-control" id="package_name">
					</div>
					<div class="mb-3"><!-- PRICE -->
						<label for="price" class="form-label">Price</label>
						<input value="<?= $after_assoc['price']; ?>" name="price" type="text" class="form-control" id="price">
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