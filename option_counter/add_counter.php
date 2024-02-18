<?php
session_start();
require '../dashboard_includes/header.php'; ?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header bg-primary">
				<h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">Add Counter Content</h2>
			</div>
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="post_counter.php" method="POST" enctype="multipart/form-data">
					<div class="mb-3"><!-- ICON -->
						<label for="icon" class="form-label">Icon Class</label>
						<input name="icon" type="text" class="form-control" id="icon">
					</div>
					<div class="mb-3"><!-- NUMBER -->
						<label for="num" class="form-label">Number</label>
						<input name="num" type="text" class="form-control" id="num">
					</div>
					<div class="mb-3"><!-- TEXT -->
						<label for="text" class="form-label">Text</label>
						<input name="text" type="text" class="form-control" id="text">
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