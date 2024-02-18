<?php
session_start();
require '../session.php';
require '../db.php';
require '../dashboard_includes/header.php';
$id = $_GET['id'];
$select = "SELECT * FROM subscribe WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);


?>
<!-- START ROW -->
<div class="row">
	<div class="col-md-6 m-auto">
		<div class="card">
			<div class="card-header">
				<h2>Edit Social Account</h2>
			</div>

			<div class="card-body">
				<form action="update_subscribe.php" method="POST">
					<div class="mb-3"><!-- SUBSCRIBED ACCOUNT -->
						<label for="sub" class="form-label">Subscribed Account</label>
						<input value="<?= $after_assoc['id']; ?>" type="hidden" name="id">
						<input value="<?= $after_assoc['sub']; ?>" name="sub" type="text" class="form-control" id="sub">
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