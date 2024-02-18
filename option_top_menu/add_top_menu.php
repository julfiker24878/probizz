<?php
session_start();
require '../dashboard_includes/header.php'; ?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header bg-primary">
				<h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">Add Top Menu Items</h2>
			</div>
			
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="post_top_menu.php" method="POST">
					<div class="mb-3"><!-- NUMBER -->
						<label for="number" class="form-label">Number</label>
						<input name="number" type="text" class="form-control" id="number">
					</div>
					<div class="mb-3"><!-- EMAIL -->
						<label for="email" class="form-label">Email</label>
						<input name="email" type="text" class="form-control" id="email">
					</div>
					<button type="submit" class="btn btn-primary">Add</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- START ROW -->

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