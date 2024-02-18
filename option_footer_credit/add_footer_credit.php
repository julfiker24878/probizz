<?php
session_start();
require '../dashboard_includes/header.php'; ?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header bg-primary">
				<h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">Add Footer Credit</h2>
			</div>
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="post_footer_credit.php" method="POST">
					<div class="mb-3"><!-- CREDIT -->
						<label for="sub_title" class="form-label">Footer Credit</label>
						<input name="credit" type="text" class="form-control" id="sub_title">
					</div>
					<div class="mb-3"><!-- LINK TEXT -->
						<label for="link_text" class="form-label">Link Text</label>
						<input name="link_text" type="text" class="form-control" id="link_text">
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