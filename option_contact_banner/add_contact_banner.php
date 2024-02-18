<?php
session_start();
require '../dashboard_includes/header.php'; ?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header bg-primary">
				<h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">Add Contact Banner Content</h2>
			</div>
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="post_contact_banner.php" method="POST" enctype="multipart/form-data">
					<div class="mb-3"><!-- TITLE 1 -->
						<label for="title1" class="form-label">Title-1</label>
						<input name="title1" type="text" class="form-control" id="title1">
					</div>
					<div class="mb-3"><!-- TITLE 2 -->
						<label for="title2" class="form-label">Title-2</label>
						<input name="title2" type="text" class="form-control" id="title2">
					</div>
					<div class="mb-3"><!-- BUTTON TEXT -->
						<label for="btn_text" class="form-label">Button Text</label>
						<input name="btn_text" type="text" class="form-control" id="btn_text">
					</div>
					<div class="mb-3"><!-- IMAGE -->
						<label for="img" class="form-label">Image</label>
						<input name="contact_banner_image" type="file" class="form-control" id="img">
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