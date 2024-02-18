<?php
session_start();
require '../dashboard_includes/header.php'; ?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header bg-primary">
				<h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">Add Team Member</h2>
			</div>
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="post_team_member.php" method="POST" enctype="multipart/form-data">
					<div class="mb-3"><!-- NICK NAME -->
						<label for="nick_name" class="form-label">Nickname</label>
						<input name="nick_name" type="text" class="form-control" id="nick_name">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3"><!-- FIRST NAME -->
								<label for="first_name" class="form-label">First Name</label>
								<input name="first_name" type="text" class="form-control" id="first_name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3"><!-- LAST NAME -->
								<label for="last_name" class="form-label">Last Name</label>
								<input name="last_name" type="text" class="form-control" id="last_name">
							</div>
						</div>
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