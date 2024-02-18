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
				<form action="post_three_col.php" method="POST">
					<div class="mb-3"><!-- ICON -->
						<label for="icon" class="form-label">FontAwesome Icon Class</label>
						<input name="icon" type="text" class="form-control" id="icon">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3"><!-- TITLE RED -->
								<label for="title_red" class="form-label">Title Red</label>
								<input name="title_red" type="text" class="form-control" id="title_red">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3"><!-- TITLE BLUE -->
								<label for="title_blue" class="form-label">Title Blue</label>
								<input name="title_blue" type="text" class="form-control" id="title_blue">
							</div>
						</div>
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