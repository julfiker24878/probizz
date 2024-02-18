<?php
session_start();
require '../dashboard_includes/header.php'; ?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header bg-primary">
				<h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">Add Banner</h2>
			</div>
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="latest_blog_post.php" method="POST" enctype="multipart/form-data">
					<div class="mb-3"><!-- TITLE -->
						<label for="heading" class="form-label">Title</label>
						<input name="heading" type="text" class="form-control" id="heading">
					</div>
					<div class="mb-3"><!-- DESCRIPTION -->
						<label for="description" class="form-label">Description</label>
						<textarea name="description" class="form-control" id="description" rows="5"></textarea>
					</div>

					<div class="mb-3"><!-- IMAGE -->
						<label for="img" class="form-label">Thumbnail Image</label>
						<input name="banner_image" type="file" class="form-control" id="img">
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