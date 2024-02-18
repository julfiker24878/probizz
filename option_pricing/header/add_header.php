<?php
session_start();
require '../../dashboard_includes/header.php'; ?>

<!-- START ROW -->
<div class="row">
	<div class="col-md-8 m-auto">
		<div class="card">
			<!-- CARD HEADER -->
			<div class="card-header bg-primary">
				<h2 style="color: #fff; font-family: 'Montserrat', sans-serif;">Add Header Content of Pricing Section</h2>
			</div>
			<!-- CARD BODY -->
			<div class="card-body">
				<form action="post_header.php" method="POST">
					<div class="mb-3"><!-- SUB TITLE -->
						<label for="sub_title" class="form-label">Sub Title</label>
						<input name="sub_title" type="text" class="form-control" id="sub_title">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="mb-3"><!-- TITLE RED -->
								<label for="title" class="form-label">Title First Part Red</label>
								<input name="title_red" type="text" class="form-control" id="title">
							</div>
						</div>
						<div class="col-md-6">
							<div class="mb-3"><!-- TITLE BLUE -->
								<label for="title" class="form-label">Title Second Part Blue</label>
								<input name="title_blue" type="text" class="form-control" id="title">
							</div>
						</div>
					</div>
					<div class="mb-3"><!-- DESCRIPTION -->
						<label for="des" class="form-label">Description</label>
						<textarea name="des" class="form-control" id="description" rows="5"></textarea>
					</div>

					<button type="submit" class="btn btn-primary">Add</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- END ROW -->

<?php require '../../dashboard_includes/footer.php'; ?>

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