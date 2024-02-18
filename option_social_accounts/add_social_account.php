<?php
session_start();
require '../dashboard_includes/header.php'; ?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header bg-primary">
				<h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">Add Social Account</h2>
			</div>
			
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="post_social_account.php" method="POST">
					<div class="mb-3"><!-- ACCOUNT NAME -->
						<label for="account_name" class="form-label">Account Name</label>
						<input name="account_name" type="text" class="form-control" id="account_name">
					</div>
					<div class="mb-3"><!-- ICON -->
						<label for="icon" class="form-label">Icon</label>
						<input name="icon" type="text" class="form-control" id="icon">
					</div>
					<div class="mb-3"><!-- LINK -->
						<label for="link" class="form-label">Link</label>
						<input name="link" type="text" class="form-control" id="link">
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