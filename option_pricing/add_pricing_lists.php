<?php
session_start();
require '../db.php';

// PACKAGE ITEMS
$select_package_items = "SELECT * FROM pricing_items";
$package_items_query = mysqli_query($db_connect, $select_package_items);

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
				<form action="post_pricing_lists.php" method="POST">
					<select name="package_id" class="form-select" aria-label="Default select example"><!-- SELECT PACKAGE -->
						<option selected>Select Package</option>
						<?php foreach($package_items_query as $package){ ?>
						<option value="<?= $package['id']; ?>"><?= $package['package_name']; ?></option>
						<?php } ?>
					</select>
					<div class="mb-3"><!-- PRICE -->
						<label for="list" class="form-label mt-5">Add List</label>
						<input name="list" type="text" class="form-control" id="list">
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