<?php
session_start();
require '../session.php';
require '../db.php';
require '../dashboard_includes/header.php';
$id = $_GET['id'];
$select = "SELECT * FROM contact WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);


?>
<!-- START ROW -->
<div class="row">
	<div class="col-md-6 m-auto">
		<div class="card">
			<div class="card-header">
				<h2>Edit Service</h2>
			</div>

			<div class="card-body">
				<form action="update_contact.php" method="POST">
					<div class="mb-3"><!-- ICON -->
						<label for="icon" class="form-label">Fontawesome Icon Class</label>
						<input value="<?= $after_assoc['id']; ?>" type="hidden" name="id">
						<input value="<?= $after_assoc['icon']; ?>" name="icon" type="text" class="form-control" id="account_name">
					</div>
					<div class="mb-3"><!-- LINK -->
						<label for="icon" class="form-label">Title</label>
						<input value="<?= $after_assoc['title']; ?>" name="title" type="text" class="form-control" id="icon">
					</div>

					<button type="submit" class="btn btn-primary">Save Changes</button>
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