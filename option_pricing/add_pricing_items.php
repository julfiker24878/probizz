<?php
session_start();
require '../dashboard_includes/header.php'; ?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header bg-primary">
				<h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">Add Package</h2>
			</div>
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="post_pricing_items.php" method="POST">
					<div class="mb-3"><!-- PACKAGE NAME -->
						<label for="package_name" class="form-label">Package Name</label>
						<input name="package_name" type="text" class="form-control" id="package_name">
					</div>
					<div class="mb-3"><!-- PRICE -->
						<label for="price" class="form-label">Price</label>
						<input name="price" type="text" class="form-control" id="price">
					</div>

					<button type="submit" class="btn btn-primary">Add</button>
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