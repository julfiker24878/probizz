<?php
session_start();
require '../dashboard_includes/header.php'; ?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-6 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header bg-primary">
				<h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">Add Team Member</h2>
			</div>
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="post_testimonial.php" method="POST" enctype="multipart/form-data">
					<select name="review" class="form-select" aria-label="Default select example">
						<option selected>-- Give Rating --</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
					<div class="mb-3 mt-3"><!-- COMMENT -->
						<label for="comment" class="form-label">Comment</label>
						<textarea name="comment" class="form-control" id="comment" rows="6"></textarea>
					</div>
					<div class="mb-3"><!-- NAME -->
						<label for="name" class="form-label">Name</label>
						<input name="name" type="text" class="form-control" id="name">
					</div>
					<div class="mb-3"><!-- DESIGNATION -->
						<label for="designation" class="form-label">Designation</label>
						<input name="designation" type="text" class="form-control" id="designation">
					</div>
					<div class="mb-3"><!-- PROFILE IMAGE -->
						<label for="img" class="form-label">Profile Image</label>
						<input name="profile_image" type="file" class="form-control" id="img">
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