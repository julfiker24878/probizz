<?php
session_start();
require '../dashboard_includes/header.php'; ?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header bg-primary">
				<h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">Add Services</h2>
			</div>
			
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="post_services.php" method="POST">
					<div class="mb-3"><!-- ICON -->
						<label for="icon" class="form-label">FontAwesome Icon Class</label>
						<input name="icon" type="text" class="form-control" id="icon">
					</div>
					<div class="mb-3"><!-- LINK -->
						<label for="link" class="form-label">Title</label>
						<input name="title" type="text" class="form-control" id="link">
					</div>
					<div class="mb-3"><!-- DESCRIPTION -->
						<label for="des" class="form-label">Description</label>
						<textarea name="des" class="form-control" id="des" rows="5"></textarea>
					</div>

					<button type="submit" class="btn btn-primary">Add Service</button>
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